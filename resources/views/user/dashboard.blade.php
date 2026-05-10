@extends('layout.app')
@section('title', 'Welcome to Your Dashboard')
@section('content')
@if(session('error'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        {{ session('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<!-- Dashboard Content -->
<div class="container my-4">
  <h3 class="text-primary"> Scholarship for SEE Graduates - 2082</h3>
  <p>
    Biratnagar Metropolitan City is offering a golden opportunity for SEE graduates (2081 batch) to pursue their higher education (+2) with financial assistance.
  </p>

  <div class="card mb-3">
    <div class="card-body">
      <h5 class="card-title">Eligibility Criteria:</h5>
      <ul>
        <li>Must be a permanent resident of Biratnagar Metropolitan City.</li>
        <li>Must have passed SEE in 2081 with commendable results.</li>
        <li>Should have a valid recommendation letter from the concerned ward.</li>
      </ul>
    </div>
  </div>

  <div class="card mb-3">
    <div class="card-body">
      <h5 class="card-title">How to Apply:</h5>
      <ol>
        <li>Fill out the online scholarship form available at <a href="#">biratnagarmun.gov.np</a></li>
        <li>Submit scanned documents: SEE marksheet, citizenship, recommendation letter, photo.</li>
        <li>Deadline: <strong>Shrawan 15, 2082 <strong></li>
      </ol>
    </div>
  </div>

  <div class="alert alert-info">
    For more information, contact the Education Department of Biratnagar Metropolitan City.
  </div>
</div>
@endsection
