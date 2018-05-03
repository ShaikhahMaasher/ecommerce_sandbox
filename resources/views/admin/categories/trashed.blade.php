@extends('layouts.backend.dashboard')
@section('content')
    
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
                Categories
                
			<small>List of all trashed Categories.</small>
		</h1>
		<ol class="breadcrumb">
			<li>
				<a href="#">
					<i class="fa fa-dashboard"></i> Categories
				</a>
			</li>
			<li class="active">All Trashed Categories</li>
		</ol>
	</section>
	<section class="content container-fluid">
            @if(!count($categories))          
                
                <div class="callout callout-warning">
                    <h4>{{ __('There is no trashed category yet.') }}</h4>
                </div>
            @else
                <!-- Table -->
                <table width="100%" class="table  table-bordered table-hover dataTables">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Category</th>
                        <th scope="col">Describitions </th>
                        <th scope="col">Parent</th>
                        <th scope="col">Action</th>
                    </tr>
                    @foreach ($categories as $category) 
                    <tr>
                        <td>{{$category->id}}</td>
                        <td>{{$category->name}}</td>
                        <td>{{$category->desc}}</td>
                        <td>{{$category->parentcategory->name}}</td>
                        <td>
                            <a class='col-sm-3' href="{{asset('/admin/category/restore/'.$category->slug)}}">
                                <button type="button" class="btn btn-primary"> Restore
                                <span class="glyphicon glyphicon-share"></span>
                                </button>
                            </a>
                        </td>
                    </tr>
                    @endforeach
        
                </table>
            @endif
	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
