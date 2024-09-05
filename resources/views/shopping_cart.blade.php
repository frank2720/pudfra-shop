@extends('layouts.main')
@section('title')
    {{__('Your products shopping cart at Maanar Shop')}}
@endsection
@section('content')

@if (session()->has('cart') && $totalPrice>0)

<!-- ====== Shopping Cart Start ====== -->
<div class="container py-3">
    <h3>Shopping Cart</h3>
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-8">
        @foreach ($cart_products as $product)
        <!-- single cart item  -->
        <hr style="margin:0rem 0rem" />
        <div class="cart-item">
            <div class="row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                <div class="d-flex justify-content-between mb-3">
                <img
                    class="cart-image d-block"
                    src="{{Storage::url($product['item']->images[0]->url??$product['item']->images[1]->url??null)}}"
                    alt=""
                />
                <div class="mx-3">
                    <p>{{$product['item']->name}}</p>
                    <h5>Ksh {{number_format($product['item']->price)}}</h5>
                    <small
                    class="text-white bg-success px-2 py-1 d-inline-block rounded-3 mt-2"
                    >In Stock</small
                    >
                </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                <div class="d-flex justify-content-between">
                <div>
                    <a href="{{route('reduceQty',['id'=>$product['item']->id])}}"><i class='bx bx-minus text-danger mx-4 h5'></i></a>
                    <select class="form-select">
                    <option selected disabled>{{__($product['qty'])}}</option>
                    </select>
                    <a href="{{route('increaseQty',['id'=>$product['item']->id])}}"><i class='bx bx-plus text-success mx-4 h5' ></i></a>
                </div>
                <div>
                    <a class="btn-close h3" href="{{route('removeProduct',['id'=>$product['item']->id])}}"></a>
                </div>
                </div>
            </div>
            </div>
        </div>
        <!-- ./ single cart item end  -->
        @endforeach
        <hr style="margin:0rem 0rem" />
        </div>
        <div class="col-12 col-sm-12 col-md-8 col-lg-4">
        <div class="bg-light rounded-3 p-4 sticky-top">
            <h6 class="mb-4">Order Summary</h6>
            <div class="d-flex justify-content-between align-items-center">
            <div>Subtotal</div>
            <div><strong>Ksh {{number_format($totalPrice)}}</strong></div>
            </div>
            <hr style="margin:0rem 0rem" />
            <div class="d-flex justify-content-between align-items-center">
                @php
                    $delivery = 100;
                    $Total = $totalPrice + $delivery
                @endphp
            <div>Delivery Charge</div>
            <div><strong>Ksh {{number_format($delivery)}}</strong></div>
            </div>
            <hr style="margin:0rem 0rem" />
            <div class="d-flex justify-content-between align-items-center">
            <div>Total</div>
            <div><strong>Ksh {{number_format($Total)}}</strong></div>
            </div>
            <form action="{{route('stkpush')}}" method="POST">
                @csrf
                <div class="form-group">
                    <input type="text" name="phone" style="border-radius: 1rem" required placeholder="Enter phone number" class="w-100 mt-4"/>
                    <button type="submit" class="button button_primary w-100 mt-4 btn checkout-payment__btn-place-order w-100 mt-4">Place order</button>
                </div>
            </form>
        </div>
        </div>
    </div>
</div>
<!-- ====== Shopping Cart End ====== -->
@else
<div class="tc my-60"><h1><i class='bx bx-shopping-bag display-1'></i></h1>
    <h3>Your cart is empty.</h3>
    <p class="return-to-shop mb__15">
        <a class="button button_primary tu js_add_ld" href="{{route('shop')}}">Return To Shop</a>
    </p>
</div>
@endif
<!--product recommendations section-->
<div class="kalles-section tp_se_cdt">
    <div class="related product-extra mt__70">
        <div class="container">
            <div class="wrap_title des_title_1 mb__20">
                <h3 class="section-title tc pr flex fl_center al_center fs__24 title_1">
                    <span class="mr__10 ml__10">You may also like</span></h3>
            </div>
            <div class="products nt_products_holder nt_slider row row_pr_1 cdt_des_1 round_cd_false nt_cover ratio_nt position_8 space_30 prev_next_0 btn_owl_1 dot_owl_1 dot_color_1 btn_vi_1 is-draggable" data-flickity='{"imagesLoaded": 0,"adaptiveHeight": 0, "contain": 1, "groupCells": "100%", "dragThreshold" : 5, "cellAlign": "left","wrapAround": true,"prevNextButtons": false,"percentPosition": 1,"pageDots": false, "autoPlay" : 0, "pauseAutoPlayOnHover" : true, "rightToLeft": false }'>
                @forelse ($recommendedProducts as $product)
                    <div class="col-lg-3 col-md-3 col-6 pr_animated done mt__30 pr_grid_item product nt_pr desgin__1">
                        <div class="product-inner pr">
                            <div class="product-image position-relative oh lazyload">
                                @if ($product->retail_price>$product->price)
                                    <span class="tc nt_labels pa pe_none cw">
                                        <span class="onsale nt_label">
                                            <span>{{round((($product->price-$product->retail_price)/$product->retail_price)*100)}} %</span>
                                        </span>
                                    </span>
                                @endif
                                <a class="d-block" href="{{route('product.details',['id'=>$product->id])}}">
                                    <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_571" data-bgset="{{Storage::url($product->images[0]->url??null)}}"></div>
                                </a>
                                <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                                    <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_571" data-bgset="{{Storage::url($product->images[1]->url??$product->images[0]->url??null)}}"></div>
                                </div>
                                <div class="hover_button op__0 tc pa flex column ts__03">
                                    <a href="" class="pr pr_atc cd br__40 bgw tc dib js__qs cb chp ttip_nt tooltip_top_left add-to-cart-btn" data-product-id="{{$product->id}}">
                                        <span class="tt_txt">Add to Cart</span>
                                        <i class='bx bxs-shopping-bag'></i>
                                        <span>Add to Cart</span>
                                    </a>
                                </div>
                            </div>
                            <div class="product-info mt__15">
                                <h3 class="product-title position-relative fs__14 mg__0 fwm">
                                    <a class="cd chp" href="{{route('product.details',['id'=>$product->id])}}">{{__(ucfirst(strtolower($product->name)))}}</a>
                                </h3>
                                <span class="price dib mb__5">Ksh {{number_format($product->price)}}</span>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse
            </div>
        </div>
    </div>
</div>
<!--end product recommendations section-->
@endsection