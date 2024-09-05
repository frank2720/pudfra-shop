@extends('layouts.main')
@section('title')
{{$product->name}} {{__('Quality Product at Maanar Shop')}}
@endsection
@section('content')
<div class = "container my-4">
    <div class = "row">
      <!-- card left -->
      <div class = "product-imgs col-md-6">
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
      <div class = "product-content col-md-6">
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
                  <p class = "last-price">Old Price: <span>Ksh {{number_format($product->retail_price)}}</span></p>
                  <p class = "new-price">New Price: <span>Ksh {{number_format($product->price)}}</span></p>    
              @else
              <p class = "new-price">Price: <span>Ksh {{number_format($product->price)}}</span></p>
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

<script>
  const imgs = document.querySelectorAll('.img-select a');
    const imgBtns = [...imgs];
    let imgId = 1;

    imgBtns.forEach((imgItem) => {
        imgItem.addEventListener('click', (event) => {
            event.preventDefault();
            imgId = imgItem.dataset.id;
            slideImage();
        });
    });

    function slideImage(){
        const displayWidth = document.querySelector('.img-showcase img:first-child').clientWidth;

        document.querySelector('.img-showcase').style.transform = `translateX(${- (imgId - 1) * displayWidth}px)`;
    }

    window.addEventListener('resize', slideImage);
</script>
@endsection