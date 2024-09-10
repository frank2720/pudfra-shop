@extends('layouts.main')
@section('title')
{{$product->name}} {{__('Quality Product at Maanar Shop')}}
@endsection
@section('content')
<div class = "container my-4">
    <div class = "row">
      <!-- card left -->
      <div class = "product-imgs col-md-6">
        <div class = "img-display ml-4">
          <div class = "img-showcase">
            @foreach ($product->images as $index => $image)
                <img src = "{{ Storage::url($image->url) }}" alt = "">
            @endforeach
          </div>
        </div>
        @php
            $number_pics = count($product->images)
        @endphp
        @if ($number_pics>1)
        <div class = "img-select">
          @foreach ($product->images as $index => $image)
              <div class="img-item">
                  <a href="#" data-id="{{ $index + 1 }}">
                      <img src="{{ Storage::url($image->url) }}" alt="">
                  </a>
              </div>
          @endforeach
        </div>
        @endif
      </div>
      <!-- card right -->
      <div class = "product-content col-md-6">
          <h2 class = "product-name">{{$product->name}}</h2>
          <div class = "product-rating">
            <i class='bx bxs-star' ></i>
            <i class='bx bxs-star' ></i>
            <i class='bx bxs-star' ></i>
            <i class='bx bxs-star' ></i>
            <i class='bx bxs-star-half' ></i>
            <span>4.7(21)</span>
          </div>
    
          <div class = "product-price">
              @if ($product->price<$product->retail_price)
                  <p class = "last-price">Old Price: <span>Ksh {{number_format($product->retail_price)}}</span></p>
                  <p class = "new-price">New Price: <span>Ksh {{number_format($product->price)}}</span></p>    
              @else
              <p class = "new-price">Price: <span>Ksh {{number_format($product->price)}}</span></p>
              @endif
          </div>
    
          <div class = "product-detail">
            <h2>about this item: </h2>
            <p>{!! $product->description !!}</p>
          </div>
    
          <div class = "purchase-info">
            <button type = "button" data-product-id="{{$product->id}}" class = "add-to-cart-btn">
              Add to Cart <i class = "fas fa-shopping-cart"></i>
            </button>
          </div>
      </div>
    </div>
</div>

<!--product recommendations section-->
<div class="kalles-section tp_se_cdt mb-4">
  <div class="related product-extra mt__70">
      <div class="container">
          <div class="wrap_title des_title_1 mb__20">
              <h3 class="section-title tc pr flex fl_center al_center fs__24 title_1">
                  <span class="mr__10 ml__10">Recently Viewed</span></h3>
          </div>
          <div class="products nt_products_holder nt_slider row row_pr_1 cdt_des_1 round_cd_false nt_cover ratio_nt position_8 space_30 prev_next_0 btn_owl_1 dot_owl_1 dot_color_1 btn_vi_1 is-draggable" data-flickity='{"imagesLoaded": 0,"adaptiveHeight": 0, "contain": 1, "groupCells": "100%", "dragThreshold" : 5, "cellAlign": "left","wrapAround": true,"prevNextButtons": false,"percentPosition": 1,"pageDots": false, "autoPlay" : 0, "pauseAutoPlayOnHover" : true, "rightToLeft": false }'>
              @forelse ($recommendedProducts as $product)
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
                              <span class="price dib mb__5">Ksh {{number_format($product->price)}}</span>
                          </div>
                      </div>
                  </div>
              @empty
              @endforelse
          </div>
      </div>
  </div>
</div>
<!--end product recommendations section-->

<script>
  const imgs = document.querySelectorAll('.img-select a');
    const imgBtns = [...imgs];
    let imgId = 1;

    imgBtns.forEach((imgItem) => {
        imgItem.addEventListener('click', (event) => {
            event.preventDefault();
            imgId = imgItem.dataset.id;
            slideImage();
        });
    });

    function slideImage(){
        const displayWidth = document.querySelector('.img-showcase img:first-child').clientWidth;

        document.querySelector('.img-showcase').style.transform = `translateX(${- (imgId - 1) * displayWidth}px)`;
    }

    window.addEventListener('resize', slideImage);
</script>
@endsection