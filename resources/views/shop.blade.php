@extends('layouts.main')
@section('content')
<div class="container">
    <div><br></div>
    <header class="navbar navbar-expand-md navbar-light bg-white">
        <div class="container-fluid p-0"> <a class="navbar-brand text-uppercase fw-800" href="#"><span class="border-red pe-2">Available</span>Products</a> <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#myNav" aria-controls="myNav" aria-expanded="false" aria-label="Toggle navigation"> <span class="fas fa-bars"></span> </button>
            <div class="collapse navbar-collapse" id="myNav">
                <div class="navbar-nav ms-auto"> 
                    <a class="nav-link active" aria-current="page" href="#">All</a> 
                    @foreach ($categories as $category)
                    <a class="nav-link" href="#">{{$category->category}}</a>
                    @endforeach
                </div>
            </div>
        </div>
    </header>
    <div class="shop-data">
        <div class="row">
            @foreach ($products as $product)
            <div class="col-lg-3 col-sm-6 d-flex flex-column align-items-center justify-content-center product-item my-3">
                <div class="product"> <img src="{{Storage::url($product->img)}}" alt="">
                    <ul class="d-flex align-items-center justify-content-center list-unstyled icons">
                        <li class="icon"><span class="fas fa-expand-arrows-alt"></span></li>
                        <li class="icon mx-3"><span class="far fa-heart"></span></li>
                        <a href="#" class="icon add-to-cart-btn" data-product-id="{{ $product->id }}">
                            <i class="fas fa-shopping-bag"></i>
                        </a>
                    </ul>
                </div>
                @if ($product->retail_price > $product->price)
                    <div class="tag bg-red"><i>{{__(round((($product->retail_price-$product->price)/$product->retail_price)*100))}}%</i> off</div>
                @endif
                <div class="title pt-4 pb-1">{{__(ucfirst(strtolower($product->name)))}}</div>
                <div class="d-flex align-content-center justify-content-center"> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> </div>
                <div class="price">Ksh {{__(number_format($product->price))}}</div>
            </div>
            @endforeach
        </div>
        {{$products->links()}}
    </div>
</div>
@endsection