@extends('layout.app')
@section('title', '404 Not Found')
@section('content')
<div class="d-flex align-items-center justify-content-center vh-50 p-5">
  <div class="text-center px-4">
    <div class="mb-4">
      <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" class="bi bi-exclamation-triangle-fill text-warning" viewBox="0 0 16 16">
        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.964 0L.165 13.233c-.457.778.091 1.767.982 1.767h13.706c.89 0 1.438-.99.982-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
      </svg>
    </div>
    <h1 class="display-1 fw-bold">404</h1>
    <p class="fs-4">Oops! The page you’re looking for doesn’t exist.</p>
    <a href="{{ url('/')}}" class="btn btn-dark fw-semibold rounded-pill px-4 py-2 mt-3">
      Back to Home
    </a>
  </div>
</div>
@endsection