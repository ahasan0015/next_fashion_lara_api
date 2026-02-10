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
                    <tr>
                        <td>1</td>
                        <td>Product A</td>
                        <td>product-a</td>
                        <td>Electronics</td>
                        <td>Brand X</td>
                        <td>Active</td>
                        <td>$150.00</td>
                        <td>2026-02-10 12:00:00</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-info">View</a>
                            <a href="#" class="btn btn-sm btn-warning">Edit</a>
                            <a href="#" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Product B</td>
                        <td>product-b</td>
                        <td>Clothing</td>
                        <td>Brand Y</td>
                        <td>Inactive</td>
                        <td>$75.00</td>
                        <td>2026-02-09 15:30:00</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-info">View</a>
                            <a href="#" class="btn btn-sm btn-warning">Edit</a>
                            <a href="#" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>
                    <!-- Add more static rows as needed -->
                </tbody>
            </table>
        </div>

        <div class="card-footer text-end">
            <button class="btn btn-secondary">Export CSV</button>
        </div>
    </div>

</div>

@endsection
