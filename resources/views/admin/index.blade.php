@extends('admin.main')
@section('content')
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
    <div class="table-wrapper table-responsive">
    <div class="table-title">
        <div class="row">
            <div class="col-sm-6">
                <h2>Manage <b>Products</b></h2>
            </div>
            <div class="col-sm-6">
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addModal"><i class='bx bx-folder-plus'></i><span>Add New Product</span></button>						
            </div>
        </div>
    </div>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Price</th>
                <th>Old price</th>
                <th>Discount</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <td><img src="{{Storage::url($product->images[0]->url)}}" alt="" style="height: 30px"></td>
                <td>{{$product->name}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->retail_price}}</td>
                @if ($product->retail_price>$product->price)
                <td>{{__(round((($product->retail_price-$product->price)/$product->retail_price)*100))}}%</td>
                @else
                <td>{{__('--')}} </td>
                @endif

                <td>
                    <a href="{{route('products.edit',['product'=>$product->id])}}" class="edit"><i class='bx bx-edit-alt' title="edit"></i></a>
                    <a href="{{route('products.destroy',['product'=>$product->id])}}" class="delete" data-toggle="modal"><i class='bx bx-trash' title="delete"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="clearfix">
        {{$products->links()}}
    </div>
    </div>
@endsection