@extends('shop.shop_layouts.master')
@section('content')
<h3>List of Categories</h3>
<hr>
<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">Panel heading</div>
  <div class="panel-body">
      <div class="col-sm-6">
                  <a class='col-sm-4' href="category/create"> 
                        <button type="button" class="btn btn-primary btn-sm">
                        Add new Category
                        </button>
                  </a>
                  <a class='col-sm-4' href="category/create-parent"> 
                        <button type="button" class="btn btn-primary btn-sm">
                        Add new Parent Category
                        </button>
                  </a>
  </div>
  <br>
  <hr>
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
      <th rowspan="{{count($parent->categories)+1}}" scope="row">{{$parent->id}}</th>
      <th rowspan="{{count($parent->categories)+1}}"><a href="#">{{$parent->name}}</a></th>
      <th rowspan="{{count($parent->categories)+1}}"  >{{$parent->desc}}</th>
      @foreach ($parent->categories as $child) 
      <tr>
      <td>
            <span class='col-sm-3'>{{$child->name}}</span>
            <a class='col-sm-3' href="#"> 
                  <button type="button" class="btn btn-warning">
                  <span class="glyphicon glyphicon-pencil">
                  </span>
                  </button>
            </a>
            <a class='col-sm-3' href="#"> 
                  <button type="button" class="btn btn-danger">
                  <span class="glyphicon glyphicon-trash">
                  </span>
                  </button>
            </a>
      </td>
      </tr>
      @endforeach
</tr>
@endforeach
  </table>
</div>
@endsection
