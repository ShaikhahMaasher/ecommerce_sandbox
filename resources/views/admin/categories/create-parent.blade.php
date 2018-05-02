@extends('shop.shop_layouts.master')
@section('content')
<h3>Create a new parent category</h3>
<hr>
<div class="col-sm-8">
<form method="POST" action="{{asset('category/store-parent')}}">
{{ csrf_field() }}
  <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" class="form-control" id="name" name="name">
  </div>
  <div class="form-group">
    <label for="desc">Description:</label>
     <textarea name="desc" id="desc" cols="24" rows="6" class="form-control"></textarea>
  </div>
  <div class="form-group">
    <button type="submit" class="btn btn-primary">Create</button>
  </div>
  @include('shop.shop_layouts.errors')
</form>
</div>
@endsection
