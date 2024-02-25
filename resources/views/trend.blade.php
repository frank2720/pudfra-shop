@foreach ($trending_products as $product)
<div class="col-lg-3 col-md-3 col-6 pr_animated done mt__30 pr_grid_item product nt_pr desgin__1">
    <div class="product-inner pr">
        <div class="product-image position-relative oh lazyload">
            @if ($product->retail_price>$product->price)
                <span class="tc nt_labels pa pe_none cw">
                    <span class="onsale nt_label">
                        <span>{{round((($product->price-$product->retail_price)/$product->retail_price)*100)}} %</span>
                    </span>
                </span>
            @endif
            <a class="d-block" href="product-detail-layout-01.html">
                <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_571" data-bgset="{{$product->images[0]->url}}"></div>
            </a>
            <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_571" data-bgset="{{$product->images[1]->url}}"></div>
            </div>
            <div class="nt_add_w ts__03 pa ">
                <a href="#" class="wishlistadd cb chp ttip_nt tooltip_right">
                    <span class="tt_txt">Add to Wishlist</span>
                    <i class="facl facl-heart-o"></i>
                </a>
            </div>
            <div class="hover_button op__0 tc pa flex column ts__03">
                <a class="pr nt_add_qv js_add_qv cd br__40 pl__25 pr__25 bgw tc dib ttip_nt tooltip_top_left" href="#">
                    <span class="tt_txt">Quick view</span>
                    <i class="iccl iccl-eye"></i>
                    <span>Quick view</span>
                </a>
                <a href="#" class="pr pr_atc cd br__40 bgw tc dib js__qs cb chp ttip_nt tooltip_top_left">
                    <span class="tt_txt">Quick Shop</span>
                    <i class="iccl iccl-cart"></i>
                    <span>Quick Shop</span>
                </a>
            </div>
        </div>
        <div class="product-info mt__15">
            <h3 class="product-title position-relative fs__14 mg__0 fwm">
                <a class="cd chp" href="product-detail-layout-01.html">{{$product->name}}</a>
            </h3>
            <span class="price dib mb__5">$ {{number_format($product->price,2,".",",")}}</span>
        </div>
    </div>
</div>
@endforeach