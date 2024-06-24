@extends('layouts.main')
@section('title')
    {{__('Products in cart')}}
@endsection
@section('content')
<!--cart section-->
<div class="kalles-section cart_page_section container mt__60">
    @if (session()->has('cart') && $totalPrice>0)
        <div class="container mt-5 mb-5">
            <div class="d-flex justify-content-center row">
                <div class="col-md-8">
                    <div class="p-2">
                        <h4>Shopping cart</h4>
                    </div>
                    @foreach ($cart_products as $product)
                        <div class="d-flex flex-row justify-content-between align-items-center p-2 bg-white mt-4 px-3 rounded">
                            <div class="mr-1"> <a href="{{route('product.details',['id'=>$product['item']->id])}}"><img class="rounded" src="{{Storage::url($product['item']->images[0]->url??$product['item']->images[1]->url??null)}}" width="70"></a></div>
                            <div class="d-flex flex-column align-items-center product-details"><span class="font-weight-bold">{{$product['item']->name}}</span>
                                <div class="d-flex flex-row product-desc">
                                    <div class="size mr-1"><span class="text-grey"></span><span class="font-weight-bold">&nbsp;</span></div>
                                    <div class="color"><span class="text-grey"></span><span class="font-weight-bold">&nbsp;</span></div>
                                </div>
                            </div>
                            <div class="d-flex flex-row align-items-center qty"><i class='bx bx-minus text-danger' ></i>
                                <h5 class="text-grey mt-1 mr-1 ml-1">{{__($product['qty'])}}</h5><i class='bx bx-plus text-success' ></i></div>
                            <div>
                                <h5 class="text-grey">Ksh {{number_format($product['price'],2,'.',',')}}</h5>
                            </div>
                            <div class="d-flex align-items-center"><a href="{{route('removefromCart',['id'=>$product['item']->id])}}"><i class='bx bx-trash mb-1 text-danger'></i></a></div>
                        </div>
                    @endforeach
                    <div class="d-flex flex-row align-items-center mt-3 p-2 bg-white rounded"><a href="{{route('checkout')}}" class="btn btn-primary btn-block btn-lg ml-2 pay-button">Proceed to Pay</a></div>
                </div>
            </div>
        </div>
    @else
    <div class="empty tc mt__40"><i class='bx bx-shopping-bag'></i>
        <p>Your cart is empty.</p>
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