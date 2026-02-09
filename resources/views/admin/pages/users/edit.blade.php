@extends('admin.layout.master')

@section('title', 'Edit User')

@section('content')

<div class="container-fluid">

    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="fw-bold">Edit User</h3>

        <div>
            <a href="{{ route('users.show', $user['id']) }}" class="btn btn-info">View</a>
            <a href="{{ route('users.index') }}" class="btn btn-secondary">Back</a>
        </div>
    </div>

    <div class="row justify-content-center">

        <div class="col-md-8">

            <div class="card shadow-sm border-0">

                <div class="card-header bg-white fw-bold">
                    Update User Information
                </div>

                <form action="{{ route('users.update', $user['id']) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="card-body">

                        <!-- Name -->
                        <div class="mb-3">
                            <label class="form-label fw-bold">Full Name</label>
                            <input type="text" name="name" class="form-control"
                                value="{{ old('name', $user['name']) }}" required>
                        </div>

                        <!-- Email -->
                        <div class="mb-3">
                            <label class="form-label fw-bold">Email</label>
                            <input type="email" name="email" class="form-control"
                                value="{{ old('email', $user['email']) }}" required>
                        </div>

                        <!-- Phone -->
                        <div class="mb-3">
                            <label class="form-label fw-bold">Phone</label>
                            <input type="text" name="phone" class="form-control"
                                value="{{ old('phone', $user['phone']) }}">
                        </div>

                        <!-- Role -->
                        <div class="mb-3">
                            <label class="form-label fw-bold">Role</label>
                            <select name="role" class="form-select">
                                <option value="admin" {{ $user['role'] == 'admin' ? 'selected' : '' }}>Admin</option>
                                <option value="user" {{ $user['role'] == 'user' ? 'selected' : '' }}>User</option>
                            </select>
                        </div>

                        <!-- Status -->
                        <div class="mb-3">
                            <label class="form-label fw-bold">Status</label>
                            <select name="status" class="form-select">
                                <option value="1" {{ $user['status'] == 1 ? 'selected' : '' }}>Active</option>
                                <option value="0" {{ $user['status'] == 0 ? 'selected' : '' }}>Inactive</option>
                            </select>
                        </div>

                    </div>

                    <div class="card-footer bg-white text-end">

                        <button type="submit" class="btn btn-primary">
                            Update User
                        </button>

                    </div>

                </form>

            </div>

        </div>

    </div>

</div>

@endsection
