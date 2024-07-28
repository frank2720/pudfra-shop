@extends('layouts.main')
@section('title')
    {{__('Profile')}}
@endsection
@section('content')
    <div class="container light-style flex-grow-1 container-p-y my-3">

        <h4 class="font-weight-bold py-3 mb-4">
            Account Details
        </h4>

        <div class="card overflow-hidden">
            <div class="row no-gutters row-bordered row-border-light">
                <div class="col-md-3 pt-0">
                    <div class="list-group list-group-flush account-settings-links">
                        <a class="list-group-item list-group-item-action active" data-toggle="list" href="#account-general">General</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-info">Recent Orders</a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="account-general">

                            <div class="container my-3">
                                <div class="main-body">
                                    <div class="row gutters-sm">
                                        <div class="col-md-4 mb-3">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="d-flex flex-column align-items-center text-center">
                                                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                                                        <div class="mt-3">
                                                            <p class="text-muted font-size-sm"><b>{{$user->is_admin=1?'Admin':'Customer'}}</b></p>
                                                        </div>
                                                    </div>
                                                    <a class="button d-flex flex-column align-items-center text-center" href="{{route('logout')}}"
                                                        onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();">
                                                        <i class='bx bx-log-out-circle'></i>
                                                        <span>Sign Out</span>
                                                    </a>
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                                        @csrf
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        <style>
                                            nav {
                                                min-height: 70px;
                                            }

                                            nav .navbar-brand .logo {
                                                padding: 10px 15px;
                                                border-radius: 8px;
                                            }

                                            nav .navbar-brand .logo .h2 {
                                                margin: 0;
                                            }

                                            nav .navbar-brand .h4 {
                                                margin-bottom: 0px;
                                                font-weight: 900;
                                            }

                                            nav .navbar-brand .fs-6 {
                                                font-size: 0.88rem !important;
                                            }

                                            nav ul li {
                                                padding: 0 20px;
                                            }

                                            .navbar-light .navbar-nav .nav-link {
                                                color: #333;
                                            }

                                            .navbar-light .navbar-nav .nav-link:hover {
                                                color: #4e2296;
                                            }

                                            .navbar-light .navbar-nav .nav-link.active {
                                                color: #451296;
                                            }

                                            nav ul li a .cart {
                                                padding: 4px 6px;
                                                border-radius: 6px;
                                                position: relative;
                                                display: inline;
                                            }

                                            nav ul li a .cart::after {
                                                position: absolute;
                                                content: "";
                                                width: 8px;
                                                height: 8px;
                                                border-radius: 50%;
                                                background-color: #ff5252;
                                                top: -1px;
                                            }

                                            .navbar-toggler:focus {
                                                box-shadow: none;
                                            }

                                            #sidebar {
                                                padding: 15px 0px 15px 0px;
                                                border-radius: 10px;
                                            }

                                            #sidebar .h4 {
                                                font-weight: 500;
                                                padding-left: 15px;
                                            }

                                            #sidebar ul {
                                                list-style: none;
                                                margin: 0;
                                                padding-left: 0rem;
                                            }

                                            #sidebar ul li {
                                                padding: 10px 0;
                                                display: block;
                                                padding-left: 1rem;
                                                padding-right: 1rem;
                                                border-left: 5px solid transparent;
                                            }

                                            #sidebar ul li.active {
                                                border-left: 5px solid #ff5252;
                                                background-color: #44007c;
                                            }

                                            #sidebar ul li a {
                                                display: block;
                                            }

                                            #sidebar ul li a .fas,
                                            #sidebar ul li a .far {
                                                color: #ddd;
                                            }

                                            #sidebar ul li a .link {
                                                color: #fff;
                                                font-weight: 500;
                                            }

                                            #sidebar ul li a .link-desc {
                                                font-size: 0.8rem;
                                                color: #ddd;
                                            }

                                            #main-content {
                                                padding: 30px;
                                                border-radius: 15px;
                                            }

                                            #main-content .h5,
                                            #main-content .text-uppercase {
                                                font-weight: 600;
                                                margin-bottom: 0;
                                            }

                                            #main-content .h5+div {
                                                font-size: 0.9rem;
                                            }

                                            #main-content .box {
                                                padding: 10px;
                                                border-radius: 6px;
                                                width: 170px;
                                                height: 90px;
                                            }

                                            #main-content .box img {
                                                width: 40px;
                                                height: 40px;
                                                object-fit: contain;
                                            }

                                            #main-content .box .tag {
                                                font-size: 0.9rem;
                                                color: #000;
                                                font-weight: 500;
                                            }

                                            #main-content .box .number {
                                                font-size: 1.5rem;
                                                font-weight: 600;
                                            }

                                            .order {
                                                padding: 10px 30px;
                                                min-height: 150px;
                                            }

                                            .order .order-summary {
                                                height: 100%;
                                            }

                                            .order .blue-label {
                                                background-color: #aeaeeb;
                                                color: #0046dd;
                                                font-size: 0.9rem;
                                                padding: 0px 3px;
                                            }

                                            .order .green-label {
                                                background-color: #a8e9d0;
                                                color: #008357;
                                                font-size: 0.9rem;
                                                padding: 0px 3px;
                                            }

                                            .order .fs-8 {
                                                font-size: 0.85rem;
                                            }

                                            .order .rating img {
                                                width: 20px;
                                                height: 20px;
                                                object-fit: contain;
                                            }

                                            .order .rating .bxs-star,
                                            .order .rating .bx-star {
                                                font-size: 0.9rem;
                                            }

                                            .order .rating .bxs-star {
                                                color: #daa520;
                                            }

                                            .order .status {
                                                font-weight: 600;
                                            }

                                            .order .btn.btn-primary {
                                                background-color: #fff;
                                                color: #4e2296;
                                                border: 1px solid #4e2296;
                                            }

                                            .order .btn.btn-primary:hover {
                                                background-color: #4e2296;
                                                color: #fff;
                                            }

                                            .order .progressbar-track {
                                                margin-top: 20px;
                                                margin-bottom: 20px;
                                                position: relative;
                                            }

                                            .order .progressbar-track .progressbar {
                                                list-style: none;
                                                display: flex;
                                                align-items: center;
                                                justify-content: space-between;
                                                padding-left: 0rem;
                                            }

                                            .order .progressbar-track .progressbar li {
                                                font-size: 1.5rem;
                                                border: 1px solid #333;
                                                padding: 5px 10px;
                                                border-radius: 50%;
                                                background-color: #dddddd;
                                                z-index: 100;
                                                position: relative;
                                            }

                                            .order .progressbar-track .progressbar li.green {
                                                border: 1px solid #007965;
                                                background-color: #d5e6e2;
                                            }

                                            .order .progressbar-track .progressbar li::after {
                                                position: absolute;
                                                font-size: 0.9rem;
                                                top: 50px;
                                                left: 0px;
                                            }

                                            #tracker {
                                                position: absolute;
                                                border-top: 1px solid #bbb;
                                                width: 100%;
                                                top: 25px;
                                            }

                                            #step-1::after {
                                                content: 'Placed';
                                                left: -10px;
                                            }

                                            #step-2::after {
                                                content: 'Accepted';
                                                left: -10px;
                                            }

                                            #step-3::after {
                                                content: 'Packed';
                                                left: 10px;
                                            }

                                            #step-4::after {
                                                content: 'Shipped';
                                                left: 10px;
                                            }

                                            #step-5::after {
                                                content: 'Delivered';
                                                left: 10px;
                                            }



                                            /* Backgrounds */
                                            .bg-purple {
                                                background-color: #55009b;
                                            }

                                            .bg-light {
                                                background-color: #f0ecec !important;
                                            }

                                            .green {
                                                color: #007965 !important;
                                            }

                                            /* Media Queries */
                                            @media(max-width: 1199.5px) {
                                                nav ul li {
                                                    padding: 0 10px;
                                                }
                                            }

                                            @media(max-width: 500px) {
                                                .order .progressbar-track .progressbar li {
                                                    font-size: 1rem;
                                                }

                                                .order .progressbar-track .progressbar li::after {
                                                    font-size: 0.8rem;
                                                    top: 35px;
                                                }

                                                #tracker {
                                                    top: 20px;
                                                }
                                            }

                                            @media(max-width: 440px) {
                                                #main-content {
                                                    padding: 20px;
                                                }

                                                .order {
                                                    padding: 20px;
                                                }

                                                #step-4::after {
                                                    left: -5px;
                                                }
                                            }

                                            @media(max-width: 395px) {
                                                .order .progressbar-track .progressbar li {
                                                    font-size: 0.8rem;
                                                }

                                                .order .progressbar-track .progressbar li::after {
                                                    font-size: 0.7rem;
                                                    top: 35px;
                                                }

                                                #tracker {
                                                    top: 15px;
                                                }

                                                .order .btn.btn-primary {
                                                    font-size: 0.85rem;
                                                }
                                            }

                                            @media(max-width: 355px) {
                                                #main-content {
                                                    padding: 15px;
                                                }

                                                .order {
                                                    padding: 10px;
                                                }
                                            }
                                        </style>

                                        <div class="col-md-8 mb-3">
                                            <div id="main-content" class="bg-white border">
                                                <div class="d-flex flex-column">
                                                    <div class="h5">Hello {{$user->name}},</div>
                                                    <div>Logged in as: <b>{{$user->email}}</b></div>
                                                </div>
                                                <div class="d-flex my-4 flex-wrap">
                                                    <div class="box me-4 my-1 bg-light">
                                                        <img src="https://www.freepnglogos.com/uploads/box-png/cardboard-box-brown-vector-graphic-pixabay-2.png"
                                                            alt="">
                                                        <div class="d-flex align-items-center mt-2">
                                                            <div class="tag">Orders placed</div>
                                                            <div class="ms-auto number">10</div>
                                                        </div>
                                                    </div>
                                                    <div class="box me-4 my-1 bg-light">
                                                        <img src="https://www.freepnglogos.com/uploads/shopping-cart-png/shopping-cart-campus-recreation-university-nebraska-lincoln-30.png"
                                                            alt="">
                                                        <div class="d-flex align-items-center mt-2">
                                                            <div class="tag">Items in Cart</div>
                                                            <div class="ms-auto number">{{session()->get('cart')->totalQty??0}}</div>
                                                        </div>
                                                    </div>
                                                    <div class="box me-4 my-1 bg-light">
                                                        <img src="https://www.freepnglogos.com/uploads/love-png/love-png-heart-symbol-wikipedia-11.png"
                                                            alt="">
                                                        <div class="d-flex align-items-center mt-2">
                                                            <div class="tag">Wishlist</div>
                                                            <div class="ms-auto number">10</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="account-info">
                            <div class="my-3 mx-3">
                                <div id="main-content" class="bg-white border card-body">
                                    <div class="text-uppercase">My recent orders</div>
                                    <div class="order my-3 bg-light">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="d-flex flex-column justify-content-between order-summary">
                                                    <div class="d-flex align-items-center">
                                                        <div class="text-uppercase">Order #fur10001</div>
                                                        <div class="blue-label ms-auto text-uppercase">paid</div>
                                                    </div>
                                                    <div class="fs-8">Products #03</div>
                                                    <div class="fs-8">22 August, 2020 | 12:05 PM</div>
                                                    <div class="rating d-flex align-items-center pt-1">
                                                        <img src="https://www.freepnglogos.com/uploads/like-png/like-png-hand-thumb-sign-vector-graphic-pixabay-39.png"
                                                            alt=""><span class="px-2">Rating:</span>
                                                            <i class='bx bxs-star' ></i>
                                                            <i class='bx bxs-star' ></i>
                                                            <i class='bx bxs-star' ></i>
                                                            <i class='bx bxs-star' ></i>
                                                            <i class='bx bx-star'></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="progressbar-track">
                                                    <ul class="progressbar">
                                                        <li id="step-1" class="text-muted green">
                                                            <i class='bx bx-gift'></i>
                                                        </li>
                                                        <li id="step-2" class="text-muted green">
                                                            <i class='bx bx-check'></i>
                                                        </li>
                                                        <li id="step-3" class="text-muted green">
                                                            <i class='bx bx-package'></i>
                                                        </li>
                                                        <li id="step-4" class="text-muted green">
                                                            <i class='bx bxs-truck'></i>
                                                        </li>
                                                        <li id="step-5" class="text-muted green">
                                                            <i class='bx bx-box'></i>
                                                        </li>
                                                    </ul>
                                                    <div id="tracker"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="order my-3 bg-light">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="d-flex flex-column justify-content-between order-summary">
                                                    <div class="d-flex align-items-center">
                                                        <div class="text-uppercase">Order #fur10001</div>
                                                        <div class="green-label ms-auto text-uppercase">cod</div>
                                                    </div>
                                                    <div class="fs-8">Products #03</div>
                                                    <div class="fs-8">22 August, 2020 | 12:05 PM</div>
                                                    <div class="rating d-flex align-items-center pt-1">
                                                        <img src="https://www.freepnglogos.com/uploads/like-png/like-png-hand-thumb-sign-vector-graphic-pixabay-39.png"
                                                            alt=""><span class="px-2">Rating:</span>
                                                            <i class='bx bxs-star' ></i>
                                                            <i class='bx bxs-star' ></i>
                                                            <i class='bx bxs-star' ></i>
                                                            <i class='bx bxs-star' ></i>
                                                            <i class='bx bx-star'></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="progressbar-track">
                                                    <ul class="progressbar">
                                                        <li id="step-1" class="text-muted green">
                                                            <i class='bx bx-gift'></i>
                                                        </li>
                                                        <li id="step-2" class="text-muted">
                                                            <i class='bx bx-check'></i>
                                                        </li>
                                                        <li id="step-3" class="text-muted">
                                                            <i class='bx bx-package'></i>
                                                        </li>
                                                        <li id="step-4" class="text-muted">
                                                            <i class='bx bxs-truck'></i>
                                                        </li>
                                                        <li id="step-5" class="text-muted">
                                                            <i class='bx bx-box'></i>
                                                        </li>
                                                    </ul>
                                                    <div id="tracker"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
