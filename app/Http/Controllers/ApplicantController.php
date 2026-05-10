<?php
namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Applicant;
use App\Models\Auth\Auth;
use App\Models\CollegeList;
use App\Models\ProvinceData;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Mail\ApplicationSuccess;
use App\Models\ApplicantAddress;
use App\Mail\ApplicationApproved;
use App\Models\ApplicantDocuments;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use App\Models\ApplicantCollegeSelection;

class ApplicantController extends Controller
{
    public function index(Request $request)
    {
        $query = Applicant::with(['user'])
            ->whereNot('status', 0)
            ->when($request->filled('name'), fn($q) => $q->where('name_ne', 'like', "%{$request->name}%"))
            ->when($request->filled('school_name'), fn($q) => $q->where('school_name', 'like', "%{$request->school_name}%"))
            ->when($request->filled('scholarship_group'), fn($q) => $q->where('scholarship_group', $request->scholarship_group))
            ->when($request->filled('status'), fn($q) => $q->where('status', $request->status))
            ->when($request->filled('see_symbol_number'), fn($q) => $q->where('see_symbol_number', 'like', "%{$request->see_symbol_number}%"));

        $applicants = $query->paginate(10)->withQueryString();

        return view('admin.applicants.index', compact('applicants'));
    }

    public function create()
    {
        $user = auth()->user();
        $colleges = CollegeList::all();
        // Try to get applicant record for the logged-in user
        $applicant = $user->applicant;
        // Fetch only the distinct provinces
        $provinces = ProvinceData::select('STATE_CODE', 'STATE_NAME_NEP')
            ->distinct()
            ->get();

        // If applicant exists  
        if ($applicant) {
            // Fetch with relationship if needed for view
            $applicants = Applicant::with('user')->where('user_id', auth()->id())->first();

            // Check status and return appropriate view
            if ($applicant->status == 0) {
                return view('user.applicants.index', compact('user', 'applicants', 'colleges'));
            } else {
                return view('user.applicants.message', compact('user', 'applicants', 'colleges'));
            }
        }

        // No applicant record found, show create page
        return view('user.applicants.create', compact('user', 'provinces', 'colleges'));
    }


    // AJAX endpoint to fetch districts by province
    public function getDistricts($provinceCode)
    {
        $districts = ProvinceData::select('DISTRICT_CODE', 'DISTRICT_NAME_NEP')
            ->where('STATE_CODE', $provinceCode)
            ->distinct()
            ->get();

        return response()->json($districts);
    }

    // AJAX endpoint to fetch local bodies by district
    public function getLocalBodies($districtCode)
    {
        $locals = ProvinceData::select('LOCAL_BODY_CODE', 'LOCAL_BODY_NAME_NEP')
            ->where('DISTRICT_CODE', $districtCode)
            ->distinct()
            ->get();

        return response()->json($locals);
    }




    // Store new applicant with related address & documents
    public function store(Request $request)
    {
        // Check if the authenticated user already has an applicant record
        if (auth()->user()->applicant) {
            return redirect()->back()->with('error', 'You have already submitted an application.');
        }
        // Get the authenticated user
        $user = auth()->user(); // Using the already logged-in user, NOT creating new user

        // Define applicant-specific fields for 'applicants' table
        $applicantFields = [
            'name_ne',
            'image',
            'school_name',
            'scholarship_group',
            'dob_bs',
            'dob_ad',
            'gender',
            'father_name',
            'father_occupation',
            'mother_name',
            'mother_occupation',
            'grandfather_name',
            'grandfather_occupation',
            'family_income_source',
            'family_income_amount',
            'see_school_type',
            'desired_stream',
            'see_symbol_number',
            'see_gpa',
            'see_school_address',
        ];

        // Extract applicant data from request
        $applicantData = $request->only($applicantFields);
        $applicantData['user_id'] = $user->id; // Set foreign key to existing user

        // Handle applicant profile image (optional)
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('applicants/images'), $filename);

            $applicantData['image'] = 'applicants/images/' . $filename; // Save relative path for asset()
        }


        // Create applicant record in 'applicants' table
        $user->applicant()->create($applicantData);

        // Define allowed address fields
        $addressFields = [
            'permanent_province',
            'permanent_district',
            'permanent_municipality',
            'permanent_ward',
            'temporary_province',
            'temporary_district',
            'temporary_municipality',
            'temporary_ward',
        ];

        // Extract address data from request
        $addressData = $request->only($addressFields);

        // Save address related to user (assuming user->address() relation exists)
        $user->address()->create($addressData);

        // Define file fields for document uploads
        $fileFields = [
            'see_gradesheet',
            'community_school_document',
            'citizenship_birth_certificate',
            'disability_id_card',
            'dalit_janjati_recommendation',
            'bipanna_recommendation',
            'physical_disability_certificate',
            'movement_related_certificate',
            'passport_size_photo',
        ];

        $documentData = [];

        // Handle document file uploads
        foreach ($fileFields as $field) {
            if ($request->hasFile($field)) {
                $file = $request->file($field);
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('applicants/documents'), $filename);

                $documentData[$field] = 'applicants/documents/' . $filename; // save relative path
            }
        }


        // Save documents related to user (assuming user->documents() relation exists)
        if (!empty($documentData)) {
            $user->documents()->create($documentData);
        }


        // Optional: Clear old selections
        $user->collegeSelections()->detach();

        for ($i = 1; $i <= 5; $i++) {
            $collegeId = $request->input('priority' . $i);

            if ($collegeId) {
                $user->collegeSelections()->attach($collegeId, [
                    'priority' => $i
                ]);
            }
        }



        // dd($request->all());
        // Mail::to($user->email)->send(new ApplicationSuccess($user));
        return redirect()->route('applicants.show', $user->id)
    ->with('success', 'आवेदन सफलतापूर्वक पेश गरिएको छ।');

        // return redirect()->back()->with('success', 'Applicant created successfully.');

    }



    // Show form for editing applicant
    public function edit($id)
    {
        $user = auth()->user();

        // Check ownership and fetch applicant with relationships
        $applicant = Applicant::with('user', 'address')->where('id', $id)->where('user_id', $user->id)->firstOrFail();

        $provinces = ProvinceData::select('STATE_CODE', 'STATE_NAME_NEP')->distinct()->get();

        return view('user.applicants.edit', compact('user', 'applicant', 'provinces'));
    }



    // Update applicant data + address + documents
    public function update(Request $request, User $user)
    {
        // Update User table fields only if present in request
        $userFields = ['name_en', 'email', 'phone', 'role'];
        $userData = $request->only($userFields);

        // Handle unique email validation (ignore current user's ID)
        $request->validate([
            'email' => ['required', 'email', Rule::unique('users')->ignore($user->id)]
        ]);

        // Update only the provided user fields (do not touch password)
        $user->update($userData);

        // Update Applicant table fields
        $applicantFields = [
            'name_ne',
            'image',
            'school_name',
            'scholarship_group',
            'dob_bs',
            'dob_ad',
            'gender',
            'father_name',
            'father_occupation',
            'mother_name',
            'mother_occupation',
            'grandfather_name',
            'grandfather_occupation',
            'family_income_source',
            'family_income_amount',
            'see_school_type',
            'desired_stream',
            'see_symbol_number',
            'see_gpa',
            'see_school_address',
        ];
        $applicantData = $request->only($applicantFields);

        // Handle image upload for applicant profile
        $file = $request->file('image');
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('applicants/images'), $filename);
        $applicantData['image'] = 'applicants/images/' . $filename;


        // Update or create applicant record
        $user->applicant()->updateOrCreate(
            ['user_id' => $user->id],
            $applicantData
        );

        // Update Address table fields
        $addressFields = [
            'permanent_province',
            'permanent_district',
            'permanent_municipality',
            'permanent_ward',
            'temporary_province',
            'temporary_district',
            'temporary_municipality',
            'temporary_ward',
        ];
        $addressData = $request->only($addressFields);

        // Update or create address record
        $user->address()->updateOrCreate(
            ['user_id' => $user->id],
            $addressData
        );

        // Update Documents table fields
        $fileFields = [
            'see_gradesheet',
            'community_school_document',
            'citizenship_birth_certificate',
            'disability_id_card',
            'dalit_janjati_recommendation',
            'bipanna_recommendation',
            'physical_disability_certificate',
            'movement_related_certificate',
            'passport_size_photo',
        ];

        $documentData = [];

        foreach ($fileFields as $field) {
            if ($request->hasFile($field)) {
                // Remove old file if exists
                if ($user->documents && $user->documents->$field) {
                    $oldPath = public_path($user->documents->$field);
                    if (file_exists($oldPath)) {
                        unlink($oldPath);
                    }
                }

                $file = $request->file($field);
                $filename = time() . '_' . $field . '_' . $file->getClientOriginalName();
                $file->move(public_path('applicants/documents'), $filename);

                $documentData[$field] = 'applicants/documents/' . $filename; // Save relative path
            }
        }

        // Update or create documents record
        if (!empty($documentData)) {
            $user->documents()->updateOrCreate(
                ['user_id' => $user->id],
                $documentData
            );
        }

        return redirect()->route('applicants.index')->with('success', 'Applicant updated successfully.');
    }

    // Delete applicant and related address/documents (cascade handled by DB)
    public function destroy(User $applicant)
    {
        $applicant->delete();

        return redirect()->route('applicants.index')->with('success', 'Applicant deleted successfully.');
    }
    public function show($id)
    {
        $applicant = Applicant::with('user')->where('user_id', $id)->firstOrFail();

        $user = auth()->user();



        // ✅ Corrected line:
        $selectedColleges = $user->collegeSelections()->orderBy('priority')->get();

        $firstPriorityCollege = $selectedColleges->where('pivot.priority', 1)->first();
        // Assigning school names to variables based on priority
        $school1 = $selectedColleges->firstWhere('pivot.priority', 1)?->school_name ?? null;
        $school2 = $selectedColleges->firstWhere('pivot.priority', 2)?->school_name ?? null;
        $school3 = $selectedColleges->firstWhere('pivot.priority', 3)?->school_name ?? null;
        $school4 = $selectedColleges->firstWhere('pivot.priority', 4)?->school_name ?? null;
        $school5 = $selectedColleges->firstWhere('pivot.priority', 5)?->school_name ?? null;


        $provinces = ProvinceData::select('STATE_CODE', 'STATE_NAME_NEP')->distinct()->get();
        $districts = ProvinceData::select('DISTRICT_CODE', 'DISTRICT_NAME_NEP')->distinct()->get();
        $locals = ProvinceData::select('LOCAL_BODY_CODE', 'LOCAL_BODY_NAME_NEP')->distinct()->get();

        $provinceMap = $provinces->pluck('STATE_NAME_NEP', 'STATE_CODE');
        $districtMap = $districts->pluck('DISTRICT_NAME_NEP', 'DISTRICT_CODE');
        $localMap = $locals->pluck('LOCAL_BODY_NAME_NEP', 'LOCAL_BODY_CODE');

        if (!$applicant) {
            return redirect()->back()->with('error', 'You haven\'t applied yet. Please apply first.');
        }


        return view('user.applicants.show', compact('applicant', 'provinceMap', 'districtMap', 'localMap', 'firstPriorityCollege', 'school1', 'school2', 'school3', 'school4', 'school5'));

    }
    public function toggleStatus($id)
    {
        $applicant = Applicant::where('id', $id)
            ->where('user_id', auth()->id())
            ->firstOrFail();

        $applicant->status = 1;
        $applicant->save();

        return redirect()->route('applicants.create')->with('success', 'Application submitted successfully.');
    }
    public function adminToggleStatus($id)
    {
        $applicant = Applicant::where('id', $id)->firstOrFail();

        $applicant->status = 2;
        $applicant->save();
        // After setting applicant status to approved (e.g., status = 2)
        if ($applicant->status == 2) {
            Mail::to($applicant->user->email)->send(new ApplicationApproved($applicant->user));
        }


        return redirect()->route('applicants.index')->with('success', 'Application approved successfully.');
    }
    public function showUserColleges()
    {

        return view('user.selected-colleges', compact('selectedColleges', 'firstPriorityCollege'));
    }



}



?>