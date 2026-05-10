@extends('layout.app')
@section('title', 'Applications Details')

@section('content')
<div class="container my-4">
    <div class="card shadow rounded">
        <div class="card-header text-black bg-light">
            <h5 class="mb-0">Registered Application</h5>
        </div>

        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-bordered table-hover mb-0">
                    <thead class="table-light text-center">
                        <tr>
                            <th>#</th>
                            <th>Full Name (नेपाली)</th>
                            <th>School</th>
                            <th>Scholarship Group</th>
                            <th>Gender</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    @php
                    $firstPriorityCollege = $user->collegeSelections->where('pivot.priority', 1)->first();
                    @endphp

                    <tbody>
                        {{-- @forelse($applicantss as $index => $applicants) --}}
                        <tr class="align-middle text-center">
                            <td>1</td>
                            <td>{{ $applicants->name_ne ?? 'N/A' }}</td>
                            {{-- <td>{{ $school_name ?? 'N/A' }}</td> --}}
                            <td>{{ $firstPriorityCollege->school_name ?? 'N/A' }}</td>
                            <td class="text-capitalize">{{ $applicants->scholarship_group ?? 'N/A' }}</td>
                            <td>
                                @if($applicants->gender == 0)
                                पुरुष
                                @elseif($applicants->gender == 1)
                                महिला
                                @else
                                अन्य
                                @endif
                            </td>
                            <td>
                                @if($applicants->status == 2)
                                <span class="badge bg-success">स्वीकृत</span>
                                @else
                                <span class="badge bg-warning text-dark">प्रतीक्षारत</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('applicants.show', Auth::user()->id) }}" target="_blank"
                                    class="btn btn-sm btn-outline-primary">
                                    Preview
                                </a>
                            </td>
                        </tr>
                        {{-- @empty
                        <tr>
                            <td colspan="7" class="text-center text-muted py-4">No applicants found.</td>
                        </tr> --}}
                        {{-- @endforelse --}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection