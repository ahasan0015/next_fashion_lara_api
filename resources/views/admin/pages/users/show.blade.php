@extends('admin.layout.master')

@section('title', 'User Details')

@section('content')

<div class="container-fluid">

    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="fw-bold">User Profile</h3>

        <div>
            <a href="#" class="btn btn-info">Edit</a>
            <a href="{{ route('users.index') }}" class="btn btn-secondary">Back</a>
        </div>
    </div>

    <div class="row">

        <!-- Left Profile Card -->
        <div class="col-md-4">
            

            <div class="card shadow-sm border-0 text-center p-4">

                <img src="https://ui-avatars.com/api/?name=John+Doe&size=120"
                    class="rounded-circle mx-auto mb-3">

                <h5 class="fw-bold mb-1">{{ $user['name'] }}</h5>
                <small class="text-muted">Admin</small>

                <span class="badge bg-success mt-2">Active</span>

                <hr>

                <p class="mb-1"><strong>Email:</strong> {{ $user['email'] }}</p>
                <p class="mb-0"><strong>Phone:</strong> {{ $user['phone'] }}</p>

            </div>

        </div>

        <!-- Right Details Card -->
        <div class="col-md-8">

            <div class="card shadow-sm border-0">

                <div class="card-header bg-white fw-bold">
                    User Information
                </div>

                <div class="card-body">

                    <div class="row mb-3">
                        <div class="col-md-4 fw-bold">User ID</div>
                        <div class="col-md-8">{{ $user['id'] }}</div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-4 fw-bold">Full Name</div>
                        <div class="col-md-8">{{ $user['name'] }}</div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-4 fw-bold">Email Address</div>
                        <div class="col-md-8">{{ $user['email'] }}</div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-4 fw-bold">Phone</div>
                        <div class="col-md-8">{{ $user['phone'] }}</div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-4 fw-bold">Role</div>
                        <div class="col-md-8">Admin</div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 fw-bold">Created At</div>
                        <div class="col-md-8">{{ $user['created_at'] }}</div>
                    </div>

                </div>
                

                <div class="card-footer bg-white text-end">

                    <a href="#" class="btn btn-danger">Delete User</a>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection