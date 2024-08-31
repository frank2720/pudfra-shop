<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" type="image/png" href="{{Vite::asset('resources/assets/logo/pudfra.jpg')}}">
    <title>@yield('title')</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <style>
        a:hover { text-decoration: none; }
        a:active { text-decoration: none; }
    </style>
</head>
<body class="header_full_true des_header_3 css_scrollbar lazy_icons btnt4_style_2 zoom_tp_2 css_scrollbar template-index kalles_toolbar_true hover_img2 swatch_style_rounded swatch_list_size_small label_style_rounded wrapper_full_width header_full_true hide_scrolld_true lazyload font-poppins">
<div id="nt_wrapper">
    <!-- header -->
    <header class="ntheader header_3 h_icon_iccl ">
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
                                </a>
                            </div>
                            <div class="col-lg-2 col-md-4 col-5">
                                <a class="dib" href="{{route("home")}}">
                                    <img style="border-radius: 50%;width: 50px;height: 50px;overflow: hidden;" src="{{Vite::asset('resources/assets/logo/pudfra.jpg')}}" alt="Maanar Shop">
                                </a>
                            </div>
                            <div class="col dn db_lg">
                                <nav class="nt_navigation kl_navigation tc hover_side_up nav_arrow_false">
                                    <ul id="nt_menu_id" class="nt_menu in_flex wrap al_center">
                                        <li class="type_mega menu_wid_cus menu-item has-children menu_has_offsets menu_center pos_center">
                                            <a class="lh__1 flex al_center pr" href="{{route("home")}}">Home</a>
                                        </li>
                                        <li class="type_mega menu_wid_cus menu-item has-children menu_has_offsets menu_center pos_center">
                                            <a class="lh__1 flex al_center pr kalles-lbl__nav-sale" href="{{route('shop')}}">Products</a>
                                            <div class="cus sub-menu">
                                                <div class="container megamenu-content-1200px">
                                                    <div class="row lazy_menu lazyload" data-jspackery='{ "itemSelector": ".sub-column-item","gutter": 0,"percentPosition": true,"originLeft": true }'>
                                                        <div class="type_mn_link2 menu-item sub-column-item col-2">
                                                            @foreach ($categories as $category)
                                                                <a href="{{route('shop')}}">{{$category->category}}</a>
                                                            @endforeach
                                                        </div>
                                                        <div class="type_mn_pr menu-item sub-column-item col-10">
                                                            <div class="prs_nav js_carousel nt_slider products nt_products_holder row al_center row_pr_1 cdt_des_1 round_cd_false nt_cover ratio_nt position_8 flickity-enabled is-draggable" data-flickity='{"imagesLoaded": 0,"adaptiveHeight": 0, "contain": 1, "groupCells": "100%", "dragThreshold" : 5, "cellAlign": "left","wrapAround": 1,"prevNextButtons": 1,"percentPosition": 1,"pageDots": 0, "autoPlay" : 0, "pauseAutoPlayOnHover" : 1, "rightToLeft": false }'>
                                                                @foreach ($nav_products as $product)
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
                                                                            <h3 class="product-title pr fs__14 mg__0 fwm">
                                                                                <a class="cd chp" href="">{{__(ucfirst(strtolower($product->name)))}}</a>
                                                                            </h3>
                                                                            <span class="price dib mb__5">{{$currency}} {{number_format($product->price*$currencyExchangeRate)}}</span>
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
                                            <a class="lh__1 flex al_center pr kalles-lbl__nav-sale" href="">New arrivals
                                                <span class="lbc_nav">New</span>
                                            </a>
                                            <div class="cus sub-menu">
                                                <div class="container megamenu-content-1200px">
                                                    <div class="row lazy_menu lazyload" data-jspackery='{ "itemSelector": ".sub-column-item","gutter": 0,"percentPosition": true,"originLeft": true }'>
                                                        <div class="type_mn_pr menu-item sub-column-item col-10">
                                                            <div class="prs_nav js_carousel nt_slider products nt_products_holder row al_center row_pr_1 cdt_des_1 round_cd_false nt_cover ratio_nt position_8 flickity-enabled is-draggable" data-flickity='{"imagesLoaded": 0,"adaptiveHeight": 0, "contain": 1, "groupCells": "100%", "dragThreshold" : 5, "cellAlign": "left","wrapAround": 1,"prevNextButtons": 1,"percentPosition": 1,"pageDots": 0, "autoPlay" : 0, "pauseAutoPlayOnHover" : 1, "rightToLeft": false }'>
                                                                @foreach ($latest as $product)
                                                                <div class="col-lg-3 col-md-12 col-12 pr_animated done mt__30 pr_grid_item product nt_pr desgin__1">
                                                                    <div class="product-inner pr">
                                                                        <div class="product-image pr oh lazyload">
                                                                        <span class="tc nt_labels pa pe_none cw">
                                                                            <span class="nt_label new">New</span>
                                                                        </span>
                                                                            <a class="d-block" href="{{route('product.details',['id'=>$product->id])}}">
                                                                                <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_571" data-bgset="{{Storage::url($product->images[0]->url??null)}}"></div>
                                                                            </a>
                                                                            <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                                                                                <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_571" data-bgset="{{Storage::url($product->images[1]->url??$product->images[0]->url??null)}}"></div>
                                                                            </div>
                                                                            <div class="hover_button op__0 tc pa flex column ts__03">
                                                                                <a href="#" class="pr pr_atc cd br__40 bgw tc dib js__qs cb chp ttip_nt tooltip_top_left add-to-cart-btn" data-product-id="{{$product->id}}">
                                                                                    <span class="tt_txt">Add to Cart</span>
                                                                                    <i class='bx bxs-shopping-bag'></i>
                                                                                    <span>Add to Cart</span>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-info mt__15">
                                                                            <h3 class="product-title pr fs__14 mg__0 fwm">
                                                                                <a class="cd chp" href="">{{__(ucfirst(strtolower($product->name)))}}</a>
                                                                            </h3>
                                                                            <span class="price dib mb__5">{{$currency}} {{number_format($product->price*$currencyExchangeRate)}}</span>
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
                                    </ul>
                                </nav>
                            </div>
                            <div class="col-lg-auto col-md-4 col-3 tr col_group_btns">
                                <div class="nt_action in_flex al_center cart_des_1">
                                    <a class="icon_search push_side cb chp" data-id="#nt_search_canvas" href="#">
                                        <i class='bx bx-search-alt-2' ></i>
                                    </a>
                                    @if (Route::has('login'))
                                        @auth
                                        <div class="my-account ts__05 position-relative dn db_md">
                                            <a class="cb chp db push_side" href="{{route('profile.profile')}}">
                                                <i class='bx bx-user'></i>
                                            </a>
                                        </div>

                                        <div class="push_side notf_icon pr">
                                            <a class="position-relative cb chp db" href="" id="notfbell">
                                                <i class='bx bx-bell'>
                                                    <span class="op__0 ts_op pa ntc br__50 cw tc">
                                                        {{auth()->user()->unreadNotifications->count()}}
                                                    </span>
                                                </i>
                                            </a>
                                        </div>
                                        <div class="notf" id="box">
                                            
                                            @foreach (auth()->user()->unreadNotifications as $notification)
                                            <div class="notf-item">
                                                <div class="text">
                                                    @php
                                                        $string = $notification->type;
                                                        $parts = explode('\\', $string);
                                                        $lastPart = end($parts);
                                                        $formatted = preg_replace('/([a-z])([A-Z])/', '$1 $2', $lastPart);
                                                    @endphp
                                                    <ul>
                                                        <li class="starbucks success">
                                                            <div class="notify_icon">
                                                                <span class="icon"></span>  
                                                            </div>
                                                            <div class="notify_data">
                                                                <div class="title">
                                                                    {{$formatted}} 
                                                                </div>
                                                                <div class="sub_title">
                                                                    {{$notification->data['data']}} something geee
                                                              </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            @endforeach 

                                            @if (auth()->user()->unreadNotifications->count()!==0)
                                                <a href="{{route('mark-as-read')}}"><span class="badge rounded-pill bg-primary p-2 ms-2 my-2  d-flex justify-content-center">View all</span></a>
                                            @endif
                                        </div>
                                        
                                        @else
                                            <div class="my-account ts__05 position-relative dn db_md">
                                                <a class="cb chp db push_side" href="{{route('login')}}">
                                                    <i class='bx bx-user'></i>
                                                </a>
                                            </div>
                                        @endauth
                                    @endif

                                    <div class="notf_icon pr">
                                        <a class="push_side position-relative js_addtc cb chp db" href="">
                                            <i class='bx bxs-shopping-bag pr' id="cartvalue">
                                                <span class="op__0 ts_op pa tcount bgb br__50 cw tc">
                                                    {{session()->get('cart')->totalQty??0}}
                                                </span>
                                            </i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                </div>
            </div>
        </div>
    </header>
    <!-- end header -->

    <div id="nt_content">
        @yield('content')
        @yield('auth')
    </div>

    <!-- footer -->
    <footer id="nt_footer" class="bgbl footer-1">
        <div id="kalles-section-footer_top" class="kalles-section footer__top type_instagram">
            <div class="footer__top_wrap footer_sticky_false footer_collapse_true nt_bg_overlay pr oh pb__30 pt__80">
                <div class="container pr z_100">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-12 mb__50 order-lg-1 order-1">
                            <div class="widget widget_text widget_logo">
                                <h3 class="widget-title fwsb flex al_center fl_between fs__16 mg__0 mb__30">
                                    <span class="txt_title">Get in touch</span>
                                    <span class="nav_link_icon ml__5"></span>
                                </h3>
                                <div class="widget_footer">
                                    <div class="footer-contact">
                                        <ul class="menu">
                                            <li class="menu-item">
                                                <a href="https://wa.me/254741061815">WhatsApp Contact</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="mailto:otienof534@gmail.com">Send an Email</a>
                                            </li>
                                        </ul>
                                        <p>
                                            <span></span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-12 mb__50 order-lg-2 order-1">
                            <div class="widget widget_nav_menu">
                                <h3 class="widget-title fwsb flex al_center fl_between fs__16 mg__0 mb__30">
                                    <span class="txt_title">Categories</span>
                                    <span class="nav_link_icon ml__5"></span>
                                </h3>
                                <div class="menu_footer widget_footer">
                                    <ul class="menu">
                                        @foreach ($categories as $category)
                                        <li class="menu-item">
                                            <a href="{{route('shop')}}"></i>{{$category->category}}</a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-12 mb__50 order-lg-3 order-1">
                            <div class="widget widget_nav_menu">
                                <h3 class="widget-title fwsb flex al_center fl_between fs__16 mg__0 mb__30">
                                    <span class="txt_title">Infomation</span>
                                    <span class="nav_link_icon ml__5"></span>
                                </h3>
                                <div class="menu_footer widget_footer">
                                    <ul class="menu">
                                        <li class="menu-item">
                                            <a href="">About Us</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="mailto:otienof534@gmail.com">Contact Us</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-12 mb__50 order-lg-4 order-1">
                            <div class="widget widget_nav_menu">
                                <h3 class="widget-title fwsb flex al_center fl_between fs__16 mg__0 mb__30">
                                    <span class="txt_title">Useful links</span>
                                    <span class="nav_link_icon ml__5"></span>
                                </h3>
                                <div class="menu_footer widget_footer">
                                    <ul class="menu">
                                        <li class="menu-item">
                                            <a href="{{route('shop')}}">Store</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="{{route('profile.profile')}}">My Account</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="">APIs documentation</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->
</div>

<!--mask overlay-->
<div class="mask-overlay ntpf t__0 r__0 l__0 b__0 op__0 pe_none"></div>
<!--end mask overlay-->


<!-- mini cart box -->
<div id="nt_cart_canvas" class="nt_fk_canvas dn">
    <div class="nt_mini_cart nt_js_cart flex column h__100 btns_cart_1">
        <div class="mini_cart_header flex fl_between al_center">
            <h3 class="widget-title tu fs__16 mg__0 font-poppins">Shopping cart</h3>
            <i class='bx bx-x close_pp pegk ts__03 cd'></i>
        </div>

        <div class="mini_cart_wrap">
            <div class="mini_cart_content fixcl-scroll">
                <div class="fixcl-scroll-content cart-products">
                    @if (session()->has('cart') && $totalPrice>0)
                    <div id="cart-p">
                        @foreach ($cart_products as $product)
                            <div class="mini_cart_items js_cat_items lazyload">
                                <div class="mini_cart_item js_cart_item flex al_center pr oh">
                                    <div class="ld_cart_bar"></div>
                                    <a href="{{route('product.details',['id'=>$product['item']->id])}}" class="mini_cart_img">
                                        <img class="w__100 lazyload" style="height: 100px;width:100px;object-fit:cover" data-src="{{Storage::url($product['item']->images[0]->url??$product['item']->images[1]->url??null)}}" width="120" height="153" alt="" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMjAiIGhlaWdodD0iMTUzIiB2aWV3Qm94PSIwIDAgMTIwIDE1MyI+PC9zdmc+">
                                    </a>
                                    <div class="mini_cart_info">
                                        <a href="{{route('product.details',['id'=>$product['item']->id])}}" class="mini_cart_title truncate">{{$product['item']->name}}</a>
                                        <div class="mini_cart_meta">
                                            <p class="cart_selling_plan"></p>
                                            <div class="cart_meta_price price">
                                                <div class="cart_price">
                                                    <ins>{{$currency}} {{number_format($product['price']*$currencyExchangeRate)}}</ins>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mini_cart_actions">
                                            <div class="quantity pr mr__10 qty__true">
                                                <input type="number" class="input-text qty text tc qty_cart_js" name="product_{{$product['item']->id}}" disabled value="{{$product['qty']}}">
                                            </div>
                                            <a href="{{route('shopping')}}" class="cart_ac_edit js__qs ttip_nt tooltip_top_right"><span class="tt_txt">Edit this item</span>
                                                <i class='bx bxs-edit h4'></i>
                                            </a>
                                            <a href="#" class="cart_ac_remove js_cart_rem ttip_nt tooltip_top_right" data-id="{{$product['item']->id}}"><span class="tt_txt">Remove this item</span>
                                                <i class='bx bx-x h4'></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="mini_cart_tool js_cart_tool tc ">
                        <div data-id="ship" class="mini_cart_tool_ship js_cart_tls ttip_nt tooltip_top">
                            <i class='bx bx-taxi'></i></i><span class="tt_txt">Estimate Shipping</span>
                        </div>
                    </div>
                    @else
                    <div class="empty tc mt__40">
                        <i class='bx bx-shopping-bag'></i>
                        <p>Your cart is empty.</p>
                        <p class="return-to-shop mb__15">
                            <a class="button button_primary tu js_add_ld" href="">Return To Shop</a>
                        </p>
                    </div>
                    @endif
                </div>
            </div>
            <div class="mini_cart_footer js_cart_footer">
                <div class="js_cat_dics"></div>
                <div class="total row fl_between al_center">
                    <div class="col-auto"><strong>Subtotal:</strong></div>
                    <div class="col-auto tr js_cat_ttprice">
                        <div class="cart_tot_price">{{$currency}} {{number_format($totalPrice*$currencyExchangeRate)}}</div>
                    </div>
                </div>
                <p class="txt_tax_ship mb__5 fs__12">Taxes, shipping and discounts codes calculated at checkout</p>
                <a href="{{route('shopping')}}" class="button btn-checkout mt__10 mb__10 js_add_ld d-inline-flex justify-content-center align-items-center cd-imp">Check Out</a>
            </div>
        </div>

        <!--mini cart tool shipping-->
        <div class="mini_cart_ship pe_none">
            <div class="shipping_calculator">
                <h3>Estimate Shipping</h3>
                <p class="field">
                    <label for="location">Region</label>
                    <select id="location" class="lazyload">
                        <option value="" selected disabled>---</option>
                        @foreach ($towns as $town)
                            <option value="region 1">{{$town->city}}</option>
                        @endforeach
                    </select>
                </p>
                <p class="field">
                    <input type="button"class="button btn-checkout get_rates mt__10 mb__10 js_add_ld d-inline-flex justify-content-center align-items-center text-white" value="Calculate Shipping">
                </p>
                <p class="field">
                    <input type="button" class="button btn_back js_cart_tls_back" value="Cancel">
                </p>
                <div id="response_calcship"></div>
            </div>
        </div>

    </div>
</div>
<!-- end mini cart box-->

<!-- search box -->
<div id="nt_search_canvas" class="nt_fk_canvas dn">
    <div class="nt_mini_cart flex column h__100">
        <div class="mini_cart_header flex fl_between al_center">
            <h3 class="widget-title tu fs__16 mg__0 font-poppins">Search Our Site</h3>
            <i class='bx bx-x close_pp pegk ts__03 cd'></i>
        </div>
        <div class="mini_cart_wrap">
            <div class="search_header mini_search_frm pr js_frm_search" role="search">
                <div class="frm_search_cat mb__20">
                    <select name="product_type">
                        <option value="*">All Categories</option>
                        @foreach ($categories as $category)
                            <option value="">{{$category->category}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="frm_search_input pr oh">
                    <input class="search_header__input js_iput_search placeholder-black" autocomplete="search" type="text" name="search" id="search" placeholder="Search for products">
                    <button class="search_header__submit js_btn_search" type="submit"><i class='bx bx-search-alt-2' ></i>
                    </button>
                </div>
                <div class="ld_bar_search"></div>
            </div>
            <div class="search_header__content mini_cart_content fixcl-scroll widget">
                <div class="fixcl-scroll-content product_list_widget">
                    <div class="js_prs_search" id="search_product">
                        <div class="container-fluid  mt-100">
                            <div class="row">
                                <div class="col-md-12">
                                    @foreach ($latest as $product)
                                        <div class='row mb__10 pb__10'>
                                            <div class='col widget_img_pr'>
                                                <a class='db pr oh' href='{{route('product.details',['id'=>$product->id])}}'>
                                                    <img src='data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%201200%201200%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E' class='w__100 lz_op_ef lazyload' alt='sunlight bell solar lamp' data-src='{{Storage::url($product->images[0]->url??null)}}' width='80' height='80'>
                                                </a>
                                            </div>
                                            <div class='col widget_if_pr'>
                                            <a class='product-title db' href='{{route('product.details',['id'=>$product->id])}}'>
                                                {{$product->name}}
                                            </a>
                                            {{$currency}} {{number_format($product->price*$currencyExchangeRate)}}
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end search box -->

<!-- mobile toolbar -->
<div id="kalles-section-toolbar_mobile" class="kalles-section">
    <div class="kalles_toolbar kalles_toolbar_label_true ntpf r__0 l__0 b__0 flex fl_between al_center bg-light">
        <div class="type_toolbar_shop kalles_toolbar_item my-4">
            <a href="{{route('shop')}}">
                <i class='bx bxs-grid-alt h4'></i>
                <span class="kalles_toolbar_label">Shop</span>
            </a>
        </div>
        <div class="type_toolbar_cart kalles_toolbar_item my-4">
            <a href="" class="js_addtc push_side">
                <i class='bx bxs-shopping-bag h4 pr' id="mobcartvalue">
                    <span class="jsccount toolbar_count">
                        {{session()->get('cart')->totalQty??0}}
                    </span>
                </i>
                <span class="kalles_toolbar_label">Cart</span>
            </a>
        </div>
        @if (Route::has('login'))
            @auth
            <div class="type_toolbar_account kalles_toolbar_item my-4">
                <a href="{{route('profile.profile')}}" class="db push_side">
                    <i class='bx bx-user h4'></i>
                    <span class="kalles_toolbar_label">Account</span>
                </a>
            </div>
            @else
            <div class="type_toolbar_account kalles_toolbar_item my-4">
                <a href="{{route('login')}}" class="db push_side">
                    <i class='bx bx-user h4'></i>
                    <span class="kalles_toolbar_label">Account</span>
                </a>
            </div>
            @endauth
        @endif
        <div class="type_toolbar_search kalles_toolbar_item my-4">
            <a href="#" class="push_side" data-id="#nt_search_canvas">
                <i class='bx bx-search-alt-2 h4' ></i>
                <span class="kalles_toolbar_label">Search</span>
            </a>
        </div>
    </div>
</div>
<!-- end mobile toolbar -->

<!-- mobile menu -->
<div id="nt_menu_canvas" class="nt_fk_canvas nt_sleft dn lazyload">
    <i class='bx bx-x close_pp pegk ts__03 cd'></i>
    <div class="mb_nav_tabs flex al_center mb_cat_true">
        <div class="mb_nav_title pr mb_nav_ul flex al_center fl_center active" data-id="#kalles-section-mb_nav_js">
            <span class="db truncate">Menu</span>
        </div>
        <div class="mb_nav_title pr flex al_center fl_center" data-id="#kalles-section-mb_cat_js">
            <span class="db truncate">Categories</span>
        </div>
    </div>
    <div id="kalles-section-mb_nav_js" class="mb_nav_tab active">
        <div id="kalles-section-mb_nav" class="kalles-section">
            <ul id="menu_mb_ul" class="nt_mb_menu">
                <li class="menu-item menu-item-has-children only_icon_false">
                    <a href="{{route('shop')}}"><span class="nav_link_txt flex al_center">Shop</span><span class="nav_link_icon ml__5"></span></a>
                    <ul class="sub-menu">
                        <li class="menu-item">
                            <a href="">Shopping cart</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <div id="kalles-section-mb_cat_js" class="mb_nav_tab">
        <div id="kalles-section-mb_cat" class="kalles-section">
            <ul id="menu_mb_cat" class="nt_mb_menu">
                @foreach ($categories as $category)
                <li class="menu-item">
                    <a href="{{route('shop')}}"></i>{{$category->category}}</a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
<!-- end mobile menu -->

<!-- back to top button-->
<a id="nt_backtop" class="pf br__50 z__100 des_bt1" href="#"><span class="tc br__50 db cw"><i class='bx bxs-chevron-up'></i></span></a>

<script src="https://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
{!! Toastr::message() !!}
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<script src="{{asset('assets/js/lazysizes.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
</body>
</html>
