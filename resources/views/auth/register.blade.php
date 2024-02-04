@extends('layouts.guest')
@section('content')
<div class="wrapper">
    <div class="logo">
        <img src="https://pudfra-talk.xyz/images/logo.png" alt="">
    </div>
    <form class="p-3 mt-3" action="{{route('register')}}" method="POST">
        @csrf
        <div class="form-field d-flex align-items-center">
            <span class="far fa-user"></span>
            <input type="text" name="name" required autofocus autocomplete="name" placeholder="your username">
        </div>
        <x-input-error :messages="$errors->get('name')" class="mt-2" />
        <div class="form-field d-flex align-items-center">
            <span class="far fa-envelope"></span>
            <input type="email" name="email" placeholder="name@company.com" value="{{old('email')}}" required autofocus autocomplete="username">
        </div>
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
        <div class="form-field d-flex align-items-center">
            <span class="fas fa-key"></span>
            <input type="password" name="password" required autocomplete="new-password" placeholder="your password">
        </div>
        <x-input-error :messages="$errors->get('password')" class="mt-2" />
        <div class="form-field d-flex align-items-center">
            <span class="fas fa-key"></span>
            <input type="password" name="password_confirmation" required autocomplete="new-password" placeholder="repeat password here">
        </div>
        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        <button type="submit" class="btn mt-3">Register</button>
    </form>
    <div class="text-center fs-6">
        <p>Already have an account?<a href="{{route('login')}}">Sign in</a></p>
    </div>
</div>
@endsection
