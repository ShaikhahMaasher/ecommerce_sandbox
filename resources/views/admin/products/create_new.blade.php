@extends('layouts.backend.master') 

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            {{ __('Add Product') }}
            <small>{{ __('To create a new product') }}</small>
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="#">
                    <i class="fa fa-cubes"></i> {{ __('Products') }}</a>
            </li>
            <li class="active">{{ __('Add Product') }}</li>
        </ol>
    </section>
    <!-- /. content-header -->

    <!-- Main Content -->
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!-- Displaying form errors -->
                @if(count($errors))
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div> 
            <!-- /. Form Errors -->
                        
            <form method="POST" action="/admin/products">
                @csrf
                <div class="col-md-9">
                    <div class="box box-primary">              
                        <div class="box-header with-border">
                            <h4>
                                {{ __('Create a new product') }}
                            </h4>
                        </div>   
                        <!-- /. box-header -->
                        <div class="box-body">
                            <div class="form-group">
                                <input type="text" class="form-control" id="title" name="title" placeholder="Product Title" >
                            </div>
                            <div class="pad">
                                <textarea id="description" name="description" rows="10" cols="80"></textarea>
                            </div>                                                        
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box --> 
                </div>
                <!-- /. col-md-9 -->

                <div class="col-md-3">
                    <div class="box-footer" style="text-align: center">
                        <button type="submit" class="btn btn-primary">{{ __('Add Product') }}</button>
                    </div>
                    <!-- /.box-footer --> 
                </div>                                        
            </form>
        </div>  
        <!-- /. row -->
    </section>
    <!-- /. container-fluid -->
</div>
<!-- /. content-wrapper -->
@endsection 

<!-- Adding texteditor scripts -->
@section('footer')
    @include('components.texteditor', ['name'=>'description'])
@endsection