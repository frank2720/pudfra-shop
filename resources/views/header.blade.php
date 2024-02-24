 <!-- header -->
 <header id="ntheader" class="ntheader header_3 h_icon_iccl ">
    <div class="kalles-header__wrapper ntheader_wrapper pr z_200">
        <div class="sp_header_mid">
            <div class="header__mid">
                <div class="container">
                    <div class="row al_center css_h_se">
                        <div class="col-md-4 col-3 dn_lg">
                            <a href="#" data-id="#nt_menu_canvas" class="push_side push-menu-btn  lh__1 flex al_center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="16" viewBox="0 0 30 16">
                                    <rect width="30" height="1.5"></rect>
                                    <rect y="7" width="20" height="1.5"></rect>
                                    <rect y="14" width="30" height="1.5"></rect>
                                </svg>
                            </a></div>
                        <div class="col-lg-2 col-md-4 col-6 tc tl_lg">
                            <div class=" branding ts__05 lh__1">
                                <a class="dib" href="">
                                    <p class="w__95 logo_normal dn db_lg">Maanar</p>
                                </a>
                            </div>
                        </div>
                        <div class="col dn db_lg">
                            <nav class="nt_navigation kl_navigation tc hover_side_up nav_arrow_false">
                                <ul id="nt_menu_id" class="nt_menu in_flex wrap al_center">
                                    <li class="type_mega menu_wid_cus menu-item has-children menu_has_offsets menu_center pos_center">
                                        <a class="lh__1 flex al_center pr" href="">Home</a>
                                    </li>
                                    <li class="type_mega menu_wid_cus menu-item has-children menu_has_offsets menu_center pos_center">
                                        <a class="lh__1 flex al_center pr kalles-lbl__nav-sale" href="">Products</a>
                                        <div class="cus sub-menu">
                                            <div class="container megamenu-content-1200px">
                                                <div class="row lazy_menu lazyload" data-jspackery='{ "itemSelector": ".sub-column-item","gutter": 0,"percentPosition": true,"originLeft": true }'>
                                                    <div class="type_mn_link2 menu-item sub-column-item col-2">
                                                        <a href="shop-full-width-layout.html">Accessories</a>
                                                        <a href="shop-1600px-layout.html">Footwear</a>
                                                        <a href="shop-filter-options.html">Women</a>
                                                        <a href="shop-left-sidebar.html">T-Shirt</a>
                                                        <a href="shop-right-sidebar.html">Shoes</a>
                                                        <a href="shop-masonry-layout.html">Denim</a>
                                                        <a href="shop-1600px-layout.html">Dress</a>
                                                        <a href="shop-filter-options.html">Men</a>
                                                    </div>
                                                    <div class="type_mn_pr menu-item sub-column-item col-10">
                                                        <div class="prs_nav js_carousel nt_slider products nt_products_holder row al_center row_pr_1 cdt_des_1 round_cd_false nt_cover ratio_nt position_8 flickity-enabled is-draggable" data-flickity='{"imagesLoaded": 0,"adaptiveHeight": 0, "contain": 1, "groupCells": "100%", "dragThreshold" : 5, "cellAlign": "left","wrapAround": 1,"prevNextButtons": 1,"percentPosition": 1,"pageDots": 0, "autoPlay" : 0, "pauseAutoPlayOnHover" : 1, "rightToLeft": false }'>
                                                            @foreach ($nav_product as $product)
                                                            <div class="col-lg-3 col-md-12 col-12 pr_animated done mt__30 pr_grid_item product nt_pr desgin__1">
                                                                <div class="product-inner pr">
                                                                    <div class="product-image pr oh lazyload">
                                                                        @if ($product->retail_price>$product->price)
                                                                        <span class="tc nt_labels pa pe_none cw">
                                                                            <span class="onsale nt_label">
                                                                                <span>{{round((($product->price-$product->retail_price)/$product->retail_price)*100)}} %</span>
                                                                            </span>
                                                                        </span>
                                                                        @endif
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
                                                                        <div class="product-attr pa ts__03 cw op__0 tc">
                                                                            <p class="truncate mg__0 w__100">XS, S, M, L, XL</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-info mt__15">
                                                                        <h3 class="product-title pr fs__14 mg__0 fwm">
                                                                            <a class="cd chp" href="product-detail-layout-01.html">{{$product->name}}</a>
                                                                        </h3>
                                                                        <span class="price dib mb__5">${{number_format($product->price,2,'.',',')}}</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="type_mega menu_wid_cus menu-item has-children menu_has_offsets menu_center pos_center">
                                        <a class="lh__1 flex al_center pr kalles-lbl__nav-sale" href="shop-filter-sidebar.html">New arrivals
                                            <span class="lbc_nav">New</span>
                                        </a>
                                        <div class="cus sub-menu">
                                            <div class="container megamenu-content-1200px">
                                                <div class="row lazy_menu lazyload" data-jspackery='{ "itemSelector": ".sub-column-item","gutter": 0,"percentPosition": true,"originLeft": true }'>
                                                    <div class="type_mn_pr menu-item sub-column-item col-10">
                                                        <div class="prs_nav js_carousel nt_slider products nt_products_holder row al_center row_pr_1 cdt_des_1 round_cd_false nt_cover ratio_nt position_8 flickity-enabled is-draggable" data-flickity='{"imagesLoaded": 0,"adaptiveHeight": 0, "contain": 1, "groupCells": "100%", "dragThreshold" : 5, "cellAlign": "left","wrapAround": 1,"prevNextButtons": 1,"percentPosition": 1,"pageDots": 0, "autoPlay" : 0, "pauseAutoPlayOnHover" : 1, "rightToLeft": false }'>
                                                            <div class="col-lg-3 col-md-12 col-12 pr_animated done mt__30 pr_grid_item product nt_pr desgin__1">
                                                                <div class="product-inner pr">
                                                                    <div class="product-image pr oh lazyload">
                                                                    <span class="tc nt_labels pa pe_none cw">
                                                                        <span class="nt_label new">New</span>
                                                                    </span>
                                                                        <a class="d-block" href="product-detail-layout-01.html">
                                                                            <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_571" data-bgset="assets/images/megamenu/pr-01.jpg"></div>
                                                                        </a>
                                                                        <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                                                                            <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_571" data-bgset="assets/images/megamenu/pr-02.jpg"></div>
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
                                                                            <p class="truncate mg__0 w__100">XS, S, M, L, XL</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-info mt__15">
                                                                        <h3 class="product-title pr fs__14 mg__0 fwm">
                                                                            <a class="cd chp" href="product-detail-layout-01.html">Analogue Resin Strap</a>
                                                                        </h3>
                                                                        <span class="price dib mb__5">$30.00</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3 col-md-12 col-12 pr_animated done mt__30 pr_grid_item product nt_pr desgin__1">
                                                                <div class="product-inner pr">
                                                                    <div class="product-image pr oh lazyload">

                                                                        <a class="d-block" href="product-detail-layout-01.html">
                                                                            <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_571" data-bgset="assets/images/megamenu/pr-03.jpg"></div>
                                                                        </a>
                                                                        <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                                                                            <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_571" data-bgset="assets/images/megamenu/pr-04.jpg"></div>
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
                                                                            <a class="cd chp" href="product-detail-layout-01.html">Ridley High Waist</a>
                                                                        </h3>
                                                                        <span class="price dib mb__5">$36.00</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3 col-md-12 col-12 pr_animated done mt__30 pr_grid_item product nt_pr desgin__1">
                                                                <div class="product-inner pr">
                                                                    <div class="product-image pr oh lazyload">

                                                                        <a class="d-block" href="product-detail-layout-01.html">
                                                                            <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_571" data-bgset="assets/images/megamenu/pr-05.jpg"></div>
                                                                        </a>
                                                                        <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                                                                            <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_571" data-bgset="assets/images/megamenu/pr-06.jpg"></div>
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
                                                                            <a class="cd chp" href="product-detail-layout-01.html">Blush Beanie</a>
                                                                        </h3>
                                                                        <span class="price dib mb__5">$15.00</span>
                                                                        <div class="swatch__list_js swatch__list lh__1 nt_swatches_on_grid">
                                                                            <span data-bgset="assets/images/products/pr-05.jpg" class="lazyload nt_swatch_on_bg swatch__list--item pr ttip_nt tooltip_top_right"><span class="tt_txt">Grey</span><span class="swatch__value bg_color_grey"></span></span>
                                                                            <span data-bgset="assets/images/products/pr-31.jpg" class="lazyload nt_swatch_on_bg swatch__list--item pr ttip_nt tooltip_top_right"><span class="tt_txt">Pink</span><span class="swatch__value bg_color_pink"></span></span>
                                                                            <span data-bgset="assets/images/products/pr-32.jpg" class="lazyload nt_swatch_on_bg swatch__list--item pr ttip_nt tooltip_top_right"><span class="tt_txt">Black</span><span class="swatch__value bg_color_black"></span></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3 col-md-12 col-12 pr_animated done mt__30 pr_grid_item product nt_pr desgin__1">
                                                                <div class="product-inner pr">
                                                                    <div class="product-image pr oh lazyload">
                                                                    <span class="tc nt_labels pa pe_none cw">
                                                                        <span class="onsale nt_label">
                                                                            <span>-25%</span>
                                                                        </span>
                                                                    </span>
                                                                        <a class="d-block" href="product-detail-layout-01.html">
                                                                            <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_571" data-bgset="assets/images/megamenu/pr-07.jpg"></div>
                                                                        </a>
                                                                        <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                                                                            <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_571" data-bgset="assets/images/megamenu/pr-08.jpg"></div>
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
                                                                            <p class="truncate mg__0 w__100">XS, S, M</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-info mt__15">
                                                                        <h3 class="product-title pr fs__14 mg__0 fwm">
                                                                            <a class="cd chp" href="product-detail-layout-01.html">Cluse La Boheme Rose Gold</a>
                                                                        </h3>
                                                                        <span class="price dib mb__5">
                                                                            <del>$60.00</del>
                                                                            <ins>$45.00</ins>
                                                                        </span>
                                                                        <div class="swatch__list_js swatch__list lh__1 nt_swatches_on_grid">
                                                                            <span data-bgset="assets/images/products/pr-07.jpg" class="nt_swatch_on_bg swatch__list--item pr ttip_nt tooltip_top_right"><span class="tt_txt">Green</span><span class="swatch__value bg_color_green"></span></span>
                                                                            <span data-bgset="assets/images/products/pr-08.jpg" class="nt_swatch_on_bg swatch__list--item pr ttip_nt tooltip_top_right"><span class="tt_txt">Grey</span><span class="swatch__value bg_color_grey"></span></span>
                                                                            <span data-bgset="assets/images/products/pr-06.jpg" class="nt_swatch_on_bg swatch__list--item pr ttip_nt tooltip_top_right"><span class="tt_txt">Blue</span><span class="swatch__value bg_color_blue"></span></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3 col-md-12 col-12 pr_animated done mt__30 pr_grid_item product nt_pr desgin__1">
                                                                <div class="product-inner pr">
                                                                    <div class="product-image position-relative oh lazyload">

                                                                        <a class="d-block" href="product-detail-layout-01.html">
                                                                            <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_571" data-bgset="assets/images/megamenu/pr-09.jpg"></div>
                                                                        </a>
                                                                        <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                                                                            <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_571" data-bgset="assets/images/megamenu/pr-10.jpg"></div>
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
                                                                        <h3 class="product-title position-relative fs__14 mg__0 fwm">
                                                                            <a class="cd chp" href="product-detail-layout-01.html">Mercury Tee</a>
                                                                        </h3>
                                                                        <span class="price dib mb__5">$68.00</span>
                                                                        <div class="swatch__list_js swatch__list lh__1 nt_swatches_on_grid">
                                                                            <span data-bgset="assets/images/products/pr-15.jpg" class="nt_swatch_on_bg swatch__list--item position-relative ttip_nt tooltip_top_right"><span class="tt_txt">White Cream</span><span class="swatch__value bg_color_white-cream lazyload" data-bgset="assets/images/products/dot-01.jpg"></span></span>
                                                                            <span data-bgset="assets/images/products/pr-14.jpg" class="nt_swatch_on_bg swatch__list--item position-relative ttip_nt tooltip_top_right"><span class="tt_txt">Heart Dotted</span><span class="swatch__value bg_color_heart-dotted lazyload" data-bgset="assets/images/products/dot-02.jpg"></span></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3 col-md-12 col-12 pr_animated done mt__30 pr_grid_item product nt_pr desgin__1">
                                                                <div class="product-inner pr">
                                                                    <div class="product-image position-relative oh lazyload">
                                                                    <span class="tc nt_labels pa pe_none cw">
                                                                        <span class="onsale nt_label">
                                                                            <span>-34%</span>
                                                                        </span>
                                                                    </span>
                                                                        <a class="d-block" href="product-detail-layout-01.html">
                                                                            <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_571" data-bgset="assets/images/megamenu/pr-11.jpg"></div>
                                                                        </a>
                                                                        <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                                                                            <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_571" data-bgset="assets/images/megamenu/pr-12.jpg"></div>
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
                                                                            <a class="cd chp" href="product-detail-layout-01.html">La Bohème Rose Gold</a>
                                                                        </h3>
                                                                        <span class="price dib mb__5">
                                                                            <del>$60.00</del>
                                                                            <ins>$40.00</ins>
                                                                        </span>
                                                                        <div class="swatch__list_js swatch__list lh__1 nt_swatches_on_grid">
                                                                            <span data-bgset="assets/images/products/pr-27.jpg" class="nt_swatch_on_bg swatch__list--item position-relative ttip_nt tooltip_top_right"><span class="tt_txt">Pink</span><span class="swatch__value bg_color_pink lazyload"></span></span>
                                                                            <span data-bgset="assets/images/products/pr-35.jpg" class="nt_swatch_on_bg swatch__list--item position-relative ttip_nt tooltip_top_right"><span class="tt_txt">Black</span><span class="swatch__value bg_color_black lazyload"></span></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="col-lg-auto col-md-4 col-3 tr col_group_btns">
                            <div class="nt_action in_flex al_center cart_des_1">
                                <a class="icon_search push_side cb chp" data-id="#nt_search_canvas" href="#">
                                    <i class="iccl iccl-search"></i></a>
                                <div class="my-account ts__05 position-relative dn db_md">
                                    <a class="cb chp db push_side" href="#" data-id="#nt_login_canvas">
                                        <i class="iccl iccl-user"></i></a>
                                </div>
                                <a class="icon_like cb chp position-relative dn db_md js_link_wis" href="wishlist.html"><i class="iccl iccl-heart pr"><span class="op__0 ts_op pa tcount bgb br__50 cw tc">3</span></i>
                                </a>
                                <div class="icon_cart pr">
                                    <a class="push_side position-relative cb chp db" href="#" data-id="#nt_cart_canvas"><i class="iccl iccl-cart pr"><span class="op__0 ts_op pa tcount bgb br__50 cw tc">5</span></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- end header -->