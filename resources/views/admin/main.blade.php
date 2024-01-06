<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="{{asset('assets/images/icons/money-back.svg')}}" type="image/x-icon">  
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.12.1/css/pro.min.css">
  <script src="https://kit.fontawesome.com/3f96f27cdc.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/style.css')}}">  
  <title>@yield('tittle')</title>
</head>
<body class="bg-gray-100">

    @include('admin.navbar')
    @include('admin.sidebar')
    <div class="h-screen flex flex-row flex-wrap">
        @yield('content')
    </div>
<!-- script -->
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script src="{{asset('assets/admin/js/scripts.js')}}"></script>
<!-- end script -->

</body>
</html>
