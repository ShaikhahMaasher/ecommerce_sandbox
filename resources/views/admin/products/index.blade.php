@extends('layouts.backend.dashboard')

@section('head')
    <link href="{{ asset('css/iCheck.css') }}" type="text/css" rel="stylesheet">
@endsection

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
                <table class="table product-table">
                    <thead>
                        <tr>
                            <th>
                                <!-- Check all button -->
                                <span data-toggle="tooltip" title="Select all">
                                    <button type="button" class="btn btn-sm select-all checkbox-toggle"><i class="fa fa-square-o"></i>
                                    </button>
                                </span>
                            </th>
                            <th><span data-toggle="tooltip" title="Featured Product"><i class="fa fa-star text-yellow"></i></span></th>                            
                            <th>{{ __('Title') }}</th>
                            <th>{{ __('SKU') }}</th>
                            <th>{{ __('Stock') }}</th>
                            <th>{{ __('Price') }}</th>
                            <th>{{ __('Categories') }}</th>
                            <th>{{ __('Type') }}</th>
                            <th>{{ __('Status') }}</th>
                            <th>{{ __('Action') }}</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)                
                        <tr>
                            <td>
                                <input type="checkbox">
                            </td>
                            <td class="mailbox-star"><a href="#"><i class="fa fa-star-o text-yellow"></i></a></td>
                            <td class="product-title long-text"><a href="/admin/products/{{$product->id}}/edit">{{ $product->title }}</a></td>
                            <td>{{ $product->sku }}</td>
                            <td>
                                <div class="col-md-offset-2">
                                    @if ($product->in_stock == 1)                                
                                    <span data-toggle="tooltip" title="In Stock"><i class="fa fa-check"></i></span>
                                    @else
                                    <span data-toggle="tooltip" title="Out of Stock"><i class="fa fa-close"></i></span>
                                    @endif
                                </div>                                
                            </td>
                            <td>
                                @if ($product->sale_price)
                                    {{ $product->sale_price }}
                                @else
                                    {{ $product->regular_price }}
                                @endif
                            </td>
                            <td class="long-text product-category">
                                @foreach ($product->categories as $category)
                                    {{ $category->name }}
                                @endforeach
                            </td>
                            <td>
                                @if ( $product->type == 'simple')
                                    <span data-toggle="tooltip" title="Simple"><i class="fa fa-cube"></i></span>
                                @else
                                    <span data-toggle="tooltip" title="Variable"><i class="fa fa-cubes"></i></span>                              
                                @endif
                            </td>
                            <td>
                                <p class="col-md-offset-1">{{ $product->status }}</p>
                                <p>{{ $product->updated_at->toFormattedDateString() }}</p>
                            </td>                            
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
                <div class="row">
                    <div class="col-sm-4 pull-right table-pages">                        
                        <div class="paginate-item">
                            {{$products->render()}}
                        </div>
                        <div class="count">
                            {{ $count }} {{ __('Products')}}
                        </div>
                    </div>
                </div>
            @endif
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

        //Handle starring for glyphicon and font awesome
        $(".mailbox-star").click(function (e) {
        e.preventDefault();
        //detect type
        var $this = $(this).find("a > i");
        var glyph = $this.hasClass("glyphicon");
        var fa = $this.hasClass("fa");

        //Switch states
        if (glyph) {
            $this.toggleClass("glyphicon-star");
            $this.toggleClass("glyphicon-star-empty");
        }

        if (fa) {
            $this.toggleClass("fa-star");
            $this.toggleClass("fa-star-o");
        }
        });
    });
    </script>
@endsection
