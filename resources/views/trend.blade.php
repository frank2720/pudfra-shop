@forelse ($trending_products as $product)
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
                <span class="price dib mb__5"><ins>USD {{number_format($product->entity[0]->price)}}</ins></span>
            </div>
        </div>
    </div>
@empty
@endforelse