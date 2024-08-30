@extends('layouts.main')
@section('title')
    {{__('Registeration')}}
@endsection
@section('auth')

<div class="container my-3">
    <div class="row justify-content-center">
      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="card shadow">
          <div class="card-title text-center border-bottom">
            <h2>Register</h2>
          </div>
            <div class="card-body">
                <form action="{{ route('register') }}" method="post">
                    @csrf     
                    <div class="form-group">
                        <input type="text" name="name" class="@error('name') is-invalid @enderror" placeholder="Your name">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="@error('email') is-invalid @enderror" name="email" placeholder="Email">
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
                        <input type="password" name="password_confirmation" placeholder="Confirm Password">
                    </div>
                
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Register</button>
                    </div>       
                </form>
                <p class="text-center"><a href="{{route('login')}}">Login</a></p>
            </div>
    </div>
  </div>
</div>
</div>

@endsection
