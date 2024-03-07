@extends('layouts.guest')
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12 min-vh-100 d-flex flex-column justify-content-center">
            <div class="row">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <div class="card rounded shadow shadow-sm">
                        <div class="card-header">
                            <h3 class="mb-0">Register</h3>
                        </div>
                        <div class="card-body">
                            <form class="p-3 mt-3" action="{{route('register')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label>Username <span class="text-danger">*</span></label>
                                    <input type="text" name="name" required autofocus autocomplete="name" placeholder="your username">
                                </div>
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                <div class="form-group">
                                    <label>Email <span class="text-danger">*</span></label>
                                    <input type="email" name="email" placeholder="name@company.com" value="{{old('email')}}" required autofocus autocomplete="username">
                                </div>
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                <div class="form-group">
                                    <label>Password <span class="text-danger">*</span></label>
                                    <input type="password" name="password" required autocomplete="new-password" placeholder="your password">
                                </div>
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                <div class="form-group">
                                    <label>Confirm oassword <span class="text-danger">*</span></label>
                                    <input type="password" name="password_confirmation" required autocomplete="new-password" placeholder="repeat password here">
                                </div>
                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                <button type="submit" class="button button_primary mt-3">Register</button>
                            </form>
                            <div class="text-center fs-6">
                                <p>Already have an account?<a href="{{route('login')}}">Sign in</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
