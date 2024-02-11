<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="{{asset('images/pudfralogo.svg')}}">
    <title>{{ config('app.name','pudfra-shop')}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
    <link rel="stylesheet" href="{{asset('assets/main/client.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    <script>
      $(document).ready(function () {

          $(document).on('click', '#cart-details', function (e) {
              e.preventDefault();
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
                      _token: '{{ csrf_token() }}'
                  },
                  success: function (data) {
                      $('.badge-notification').load(location.href+' .badge-notification');
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
                      _token: '{{ csrf_token() }}'
                  },
                  success: function (data) {
                      $('.badge-notification').load(location.href+' .badge-notification');
                      $('.cart-products').load(location.href+' .cart-products');
                      Command:toastr["warning"]("Product quantity decreased","Warning");
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
  @include('layouts.carousel')
  @include('cart')
  @yield('content')
  @include('layouts.footer')
  <a href="https://wa.me/254741061815" class="float" target="_blank">
    <i class="fa-brands fa-whatsapp  wp-button"></i>
  </a>
    <script src="https://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    {!! Toastr::message() !!}
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>