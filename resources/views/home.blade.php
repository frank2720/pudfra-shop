@extends('layouts.main')
@section('title')
{{config('app.name')}}-{{__('Home')}}
@endsection
@section('content')

<div lc-helper="background" class="container-fluid py-5 mb-4 d-flex justify-content-center" style="  background-image: url('{{Vite::asset('resources/assets/images/baground.webp')}}');
    background-position: center;
    background-size:cover;
    background-repeat:no-repeat">
    <div class="p-5 mb-4 lc-block col-xxl-7 col-lg-8 col-12" style=" backdrop-filter: blur(6px) saturate(102%);
        -webkit-backdrop-filter: blur(6px) saturate(102%);
        background-color: rgba(255, 255, 255, 0.548);
        border-radius: 12px;
        border: 1px solid rgba(209, 213, 219, 0.3);">
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
            <button class="se_cat_lm pr nt_cat_lm button button_default br_rd_true btn_icon_false load-more-data">Load More</button>
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
            @include('topsale')
        </div>
    </div>
</div>
<!-- end bestseller products-->
@endsection
