<!-- mobile toolbar -->
<div id="kalles-section-toolbar_mobile" class="kalles-section">
    <div class="kalles_toolbar kalles_toolbar_label_true ntpf r__0 l__0 b__0 flex fl_between al_center">
        <div class="type_toolbar_shop kalles_toolbar_item">
            <a href="shop-filter-options.html">
                <span class="toolbar_icon"></span>
                <span class="kalles_toolbar_label">Shop</span>
            </a>
        </div>
        <div class="type_toolbar_filter kalles_toolbar_item dn">
            <a class="dt_trigger_cl" href="#" data-trigger=".btn_filter">
                <span class="toolbar_icon"></span>
                <span class="kalles_toolbar_label">Filter</span>
            </a>
        </div>
        <div class="type_toolbar_cart kalles_toolbar_item">
            @if (session()->has('cart'))
                <a href="" class="js_addtc push_side">
                    <span class="toolbar_icon" id="mobcartvalue">
                        <span class="jsccount toolbar_count">
                            {{session()->get('cart')->totalQty}}
                        </span>
                    </span>
                    <span class="kalles_toolbar_label">Cart</span>
                </a>
            @else
                <a href="" class="js_addtc push_side">
                    <span class="toolbar_icon">
                        <span class="jsccount toolbar_count">
                            0
                        </span>
                    </span>
                    <span class="kalles_toolbar_label">Cart</span>
                </a>
            @endif
        </div>
        @if (Route::has('login'))
            @auth
            <div class="type_toolbar_account kalles_toolbar_item">
                <a href="#" class="db push_side" data-id="#nt_details_canvas">
                    <span class="toolbar_icon"></span>
                    <span class="kalles_toolbar_label">Account</span>
                </a>
            </div>
            @else
            <div class="type_toolbar_account kalles_toolbar_item">
                <a href="#" class="db push_side" data-id="#nt_login_canvas">
                    <span class="toolbar_icon"></span>
                    <span class="kalles_toolbar_label">Account</span>
                </a>
            </div>
            @endauth
        @endif
        <div class="type_toolbar_search kalles_toolbar_item">
            <a href="#" class="push_side" data-id="#nt_search_canvas">
                <span class="toolbar_icon"></span>
                <span class="kalles_toolbar_label">Search</span>
            </a>
        </div>
    </div>
</div>
<!-- end mobile toolbar -->

<!-- mobile menu -->
<div id="nt_menu_canvas" class="nt_fk_canvas nt_sleft dn lazyload">
    <i class="close_pp pegk pe-7s-close ts__03 cd"></i>
    <div class="mb_nav_tabs flex al_center mb_cat_true">
        <div class="mb_nav_title pr mb_nav_ul flex al_center fl_center active" data-id="#kalles-section-mb_nav_js">
            <span class="db truncate">Menu</span>
        </div>
        <div class="mb_nav_title pr flex al_center fl_center" data-id="#kalles-section-mb_cat_js">
            <span class="db truncate">Categories</span>
        </div>
    </div>
    <div id="kalles-section-mb_nav_js" class="mb_nav_tab active">
        <div id="kalles-section-mb_nav" class="kalles-section">
            <ul id="menu_mb_ul" class="nt_mb_menu">
                <li class="menu-item menu-item-has-children only_icon_false">
                    <a href="shop-filter-sidebar.html"><span class="nav_link_txt flex al_center">Shop</span><span class="nav_link_icon ml__5"></span></a>
                    <ul class="sub-menu">
                        <li class="menu-item">
                            <a href="shop.html">Grid Layout</a>
                        </li>
                        <li class="menu-item">
                            <a href="shop-packery-layout.html">Packery Layout</a>
                        </li>
                        <li class="menu-item">
                            <a href="shop-masonry-layout.html">Masonry Layout</a>
                        </li>
                        <li class="menu-item">
                            <a href="shop-full-width-layout.html">Full Width Layout</a>
                        </li>
                        <li class="menu-item">
                            <a href="shop-1600px-layout.html">1600px Layout</a>
                        </li>
                        <li class="menu-item">
                            <a href="shop-left-sidebar.html">Left Sidebar</a>
                        </li>
                        <li class="menu-item">
                            <a href="shop-right-sidebar.html">Right Sidebar</a>
                        </li>
                        <li class="menu-item">
                            <a href="shop-hidden-sidebar.html">Hidden sidebar</a>
                        </li>
                        <li class="menu-item">
                            <a href="shop.html">Filters area</a>
                        </li>
                        <li class="menu-item">
                            <a href="shop-filter-sidebar.html">Filters sidebar</a>
                        </li>
                        <li class="menu-item">
                            <a href="shopping-cart.html">Shopping cart</a>
                        </li>
                    </ul>
                </li>
                @if (Route::has('login'))
                    @auth
                    @else
                    <li class="menu-item menu-item-btns menu-item-acount">
                        <a href="#" class="push_side" data-id="#nt_login_canvas"><span class="iconbtns">Login / Register</span></a>
                    </li>
                    @endauth
                @endif
            </ul>
        </div>
    </div>
    <div id="kalles-section-mb_cat_js" class="mb_nav_tab">
        <div id="kalles-section-mb_cat" class="kalles-section">
            <ul id="menu_mb_cat" class="nt_mb_menu">
                <li class="menu-item">
                    <a href="shop-filter-options.html"><i class="las la-female mr__10 fs__20"></i>Women’s Clothing</a></li>
                <li class="menu-item">
                    <a href="shop-filter-options.html"><i class="las la-male mr__10 fs__20"></i>Men’s Clothing</a></li>
                <li class="menu-item">
                    <a href="shop-1600px-layout.html"><i class="las la-clock mr__10 fs__20"></i>Watches</a></li>
                <li class="menu-item">
                    <a href="shop-filter-options.html"><i class="las la-glasses mr__10 fs__20"></i>Accessories</a></li>
                <li class="menu-item">
                    <a href="shop-filter-options.html"><i class="las la-camera-retro mr__10 fs__20"></i>Electric</a></li>
                <li class="menu-item">
                    <a href="shop-1600px-layout.html"><i class="las la-shoe-prints mr__10 fs__20"></i>Shoes</a></li>
                <li class="menu-item">
                    <a href="shop-filter-options.html"><i class="las la-gem mr__10 fs__20"></i>Jewellery</a></li>
                <li class="menu-item">
                    <a href="shop-filter-options.html"><i class="las la-tshirt mr__10 fs__20"></i>T-Shirt</a></li>
                <li class="menu-item">
                    <a href="shop-1600px-layout.html"><i class="las la-child mr__10 fs__20"></i>Toys, Kids &amp; Baby</a>
                </li>
                <li class="menu-item">
                    <a href="shop-filter-options.html"><i class="las la-chair mr__10 fs__20"></i>Decor</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- end mobile menu -->