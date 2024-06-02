<!-- Edit Modal HTML -->
@extends('admin.main')
@section('title')
    {{__('Product edit')}}
@endsection
@section('maintitle')
    {{__('Ecommerce')}}
@endsection
@section('pagetitle')
    {{__('Edit')}}
@endsection
@section('content')
<div class="card overflow-auto">
    <div class="card-body pb-0">
        <h5 class="card-title">Update Product details</h5>
        <form action="{{route('admin.products.update',['id'=>$product->id])}}" method="POST">
            @csrf
            @method('put')
                <div class="form-group">
                    <label>{{__('Product Name')}}</label>
                    <input class="form-control" type="text" name="name" value="{{$product->name}}">
                </div>
                <div class="form-group">
                    <label>{{__('Product Price')}}</label>
                    <input class="form-control" type="number" min="0" name="price" value="{{$product->price}}">
                </div>
                <div class="form-group">
                    <label>{{__('Retail Price')}}</label>
                    <input class="form-control" type="number" min="0" name="retail_price" value="{{$product->retail_price}}">
                </div>
                <div class="form-group">
                    <label>{{__('Description')}}</label>
                    <textarea class="form-control" type="text" name="description">{{$product->description}}</textarea>
                </div>
            <div class="mt-3">
                <a href="{{route('admin.products.list')}}" class="btn btn-default">{{__('Cancel')}}</a>
                <input type="submit" class="btn btn-success" value="Update">
            </div>
        </form>
    </div>
</div>
@endsection
