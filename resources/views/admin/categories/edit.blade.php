@extends('layouts.backend.dashboard') 
@section('content')

<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
				{{ __('Edit Category') }}
				
			<small>{{ __('Update Categories') }}</small>
		</h1>
		<ol class="breadcrumb">
			<li>
				<a href="#">
					<i class="fa fa-cubes"></i> {{ __('Categories') }}
				</a>
			</li>
			<li class="active">{{ __('Edit Category') }}</li>
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
			<form method="POST" action="{{asset('/admin/category/update/'.$category->slug)}}">
			{{ csrf_field() }}

				<div class="col-md-9">
					<div class="box box-primary">
						<div class="box-header with-border">
							<h4>
								{{ __('Update a Category') }}
							</h4>
						</div>
						<!-- /. box-header -->
						<div class="box-body">
							<div class="form-group">
								  <label for="name">Name:</label>
								  <input type="text" class="form-control" id="name" name="name" value="{{$category->name}}">
							</div>
								<div class="form-group">
									  <label for="slug">Slug:</label>
									  <input type="text" class="form-control" id="slug" name="slug" value="{{$category->slug}}">
								</div>
								<div class="form-group">
									  <label for="desc">Description:</label>
									  <textarea name="desc" id="desc" cols="24" rows="6" class="form-control"> {{$category->desc}}</textarea>
								</div>
								<div class="form-group">
										<select id='parent_categories_id' name='parent_categories_id' class="form-control" >
											<option value='{{$category->parentcategory->id}}'> {{$category->parentcategory->name}}</option>
											@foreach ($parentsCategory as $parent) 
											<option value='{{$parent->id}}'>{{$parent->name}}</option>
											@endforeach
										</select>
									</div>
									<!-- /.box-body -->
								</div>
								<!-- /.box -->
							</div>
							<!-- /. col-md-9 -->
						</div>
						<div class="col-md-3">
							<div class="box-footer" style="text-align: center">
								<div class="form-group">
								<a href="/admin/category/delete/{$category->slug}}">
                            <button class="btn btn-danger">{{ __('Delete') }}</button>
                        </a> 
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
