@extends('layouts.backend.dashboard') @section('content')

<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Category

			<small>List of all Categories.</small>
		</h1>
		<ol class="breadcrumb">
			<li>
				<a href="#">
					<i class="fa fa-dashboard"></i> Categories
				</a>
			</li>
			<li class="active">All Category</li>
		</ol>
	</section>
	<section class="content container-fluid">
		<div class="row">
			<div class="col-sm-6">
				<a class='col-sm-4' href="/admin/category/create">
					<button type="button" class="btn btn-primary btn-sm">
						Add new Category
					</button>
				</a>
				<a class='col-sm-4' href="/admin/category/create-parent">
					<button type="button" class="btn btn-primary btn-sm">
						Add new Parent Category
					</button>
				</a>
				<a class='col-sm-4' href="/admin/category/trashed">
					<button type="button" class="btn btn-warning btn-sm">
						All trashed Categories
					</button>
				</a>
			</div>
		</div>

		<br> @if(!count($parentsCategory))

		<div class="callout callout-warning">
			<h4>{{ __('There is no products yet.') }}</h4>
		</div>
		@else

		<!-- Table -->
		<table width="100%" class="table  table-bordered table-hover dataTables">
			<tr>
				<th scope="col">#</th>
				<th scope="col">Name</th>
				<th scope="col">Describitions </th>
				<th scope="col">Subcategories</th>
			</tr>
			@foreach ($parentsCategory as $parent)

			<tr>
				<th rowspan="{{count($parent->childs)+1}}" scope="row">{{$parent->id}}</th>
				<th rowspan="{{count($parent->childs)+1}}">
					<a href="/admin/category/edit-parent/{{$parent->id}}">{{$parent->name}}</a>
				</th>
				<th rowspan="{{count($parent->childs)+1}}">{{$parent->desc}}</th>
				@foreach ($parent->childs as $child)

				<tr>
					<td>
						<span class='col-sm-3'>{{$child->name}}</span>
						<a class='col-sm-3' href="/admin/category/edit/{{$child->slug}}">
							<button type="button" class="btn btn-warning">
								<span class="glyphicon glyphicon-pencil"></span>
							</button>
						</a>
						<a class='col-sm-3' href="/admin/category/delete/{{$child->slug}}">
							<button type="button" class="btn btn-danger">
								<span class="glyphicon glyphicon-trash"></span>
							</button>
						</a>
						@if($child->status=='0')
						<a class='col-sm-3' href="/admin/category/status-show/{{$child->slug}}">
							<button type="button" class="btn btn-danager">Show
								<span class="glyphicon glyphicon-eye-open">
								</span>
							</button>
						</a>
						@else
						<a class='col-sm-3' href="/admin/category/status-hide/{{$child->slug}}">
							<button type="button" class="btn btn-danager">Hide
								<span class="glyphicon glyphicon-eye-close">
								</span>
							</button>
						</a>
						@endif
					</td>
				</tr>
				@endforeach

			</tr>
			@endforeach

		</table>
		<div class="row">
		<div class="col-sm-4 pull-right table-pages">                        
			<div class="paginate-item">
				{{$parentsCategory->render()}}
			</div>
			<div class="count">
				{{ $count }} {{ __('Categories')}}
			</div>
		</div>
		</div>
		@endif

		<!-- /.table -->
	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection