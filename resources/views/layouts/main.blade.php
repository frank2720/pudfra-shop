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
    <title>{{ config('app.name','pudfra-shop')}}</title>

    <link rel="icon" type="image/x-icon" href="{{asset('assets/images/icons/money-back.svg')}}">
    <script>
        $(document).ready(function () {
        $('.add-to-cart-btn').on('click', function (e) {
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
                    // Update the cart quantity display
                    //$('.badge-notification').text(data.totalQty);
                    $('.badge-notification').load(location.href+' .badge-notification');
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
    @yield('content')
    @include('layouts.footer')
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.js"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
</body>
</html>