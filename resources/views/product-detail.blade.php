@extends('layouts.main')
@section('content')
<div class="container">
    <div class="card">
        <div class="row">
        <aside class="col-sm-5 border-right">
                <article class="gallery-wrap"> 
                    <div class="img-big-wrap">
                        <div> <a href="#"><img src="{{Storage::url($product->images[0]->url)}}"></a></div>
                    </div>
                    <div class="img-small-wrap">
                        @foreach ($product->images as $image)
                            <div class="item-gallery"><img src="{{Storage::url($image->url)}}" height="256"></div>
                        @endforeach
                    </div>
                    <div class="zoomed-image"></div>
                </article>
		</aside>
        <aside class="col-sm-7">
            <article class="card-body p-5">
                <h3 class="title mb-3">{{$product->name}}</h3>
                <p class="price-detail-wrap"> 
                    <span class="price h3 text-warning"> 
                        <span class="currency">$</span><span class="num">{{$product->price}}</span>
                    </span>
                </p>
                <dl class="item-property">
                    <dt>Description</dt>
                    <dd>
                        <p>{{$product->description}}
                        </p>
                    </dd>
                </dl>
                <hr>
                <button type="submit" data-time="6000" data-ani="shake" class="single_add_to_cart_button button truncate w__100 mt__20 order-4 d-inline-block animated">
                        <span class="txt_add ">Add to cart</span>
                </button>
            </article>
		</aside>
    </div>
</div>
</div>
@endsection