@extends('layouts.guest')
@section('title')
    {{__('password reset')}}
@endsection
@section('auth')

<form action="{{ route('password.update') }}" method="post">
    @csrf     
    <input type="hidden" name="token" value="{{ $token }}">
    <div class="form-group">
        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ $email ?? old('email') }}" placeholder="Email address" required="required">
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
        <input type="password" name="password_confirmation" class="form-control @error('email') is-invalid @enderror" placeholder="Confirm password" required="required">
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block">Reset Password</button>
    </div>   
</form>

@endsection
