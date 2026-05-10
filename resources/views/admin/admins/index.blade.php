@extends('layout.admin.app')
@section('title', 'Admins Management')

@section('content')
{{-- sweetalert2 for deleted successfully --}}
@if(session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Success',
            text: '{{ session('success') }}',
            timer: 2000,
            showConfirmButton: false
        });
    </script>
@endif


<div id="content">
    <!-- Content Wrapper -->
    <div class="content-wrapper">
        <!-- Page Header -->
        <div class="page-header d-flex justify-content-between align-items-center mb-3">
            <h2 class="page-title m-0">Manage Admins</h2>
            <a href="{{ route('admins.create') }}" class="btn btn-primary">Add</a>
        </div>

        {{-- <h3 class="mb-3"></h3> --}}

        {{-- <a href="{{ route('admins.create') }}" class="btn btn-primary mb-3">Add</a> --}}

        @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="card shadow-sm border-0 rounded-3 my-4">
    <div class="card-header text-black fw-semibold">
        <i class="bi bi-people-fill me-2 text-black"></i>Administrators
    </div>
    <div class="card-body p-0">

        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="bg-light border-bottom">
                    <tr class="text-center">
                        <th style="width:50px;">#</th>
                        <th>Name (EN)</th>
                        {{-- <th>Name (NE)</th> --}}
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Role</th>
                        <th>Image</th>
                        <th style="min-width: 150px;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($admins as $index => $user)
                        @if($user->role == 0 || $user->role == 1)
                            <tr class="text-center">
                                <td>{{ $index + 1 }}</td>
                                <td class="text-start">{{ $user->name_en }}</td>
                                {{-- <td class="text-start">{{ $user->name_ne }}</td> --}}
                                <td><a href="mailto:{{ $user->email }}" class="text-decoration-none">{{ $user->email }}</a></td>
                                <td><a href="tel:{{ $user->phone }}" class="text-decoration-none">{{ $user->phone }}</a></td>
                                <td>
                                    <span class="badge {{ $user->role == 0 ? 'bg-danger' : 'bg-info text-dark' }}">
                                        {{ $user->role == 0 ? 'Super Admin' : 'Admin' }}
                                    </span>
                                </td>
                                <td>
                                    @if($user->image)
                                        <img src="{{ asset($user->image) }}" alt="User image" class="rounded-circle shadow-sm" width="50" height="50" style="object-fit: cover;">
                                    @else
                                        <span class="text-muted small">No image</span>
                                    @endif
                                </td>
                                <td class="d-flex justify-content-center gap-2">
                                    <a href="{{ route('admins.edit', $user->id) }}" class="btn btn-sm btn-warning" title="Edit">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                    <form action="{{ route('admins.destroy', $user->id) }}" method="POST" class="delete-form d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="btn btn-sm btn-danger delete-btn" data-id="{{ $user->id }}" title="Delete">
                                            <i class="bi bi-trash-fill"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endif
                    @empty
                        <tr>
                            <td colspan="8" class="text-center text-muted py-4">No admins found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

    </div>
</div>

    </div>
</div>
{{-- sweetalert2 for delete --}}
<script>
    document.querySelectorAll('.delete-btn').forEach(button => {
        button.addEventListener('click', function () {
            const form = this.closest('form');
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            });
        });
    });
</script>

@endsection