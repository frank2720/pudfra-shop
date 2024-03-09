@extends('layouts.main')
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
        <div id="data-wrapper">
            <div class="products nt_products_holder row fl_center row_pr_1 cdt_des_5 round_cd_true nt_cover ratio_nt position_8 space_30">
                @include('trend')
            </div>
        </div>
        <div class="products-footer tc mt__40">
            <button class="se_cat_lm pr nt_cat_lm button button_default br_rd_true btn_icon_false load-more-data">Load More</button>
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
            @include('topsale')
        </div>
    </div>
</div>
<!-- end bestseller products-->
@endsection