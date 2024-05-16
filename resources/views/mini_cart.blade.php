<!-- mini cart box -->
<div id="nt_cart_canvas" class="nt_fk_canvas dn">
    <div class="nt_mini_cart nt_js_cart flex column h__100 btns_cart_1">
        <div class="mini_cart_header flex fl_between al_center">
            <h3 class="widget-title tu fs__16 mg__0 font-poppins">Shopping cart</h3>
            <i class="close_pp pegk pe-7s-close ts__03 cd"></i>
        </div>
        
        <div class="mini_cart_wrap">
            <div class="mini_cart_content fixcl-scroll">
                <div class="fixcl-scroll-content">
                    <div class="empty tc mt__40 dn"><i class="las la-shopping-bag pr mb__10"></i>
                        <p>Your cart is empty.</p>
                        <p class="return-to-shop mb__15">
                            <a class="button button_primary tu js_add_ld" href="">Return To Shop</a>
                        </p>
                    </div>
                    @if (session()->has('cart') && $totalPrice>0)
                    <div id="cart-p">
                        @foreach ($cart_products as $product)
                            <div class="mini_cart_items js_cat_items lazyload">
                                <div class="mini_cart_item js_cart_item flex al_center pr oh">
                                    <div class="ld_cart_bar"></div>
                                    <a href="{{route('product.details',['id'=>$product['item']->id])}}" class="mini_cart_img">
                                        <img class="w__100 lazyload" style="height: 100px;width:100px;object-fit:cover" data-src="{{Storage::url($product['item']->images[0]->url??$product['item']->images[1]->url??null)}}" width="120" height="153" alt="" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMjAiIGhlaWdodD0iMTUzIiB2aWV3Qm94PSIwIDAgMTIwIDE1MyI+PC9zdmc+">
                                    </a>
                                    <div class="mini_cart_info">
                                        <a href="{{route('product.details',['id'=>$product['item']->id])}}" class="mini_cart_title truncate">{{$product['item']->name}}</a>
                                        <div class="mini_cart_meta">
                                            <p class="cart_selling_plan"></p>
                                            <div class="cart_meta_price price">
                                                <div class="cart_price">
                                                    <ins>Ksh {{$product['price']}}</ins>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mini_cart_actions">
                                            <div class="quantity pr mr__10 qty__true">
                                                <input type="number" class="input-text qty text tc qty_cart_js" id="product_{{$product['item']->id]}}" disabled value="{{$product['qty']}}">
                                            </div>
                                            <a href="{{route('shopping')}}" class="cart_ac_edit js__qs ttip_nt tooltip_top_right"><span class="tt_txt">Edit this item</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                                    <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                                </svg>
                                            </a>
                                            <a href="#" class="cart_ac_remove js_cart_rem ttip_nt tooltip_top_right" data-id="{{$product['item']->id}}"><span class="tt_txt">Remove this item</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <polyline points="3 6 5 6 21 6"></polyline>
                                                    <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                    <line x1="10" y1="11" x2="10" y2="17"></line>
                                                    <line x1="14" y1="11" x2="14" y2="17"></line>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="mini_cart_tool js_cart_tool tc ">
                        <div data-id="gift" class="mini_cart_tool_gift js_cart_tls js_gift_wrap ttip_nt tooltip_top">
                            <i class="las la-gift"></i><span class="tt_txt">Add A Gift Wrap</span>
                        </div>
                        <div data-id="ship" class="mini_cart_tool_ship js_cart_tls ttip_nt tooltip_top">
                            <i class="las la-truck-moving"></i><span class="tt_txt">Estimate Shipping</span>
                        </div>
                    </div>
                    @else
                    <div class="empty tc mt__40"><i class="las la-shopping-bag pr mb__10"></i>
                        <p>Your cart is empty.</p>
                        <p class="return-to-shop mb__15">
                            <a class="button button_primary tu js_add_ld" href="{{route('shop')}}">Return To Shop</a>
                        </p>
                    </div>
                    @endif
                </div>
            </div>
            <div class="mini_cart_footer js_cart_footer">
                <div class="js_cat_dics"></div>
                <div class="total row fl_between al_center">
                    <div class="col-auto"><strong>Subtotal:</strong></div>
                    <div class="col-auto tr js_cat_ttprice">
                        <div class="cart_tot_price">KSH {{number_format($totalPrice,2,'.',',')}}</div>
                    </div>
                </div>
                <p class="txt_tax_ship mb__5 fs__12">Taxes, shipping and discounts codes calculated at checkout</p>
                <a href="{{route('shopping')}}" class="button btn-cart mt__10 mb__10 js_add_ld d-inline-flex justify-content-center align-items-center cd-imp">View cart</a>
                <a href="{{route('checkout')}}" class="button btn-checkout mt__10 mb__10 js_add_ld d-inline-flex justify-content-center align-items-center text-white">Check Out</a>
            </div>
        </div>

        <!--mini cart tool cart gift-->
        <div class="mini_cart_gift pe_none">
            <div class="shipping_calculator tc">
                <p class="field">
                    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round" class="cd dib pr">
                        <polyline points="20 12 20 22 4 22 4 12"></polyline>
                        <rect x="2" y="7" width="20" height="5"></rect>
                        <line x1="12" y1="22" x2="12" y2="7"></line>
                        <path d="M12 7H7.5a2.5 2.5 0 0 1 0-5C11 2 12 7 12 7z"></path>
                        <path d="M12 7h4.5a2.5 2.5 0 0 0 0-5C13 2 12 7 12 7z"></path>
                    </svg>
                    <span class="gift_wrap_text mt__10 db"><span class="cd">Do you want a gift wrap?</span> Only Ksh 100.00</span>
                </p>
                <p class="field">
                    <input type="button"class="button btn-checkout get_rates mt__10 mb__10 js_add_ld d-inline-flex justify-content-center align-items-center text-white" value="Add Gift">
                </p>
                <p class="field">
                    <input type="button" class="button btn_back js_cart_tls_back" value="Cancel">
                </p>
            </div>
        </div>

        <!--mini cart tool shipping-->
        <div class="mini_cart_ship pe_none">
            <div class="shipping_calculator">
                <h3>Estimate Shipping</h3>
                <p class="field">
                    <label for="">Region</label>
                    <select id="" class=" lazyload">
                        <option value="" selected disabled>---</option>
                        @foreach ($towns as $town)
                            <option value="region 1">{{$town->city}}</option>
                        @endforeach
                    </select>
                </p>
                <p class="field">
                    <input type="button"class="button btn-checkout get_rates mt__10 mb__10 js_add_ld d-inline-flex justify-content-center align-items-center text-white" value="Calculate Shipping">
                </p>
                <p class="field">
                    <input type="button" class="button btn_back js_cart_tls_back" value="Cancel">
                </p>
                <div id="response_calcship"></div>
            </div>
        </div>

    </div>
</div>
<!-- end mini cart box-->