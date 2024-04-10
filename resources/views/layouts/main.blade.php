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
    <style>
        a:hover { text-decoration: none; }
        a:active { text-decoration: none; }
    </style>
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
@include('layouts.scripts')
</body>
</html>
