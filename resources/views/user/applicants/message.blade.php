@extends('layout.app')

@section('title', 'Application Pending')

@section('content')
@if(session('success'))
<div class="alert alert-success" id="success-alert">
    {{ session('success') }}
</div>
<script>
    setTimeout(function() {
                var alert = document.getElementById('success-alert');
                if(alert) {
                    alert.style.display = 'none';
                }
            }, 2500);
</script>
@endif

@if($applicants->status == 1)
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card border-warning shadow">
                <div class="card-header bg-warning text-dark fw-bold d-flex align-items-center">
                    <i class="bi bi-exclamation-triangle-fill me-2"></i>
                    Application Under Review
                </div>

                <div class="card-body text-center">
                    <img src="{{ asset('pending_review.png') }}" alt="Pending" class="img-fluid mb-4"
                        style="max-height: 200px;">

                    <h4 class="text-dark">Your scholarship application has been submitted successfully.</h4>

                    <p class="text-muted mt-3 mb-4">
                        Thank you for applying for the scholarship program. <br>
                        Your application is currently <strong>under review</strong>.
                    </p>

                    <div class="alert alert-info">
                        Please wait while we verify your information. <br>
                        Once approved, you will be able to download your <strong>Admit Card</strong> and appear in the
                        scholarship exam.
                    </div>
                    {{--
                    <a href="{{ route('home') }}" class="btn btn-outline-primary mt-3">
                        <i class="bi bi-arrow-left"></i> Back to Dashboard
                    </a> --}}
                </div>

                <div class="card-footer text-muted text-center">
                    If you have any questions, please contact support.
                </div>
            </div>

        </div>
    </div>
</div>
@else
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card border-success shadow">
                <div class="card-header bg-success text-white fw-bold d-flex align-items-center">
                    <i class="bi bi-check-circle-fill me-2"></i>
                    Application Approved
                </div>

                <div class="card-body text-center">
                    <img src="{{ asset('approved_success.png') }}" alt="Approved" class="img-fluid mb-4"
                        style="max-height: 200px;">

                    <h4 class="text-success">Congratulations! Your scholarship application has been approved.</h4>

                    <p class="text-muted mt-3 mb-4">
                        You are now eligible to appear in the <strong>Scholarship Examination 2082</strong>.
                    </p>

                    <div class="alert alert-success">
                        Please download and print your <strong>Admit Card</strong> to bring with you on the day of the exam.
                    </div>

                    <a href="{{ route('applicants.show', auth()->user()->id) }}" target="_blank" class="btn btn-outline-success mt-3">
                        <i class="bi bi-printer-fill me-1"></i> Print Admit Card
                    </a>
                </div>

                <div class="card-footer text-muted text-center">
                    Best of luck for your examination!
                </div>
            </div>

        </div>
    </div>
</div>

@endif

@endsection