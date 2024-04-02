@extends('layouts.main')
@section('content')
<div id="nt_content">
    <div class="sp-single sp-single-1 des_pr_layout_1 mb__60">

        <!-- breadcrumb -->
        <div class="bgbl pt__20 pb__20 lh__1">
            <div class="container">
                <div class="row al_center">
                    <div class="col">
                        <nav class="sp-breadcrumb">
                            <a href="{{route('home')}}">Home</a><i class="facl facl-angle-right"></i><a href="">New Arrival</a><i class="facl facl-angle-right"></i>Blush Beanie
                        </nav>
                    </div>
                    <div class="col-auto flex al_center">
                        <a href="" class="pl__5 pr__5 fs__18 cd chp ttip_nt tooltip_bottom_left"><i class="las la-angle-left"></i><span class="tt_txt">Ridley High Waist</span></a>
                        <a href="{{route('product.details',['id'=>$product->id])}}" class="pl__5 pr__5 fs__20 cd chp ttip_nt tooltip_bottom_left"><i class="fwb iccl iccl-grid fs__15"></i><span class="tt_txt">Back to New Arrival</span></a>
                        <a href="{{route('product.details',['id'=>$product->id])}}" class="pl__5 pr__5 fs__18 cd chp ttip_nt tooltip_bottom_left"><i class="las la-angle-right"></i><span class="tt_txt">Cluse La Boheme Rose Gold</span></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- end breadcrumb -->

        <div class="container container_cat cat_default">
            <div class="row product mt__40">
                <div class="col-md-12 col-12 thumb_left">
                    <div class="row mb__50 pr_sticky_content">

                        <!-- product thumbnails -->
                        <div class="col-md-6 col-12 pr product-images img_action_zoom pr_sticky_img kalles_product_thumnb_slide">
                            <div class="row theiaStickySidebar">
                                <div class="col-12 col-lg col_thumb">
                                    <div class="p-thumb p-thumb_ppr images sp-pr-gallery equal_nt nt_contain ratio_imgtrue position_8 nt_slider pr_carousel" data-flickity='{"initialIndex": ".media_id_001","fade":true,"draggable":">1","cellAlign": "center","wrapAround": true,"autoPlay": false,"prevNextButtons":true,"adaptiveHeight": true,"imagesLoaded": false, "lazyLoad": 0,"dragThreshold" : 6,"pageDots": false,"rightToLeft": false }'>
                                        @foreach ($product->images as $image)
                                        <div class="img_ptw p_ptw p-item sp-pr-gallery__img w__100 nt_bg_lz lazyload padding-top__127_66 media_id_001" data-mdid="001" data-height="1440" data-width="1128" data-ratio="0.7833333333333333" data-mdtype="image" data-src="{{Storage::url($image->url)}}" data-bgset="{{Storage::url($image->url)}}" data-cap="Blush Beanie - color pink , size S"></div>
                                        @endforeach
                                    </div>
                                    <div class="p_group_btns pa flex">
                                        <button class="br__40 tc flex al_center fl_center show_btn_pr_gallery ttip_nt tooltip_top_left">
                                            <i class="las la-expand-arrows-alt"></i><span class="tt_txt">Click to enlarge</span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-auto col_nav nav_medium t4_show">
                                    <div class="p-nav ratio_imgtrue row equal_nt nt_cover position_8 nt_slider pr_carousel" data-flickityjs='{"initialIndex": ".media_id_001","cellSelector": ".n-item:not(.is_varhide)","cellAlign": "left","asNavFor": ".p-thumb","wrapAround": true,"draggable": ">1","autoPlay": 0,"prevNextButtons": 0,"percentPosition": 1,"imagesLoaded": 0,"pageDots": 0,"groupCells": 3,"rightToLeft": false,"contain":  1,"freeScroll": 0}'></div>
                                    <button type="button" aria-label="Previous" class="btn_pnav_prev pe_none">
                                        <i class="las la-angle-up"></i>
                                    </button>
                                    <button type="button" aria-label="Next" class="btn_pnav_next pe_none">
                                        <i class="las la-angle-down"></i>
                                    </button>
                                </div>
                                <div class="dt_img_zoom pa t__0 r__0 dib"></div>
                            </div>
                        </div>
                        <!-- end product thumbnails -->

                        <!-- product detail -->
                        <div class="col-md-6 col-12 product-infors pr_sticky_su">
                            <div class="theiaStickySidebar">
                                <div class="kalles-section-pr_summary kalles-section summary entry-summary mt__30">
                                    <h1 class="product_title entry-title fs__16">Blush Beanie</h1>
                                    <div class="flex wrap fl_between al_center price-review">
                                        <p class="price_range" id="price_ppr">$15.00</p>
                                        <a href="#tab_reviews_product" class="rating_sp_kl dib">
                                            <div class="kalles-rating-result">
                                                <span class="kalles-rating-result__pipe">
                                                    <span class="kalles-rating-result__start kalles-rating-result__start--big"></span>
                                                    <span class="kalles-rating-result__start kalles-rating-result__start--big"></span>
                                                    <span class="kalles-rating-result__start kalles-rating-result__start--big"></span>
                                                    <span class="kalles-rating-result__start kalles-rating-result__start--big active"></span>
                                                    <span class="kalles-rating-result__start kalles-rating-result__start--big"></span>
                                                </span>
                                                <span class="kalles-rating-result__number">(12 reviews)</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="pr_short_des">
                                        <p class="mg__0">Go kalles this summer with this vintage navy and white striped v-neck t-shirt from the Nike. Perfect for pairing with denim and white kicks for a stylish kalles vibe.</p>
                                    </div>
                                    <div class="btn-atc atc-slide btn_des_1 btn_txt_3">
                                        <div id="callBackVariant_ppr">
                                            <div class="nt_cart_form variations_form variations_form_ppr">
                                                <div class="variations_button in_flex column w__100 buy_qv_false">
                                                    <div class="flex wrap">
                                                        <div class="quantity pr mr__10 order-1 qty__true d-inline-block" id="sp_qty_ppr">
                                                            <input type="number" class="input-text qty text tc qty_pr_js qty_cart_js" name="quantity" value="1">
                                                            <div class="qty tc fs__14">
                                                                <button type="button" class="plus db cb pa pd__0 pr__15 tr r__0">
                                                                    <i class="facl facl-plus"></i></button>
                                                                <button type="button" class="minus db cb pa pd__0 pl__15 tl l__0">
                                                                    <i class="facl facl-minus"></i></button>
                                                            </div>
                                                        </div>
                                                        <button type="submit" data-time="6000" data-ani="shake" class="single_add_to_cart_button button truncate w__100 mt__20 order-4 d-inline-block animated">
                                                            <span class="txt_add ">Add to cart</span></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end product detail -->

                    </div>
                </div>
            </div>
        </div>

        <!-- description and review -->
        <div id="wrap_des_pr">
            <div class="container container_des">
                <div class="kalles-section-pr_description kalles-section kalles-tabs sp-tabs nt_section">

                    <!-- tab buttons -->
                    <ul class="ul_none ul_tabs is-flex fl_center fs__16 des_mb_2 des_style_1">
                        <li class="tab_title_block active">
                            <a class="db cg truncate pr" href="#tab_product_description">Description</a>
                        </li>
                        <li class="tab_title_block">
                            <a class="db cg truncate pr" href="#tab_additional_information">Additional Information</a>
                        </li>
                        <li class="tab_title_block">
                            <a class="db cg truncate pr" href="#tab_warranty_and_shipping">Warranty &amp; Shipping</a>
                        </li>
                        <li class="tab_title_block">
                            <a class="db cg truncate pr" href="#tab_wash_and_care">Wash &amp; Care</a></li>
                        <li class="tab_title_block">
                            <a class="db cg truncate pr" href="#tab_reviews_product">Reviews</a>
                        </li>
                    </ul>
                    <!-- end tab buttons -->

                    <!-- tab contents -->
                    <div class="panel entry-content sp-tab des_mb_2 des_style_1 active" id="tab_product_description">
                        <div class="js_ck_view"></div>
                        <div class="heading bgbl dn">
                            <a class="tab-heading flex al_center fl_between pr cd chp fwm" href="#tab_product_description"><span class="txt_h_tab">Description</span><span class="nav_link_icon ml__5"></span></a>
                        </div>
                        <div class="sp-tab-content">
                            <p class="mb__40 cb">
                                Design inspiration lorem ipsum dolor sit amet, consectetuer adipiscing elit. Morbi commodo, ipsum sed pharetra gravida, orci magna rhoncus neque, id pulvinar odio lorem non turpis. Nullam sit amet enim. Suspendisse
                                id velit vitae ligula volutpat condimentum. Aliquam erat volutpat. Sed quis velit. Nulla facilisi. Nulla libero. Vivamus pharetra posuere sapien. Nam consectetuer. Sed aliquam, nunc eget euismod ullamcorper, lectus
                                nunc ullamcorper orci.
                            </p>
                            <div class="row equal_nt nt_contain">
                                <div class="col-12 col-md-4 mb-md-0 mb-4">
                                    <div class="sp-pr-gallery__img w__100 nt_bg_lz lazyload padding-top__127_586" data-bgset="{{asset('assets/images/single-product/des-01.jpg')}}"></div>
                                </div>
                                <div class="col-12 col-md-4 mb-md-0 mb-4">
                                    <div class="sp-pr-gallery__img w__100 nt_bg_lz lazyload padding-top__127_586" data-bgset="{{asset('assets/images/single-product/des-02.jpg')}}"></div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="sp-pr-gallery__img w__100 nt_bg_lz lazyload padding-top__127_586" data-bgset="{{asset('assets/images/single-product/des-03.jpg')}}"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel entry-content sp-tab des_mb_2 des_style_1 dn" id="tab_additional_information">
                        <div class="js_ck_view"></div>
                        <div class="heading bgbl dn">
                            <a class="tab-heading flex al_center fl_between pr cd chp fwm" href="#tab_additional_information"><span class="txt_h_tab">Additional Information</span><span class="nav_link_icon ml__5"></span></a>
                        </div>
                        <div class="sp-tab-content">
                            <table class="pr_attrs">
                                <tbody>
                                <tr class="attr_pa_color">
                                    <th class="attr__label cb">Color</th>
                                    <td class="attr__value cb">
                                        <p>Grey, Pink, Black</p>
                                    </td>
                                </tr>
                                <tr class="attr_pa_size">
                                    <th class="attr__label cb">Size</th>
                                    <td class="attr__value cb">
                                        <p>S, M, L</p>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="panel entry-content sp-tab des_mb_2 des_style_1 dn" id="tab_warranty_and_shipping">
                        <div class="js_ck_view"></div>
                        <div class="heading bgbl dn">
                            <a class="tab-heading flex al_center fl_between pr cd chp fwm" href="#tab_warranty_and_shipping"><span class="txt_h_tab">Warranty &amp; Shipping</span><span class="nav_link_icon ml__5"></span></a>
                        </div>
                        <div class="sp-tab-content">
                            <div class="warranty-content cb">
                                <h5 class="mt-0 mb__5"><b>Warranty</b></h5>
                                <p class="mb__25">
                                    If issues experienced with the frame include a manufacturer's defect, or an issue resulting from an inherent flaw in the product, RAEN provides a 365 day warranty from the time of purchase. If you feel your
                                    product meets these requirements, please email
                                    <a href="mailto:warranty@domain.com">warranty@domain.com</a> explaining the nature of your warranty claim and all necessary details.
                                    <br>
                                    Scratched lenses and physical damage are not covered by warranty. Unfortunately we do not manufacture or sell replacement lenses.
                                </p>
                                <h5 class="mt-0 mb__5"><b>Free FedEx 2-Day Shipping</b></h5>
                                <p class="mb__25">Free FedEx 2-Day Shipping is available exclusively to the U.S. on orders over $150. FedEx 2-Day packages are delivered Monday through Friday.</p>
                                <h5 class="mt-0 mb__5"><b>Free FedEx Ground Shipping</b></h5>
                                <p class="mb__25">Free FedEx Ground Shipping is available exclusively to U.S. orders over $100.</p>
                                <h5 class="mt-0 mb__5"><b>Free Returns</b></h5>
                                <p class="mb__25">Free returns are available on all U.S. order within 14 days of shipment.</p>
                                <p class="fwm"><i>*Free Shipping is not available with some promotions and other restrictions may apply.</i></p>
                            </div>
                        </div>
                    </div>
                    <div class="panel entry-content sp-tab des_mb_2 des_style_1 dn" id="tab_wash_and_care">
                        <div class="js_ck_view"></div>
                        <div class="heading bgbl dn">
                            <a class="tab-heading flex al_center fl_between pr cd chp fwm" href="#tab_wash_and_care"><span class="txt_h_tab">Wash and Care</span><span class="nav_link_icon ml__5"></span></a>
                        </div>
                        <div class="sp-tab-content">
                            <ul class="flex ul_none fl_center">
                                <li class="l_custom_svg">
                                    <svg viewBox="0 0 40 40">
                                        <path fill="currentColor" d="M8.7 30.7h22.7c.3 0 .6-.2.7-.6l4-25.3c-.1-.4-.3-.7-.7-.8s-.7.2-.8.6L34 8.9l-3-1.1c-2.4-.9-5.1-.5-7.2 1-2.3 1.6-5.3 1.6-7.6 0-2.1-1.5-4.8-1.9-7.2-1L6 8.9l-.7-4.3c0-.4-.4-.7-.7-.6-.4.1-.6.4-.6.8l4 25.3c.1.3.3.6.7.6zm.8-21.6c2-.7 4.2-.4 6 .8 1.4 1 3 1.5 4.6 1.5s3.2-.5 4.6-1.5c1.7-1.2 4-1.6 6-.8l3.3 1.2-3 19.1H9.2l-3-19.1 3.3-1.2zM32 32H8c-.4 0-.7.3-.7.7s.3.7.7.7h24c.4 0 .7-.3.7-.7s-.3-.7-.7-.7zm0 2.7H8c-.4 0-.7.3-.7.7s.3.6.7.6h24c.4 0 .7-.3.7-.7s-.3-.6-.7-.6zm-17.9-8.9c-1 0-1.8-.3-2.4-.6l.1-2.1c.6.4 1.4.6 2 .6.8 0 1.2-.4 1.2-1.3s-.4-1.3-1.3-1.3h-1.3l.2-1.9h1.1c.6 0 1-.3 1-1.3 0-.8-.4-1.2-1.1-1.2s-1.2.2-1.9.4l-.2-1.9c.7-.4 1.5-.6 2.3-.6 2 0 3 1.3 3 2.9 0 1.2-.4 1.9-1.1 2.3 1 .4 1.3 1.4 1.3 2.5.3 1.8-.6 3.5-2.9 3.5zm4-5.5c0-3.9 1.2-5.5 3.2-5.5s3.2 1.6 3.2 5.5-1.2 5.5-3.2 5.5-3.2-1.6-3.2-5.5zm4.1 0c0-2-.1-3.5-.9-3.5s-1 1.5-1 3.5.1 3.5 1 3.5c.8 0 .9-1.5.9-3.5zm4.5-1.4c-.9 0-1.5-.8-1.5-2.1s.6-2.1 1.5-2.1 1.5.8 1.5 2.1-.5 2.1-1.5 2.1zm0-.8c.4 0 .7-.5.7-1.2s-.2-1.2-.7-1.2-.7.5-.7 1.2.3 1.2.7 1.2z"></path>
                                    </svg>
                                </li>
                                <li class="l_custom_svg">
                                    <svg viewBox="0 0 40 40">
                                        <path fill="currentColor" d="M36.7 31.1l-2.8-1.3-4.7-9.1 7.5-3.5c.4-.2.6-.6.4-1s-.6-.5-1-.4l-7.5 3.5-7.8-15c-.3-.5-1.1-.5-1.4 0l-7.8 15L4 15.9c-.4-.2-.8 0-1 .4s0 .8.4 1l7.5 3.5-4.7 9.1-2.8 1.3c-.4.2-.6.6-.4 1 .1.3.4.4.7.4.1 0 .2 0 .3-.1l1-.4-1.5 2.8c-.1.2-.1.5 0 .8.1.2.4.3.7.3h31.7c.3 0 .5-.1.7-.4.1-.2.1-.5 0-.8L35.1 32l1 .4c.1 0 .2.1.3.1.3 0 .6-.2.7-.4.1-.3 0-.8-.4-1zm-5.1-2.3l-9.8-4.6 6-2.8 3.8 7.4zM20 6.4L27.1 20 20 23.3 12.9 20 20 6.4zm-7.8 15l6 2.8-9.8 4.6 3.8-7.4zm22.4 13.1H5.4L7.2 31 20 25l12.8 6 1.8 3.5z"></path>
                                    </svg>
                                </li>
                                <li class="l_custom_svg">
                                    <svg viewBox="0 0 40 40">
                                        <path fill="currentColor" d="M5.9 5.9v28.2h28.2V5.9H5.9zM19.1 20l-8.3 8.3c-2-2.2-3.2-5.1-3.2-8.3s1.2-6.1 3.2-8.3l8.3 8.3zm-7.4-9.3c2.2-2 5.1-3.2 8.3-3.2s6.1 1.2 8.3 3.2L20 19.1l-8.3-8.4zM20 20.9l8.3 8.3c-2.2 2-5.1 3.2-8.3 3.2s-6.1-1.2-8.3-3.2l8.3-8.3zm.9-.9l8.3-8.3c2 2.2 3.2 5.1 3.2 8.3s-1.2 6.1-3.2 8.3L20.9 20zm8.4-10.2c-1.2-1.1-2.6-2-4.1-2.6h6.6l-2.5 2.6zm-18.6 0L8.2 7.2h6.6c-1.5.6-2.9 1.5-4.1 2.6zm-.9.9c-1.1 1.2-2 2.6-2.6 4.1V8.2l2.6 2.5zM7.2 25.2c.6 1.5 1.5 2.9 2.6 4.1l-2.6 2.6v-6.7zm3.5 5c1.2 1.1 2.6 2 4.1 2.6H8.2l2.5-2.6zm18.6 0l2.6 2.6h-6.6c1.4-.6 2.8-1.5 4-2.6zm.9-.9c1.1-1.2 2-2.6 2.6-4.1v6.6l-2.6-2.5zm2.6-14.5c-.6-1.5-1.5-2.9-2.6-4.1l2.6-2.6v6.7z"></path>
                                    </svg>
                                </li>
                                <li class="l_custom_svg">
                                    <svg viewBox="0 0 40 40">
                                        <path fill="currentColor" d="M35.1 33.6L33.2 6.2c0-.4-.3-.7-.7-.7H13.9c-.4 0-.7.3-.7.7s.3.7.7.7h18l.7 10.5H20.8c-8.8.2-15.9 7.5-15.9 16.4 0 .4.3.7.7.7h28.9c.2 0 .4-.1.5-.2s.2-.3.2-.5v-.2h-.1zm-28.8-.5C6.7 25.3 13 19 20.8 18.9h11.9l1 14.2H6.3zm11.2-6.8c0 1.2-1 2.1-2.1 2.1s-2.1-1-2.1-2.1 1-2.1 2.1-2.1 2.1 1 2.1 2.1zm6.3 0c0 1.2-1 2.1-2.1 2.1-1.2 0-2.1-1-2.1-2.1s1-2.1 2.1-2.1 2.1 1 2.1 2.1z"></path>
                                    </svg>
                                </li>
                                <li class="l_custom_svg">
                                    <svg viewBox="0 0 40 40">
                                        <path fill="currentColor" d="M20 33.8c7.6 0 13.8-6.2 13.8-13.8S27.6 6.2 20 6.2 6.2 12.4 6.2 20 12.4 33.8 20 33.8zm0-26.3c6.9 0 12.5 5.6 12.5 12.5S26.9 32.5 20 32.5 7.5 26.9 7.5 20 13.1 7.5 20 7.5zm-.4 15h.5c1.8 0 3-1.1 3-3.7 0-2.2-1.1-3.6-3.1-3.6h-2.6v10.6h2.2v-3.3zm0-5.2h.4c.6 0 .9.5.9 1.7 0 1.1-.3 1.7-.9 1.7h-.4v-3.4z"></path>
                                    </svg>
                                </li>
                                <li class="l_custom_svg">
                                    <svg viewBox="0 0 40 40">
                                        <path fill="currentColor" d="M30.2 29.3c2.2-2.5 3.6-5.7 3.6-9.3s-1.4-6.8-3.6-9.3l3.6-3.6c.3-.3.3-.7 0-.9-.3-.3-.7-.3-.9 0l-3.6 3.6c-2.5-2.2-5.7-3.6-9.3-3.6s-6.8 1.4-9.3 3.6L7.1 6.2c-.3-.3-.7-.3-.9 0-.3.3-.3.7 0 .9l3.6 3.6c-2.2 2.5-3.6 5.7-3.6 9.3s1.4 6.8 3.6 9.3l-3.6 3.6c-.3.3-.3.7 0 .9.1.1.3.2.5.2s.3-.1.5-.2l3.6-3.6c2.5 2.2 5.7 3.6 9.3 3.6s6.8-1.4 9.3-3.6l3.6 3.6c.1.1.3.2.5.2s.3-.1.5-.2c.3-.3.3-.7 0-.9l-3.8-3.6z"></path>
                                    </svg>
                                </li>
                                <li class="l_custom_svg">
                                    <svg viewBox="0 0 40 40">
                                        <path fill="currentColor" d="M34.1 34.1H5.9V5.9h28.2v28.2zM7.2 32.8h25.6V7.2H7.2v25.6zm13.5-18.3a.68.68 0 0 0-.7-.7.68.68 0 0 0-.7.7v10.9a.68.68 0 0 0 .7.7.68.68 0 0 0 .7-.7V14.5z"></path>
                                    </svg>
                                </li>
                            </ul>
                            <p class="tc cb">LT01: 70% wool, 15% polyester, 10% polyamide, 5% acrylic 900 Grms/mt</p>
                        </div>
                    </div>
                    <div class="panel entry-content sp-tab des_mb_2 des_style_1 dn" id="tab_reviews_product">
                        <div class="js_ck_view"></div>
                        <div class="heading bgbl dn">
                            <a class="tab-heading flex al_center fl_between pr cd chp fwm" href="#tab_reviews_product"><span class="txt_h_tab">Reviews</span><span class="nav_link_icon ml__5"></span></a>
                        </div>
                        <div class="sp-tab-content">
                            <div class="lt-block-reviews">
                                <div class="r--desktop r--tablet w__100">
                                    <div id="r--masonry-theme" class="r--show-part-preview">
                                        <div class="r--masonry-theme">
                                            <div class="header-v1 masonry-header">
                                                <div class="r--header">
                                                    <div class="r--overview">
                                                        <div class="r--overview-left">
                                                            <div class="r--star-block r--star-850">
                                                                <span class="r--title-average">Average</span>
                                                                <span class="r--stars_average">4.8</span>
                                                                <div class="r--stars cpl">
                                                                    <div class="kalles-rating-result">
                                                                        <span class="kalles-rating-result__pipe">
                                                                            <span class="kalles-rating-result__start kalles-rating-result__start--big"></span>
                                                                            <span class="kalles-rating-result__start kalles-rating-result__start--big"></span>
                                                                            <span class="kalles-rating-result__start kalles-rating-result__start--big"></span>
                                                                            <span class="kalles-rating-result__start kalles-rating-result__start--big active"></span>
                                                                            <span class="kalles-rating-result__start kalles-rating-result__start--big"></span>
                                                                        </span>
                                                                    </div>
                                                                    <span class="r--total-view">13 <span>reviews</span></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="r--overview-right">
                                                            <div class="show-modal-mobile">
                                                                <a class="r--button r--flex-center bg-yellow text-white ajax_pp_js" href="#" data-id="#popup-leave-review">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18.37" height="17.8" viewBox="0 0 21.682 21.602">
                                                                        <g id="Symbol_32_2" data-name="Symbol 32 – 2" transform="translate(-961.98 -374.155)">
                                                                            <path d="M0,0H4V11.2L1.937,14h0L0,11.2Z" transform="translate(979.891 381.756) rotate(40)" fill="none" stroke="#ffffff" stroke-linejoin="round" stroke-width="1"></path>
                                                                            <path d="M0,0H4" transform="translate(972.692 390.335) rotate(40)" fill="none" stroke="#ffffff" stroke-width="1"></path>
                                                                            <g transform="translate(981.126 380.964) rotate(40)" fill="none" stroke="#ffffff" stroke-width="1">
                                                                                <rect width="3.128" height="1.4" stroke="none"></rect>
                                                                                <rect x="0.5" y="0.5" width="2.128" height="0.4" fill="none"></rect>
                                                                            </g>
                                                                            <path d="M2858.324,3384.6h7.412" transform="translate(-1891.1 -3003.987)" fill="none" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"></path>
                                                                            <path d="M2858.324,3384.6h7.412" transform="translate(-1891.1 -2999.611)" fill="none" stroke="#ffffff" stroke-linecap="round" stroke-width="1"></path>
                                                                            <path d="M8.952,0H15a2,2,0,0,1,2,2V15a2,2,0,0,1-2,2H2a2,2,0,0,1-2-2V12.162" transform="translate(979.48 391.655) rotate(180)" fill="none" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"></path>
                                                                        </g>
                                                                    </svg>
                                                                    <span class="r--text-write">Write a review</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="r--filter-review">
                                                        <div class="r--filter-wrapper">
                                                            <div class="r--sortBy">
                                                                <div class="r--unset-select r--sort-button r--filter-link r--flex-center el-popover__reference">
                                                                    <span class="r--select">Sort by: Latest </span>
                                                                    <img src="{{asset('assets/images/single-product/icon-down.svg')}}" width="8" height="4" class="r--select r--icon-down" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="r--filter">
                                                                <div class="r--unset-select r--sort-button r--filter-link r--flex-center el-popover__reference">
                                                                    <span class="r--select">Filter</span>
                                                                    <img src="{{asset('assets/images/single-product/icon-down.svg')}}" width="8" height="4" class="r--select r--icon-down" alt="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="r--showing r--f-left">
                                                            <span class="r--text-showing">Showing 1 - 6 of 13 reviews</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="r--grid">
                                                <div class="r--grid-item">
                                                    <div class="r--author r--text-limit">
                                                        <div class="r--avatar-default text-center text-white">P</div>
                                                        <span class="r--author-review">Peter</span>
                                                    </div>
                                                    <div class="r--item-body">
                                                        <div class="r--item-body-top">
                                                            <div class="r--stars-author r--star-head r--body-item r--flex-center">
                                                                <div class="kalles-rating-result">
                                                                    <span class="kalles-rating-result__pipe">
                                                                        <span class="kalles-rating-result__start kalles-rating-result__start--big"></span>
                                                                        <span class="kalles-rating-result__start kalles-rating-result__start--big"></span>
                                                                        <span class="kalles-rating-result__start kalles-rating-result__start--big"></span>
                                                                        <span class="kalles-rating-result__start kalles-rating-result__start--big active"></span>
                                                                        <span class="kalles-rating-result__start kalles-rating-result__start--big"></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <p class="r--title-review r--body-item">Contrary to popular belief</p>
                                                        <p class="r--content-review r--body-item">It is a long established fact that a reader will be distracted by the readable content of a page </p>
                                                        <time datetime="2020-01-28T17:29:54Z" class="r--date-review r--top r--text-limit">15 days ago</time>
                                                    </div>
                                                </div>
                                                <div class="r--grid-item">
                                                    <div class="r--author r--text-limit">
                                                        <div class="r--avatar-default text-center text-white avatar--bg-red">K</div>
                                                        <span class="r--author-review">Kodeman</span>
                                                    </div>
                                                    <div class="r--item-body">
                                                        <div class="r--item-body-top">
                                                            <div class="r--stars-author r--star-head r--body-item r--flex-center">
                                                                <div class="kalles-rating-result">
                                                                    <span class="kalles-rating-result__pipe">
                                                                        <span class="kalles-rating-result__start kalles-rating-result__start--big"></span>
                                                                        <span class="kalles-rating-result__start kalles-rating-result__start--big"></span>
                                                                        <span class="kalles-rating-result__start kalles-rating-result__start--big"></span>
                                                                        <span class="kalles-rating-result__start kalles-rating-result__start--big"></span>
                                                                        <span class="kalles-rating-result__start kalles-rating-result__start--big active"></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <p class="r--title-review r--body-item">Contrary to popular belief</p>
                                                        <p class="r--content-review r--body-item">It is a long established fact that a reader will be distracted by the readable content of a page </p>
                                                        <time datetime="2020-01-28T17:29:54Z" class="r--date-review r--top r--text-limit">15 days ago</time>
                                                    </div>
                                                </div>
                                                <div class="r--grid-item">
                                                    <div class="r--author r--text-limit">
                                                        <div class="r--avatar-default text-center text-white avatar--bg-purple">G</div>
                                                        <span class="r--author-review">Glager</span>
                                                    </div>
                                                    <div class="r--item-body">
                                                        <div class="r--item-body-top">
                                                            <div class="r--stars-author r--star-head r--body-item r--flex-center">
                                                                <div class="kalles-rating-result">
                                                                    <span class="kalles-rating-result__pipe">
                                                                        <span class="kalles-rating-result__start kalles-rating-result__start--big"></span>
                                                                        <span class="kalles-rating-result__start kalles-rating-result__start--big"></span>
                                                                        <span class="kalles-rating-result__start kalles-rating-result__start--big"></span>
                                                                        <span class="kalles-rating-result__start kalles-rating-result__start--big"></span>
                                                                        <span class="kalles-rating-result__start kalles-rating-result__start--big active"></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <p class="r--title-review r--body-item">Contrary to popular belief</p>
                                                        <p class="r--content-review r--body-item">It is a long established fact that a reader will be distracted by the readable content of a page </p>
                                                        <time datetime="2020-01-28T17:29:54Z" class="r--date-review r--top r--text-limit">15 days ago</time>
                                                    </div>
                                                </div>
                                                <div class="r--grid-item">
                                                    <div class="r--author r--text-limit">
                                                        <div class="r--avatar-default text-center text-white  avatar--bg-blue">C</div>
                                                        <span class="r--author-review">Chaos</span>
                                                    </div>
                                                    <div class="r--item-body">
                                                        <div class="r--item-body-top">
                                                            <div class="r--stars-author r--star-head r--body-item r--flex-center">
                                                                <div class="kalles-rating-result">
                                                                    <span class="kalles-rating-result__pipe">
                                                                        <span class="kalles-rating-result__start kalles-rating-result__start--big"></span>
                                                                        <span class="kalles-rating-result__start kalles-rating-result__start--big"></span>
                                                                        <span class="kalles-rating-result__start kalles-rating-result__start--big"></span>
                                                                        <span class="kalles-rating-result__start kalles-rating-result__start--big"></span>
                                                                        <span class="kalles-rating-result__start kalles-rating-result__start--big active"></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <p class="r--title-review r--body-item">Contrary to popular belief</p>
                                                        <p class="r--content-review r--body-item">It is a long established fact that a reader will be distracted by the readable content of a page </p>
                                                        <time datetime="2020-01-28T17:29:54Z" class="r--date-review r--top r--text-limit">15 days ago</time>
                                                    </div>
                                                </div>
                                                <div class="r--grid-item">
                                                    <div class="r--author r--text-limit">
                                                        <div class="r--avatar-default text-center text-white">S</div>
                                                        <span class="r--author-review">Sevenor</span>
                                                    </div>
                                                    <div class="r--item-body">
                                                        <div class="r--item-body-top">
                                                            <div class="r--stars-author r--star-head r--body-item r--flex-center">
                                                                <div class="kalles-rating-result">
                                                                    <span class="kalles-rating-result__pipe">
                                                                        <span class="kalles-rating-result__start kalles-rating-result__start--big"></span>
                                                                        <span class="kalles-rating-result__start kalles-rating-result__start--big"></span>
                                                                        <span class="kalles-rating-result__start kalles-rating-result__start--big"></span>
                                                                        <span class="kalles-rating-result__start kalles-rating-result__start--big"></span>
                                                                        <span class="kalles-rating-result__start kalles-rating-result__start--big active"></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <p class="r--title-review r--body-item">Contrary to popular belief</p>
                                                        <p class="r--content-review r--body-item">It is a long established fact that a reader will be distracted by the readable content of a page </p>
                                                        <time datetime="2020-01-28T17:29:54Z" class="r--date-review r--top r--text-limit">15 days ago</time>
                                                    </div>
                                                </div>
                                                <div class="r--grid-item">
                                                    <div class="r--author r--text-limit">
                                                        <div class="r--avatar-default text-center text-white avatar--bg-purple">D</div>
                                                        <span class="r--author-review">Dranking</span>
                                                    </div>
                                                    <div class="r--item-body">
                                                        <div class="r--item-body-top">
                                                            <div class="r--stars-author r--star-head r--body-item r--flex-center">
                                                                <div class="kalles-rating-result">
                                                                    <span class="kalles-rating-result__pipe">
                                                                        <span class="kalles-rating-result__start kalles-rating-result__start--big"></span>
                                                                        <span class="kalles-rating-result__start kalles-rating-result__start--big"></span>
                                                                        <span class="kalles-rating-result__start kalles-rating-result__start--big"></span>
                                                                        <span class="kalles-rating-result__start kalles-rating-result__start--big"></span>
                                                                        <span class="kalles-rating-result__start kalles-rating-result__start--big active"></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <p class="r--title-review r--body-item">Contrary to popular belief</p>
                                                        <p class="r--content-review r--body-item">It is a long established fact that a reader will be distracted by the readable content of a page </p>
                                                        <time datetime="2020-01-28T17:29:54Z" class="r--date-review r--top r--text-limit">15 days ago</time>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="r--load-more">
                                                <a href="#" class="r--text-load-more">Load more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end tab contents -->
                </div>
            </div>
        </div>
        <!-- end description and review -->

        <div class="clearfix"></div>

        <!--product recommendations section-->
        <div class="kalles-section tp_se_cdt">
            <div class="related product-extra mt__60 lazyload">
                <div class="container">
                    <div class="wrap_title des_title_1">
                        <h3 class="section-title tc pr flex fl_center al_center fs__24 title_1">
                            <span class="mr__10 ml__10">You may also like</span></h3>
                        <span class="dn tt_divider"><span></span><i class="dn clprfalse title_1 la-gem"></i><span></span></span><span class="section-subtitle db tc sub-title"></span>
                    </div>
                    <div class="products nt_products_holder nt_slider row row_pr_1 cdt_des_1 round_cd_false nt_cover ratio_nt position_8 space_30 prev_next_0 btn_owl_1 dot_owl_1 dot_color_1 btn_vi_1 is-draggable" data-flickity='{"imagesLoaded": 0,"adaptiveHeight": 0, "contain": 1, "groupCells": "100%", "dragThreshold" : 5, "cellAlign": "left","wrapAround": true,"prevNextButtons": false,"percentPosition": 1,"pageDots": false, "autoPlay" : 0, "pauseAutoPlayOnHover" : true, "rightToLeft": false }'>
                        <div class="col-lg-3 pr_animated col-md-3 col-6 mt__30 pr_grid_item product nt_pr desgin__1 done">
                            <div class="product-inner pr">
                                <div class="product-image pr oh lazyload">
                                    <a class="d-block" href="{{route('product.details',['id'=>$product->id])}}">
                                        <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_571" data-bgset="assets/images/home-classic/pr-03.jpg"></div>
                                    </a>
                                    <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                                        <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_571" data-bgset="assets/images/home-classic/pr-04.jpg"></div>
                                    </div>
                                    <div class="nt_add_w ts__03 pa ">
                                        <a href="#" class="wishlistadd cb chp ttip_nt tooltip_right"><span class="tt_txt">Add to Wishlist</span><i class="facl facl-heart-o"></i></a>
                                    </div>
                                    <div class="hover_button op__0 tc pa flex column ts__03">
                                        <a class="pr nt_add_qv js_add_qv cd br__40 pl__25 pr__25 bgw tc dib ttip_nt tooltip_top_left" href="#"><span class="tt_txt">Quick view</span><i class="iccl iccl-eye"></i><span>Quick view</span></a>
                                        <a href="#" class="pr pr_atc cd br__40 bgw tc dib js__qs cb chp ttip_nt tooltip_top_left"><span class="tt_txt">Quick Shop</span><i class="iccl iccl-cart"></i><span>Quick Shop</span></a>
                                    </div>
                                    <div class="product-attr pa ts__03 cw op__0 tc">
                                        <p class="truncate mg__0 w__100">S, M, L</p></div>
                                </div>
                                <div class="product-info mt__15">
                                    <h3 class="product-title pr fs__14 mg__0 fwm">
                                        <a class="cd chp" href="{{route('product.details',['id'=>$product->id])}}">Ridley High Waist</a>
                                    </h3>
                                    <span class="price dib mb__5">$36.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 pr_animated col-md-3 col-6 mt__30 pr_grid_item product nt_pr desgin__1 done">
                            <div class="product-inner pr">
                                <div class="product-image pr oh lazyload">
                                    <span class="tc nt_labels pa pe_none cw"><span class="onsale nt_label"><span>-40%</span></span></span>
                                    <a class="d-block" href="{{route('product.details',['id'=>$product->id])}}">
                                        <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_571" data-bgset="assets/images/home-fashion-9/pr-s-49.jpg"></div>
                                    </a>
                                    <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                                        <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_571" data-bgset="assets/images/home-fashion-9/pr-s-50.jpg"></div>
                                    </div>
                                    <div class="nt_add_w ts__03 pa ">
                                        <a href="#" class="wishlistadd cb chp ttip_nt tooltip_right"><span class="tt_txt">Add to Wishlist</span><i class="facl facl-heart-o"></i></a>
                                    </div>
                                    <div class="hover_button op__0 tc pa flex column ts__03">
                                        <a class="pr nt_add_qv js_add_qv cd br__40 pl__25 pr__25 bgw tc dib ttip_nt tooltip_top_left" href="#"><span class="tt_txt">Quick view</span><i class="iccl iccl-eye"></i><span>Quick view</span></a>
                                        <a href="#" class="pr pr_atc cd br__40 bgw tc dib js__qs cb chp ttip_nt tooltip_top_left"><span class="tt_txt">Quick Shop</span><i class="iccl iccl-cart"></i><span>Quick Shop</span></a>
                                    </div>
                                    <div class="product-attr pa ts__03 cw op__0 tc">
                                        <p class="truncate mg__0 w__100">S, M</p></div>
                                </div>
                                <div class="product-info mt__15">
                                    <h3 class="product-title pr fs__14 mg__0 fwm">
                                        <a class="cd chp" href="{{route('product.details',['id'=>$product->id])}}">Skin Sweatpans</a>
                                    </h3>
                                    <span class="price dib mb__5"><del>$75.00</del><ins>$45.00</ins></span>
                                    <div class="swatch__list_js swatch__list lh__1 nt_swatches_on_grid">
                                        <span data-bgset="assets/images/home-fashion-9/pr-s-50.jpg" class="nt_swatch_on_bg swatch__list--item pr ttip_nt tooltip_top_right js__pink"><span class="tt_txt">Pink</span><span class="swatch__value bg_color_pink lazyload"></span></span>
                                        <span data-bgset="assets/images/home-fashion-9/pr-s-51.jpg" class="nt_swatch_on_bg swatch__list--item pr ttip_nt tooltip_top_right js__cyan"><span class="tt_txt">Cyan</span><span class="swatch__value bg_color_cyan lazyload"></span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 pr_animated col-md-3 col-6 mt__30 pr_grid_item product nt_pr desgin__1 done">
                            <div class="product-inner pr">
                                <div class="product-image pr oh lazyload">
                                    <a class="d-block" href="{{route('product.details',['id'=>$product->id])}}">
                                        <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_571" data-bgset="assets/images/home-classic/pr-21.jpg"></div>
                                    </a>
                                    <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                                        <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_571" data-bgset="assets/images/home-classic/pr-22.jpg"></div>
                                    </div>
                                    <div class="nt_add_w ts__03 pa ">
                                        <a href="#" class="wishlistadd cb chp ttip_nt tooltip_right"><span class="tt_txt">Add to Wishlist</span><i class="facl facl-heart-o"></i></a>
                                    </div>
                                    <div class="hover_button op__0 tc pa flex column ts__03">
                                        <a class="pr nt_add_qv js_add_qv cd br__40 pl__25 pr__25 bgw tc dib ttip_nt tooltip_top_left" href="#"><span class="tt_txt">Quick view</span><i class="iccl iccl-eye"></i><span>Quick view</span></a>
                                        <a href="#" class="pr pr_atc cd br__40 bgw tc dib js_addtc cb chp ttip_nt tooltip_top_left"><span class="tt_txt">Add to cart</span><i class="iccl iccl-cart"></i><span>Add to cart</span></a>
                                    </div>
                                </div>
                                <div class="product-info mt__15">
                                    <h3 class="product-title pr fs__14 mg__0 fwm">
                                        <a class="cd chp" href="{{route('product.details',['id'=>$product->id])}}">Black mountain hat</a>
                                    </h3>
                                    <span class="price dib mb__5">$50.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 pr_animated col-md-3 col-6 mt__30 pr_grid_item product nt_pr desgin__1 done">
                            <div class="product-inner pr">
                                <div class="product-image pr oh lazyload">
                                    <a class="d-block" href="{{route('product.details',['id'=>$product->id])}}">
                                        <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_571" data-bgset="assets/images/home-classic/pr-31.jpg"></div>
                                    </a>
                                    <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                                        <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_571" data-bgset="assets/images/home-classic/pr-32.jpg"></div>
                                    </div>
                                    <div class="nt_add_w ts__03 pa ">
                                        <a href="#" class="wishlistadd cb chp ttip_nt tooltip_right"><span class="tt_txt">Add to Wishlist</span><i class="facl facl-heart-o"></i></a>
                                    </div>
                                    <div class="hover_button op__0 tc pa flex column ts__03">
                                        <a class="pr nt_add_qv js_add_qv cd br__40 pl__25 pr__25 bgw tc dib ttip_nt tooltip_top_left" href="#"><span class="tt_txt">Quick view</span><i class="iccl iccl-eye"></i><span>Quick view</span></a>
                                        <a href="#" class="pr pr_atc cd br__40 bgw tc dib js__qs cb chp ttip_nt tooltip_top_left"><span class="tt_txt">Quick Shop</span><i class="iccl iccl-cart"></i><span>Quick Shop</span></a>
                                    </div>
                                </div>
                                <div class="product-info mt__15">
                                    <h3 class="product-title pr fs__14 mg__0 fwm">
                                        <a class="cd chp" href="{{route('product.details',['id'=>$product->id])}}">Men pants</a>
                                    </h3>
                                    <span class="price dib mb__5">$49.00 – $56.00</span>
                                    <div class="swatch__list_js swatch__list lh__1 nt_swatches_on_grid">
                                        <span data-bgset="assets/images/home-classic/pr-31.jpg" class="nt_swatch_on_bg swatch__list--item pr ttip_nt tooltip_top_right lazyload"><span class="tt_txt">Blue</span><span class="swatch__value bg_color_blue"></span></span>
                                        <span data-bgset="assets/images/home-classic/pr-33.jpg" class="nt_swatch_on_bg swatch__list--item pr ttip_nt tooltip_top_right lazyload"><span class="tt_txt">Black</span><span class="swatch__value bg_color_black"></span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 pr_animated col-md-3 col-6 mt__30 pr_grid_item product nt_pr desgin__1 done">
                            <div class="product-inner pr">
                                <div class="product-image pr oh lazyload">
                                    <a class="d-block" href="{{route('product.details',['id'=>$product->id])}}">
                                        <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_571" data-bgset="assets/images/home-classic/pr-19.jpg"></div>
                                    </a>
                                    <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                                        <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_571" data-bgset="assets/images/home-classic/pr-20.jpg"></div>
                                    </div>
                                    <div class="nt_add_w ts__03 pa ">
                                        <a href="#" class="wishlistadd cb chp ttip_nt tooltip_right"><span class="tt_txt">Add to Wishlist</span><i class="facl facl-heart-o"></i></a>
                                    </div>
                                    <div class="hover_button op__0 tc pa flex column ts__03">
                                        <a class="pr nt_add_qv js_add_qv cd br__40 pl__25 pr__25 bgw tc dib ttip_nt tooltip_top_left" href="#"><span class="tt_txt">Quick view</span><i class="iccl iccl-eye"></i><span>Quick view</span></a>
                                        <a href="#" class="pr pr_atc cd br__40 bgw tc dib js_addtc cb chp ttip_nt tooltip_top_left"><span class="tt_txt">Add to cart</span><i class="iccl iccl-cart"></i><span>Add to cart</span></a>
                                    </div>
                                </div>
                                <div class="product-info mt__15">
                                    <h3 class="product-title pr fs__14 mg__0 fwm">
                                        <a class="cd chp" href="{{route('product.details',['id'=>$product->id])}}">Cream women pants</a>
                                    </h3>
                                    <span class="price dib mb__5">$35.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 pr_animated col-md-3 col-6 mt__30 pr_grid_item product nt_pr desgin__1 done">
                            <div class="product-inner pr">
                                <div class="product-image pr oh lazyload">
                                    <a class="d-block" href="{{route('product.details',['id'=>$product->id])}}">
                                        <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_571" data-bgset="assets/images/home-fashion-9/pr-s-33.jpg"></div>
                                    </a>
                                    <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                                        <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_571" data-bgset="assets/images/home-fashion-9/pr-s-34.jpg"></div>
                                    </div>
                                    <div class="nt_add_w ts__03 pa ">
                                        <a href="#" class="wishlistadd cb chp ttip_nt tooltip_right"><span class="tt_txt">Add to Wishlist</span><i class="facl facl-heart-o"></i></a>
                                    </div>
                                    <div class="hover_button op__0 tc pa flex column ts__03">
                                        <a class="pr nt_add_qv js_add_qv cd br__40 pl__25 pr__25 bgw tc dib ttip_nt tooltip_top_left" href="#"><span class="tt_txt">Quick view</span><i class="iccl iccl-eye"></i><span>Quick view</span></a>
                                        <a href="#" class="pr pr_atc cd br__40 bgw tc dib js_addtc cb chp ttip_nt tooltip_top_left"><span class="tt_txt">Add to cart</span><i class="iccl iccl-cart"></i><span>Add to cart</span></a>
                                    </div>
                                </div>
                                <div class="product-info mt__15"><h3 class="product-title pr fs__14 mg__0 fwm">
                                    <a class="cd chp" href="{{route('product.details',['id'=>$product->id])}}">Sunny Life</a>
                                </h3>
                                    <span class="price dib mb__5">$68.00</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end product recommendations section-->

        <!--product recently viewed section-->
        <div class="kalles-section tp_se_cdt">
            <div class="related product-extra mt__60 lazyload">
                <div class="container">
                    <div class="wrap_title des_title_1">
                        <h3 class="section-title tc pr flex fl_center al_center fs__24 title_1">
                            <span class="mr__10 ml__10">Recently viewed products</span></h3>
                        <span class="dn tt_divider"><span></span><i class="dn clprfalse title_1 la-gem"></i><span></span></span><span class="section-subtitle db tc sub-title"></span>
                    </div>
                    <div class="sortby_3 products nt_products_holder nt_slider row row_pr_1 cdt_des_1 round_cd_false nt_cover ratio_nt position_8 space_30 prev_next_0 btn_owl_1 dot_owl_1 dot_color_1 btn_vi_1 is-draggable" data-flickity='{"imagesLoaded": 0,"adaptiveHeight": 0, "contain": 1, "groupCells": "100%", "dragThreshold" : 5, "cellAlign": "left","wrapAround": true,"prevNextButtons": false,"percentPosition": 1,"pageDots": false, "autoPlay" : 0, "pauseAutoPlayOnHover" : true, "rightToLeft": false }'>
                        <div class="col-lg-3 pr_animated col-md-3 col-6 mt__30 pr_grid_item product nt_pr desgin__1 done">
                            <div class="product-inner pr">
                                <div class="product-image pr oh lazyload">
                                    <span class="tc nt_labels pa pe_none cw">
                                        <span class="onsale nt_label"><span>-34%</span></span>
                                    </span>
                                    <a class="d-block" href="{{route('product.details',['id'=>$product->id])}}">
                                        <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_571" data-bgset="assets/images/megamenu/pr-11.jpg"></div>
                                    </a>
                                    <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                                        <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_571" data-bgset="assets/images/megamenu/pr-12.jpg"></div>
                                    </div>
                                    <div class="nt_add_w ts__03 pa ">
                                        <a href="#" class="wishlistadd cb chp ttip_nt tooltip_right"><span class="tt_txt">Add to Wishlist</span><i class="facl facl-heart-o"></i></a>
                                    </div>
                                    <div class="hover_button op__0 tc pa flex column ts__03">
                                        <a class="pr nt_add_qv js_add_qv cd br__40 pl__25 pr__25 bgw tc dib ttip_nt tooltip_top_left" href="#"><span class="tt_txt">Quick view</span><i class="iccl iccl-eye"></i><span>Quick view</span></a>
                                        <a href="#" class="pr pr_atc cd br__40 bgw tc dib js__qs cb chp ttip_nt tooltip_top_left"><span class="tt_txt">Quick Shop</span><i class="iccl iccl-cart"></i><span>Quick Shop</span></a>
                                    </div>
                                </div>
                                <div class="product-info mt__15">
                                    <h3 class="product-title pr fs__14 mg__0 fwm">
                                        <a class="cd chp" href="{{route('product.details',['id'=>$product->id])}}">La Bohème Rose Gold</a>
                                    </h3>
                                    <span class="price dib mb__5"><del>$60.00</del><ins>$40.00</ins></span>
                                    <div class="swatch__list_js swatch__list lh__1 nt_swatches_on_grid">
                                        <span data-bgset="assets/images/products/pr-27.jpg" class="nt_swatch_on_bg swatch__list--item pr ttip_nt tooltip_top_right"><span class="tt_txt">Pink</span><span class="swatch__value bg_color_pink"></span></span>
                                        <span data-bgset="assets/images/products/pr-35.jpg" class="nt_swatch_on_bg swatch__list--item pr ttip_nt tooltip_top_right"><span class="tt_txt">Black</span><span class="swatch__value bg_color_black"></span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 pr_animated col-md-3 col-6 mt__30 pr_grid_item product nt_pr desgin__1 done">
                            <div class="product-inner pr">
                                <div class="product-image pr oh lazyload">
                                    <a class="d-block" href="{{route('product.details',['id'=>$product->id])}}">
                                        <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_571" data-bgset="assets/images/home-fashion-9/pr-s-37.png"></div>
                                    </a>
                                    <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                                        <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_571" data-bgset="assets/images/home-fashion-9/pr-s-38.png"></div>
                                    </div>
                                    <div class="nt_add_w ts__03 pa ">
                                        <a href="#" class="wishlistadd cb chp ttip_nt tooltip_right"><span class="tt_txt">Add to Wishlist</span><i class="facl facl-heart-o"></i></a>
                                    </div>
                                    <div class="hover_button op__0 tc pa flex column ts__03">
                                        <a class="pr nt_add_qv js_add_qv cd br__40 pl__25 pr__25 bgw tc dib ttip_nt tooltip_top_left" href="#"><span class="tt_txt">Quick view</span><i class="iccl iccl-eye"></i><span>Quick view</span></a>
                                        <a href="#" class="pr pr_atc cd br__40 bgw tc dib js_addtc cb chp ttip_nt tooltip_top_left"><span class="tt_txt">Add to cart</span><i class="iccl iccl-cart"></i><span>Add to cart</span></a>
                                    </div>
                                </div>
                                <div class="product-info mt__15">
                                    <h3 class="product-title pr fs__14 mg__0 fwm">
                                        <a class="cd chp" href="{{route('product.details',['id'=>$product->id])}}">Simple Skin T-shirt</a>
                                    </h3>
                                    <span class="price dib mb__5">$56.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 pr_animated col-md-3 col-6 mt__30 pr_grid_item product nt_pr desgin__1 done">
                            <div class="product-inner pr">
                                <div class="product-image pr oh lazyload">
                                    <span class="tc nt_labels pa pe_none cw"><span class="nt_label new">New</span></span>
                                    <a class="d-block" href="{{route('product.details',['id'=>$product->id])}}">
                                        <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_571" data-bgset="assets/images/home-classic/pr-01.jpg"></div>
                                    </a>
                                    <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                                        <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_571" data-bgset="assets/images/home-classic/pr-02.jpg"></div>
                                    </div>
                                    <div class="nt_add_w ts__03 pa ">
                                        <a href="#" class="wishlistadd cb chp ttip_nt tooltip_right"><span class="tt_txt">Add to Wishlist</span><i class="facl facl-heart-o"></i></a>
                                    </div>
                                    <div class="hover_button op__0 tc pa flex column ts__03">
                                        <a class="pr nt_add_qv js_add_qv cd br__40 pl__25 pr__25 bgw tc dib ttip_nt tooltip_top_left" href="#"><span class="tt_txt">Quick view</span><i class="iccl iccl-eye"></i><span>Quick view</span></a>
                                        <a href="#" class="pr pr_atc cd br__40 bgw tc dib js__qs cb chp ttip_nt tooltip_top_left"><span class="tt_txt">Quick Shop</span><i class="iccl iccl-cart"></i><span>Quick Shop</span></a>
                                    </div>
                                    <div class="product-attr pa ts__03 cw op__0 tc">
                                        <p class="truncate mg__0 w__100">XS, S, M, L, XL</p></div>
                                </div>
                                <div class="product-info mt__15"><h3 class="product-title pr fs__14 mg__0 fwm">
                                    <a class="cd chp" href="{{route('product.details',['id'=>$product->id])}}">Analogue Resin Strap</a>
                                </h3>
                                    <span class="price dib mb__5">$30.00</span></div>
                            </div>
                        </div>
                        <div class="col-lg-3 pr_animated col-md-3 col-6 mt__30 pr_grid_item product nt_pr desgin__1 done">
                            <div class="product-inner pr">
                                <div class="product-image pr oh lazyload">
                                    <a class="d-block" href="{{route('product.details',['id'=>$product->id])}}">
                                        <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_571" data-bgset="assets/images/home-lookbook-collection/pr-pin-51.jpg"></div>
                                    </a>
                                    <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                                        <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_571" data-bgset="assets/images/home-lookbook-collection/pr-pin-52.jpg"></div>
                                    </div>
                                    <div class="nt_add_w ts__03 pa">
                                        <a href="#" class="wishlistadd cb chp ttip_nt tooltip_right">
                                            <span class="tt_txt">Add to Wishlist</span><i class="facl facl-heart-o"></i>
                                        </a>
                                    </div>
                                    <div class="hover_button op__0 tc pa flex column ts__03">
                                        <a class="pr nt_add_qv js_add_qv cd br__40 pl__25 pr__25 bgw tc dib ttip_nt tooltip_top_left" href="#">
                                            <span class="tt_txt">Quick view</span><i class="iccl iccl-eye"></i><span>Quick view</span>
                                        </a>
                                        <a href="#" class="pr pr_atc cd br__40 bgw tc dib js_addtc cb chp ttip_nt tooltip_top_left">
                                            <span class="tt_txt">Add to cart</span><i class="iccl iccl-cart"></i><span>Add to cart</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-info mt__15">
                                    <h3 class="product-title pr fs__14 mg__0 fwm">
                                        <a class="cd chp" href="{{route('product.details',['id'=>$product->id])}}">Stripe Long Sleeve Top</a>
                                    </h3>
                                    <span class="price dib mb__5">$15.00 </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 pr_animated col-md-3 col-6 mt__30 pr_grid_item product nt_pr desgin__1 done">
                            <div class="product-inner pr">
                                <div class="product-image pr oh lazyload">
                                    <a class="db" href="{{route('product.details',['id'=>$product->id])}}">
                                        <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_571" data-bgset="assets/images/single-product/pr-viewed-01.jpg"></div>
                                    </a>
                                    <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                                        <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_571" data-bgset="assets/images/single-product/pr-viewed-02.jpg"></div>
                                    </div>
                                    <div class="nt_add_w ts__03 pa">
                                        <a href="#" class="wishlistadd cb chp ttip_nt tooltip_right">
                                            <span class="tt_txt">Add to Wishlist</span><i class="facl facl-heart-o"></i>
                                        </a>
                                    </div>
                                    <div class="hover_button op__0 tc pa flex column ts__03">
                                        <a class="pr nt_add_qv js_add_qv cd br__40 pl__25 pr__25 bgw tc dib ttip_nt tooltip_top_left" href="#">
                                            <span class="tt_txt">Quick view</span><i class="iccl iccl-eye"></i><span>Quick view</span>
                                        </a>
                                        <a href="#" class="pr pr_atc cd br__40 bgw tc dib js_addtc cb chp ttip_nt tooltip_top_left">
                                            <span class="tt_txt">Add to cart</span><i class="iccl iccl-cart"></i><span>Add to cart</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-info mt__15">
                                    <h3 class="product-title pr fs__14 mg__0 fwm">
                                        <a class="cd chp" href="{{route('product.details',['id'=>$product->id])}}">Felt Cowboy Hat</a>
                                    </h3>
                                    <span class="price dib mb__5">$22.00 </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 pr_animated col-md-3 col-6 mt__30 pr_grid_item product nt_pr desgin__1 done">
                            <div class="product-inner pr">
                                <div class="product-image pr oh lazyload">
                                    <a class="db" href="{{route('product.details',['id'=>$product->id])}}">
                                        <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_571" data-bgset="assets/images/single-product/pr-viewed-03.jpg"></div>
                                    </a>
                                    <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                                        <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_571" data-bgset="assets/images/single-product/pr-viewed-04.jpg"></div>
                                    </div>
                                    <div class="nt_add_w ts__03 pa">
                                        <a href="#" class="wishlistadd cb chp ttip_nt tooltip_right">
                                            <span class="tt_txt">Add to Wishlist</span><i class="facl facl-heart-o"></i>
                                        </a>
                                    </div>
                                    <div class="hover_button op__0 tc pa flex column ts__03">
                                        <a class="pr nt_add_qv js_add_qv cd br__40 pl__25 pr__25 bgw tc dib ttip_nt tooltip_top_left" href="#">
                                            <span class="tt_txt">Quick view</span><i class="iccl iccl-eye"></i><span>Quick view</span>
                                        </a>
                                        <a href="#" class="pr pr_atc cd br__40 bgw tc dib js__qs cb chp ttip_nt tooltip_top_left">
                                            <span class="tt_txt">Quick Shop</span><i class="iccl iccl-cart"></i><span>Quick Shop</span>
                                        </a>
                                    </div>
                                    <div class="product-attr pa ts__03 cw op__0 tc">
                                        <p class="truncate mg__0 w__100">S, M, L</p></div>
                                </div>
                                <div class="product-info mt__15">
                                    <h3 class="product-title pr fs__14 mg__0 fwm">
                                        <a class="cd chp" href="{{route('product.details',['id'=>$product->id])}}">Blue Jean</a></h3>
                                    <span class="price dib mb__5">$25.00 </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end product recently viewed section-->

    </div>
</div>
@endsection