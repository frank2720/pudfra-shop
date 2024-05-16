@guest
@else
<div id="nt_details_canvas" class="nt_fk_canvas dn lazyload">
    <div class="nt_mini_cart flex column h__100 is_selected">
        <div class="mini_cart_header flex fl_between al_center">
            <h3 class="widget-title tu fs__16 mg__0 font-poppins">Account details</h3>
            <i class='bx bx-x close_pp pegk ts__03 cd'></i>
        </div>
        <div class="mini_cart_wrap">
            <div class="mini_cart_content fixcl-scroll">
                <div class="fixcl-scroll-content ml__10">
                    <div class="widget-title tu fs__16 mg__0">{{ucwords(strtolower(Auth::user()->name))}}</div>
                    <p class="mb__10 mt__10">{{ucwords(strtolower(Auth::user()->email))}}</p>
                    <a href="{{route('logout')}}" class="button button_primary" 
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endguest