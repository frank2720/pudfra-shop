@foreach ($bestsales as $product)
<div class="col-lg-3 col-md-3 col-6 pr_animated done mt__30 pr_grid_item product nt_pr desgin__1">
    <div class="product-inner pr">
        <div class="product-image pr oh">

            <a class="d-block" href="product-detail-layout-01.html">
                <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_586" data-bgset="{{$product->images[0]->url}}"></div>
            </a>
            <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_586" data-bgset="{{$product->images[1]->url}}"></div>
            </div>
            <div class="nt_add_w ts__03 pa ">
                <a href="#" class="wishlistadd cb chp ttip_nt tooltip_right">
                    <span class="tt_txt">Add to Wishlist</span>
                    <i class="facl facl-heart-o"></i>
                </a>
            </div>
            <div class="hover_button op__0 tc pa flex column ts__03">
                <a href="" class="pr pr_atc cd br__40 bgw tc dib js__qs cb chp ttip_nt tooltip_top_left add-to-cart-btn"  data-product-id="{{$product->id}}">
                    <span class="tt_txt">Add to cart</span>
                    <i class="iccl iccl-cart"></i>
                    <span>Add to cart</span>
                </a>
            </div>
        </div>
        <div class="product-info mt__15">
            <h3 class="product-title pr fs__14 mg__0 fwm">
                <a class="cd chp" href="product-detail-layout-01.html">{{__(ucfirst(strtolower($product->name)))}}</a>
            </h3>
            <span class="price dib mb__5">$ {{number_format($product->price,2,".",",")}}</span>
        </div>
    </div>
</div>
@endforeach