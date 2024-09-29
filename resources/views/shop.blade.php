@extends('layouts.main')
@section('title')
    {{__('List of Quality Products at Maanar Shop')}}
@endsection
@section('content')
<div id="nt_content">

    <div class="container-fluid container_cat pop_default cat_default mb__20">

        <!--grid control-->
        <div class="cat_toolbar row fl_center al_center mt__30">
            <div class="cat_filter col">
                <a href="#" data-opennt="#maanar-section-nt_filter" data-pos="left" data-remove="true" data-class="popup_filter" data-bg="hide_btn" class="has_icon btn_filter mgr"><i class="iccl fwb bx bx-filter fwb mr__5"></i>Filter</a>
                    <a href="#" data-id="#maanar-section-nt_filter" class="btn_filter js_filter dn mgr"><i class="iccl fwb bx bx-filter fwb mr__5"></i>Filter</a>
            </div>
            <div class="cat_view col">
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

            <div class="cat_sortby cat_sortby_js col tr">
                <select id="sortCriteria" class="col-md-6 selectpicker show-tick in_flex fl_between al_center sortby_pick featurnBtn rounded-pill dropdown-toggle show">
                    <option value="" disabled selected>Sort product by:</option>
                    <option value="name_asc">Alphabetical, A-Z</option>
                    <option value="name_desc">Alphabetical, Z-A</option>
                    <option value="price_asc">Price, low to high</option>
                    <option value="price_desc">Price, high to low</option>
                </select>
            </div>
        </div>
        <!--end grid control-->

         <!--filter panel area-->
         <div class="filter_area_js filter_area">
            <div id="maanar-section-nt_filter" class="maanar-section nt_ajaxFilter section_nt_filter">
                <div class="h3 mg__0 tu bgb cw visible-sm fs__16 pr">Filter<i class='close_pp pegk bx bx-x fs__40 ml__5' ></i>
                </div>
                <div class="cat_shop_wrap">
                    <div class="cat_fixcl-scroll">
                        <div class="cat_fixcl-scroll-content css_ntbar">
                            <div class="row wrap_filter">
                                <div class="col-12 col-md-3 widget">
                                    <h5 class="widget-title">By Price</h5>
                                    <div class="loke_scroll">
                                        <ul class="nt_filter_block nt_filter_styleck css_ntbar" data-filter_condition="or">
                                            <li>
                                                <a href="#" aria-label="Narrow selection to products matching tag price $50-$100">$50-$100</a>
                                            </li>
                                            <li>
                                                <a href="#" aria-label="Narrow selection to products matching tag price $100-$150">$100-$150</a>
                                            </li>
                                            <li>
                                                <a href="#" aria-label="Narrow selection to products matching tag price $150-$200">$150-$200</a>
                                            </li>
                                            <li>
                                                <a href="#" aria-label="Narrow selection to products matching tag price $250-$300">$250-$300</a>
                                            </li>
                                            <li>
                                                <a href="#" aria-label="Narrow selection to products matching tag price $350-$400">$350-$400</a>
                                            </li>
                                            <li>
                                                <a href="#" aria-label="Narrow selection to products matching tag price $450-$500">$450-$500</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-12 col-md-3 widget">
                                    <h5 class="widget-title">By Size</h5>
                                    <div class="loke_scroll">
                                        <ul class="nt_filter_block nt_filter_styleck css_ntbar" data-filter_condition="and">
                                            <li>
                                                <a href="#" aria-label="Narrow selection to products matching tag size s">s</a>
                                            </li>
                                            <li>
                                                <a href="#" aria-label="Narrow selection to products matching tag size m">m</a>
                                            </li>
                                            <li>
                                                <a href="#" aria-label="Narrow selection to products matching tag size l">l</a>
                                            </li>
                                            <li>
                                                <a href="#" aria-label="Narrow selection to products matching tag size xs">xs</a>
                                            </li>
                                            <li>
                                                <a href="#" aria-label="Narrow selection to products matching tag size xl">xl</a>
                                            </li>
                                            <li>
                                                <a href="#" aria-label="Narrow selection to products matching tag size xxl">xxl</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-12 col-md-3 widget">
                                    <h5 class="widget-title">By Brand</h5>
                                    <div class="loke_scroll">
                                        <ul class="nt_filter_block nt_filter_styleck css_ntbar" data-filter_condition="and">
                                            <li>
                                                <a href="#" aria-label="Narrow selection to products matching tag vendor ck">ck</a>
                                            </li>
                                            <li>
                                                <a href="#" aria-label="Narrow selection to products matching tag vendor h&amp;m">h&amp;m</a>
                                            </li>
                                            <li>
                                                <a href="#" aria-label="Narrow selection to products matching tag vendor kalles">kalles</a>
                                            </li>
                                            <li>
                                                <a href="#" aria-label="Narrow selection to products matching tag vendor levi's">levi's</a>
                                            </li>
                                            <li>
                                                <a href="#" aria-label="Narrow selection to products matching tag vendor monki">monki</a>
                                            </li>
                                            <li>
                                                <a href="#" aria-label="Narrow selection to products matching tag vendor nike">nike</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-12 tc mt__20 mb__20 dn">
                                    <a class="button clear_filter_js" href="#">Clear All Filter</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end filter panel area-->

        <div class="row">

            <!--left sidebar-->
            <div class="js_sidebar sidebar sidebar_nt col-lg-3 order-12  col-12 space_30 hidden_false lazyload">
                <div id="maanar-section-sidebar_shop" class="maanar-section nt_ajaxFilter section_sidebar_shop type_instagram">
                    <div class="h3 mg__0 tu bgb cw visible-sm fs__16 pr">Sidebar<i class="close_pp pegk bx bx-x fs__40 ml__5"></i>
                    </div>
                    <div class="cat_shop_wrap">
                        <div class="cat_fixcl-scroll">
                            <div class="cat_fixcl-scroll-content css_ntbar">
                                <div class="row no-gutters wrap_filter">
                                    <div class="col-12 col-md-12 widget widget_product_categories cat_count_false">
                                        <h5 class="widget-title">Product Categories</h5>
                                        <ul class="product-categories">
                                            <li class="cat-item">
                                                <a href="javascript:void(0)">Acessories <span class="cat_count">(24)</span></a>
                                            </li>
                                            <li class="cat-item">
                                                <a href="javascript:void(0)">Bottom <span class="cat_count">(13)</span></a>
                                            </li>
                                            <li class="cat-item">
                                                <a href="javascript:void(0)">Denim <span class="cat_count">(6)</span></a>
                                            </li>
                                            <li class="cat-item">
                                                <a href="javascript:void(0)">Dress <span class="cat_count">(7)</span></a>
                                            </li>
                                            <li class="cat-item">
                                                <a href="javascript:void(0)">Jackets <span class="cat_count">(6)</span></a>
                                            </li>
                                            <li class="cat-item">
                                                <a href="javascript:void(0)">Jewellry <span class="cat_count">(9)</span></a>
                                            </li>
                                            <li class="cat-item">
                                                <a href="javascript:void(0)">Men <span class="cat_count">(18)</span></a>
                                            </li>
                                            <li class="cat-item">
                                                <a href="javascript:void(0)">Shoes <span class="cat_count">(7)</span></a>
                                            </li>
                                            <li class="cat-item">
                                                <a href="javascript:void(0)">Tops <span class="cat_count">(8)</span></a>
                                            </li>
                                            <li class="cat-item current-cat">
                                                <a href="javascript:void(0)">Women <span class="cat_count">(39)</span></a>
                                            </li>
                                            <li class="cat-item">
                                                <a href="javascript:void(0)">T-Shirt <span class="cat_count">(9)</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end left sidebar-->

            <!--main content-->
            <div class="col-lg-9 order-1 col-12">
                <div class="maanar-section tp_se_cdt">

                    <!--products list-->
                    <div class="on_list_view_false products nt_products_holder row fl_center row_pr_1 cdt_des_1 round_cd_false nt_cover ratio_nt position_8 space_30 nt_default" id="productList">
                        @foreach ($products as $product)
                            <div class="col-lg-3 col-md-3 col-6 pr_animated done mt__30 pr_grid_item product nt_pr desgin__1">
                                <div class="product-inner pr">
                                    <div class="product-image position-relative oh lazyload">
                                        <a class="d-block" href="{{route('product.details',['id'=>$product->id])}}">
                                            <img src="{{Storage::url($product->img_urls['urls'][0])}}" class="main-img nt_bg_lz" alt="..">
                                        </a>
                                        <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                                            <img src="{{Storage::url($product->img_urls['urls'][1]??null)}}" class="back-img pa nt_bg_lz lazyload" alt="..">
                                        </div>
                                        <div class="hover_button op__0 tc pa flex column ts__03">
                                            <a href="" class="pr pr_atc cd br__40 bgw tc dib js__qs cb chp ttip_nt tooltip_top_left add-to-cart-btn" data-product-id="{{$product->id}}">
                                                <span class="tt_txt">Add to Cart</span>
                                                <i class='bx bxs-shopping-bag'></i>
                                                <span>Add to Cart</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-info mt__15">
                                        <h3 class="product-title position-relative mg__0">
                                            <a class="cd chp max-lines" href="{{route('product.details',['id'=>$product->id])}}">{{__(ucfirst(strtolower($product->name)))}}</a>
                                        </h3>
                                        <span class="price dib mb__5"><ins>Ksh {{number_format($product->entity[0]->price)}}</ins></span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!--end products list-->

                </div>
            </div>
            <!--end main content-->

        </div>
    </div>
</div>
@endsection