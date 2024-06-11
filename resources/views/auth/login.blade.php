@extends('layouts.guest')
@section('title')
    {{__('Login')}}
@endsection
@section('auth')

<form action="{{ route('login') }}" method="post">
    @csrf
    <h2 class="text-center">Log in</h2>       
    <div class="form-group">
        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email address" required="required">
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="form-group">
        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" required="required">
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block">Log in</button>
    </div>
    <div class="clearfix">
        <label class="float-left form-check-label"><input type="checkbox" name="remember"> Remember me</label>
        <a href="{{ route('password.request') }}" class="float-right">Forgot Password?</a>
    </div>        
</form>
<p class="text-center"><a href="{{route('register')}}">Create an Account</a></p>

@endsection