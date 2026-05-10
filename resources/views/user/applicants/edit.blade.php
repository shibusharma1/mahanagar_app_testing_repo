@extends('layout.app')

@section('title', 'छात्रवृत्तिको लागि दरखास्त फारम')
@section('content')
<!DOCTYPE html>
<html lang="ne">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>छात्रवृत्तिको लागि दरखास्त फारम</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    xintegrity="sha384-QWTKZyjpPEjLsjZzGfkkFUwyx2FwaSMGgDqFwRWnIkhA2jYw5z5h1a4zH5q" crossorigin="anonymous">
  <!-- Google Fonts for Inter (Optional, but good for consistency) -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/schoolarshipform.css') }}">
</head>

<body>
  <div class="container form-container">
    <h2 class="text-center mb-4" style="font-size: 1.875rem; margin-top: -0.5rem;color:#114499;">छात्रवृत्तिको लागि
      दरखास्त फारम</h2>

    <p class="mb-4 text-secondary text-justify" style="font-size: 0.875rem;">
      विराटनगर महानगरपालिका शिक्षा ऐन, २०७६ को दफा ४४ को उपदफा (२), (३) र (४) मा भएको व्यवस्था, अनिवार्य तथा निःशुल्क
      शिक्षा
      ऐन, २०७५, शिक्षा ऐन २०२८ (संशोधन सहित) तथा अन्य प्रचलित कानूनमा भएको व्यवस्था बमोजिमको कक्षा ११ र १२ मा
      निजी/संस्थागत विद्यालयबाट विद्यार्थीहरूको लागि प्रदान गरिने छात्रवृत्ति कार्यक्रममा म सम्मिलित हुन ईच्छुक भएकोले
      छात्रवृत्तिको लागि
      फारम भरी आवश्यक प्रमाण तथा कागजातहरू यसैसाथ संलग्न गरी पेश गरेको छु।
    </p>

    <!-- Progress Indicator -->
    <div class="text-center mb-4 text-muted" style="font-size: 0.875rem; font-weight: 500;">
      Step <span id="currentStepDisplay">1</span> of <span id="totalStepsDisplay">5</span>
    </div>
    <div class="progress-bar-custom mb-4">
      <div id="progressBarFill" class="progress-bar-fill" style="width: 20%;"></div>
    </div>
    {{-- <div class="text-center mb-3 text-muted" style="font-size: 0.875rem; font-weight: 500;">
      Step <span id="currentStepDisplay">1</span> of <span id="totalStepsDisplay">5</span>
    </div>

    <div class="step-progressbar mb-4 d-flex justify-content-between align-items-center">
      <div class="step" data-step="1">1</div>
      <div class="step" data-step="2">2</div>
      <div class="step" data-step="3">3</div>
      <div class="step" data-step="4">4</div>
      <div class="step" data-step="5">5</div>
    </div> --}}

    @if(session('error'))
    <div class="alert alert-danger">
      {{ session('error') }}
    </div>
    @endif

    @if(session('success'))
    <div class="alert alert-success">
      {{ session('success') }}
    </div>
    @endif
    <form id="scholarshipForm" action="{{ url('applicants/store')}}" method="POST" enctype="multipart/form-data">
      @csrf
      <!-- Step 1: Personal Details -->
      <div id="step1" class="step-content active">
        <h3 class="section-heading">१. विद्यार्थीको व्यक्तिगत विवरण</h3>
        <div class="form-group-flex">
          <label for="student_name_nepali" class="form-label-custom">१. विद्यार्थीको पूरा नाम, थर (देवनागरीमा):</label>
          <input type="text" id="student_name_nepali" name="name_ne" class="form-control form-control-custom" required>
        </div>
        <div class="form-group-flex">
          <label for="student_name_english" class="form-label-custom">२. NAME IN ENGLISH (IN BLOCK LETTER):</label>
          <input type="text" id="student_name_english" name="name_en" class="form-control form-control-custom"
            style="text-transform: uppercase;" value="{{ $user->name_en }}" required>
        </div>
        <div class="form-group-flex">
          <label for="desired_school" class="form-label-custom">३. अध्ययन गर्न चाहेको विद्यालयको नामः</label>
          <input type="text" id="desired_school" name="school_name" class="form-control form-control-custom" required>
        </div>

        {{-- <div class="form-group-flex" style="align-items: flex-start;">
          <label class="form-label-custom">४. छात्रवृत्तिको लागि आवेदन दिन चाहेको समूह (कुनै एकमा मात्र चिन्ह
            लगाउने):</label>
          <div class="radio-group-flex">
            <div class="form-check">
              <input class="form-check-input form-check-input-custom" type="radio" name="scholarshipGroup" id="group1"
                value="Madhesh Aandolan Ghayal Santati" required>
              <label class="form-check-label" for="group1" style="font-size: 0.875rem;">मधेश आन्दोलनका घाईतेका
                सन्तति</label>
            </div>
            <div class="form-check">
              <input class="form-check-input form-check-input-custom" type="radio" name="scholarshipGroup" id="group2"
                value="Wepata Paribar Santati">
              <label class="form-check-label" for="group2" style="font-size: 0.875rem;">वेपत्ता परिवारको सन्तति</label>
            </div>
            <div class="form-check">
              <input class="form-check-input form-check-input-custom" type="radio" name="scholarshipGroup" id="group3"
                value="Jehendar">
              <label class="form-check-label" for="group3" style="font-size: 0.875rem;">जेहेन्दार</label>
            </div>
            <div class="form-check">
              <input class="form-check-input form-check-input-custom" type="radio" name="scholarshipGroup" id="group4"
                value="Vipannata">
              <label class="form-check-label" for="group4" style="font-size: 0.875rem;">विपन्नता</label>
            </div>
            <div class="form-check">
              <input class="form-check-input form-check-input-custom" type="radio" name="scholarshipGroup" id="group5"
                value="Janajati">
              <label class="form-check-label" for="group5" style="font-size: 0.875rem;">जनजाति</label>
            </div>
            <div class="form-check">
              <input class="form-check-input form-check-input-custom" type="radio" name="scholarshipGroup" id="group6"
                value="Apanga">
              <label class="form-check-label" for="group6" style="font-size: 0.875rem;">अपाङ्ग</label>
            </div>
            <div class="form-check">
              <input class="form-check-input form-check-input-custom" type="radio" name="scholarshipGroup" id="group7"
                value="Jana Aandolan Ghayal Sahid Paribar Santati">
              <label class="form-check-label" for="group7" style="font-size: 0.875rem;">जन आन्दोलनमा घाईते शहिद परिवारको
                सन्तति</label>
            </div>
            <div class="form-check">
              <input class="form-check-input form-check-input-custom" type="radio" name="scholarshipGroup" id="group8"
                value="Dalit">
              <label class="form-check-label" for="group8" style="font-size: 0.875rem;">दलित</label>
            </div>
          </div>
        </div> --}}
        <div class="form-group-flex" style="align-items: flex-start;">
          <label class="form-label-custom">
            ४. छात्रवृत्तिको लागि आवेदन दिन चाहेको समूह (कुनै एकमा मात्र चिन्ह लगाउनुहोस्):
          </label>
          <div class="radio-group-flex">
            <div class="form-check">
              <input class="form-check-input form-check-input-custom" type="radio" name="scholarship_group" id="madhesi"
                value="madhesi">
              <label class="form-check-label" for="madhesi" style="font-size: 0.875rem;">मधेसी आन्दोलनका घाइतेका
                सन्तति</label>
            </div>
            <div class="form-check">
              <input class="form-check-input form-check-input-custom" type="radio" name="scholarship_group" id="vepata"
                value="vepata">
              <label class="form-check-label" for="vepata" style="font-size: 0.875rem;">वेपत्ता परिवारका सन्तति</label>
            </div>
            <div class="form-check">
              <input class="form-check-input form-check-input-custom" type="radio" name="scholarship_group"
                id="jehendar" value="jehendar">
              <label class="form-check-label" for="jehendar" style="font-size: 0.875rem;">जेहेदार</label>
            </div>
            <div class="form-check">
              <input class="form-check-input form-check-input-custom" type="radio" name="scholarship_group" id="bipanna"
                value="bipanna">
              <label class="form-check-label" for="bipanna" style="font-size: 0.875rem;">विपन्नता</label>
            </div>
            <div class="form-check">
              <input class="form-check-input form-check-input-custom" type="radio" name="scholarship_group" id="janjati"
                value="janjati">
              <label class="form-check-label" for="janjati" style="font-size: 0.875rem;">जनजाति</label>
            </div>
            <div class="form-check">
              <input class="form-check-input form-check-input-custom" type="radio" name="scholarship_group" id="apanga"
                value="apanga">
              <label class="form-check-label" for="apanga" style="font-size: 0.875rem;">अपाङ्गता</label>
            </div>
            <div class="form-check">
              <input class="form-check-input form-check-input-custom" type="radio" name="scholarship_group" id="shahid"
                value="shahid">
              <label class="form-check-label" for="shahid" style="font-size: 0.875rem;">शहिद परिवारका सन्तति</label>
            </div>
            <div class="form-check">
              <input class="form-check-input form-check-input-custom" type="radio" name="scholarship_group" id="dalit"
                value="dalit">
              <label class="form-check-label" for="dalit" style="font-size: 0.875rem;">दलित</label>
            </div>
          </div>
        </div>


        <div class="form-group-flex">
          {{-- <label class="form-label-custom">५. जन्म मिति:</label>
          <div class="d-flex w-100 align-items-center">
            <label for="dob_bs" class="form-label mb-0 me-2" style="font-size: 0.875rem;">वि.सं.</label>
            <input type="date" id="dob_bs" name="dob_bs" class="form-control form-control-custom me-3"
              placeholder="YYYY/MM/DD (BS)" pattern="\d{4}/\d{2}/\d{2}" max="{{ date('Y-m-d') }}" required>
            <label for="dob_ad" class="form-label mb-0 me-2" style="font-size: 0.875rem;">ई. सं.</label>
            <input type="date" id="dob_ad" name="dob_ad" class="form-control form-control-custom"
              placeholder="YYYY/MM/DD (AD)" pattern="\d{4}/\d{2}/\d{2}" max="{{ date('Y-m-d') }}" required>
          </div> --}}
          <label class="form-label-custom">५. जन्म मिति:</label>
          <div class="d-flex w-100 align-items-center">
            <label for="dob_bs" class="form-label mb-0 me-2" style="font-size: 0.875rem;">वि.सं.</label>
            <input type="date" id="dob_bs" name="dob_bs" class="form-control form-control-custom me-3" required>

            <label for="dob_ad" class="form-label mb-0 me-2" style="font-size: 0.875rem;">ई. सं.</label>
            <input type="date" id="dob_ad" name="dob_ad" class="form-control form-control-custom" required>
          </div>

        </div>

        <div class="form-group-flex">
          <label class="form-label-custom">६. लिङ्गः</label>
          <div class="radio-group-flex-gender">
            <div class="form-check">
              <input class="form-check-input form-check-input-custom" type="radio" name="gender" id="gender_male"
                value="0" required>
              <label class="form-check-label" for="gender_male" style="font-size: 0.875rem;">पुरुष</label>
            </div>
            <div class="form-check">
              <input class="form-check-input form-check-input-custom" type="radio" name="gender" id="gender_female"
                value="1">
              <label class="form-check-label" for="gender_female" style="font-size: 0.875rem;">महिला</label>
            </div>
            <div class="form-check">
              <input class="form-check-input form-check-input-custom" type="radio" name="gender" id="gender_other"
                value="2">
              <label class="form-check-label" for="gender_other" style="font-size: 0.875rem;">अन्य</label>
            </div>
          </div>
        </div>
      </div>

      <!-- Step 2: Address Details -->
      <div id="step2" class="step-content">
        <h3 class="section-heading">७. ठेगानाः</h3>
        <div class="border border-gray-200 p-4 rounded-lg bg-light mb-4 shadow-sm">
          <h4 class="sub-section-heading">क) स्थायी:</h4>
          <div class="form-group-flex">
            <label for="perm_province" class="form-label-custom" style="min-width: 9rem;">क) प्रदेशः</label>
            <input type="text" id="perm_province" name="permanent_province" class="form-control form-control-custom"
              required>
          </div>
          <div class="form-group-flex">
            <label for="perm_district" class="form-label-custom" style="min-width: 9rem;">ख) जिल्लाः</label>
            <input type="text" id="perm_district" name="permanent_district" class="form-control form-control-custom"
              required>
          </div>
          <div class="form-group-flex">
            <label for="perm_local_level" class="form-label-custom" style="min-width: 9rem;">ग) स्थानीय तहः</label>
            <input type="text" id="perm_local_level" name="permanent_municipality"
              class="form-control form-control-custom" required>
          </div>
          <div class="form-group-flex">
            <label for="perm_tole" class="form-label-custom" style="min-width: 9rem;">घ) टोल:</label>
            <input type="text" id="perm_tole" name="permanent_ward" class="form-control form-control-custom" required>
          </div>
        </div>

        <!-- checkbox to mark as same temporary address and permanent address same -->
        <div class="form-check mb-3">
          <input class="form-check-input" type="checkbox" id="sameAddressCheckbox" onclick="copyPermanentToTemporary()">
          <label class="form-check-label" for="sameAddressCheckbox">
            स्थायी ठेगाना अनुसार अस्थायी ठेगाना राख्नुहोस् (Same as Permanent Address)
          </label>
        </div>


        <div class="border border-gray-200 p-4 rounded-lg bg-light mb-4 shadow-sm">
          <h4 class="sub-section-heading">ख) अस्थायी :</h4>
          <div class="form-group-flex">
            <label for="temp_province" class="form-label-custom" style="min-width: 9rem;">क) प्रदेशः</label>
            <input type="text" id="temp_province" name="temporary_province" class="form-control form-control-custom">
          </div>
          <div class="form-group-flex">
            <label for="temp_district" class="form-label-custom" style="min-width: 9rem;">ख) जिल्लाः</label>
            <input type="text" id="temp_district" name="temporary_district" class="form-control form-control-custom">
          </div>
          <div class="form-group-flex">
            <label for="temp_local_level" class="form-label-custom" style="min-width: 9rem;">ग) स्थानीय तहः</label>
            <input type="text" id="temp_local_level" name="temporary_municipality"
              class="form-control form-control-custom">
          </div>
          <div class="form-group-flex">
            <label for="temp_tole" class="form-label-custom" style="min-width: 9rem;">घ) टोल:</label>
            <input type="text" id="temp_tole" name="temporary_ward" class="form-control form-control-custom">
          </div>
        </div>
      </div>

      <!-- Step 3: Family Details -->
      <div id="step3" class="step-content">
        <h3 class="section-heading">पारिवारिक विवरण</h3>
        <div class="form-group-flex">
          <label for="father_name" class="form-label-custom">८. बुवाको नाम, थर:</label>
          <input type="text" id="father_name" name="father_name" class="form-control form-control-custom" required>
        </div>
        <div class="form-group-flex">
          <label for="father_occupation" class="form-label-custom" style="padding-left: 1rem;">पेशाः</label>
          <input type="text" id="father_occupation" name="father_occupation" class="form-control form-control-custom"
            required>
        </div>
        <div class="form-group-flex">
          <label for="mother_name" class="form-label-custom">९. आमाको नाम, थर :</label>
          <input type="text" id="mother_name" name="mother_name" class="form-control form-control-custom" required>
        </div>
        <div class="form-group-flex">
          <label for="mother_occupation" class="form-label-custom" style="padding-left: 1rem;">पेशाः</label>
          <input type="text" id="mother_occupation" name="mother_occupation" class="form-control form-control-custom"
            required>
        </div>
        <div class="form-group-flex">
          <label for="grandfather_name" class="form-label-custom">१०. बाजेको नाम, थरः</label>
          <input type="text" id="grandfather_name" name="grandfather_name" class="form-control form-control-custom"
            required>
        </div>
        <div class="form-group-flex">
          <label for="grandfather_occupation" class="form-label-custom" style="padding-left: 1rem;">पेशाः</label>
          <input type="text" id="grandfather_occupation" name="grandfather_occupation"
            class="form-control form-control-custom" required>
        </div>
        <div class="form-group-flex">
          <label for="income_source" class="form-label-custom">११. पारिवारिक आम्दानीको श्रोत:</label>
          <select id="income_source" name="family_income_source" class="form-select form-control-custom" required>
            <option value="">छान्नुहोस्</option>
            <option value="कृषि">कृषि</option>
            <option value="नोकरी">नोकरी</option>
            <option value="व्यापार">व्यापार</option>
            <option value="अन्य">अन्य</option>
          </select>
        </div>
        <div class="form-group-flex">
          <label for="estimated_income" class="form-label-custom">१२. आम्दानीको अनुमानित विवरण रकममा :</label>
          <input type="number" id="family_income_amount" name="family_income_amount"
            class="form-control form-control-custom" min="0" required>
        </div>
        <div class="form-group-flex">
          <label for="student_contact_number" class="form-label-custom">१३) विद्यार्थीको सम्पर्क नम्बरः</label>
          <input type="tel" id="student_contact_number" name="student_contact_number"
            class="form-control form-control-custom" placeholder="eg. 98XXXXXXXX">
        </div>
      </div>

      <!-- Step 4: SEE Academic Details -->
      <div id="step4" class="step-content">
        <h3 class="section-heading">SEE शैक्षिक विवरण</h3>
        <div class="form-group-flex">
          <label for="see_school_type" class="form-label-custom">१४. SEE उत्तीर्ण गरेको विद्यालयको प्रकार
            (सामुदायिक/संस्थागत):</label>
          <select id="see_school_type" name="see_school_type" class="form-select form-control-custom" required>
            <option value="">छान्नुहोस्</option>
            <option value="सामुदायिक">सामुदायिक</option>
            <option value="संस्थागत">संस्थागत</option>
          </select>
        </div>
        <div class="form-group-flex">
          <label for="desired_stream" class="form-label-custom">१५. कक्षा ११ मा अध्ययन गर्न चाहेको विषय
            समूहः</label>
          <input type="text" id="desired_class11_subject" name="desired_stream" class="form-control form-control-custom"
            required>
        </div>
        <div class="form-group-flex">
          <label for="see_symbol_number" class="form-label-custom">१६. SEE को सिम्बल नम्बरः</label>
          <input type="text" id="see_symbol_number" name="see_symbol_number" class="form-control form-control-custom"
            required>
        </div>
        <div class="form-group-flex">
          <label for="see_gpa" class="form-label-custom">१७. SEE मा प्राप्त गरेको जि.पी.ए.:</label>
          <input type="number" id="see_gpa" name="see_gpa" class="form-control form-control-custom" step="0.01" min="0"
            max="4" required>
        </div>
        <div class="form-group-flex" style="align-items: flex-start;">
          <label for="see_school_name_address" class="form-label-custom">१८. SEE उत्तीर्ण गरेको विद्यालयको नाम
            ठेगानाः</label>
          <textarea id="see_school_name_address" name="see_school_address" class="form-control form-control-custom"
            rows="3" style="min-height: 90px; resize: vertical;" required></textarea>
        </div>
        <div class="disclaimer-text">
          <p>उल्लेखित व्यहोरा ठिक साँचो छन्, फरक परे कानून बमोजिम सहुँला, बुझाउँला।</p>
        </div>
      </div>

      <!-- Step 5: Document Uploads -->
      <div id="step5" class="step-content">
        <div class="document-upload-section">
          <h3 class="section-heading">संलग्न गर्नु पर्ने कागजातहरुः (Upload all required documents)</h3>
          <div class="document-upload-grid">
            <!-- SEE Marksheet Copy -->
            <label class="document-upload-label">
              <span>SEE को लब्धाङ्कपत्रको प्रतिलिपि:</span>
              <input type="file" name="see_gradesheet" id="see_gradesheet" accept=".pdf,image/*" required>
              <span id="file_see_gradesheet">Choose file...</span>
            </label>
            <!-- Community School Document -->
            <label class="document-upload-label">
              <span>सामुदायिक विद्यालय कागजात:</span>
              <input type="file" name="community_school_document" id="community_school_document" accept=".pdf,image/*">
              <span id="file_community_school_document">Choose file...</span>
            </label>
            <!-- Citizenship/Birth Certificate Copy -->
            <label class="document-upload-label">
              <span>नागरिकता/जन्म प्रमाणपत्र:</span>
              <input type="file" name="citizenship_birth_certificate" id="citizenship_birth_certificate"
                accept=".pdf,image/*">
              <span id="file_citizenship_birth_certificate">Choose file...</span>
            </label>
            <!-- Disability ID Copy -->
            <label class="document-upload-label">
              <span>अपांगता परिचयपत्र:</span>
              <input type="file" name="disability_id_card" id="disability_id_card" accept=".pdf,image/*">
              <span id="file_disability_id_card">Choose file...</span>
            </label>
            <!-- Dalit/Janajati Recommendation -->
            <label class="document-upload-label">
              <span>दलित/जनजाति सिफारिस:</span>
              <input type="file" name="dalit_janjati_recommendation" id="dalit_janjati_recommendation"
                accept=".pdf,image/*">
              <span id="file_dalit_janjati_recommendation">Choose file...</span>
            </label>
            <!-- Impoverished Recommendation -->
            <label class="document-upload-label">
              <span>विपन्नता सिफारिस:</span>
              <input type="file" name="bipanna_recommendation" id="bipanna_recommendation" accept=".pdf,image/*">
              <span id="file_bipanna_recommendation">Choose file...</span>
            </label>
            <!-- Martyr Children Document -->
            <label class="document-upload-label">
              <span>शहिदका छोराछोरीका लागि प्रमाणपत्र:</span>
              <input type="file" name="martyr_children_document" id="martyr_children_document" accept=".pdf,image/*">
              <span id="file_martyr_children_document">Choose file...</span>
            </label>
            <!-- Movement Victims Document -->
            <label class="document-upload-label">
              <span>आन्दोलनका घाइते/शहिद/वेपत्ता प्रमाणपत्र:</span>
              <input type="file" name="movement_victims_document" id="movement_victims_document" accept=".pdf,image/*">
              <span id="file_movement_victims_document">Choose file...</span>
            </label>
            <!-- Passport Photo -->
            <label class="document-upload-label">
              <span>पासपोर्ट साइज फोटो:</span>
              <input type="file" name="passport_size_photo" id="passport_size_photo" accept="image/*" required>
              <span id="file_passport_size_photo">Choose file...</span>
            </label>
          </div>
          <p class="required-docs-message">
            कृपया माथि उल्लेखित सबै कागजातहरू संलग्न गरी पेस गर्नुहोस्।
          </p>
        </div>
      </div>

      <!-- Navigation Buttons -->
      <div class="d-flex justify-content-between mt-4">
        <button type="button" id="prevButton" class="btn btn-custom btn-prev" style="display: none;">Previous</button>
        <button type="button" id="nextButton" class="btn btn-custom btn-next">Next</button>
        <button type="submit" id="submitButton" class="btn btn-custom btn-next" style="display: none;">Preview</button>
      </div>
    </form>
  </div>

  <!-- Bootstrap JS (optional, for certain components like dropdowns, but good practice) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    xintegrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
  </script>

  <script>
    // Form Data storage
        let formData = {
          name_ne: '',
          name_en: '',
          school_name: '',
          scholarship_group: '',
          dob_bs: '',
          dobAd: '',
          gender: '',
          permanent_province: '',
          permanent_district: '',
          permanent_municipality: '',
          permanent_ward: '',
          temporary_province: '',
          temporary_district: '',
          temporary_municipality: '',
          temporary_ward: '',
          fatherName: '',
          father_occupation: '',
          mother_name: '',
          mother_occupation: '',
          grandfather_name: '',
          grandfather_occupation: '',
          family_income_source: '',
          estimatedIncome: '',
          student_contact_number: '',
          see_school_type: '',
          desiredClass11Subject: '',
          see_symbol_number: '',
          see_gpa: '',
          see_school_address: '',
          // File fields (handled by <input type="file">, not stored in JS, but for completeness)
          see_gradesheet: null,
          community_school_document: null,
          citizenship_birth_certificate: null,
          disability_id_card: null,
          dalit_janjati_recommendation: null,
          bipanna_recommendation: null,
          martyr_children_document: null,
          movement_victims_document: null,
          passport_size_photo: null,
        };

        let currentStep = 1;
        const totalSteps = 5;

        // DOM Elements
        const scholarshipForm = document.getElementById('scholarshipForm');
        const currentStepDisplay = document.getElementById('currentStepDisplay');
        const totalStepsDisplay = document.getElementById('totalStepsDisplay');
        const progressBarFill = document.getElementById('progressBarFill');
        const prevButton = document.getElementById('prevButton');
        const nextButton = document.getElementById('nextButton');
        const submitButton = document.getElementById('submitButton');

        const steps = [];
        for (let i = 1; i <= totalSteps; i++) {
            steps.push(document.getElementById('step' + i));
        }

        // Initialize form fields and UI on load
        document.addEventListener('DOMContentLoaded', () => {
            totalStepsDisplay.textContent = totalSteps;
            updateUI();

            // Attach event listeners to all form inputs
            scholarshipForm.addEventListener('change', (e) => {
                const { name, value, type, files } = e.target;
                if (type === 'file') {
                    // Update the file name display for all file inputs
                    const fileLabel = document.getElementById('file_' + name);
                    if (fileLabel) {
                        fileLabel.textContent = files[0] ? files[0].name : 'Choose file...';
                    }
                } else if (type === 'radio') {
                    formData[name] = value;
                } else {
                    formData[name] = value;
                }
            });

            // Set initial values from formData (if any, though empty initially)
            for (const key in formData) {
                if (key === 'documentsAttached' || key === 'passportPhoto') continue; // Skip file inputs for initial value setting

                const element = scholarshipForm.elements[key];
                if (element) {
                    if (element.type === 'radio') {
                        // Check if radio button matches current formData value
                        Array.from(element).forEach(radio => {
                            radio.checked = formData[key] === radio.value;
                        });
                    } else {
                        element.value = formData[key];
                    }
                }
            }

        });

        function updateUI() {
            // Hide all steps
            steps.forEach(step => step.classList.remove('active'));

            // Show current step
            steps[currentStep - 1].classList.add('active');

            // Update progress bar
            const progress = (currentStep / totalSteps) * 100;
            progressBarFill.style.width = progress + '%';
            currentStepDisplay.textContent = currentStep;

            // Update navigation buttons visibility
            prevButton.style.display = currentStep > 1 ? 'block' : 'none';
            if (currentStep === totalSteps) {
                nextButton.style.display = 'none';
                submitButton.style.display = 'block';
            } else {
                nextButton.style.display = 'block';
                submitButton.style.display = 'none';
            }

            // Scroll to top of the form for better UX
            scholarshipForm.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }

        function validateStep(step) {
            let isValid = true;
            const currentStepElement = steps[step - 1];
            const requiredInputs = currentStepElement.querySelectorAll('[required]');

            for (const input of requiredInputs) {
                if (input.type === 'radio') {
                    const radioGroupName = input.name;
                    const radioGroup = currentStepElement.querySelectorAll('input[name="' + radioGroupName + '"]');
                    const isAnyRadioChecked = Array.from(radioGroup).some(radio => radio.checked);
                    if (!isAnyRadioChecked) {
                        isValid = false;
                        // For radio, we don't apply is-invalid to individual radios, might highlight the group label
                        break; // Exit loop if one required radio group is not checked
                    }
                } else if (input.type === 'file') {
                    if (!formData[input.name] && !formData.documentsAttached[input.name]) {
                        isValid = false;
                        input.classList.add('is-invalid');
                    } else {
                        input.classList.remove('is-invalid');
                    }
                } else {
                    if (!input.value.trim()) {
                        isValid = false;
                        input.classList.add('is-invalid'); // Add Bootstrap's invalid style
                    } else {
                        input.classList.remove('is-invalid');
                    }
                }
            }

            if (!isValid) {
                alert('कृपया सबै अनिवार्य फिल्डहरू भर्नुहोस्। (Please fill all required fields.)');
            }
            return isValid;
        }

        // Navigation Handlers
        nextButton.addEventListener('click', () => {
            if (validateStep(currentStep)) {
                if (currentStep < totalSteps) {
                    currentStep++;
                    updateUI();
                }
            }
        });

        prevButton.addEventListener('click', () => {
            if (currentStep > 1) {
                currentStep--;
                updateUI();
            }
        });

        // Form Submission
        scholarshipForm.addEventListener('submit', (e) => {
            if (!validateStep(totalSteps)) {
                e.preventDefault(); // Prevent submission only if validation fails
            }
        });
  </script>
<!-- Script for initializing datepicker and syncing BS → AD -->
<script>
  window.onload = function () {
    // Initialize Nepali Datepicker
    const bsInput = document.getElementById("dob_bs");
    bsInput.nepaliDatePicker({
      dateFormat: "YYYY-MM-DD",
      closeOnDateSelect: true
    });

    // On BS date change, convert to AD and fill the English input
    bsInput.addEventListener("dateChange", function (e) {
      let bsDate = e.target.value;
      if (bsDate) {
        try {
          const adDate = NepaliFunctions.BS2AD(bsDate); // Convert to AD
          const formatted = adDate.year + '-' + String(adDate.month).padStart(2, '0') + '-' + String(adDate.day).padStart(2, '0');
          document.getElementById("dob_ad").value = formatted;
        } catch (err) {
          console.error("Invalid BS date or conversion error:", err);
        }
      }
    });

    // Optional: Convert AD to BS if needed
    const adInput = document.getElementById("dob_ad");
    adInput.addEventListener("change", function (e) {
      let adDate = e.target.value;
      if (adDate) {
        try {
          const bsDate = NepaliFunctions.AD2BS(adDate);
          const formatted = bsDate.year + '-' + String(bsDate.month).padStart(2, '0') + '-' + String(bsDate.day).padStart(2, '0');
          bsInput.value = formatted;
        } catch (err) {
          console.error("Invalid AD date or conversion error:", err);
        }
      }
    });
  };
</script>
 

  <script src="{{ asset('js/make_addresses_same.js') }}"></script>
  @endsection