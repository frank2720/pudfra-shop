@extends('admin.main')
@section('title')
    {{__('Dashboard Analysis')}}
@endsection
@section('maintitle')
    {{__('Dashboard')}}
@endsection
@section('pagetitle')
    {{__('Summary')}}
@endsection
@section('content')
<div class="col-lg-12 dashboard">
    <div class="row">
        <div class="col-xxl-4 col-md-4">
            <div class="card info-card sales-card">

                <div class="card-body">
                <h5 class="card-title">Orders</h5>

                <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class='bx bx-purchase-tag'></i>
                    </div>
                    <div class="ps-3">
                    <h6>145</h6>
                    <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                    </div>
                </div>
                </div>

            </div>
        </div>

        <div class="col-xxl-4 col-md-4">
            <div class="card info-card revenue-card">

                <div class="card-body">
                <h5 class="card-title">Products</h5>

                <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class='bx bx-closet' ></i>
                    </div>
                    <div class="ps-3">
                    <h6>{{$Tproducts}}</h6>
                    <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                    </div>
                </div>
                </div>

            </div>
        </div>

        <div class="col-xxl-4 col-md-4">
            <div class="card info-card revenue-card">

                <div class="card-body">
                <h5 class="card-title">Customers</h5>

                <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class='bx bx-male-female'></i>
                    </div>
                    <div class="ps-3">
                    <h6>264</h6>
                    <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                    </div>
                </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection