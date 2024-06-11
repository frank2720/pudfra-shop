@extends('layouts.guest')
@section('title')
    {{__('Registeration')}}
@endsection
@section('auth')

<form action="{{ route('register') }}" method="post">
    @csrf
    <h2 class="text-center">Register</h2>       
    <div class="form-group">
        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Your name">
        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="form-group">
        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email">
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="form-group">
        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password">
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="form-group">
        <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password">
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block">Register</button>
    </div>       
</form>
<p class="text-center"><a href="{{route('login')}}">Login</a></p>

@endsection
