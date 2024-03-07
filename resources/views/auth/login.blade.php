@extends('layouts.guest')
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12 min-vh-100 d-flex flex-column justify-content-center">
            <div class="row">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <div class="card rounded shadow shadow-sm">
                        <div class="card-header">
                            <h3 class="mb-0">Login</h3>
                        </div>
                        <div class="card-body">
                            <x-auth-session-status class="mb-4" :status="session('status')" />
                            <form class="nt_mini_cart flex column h__100" action="{{route('login')}}" method="POST">
                                @csrf
                                <div class="mini_cart_wrap">
                                    <div class="mini_cart_content fixcl-scroll">
                                        <div>
                                            <p class="form-group">
                                                <label for="CustomerEmail">Email <span class="text-danger">*</span></label>
                                                <input type="email" name="email" id="CustomerEmail" autocomplete="email" autocapitalize="off" value="{{old('email')}}">
                                                <x-input-error :messages="$errors->get('email')" />
                                            </p>
                                            <p class="form-group">
                                                <label for="CustomerPassword">Password <span class="text-danger">*</span></label>
                                                <input type="password" value="" name="password" autocomplete="current-password" id="CustomerPassword">
                                                <x-input-error :messages="$errors->get('password')" />
                                            </p>
                                            <input type="submit" class="button button_primary" value="Sign In">
                                                <br>
                                            <p class="mb__10 mt__20">New customer?
                                                <a href="{{route('register')}}" class="link_acc">Create your account</a>
                                            </p>
                                            <p>Lost password?
                                                <a href="{{route('password.request')}}" class="link_acc">Recover password</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection