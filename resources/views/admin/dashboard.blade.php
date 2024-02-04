@extends('admin.main')
@section('content')
<button id="addproduct-btn" class="mt-5">Add Product</button><br>
<button id="addcategory-btn" class="mt-5"><a href="{{route('categories.index')}}">Add Category</a></button>
@endsection