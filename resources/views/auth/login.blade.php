@extends('layouts.guest')
@section('content')
<div class="wrapper">
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <div class="logo">
        <img src="https://pudfra-talk.xyz/images/logo.png" alt="">
    </div>
    <form class="p-3 mt-3" action="{{route('login')}}" method="POST">
        @csrf
        <div class="form-field d-flex align-items-center">
            <span class="far fa-user"></span>
            <input type="email" name="email" placeholder="name@company.com" value="{{old('email')}}" required autofocus autocomplete="username">
        </div>
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
        <div class="form-field d-flex align-items-center">
            <span class="fas fa-key"></span>
            <input type="password" name="password" required autocomplete="current-password" placeholder="••••••••">
        </div>
        <x-input-error :messages="$errors->get('password')" class="mt-2" />
        <button type="submit" class="btn mt-3">Login</button>
    </form>
    <div class="text-center fs-6">
        @if (Route::has('password.request'))
        <a href="{{route('password.request')}}">Forgot password?</a>
        @endif
        or <a href="{{route('register')}}">Sign up</a>
    </div>
</div>
@endsection