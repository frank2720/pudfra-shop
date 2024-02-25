<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" type="image/png" href="assets/images/favicon.png">
    <title>{{config('app.name')}}</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:300,300i,400,400i,500,500i&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/font-icon.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/defined.css">
    <link rel="stylesheet" href="assets/css/base.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/home-default.css">
</head>
<body class="kalles-template header_full_true des_header_3 css_scrollbar lazy_icons btnt4_style_2 zoom_tp_2 css_scrollbar template-index kalles_toolbar_true hover_img2 swatch_style_rounded swatch_list_size_small label_style_rounded wrapper_full_width header_full_true hide_scrolld_true lazyload">
<div id="nt_wrapper">

    @include('header')

    <div id="nt_content">
        @yield('content')
    </div>

    @include('footer')

</div>

<!--mask overlay-->
<div class="mask-overlay ntpf t__0 r__0 l__0 b__0 op__0 pe_none"></div>
<!--end mask overlay-->

@include('quickview')

<!--quick shop-->
<div id="quick-shop-tpl" class="dn">
    <div class="wrap_qs_pr buy_qs_false kalles-quick-shop">
        <div class="qs_imgs_i row al_center mb__30">
            <div class="col-auto cl_pr_img">
                <div class="pr oh qs_imgs_wrap">
                    <div class="row equal_nt qs_imgs nt_slider nt_carousel_qs p-thumb_qs" data-flickity='{"fade":false,"cellSelector":".qs_img_i","cellAlign":"center","wrapAround":true,"autoPlay":false,"prevNextButtons":false,"adaptiveHeight":true,"imagesLoaded":false,"lazyload":0,"dragThreshold":0,"pageDots":false,"rightToLeft":false}'>
                        <div class="col-12 js-sl-item qs_img_i nt_img_ratio lazyload nt_bg_lz" data-bgset="assets/images/quick_shop/p_qs_01.jpg"></div>
                        <div class="col-12 js-sl-item qs_img_i nt_img_ratio lazyload nt_bg_lz" data-bgset="assets/images/quick_shop/p_qs_02.jpg"></div>
                        <div class="col-12 js-sl-item qs_img_i nt_img_ratio lazyload nt_bg_lz" data-bgset="assets/images/quick_shop/p_qs_03.jpg"></div>
                        <div class="col-12 js-sl-item qs_img_i nt_img_ratio lazyload nt_bg_lz" data-bgset="assets/images/quick_shop/p_qs_04.jpg"></div>
                        <div class="col-12 js-sl-item qs_img_i nt_img_ratio lazyload nt_bg_lz" data-bgset="assets/images/quick_shop/p_qs_05.jpg"></div>
                    </div>
                </div>
            </div>
            <div class="col cl_pr_title tc">
                <h3 class="product-title pr fs__16 mg__0 fwm">
                    <a class="cd chp" href="product-detail-layout-01.html">Cluse La Boheme Rose Gold</a>
                </h3>
                <div id="price_qs"><span class="price "><del>$60.00</del> <ins>$45.00</ins></span><span class="qs_label onsale cw"><span>-25%</span></span>
                </div>
            </div>
        </div>
        <div class="qs_info_i tc">
            <div class="qs_swatch">
                <div id="callBackVariant_qs" class="nt_green nt1_xs nt2_">
                    <div id="cart-form_qs" class="nt_cart_form variations_form variations_form_qs">
                        <div class="variations mb__40 style__circle size_medium style_color des_color_1">
                            <div class="nt_select_qs0 swatch is-color kalles_swatch_js">
                                <h4 class="swatch__title">Color: <span class="nt_name_current">Green</span></h4>
                                <ul class="swatches-select swatch__list_pr">
                                    <li class="ttip_nt tooltip_top_right nt-swatch swatch_pr_item bg_css_green is-selected" data-escape="Green">
                                        <span class="tt_txt">Green</span><span class="swatch__value_pr pr bg_color_green"></span>
                                    </li>
                                    <li class="ttip_nt tooltip_top nt-swatch swatch_pr_item " data-escape="Grey">
                                        <span class="tt_txt">Grey</span><span class="swatch__value_pr pr bg_color_grey"></span>
                                    </li>
                                    <li class="ttip_nt tooltip_top nt-swatch swatch_pr_item bg_css_blue " data-escape="Blue">
                                        <span class="tt_txt">Blue</span><span class="swatch__value_pr pr bg_color_blue"></span>
                                    </li>
                                </ul>
                            </div>
                            <div class="nt_select_qs1 swatch is-label kalles_swatch_js">
                                <h4 class="swatch__title">Size: <span class="nt_name_current">XS</span></h4>
                                <ul class="swatches-select swatch__list_pr">
                                    <li class="nt-swatch swatch_pr_item pr bg_css_xs is-selected" data-escape="XS">
                                        <span class="swatch__value_pr">XS</span>
                                    </li>
                                    <li class="nt-swatch swatch_pr_item pr " data-escape="S">
                                        <span class="swatch__value_pr">S</span>
                                    </li>
                                    <li class="nt-swatch swatch_pr_item pr " data-escape="M">
                                        <span class="swatch__value_pr">M</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="variations_button in_flex column w__100">
                            <div class="flex al_center column">
                                <div class="quantity pr mb__15 order-1 qty__" id="sp_qty_qs">
                                    <input type="number" class="input-text qty text tc qty_pr_js qty_cart_js" step="1" min="1" max="9999" name="quantity" value="1" inputmode="numeric">
                                    <div class="qty tc fs__14">
                                        <button type="button" class="plus db cb pa pd__0 pr__15 tr r__0">
                                            <i class="facl facl-plus"></i></button>
                                        <button type="button" class="minus db cb pa pd__0 pl__15 tl l__0">
                                            <i class="facl facl-minus"></i></button>
                                    </div>
                                </div>

                                <button type="submit" class="single_add_to_cart_button button truncate js_frm_cart w__100 order-4">
                                    <span class="txt_add ">Add to cart</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="product-detail-layout-01.html" class="btn fwsb detail_link dib mt__15">View full details<i class="facl facl-right"></i></a>
        </div>
    </div>
</div>
<!--end quick shop-->

@include('mini_cart')

@include('search')

@include('login')

@include('mobile_view')

<!-- back to top button-->
<a id="nt_backtop" class="pf br__50 z__100 des_bt1" href="#"><span class="tc br__50 db cw"><i class="pr pegk pe-7s-angle-up"></i></span></a>


<script src="assets/js/jquery-3.5.1.min.js"></script>
<script src="assets/js/jarallax.min.js"></script>
<script src="assets/js/packery.pkgd.min.js"></script>
<script src="assets/js/jquery.hoverIntent.min.js"></script>
<script src="assets/js/magnific-popup.min.js"></script>
<script src="assets/js/flickity.pkgd.min.js"></script>
<script src="assets/js/lazysizes.min.js"></script>
<script src="assets/js/js-cookie.min.js"></script>
<script src="assets/js/jquery.countdown.min.js"></script>
<script src="assets/js/interface.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script>
    var ENDPOINT = "{{ route('welcome') }}";
    var page = 1;
    
    $(".load-more-data").click(function(){
        page++;
        LoadMore(page);
    });
    function LoadMore(page) {
        $.ajax({
                url: ENDPOINT + "?page=" + page,
                datatype: "html",
                type: "get"
            })
            .done(function (response) {
                console.log(response);
                if (response.html == '') {
                    $('.load-more-data').html('No More Data Available');
                    $('.load-more-data').attr('disabled', true);
                    return;
                }
                $('.auto-load').hide();
                $("#data-wrapper").append("<div class='products nt_products_holder row fl_center row_pr_1 cdt_des_5 round_cd_true nt_cover ratio_nt position_8 space_30'>" + response.html + "</div>");
            })
            .fail(function (jqXHR, ajaxOptions, thrownError) {
                console.log('Server error occured');
            });
    }
</script>
</body>
</html>
