@extends('layouts.main')
@section('title')
    {{__('Login')}}
@endsection
@section('auth')

<div class="container my-3">
    <div class="row justify-content-center">
      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="card shadow">
          <div class="card-title text-center border-bottom">
            <h2>Login</h2>
          </div>
          <div class="card-body">
            <form action="{{ route('login') }}" method="post">
                @csrf    
                <div class="form-group">
                    <input type="email" name="email" class="@error('email') is-invalid @enderror" placeholder="Email address">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="@error('password') is-invalid @enderror" placeholder="Password">
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
                    <label class="float-start form-check-label"><input type="checkbox" name="remember"> Remember me</label>
                    <a href="{{ route('password.request') }}" class="float-end">Forgot Password?</a>
                </div>        
            </form>
            <p class="text-center"><a href="{{route('register')}}">Create an Account</a></p>            
          </div>
        </div>
      </div>
    </div>
</div>

@endsection