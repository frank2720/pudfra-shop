@extends('layouts.main')
@section('title')
    {{__('reset password')}}
@endsection
@section('auth')
@if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif

<div class="container my-3">
    <div class="row justify-content-center">
      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="card shadow">
          <div class="card-body">
            <form action="{{ route('password.email') }}" method="post">
                @csrf     
                <div class="form-group">
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email address">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Send Password Reset Link</button>
                </div>   
            </form>
            
          </div>
    </div>
  </div>
</div>
</div>
@endsection
