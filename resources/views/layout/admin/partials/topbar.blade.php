<!-- Topbar -->
<nav class="topbar navbar navbar-expand-lg navbar-light bg-white shadow-sm px-3">
    <div class="container-fluid d-flex justify-content-between align-items-center">

        <!-- Left Section -->
        <div class="d-flex align-items-center">
            {{-- <button type="button" id="sidebarCollapse" class="btn">
                <i class="bi bi-list"></i>
            </button> --}}
            <div class="search-bar d-none d-md-flex">
                <i class="bi bi-search"></i>
                <input type="hidden" class="form-control" placeholder="Search...">
            </div>
        </div>

        <!-- Toggler for Small Devices -->
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#topbarDropdown"
            aria-controls="topbarDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <i class="bi bi-three-dots-vertical fs-4"></i>
        </button>

        <!-- Right Section -->
        <div class="collapse navbar-collapse justify-content-end" id="topbarDropdown">
            <div class="topbar-right d-flex align-items-center mt-3 mt-lg-0">
                {{-- <a href="#" class="notification-btn">
                    <i class="bi bi-bell"></i>
                    <span class="notification-badge">5</span>
                </a>
                <a href="#" class="message-btn">
                    <i class="bi bi-chat"></i>
                    <span class="notification-badge">3</span>
                </a> --}}
                <div class="dropdown user-dropdown ms-3">
                    <button class="btn dropdown-toggle d-flex align-items-center" type="button" id="userDropdown"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{ asset('Biratnagar_logo.png') }}" alt="{{ Auth::user()->name_en }}"
                            class="rounded-circle me-2" width="32" height="32">
                        <span class="d-none d-md-inline">{{ Auth::user()->name_en }}</span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                        <li><a class="dropdown-item" href="#"><i class="bi bi-person me-2"></i> Profile</a></li>
                        <li><a class="dropdown-item" href="#"><i class="bi bi-gear me-2"></i> Settings</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="{{ route('logout') }}"><i
                                    class="bi bi-box-arrow-right me-2"></i> Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</nav>
