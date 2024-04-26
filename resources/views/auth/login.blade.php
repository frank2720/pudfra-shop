@extends('layouts.guest')
@section('title')
    {{__('Login')}}
@endsection
@section('auth')
<style>
    .main-content{
        width: 50%;
        border-radius: 20px;
        box-shadow: 0 5px 5px rgba(0,0,0,.4);
        margin: 5em auto;
        display: flex;
    }
    .company__info{
        background-color: #008080;
        border-top-left-radius: 20px;
        border-bottom-left-radius: 20px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        color: #fff;
    }
    .fa-android{
        font-size:3em;
    }
    @media screen and (max-width: 640px) {
        .main-content{width: 90%;}
        .company__info{
            display: none;
        }
        .login_form{
            border-top-left-radius:20px;
            border-bottom-left-radius:20px;
        }
    }
    @media screen and (min-width: 642px) and (max-width:800px){
        .main-content{width: 70%;}
    }
    .row > h2{
        color:#008080;
    }
    .login_form{
        background-color: #fff;
        border-top-right-radius:20px;
        border-bottom-right-radius:20px;
        border-top:1px solid #ccc;
        border-right:1px solid #ccc;
    }
    form{
        padding: 0 2em;
    }
    .form__input{
        width: 100%;
        border:0px solid transparent;
        border-radius: 0;
        border-bottom: 1px solid #aaa;
        padding: 1em .5em .5em;
        padding-left: 2em;
        outline:none;
        margin:1.5em auto;
        transition: all .5s ease;
    }
    .form__input:focus{
        border-bottom-color: #008080;
        box-shadow: 0 0 5px rgba(0,80,80,.4); 
        border-radius: 4px;
    }
    .btn{
        transition: all .5s ease;
        width: 70%;
        border-radius: 30px;
        color:#008080;
        font-weight: 600;
        background-color: #fff;
        border: 1px solid #008080;
        margin-top: 1.5em;
        margin-bottom: 1em;
    }
    .btn:hover, .btn:focus{
        background-color: #008080;
        color:#fff;
    }
</style>
<div class="container">
    <div class="row main-content bg-success text-center">
        <div class="col-md-4 text-center company__info">
            <span class="company__logo"><h2><span class="fa fa-android"></span></h2></span>
            <h4 class="company_title">{{config('app.name')}}</h4>
        </div>
        <div class="col-md-8 col-xs-12 col-sm-12 login_form ">
            <div class="container-fluid">
                <div class="row">
                    <h2>Log In</h2>
                </div>

                <div class="row">
                    <form method="POST" action="{{ route('login') }}" class="form-group">
                        @csrf

                        <div class="row">
                                <input id="email" type="email" class="form__input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email address" autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="row">
                                <input id="password" type="password" class="form__input @error('password') is-invalid @enderror" name="password" placeholder="password" autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="row">
                            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>

                        <div class="row">
                            <input type="submit" value="Login" class="btn">
                        </div>
                    </form>
                </div>
                <div class="row">
                    <p>Forgot Your Password? 
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}">
                                {{ __('Reset it here') }}
                            </a>
                        @endif
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection