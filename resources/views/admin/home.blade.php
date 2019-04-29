@extends('layouts.backend.dashboard')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="dashboard-cta">
        <a href="products/create" class="card">
            <i class="fa fa-cubes"></i>
            <span class="cta">
                Add Product
            </span>
        </a>
        <a href="products/create" class="card">
            <i class="fa fa-plus"></i><span class="cta">Add Category</span>
        </a>
        <a class="card"><i class="fa fa-list"></i><span class="cta">View Orders</span></a>
        <a class="card"><i class="fa fa-user"></i><span class="cta">Manage Users</span></a>
    </div>
</div>
<!-- /.content-wrapper -->
@endsection