<!-- search box -->
<div id="nt_search_canvas" class="nt_fk_canvas dn">
    <div class="nt_mini_cart flex column h__100">
        <div class="mini_cart_header flex fl_between al_center">
            <h3 class="widget-title tu fs__16 mg__0 font-poppins">Search Our Site</h3>
            <i class="close_pp pegk pe-7s-close ts__03 cd"></i>
        </div>
        <div class="mini_cart_wrap">
            <div class="search_header mini_search_frm pr js_frm_search" role="search">
                <div class="frm_search_cat mb__20">
                    <select name="product_type">
                        <option value="*">All Categories</option>
                        <option value="Accessories">Accessories</option>
                        <option value="Bag">Bag</option>
                        <option value="Camera">Camera</option>
                        <option value="Decor">Decor</option>
                        <option value="Earphones">Earphones</option>
                        <option value="Electric">Electric</option>
                        <option value="Furniture">Furniture</option>
                        <option value="Headphone">Headphone</option>
                        <option value="Men">Men</option>
                        <option value="Shoes">Shoes</option>
                        <option value="Speaker">Speaker</option>
                        <option value="Watch">Watch</option>
                        <option value="Women">Women</option>
                    </select>
                </div>
                <div class="frm_search_input pr oh">
                    <input class="search_header__input js_iput_search placeholder-black" autocomplete="off" type="text" name="search" id="search" placeholder="Search for products">
                    <button class="search_header__submit js_btn_search" type="submit"><i class="iccl iccl-search"></i>
                    </button>
                </div>
                <div class="ld_bar_search"></div>
            </div>
            <div class="search_header__content mini_cart_content fixcl-scroll widget">
                <div class="fixcl-scroll-content product_list_widget">
                    <div class="js_prs_search" id="search_product">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end search box -->