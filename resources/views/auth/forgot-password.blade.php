@extends('layouts.guest')
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12 min-vh-100 d-flex flex-column justify-content-center">
            <div class="row">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <div class="card rounded shadow shadow-sm">
                        <div class="card-body">
                            <p>Forgot your password? No problem. Provide your email below and we will send you a reset link</p>
                            <x-auth-session-status class="mb-4" :status="session('status')" />
                            <form class="p-3 mt-3" action="{{ route('password.email') }}" method="POST">
                                @csrf
                                <div class="form-field d-flex align-items-center">
                                    <span class="far fa-envelope"></span>
                                    <input type="email" name="email" value="{{old('email')}}" required autofocus>
                                </div>
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                <button type="submit" class="button button_primary mt-3">{{ __('Email Password Reset Link') }}</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
