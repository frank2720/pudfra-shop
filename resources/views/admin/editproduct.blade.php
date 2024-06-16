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
        <style>
            .remove-image {
            display: none;
            position: absolute;
            top: -10px;
            right: -10px;
            border-radius: 10em;
            padding: 2px 6px 3px;
            text-decoration: none;
            font: 700 21px/20px sans-serif;
            background: #555;
            border: 3px solid #fff;
            color: #FFF;
            box-shadow: 0 2px 6px rgba(0,0,0,0.5), inset 0 2px 4px rgba(0,0,0,0.3);
            text-shadow: 0 1px 2px rgba(0,0,0,0.5);
            -webkit-transition: background 0.5s;
            transition: background 0.5s;
            }
            .remove-image:hover {
            background: #E54E4E;
            padding: 3px 7px 5px;
            top: -11px;
            right: -11px;
            }
            .remove-image:active {
            background: #E54E4E;
            top: -10px;
            right: -11px;
            }
            .image-area {
            position: relative;
            }
            .image-area img{
            max-width: 100%;
            height: auto;
            }
            .row {
            display: flex;
            }

            .column {
            flex: 20%;
            padding: 5px;
            }
        </style>
        <div class="row mt-3">
            @foreach ($images as $image)
            <div class="column">
                <div class="image-area">
                    <img src="{{Storage::url($image->url??null)}}"  alt="product image">
                    <a class="remove-image" href="{{route('admin.image.delete',['id'=>$image->id])}}" style="display: inline;">&#215;</a>
                </div>
            </div>
            @endforeach
        </div> 
        <form action="{{route('admin.products.update',['id'=>$product->id])}}" method="POST">
            @csrf
            @method('patch')
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
