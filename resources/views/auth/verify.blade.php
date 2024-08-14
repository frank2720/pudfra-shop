@extends('layouts.main')
@section('title')
    {{__('Verification')}}
@endsection
@section('auth')
<div class="container my-3"> 
    <div class="alert alert-info" role="alert"> 
        <h6 class="mb-3"> 
            <div class="card-header">{{ __('Verify Your Email Address') }}</div> 
        </h6> 
        {{ __('Before proceeding, please check your email for a verification link.') }}
        {{ __('If you did not receive the email') }},
        <form method="POST" action="{{ route('verification.resend') }}">
            @csrf
            <button type="submit" class="btn btn-link">{{ __('click here to request another') }}</button>.
        </form>
    </div> 
</div> 
@endsection
