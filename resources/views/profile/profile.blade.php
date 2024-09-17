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
                                        <div class="col-md-8 mb-3">
                                            <div id="main-content" class="bg-white border">
                                                <div class="d-flex flex-column">
                                                    <div class="h5">Hello {{$user->name}},</div>
                                                </div>
                                                <div class="d-flex my-4 flex-wrap">
                                                    <div class="box me-4 my-1 bg-light">
                                                        <img src="https://www.freepnglogos.com/uploads/box-png/cardboard-box-brown-vector-graphic-pixabay-2.png"
                                                            alt="..">
                                                        <div class="d-flex align-items-center mt-2">
                                                            <div class="tag">Orders placed</div>
                                                            <div class="ms-auto number">10</div>
                                                        </div>
                                                    </div>
                                                    <div class="box me-4 my-1 bg-light">
                                                        <img src="https://www.freepnglogos.com/uploads/shopping-cart-png/shopping-cart-campus-recreation-university-nebraska-lincoln-30.png"
                                                            alt="..">
                                                        <div class="d-flex align-items-center mt-2">
                                                            <div class="tag">Items in Cart</div>
                                                            <div class="ms-auto number">{{session()->get('cart')->totalQty??0}}</div>
                                                        </div>
                                                    </div>
                                                    <div class="box me-4 my-1">
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
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="account-info">
                            <div class="my-3 mx-3">
                                <div id="main-content" class="bg-white border card-body">
                                    <div class="text-uppercase">My recent orders</div>
                                    <div class="order my-3">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="d-flex flex-column justify-content-between order-summary">
                                                    <div class="d-flex align-items-center">
                                                        <div class="text-uppercase">Order #fur10001</div>
                                                    </div>
                                                    <div class="fs-8">Products #03</div>
                                                    <div class="fs-8">22 August, 2020 | 12:05 PM</div>
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
                                    <div class="order my-3">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="d-flex flex-column justify-content-between order-summary">
                                                    <div class="d-flex align-items-center">
                                                        <div class="text-uppercase">Order #fur10001</div>
                                                    </div>
                                                    <div class="fs-8">Products #03</div>
                                                    <div class="fs-8">22 August, 2020 | 12:05 PM</div>
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
