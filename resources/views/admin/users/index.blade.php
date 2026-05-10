@extends('layout.admin.app')
@section('title', 'Users Management')

@section('content')
@if(session('success'))
<script>
    Swal.fire({ icon: 'success', title: 'Success', text: '{{ session('success') }}', timer: 2000, showConfirmButton: false })
</script>
@endif
<div id="content">
    <div class="content-wrapper p-4">
        <div class="page-header d-flex justify-content-between align-items-center mb-3">
            <h2 class="page-title">Manage Users</h2>
            {{-- <a href="{{ route('users.create') }}" class="btn btn-primary">Add User</a> --}}
        </div>

        <div class="card shadow-sm border-0 rounded-3 my-4">
            <div class="card-header fw-semibold">
                <i class="bi bi-people-fill me-2"></i>Users
            </div>
            <div class="card-body p-0">

                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0">
                        <thead class="bg-light border-bottom text-center">
                            <tr>
                                <th style="width:50px;">#</th>
                                <th>Name (EN)</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Status</th>
                                <th style="min-width:180px;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($users as $index => $user)
                            @if($user->role == 2)

                            <tr class="text-center">
                                <td>{{ $users->firstItem() + $index }}</td>
                                <td class="text-start">{{ $user->name_en }}</td>
                                <td><a href="mailto:{{ $user->email }}" class="text-decoration-none">{{ $user->email
                                        }}</a></td>
                                <td><a href="tel:{{ $user->phone }}" class="text-decoration-none">{{ $user->phone }}</a>
                                </td>
                                <td>
                                    <form action="{{ route('users.toggle-status', $user->id) }}" method="POST"
                                        class="d-inline toggle-status-form">
                                        @csrf @method('PATCH')
                                        <button type="button"
                                            class="btn btn-sm {{ $user->is_active ? 'btn-success' : 'btn-secondary' }} toggle-status-btn"
                                            title="Toggle Status">
                                            {{ $user->is_active ? 'Active' : 'Inactive' }}
                                        </button>
                                    </form>

                                </td>
                                <td class="d-flex justify-content-center gap-2">
                                    <a href="{{ url('users-list/show', $user->id) }}" class="btn btn-sm btn-info d-none"
                                        title="View"><i class="bi bi-eye"></i></a>
                                    <a href="{{ url('users-list/edit', $user->id) }}" class="btn btn-sm btn-warning d-none"
                                        title="Edit"><i class="bi bi-pencil-square"></i></a>
                                    <form action="{{ url('users-list/destroy', $user->id) }}" method="POST"
                                        class="delete-form d-inline">
                                        @csrf @method('DELETE')
                                        <button type="button" class="btn btn-sm btn-danger delete-btn" title="Delete"><i
                                                class="bi bi-trash-fill"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endif
                            @empty
                            <tr>
                                <td colspan="6" class="text-center py-4 text-muted">No users found.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <div class="p-3">
                    {{ $users->links('pagination::bootstrap-5') }}
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    document.querySelectorAll('.delete-btn').forEach(button => {
        button.addEventListener('click', function() {
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
                if (result.isConfirmed) form.submit();
            })
        })
    })
</script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
                                            document.querySelectorAll('.toggle-status-btn').forEach(function (btn) {
                                                btn.addEventListener('click', function () {
                                                    Swal.fire({
                                                        title: 'Are you sure?',
                                                        text: "Do you want to change the user's status?",
                                                        icon: 'question',
                                                        showCancelButton: true,
                                                        confirmButtonColor: '#3085d6',
                                                        cancelButtonColor: '#d33',
                                                        confirmButtonText: 'Yes, change it!'
                                                    }).then((result) => {
                                                        if (result.isConfirmed) {
                                                            btn.closest('form').submit();
                                                        }
                                                    });
                                                });
                                            });
                                        });
</script>
@endsection