@extends('admin.main')
@section('title')
    {{__('List of products')}}
@endsection
@section('maintitle')
    {{__('Ecommerce')}}
@endsection
@section('pagetitle')
    {{__('Products')}}
@endsection
@section('content')
<!-- Top Selling -->
<div class="col-12 dashboard">
    <div class="card products_list overflow-auto">

    <div class="card-body pb-0">
    <h5 class="card-title">List of Available Products</h5>
    <button class="btn btn-primary rounded-pill mb-3" data-bs-toggle="modal" data-bs-target="#addproduct">Add Products</button>
    <table class="table table-bordered border-primary">
        <thead>
        <tr>
            <th scope="col">Preview</th>
            <th scope="col">Product</th>
            <th scope="col">Category</th>
            <th scope="col">Price</th>
            <th scope="col">Old price</th>
            <th scope="col">Discount</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($products as $product)
        <tr>
            <td scope="row"><a href="{{route('admin.products.edit',['product'=>$product->id])}}"><img src="{{Storage::url($product->images[0]->url??null)}}" alt=""></a></td>
            <td>{{$product->name}}</td>
            <td>{{$product->category->category??null}}</td>
            <td>{{number_format($product->price)}}</td>
            <td>{{number_format($product->retail_price)}}</td>
            <td>{{$product->retail_price>$product->price?round((($product->retail_price-$product->price)/$product->retail_price)*100).__('%'):null}}</td>
            <td>
                <ul class="list-inline m-0">
                    <li class="list-inline-item">
                        <a href="{{route('admin.products.edit',['product'=>$product->id])}}"><i class='bx bx-edit-alt' title="edit"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="{{route('admin.products.destroy',['product'=>$product->id])}}" class="text-danger"><i class='bx bx-trash' title="delete"></i></a>
                    </li>
                </ul>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>

    </div>

    </div>
    <div class="clearfix">
        {{$products->links()}}
    </div>
</div><!-- End Top Selling -->
@endsection