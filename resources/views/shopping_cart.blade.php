@extends('layouts.main')
@section('title')
    {{__('Products in cart')}}
@endsection
@section('content')
<!--cart section-->
<div class="kalles-section cart_page_section container mt__60">
    @if (session()->has('cart') && $totalPrice>0)
        <div class="cart_items js_cat_items">
            @foreach ($cart_products as $product)
            <div class="cart_item js_cart_item mb-3">
                <div class="ld_cart_bar"></div>
                <div class="row al_center">
                    <div class="col-12 col-md-12 col-lg-5">
                        <div class="page_cart_info flex al_center">
                            <a href="{{route('product.details',['id'=>$product['item']->id])}}">
                                <img class="lazyload w__100 lz_op_ef" style="width:120px; height:120px;object-fit:cover" src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%201128%201439%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" data-src="{{Storage::url($product['item']->images[0]->url??$product['item']->images[1]->url??null)}}" alt="">
                            </a>
                            <div class="mini_cart_body ml__15">
                                <h5 class="mini_cart_title mg__0 mb__5"><a href="{{route('product.details',['id'=>$product['item']->id])}}">{{$product['item']->name}}</a></h5>
                                <div class="mini_cart_meta"><p class="cart_selling_plan"></p></div>
                                <div class="mini_cart_tool mt__10">
                                    <a href="{{route('removefromCart',['id'=>$product['item']->id])}}" class="cart_ac_remove js_cart_rem ttip_nt tooltip_top_right"><span class="tt_txt">Remove this item</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <polyline points="3 6 5 6 21 6"></polyline>
                                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                            <line x1="10" y1="11" x2="10" y2="17"></line>
                                            <line x1="14" y1="11" x2="14" y2="17"></line>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 col-lg-3 tc__ tc_lg">
                        <div class="cart_meta_prices price">
                            <div class="cart_price">Ksh {{number_format($product['price'])}}</div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 col-lg-2 tc mini_cart_actions">
                        <div class="quantity pr mr__10 qty__true">
                            <input type="number" class="input-text qty text tc qty_cart_js" name="updates[]" value="{{$product['qty']}}">
                            <div class="qty tc fs__14">
                                <button type="button" class="plus db cb pa pd__0 pr__15 tr r__0">
                                    <i class='bx bx-plus'></i></button>
                                <button type="button" class="minus db cb pa pd__0 pl__15 tl l__0 qty_1">
                                    <i class='bx bx-minus'></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="cart__footer mt__60">
            <div class="row">
                <div class="col-12 tr_md tc order-md-4 order-4 col-md-6">
                    <div class="total row in_flex fl_between al_center cd fs__18 tu">
                        <div class="col-auto"><strong>Subtotal:</strong></div>
                        <div class="col-auto tr js_cat_ttprice fs__20 fwm">
                            <div class="cart_tot_price">Ksh {{number_format($totalPrice,2,'.',',')}}</div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="clearfix"></div>
                    <a href="{{route('checkout')}}" class="btn_checkout button button_primary tu mt__10 mb__10 js_add_ld w__100">Check out</a>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    @else
    <div class="empty tc mt__40"><i class="las la-shopping-bag pr mb__10"></i>
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