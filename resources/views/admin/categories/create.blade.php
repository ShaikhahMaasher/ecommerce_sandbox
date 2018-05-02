@extends('shop.shop_layouts.master')
@section('content')
<h3>Create a new category</h3>
<hr>
<div class="col-sm-8">
<form method="POST" action="{{asset('category/store')}}">
{{ csrf_field() }}
  <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" class="form-control" id="name" name="name">
  </div>
  <div class="form-group">
    <label for="slug">Slug:</label>
    <input type="text" class="form-control" id="slug" name="slug">
  </div>
  <div class="form-group">
    <label for="desc">Description:</label>
     <textarea name="desc" id="desc" cols="24" rows="6" class="form-control"></textarea>
  </div>
  <div class="form-group">
  <select id='parent_categories_id' name='parent_categories_id' class="form-control" >
      <option value=''>select parent</option>
        @foreach ($parentsCategory as $parent) 
       <option value='{{$parent->id}}'>{{$parent->name}}</option>
  @endforeach
</select>
</div>
  <div class="form-group">
    <button type="submit" class="btn btn-primary">Create</button>
  </div>
  @include('shop.shop_layouts.errors')
</form>
</div>
@endsection
