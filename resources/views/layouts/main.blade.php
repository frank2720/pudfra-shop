<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" type="image/png" href="{{asset('assets/images/favicon.png')}}">
    <title>{{config('app.name')}}</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:300,300i,400,400i,500,500i&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/font-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/defined.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/base.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/home-default.css')}}">
    <link rel="stylesheet" href="https://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
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
<script src="https://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
{!! Toastr::message() !!}
<script src="{{asset('assets/js/jarallax.min.js')}}"></script>
<script src="{{asset('assets/js/packery.pkgd.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.hoverIntent.min.js')}}"></script>
<script src="{{asset('assets/js/magnific-popup.min.js')}}"></script>
<script src="{{asset('assets/js/flickity.pkgd.min.js')}}"></script>
<script src="{{asset('assets/js/lazysizes.min.js')}}"></script>
<script src="{{asset('assets/js/js-cookie.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.countdown.min.js')}}"></script>
<script src="{{asset('assets/js/interface.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script>
    $(document).ready(function () {

    $(document).on('click','.pagination a', function (e) {
        e.preventDefault();
        var page = $(this).attr('href').split('page=')[1]
        $.ajax({
            url:'/pagination/products?page='+page,
            success:function(data){
                $('.shop-data').html(data);
            },
        });
    });

    $(document).on('keyup',function (e) {
        e.preventDefault();
        var search_string = $('#search').val();
        $.ajax({
            url:"/search",
            method:'GET',
            data:{
                search_string:search_string
            },
            success:function(data){
                let htmlView = '';
            for(let i = 0; i < data.length; i++){
                htmlView += "<div class='row mb__10 pb__10'><div class='col widget_img_pr'><a class='db pr oh' href='product-detail-layout-01.html'><img src='data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%201200%201200%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E' class='w__100 lz_op_ef lazyload' alt='sunlight bell solar lamp' data-src='assets/images/mini-cart/product-01.jpg' width='80' height='80'></a></div><div class='col widget_if_pr'><a class='product-title db' href='product-detail-layout-01.html'>"+data[i].name+"</a>"+new Intl.NumberFormat('en-US', 
                            {  
                                style: 'currency',  
                                currency: 'USD' 
                            }).format(data[i].price)+"</div></div>";
            }    
            $('#search_product').html(htmlView);
            },
            error: function (error) {
                console.error(error);
            }
        });
    });
/*
    $(document).on('keyup',function (e) {
        e.preventDefault();
        var keyword = $('#search').val();
        $.ajax({
            url:"{{route('product.search')}}",
            {_token: $('meta[name="csrf-token"]').attr('content'),
            keyword:keyword
            }
            method:'GET',
            data:{
                search_string:search_string
            },
            success:function(data){
                $('.js_prs_search').html(data);
            },
            error: function (error) {
                console.error(error);
            }
        });
    });
*/

   /* $('#search').on('keyup',function(){
        search();
    });
    search();
    function search(){ 
            var keyword = $('#search').val();
            $.post('{{ route("product.search") }}',
            function(data){
                product_post(data);
                console.log(data);
            });
        }
       
        product_post(res){
            let htmlView = '';
            if(res.products.length <= 0){
                htmlView+= `<div class="row mb__10 pb__10">No product found</div>`;
            }
            for(let i = 0; i < res.products.length; i++){
                    htmlView += `
                    <div class="row mb__10 pb__10">
                            <div class="col widget_img_pr">
                                <a class="db pr oh" href="product-detail-layout-01.html"><img src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%201200%201200%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" class="w__100 lz_op_ef lazyload" alt="sunlight bell solar lamp" data-src="assets/images/mini-cart/product-01.jpg" width="80" height="80"></a>
                            </div>
                            <div class="col widget_if_pr">
                                <a class="product-title db" href="product-detail-layout-01.html">sunlight bell solar lamp</a>$35.00
                            </div>
                    </div>`;
            }     
            $('.js_prs_search').html(htmlView);
        }

*/

    $(document).on('submit','#payform', function (e) {
    //e.preventDefault();
    $.ajax({
        url:"/payments/initiatepush",
        data:new FormData(this),
        type:"POST",
        cache: false,
        contentType: false,
        processData: false,
        success:function(data)
        {
            $("#payform").trigger("reset");
            Command:toastr["success"]("Payment initiated successfully Enter your MPESA pin to complete the payment","Success");
            $('#cart-modal').modal('hide');
        }, 
        error:function($err){
                let error =$err.responseJSON;
                $.each(error.errors,function(index,value){
                    Command:toastr["error"](value,"Failed");
                });
            },       
        });
    });
    });
</script>
</body>
</html>
