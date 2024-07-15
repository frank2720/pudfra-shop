@extends('layouts.main')
@section('title')
    {{__('List of products')}}
@endsection
@section('content')
<div id="nt_content">

    <div class="container container_cat nt_pop_sidebar cat_default mb__20">

        <!--grid control-->
        <div class="cat_toolbar row fl_center al_center mt__30">
            <div class="cat_view col-auto">
                <div class="dn dev_desktop">
                    <a href="#" data-mode="grid" data-dev="dk" data-col="6" class="pr mr__10 cat_view_page view_6"></a>
                    <a href="#" data-mode="grid" data-dev="dk" data-col="4" class="pr mr__10 cat_view_page view_4"></a>
                    <a href="#" data-mode="grid" data-dev="dk" data-col="3" class="pr mr__10 cat_view_page view_3 active"></a>
                    <a href="#" data-mode="grid" data-dev="dk" data-col="15" class="pr mr__10 cat_view_page view_15"></a>
                    <a href="#" data-mode="grid" data-dev="dk" data-col="2" class="pr cat_view_page view_2"></a>
                </div>
                <div class="dn dev_tablet dev_view_cat">
                    <a href="#" data-dev="tb" data-col="6" class="pr mr__10 cat_view_page view_6"></a>
                    <a href="#" data-dev="tb" data-col="4" class="pr mr__10 cat_view_page view_4"></a>
                    <a href="#" data-dev="tb" data-col="3" class="pr cat_view_page view_3"></a>
                </div>
                <div class="flex dev_mobile dev_view_cat">
                    <a href="#" data-dev="mb" data-col="12" class="pr mr__10 cat_view_page view_12"></a>
                    <a href="#" data-dev="mb" data-col="6" class="pr cat_view_page view_6"></a>
                </div>
            </div>
            <div class="cat_sortby cat_sortby_js col tr kalles_dropdown kalles_dropdown_container">
                <button class="btn in_flex fl_between al_center sortby_pick kalles_dropDown_label featurnBtn rounded-pill dropdown-toggle show" type="button" data-bs-toggle="dropdown" aria-expanded="true">
                    Sort products by
                </button>
                <div class="nt_sortby dn">
                    <div class="nt_ajaxsortby wrap_sortby">
                        <a data-label="Alphabetically, A-Z" class="list-group-item list-group-item-action" href="#A-Z">Alphabetical, A-Z</a>
                        <a data-label="Alphabetically, Z-A" class="list-group-item list-group-item-action" href="#Z-A">Alphabetical, Z-A</a>
                        <a data-label="Price, low to high" class="list-group-item list-group-item-action" href="#lowHigh">Price, low to high</a>
                        <a data-label="Price, high to low" class="list-group-item list-group-item-action" href="#highLow">Price, high to low</a>
                    </div>
                </div>
            </div>
        </div>
        <!--end grid control-->

        <!--product container-->
        <div class="row">
            <div class="col-lg-12 col-12">
                <div class="kalles-section tp_se_cdt">

                    <!--products list-->
                    <div class="on_list_view_false products nt_products_holder row fl_center row_pr_1 cdt_des_1 round_cd_false nt_cover ratio_nt position_8 space_30 nt_default">
                        @foreach ($products as $product)
                            <div class="col-lg-3 col-md-3 col-6 pr_animated done mt__30 pr_grid_item product nt_pr desgin__1">
                                <div class="product-inner pr">
                                    <div class="product-image pr oh lazyload">
                                        <a class="d-block" href="{{route('product.details',['id'=>$product->id])}}">
                                            <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_571" data-bgset="{{Storage::url($product->images[0]->url??null)}}"></div>
                                        </a>
                                        <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                                            <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_571" data-bgset="{{Storage::url($product->images[1]->url??$product->images[0]->url??null)}}"></div>
                                        </div>
                                        <div class="hover_button op__0 tc pa flex column ts__03">
                                            <a href="" class="pr pr_atc cd br__40 bgw tc dib js__qs cb chp ttip_nt tooltip_top_left add-to-cart-btn" data-product-id="{{$product->id}}">
                                                <span class="tt_txt">Quick Shop</span>
                                                <i class='bx bxs-cart-add'></i>
                                                <span>Quick Shop</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-info mt__15">
                                        <h3 class="product-title pr fs__14 mg__0 fwm">
                                            <a class="cd chp" href="{{route('product.details',['id'=>$product->id])}}">{{$product->name}}</a>
                                        </h3>
                                        <span class="price dib mb__5">Ksh {{number_format($product->price,2,".",",")}}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!--end products list-->
                </div>
            </div>
        </div>
        <!--end product container-->
    </div>

</div>
@endsection