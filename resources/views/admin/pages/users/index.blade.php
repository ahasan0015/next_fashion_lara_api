@extends('admin.layout.master')

@section('title', 'Users')

@section('content')

<div class="container-fluid">


    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="fw-bold">Users Management</h3>
        <a href="{{ route('users.create') }}" class="btn btn-primary">+ Add User</a>
    </div>
    @if(session('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
   @endif

    <!-- Users Table -->
    <div class="card shadow-sm border-0">
        <div class="card-header bg-white fw-bold">
            All Users
        </div>

        <div class="card-body">

            <table class="table table-hover align-middle">
                <thead class="table-light">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>phone</th>
                        <th>Role</th>
                        <th>Status</th>
                        <th width="160">Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($user as $i => $item)
                    <!-- {{ $item }} -->

                    <tr>
                        <td>{{ $item['id'] }}</td>
                        <td>{{ $item['name'] }}</td>
                        <td>{{ $item['email'] }}</td>
                        <td>{{ $item['phone'] }}</td>
                        <td>{{ $item['role_id'] }}</td>
                        <td><span class="badge bg-success">Active</span></td>
                        <td class="d-flex gap-2">
                            <a href="{{ route('users.show',$item['id']) }}" class="btn btn-sm btn-primary">View</a>
                            <a href="#" class="btn btn-sm btn-info">Edit</a>                            
                            <form action="{{ route('users.destroy', $item['id']) }}" method="POST" class="d-inline">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>

                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th colspan="9">
                            {{ $user->links('vendor.pagination.bootstrap-5') }}
                        </th>
                    </tr>
                </tfoot>
            </table>

        </div>
    </div>

</div>

@endsection