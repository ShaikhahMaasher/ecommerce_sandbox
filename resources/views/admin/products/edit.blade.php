@extends('layouts.backend.dashboard') 

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            {{ __('Edit Product') }}
            <small>{{ __('Update products') }}</small>
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="#">
                    <i class="fa fa-cubes"></i> {{ __('Products') }}</a>
            </li>
            <li class="active">{{ __('Edit Product') }}</li>
        </ol>
    </section>
    <!-- /. content-header -->

    <!-- Main Content -->
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!-- Displaying form errors -->
                @include('components.errors')
            </div> 
            <!-- /. Form Errors -->
                        
            <form method="POST" action="/admin/products/{{$product->id}}" class="form-horizontal">
                {{ method_field("PATCH") }}
                @csrf
                <section class="col-md-9">
                    <div class="box box-primary">              
                        <div class="box-header with-border">
                            <h4>
                                {{ __('Update a product') }}
                            </h4>
                        </div>   
                        <!-- /. box-header -->

                        <div class="box-body">
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="title" name="title" placeholder="Product Title" value="{{ $product->title }}">
                                </div>
                            </div>
                            <!-- /. title -->
                            <div class="form-group">
                                <div class="col-sm-12">
                                <label for="slug" class="control-label">{{ __('Product Slug')}}</label>
                                    <input type="text" class="form-control" id="slug" name="slug" placeholder="Product Slug" value="{{ $product->slug }}">
                                </div>
                            </div>
                            <!-- /. Slug -->

                            <div class="form-group">
                                <div class="col-sm-12">
                                    <label for="short_description" class="control-label">{{ __('Short Description')}}</label>                                 
                                    <textarea id="short_description" name="short_description" class="form-control" rows="3" placeholder="Enter a short description of the product...">{{ $product->short_description }}</textarea>
                                </div>
                            </div>
                            <!-- /. short description -->                             

                            <div class="form-group">
                                <div class="pad col-sm-12">
                                    <textarea id="description" name="description" rows="10" cols="80" value="{{ $product->description }}" placeholder="Here is to add a full description of the product...">{{$product->description}}</textarea>
                                </div>  
                            </div>  
                            <!-- /. description -->                                                                                                             
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box --> 
                </section>
                <!-- /. Update Product -->
                
                <section class="col-md-3">
                    <div class="box box-solid">
                        <div class="box-header with-border">
                            <h3 class="box-title">{{ __('Publish') }}</h3>
                        </div>
                        <div class="box-body product-publish">
                            <div>
                                <p><i class="fa fa-map-pin"></i>
                                    {{ __('Status:')}}
                                    <span>{{ __('Draft')}}</span>
                                    <a href="#">{{ __('Edit') }}</a>
                                </p>
                            </div>
                            <div>
                                <p><i class="fa fa-eye"></i>
                                    {{ __('Visibility:')}}
                                    <span>{{ __('Public')}}</span>
                                    <a href="#">{{ __('Edit') }}</a>
                                </p>
                            </div>
                        </div>
                        <div class="box-footer">                            
                            <button type="submit" class="btn btn-primary">{{ __('Update') }}</button>                            
                            <a href="{{ route('product.delete', $product->id) }}"
                                onclick="event.preventDefault();
                                            document.getElementById('delete-form').submit();">
                                <button class="btn btn-danger pull-left">{{ __('Delete') }}</button>
                            </a> 
                        </div>
                    </div>
                    <!-- /.box-footer (Update product action) --> 
                </section> 
                <!-- /. Publish Product  -->
 
                <section class="col-md-3">
                    <!-- Custom Tabs -->
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#all_categ" data-toggle="tab">All Categories</a></li>
                            <li><a href="#most_used" data-toggle="tab">Most Used</a></li>                            
                        </ul>
                        
                        <div class="tab-content product-category">
                            <div class="tab-pane active" id="all_categ">
                                <ul class="category-group">
                                    @foreach($categories as $category)
                                    <li id="">
                                        <label class="">
                                            <input value="{{ $category->id }}" type="checkbox" name="categ[]" {{ $product->checkUserCategory($product->categories, $category) }}> 
                                                {{ __($category->name) }}
                                        </label>
                                        @if (count($category->childs))                                        
                                            @include('admin.products.child-category',['childs'=>$category->childs,'is_create'=>0])
                                        @endif
                                    </li>     
                                    @endforeach                                                               
                                </ul>                                
                            </div>
                            <!-- /.tab-pane -->
                            <div class="tab-pane" id="most_used">
                                <p>tab2 content</p>
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Qui id numquam veniam perferendis et distinctio esse? Repellat assumenda dolorum earum dignissimos molestias voluptatem, aspernatur, quibusdam provident unde saepe tenetur incidunt.
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae recusandae eius sequi architecto veniam nesciunt laudantium, repellat laborum corrupti placeat quibusdam ipsam voluptates accusantium nulla quasi perspiciatis, libero, officiis amet?
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, commodi quae! Eligendi et, cupiditate deleniti tenetur quibusdam laborum dolor error esse, enim aut deserunt minus? Hic excepturi asperiores ipsa nobis.
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ducimus id earum ullam reiciendis voluptates ipsam et debitis similique consequatur eum rerum quas, quis, tempora dignissimos laboriosam nihil cupiditate. Eligendi, assumenda.
                            </div>
                            <!-- /.tab-pane -->                            
                        </div>
                        <!-- /.tab-content -->
                        <div class="tab-footer">
                            <a href="{{ route('category.create') }}"><i class="fa fa-plus"></i> Add new category</a>
                        </div>
                    </div>
                    <!-- nav-tabs-custom -->
                </section>                
                <!-- /. Product Category -->

                <section class="col-md-9">
                    <div class="box box-solid">
                        <div class="box-header with-border">
                            <h3 class="box-title">{{ __('Product Data') }}</h3>
                        </div> 
                        <!-- /. box-header -->

                        <div class="box-body">                            
                            <div class="form-group">
                                <label for="regular_price" class="col-sm-3 control-label">{{ __('Regular Price')}}</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="regular_price" name="regular_price" value="{{ $product->regular_price }}">
                                </div>
                            </div>
                            <!-- /. Regular price -->                            
                            
                            <div class="form-group">
                                <label for="sale_price" class="col-sm-3 control-label">{{ __('Sale Price')}}</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="sale_price" name="sale_price" value="{{ $product->sale_price }}">
                                </div>
                            </div>
                            <!-- /. Sale price -->                            

                            <div class="form-group">
                                <label for="sku" class="col-sm-3 control-label">{{ __('SKU')}}</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="sku" name="sku" value="{{ $product->sku }}">
                                </div>
                            </div>
                            <!-- /. SKU -->                            

                            <div class="form-group">
                                <label class="control-label in_stock col-sm-3" for="in_stock"> {{ __('In Stock')}}</label>                                                                
                                <div class="checkbox col-sm-1">
                                    <label class="control-label">
                                        <input type="checkbox" name="in_stock" id="in_stock" value="1" checked>
                                    </label>                                  
                                </div>
                                <!-- /. In stock checkbox -->

                                <div class="col-md-6">
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="stock_number" name="stock_number" value="{{ $product->stock_number }}" placeholder="Stock Number">
                                    </div>
                                </div>
                            </div>
                            <!-- /. Stock number -->                           
                
                            <div class="form-group">
                                <label for="weight" class="col-sm-3 control-label">{{ __('Weight')}} <span> {{ __('(kg)')}}</span></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="weight" name="weight" value="{{ $product->weight }}">
                                </div>
                            </div>
                            <!-- /. Weight -->
                        </div>
                        <!-- /. box body -->                      
                    </div>
                </section>   
                <!-- /. Product Data -->
                                                      
            </form> 
            
            <form id="delete-form" method="POST" action="{{ route('product.delete', $product->id) }}" style="display: none;">
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

<!-- Adding texteditor scripts -->
@section('footer')
    @include('components.texteditor', ['name'=>'description'])
@endsection