    <!--quick view-->
<div id="quick-view-tpl" class="dn">
    <div class="product-quickview single-product-content img_action_zoom kalles-quick-view-tpl">
        <div class="row product-image-summary">
            <div class="col-lg-7 col-md-6 col-12 product-images pr oh">
                <span class="tc nt_labels pa pe_none cw"><span class="onsale nt_label"><span>-34%</span></span></span>
                <div class="images">
                    <div class="product-images-slider tc equal_nt nt_slider nt_carousel_qv p-thumb_qv nt_contain ratio_imgtrue position_8" data-flickity='{ "fade":true,"cellSelector": ".q-item:not(.is_varhide)","cellAlign": "center","wrapAround": true,"autoPlay": false,"prevNextButtons":true,"adaptiveHeight": true,"imagesLoaded": false, "lazyLoad": 0,"dragThreshold" : 0,"pageDots": true,"rightToLeft": false }'>
                        @foreach ($product->images as $image)
                        <div data-grname="not4" data-grpvl="ntt4" class="js-sl-item q-item sp-pr-gallery__img w__100" data-mdtype="image">
                            <span class="nt_bg_lz lazyload" data-bgset="{{$image->url}}"></span>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-6 col-12 summary entry-summary pr">
                <div class="summary-inner gecko-scroll-quick">
                    <div class="gecko-scroll-content-quick">
                        <div class="kalles-section-pr_summary kalles-section summary entry-summary mt__30">
                            <h1 class="product_title entry-title fs__16"><a href="product-detail-layout-01.html">La Bohème Rose Gold</a></h1>
                            <div class="flex wrap fl_between al_center price-review">
                                <p class="price_range" id="price_qv">
                                    <del>${{$product->price}}</del>
                                    <ins>${{$product->price}}</ins>
                                </p>
                                <a href="product-detail-layout-01.html" class="rating_sp_kl dib">
                                    <div class="kalles-rating-result">
                                        <span class="kalles-rating-result__pipe">
                                            <span class="kalles-rating-result__start"></span>
                                            <span class="kalles-rating-result__start"></span>
                                            <span class="kalles-rating-result__start"></span>
                                            <span class="kalles-rating-result__start active"></span>
                                            <span class="kalles-rating-result__start"></span></span>
                                        <span class="kalles-rating-result__number">(12 reviews)</span>
                                    </div>
                                </a>
                            </div>
                            <div class="pr_short_des">
                                <p class="mg__0">Go kalles this summer with this vintage navy and white striped v-neck t-shirt from the Nike. Perfect for pairing with denim and white kicks for a stylish kalles vibe.</p>
                            </div>
                            <div class="btn-atc atc-slide btn_des_1 btn_txt_3">
                                <div id="callBackVariant_qv" class="nt_pink nt1_ nt2_">
                                    <div id="cart-form_qv" class="nt_cart_form variations_form variations_form_qv">
                                        <div class="variations_button in_flex column w__100 buy_qv_false">
                                            <div class="flex wrap">
                                                <div class="quantity pr mr__10 order-1 qty__true" id="sp_qty_qv">
                                                    <input type="number" class="input-text qty text tc qty_pr_js qty_cart_js" value="1" name="quantity" inputmode="numeric">
                                                    <div class="qty tc fs__14">
                                                        <button type="button" class="plus db cb pa pd__0 pr__15 tr r__0">
                                                            <i class="facl facl-plus"></i>
                                                        </button>
                                                        <button type="button" class="minus db cb pa pd__0 pl__15 tl l__0">
                                                            <i class="facl facl-minus"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="nt_add_w ts__03 pa order-3">
                                                    <a href="#" class="wishlistadd cb chp ttip_nt tooltip_top_left"><span class="tt_txt">Add to Wishlist</span><i class="facl facl-heart-o"></i></a>
                                                </div>
                                                <button type="submit" data-time='6000' data-ani='shake' class="single_add_to_cart_button button truncate js_frm_cart w__100 mt__20 order-4">
                                                    <span class="txt_add ">Add to cart</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="product-detail-layout-01.html" class="btn fwsb detail_link p-0 fs__14">View full details<i class="facl facl-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>