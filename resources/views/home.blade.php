@extends('layouts.main')
@section('content')

<div class="row p-5 align-items-center" style="background-image:url(https://images.pexels.com/photos/7130560/pexels-photo-7130560.jpeg);background-size:cover">
    <div class="col-md-6">
        <h1>Maanar-shop# comfort shopping</h1>
        <p>This a platform developed for convenient shopping. It is useful for both customers and retailers for they can update each products in their store</p>
        <div class="d-flex gap-2">
            <a href="" class="btn btn-dark">Contact</a>
            <a href="https://pudfra-talk.xyz/" class="btn btn-outline-dark">Know More</a>
        </div>
    </div>
    <div class="col-md-6 text-center">
        <img src="{{asset('assets/images/ban1.jpg')}}" class="img-fluid rounded-circle w-50" alt="">
    </div>
</div> 

<div class="container">
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
    <div class="row">
        @foreach ($recent_products as $product)
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
            <div class="price">$ {{__(number_format($product->price))}}</div>
        </div>
        @endforeach
    </div>
    <div class="clearfix">{{$recent_products->links()}}</div>
</div>
@endsection
