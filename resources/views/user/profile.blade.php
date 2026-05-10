@extends('layout.app')
@section('title', 'User Profile')
@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">

            {{-- Success and Error Messages --}}
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif
            @if(session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            <div class="card border-0 shadow-sm">
                <div class="card-header text-black bg-light fw-semibold fs-5">
                    <i class="bi bi-person-circle me-2"></i> User Profile
                </div>

                <div class="card-body">
                    <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <!-- User Photo with Change Button -->
                        <div class="text-center mb-4">
                            <img src="{{ $user->image ?? asset('Biratnagar_logo.png') }}" 
                                 alt="User Photo"
                                 class="rounded-circle shadow-sm border border-2 border-light" 
                                 width="120" height="120">
                            <div class="mt-2">
                                <label class="btn btn-sm btn-outline-secondary">
                                    Change Photo <input type="file" name="image" class="d-none">
                                </label>
                                @error('photo') <div class="text-danger small">{{ $message }}</div> @enderror
                            </div>
                        </div>

                        <!-- Name -->
                        <div class="mb-3">
                            <label class="form-label">Full Name (English)</label>
                            <input type="text" name="name_en" value="{{ old('name_en', $user->name_en) }}" 
                                   class="form-control @error('name_en') is-invalid @enderror" required>
                            @error('name_en') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>

                        <!-- Email -->
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" value="{{ old('email', $user->email) }}" 
                                   class="form-control @error('email') is-invalid @enderror" required>
                            @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>

                        <!-- Phone -->
                        <div class="mb-3">
                            <label class="form-label">Phone</label>
                            <input type="text" name="phone" value="{{ old('phone', $user->phone) }}" 
                                   class="form-control @error('phone') is-invalid @enderror">
                            @error('phone') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>

                        <!-- Password -->
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">New Password</label>
                                <input type="password" name="password" 
                                       class="form-control @error('password') is-invalid @enderror">
                                @error('password') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Confirm Password</label>
                                <input type="password" name="password_confirmation" class="form-control">
                            </div>
                        </div>

                        <!-- Submit -->
                        <div class="d-grid">
                            <button class="btn btn-primary" type="submit">
                                <i class="bi bi-check-circle me-1"></i> Update Profile
                            </button>
                        </div>
                    </form>
                </div>

                <div class="card-footer bg-light text-muted text-end small">
                    Role: 
                    @if($user->role == 0) Superadmin
                    @elseif($user->role == 1) Admin
                    @else User
                    @endif |
                    Status: {{ $user->is_active ? 'Active' : 'Inactive' }}
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
