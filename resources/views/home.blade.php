@extends('layouts.main')
@section('title')
{{config('app.name')}}-{{__('Home')}}
@endsection
@section('content')

<style>
    .circle{border-radius: 50%;height:50px;width:50px;border:1px solid #ccc;
padding:0.7rem;text-align: center;}
.badge{position: absolute;top:0px; right:10px;}
hr{margin-bottom: 0rem !important;}
#nav li a{color:#000;}
#nav li{padding:0 10px;}
#nav li a:hover{color:#ccc;}
#hr{margin-top: 0rem !important;}
#car{border-radius: 12px;}
a:hover{text-decoration: none;}
#list-ul li a {color:#000;}
#list-ul .dropright .dropdown-toggle::after{margin-left: 160px !important;}
.card-body{padding:0 23px;}
.card h4{margin-top: -15px;}
.but{border-radius: 10px; padding:7px 15px;}
.col-md-3 .card:hover{box-shadow: 0 4px 15px rgb(153 153 153 / 30%)}
 footer .col-md-3 ul li{list-style: none;}
 footer .col-md-3 ul a{color:#000;}
 h6{font-weight: bold}
.ok{background:#f8f9fa; padding-bottom: 20px;margin-top: 30px;}
#cool{height:50px;width:100px;margin-left: 200px;}
.color{background-color:lightblue;padding-top: 70px;padding-bottom: 70px;}
.form{background-color: #fff;border:1px solid #fff;padding:20px;}
#circlee{position: relative;}
#login-badge{position: absolute;top:-5px;right:0px;}

.mytabs{margin-top:3rem;}
.mytabs .nav-link {
display: block;
padding: .5rem 9rem;border-bottom: 2px solid #000 !important;
font-weight: 700;
}
.mytabs .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {

border-color: transparent !important;
color:#ff6600;
;}
.wrap-text{padding: 1rem;}
</style>
<div class = "col-md-12">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner mt-2"id="car">
            <div class="carousel-item active">
                <img class="d-block w-100" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTYKdc4-EM4JhSkmgKMC4nIuGKv_dexn7KyXw&usqp=CAU" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://cdn.shopify.com/s/files/1/0074/0429/0111/files/Homepage-free-shipping-banner_1350x600.jpg?v=1591817221" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://i.pinimg.com/originals/df/c1/f9/dfc1f9ba2734aa94690f009d721440d7.jpg" alt="Third slide">
            </div>
        </div>
    </div>
</div>
<!-- featured collection -->
<div class="nt_section type_featured_collection tp_se_cdt">
    <div class="kalles-otp-01__feature container">
        <div class="wrap_title des_title_2">
            <h3 class="section-title tc position-relative flex fl_center al_center fs__24 title_2">
                <span class="mr__10 ml__10">TRENDING</span>
            </h3>
            <span class="dn tt_divider">
                <span></span>
                <i class="dn clprfalse title_2 la-gem"></i>
                <span></span>
            </span>
            <span class="section-subtitle db tc sub-title">Top view in this week</span>
        </div>
        <div id="data-wrapper">
            <div class="products nt_products_holder row fl_center row_pr_1 cdt_des_5 round_cd_true nt_cover ratio_nt position_8 space_30">
                @include('trend')
            </div>
        </div>
        <div class="products-footer tc mt__40">
            <button class="button load-more-data" style="border-radius: 12px">Load More</button>
        </div>
    </div>
</div>
<!-- end featured collection -->

<!-- bestseller products-->
<div class="kalles-section nt_section type_featured_collection tp_se_cdt">
    <div class="kalles-otp-01__featured-collection-2 container">
        <div class="wrap_title  des_title_2">
            <h3 class="section-title tc pr flex fl_center al_center fs__24 title_2">
                <span class="mr__10 ml__10">BEST SELLER</span>
            </h3>
            <span class="dn tt_divider">
            <span></span>
            <i class="dn clprfalse title_2 la-gem"></i>
            <span></span>
        </span>
            <span class="section-subtitle db tc sub-title">Top sale in this week</span>
        </div>

        <div class="products nt_products_holder row fl_center row_pr_1 cdt_des_1 round_cd_false nt_cover ratio_nt position_8 space_30">
            @foreach ($bestsales as $product)
            <div class="col-lg-3 col-md-3 col-6 pr_animated done mt__30 pr_grid_item product nt_pr desgin__1">
                <div class="product-inner pr">
                    <div class="product-image pr oh">

                        <a class="d-block" href="{{route('product.details',['id'=>$product->id])}}">
                            <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_586" data-bgset="{{Storage::url($product->images[0]->url??null)}}"></div>
                        </a>
                        <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                            <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_586" data-bgset="{{Storage::url($product->images[1]->url??$product->images[0]->url??null)}}"></div>
                        </div>
                        <div class="hover_button op__0 tc pa flex column ts__03">
                            <a href="" class="pr pr_atc cd br__40 bgw tc dib js__qs cb chp ttip_nt tooltip_top_left add-to-cart-btn"  data-product-id="{{$product->id}}">
                                <span class="tt_txt">Add to cart</span>
                                <i class='bx bxs-shopping-bag'></i>
                                <span>Add to cart</span>
                            </a>
                        </div>
                    </div>
                    <div class="product-info mt__15">
                        <h3 class="product-title pr fs__14 mg__0 fwm">
                            <a class="cd chp" href="{{route('product.details',['id'=>$product->id])}}">{{__(ucfirst(strtolower($product->name)))}}</a>
                        </h3>
                        <span class="price dib mb__5">{{$currency}} &euro; {{number_format($product->price/$currencyExachangeRate,2,".",",")}}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- end bestseller products-->
@endsection
