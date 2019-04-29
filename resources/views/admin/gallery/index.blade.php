@extends('layouts.backend.dashboard')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <h1>
                Gallery
                <small>List of all website images.</small>
            </h1>
        </div>
        <div class="content content-fluid">
            <div class="row gallery-list">
                @foreach($images as $image)
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="thumbnail thumbnail-box">
                        <a href="/w3images/nature.jpg">
                            <img src="{{ $image->getImage('products', $image->path)}}" alt="Nature" style="width:100%">
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection