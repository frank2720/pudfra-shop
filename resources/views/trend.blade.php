@forelse ($trending_products as $product)
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
                <a class="d-block" href="{{route('product.details',['id'=>$product->id])}}">
                    <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_571" data-bgset="{{Storage::url($product->images[0]->url??null)}}"></div>
                </a>
                <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                    <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_571" data-bgset="{{Storage::url($product->images[1]->url??$product->images[0]->url??null)}}"></div>
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
                <h3 class="product-title position-relative fs__14 mg__0 fwm">
                    <a class="cd chp" href="{{route('product.details',['id'=>$product->id])}}">{{__(ucfirst(strtolower($product->name)))}}</a>
                </h3>
                <span class="price dib mb__5">&euro; {{number_format($product->price/$currencyExachangeRate,2,".",",")}}</span>
            </div>
        </div>
    </div>
@empty
@endforelse