@extends('layouts.backend.dashboard')

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
                            <th>{{ __('ID') }}</th>
                            <th>{{ __('Title') }}</th>
                            <th>{{ __('Date Updated') }}</th>
                            <th>{{ __('Action') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)                
                        <tr>
                            <td><a href="/admin/products/{{$product->id}}/edit">{{ $product->id }}</a></td>
                            <td><a href="/admin/products/{{$product->id}}/edit">{{ $product->title }}</a></td>
                            <td>{{ $product->updated_at->toFormattedDateString() }}</td>
                            <td>
                                <form method="POST" action="/admin/products/{{$product->id}}">
                                    {{ method_field("DELETE") }}
                                    @csrf
                                    <button type="submit" class="btn btn-danger">{{ __('Delete') }}</button>
                                </form>
                            </td>
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
