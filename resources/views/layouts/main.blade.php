<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"/>
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="{{asset('assets/main/style.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <title>{{ config('app.name','pudfra-shop')}}</title>

    <link rel="icon" type="image/x-icon" href="{{asset('assets/images/icons/money-back.svg')}}">
    <script>
        $(document).ready(function () {

            $('#cart-details').click(function () {
                $('#cart-modal').modal('show');
            });

            $(document).on('click','.add-to-cart-btn', function (e) {
                e.preventDefault();
                var productId = $(this).data('product-id');

                $.ajax({
                    url:'/add-to-cart/' + productId,
                    type: 'post',
                    dataType: 'json',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function (data) {
                        $('.badge-notification').load(location.href+' .badge-notification');
                        $('.cart-products').load(location.href+' .cart-products');
                        Command:toastr["success"]("Cart updated successfully","Success");
                    },
                    error: function (error) {
                        console.error(error);
                    }
                });
            });

            $(document).on('click','.close', function(e){
                e.preventDefault();
                $('#cart-modal').modal('hide');
            });

            $(document).on('click','.remove-product', function(e){
                var productremovedId = $(this).data('productremoved-id');

                $.ajax({
                    url:'/shopping/removeItem/' + productremovedId,
                    type: 'get',
                    dataType: 'json',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function (data) {
                        $('.badge-notification').load(location.href+' .badge-notification');
                        $('.cart-products').load(location.href+' .cart-products');
                        Command:toastr["success"]("Cart updated successfully","Success");
                    },
                    error: function (error) {
                        console.error(error);
                    }
                });
            });
        });
    </script>
</head>
<body>
    @include('layouts.navbar')
    @include('cart')
    @yield('content')
    @include('layouts.footer')
    <a href="https://wa.me/254768990829" class="float" target="_blank">
        <i class="fa fa-whatsapp wp-button"></i>
    </a>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.js"></script>
<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
</body>
</html>