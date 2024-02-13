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
        <div class="price">$ {{__(number_format($product->price))}}</div>
    </div>
    @endforeach
</div>
{{$products->links()}}