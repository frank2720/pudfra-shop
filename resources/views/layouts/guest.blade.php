<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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

    @yield('content')


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
    let cartvalue = $('.cartvalue').data('cartvalue')
    $(document).ready(function () {

    $(document).on('click', '#cart-details', function (e) {
        e.preventDefault();
        $('#cart-modal').modal('show');
    });

    $(document).on('click','.add-to-cart-btn', function (event) {
        event.preventDefault();
        event.stopPropagation();
        let $this = $( this );
        $this.addClass( 'loading' );
        var productId = $this.data('product-id');
        $.ajax({
            url:'/add-to-cart/' + productId,
            type: 'post',
            dataType: 'json',
            data: {
                _token: $('meta[name="csrf-token"]').attr('content')
            },
            success: function (data) {
                setTimeout( function () {
                    if ( $this.hasClass( 'js__qs' ) ) {
                        Command:toastr["success"]("Cart updated successfully","Success");
                        cartvalue++
                        $('.cartvalue').text(cartvalue)
                        //$('.tcount').load(location.href+cartvalue);
                    } 
                }, 500);
                $this.removeClass( 'loading' );
                //$('.cart-products').load(location.href+' .cart-products');
                //Command:toastr["success"]("Cart updated successfully","Success");
            },
            error: function (error) {
                console.error(error);
            }
        });
    });

    $(document).on('click','.remove-product', function(e){
        e.preventDefault();
        var productremovedId = $(this).data('productremoved-id');

        $.ajax({
            url:'/shopping/removeItem/' + productremovedId,
            type: 'get',
            dataType: 'json',
            data: {
                _token: $('meta[name="csrf-token"]').attr('content')
            },
            success: function (data) {
                $('.cart-value').load(location.href+' .cart-value');
                $('.cart-products').load(location.href+' .cart-products');
                Command:toastr["warning"]("Item removed from the cart","Warning");
            },
            error: function (error) {
                console.error(error);
            }
        });
    });

    $(document).on('click','.button-plus', function (e) {
        e.preventDefault();
        var productId = $(this).data('incresed-id');

        $.ajax({
            url:'/add-to-cart/' + productId,
            type: 'post',
            dataType: 'json',
            data: {
                _token: $('meta[name="csrf-token"]').attr('content')
            },
            success: function (data) {
                $('.cart-value').load(location.href+' .cart-value');
                $('.cart-products').load(location.href+' .cart-products');
                Command:toastr["success"]("Product quantity increased","Success");
            },
            error: function (error) {
                console.error(error);
            }
        });
    });

    $(document).on('click','.button-minus', function (e) {
        e.preventDefault();
        var productId = $(this).data('decreased-id');

        $.ajax({
            url:'/shopping/reduceItem/' + productId,
            type: 'get',
            dataType: 'json',
            data: {
                _token: $('meta[name="csrf-token"]').attr('content')
            },
            success: function (data) {
                $('.cart-value').load(location.href+' .cart-value');
                $('.cart-products').load(location.href+' .cart-products');
                Command:toastr["warning"]("Product quantity decreased","Warning");
            },
            error: function (error) {
                console.error(error);
            }
        });
    });

    $(document).on('click','.pagination a', function (e) {
        e.preventDefault();
        var page = $(this).attr('href').split('page=')[1]
        $.ajax({
            url:'/pagination/shop_data?page='+page,
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
                $('.shop-data').html(data);
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
</script>
</body>
</html>
