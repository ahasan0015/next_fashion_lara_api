@extends('admin.layout.master')

@section('title', 'Create User')

@section('content')

<div class="container-fluid">

    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="fw-bold">Create New User</h3>

        <a href="{{ route('users.index') }}" class="btn btn-secondary">Back</a>
    </div>

    <div class="row justify-content-center">

        <div class="col-md-8">

            <div class="card shadow-sm border-0">

                <div class="card-header bg-white fw-bold">
                    User Information
                </div>

                <form>

                    <div class="card-body">

                        <!-- Name -->
                        <div class="mb-3">
                            <label class="form-label fw-bold">Full Name</label>
                            <input type="text" class="form-control" placeholder="Enter full name">
                        </div>

                        <!-- Email -->
                        <div class="mb-3">
                            <label class="form-label fw-bold">Email</label>
                            <input type="email" class="form-control" placeholder="Enter email address">
                        </div>

                        <!-- Phone -->
                        <div class="mb-3">
                            <label class="form-label fw-bold">Phone</label>
                            <input type="text" class="form-control" placeholder="Enter phone number">
                        </div>

                        <!-- Password -->
                        <div class="mb-3">
                            <label class="form-label fw-bold">Password</label>
                            <input type="password" class="form-control" placeholder="Enter password">
                        </div>

                        <!-- Role -->
                        <div class="mb-3">
                            <label class="form-label fw-bold">Role</label>
                            <select class="form-select">
                                @foreach ($roles as $item)
                                <option value="{{ $item['id'] }}">{{$item['name']}}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Status -->
                        <div class="mb-3">
                            <label class="form-label fw-bold">Status</label>
                            <select class="form-select">
                                <option selected disabled>Select status</option>
                                <option>Active</option>
                                <option>Inactive</option>
                            </select>
                        </div>

                    </div>

                    <div class="card-footer bg-white text-end">

                        <button type="submit" class="btn btn-primary">
                            Create User
                        </button>

                    </div>

                </form>

            </div>

        </div>

    </div>

</div>

@endsection