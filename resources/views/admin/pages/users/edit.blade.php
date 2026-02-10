@extends('admin.layout.master')

@section('title', 'Edit User')

@section('content')

<div class="container-fluid">

    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="fw-bold">Edit User</h3>

        <div>
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
                    @method('PATCH')
                    <input type="hidden" name="page" value="{{ $page }}">
                    <div class="card-body">

                        <!-- Name -->
                        <div class="mb-3">
                            <label class="form-label fw-bold">Full Name</label>
                            <input type="text" name="name" class="form-control" value="{{ old('name') ?? $user['name'] }}">
                        </div>
                        @error('name')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror

                        <!-- Email -->
                        <div class="mb-3">
                            <label class="form-label fw-bold">Email</label>
                            <input type="email" name="email" class="form-control" value="{{ old('email') ?? $user['email'] }}">
                        </div>
                        @error('email')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <!-- Phone -->
                        <div class="mb-3">
                            <label class="form-label fw-bold">Phone</label>
                            <input type="text" name="phone" class="form-control" value="{{ old(key: 'phone') ?? $user['phone'] }}">
                        </div>
                        @error('phone')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror

                        <!-- Role -->
                        <div class="mb-3">
                            <label class="form-label fw-bold">Role</label>
                            <select name="role_id" class="form-select">
                                @php
                                $selected = old('role_id') ?? $user['role_id'];
                                @endphp
                                @foreach ($roles as $item )
                                <option value="{{ $item['id'] }}" @selected($selected==$item['id'])>{{ $item['name'] }}</option>
                                @endforeach

                            </select>
                        </div>

                        <!-- Status -->
                        <div class="mb-3">
                            <label class="form-label fw-bold">Status</label>
                            <select class="form-select">
                                <option selected>Active</option>
                                <option>Inactive</option>
                            </select>
                        </div>

                    </div>

                    <div class="card-footer bg-white text-end">

                        <input type="submit" value="Update" class="btn btn-success">

                    </div>

                </form>

            </div>

        </div>

    </div>

</div>

@endsection