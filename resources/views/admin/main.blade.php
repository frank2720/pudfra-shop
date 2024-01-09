<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{config('app.name','pudfra-shop')}}</title>
  <link rel="shortcut icon" href="{{asset('assets/images/icons/money-back.svg')}}" type="image/x-icon">
  <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.12.1/css/pro.min.css">
  <script src="https://kit.fontawesome.com/3f96f27cdc.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/style.css')}}">  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.0/min/dropzone.min.css">
</head>
<body>
  @include('admin.navbar')
  @yield('content')
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.0/min/dropzone.min.js"></script>
  <script src="{{asset('assets/admin/js/scripts.js')}}"></script>
</body>
</html>
