@extends('shop.shop_layouts.master')
@section('head')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">    
  <link href="{{ asset('css/product.css') }}" rel="stylesheet">    
@endsection

@section('content')
    <div class="container">
        <div class="card">
            <div class="container-fliud">
                <div class="wrapper row">
                    <div class="preview col-md-6">
                        @php $productGallery = $product->getImage('gallery'); @endphp
                        <div class="preview-pic tab-content">                           
                            <div class="tab-pane active" id="pic-1"><img width="513px" height="323px" src="{{ $product->getImage('feature') }}" /></div>
                            @for($i=0; $i < sizeof($productGallery); $i++)                                 
                                <div class="tab-pane" id="pic-{{$i+2}}"><img width="513px" height="323px" src="{{ $productGallery["$i"] }}" /></div>
                            @endfor
                        </div>
                        <ul class="preview-thumbnail nav nav-tabs">
                            <li class="active"><a data-target="#pic-1" data-toggle="tab"><img width="90px" height="57px" src="{{ $product->getImage('feature') }}" /></a></li>
                            @for($i=0; $i < sizeof($productGallery); $i++)                             
                                <li><a data-target="#pic-{{$i+2}}" data-toggle="tab"><img width="90px" height="57px" src="{{ $productGallery["$i"] }}" /></a></li>
                            @endfor
                        </ul>
                    </div>
                    <div class="details col-md-6">
                        <h3 class="product-title">{{ $product->title }}</h3>
                        <div class="rating">
                            <div class="stars">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                            <span class="review-no">41 reviews</span>
                        </div>
                        <p class="product-description">{{ $product->short_description }}</p>
                        @if($product->currentPrice())
                        <h4 class="price">Price: <span>$</span><span>{{ $product->currentPrice() }}</span></h4>
                        @endif
                        <p class="vote"><strong>91%</strong> of buyers enjoyed this product! <strong>(87 votes)</strong></p>
                        <h5 class="sizes">sizes:
                            <span class="size" data-toggle="tooltip" title="small">s</span>
                            <span class="size" data-toggle="tooltip" title="medium">m</span>
                            <span class="size" data-toggle="tooltip" title="large">l</span>
                            <span class="size" data-toggle="tooltip" title="xtra large">xl</span>
                        </h5>
                        <h5 class="colors">colors:
                            <span class="color orange not-available" data-toggle="tooltip" title="Not In store"></span>
                            <span class="color green"></span>
                            <span class="color blue"></span>
                        </h5>
                        <div class="action">
                            <button class="add-to-cart btn btn-default" type="button">add to cart</button>
                            <button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
