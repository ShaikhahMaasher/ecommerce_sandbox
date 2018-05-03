@extends('layouts.backend.dashboard') 

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            {{ __('Edit Parent category') }}
            <small>{{ __('Update Parent Categories') }}</small>
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="#">
                    <i class="fa fa-cubes"></i> {{ __('Parent Categories') }}</a>
            </li>
            <li class="active">{{ __('Edit Parent Category') }}</li>
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
          <form method="POST" action="{{asset('/admin/category/update-parent/'.$parent->id)}}">
            {{ csrf_field() }}
            <div class="col-md-9">
                        <div class="box box-primary">              
                            <div class="box-header with-border">
                                <h4>
                                    {{ __('Update a Parent Category') }}
                                </h4>
                            </div>   
                            <!-- /. box-header -->
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="name">Name:</label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{$parent->name}}">
                                </div>
                                <div class="form-group">
                                    <label for="desc">Description:</label>
                                    <textarea name="desc" id="desc" cols="24" rows="6" class="form-control">{{$parent->desc}}</textarea>
                                </div>
                                </div>
                        <!-- /.box-body -->
                        </div>
              <!-- /.box --> 
            </div>
                <!-- /. col-md-9 -->
            <div class="col-md-3">
                <div class="box-footer" style="text-align: center"> 
                    <div class="form-group">
                    <button type="submit" class="btn btn-primary">Update</button>
                    </div>
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
