@extends('layouts.guest')
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12 min-vh-100 d-flex flex-column justify-content-center">
            <div class="row">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <div class="card rounded shadow shadow-sm">
                        <div class="card-header">
                            <h3 class="mb-0">Reset your password</h3>
                        </div>
                        <div class="card-body">
                            <form class="nt_mini_cart flex column h__100" method="POST" action="{{ route('password.store') }}">
                                @csrf
                                <div class="mini_cart_wrap">
                                    <div class="mini_cart_content fixcl-scroll">
                                        <!-- Password Reset Token -->
                                        <input type="hidden" name="token" value="{{ $request->route('token') }}">
                                        <!-- Email Address -->
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input id="email" type="email" name="email" required autofocus autocomplete="username" value="{{old('email', $request->email)}}">
                                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input id="password" type="password" name="password" required autofocus autocomplete="new-password">
                                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                        </div>
                                        <div class="form-group">
                                            <label for="password_confirmation">Confirm Password</label>
                                            <input id="password_confirmation" type="password" name="password_confirmation" required autofocus autocomplete="new-password">
                                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                        </div>
                                        <input type="submit" class="button button_primary" value="Reset Password">
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
