<!-- Edit Modal HTML -->
@extends('admin.main')
@section('content')
    <form action="{{route('products.update',['id'=>$product->id])}}" method="POST">
        @csrf
        @method('put')
        <div class="modal-header">						
            <h4 class="modal-title">{{__('Update Product')}}</h4>
        </div>
        <div class="modal-body">					
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
        </div>
        <div class="modal-footer">
            <a href="/admin/home" class="btn btn-default">{{__('Cancel')}}</a>
            <input type="submit" class="btn btn-success" value="Update">
        </div>
    </form>
@endsection