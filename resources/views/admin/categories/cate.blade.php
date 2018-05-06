@extends('layouts.backend.dashboard') 
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            {{ __('Add Category') }}
            <small>{{ __('To create a new Category') }}</small>
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="#">
                    <i class="fa fa-cubes"></i> {{ __('Categories') }}</a>
            </li>
            <li class="active">{{ __('Add Category') }}</li>
        </ol>
    </section>
    <!-- /. content-header -->
    <section class="content container-fluid">
          <div class="row">
              <div class="col-md-12">
                  <!-- Displaying form errors -->
                  @include('components.errors')
              </div> 
            <!-- /. Form Errors -->
            <form method="POST" action="{{asset('admin/cate/store')}}">
            {{ csrf_field() }}
            <div class="col-md-9">
                    <div class="box box-primary">              
                        <div class="box-header with-border">
                            <h4>
                                {{ __('Create a new Category') }}
                            </h4>
                        </div>   
                        <!-- /. box-header -->
                        <div class="box-body">
                            <div class="form-group">
                                  <label for="name">Title:</label>
                                  <input type="text" class="form-control" id="name" name="name">
                              </div>
                              <div class="form-group">
                                <select id='parent_categories_id' name='parent_categories_id' class="form-control" >
                                    <option value=''>select parent</option>
                                      @foreach ($allcategories as $category) 
                                        <option value='{{$category->id}}'>{{$category->name}}</option>
                                      @endforeach
                                </select>
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
                                <button type="submit" class="btn btn-primary">Create</button>
                          </div>
                     </div>
                    <!-- /.box-footer --> 
                </div>  
                 <!-- /.col-md-3 -->  
                </form>
            </div>
            <!--/.row-->
            <div class="row">
            <div class="col-md-9">
                    <div class="box box-primary">              
                        <div class="box-header with-border">
                            <h4>
                                {{ __('Display all Categories') }}
                            </h4>
                        </div> 
                        <div class="box-body">
                        <table width="100%" class="table  table-bordered table-hover dataTables">
				        <tr>	 
					    <th scope="col">Name</th>				 
				        </tr>
                        <tr>
                          @foreach($categories as $category) 
                          <td padding-left: 0.9em;>
                               {{ $category->name }}
                             @if(count($category->catechild)) 
                             @include('admin.categories.child', ['childs' => $category->catechild])
                             @endif
                          </td>
                          @endforeach
                          </tr>
                         </table>
                        </div>
                        <!-- /.box-body -->

                        <!-- /.table -->
                      </div>
                    <!-- /.box --> 
                </div>
                <!-- /. col-md-9 -->
                </div>
            <!--/.row-->


      </section>
    <!-- /. container-fluid -->
  </div>
<!-- /. content-wrapper -->
@endsection

