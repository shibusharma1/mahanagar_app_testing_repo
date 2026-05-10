<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm px-3">
    <a class="navbar-brand fw-bold" href="#"></a>

    <!-- Hamburger -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Nav Items -->
    <div class="collapse navbar-collapse align-items-center" id="navbarMenu">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

            <li class="nav-item">
                <a class="nav-link" href="{{ route('user.dashboard')}}">Home</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('applicants.create')}}">Apply for Schoolarship</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" target="_blank" href="{{ route('applicants.show', Auth::user()->id) }}">Schoolarship Status</a>
            </li>

            {{-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Introduction</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Overview</a></li>
                    <li><a class="dropdown-item" href="#">History</a></li>
                </ul>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Notice / Information</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Notices</a></li>
                </ul>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">महाशाखा</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">महाशाखा 1</a></li>
                </ul>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Program / Project</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Projects</a></li>
                </ul>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">Gallery</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
            </li> --}}
        </ul>

        <!-- User Dropdown -->
        <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="userDropdown"
                    data-bs-toggle="dropdown">
                    @php
                    $user = Auth::user();
                    $photo = $user->applicantDocuments->passport_photo ?? null;
                    @endphp
                    
                    <img src="{{ Auth::user()->image ? asset( Auth::user()->image ) : asset('Biratnagar_logo.png') }}" alt="{{ Auth::user()->name_en }}"
                        class="user-img me-2" />
                    <span>{{ Auth::user()->name_en }}</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="{{ route('profile') }}">Profile</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="{{ route('logout')}}">Logout</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>