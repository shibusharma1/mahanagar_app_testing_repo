@extends('layout.app')
@section('title', 'Register')
@section('content')

<div class="auth-wrapper">
  <div class="auth-box">
    <h2 class="auth-title text-center">Create Your Account</h2>
    <p class="auth-subtitle text-center">Join us to access more features!</p>

    <form id="registerForm" method="POST" action="{{ route('register') }}">
      @csrf

      <!-- Full Name -->
      <div class="mb-3">
        <label for="fullName" class="form-label auth-label">Full Name</label>
        <input type="text" class="form-control auth-input" id="fullName" name="name_en" value="{{ old('name_en') }}" required>
        @error('name_en')
          <small class="text-danger">{{ $message }}</small>
        @enderror
      </div>

      <!-- Email -->
      <div class="mb-3">
        <label for="email" class="form-label auth-label">Email Address</label>
        <input type="email" class="form-control auth-input" id="email" name="email" value="{{ old('email') }}" required>
        @error('email')
          <small class="text-danger">{{ $message }}</small>
        @enderror
      </div>

      <!-- Contact -->
      <div class="mb-3">
        <label for="contact" class="form-label auth-label">Contact Number</label>
        <input type="tel" class="form-control auth-input" id="contact" name="phone" value="{{ old('phone') }}" pattern="[0-9]{10}" required>
        @error('phone')
          <small class="text-danger">{{ $message }}</small>
        @enderror
      </div>

      <!-- Password -->
      <div class="mb-3 position-relative">
        <label for="password" class="form-label auth-label">Password</label>
        <div class="input-group">
          <input type="password" class="form-control auth-input" id="password" name="password" required>
          <button type="button" class="btn btn-outline-secondary toggle-password" data-target="password">
            <i class="bi bi-eye-slash" id="toggleIconPassword"></i>
          </button>
        </div>
        @error('password')
          <small class="text-danger d-block mt-1">{{ $message }}</small>
        @enderror
      </div>

      <!-- Confirm Password -->
      <div class="mb-4 position-relative">
        <label for="confirmPassword" class="form-label auth-label">Confirm Password</label>
        <div class="input-group">
          <input type="password" class="form-control auth-input" id="confirmPassword" name="password_confirmation" required>
          <button type="button" class="btn btn-outline-secondary toggle-password" data-target="confirmPassword">
            <i class="bi bi-eye-slash" id="toggleIconConfirmPassword"></i>
          </button>
        </div>
      </div>

      <button type="submit" class="btn auth-btn w-100">Register</button>
    </form>

    <p class="auth-link mt-3 text-center">
      Already have an account? <a href="{{ route('login') }}">Login here</a>
    </p>
  </div>
</div>


<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
  let registerFormData = {
      name_en: '',
      email: '',
      phone: '',
      password: '',
      password_confirmation: '',
    };
  
    const form = document.getElementById('registerForm');
    ['fullName', 'email', 'contact', 'password', 'confirmPassword'].forEach(id => {
      const input = document.getElementById(id);
      input.addEventListener('input', e => {
        const nameMap = {
          fullName: 'name_en',
          contact: 'phone',
          confirmPassword: 'password_confirmation'
        };
        const key = nameMap[e.target.id] || e.target.name;
        registerFormData[key] = e.target.value;
      });
    });
  
    form.addEventListener('submit', function (e) {
      e.preventDefault();
  
      if (registerFormData.password !== registerFormData.password_confirmation) {
        Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: 'Passwords do not match!',
        });
        return;
      }

    //  Submit form if everything is valid
    form.submit();
  });

  // Toggle password visibility
  document.querySelectorAll('.toggle-password').forEach(btn => {
    btn.addEventListener('click', function () {
      const targetId = this.getAttribute('data-target');
      const input = document.getElementById(targetId);
      const icon = this.querySelector('i');

      if (input.type === "password") {
        input.type = "text";
        icon.classList.remove('bi-eye-slash');
        icon.classList.add('bi-eye');
      } else {
        input.type = "password";
        icon.classList.remove('bi-eye');
        icon.classList.add('bi-eye-slash');
      }
    });
  });
</script>

@endsection
