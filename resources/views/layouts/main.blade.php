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
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{asset('assets/css/base.css')}}">
    <link rel="stylesheet" href="https://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body class="kalles-template header_full_true des_header_3 css_scrollbar lazy_icons btnt4_style_2 zoom_tp_2 css_scrollbar template-index kalles_toolbar_true hover_img2 swatch_style_rounded swatch_list_size_small label_style_rounded wrapper_full_width header_full_true hide_scrolld_true lazyload font-poppins">
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
                if(data.length <= 0){
                    htmlView+= `<div class="text-danger text-center">No product found</div>`;
                }
                for(let i = 0; i < data.length; i++){
                    htmlView += "<div class='row mb__10 pb__10'><div class='col widget_img_pr'><a class='db pr oh' href=''><img src='data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%201200%201200%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E' class='w__100 lz_op_ef lazyload' alt='sunlight bell solar lamp' data-src='storage/"+data[i].images[0].url+"' width='80' height='80'></a></div><div class='col widget_if_pr'><a class='product-title db' href=''>"+data[i].name+"</a>"+new Intl.NumberFormat('en-US', 
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

    $(document).ready(function() {
        $('.img-small-wrap img').mouseover(function() {
            var imgSrc = $(this).attr('src');
            $('.zoomed-image').html('<img src="' + imgSrc + '">').fadeIn();
        });

        $('.img-small-wrap img').mouseleave(function() {
            $('.zoomed-image').fadeOut().html('');
        });
    });
</script>
</body>
</html>
