@extends('layout.admin.app')
@section('title', 'Settings')
@section('content')
<div id="content">
    
    <!-- Content Wrapper -->
    <div class="content-wrapper">
            <div class="page-header d-flex justify-content-between align-items-center mb-3">
            <h2 class="page-title m-0">Setting</h2>
            {{-- <a href="{{ route('admins.create') }}" class="btn btn-primary">Add</a> --}}
        </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

<form action="{{ url('/settings-update') }}" method="POST" enctype="multipart/form-data" class="bg-white p-4 rounded shadow-sm border">
    @csrf

    {{-- Application Info --}}
    <div class="mb-4 p-3 border rounded bg-light">
        <h5 class="text-primary mb-3 fw-semibold border-bottom pb-2">Application Info</h5>
        <div class="row g-3">
            <div class="col-md-6">
                <label class="form-label">App Name</label>
                <input type="text" name="app_name" class="form-control" value="{{ old('app_name', $setting->app_name) }}" required>
            </div>
            <div class="col-md-3">
                <label class="form-label">Logo</label>
                <input type="file" name="logo" class="form-control">
                @if($setting->logo)
                    <div class="mt-2">
                        <img src="{{ asset($setting->logo) }}" style="height: 60px;" class="border rounded shadow-sm" alt="Logo">
                    </div>
                @endif
            </div>
            <div class="col-md-3">
                <label class="form-label">Fav Icon</label>
                <input type="file" name="fav_icon" class="form-control">
                @if($setting->fav_icon)
                    <div class="mt-2">
                        <img src="{{ asset($setting->fav_icon) }}" style="height: 32px;" class="border rounded shadow-sm" alt="Fav Icon">
                    </div>
                @endif
            </div>
        </div>
    </div>

    {{-- Mail Configuration --}}
    <div class="mb-4 p-3 border rounded bg-light">
        <h5 class="text-primary mb-3 fw-semibold border-bottom pb-2">Mail Configuration</h5>
        <div class="row g-3">
            <div class="col-md-3">
                <label class="form-label">Mail Mailer</label>
                <input type="text" name="mail_mailer" class="form-control" value="{{ old('mail_mailer', $setting->mail_mailer) }}">
            </div>
            <div class="col-md-3">
                <label class="form-label">SMTP Host</label>
                <input type="text" name="smtp_host" class="form-control" value="{{ old('smtp_host', $setting->smtp_host) }}">
            </div>
            <div class="col-md-2">
                <label class="form-label">Port</label>
                <input type="text" name="smtp_port" class="form-control" value="{{ old('smtp_port', $setting->smtp_port) }}">
            </div>
            <div class="col-md-4">
                <label class="form-label">Username</label>
                <input type="text" name="smtp_username" class="form-control" value="{{ old('smtp_username', $setting->smtp_username) }}">
            </div>
            <div class="col-md-4">
                <label class="form-label">Password</label>
                <input type="password" name="smtp_password" class="form-control" value="{{ old('smtp_password', $setting->smtp_password) }}">
            </div>
            <div class="col-md-4">
                <label class="form-label">Encryption</label>
                <input type="text" name="smtp_encryption" class="form-control" value="{{ old('smtp_encryption', $setting->smtp_encryption) }}">
            </div>
            <div class="col-md-4">
                <label class="form-label">From Address</label>
                <input type="email" name="smtp_from_address" class="form-control" value="{{ old('smtp_from_address', $setting->smtp_from_address) }}">
            </div>
            <div class="col-md-4">
                <label class="form-label">From Name</label>
                <input type="text" name="smtp_from_name" class="form-control" value="{{ old('smtp_from_name', $setting->smtp_from_name) }}">
            </div>
        </div>
    </div>

    {{-- Other Info --}}
    <div class="mb-4 p-3 border rounded bg-light">
        <h5 class="text-primary mb-3 fw-semibold border-bottom pb-2">Other Info</h5>
        <div class="row g-3">
            <div class="col-md-6">
                <label class="form-label">Footer Text</label>
                <textarea name="footer_text" class="form-control" rows="2">{{ old('footer_text', $setting->footer_text) }}</textarea>
            </div>
            <div class="col-md-3">
                <label class="form-label">Contact Email</label>
                <input type="email" name="contact_email" class="form-control" value="{{ old('contact_email', $setting->contact_email) }}">
            </div>
            <div class="col-md-3">
                <label class="form-label">Contact Phone</label>
                <input type="text" name="contact_phone" class="form-control" value="{{ old('contact_phone', $setting->contact_phone) }}">
            </div>
        </div>
    </div>

    <div class="text-end">
        <button class="btn btn-primary px-4"> Save Settings</button>
    </div>
</form>

</div>
</div>
@endsection
