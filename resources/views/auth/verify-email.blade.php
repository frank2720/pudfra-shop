@extends('layouts.guest')
@section('content')
<div class="wrapper">
    <div class="logo">
        <img src="https://pudfra-talk.xyz/images/logo.png" alt="">
    </div>
    <div class="mt-3">
        {{__('Thanks for signing up! kindly visit your email to verify it, a link has been sent.')}}
    </div>
    @if (session('status') == 'verification-link-sent')
        <div class="text-success p-3 mb-2">
            {{ __('A new verification link has been sent to the email address you provided during registration.') }}
        </div>
    @endif
    <div class="p-3 mb-2">
        <form action="{{ route('verification.send') }}" method="POST">
            @csrf
            <div class="p-3 mb-2">
                <button type="submit" class="btn btn-secondary btn-sm">{{ __('Resend Verification Email') }}</button>
            </div>
        </form>

        <form action="{{route('logout')}}" method="POST">
            @csrf
            <button type="submit" class="btn btn-outline-dark">{{ __('Log Out') }}</button>
        </form>
    </div>
</div>
@endsection