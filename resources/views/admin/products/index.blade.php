@extends('layouts.backend.master')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Products
                <small>List of all products.</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Products</a></li>
                <li class="active">All Products</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content container-fluid">
            @if(!count($products))          
                <div class="callout callout-warning">
                    <h4>{{ __('There is no products yet.') }}</h4>    
                </div>
            @else
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Date Updated</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)                
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->title }}</td>
                            <td>{{ $product->updated_at->toFormattedDateString() }}</td>
                        </tr>
                        @endforeach                    
                    </tbody>
                </table>
            @endif
        </section>
        <!-- /.content -->
    </div>
  <!-- /.content-wrapper -->
@endsection
