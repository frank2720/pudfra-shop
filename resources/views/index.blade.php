@extends('main')
@section('content')
            <!-- main slide -->
            <div class="nt_section type_slideshow type_carousel ">
                <div class="slideshow-wrapper nt_full se_height_cus_h nt_first">
                    <div class="fade_flick_1 slideshow row no-gutters equal_nt nt_slider js_carousel prev_next_0 btn_owl_1 dot_owl_2 dot_color_1 btn_vi_2" data-flickity='{ "fade":0,"cellAlign": "center","imagesLoaded": 0,"lazyLoad": 0,"freeScroll": 0,"wrapAround": true,"autoPlay" : 0,"pauseAutoPlayOnHover" : true, "rightToLeft": false, "prevNextButtons": false,"pageDots": true, "contain" : 1,"adaptiveHeight" : 1,"dragThreshold" : 5,"percentPosition": 1 }'>
    
                        <!-- first slide -->
                        <div class="col-12 slideshow__slide">
                            <div class="oh position-relative nt_img_txt bg-black--transparent">
                                <div class="js_full_ht4 img_slider_block kalles-slide-element__pdb-600">
                                    <div class="bg_rp_norepeat bg_sz_cover lazyload item__position center center img_tran_ef pa l__0 t__0 r__0 b__0" data-bgset="assets/images/slide/slider-01.jpg"></div>
                                </div>
                                <div class="caption-wrap caption-w-1 pe_none z_100 tl_md tl">
                                    <div class="pa_txts caption kalles-caption-layout-01 kalles-caption--midle-left">
                                        <div class="left_right">
                                            <h4 class="kalles-caption-layout-01__subtitle mg__0 lh__1">SUMMER 2020</h4>
                                            <h3 class="kalles-caption-layout-01__title mg__0 lh__1">New Arrival Collection</h3>
                                            <a class="kalles-caption-layout-01__button kalles-button--square slt4_btn button pe_auto round_false btn_icon_false" href="shop-filter-options.html">Explore Now</a>
                                        </div>
                                    </div>
                                </div>
                                <a href="shop.html" class="pa t__0 l__0 b__0 r__0 pe_none"></a>
                            </div>
                        </div>
                        <!-- end first slide -->
    
                        <!-- second slide -->
                        <div class="col-12 slideshow__slide">
                            <div class="oh position-relative nt_img_txt bg-black--transparent">
                                <div class="js_full_ht4 img_slider_block kalles-slide-element__pdb-600">
                                    <div class="bg_rp_norepeat bg_sz_cover lazyload item__position center center img_zoom pa l__0 t__0 r__0 b__0" data-bgset="assets/images/slide/slider-02.jpg"></div>
                                </div>
                                <div class="caption-wrap caption-w-1 pe_none z_100 tr_md tl">
                                    <div class="pa_txts caption kalles-caption-layout-01 kalles-caption--midle-right">
                                        <div class="right_left">
                                            <h4 class="kalles-caption-layout-01__subtitle mg__0 lh__1">NEW SEASON</h4>
                                            <h3 class="kalles-caption-layout-01__title mg__0 lh__1">Lookbook Collection</h3>
                                            <a class="kalles-caption-layout-01__button kalles-button--square slt4_btn button pe_auto round_false btn_icon_false" href="shop-filter-options.html">Explore Now</a>
                                        </div>
                                    </div>
                                </div>
                                <a href="shop.html" class="pa t__0 l__0 b__0 r__0 pe_none"></a>
                            </div>
                        </div>
                        <!-- end second slide -->
    
                        <!-- third slide -->
                        <div class="col-12 slideshow__slide">
                            <div class="oh position-relative nt_img_txt bg-black--transparent">
                                <div class="js_full_ht4 img_slider_block kalles-slide-element__pdb-600">
                                    <div class="bg_rp_norepeat bg_sz_cover lazyload item__position center center img_tran_ef pa l__0 t__0 r__0 b__0" data-bgset="assets/images/slide/slider-03.jpg"></div>
                                </div>
                                <div class="caption-wrap caption-w-1 pe_none z_100 tl_md tl">
                                    <div class="pa_txts caption kalles-caption-layout-01 kalles-caption--midle-left">
                                        <div class="left_right">
                                            <h4 class="kalles-caption-layout-01__subtitle mg__0 lh__1">SUMMER SALE</h4>
                                            <h3 class="kalles-caption-layout-01__title mg__0 lh__1">Save up to 70%</h3>
                                            <a class="kalles-caption-layout-01__button kalles-button--square slt4_btn button pe_auto round_false btn_icon_false" href="shop-filter-options.html">Explore Now</a>
                                        </div>
                                    </div>
                                </div>
                                <a href="shop.html" class="pa t__0 l__0 b__0 r__0 pe_none"></a>
                            </div>
                        </div>
                        <!-- end third slide -->
    
                    </div>
                </div>
            </div>
            <!-- end main slide -->
    
            <!-- featured collection -->
            <div class="nt_section type_featured_collection tp_se_cdt">
                <div class="kalles-otp-01__feature container">
                    <div class="wrap_title des_title_2">
                        <h3 class="section-title tc position-relative flex fl_center al_center fs__24 title_2">
                            <span class="mr__10 ml__10">TRENDING</span>
                        </h3>
                        <span class="dn tt_divider">
                            <span></span>
                            <i class="dn clprfalse title_2 la-gem"></i>
                            <span></span>
                        </span>
                        <span class="section-subtitle db tc sub-title">Top view in this week</span>
                    </div>
                    {{$recent_products}}
                    <div class="products nt_products_holder row fl_center row_pr_1 cdt_des_5 round_cd_true nt_cover ratio_nt position_8 space_30">
                        @foreach ($recent_products as $product)
                        <div class="col-lg-3 col-md-3 col-6 pr_animated done mt__30 pr_grid_item product nt_pr desgin__1">
                            <div class="product-inner pr">
                                <div class="product-image position-relative oh lazyload">
                                    <span class="tc nt_labels pa pe_none cw">
                                        <span class="nt_label new">New</span>
                                    </span>
                                    <a class="d-block" href="product-detail-layout-01.html">
                                        <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_571" data-bgset="{{$product->images[0]->url}}"></div>
                                    </a>
                                    <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                                        <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_571" data-bgset="{{$product->images[1]->url}}"></div>
                                    </div>
                                    <div class="nt_add_w ts__03 pa ">
                                        <a href="#" class="wishlistadd cb chp ttip_nt tooltip_right">
                                            <span class="tt_txt">Add to Wishlist</span>
                                            <i class="facl facl-heart-o"></i>
                                        </a>
                                    </div>
                                    <div class="hover_button op__0 tc pa flex column ts__03">
                                        <a class="pr nt_add_qv js_add_qv cd br__40 pl__25 pr__25 bgw tc dib ttip_nt tooltip_top_left" href="#">
                                            <span class="tt_txt">Quick view</span>
                                            <i class="iccl iccl-eye"></i>
                                            <span>Quick view</span>
                                        </a>
                                        <a href="#" class="pr pr_atc cd br__40 bgw tc dib js__qs cb chp ttip_nt tooltip_top_left">
                                            <span class="tt_txt">Quick Shop</span>
                                            <i class="iccl iccl-cart"></i>
                                            <span>Quick Shop</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-info mt__15">
                                    <h3 class="product-title position-relative fs__14 mg__0 fwm">
                                        <a class="cd chp" href="product-detail-layout-01.html">{{$product->name}}</a>
                                    </h3>
                                    <span class="price dib mb__5">$ {{number_format($product->price,2,".",",")}}</span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
    
                    <div class="products-footer tc mt__40">
                        <a class="se_cat_lm pr nt_cat_lm button button_default br_rd_true btn_icon_false" href="#">Load More</a>
                    </div>
                </div>
            </div>
            <!-- end featured collection -->
    
            <!-- bestseller products-->
            <div class="kalles-section nt_section type_featured_collection tp_se_cdt">
                <div class="kalles-otp-01__featured-collection-2 container">
                    <div class="wrap_title  des_title_2">
                        <h3 class="section-title tc pr flex fl_center al_center fs__24 title_2">
                            <span class="mr__10 ml__10">BEST SELLER</span>
                        </h3>
                        <span class="dn tt_divider">
                        <span></span>
                        <i class="dn clprfalse title_2 la-gem"></i>
                        <span></span>
                    </span>
                        <span class="section-subtitle db tc sub-title">Top sale in this week</span>
                    </div>
    
                    <div class="products nt_products_holder row fl_center row_pr_1 cdt_des_1 round_cd_false nt_cover ratio_nt position_8 space_30">
    
                        <div class="col-lg-3 col-md-3 col-6 pr_animated done mt__30 pr_grid_item product nt_pr desgin__1">
                            <div class="product-inner pr">
                                <div class="product-image pr oh">
    
                                    <a class="d-block" href="product-detail-layout-01.html">
                                        <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_586" data-bgset="assets/images/products/pr-29.jpg"></div>
                                    </a>
                                    <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                                        <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_586" data-bgset="assets/images/products/pr-30.jpg"></div>
                                    </div>
                                    <div class="nt_add_w ts__03 pa ">
                                        <a href="#" class="wishlistadd cb chp ttip_nt tooltip_right">
                                            <span class="tt_txt">Add to Wishlist</span>
                                            <i class="facl facl-heart-o"></i>
                                        </a>
                                    </div>
                                    <div class="hover_button op__0 tc pa flex column ts__03">
                                        <a class="pr nt_add_qv js_add_qv cd br__40 pl__25 pr__25 bgw tc dib ttip_nt tooltip_top_left" href="#">
                                            <span class="tt_txt">Quick view</span>
                                            <i class="iccl iccl-eye"></i>
                                            <span>Quick view</span>
                                        </a>
                                        <a href="#" class="pr pr_atc cd br__40 bgw tc dib js_addtc cb chp ttip_nt tooltip_top_left">
                                            <span class="tt_txt">Add to cart</span>
                                            <i class="iccl iccl-cart"></i>
                                            <span>Add to cart</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-info mt__15">
                                    <h3 class="product-title pr fs__14 mg__0 fwm">
                                        <a class="cd chp" href="product-detail-layout-01.html">City Backpack Black</a>
                                    </h3>
                                    <span class="price dib mb__5">$55.00</span>
                                </div>
                            </div>
                        </div>
    
                        <div class="col-lg-3 col-md-3 col-6 pr_animated done mt__30 pr_grid_item product nt_pr desgin__1">
                            <div class="product-inner pr">
                                <div class="product-image pr oh lazyload">
    
                                    <a class="d-block" href="product-detail-layout-01.html">
                                        <div class="pr_lazy_img main-img padding-top__127_586 nt_img_ratio nt_bg_lz lazyload" data-bgset="assets/images/products/pr-11.jpg"></div>
                                    </a>
                                    <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                                        <div class="pr_lazy_img back-img padding-top__127_586 pa nt_bg_lz lazyload" data-bgset="assets/images/products/pr-10.jpg"></div>
                                    </div>
                                    <div class="nt_add_w ts__03 pa ">
                                        <a href="#" class="wishlistadd cb chp ttip_nt tooltip_right">
                                            <span class="tt_txt">Add to Wishlist</span>
                                            <i class="facl facl-heart-o"></i>
                                        </a>
                                    </div>
                                    <div class="hover_button op__0 tc pa flex column ts__03">
                                        <a class="pr nt_add_qv js_add_qv cd br__40 pl__25 pr__25 bgw tc dib ttip_nt tooltip_top_left" href="#">
                                            <span class="tt_txt">Quick view</span>
                                            <i class="iccl iccl-eye"></i>
                                            <span>Quick view</span>
                                        </a>
                                        <a href="#" class="pr pr_atc cd br__40 bgw tc dib js_addtc cb chp ttip_nt tooltip_top_left">
                                            <span class="tt_txt">Add to cart</span>
                                            <i class="iccl iccl-cart"></i>
                                            <span>Add to cart</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-info mt__15">
                                    <h3 class="product-title pr fs__14 mg__0 fwm">
                                        <a class="cd chp" href="product-detail-layout-01.html">Women Black Pants</a>
                                    </h3>
                                    <span class="price dib mb__5">$100.00</span>
                                </div>
                            </div>
                        </div>
    
                        <div class="col-lg-3 col-md-3 col-6 pr_animated done mt__30 pr_grid_item product nt_pr desgin__1">
                            <div class="product-inner pr">
                                <div class="product-image pr oh lazyload">
    
                                    <a class="d-block" href="product-detail-layout-01.html">
                                        <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_586" data-bgset="assets/images/products/pr-15.jpg"></div>
                                    </a>
                                    <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                                        <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_586" data-bgset="assets/images/products/pr-16.jpg"></div>
                                    </div>
                                    <div class="nt_add_w ts__03 pa ">
                                        <a href="#" class="wishlistadd cb chp ttip_nt tooltip_right">
                                            <span class="tt_txt">Add to Wishlist</span>
                                            <i class="facl facl-heart-o"></i>
                                        </a>
                                    </div>
                                    <div class="hover_button op__0 tc pa flex column ts__03">
                                        <a class="pr nt_add_qv js_add_qv cd br__40 pl__25 pr__25 bgw tc dib ttip_nt tooltip_top_left" href="#">
                                            <span class="tt_txt">Quick view</span>
                                            <i class="iccl iccl-eye"></i>
                                            <span>Quick view</span>
                                        </a>
                                        <a href="#" class="pr pr_atc cd br__40 bgw tc dib js__qs cb chp ttip_nt tooltip_top_left">
                                            <span class="tt_txt">Quick Shop</span>
                                            <i class="iccl iccl-cart"></i>
                                            <span>Quick Shop</span>
                                        </a>
                                    </div>
                                    <div class="product-attr pa ts__03 cw op__0 tc">
                                        <p class="truncate mg__0 w__100">S, M</p>
                                    </div>
                                </div>
                                <div class="product-info mt__15">
                                    <h3 class="product-title pr fs__14 mg__0 fwm">
                                        <a class="cd chp" href="product-detail-layout-01.html">Mercury Tee</a>
                                    </h3>
                                    <span class="price dib mb__5">$68.00</span>
                                    <div class="swatch__list_js swatch__list lh__1 nt_swatches_on_grid">
                                        <span data-bgset="assets/images/products/pr-15.jpg" class="nt_swatch_on_bg swatch__list--item pr ttip_nt tooltip_top_right"><span class="tt_txt">White Cream</span><span class="swatch__value bg_color_white-cream lazyload" data-bgset="assets/images/products/dot-01.jpg"></span></span>
                                        <span data-bgset="assets/images/products/pr-14.jpg" class="nt_swatch_on_bg swatch__list--item pr ttip_nt tooltip_top_right"><span class="tt_txt">Heart Dotted</span><span class="swatch__value bg_color_heart-dotted lazyload" data-bgset="assets/images/products/dot-02.jpg"></span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div class="col-lg-3 col-md-3 col-6 pr_animated done mt__30 pr_grid_item product nt_pr desgin__1">
                            <div class="product-inner pr">
                                <div class="product-image pr oh lazyload">
    
                                    <a class="d-block" href="product-detail-layout-01.html">
                                        <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_586" data-bgset="assets/images/products/pr-12.jpg"></div>
                                    </a>
                                    <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                                        <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_586" data-bgset="assets/images/products/pr-12.jpg"></div>
                                    </div>
                                    <div class="nt_add_w ts__03 pa ">
                                        <a href="#" class="wishlistadd cb chp ttip_nt tooltip_right">
                                            <span class="tt_txt">Add to Wishlist</span>
                                            <i class="facl facl-heart-o"></i>
                                        </a>
                                    </div>
                                    <div class="hover_button op__0 tc pa flex column ts__03">
                                        <a class="pr nt_add_qv js_add_qv cd br__40 pl__25 pr__25 bgw tc dib ttip_nt tooltip_top_left" href="#">
                                            <span class="tt_txt">Quick view</span>
                                            <i class="iccl iccl-eye"></i>
                                            <span>Quick view</span>
                                        </a>
                                        <a href="#" data-id="4540579250315" class="pr pr_atc cd br__40 bgw tc dib js__qs cb chp ttip_nt tooltip_top_left">
                                            <span class="tt_txt">Quick Shop</span>
                                            <i class="iccl iccl-cart"></i>
                                            <span>Quick Shop</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-info mt__15">
                                    <h3 class="product-title pr fs__14 mg__0 fwm">
                                        <a class="cd chp" href="product-detail-layout-01.html">Men pants</a>
                                    </h3>
                                    <span class="price dib mb__5">$49.00 – $56.00</span>
                                    <div class="swatch__list_js swatch__list lh__1 nt_swatches_on_grid">
                                        <span data-bgset="assets/images/products/pr-12.jpg" class="nt_swatch_on_bg swatch__list--item pr ttip_nt tooltip_top_right"><span class="tt_txt">Blue</span><span class="swatch__value bg_color_blue"></span></span>
                                        <span data-bgset="assets/images/products/pr-34.jpg" class="nt_swatch_on_bg swatch__list--item pr ttip_nt tooltip_top_right"><span class="tt_txt">Black</span><span class="swatch__value bg_color_black"></span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div class="col-lg-3 col-md-3 col-6 pr_animated done mt__30 pr_grid_item product nt_pr desgin__1">
                            <div class="product-inner pr">
                                <div class="product-image pr oh lazyload">
                                <span class="tc nt_labels pa pe_none cw">
                                    <span class="onsale nt_label">
                                        <span>-34%</span>
                                    </span>
                                </span>
                                    <a class="d-block" href="product-detail-layout-01.html">
                                        <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_586" data-bgset="assets/images/products/pr-21.jpg"></div>
                                    </a>
                                    <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                                        <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_586" data-bgset="assets/images/products/pr-22.jpg"></div>
                                    </div>
                                    <div class="nt_add_w ts__03 pa ">
                                        <a href="#" class="wishlistadd cb chp ttip_nt tooltip_right">
                                            <span class="tt_txt">Add to Wishlist</span>
                                            <i class="facl facl-heart-o"></i>
                                        </a>
                                    </div>
                                    <div class="hover_button op__0 tc pa flex column ts__03">
                                        <a class="pr nt_add_qv js_add_qv cd br__40 pl__25 pr__25 bgw tc dib ttip_nt tooltip_top_left" href="#">
                                            <span class="tt_txt">Quick view</span>
                                            <i class="iccl iccl-eye"></i>
                                            <span>Quick view</span>
                                        </a>
                                        <a href="#" class="pr pr_atc cd br__40 bgw tc dib js__qs cb chp ttip_nt tooltip_top_left">
                                            <span class="tt_txt">Quick Shop</span>
                                            <i class="iccl iccl-cart"></i>
                                            <span>Quick Shop</span>
                                        </a>
                                    </div>
                                    <div class="product-attr pa ts__03 cw op__0 tc">
                                        <p class="truncate mg__0 w__100">S, M, L</p>
                                    </div>
                                </div>
                                <div class="product-info mt__15">
                                    <h3 class="product-title pr fs__14 mg__0 fwm">
                                        <a class="cd chp" href="product-detail-layout-01.html">Short Sleeved Hoodie</a>
                                    </h3>
                                    <span class="price dib mb__5">
                              <del>$45.00</del>
                              <ins>$30.00</ins>
                            </span>
                                </div>
                            </div>
                        </div>
    
                        <div class="col-lg-3 col-md-3 col-6 pr_animated done mt__30 pr_grid_item product nt_pr desgin__1">
                            <div class="product-inner pr">
                                <div class="product-image pr oh lazyload">
    
                                    <a class="d-block" href="product-detail-layout-01.html">
                                        <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_586" data-bgset="assets/images/products/pr-33.jpg"></div>
                                    </a>
                                    <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                                        <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_586" data-bgset="assets/images/products/pr-34.jpg"></div>
                                    </div>
                                    <div class="nt_add_w ts__03 pa ">
                                        <a href="#" class="wishlistadd cb chp ttip_nt tooltip_right">
                                            <span class="tt_txt">Add to Wishlist</span>
                                            <i class="facl facl-heart-o"></i>
                                        </a>
                                    </div>
                                    <div class="hover_button op__0 tc pa flex column ts__03">
                                        <a class="pr nt_add_qv js_add_qv cd br__40 pl__25 pr__25 bgw tc dib ttip_nt tooltip_top_left" href="#">
                                            <span class="tt_txt">Quick view</span>
                                            <i class="iccl iccl-eye"></i>
                                            <span>Quick view</span>
                                        </a>
                                        <a href="#" class="pr pr_atc cd br__40 bgw tc dib js__qs cb chp ttip_nt tooltip_top_left">
                                            <span class="tt_txt">Quick Shop</span>
                                            <i class="iccl iccl-cart"></i>
                                            <span>Quick Shop</span>
                                        </a>
                                    </div>
                                    <div class="product-attr pa ts__03 cw op__0 tc">
                                        <p class="truncate mg__0 w__100">S, M, L</p>
                                    </div>
                                </div>
                                <div class="product-info mt__15">
                                    <h3 class="product-title pr fs__14 mg__0 fwm">
                                        <a class="cd chp" href="product-detail-layout-01.html">Sweatshirt in Geometric Print</a>
                                    </h3>
                                    <span class="price dib mb__5">$35.00</span>
                                    <div class="swatch__list_js swatch__list lh__1 nt_swatches_on_grid">
                                        <span data-bgset="assets/images/products/pr-33.jpg" class="nt_swatch_on_bg swatch__list--item pr ttip_nt tooltip_top_right">
                                            <span class="tt_txt">Black</span>
                                            <span class="swatch__value bg_color_black lazyload"></span>
                                        </span>
                                        <span data-bgset="assets/images/products/pr-34.jpg" class="nt_swatch_on_bg swatch__list--item pr ttip_nt tooltip_top_right">
                                            <span class="tt_txt">Blue</span>
                                            <span class="swatch__value bg_color_blue lazyload"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div class="col-lg-3 col-md-3 col-6 pr_animated done mt__30 pr_grid_item product nt_pr desgin__1">
                            <div class="product-inner pr">
                                <div class="product-image pr oh lazyload">
    
                                    <a class="d-block" href="product-detail-layout-01.html">
                                        <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_586" data-bgset="assets/images/products/pr-23.jpg"></div>
                                    </a>
                                    <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                                        <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_586" data-bgset="assets/images/products/pr-24.jpg"></div>
                                    </div>
                                    <div class="nt_add_w ts__03 pa ">
                                        <a href="#" class="wishlistadd cb chp ttip_nt tooltip_right">
                                            <span class="tt_txt">Add to Wishlist</span>
                                            <i class="facl facl-heart-o"></i>
                                        </a>
                                    </div>
                                    <div class="hover_button op__0 tc pa flex column ts__03">
                                        <a class="pr nt_add_qv js_add_qv cd br__40 pl__25 pr__25 bgw tc dib ttip_nt tooltip_top_left" href="#">
                                            <span class="tt_txt">Quick view</span>
                                            <i class="iccl iccl-eye"></i>
                                            <span>Quick view</span>
                                        </a>
                                        <a href="#" class="pr pr_atc cd br__40 bgw tc dib js_addtc cb chp ttip_nt tooltip_top_left">
                                            <span class="tt_txt">Add to cart</span>
                                            <i class="iccl iccl-cart"></i>
                                            <span>Add to cart</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-info mt__15">
                                    <h3 class="product-title pr fs__14 mg__0 fwm">
                                        <a class="cd chp" href="product-detail-layout-01.html">Dusk Pom Beanie</a>
                                    </h3>
                                    <span class="price dib mb__5">$25.00</span>
                                </div>
                            </div>
                        </div>
    
                        <div class="col-lg-3 col-md-3 col-6 pr_animated done mt__30 pr_grid_item product nt_pr desgin__1">
                            <div class="product-inner pr">
                                <div class="product-image pr oh lazyload">
    
                                    <a class="d-block" href="product-detail-layout-01.html">
                                        <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_586" data-bgset="assets/images/products/pr-19.jpg"></div>
                                    </a>
                                    <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                                        <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_586" data-bgset="assets/images/products/pr-20.jpg"></div>
                                    </div>
                                    <div class="nt_add_w ts__03 pa ">
                                        <a href="#" class="wishlistadd cb chp ttip_nt tooltip_right">
                                            <span class="tt_txt">Add to Wishlist</span>
                                            <i class="facl facl-heart-o"></i>
                                        </a>
                                    </div>
                                    <div class="hover_button op__0 tc pa flex column ts__03">
                                        <a class="pr nt_add_qv js_add_qv cd br__40 pl__25 pr__25 bgw tc dib ttip_nt tooltip_top_left" href="#">
                                            <span class="tt_txt">Quick view</span>
                                            <i class="iccl iccl-eye"></i>
                                            <span>Quick view</span>
                                        </a>
                                        <a href="#" class="pr pr_atc cd br__40 bgw tc dib js_addtc cb chp ttip_nt tooltip_top_left">
                                            <span class="tt_txt">Add to cart</span>
                                            <i class="iccl iccl-cart"></i>
                                            <span>Add to cart</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-info mt__15">
                                    <h3 class="product-title pr fs__14 mg__0 fwm">
                                        <a class="cd chp" href="product-detail-layout-01.html">Circle Snapback Cap</a>
                                    </h3>
                                    <span class="price dib mb__5">$25.00</span>
                                </div>
                            </div>
                        </div>
    
                    </div>
                </div>
            </div>
            <!-- end bestseller products-->
@endsection