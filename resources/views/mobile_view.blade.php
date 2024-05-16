<!-- mobile toolbar -->
<div id="kalles-section-toolbar_mobile" class="kalles-section">
    <div class="kalles_toolbar kalles_toolbar_label_true ntpf r__0 l__0 b__0 flex fl_between al_center">
        <div class="type_toolbar_shop kalles_toolbar_item">
            <a href="{{route('shop')}}">
                <i class='bx bxs-grid-alt'></i>
                <span class="kalles_toolbar_label">Shop</span>
            </a>
        </div>
        <div class="type_toolbar_cart kalles_toolbar_item">
            <a href="" class="js_addtc push_side">
                <i class='bx bxs-shopping-bag pr' id="mobcartvalue">
                    <span class="jsccount toolbar_count">
                        {{session()->get('cart')->totalQty??0}}
                    </span>
                </i>
                <span class="kalles_toolbar_label">Cart</span>
            </a>
        </div>
        @if (Route::has('login'))
            @auth
            <div class="type_toolbar_account kalles_toolbar_item">
                <a href="#" class="db push_side" data-id="#nt_details_canvas">
                    <i class='bx bx-user'></i>
                    <span class="kalles_toolbar_label">Account</span>
                </a>
            </div>
            @else
            <div class="type_toolbar_account kalles_toolbar_item">
                <a href="#" class="db push_side" data-id="#nt_login_canvas">
                    <i class='bx bx-user'></i>
                    <span class="kalles_toolbar_label">Account</span>
                </a>
            </div>
            @endauth
        @endif
        <div class="type_toolbar_search kalles_toolbar_item">
            <a href="#" class="push_side" data-id="#nt_search_canvas">
                <i class='bx bx-search-alt-2' ></i>
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
                    <a href="{{route('shop')}}"><span class="nav_link_txt flex al_center">Shop</span><span class="nav_link_icon ml__5"></span></a>
                    <ul class="sub-menu">
                        <li class="menu-item">
                            <a href="">Shopping cart</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <div id="kalles-section-mb_cat_js" class="mb_nav_tab">
        <div id="kalles-section-mb_cat" class="kalles-section">
            <ul id="menu_mb_cat" class="nt_mb_menu">
                <li class="menu-item">
                    <a href="{{route('shop')}}"></i>Women’s Clothing</a></li>
                <li class="menu-item">
                    <a href="{{route('shop')}}"></i>Men’s Clothing</a></li>
                <li class="menu-item">
                    <a href="shop-1600px-layout.html"></i>Watches</a></li>
                <li class="menu-item">
                    <a href="{{route('shop')}}"></i>Accessories</a></li>
                <li class="menu-item">
                    <a href="{{route('shop')}}"></i>Electric</a></li>
                <li class="menu-item">
                    <a href="shop-1600px-layout.html"></i>Shoes</a></li>
                <li class="menu-item">
                    <a href="{{route('shop')}}"></i>Jewellery</a></li>
                <li class="menu-item">
                    <a href="{{route('shop')}}"></i>T-Shirt</a></li>
                <li class="menu-item">
                    <a href="shop-1600px-layout.html"></i>Toys, Kids &amp; Baby</a>
                </li>
                <li class="menu-item">
                    <a href="{{route('shop')}}"></i>Decor</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- end mobile menu -->