@extends('layouts.main')
@section('title')
    {{__('Products in cart')}}
@endsection
@section('content')
<!--cart section-->
<div class="container mt__60">
    @if (session()->has('cart') && $totalPrice>0)
        <div class="card cart-card mt-5 mb-5 cart">
            <div class="d-flex justify-content-center row">
                <div class="">
                    <div class="p-2">
                        <h4><b>Shopping Cart</b></h4>
                    </div>
                    @foreach ($cart_products as $product)
                        <div class="row border-bottom">
                            <div class="row align-items-center">
                                <div class="col-2"><img class="img-fluid rounded" style="width: 3.5rem" src="{{Storage::url($product['item']->images[0]->url??$product['item']->images[1]->url??null)}}"></div>
                                <div class="col">
                                    <div class="row">{{$product['item']->name}}</div>
                                </div>
                                <div class="col">
                                    <a href="{{route('reduceQty',['id'=>$product['item']->id])}}"><i class='bx bx-minus text-danger mx-2'></i></a>
                                    <a href="" class="border">{{__($product['qty'])}}</a>
                                    <a href="{{route('increaseQty',['id'=>$product['item']->id])}}"><i class='bx bx-plus text-success mx-2' ></i></a>
                                </div>
                                <div class="col"><a href="{{route('removeProduct',['id'=>$product['item']->id])}}"><span class="text-danger font-weight-bold">&#10005;</span></a></div>
                            </div>
                        </div>
                    @endforeach

                    <form action="{{route('stkpush')}}" method="POST" class="form-inline">
                        @csrf
                        <div class="form-group">
                            <label for="no." class="small fw-bold mt-3">PHONE NUMBER</label>
                            <input type="text" name="phone" style="border-radius: 1rem" required placeholder="Enter phone number" class="my-3"/>
                            <button type="submit" class="button button_primary btn checkout-payment__btn-place-order">Place order</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @else
    <div class="tc my-60"><h1><i class='bx bx-shopping-bag display-1'></i></h1>
        <h3>Your cart is empty.</h3>
        <p class="return-to-shop mb__15">
            <a class="button button_primary tu js_add_ld" href="{{route('shop')}}">Return To Shop</a>
        </p>
    </div>
    @endif
</div>
<!--end cart section-->

<!--product recommendations section-->
<div class="kalles-section tp_se_cdt">
    <div class="related product-extra mt__70">
        <div class="container">
            <div class="wrap_title des_title_1 mb__20">
                <h3 class="section-title tc pr flex fl_center al_center fs__24 title_1">
                    <span class="mr__10 ml__10">You may also like</span></h3>
            </div>
            <div class="products nt_products_holder nt_slider row row_pr_1 cdt_des_1 round_cd_false nt_cover ratio_nt position_8 space_30 prev_next_0 btn_owl_1 dot_owl_1 dot_color_1 btn_vi_1 is-draggable" data-flickity='{"imagesLoaded": 0,"adaptiveHeight": 0, "contain": 1, "groupCells": "100%", "dragThreshold" : 5, "cellAlign": "left","wrapAround": true,"prevNextButtons": false,"percentPosition": 1,"pageDots": false, "autoPlay" : 0, "pauseAutoPlayOnHover" : true, "rightToLeft": false }'>
                @forelse ($trending_products as $product)
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
                                        <span class="tt_txt">Quick Shop</span>
                                        <i class='bx bxs-cart-add'></i>
                                        <span>Quick Shop</span>
                                    </a>
                                </div>
                            </div>
                            <div class="product-info mt__15">
                                <h3 class="product-title position-relative fs__14 mg__0 fwm">
                                    <a class="cd chp" href="{{route('product.details',['id'=>$product->id])}}">{{__(ucfirst(strtolower($product->name)))}}</a>
                                </h3>
                                <span class="price dib mb__5">Ksh {{number_format($product->price,2,".",",")}}</span>
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