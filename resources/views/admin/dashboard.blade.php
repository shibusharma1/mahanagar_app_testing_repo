@extends('layout.admin.app')
@section('title', 'Dashboard')
@section('content')
<div id="content">
    <!-- Content Wrapper -->
    <div class="content-wrapper">
        <!-- Page Header -->
        <div class="page-header">
            <h2 class="page-title">Dashboard</h2>
        </div>

        <!-- Stats Cards -->
        <div class="row g-4">
            <div class="col-xl-3 col-md-6">
                <div class="stats-card shadow-sm border rounded p-3 bg-white">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <div class="card-title fw-semibold text-muted">Total Users</div>
                        <i class="bi bi-people fs-3 text-primary"></i>
                    </div>
                    <div class="card-value fs-4 fw-bold text-dark">{{ $users }}</div>
                    <div class="d-flex align-items-center mt-2">
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="stats-card shadow-sm border rounded p-3 bg-white">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <div class="card-title fw-semibold text-muted">Total Applicants</div>
                        <i class="bi bi-file-earmark-text fs-3 text-success"></i>
                    </div>
                    <div class="card-value fs-4 fw-bold text-dark">{{ $applicants }}</div>
                    <div class="d-flex align-items-center mt-2">
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="stats-card shadow-sm border rounded p-3 bg-white">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <div class="card-title fw-semibold text-muted">Pending Applications</div>
                        <i class="bi bi-clock fs-3 text-warning"></i>
                    </div>
                    <div class="card-value fs-4 fw-bold text-dark">{{ $pendingApplicants }}</div>
                    <div class="d-flex align-items-center mt-2">
                    </div>
                </div>
            </div>
        </div>


        <!-- Main Content -->
        {{-- <div class="row d-none">
            <!-- Recent Activity -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <span>Recent Activity</span>
                        <a href="#" class="btn btn-sm btn-link">View All</a>
                    </div>
                    <div class="card-body">
                        <ul class="activity-list">
                            <li class="d-flex">
                                <div class="activity-icon">
                                    <i class="bi bi-file-earmark-plus"></i>
                                </div>
                                <div class="activity-info">
                                    <h6>New CV Uploaded</h6>
                                    <p>John Smith uploaded a new CV</p>
                                </div>
                                <div class="activity-time">
                                    10 mins ago
                                </div>
                            </li>
                            <li class="d-flex">
                                <div class="activity-icon bg-success bg-opacity-10 text-success">
                                    <i class="bi bi-check-circle"></i>
                                </div>
                                <div class="activity-info">
                                    <h6>CV Approved</h6>
                                    <p>Sarah Johnson's CV has been approved</p>
                                </div>
                                <div class="activity-time">
                                    2 hours ago
                                </div>
                            </li>
                            <li class="d-flex">
                                <div class="activity-icon bg-warning bg-opacity-10 text-warning">
                                    <i class="bi bi-exclamation-circle"></i>
                                </div>
                                <div class="activity-info">
                                    <h6>CV Requires Review</h6>
                                    <p>Michael Brown's CV needs attention</p>
                                </div>
                                <div class="activity-time">
                                    5 hours ago
                                </div>
                            </li>
                            <li class="d-flex">
                                <div class="activity-icon bg-info bg-opacity-10 text-info">
                                    <i class="bi bi-person-plus"></i>
                                </div>
                                <div class="activity-info">
                                    <h6>New User Registered</h6>
                                    <p>Emma Wilson registered a new account</p>
                                </div>
                                <div class="activity-time">
                                    1 day ago
                                </div>
                            </li>
                            <li class="d-flex">
                                <div class="activity-icon bg-danger bg-opacity-10 text-danger">
                                    <i class="bi bi-x-circle"></i>
                                </div>
                                <div class="activity-info">
                                    <h6>CV Rejected</h6>
                                    <p>David Taylor's CV was rejected</p>
                                </div>
                                <div class="activity-time">
                                    2 days ago
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Latest CVs -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <span>Latest CV Submissions</span>
                        <a href="#" class="btn btn-sm btn-link">View All</a>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-container">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Status</th>
                                        <th>Date</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="https://randomuser.me/api/portraits/women/32.jpg" alt="User"
                                                    style="width: 36px; height: 36px; border-radius: 50%; object-fit: cover; margin-right: 10px;">
                                                <span>Jennifer Parker</span>
                                            </div>
                                        </td>
                                        <td>Software Engineer</td>
                                        <td><span class="badge badge-success">Approved</span></td>
                                        <td>Today, 09:42</td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary"><i
                                                    class="bi bi-eye"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="https://randomuser.me/api/portraits/men/41.jpg" alt="User"
                                                    style="width: 36px; height: 36px; border-radius: 50%; object-fit: cover; margin-right: 10px;">
                                                <span>Robert Johnson</span>
                                            </div>
                                        </td>
                                        <td>Product Manager</td>
                                        <td><span class="badge badge-warning">Pending</span></td>
                                        <td>Today, 08:15</td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary"><i
                                                    class="bi bi-eye"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="User"
                                                    style="width: 36px; height: 36px; border-radius: 50%; object-fit: cover; margin-right: 10px;">
                                                <span>Amanda Lee</span>
                                            </div>
                                        </td>
                                        <td>UX Designer</td>
                                        <td><span class="badge badge-info">In Review</span></td>
                                        <td>Yesterday, 16:30</td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary"><i
                                                    class="bi bi-eye"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="https://randomuser.me/api/portraits/men/22.jpg" alt="User"
                                                    style="width: 36px; height: 36px; border-radius: 50%; object-fit: cover; margin-right: 10px;">
                                                <span>Thomas Wilson</span>
                                            </div>
                                        </td>
                                        <td>Data Analyst</td>
                                        <td><span class="badge badge-success">Approved</span></td>
                                        <td>Yesterday, 14:20</td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary"><i
                                                    class="bi bi-eye"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="User"
                                                    style="width: 36px; height: 36px; border-radius: 50%; object-fit: cover; margin-right: 10px;">
                                                <span>Sophia Davis</span>
                                            </div>
                                        </td>
                                        <td>Marketing Specialist</td>
                                        <td><span class="badge badge-warning">Pending</span></td>
                                        <td>Yesterday, 11:45</td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary"><i
                                                    class="bi bi-eye"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}


        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

        <div class="row g-4">
            {{-- Pie Chart (Gender) --}}
            <div class="col-md-6">
                <div class="card shadow-sm border rounded p-3">
                    <h5 class="text-center fw-semibold mb-3">User Gender Distribution</h5>
                    <canvas id="genderChart" style="height: 300px;"></canvas>
                </div>
            </div>

            {{-- Pie Chart (Scholarship Groups) --}}
            <div class="col-md-6">
                <div class="card shadow-sm border rounded p-3">
                    <h5 class="text-center fw-semibold mb-3">Scholarship Group Distribution</h5>
                    <canvas id="scholarshipChart" style="height: 300px;"></canvas>
                </div>
            </div>
        </div>

        <script>
            // Gender Pie Chart
    const genderCtx = document.getElementById('genderChart').getContext('2d');
    new Chart(genderCtx, {
        type: 'pie',
        data: {
            labels: ['Male', 'Female', 'Other'],
            datasets: [{
                data: [{{ $maleUsers }}, {{ $femaleUsers }}, {{ $otherUsers }}],
                backgroundColor: ['#007bff', '#dc3545', '#6c757d'],
                borderColor: '#fff',
                borderWidth: 2
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: { position: 'bottom', labels: { color: '#333', font: { size: 14, weight: 'bold' } } },
                tooltip: { callbacks: { label: ctx => `${ctx.label}: ${ctx.parsed} applicants` } }
            }
        }
    });

    // Scholarship Pie Chart
    const scholarshipCtx = document.getElementById('scholarshipChart').getContext('2d');
    new Chart(scholarshipCtx, {
        type: 'pie',
        data: {
            labels: {!! json_encode($scholarshipGroups) !!},
            datasets: [{
                data: {!! json_encode($scholarshipCounts) !!},
                backgroundColor: [
                    '#28a745', '#17a2b8', '#ffc107', '#fd7e14',
                    '#6610f2', '#20c997', '#6f42c1', '#e83e8c'
                ],
                borderColor: '#fff',
                borderWidth: 2
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: { position: 'bottom', labels: { color: '#333', font: { size: 14, weight: 'bold' } } },
                tooltip: { callbacks: { label: ctx => `${ctx.label}: ${ctx.parsed} applicants` } }
            }
        }
    });
        </script>
        @endsection