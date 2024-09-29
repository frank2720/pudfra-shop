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
            <a href="">
                <div class="card info-card sales-card">

                    <div class="card-body">
                    <h5 class="card-title">Orders</h5>
    
                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class='bx bx-purchase-tag'></i>
                        </div>
                        <div class="ps-3">
                        <h6>..</h6>
                        <span class="text-success small pt-1 fw-bold">..%</span> <span class="text-muted small pt-2 ps-1">increase Today</span>
    
                        </div>
                    </div>
                    </div>
    
                </div>
            </a>
        </div>

        <div class="col-xxl-4 col-md-4">
            <a href="{{route('admin.products.list')}}">
                <div class="card info-card revenue-card">

                    <div class="card-body">
                    <h5 class="card-title">Products</h5>
    
                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class='bx bx-closet' ></i>
                        </div>
                        <div class="ps-3">
                        <h6>{{$Tproducts}}</h6>
                        <span class="text-success small pt-1 fw-bold">{{$productsIncrease}}%</span> <span class="text-muted small pt-2 ps-1">increase Today</span>
    
                        </div>
                    </div>
                    </div>
    
                </div>
            </a>
        </div>

        <div class="col-xxl-4 col-md-4">
            <a href="">
                <div class="card info-card revenue-card">

                    <div class="card-body">
                    <h5 class="card-title">Customers</h5>
    
                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class='bx bx-male-female'></i>
                        </div>
                        <div class="ps-3">
                        <h6>..</h6>
                        <span class="text-success small pt-1 fw-bold">..%</span> <span class="text-muted small pt-2 ps-1">increase</span>
    
                        </div>
                    </div>
                    </div>
    
                </div>
            </a>
        </div>
    </div>
</div>

<section class="section">
<div class="">
    <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <!-- Bar Chart -->
            <div id="cartegoryChart" class="mt-4"></div>

            <!--<script>
                document.addEventListener("DOMContentLoaded", () => {
                    const data = json(categoryData);
                    const categories = data.map(item => item.category);
                    const seriesData = data.map(item => item.total);
                    new ApexCharts(document.querySelector("#cartegoryChart"), {
                    series: [{
                        name: "Total products",
                        data: seriesData
                    }],
                    chart: {
                        type: 'bar',
                        height: 350
                    },
                    plotOptions: {
                        bar: {
                            borderRadius: 4,
                            borderRadiusApplication: 'end',
                            horizontal: true,
                            distributed: true,
                            dataLabels: {
                            position: 'bottom'
                            },
                        }
                    },
                    dataLabels: {
                        enabled: false,
                    },
                    xaxis: {
                        categories: categories
                    },
                    yaxis: {
                        labels: {
                            show: false
                        }
                    },
                    title: {
                        text: 'Product Categories',
                        align: 'center',
                        floating: true
                    },
                    }).render();
                });
            </script>-->
            <!-- End Bar Chart -->

          </div>
        </div>
    </div>
</div>
</section>
@endsection