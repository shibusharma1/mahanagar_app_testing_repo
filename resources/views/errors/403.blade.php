@extends('layout.app')
@section('title', '403 Forbidden')
@section('content')
<div class="text-center mt-5">
    <h2 class="text-danger">403 - Unauthorized</h2>
    <p>You do not have permission to access this page.</p>
    <a href="{{ url('/')}}" class="btn btn-dark fw-semibold rounded-pill px-4 py-2 mt-3">
      Back to Home
    </a>
</div>
@endsection