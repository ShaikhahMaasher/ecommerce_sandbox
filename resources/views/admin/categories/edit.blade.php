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
							<!-- /.category Name -->
							<div class="form-group">
								 <label for="slug">Slug:</label>
								 <input type="text" class="form-control" id="slug" name="slug" value="{{$category->slug}}">
							</div>
							<!-- /.category Slug -->
							<div class="form-group">
								 <label for="desc">Description:</label>
								 <textarea name="desc" id="desc" cols="24" rows="6" class="form-control"> {{$category->desc}}</textarea>
						    </div>
							<!-- /.category description -->
							<div class="form-group">
								 <select id='parent_categories_id' name='parent_categories_id' class="form-control" >
									 	@if($category->category_id)
											<option value='{{$category->category_id}}'> {{$category->parent->name}}</option>
										@endif
											<option value=''>None</option>
										@foreach ($categories as $parent) 
											<option value='{{$parent->id}}'>{{$parent->name}}</option>
										@endforeach
										</select>
							</div>
								<!-- /.category parent -->
						</div>
						<!-- /.box-body -->
					</div>
					<!-- /.box -->
				</div>
				<!-- /. col-md-9 -->
				<div class="col-md-3" style="text-align: center">
					<div class="box-footer" >
						<div class="form-group">
							<div class=col-md-8>
								<a href=action="{{ route('category.delete', $category->slug) }}"
									onclick="event.preventDefault();
                                 	document.getElementById('delete-form').submit();">
									<button class="btn btn-danger">{{ __('Delete') }}</button>
								</a>
							</div>
							<!-- /. col-md-8 -->
							<div class=col-md-4>
								 <button type="submit" class="btn btn-primary">Update</button>
							</div>
							<!-- /. col-md-4 -->
						</div>
						<!-- /. form group -->
					</div>
					<!-- /.box-footer -->
				</div>
				<!-- /.col-md-3 -->
			</form>
			<!-- /.form -->

			<form id="delete-form" method="POST" action="{{ route('category.delete', $category->slug) }}" style="display: none;">
                {{ method_field("DELETE") }}
                @csrf
            </form>
		</div>
		<!-- /. row -->
	</section>
	<!-- /. container-fluid -->
</div>
<!-- /. content-wrapper -->
@endsection
