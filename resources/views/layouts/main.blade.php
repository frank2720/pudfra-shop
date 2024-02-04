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
    <style>
        .carousel-item {
        height: 50vh;
        }
        .card {
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        }
        .footer-cta {
        box-shadow: rgba(0, 0, 0, 0.15) 0px 5px 15px;
        }
        .price {
        color: #263238;
        font-size: 24px;
        }

        .card-title {
        color:#263238
        }

        .sale {
        color: #E53935
        }

        .sale-badge {
        background-color: #E53935
        }

        .card-img {
        width: 100%;
        height: 200px;
        object-fit: contain;
        }

        @media (min-width: 1025px) {
        .h-custom {
        height: 100vh !important;
        }
        }
        
        .card-registration .select-input.form-control[readonly]:not([disabled]) {
        font-size: 1rem;
        line-height: 2.15;
        padding-left: .75em;
        padding-right: .75em;
        }
        
        .card-registration .select-arrow {
        top: 13px;
        }
        
        .bg-grey {
        background-color: #eae8e8;
        }
        
        @media (min-width: 992px) {
        .card-registration-2 .bg-grey {
        border-top-right-radius: 16px;
        border-bottom-right-radius: 16px;
        }
        }
        
        @media (max-width: 991px) {
        .card-registration-2 .bg-grey {
        border-bottom-left-radius: 16px;
        border-bottom-right-radius: 16px;
        }
        }
        .error{
            color: #ff0000;
        }
    </style>
    <title>{{ config('app.name','pudfra-shop')}}</title>

    <link rel="icon" type="image/x-icon" href="{{asset('assets/images/icons/money-back.svg')}}">
</head>
<body>
    @include('layouts.navbar')
    @yield('content')
    @include('layouts.footer')
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.js"></script>
</body>
</html>