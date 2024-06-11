@extends('layouts.guest')
@section('title')
    {{__('reset password')}}
@endsection
@section('auth')
@if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif
<form action="{{ route('password.email') }}" method="post">
    @csrf     
    <div class="form-group">
        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email address" required="required">
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

@endsection
