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

                <form action="{{ route('users.store') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="card-body">

                        <!-- Name -->
                        <div class="mb-3">
                            <label class="form-label fw-bold">Full Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter full name" value="{{ old('name') }}">
                            @error('name')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Email -->
                        <div class="mb-3">
                            <label class="form-label fw-bold">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Enter email address" value="{{ old('email') }}">
                        </div>
                        @error('email')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror

                        <!-- Phone -->
                        <div class="mb-3">
                            <label class="form-label fw-bold">Phone</label>
                            <input type="text" name="phone" class="form-control" placeholder="Enter phone number" value="{{ old('phone') }}">
                        </div>
                        @error('phone')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror

                        <!-- Password -->
                        <div class="mb-3">
                            <label class="form-label fw-bold">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Enter password">
                        </div>
                        @error('password')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <!-- Confirm Password -->
                        <div class="mb-3">
                            <label class="form-label fw-bold"> Confirm Password</label>
                            <input type="password" name="password_confirmation" class="form-control" placeholder="Enter password">
                        </div>
                        @error('password')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror

                        <!-- Role -->
                        <div class="mb-3">
                            <label class="form-label fw-bold">Role</label>
                            <select name="role_id" class="form-select">
                                @foreach ($roles as $item)
                                <option value="{{ $item['id'] }}">{{$item['name']}}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Status -->
                        <!-- <div class="mb-3">
                            <label class="form-label fw-bold">Status</label>
                            <select class="form-select">
                                <option selected disabled>Select status</option>
                                <option>Active</option>
                                <option>Inactive</option>
                            </select>
                        </div> -->

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