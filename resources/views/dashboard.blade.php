@extends('admin.layout.master')

@section('title', 'Dashboard')

@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="fw-bold">Next Fashion Dashboard</h3>
        <span class="text-muted">Welcome back, Admin 👋</span>
    </div>

    <!-- Stats Cards -->
    <div class="row g-3 mb-4">

        <div class="col-md-3">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h6>Total Users</h6>
                    <h3 class="fw-bold">1,240</h3>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h6>Total Products</h6>
                    <h3 class="fw-bold">320</h3>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h6>Orders</h6>
                    <h3 class="fw-bold">156</h3>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h6>Revenue</h6>
                    <h3 class="fw-bold">$4,520</h3>
                </div>
            </div>
        </div>

    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Recent Orders -->
        <div class="col-md-8">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-white fw-bold">
                    Recent Orders
                </div>
                <div class="card-body">

                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Customer</th>
                                <th>Status</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Rafi</td>
                                <td><span class="badge bg-success">Completed</span></td>
                                <td>$120</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Sadia</td>
                                <td><span class="badge bg-warning">Pending</span></td>
                                <td>$80</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Imran</td>
                                <td><span class="badge bg-danger">Cancelled</span></td>
                                <td>$45</td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>

        <!-- Latest Products -->
        <div class="col-md-4">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-white fw-bold">
                    Latest Products
                </div>
                <div class="card-body">

                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Men T-Shirt</li>
                        <li class="list-group-item">Women Dress</li>
                        <li class="list-group-item">Jeans Pant</li>
                        <li class="list-group-item">Sneakers</li>
                    </ul>

                </div>
            </div>
        </div>

    </div>

</div>

@endsection
