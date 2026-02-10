@extends('admin.layout.master')

@section('title', 'Products')

@section('content')

<div class="container-fluid">

    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="fw-bold">Products</h3>
        <a href="#" class="btn btn-primary">+ Add Product</a>
    </div>

    <!-- Products Table -->
    <div class="card shadow-sm border-0">
        <div class="card-header bg-white fw-bold">
            Product List
        </div>

        <div class="card-body table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Category</th>
                        <th>Brand</th>
                        <th>Status</th>
                        <th>Base Price</th>
                        <th>Created At</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    <!-- Static Example Rows -->
                    @foreach ($products as $i => $item)
                    <tr>
                        <td>{{ $item['id'] }}</td>
                        <td>{{ $item['name'] }}</td>
                        <td>{{ $item['name'] }}</td>
                        <td>{{ $item['name'] }}</td>
                        <td>{{ $item['slug'] }}</td>
                        <td>{{ $item['description'] }}</td>
                        <td>{{ $item['base_price'] }}</td>
                        <td>2026-02-10 12:00:00</td>
                        <td class="d-flex gap-2">
                            <a href="#" class="btn btn-sm btn-info">View</a>
                            <a href="#" class="btn btn-sm btn-warning">Edit</a>
                            <a href="#" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>

                    @endforeach
                    <!-- Add more static rows as needed -->
                </tbody>
                <tfoot>
                    <tr>
                        <th colspan="9">
                            {{ $products->links('vendor.pagination.bootstrap-5') }}
                        </th>
                    </tr>
                </tfoot>
            </table>
        </div>

        <div class="card-footer text-end">
            <button class="btn btn-secondary">Export CSV</button>
        </div>
    </div>

</div>

@endsection