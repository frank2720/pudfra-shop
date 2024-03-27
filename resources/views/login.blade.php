@guest
    <!-- login box -->
    <div id="nt_login_canvas" class="nt_fk_canvas dn lazyload">
        @if (Route::has('login'))
            <form id="customer_login" class="nt_mini_cart flex column h__100 is_selected" action="{{route('login')}}" method="POST">
                @csrf
                <div class="mini_cart_header flex fl_between al_center">
                    <div class="h3 widget-title tu fs__16 mg__0">Login</div>
                    <i class="close_pp pegk pe-7s-close ts__03 cd"></i></div>
                <div class="mini_cart_wrap">
                    <div class="mini_cart_content fixcl-scroll">
                        <div class="fixcl-scroll-content">
                            <p class="form-row">
                                <label for="login-email">Email <span class="required">*</span></label>
                                <input id="login-email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </p>
                            <p class="form-row">
                                <label for="login-password">Password <span class="required">*</span></label>
                                <input id="login-password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </p>
                            <p class="mb__10 mt__20">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </p>
                            <input type="submit" class="button button_primary w__100 tu js_add_ld" value="Sign In">
                            <br>
                            <p class="mb__10 mt__20">New customer?
                                <a href="#" data-id="#RegisterForm" class="link_acc">Create your account</a>
                            </p>
                            <p>Lost password?
                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}">Recover password</a>
                                @endif
                            </p>
                        </div>
                    </div>
                </div>
            </form>
        @endif

        @if (Route::has('register'))
            <form id="RegisterForm" class="nt_mini_cart flex column h__100" method="POST" action="{{ route('register') }}">
                @csrf
                <div class="mini_cart_header flex fl_between al_center">
                    <div class="h3 widget-title tu fs__16 mg__0">Register</div>
                    <i class="close_pp pegk pe-7s-close ts__03 cd"></i>
                </div>
                <div class="mini_cart_wrap">
                    <div class="mini_cart_content fixcl-scroll">
                        <div class="fixcl-scroll-content">
                            <p class="form-row">
                                <label for="name">{{ __('Name') }}<span class="required">*</span></label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            </p>
                            <p class="form-row">
                                <label for="email">{{ __('Email Address') }} <span class="required">*</span></label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </p>
                            <p class="form-row">
                                <label for="password">{{ __('Password') }} <span class="required">*</span></label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </p>
                            <p class="form-row">
                                <label for="confirm-password">{{ __('Confirm Password') }} <span class="required">*</span></label>
                                <input id="confirm-password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </p>
                            <input type="submit" value="Register" class="button button_primary w__100 tu js_add_ld">
                            <br>
                            <p class="mb__10 mt__20">Already have an account?
                                <a href="#" data-id="#customer_login" class="link_acc">Login here</a>
                            </p>
                        </div>
                    </div>
                </div>
            </form>
        @endif
    </div>
    <!-- end login box -->
@else
<div id="nt_details_canvas" class="nt_fk_canvas dn lazyload">
    <div class="nt_mini_cart flex column h__100 is_selected">
        <div class="mini_cart_header flex fl_between al_center">
            <div class="h3 widget-title tu fs__16 mg__0">Account details</div>
            <i class="close_pp pegk pe-7s-close ts__03 cd"></i>
        </div>
        <div class="mini_cart_wrap">
            <div class="mini_cart_content fixcl-scroll">
                <div class="fixcl-scroll-content ml__10">
                    <div class="h3 widget-title tu fs__16 mg__0">{{ucwords(strtolower(Auth::user()->name))}}</div>
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