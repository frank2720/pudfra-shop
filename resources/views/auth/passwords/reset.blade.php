@extends('layouts.main')
@section('title')
    {{__('password reset')}}
@endsection
@section('auth')

<div class="container my-3">
    <div class="row justify-content-center">
      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="card shadow">
            <div class="card-title text-center border-bottom">
                <h2>Reset you Password</h2>
              </div>
            <div class="card-body">
                <form action="{{ route('password.update') }}" method="post">
                    @csrf     
                    <input type="hidden" name="token" value="{{ $token }}">
                    <div class="form-group">
                        <input type="email" name="email" class="@error('email') is-invalid @enderror" value="{{ $email ?? old('email') }}" placeholder="Email address">
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
                        <input type="password" name="password_confirmation" class="@error('email') is-invalid @enderror" placeholder="Confirm password">
                    </div>
                
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Reset Password</button>
                    </div>   
                </form>
            </div>
    </div>
  </div>
 </div>
</div>

@endsection
