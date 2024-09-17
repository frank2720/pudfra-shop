@extends('layouts.main')
@section('title')
{{config('app.name')}} {{__('Your One-Stop Online Store for Quality Products')}}
@endsection
@section('content')
<div class="">
    <div class="row">
        <div class = "col-md-6 d-md-block">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" id="car">
                    <div class="carousel-item active">
                        <img class="w-100 h-75 d-inline-block" src="https://www.karkhanawala.in/wp-content/uploads/2020/04/Bags.jpg.webp" alt="..">
                    </div>
                    <div class="carousel-item">
                        <img class="w-100 h-75 d-inline-block" src="https://rkgsbags.com/wp-content/uploads/slider/cache/80212ff7d9008ff5b19fd38750121179/slider2-3.jpg" alt="..">
                    </div>
                    <div class="carousel-item">
                        <img class="w-100 h-75 d-inline-block" src="https://www.aryabags.com/uploads/1645192063.jpg" alt="..">
                    </div>
                    <div class="carousel-item">
                        <img class="w-100 h-75 d-inline-block" src="https://img.freepik.com/premium-photo/happy-teen-girl-carry-backpack-childhood-happiness-back-school-cheerful-kid-with-school-bag-banner-schoolgirl-student-school-child-pupil-portrait-with-copy-space_545934-46467.jpg" alt="..">
                    </div>
                    <div class="carousel-item">
                        <img class="w-100 h-75 d-inline-block" src="https://st.depositphotos.com/47153598/56770/i/450/depositphotos_567706376-stock-photo-happy-kid-portrait-has-long.jpg" alt="..">
                    </div>
                    <div class="carousel-item">
                        <img class="w-100 h-75 d-inline-block" src="https://cdn.shopify.com/s/files/1/0814/7035/7814/files/bags.jpg?v=1694690783" alt="..">
                    </div>
                </div>
            </div>
        </div>

        <div class = "col-md-6 d-none d-md-block">
            <div>
                <div class="carousel-inner" id="car">
                    <div class="carousel-item active">
                        <img class="w-100 h-75 d-inline-block lazyload" data-src="https://st.depositphotos.com/47153598/56770/i/450/depositphotos_567706376-stock-photo-happy-kid-portrait-has-long.jpg" alt="..">
                    </div>
                    <div class="carousel-item">
                        <img class="w-100 h-75 d-inline-block lazyload" data-src="https://cdn.shopify.com/s/files/1/0814/7035/7814/files/bags.jpg?v=1694690783" alt="..">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- featured collection -->
<div class="nt_section type_featured_collection tp_se_cdt">
    <div class="maanar-otp-01__feature container">
        <div class="wrap_title des_title_2">
            <h1 class="section-title tc position-relative flex fl_center al_center fs__24 title_2">
                <span class="mr__10 ml__10">TRENDING</span>
            </h1>
            <span class="dn tt_divider">
                <span></span>
                <i class="dn clprfalse title_2 la-gem"></i>
                <span></span>
            </span>
            <h2>
                <span class="section-subtitle db tc sub-title">Top view in this week</span>
            </h2>
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
<div class="maanar-section nt_section type_featured_collection tp_se_cdt">
    <div class="maanar-otp-01__featured-collection-2 container">
        <div class="wrap_title  des_title_2">
            <h2 class="section-title tc pr flex fl_center al_center fs__24 title_2">
                <span class="mr__10 ml__10">BEST SELLER</span>
            </h2>
            <span class="dn tt_divider">
            <span></span>
            <i class="dn clprfalse title_2 la-gem"></i>
            <span></span>
        </span>
           <h2>
            <span class="section-subtitle db tc sub-title">Top sale in this week</span>
           </h2>
        </div>

        <div class="products nt_products_holder row fl_center row_pr_1 cdt_des_1 round_cd_false nt_cover ratio_nt position_8 space_30">
            @foreach ($bestsales as $product)
            <div class="col-lg-3 col-md-3 col-6 pr_animated done mt__30 pr_grid_item product nt_pr desgin__1">
                <div class="product-inner pr">
                    <div class="product-image pr oh">

                        <a class="d-block" href="{{route('product.details',['id'=>$product->id])}}">
                            <img data-src="{{Storage::url($product->images[0]->url??null)}}" class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload" alt="...">
                        </a>
                        <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                            <img data-src="{{Storage::url($product->images[1]->url??$product->images[0]->url??null)}}" class="pr_lazy_img back-img pa nt_bg_lz lazyload" alt="..">
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
                        <h3 class="product-title pr fs__14 mg__0">
                            <a class="cd chp" href="{{route('product.details',['id'=>$product->id])}}">{{__(ucfirst(strtolower($product->name)))}}</a>
                        </h3>
                        <span class="price dib mb__5"><ins>Ksh {{number_format($product->price)}}</ins></span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- end bestseller products-->
@endsection
