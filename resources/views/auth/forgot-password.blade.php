@extends('layouts.guest')
@section('content')
<div class="wrapper">
    <div class="logo">
        <img src="https://pudfra-talk.xyz/images/logo.png" alt="">
    </div>
    <p>Forgot your password? No problem. Provide your email below and we will send you a reset link</p>
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <form class="p-3 mt-3" action="{{ route('password.email') }}" method="POST">
        @csrf
        <div class="form-field d-flex align-items-center">
            <span class="far fa-envelope"></span>
            <input type="email" name="email" value="{{old('email')}}" required autofocus>
        </div>
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
        <button type="submit" class="btn mt-3">{{ __('Email Password Reset Link') }}</button>
    </form>
</div>
@endsection
