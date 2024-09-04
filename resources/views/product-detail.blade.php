@extends('layouts.main')
@section('title')
{{$product->name}}{{__(' details')}}
@endsection
@section('content')
<div class = "container my-4">
    <div class = "card">
      <!-- card left -->
      <div class = "product-imgs">
        <div class = "img-display ml-4">
          <div class = "img-showcase">
            @foreach ($product->images as $index => $image)
                <img src = "{{ Storage::url($image->url) }}" alt = "">
            @endforeach
          </div>
        </div>
        @php
            $number_pics = count($product->images)
        @endphp
        @if ($number_pics>1)
        <div class = "img-select">
          @foreach ($product->images as $index => $image)
              <div class="img-item">
                  <a href="#" data-id="{{ $index + 1 }}">
                      <img src="{{ Storage::url($image->url) }}" alt="">
                  </a>
              </div>
          @endforeach
      </div>
        @endif
      </div>
      <!-- card right -->
      <div class = "product-content">
        <h2 class = "product-name">{{$product->name}}</h2>
        <div class = "product-rating">
          <i class='bx bxs-star' ></i>
          <i class='bx bxs-star' ></i>
          <i class='bx bxs-star' ></i>
          <i class='bx bxs-star' ></i>
          <i class='bx bxs-star-half' ></i>
          <span>4.7(21)</span>
        </div>
  
        <div class = "product-price">
            @if ($product->price<$product->retail_price)
                <p class = "last-price">Old Price: <span><ins>Ksh {{number_format($product->retail_price)}}</ins></span></p>
                <p class = "new-price">New Price: <span><ins>Ksh {{number_format($product->price)}}</ins></span></p>    
            @else
            <p class = "new-price">Price: <span><ins>Ksh {{number_format($product->price)}}</ins></span></p>
            @endif
        </div>
  
        <div class = "product-detail">
          <h2>about this item: </h2>
          <p>{!! $product->description !!}</p>
        </div>
  
        <div class = "purchase-info">
          <button type = "button" data-product-id="{{$product->id}}" class = "add-to-cart-btn">
            Add to Cart <i class = "fas fa-shopping-cart"></i>
          </button>
        </div>
      </div>
    </div>
  </div>
@endsection