@extends('layouts.backend.dashboard') 
@section('head')
    <link href="{{ asset('css/iCheck.css') }}" type="text/css" rel="stylesheet">
@endsection
@section('content')

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
				<a class='col-sm-4' href="/admin/category/trashed">
					<button type="button" class="btn btn-warning btn-sm">
						All trashed Categories
					</button>
				</a>
			</div>
		</div>

		<br> @if(!count($categories))

		<div class="callout callout-warning">
			<h4>{{ __('There is no products yet.') }}</h4>
		</div>
		@else

		<!-- Table -->
		<table id="example1" width="100%" class="table table-bordered product-table">
		<thead>
			<tr>
				<th>
            		<!-- Check all button -->
                    <span data-toggle="tooltip" title="Select all">
                    	<button type="button" class="btn btn-sm select-all checkbox-toggle"><i class="fa fa-square-o"></i>
                          </button>
                	</span>
                </th>
				<th scope="col">Name</th>
				<th scope="col">Describitions </th>
				<th scope="col">Parent Category</th>
				<th scope="col">Actions</th>
			</tr>
			</thead>
			<tbody>
			@foreach ($categories as $parent)
			<tr>
				<td>
                    <input type="checkbox">
                </td>
				<td>
					<a href="/admin/category/edit/{{$parent->slug}}">{{$parent->name}}</a>
				</td>
				<td>{{$parent->desc}}</td>
				<td>{{ __('No parent') }}</td>
					<td>
						<a class='col-sm-3' href="/admin/category/edit/{{$parent->slug}}">
							<button type="button" class="btn btn-warning">
								<span class="glyphicon glyphicon-pencil"></span>
							</button>
						</a>
						<a class='col-sm-3' href="/admin/category/delete/{{$parent->slug}}">
							<button type="button" class="btn btn-danger">
								<span class="glyphicon glyphicon-trash"></span>
							</button>
						</a>
						@if($parent->status=='0')
						<a class='col-sm-3' href="/admin/category/status-show/{{$parent->slug}}">
							<button type="button" class="btn btn-danager">Show
								<span class="glyphicon glyphicon-eye-open">
								</span>
							</button>
						</a>
						@else
						<a class='col-sm-3' href="/admin/category/status-hide/{{$parent->slug}}">
							<button type="button" class="btn btn-danager">Hide
								<span class="glyphicon glyphicon-eye-close">
								</span>
							</button>
						</a>
						@endif
					</td>
					@if(count($parent->childs)) 
                             @include('admin.categories.child', ['childs' => $parent->childs,'space'=>20])
                    @endif
			</tr>
			@endforeach
			</tbody>
		</table>
		<div class="row">
		<div class="col-sm-4 pull-right table-pages">                        
			<div class="paginate-item">
				{{$categories->render()}}
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

@section('footer')
    <!-- iCheck -->
    <script src="{{ asset('js/icheck.js')}}"></script>
    <!-- Page Script -->
    <script>
        $(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
    $(function () {
        //Enable iCheck plugin for checkboxes
        //iCheck for checkbox and radio inputs
        $('.product-table input[type="checkbox"]').iCheck({
        checkboxClass: 'icheckbox_flat-blue',
        radioClass: 'iradio_flat-blue'
        });

        //Enable check and uncheck all functionality
        $(".checkbox-toggle").click(function () {
        var clicks = $(this).data('clicks');
        if (clicks) {
            //Uncheck all checkboxes
            $(".product-table input[type='checkbox']").iCheck("uncheck");
            $(".fa", this).removeClass("fa-check-square-o").addClass('fa-square-o');
        } else {
            //Check all checkboxes
            $(".product-table input[type='checkbox']").iCheck("check");
            $(".fa", this).removeClass("fa-square-o").addClass('fa-check-square-o');
        }
        $(this).data("clicks", !clicks);
        });
    });
    </script>
@endsection
