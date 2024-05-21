<section>
    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>
    <form method="post" action="{{ route('profile.update') }}" class="mt-3">
        @csrf
        @method('patch')
        <div class="row">
            <div class="col">
              <div class="row">
                <div class="col">
                  <div class="form-group">
                    <label>{{__('Name')}}</label>
                    <input class="form-control" type="text" name="name" value="{{old('name', $user->name)}}" required autofocus autocomplete="name" >
                    <x-input-error class="mt-2" :messages="$errors->get('name')" />
                   </div>
                </div>
                <div class="col">
                  <div class="form-group">
                    <label>{{__('Email')}}</label>
                    <input class="form-control" type="email" name="email" value="{{old('email', $user->email)}}" required autocomplete="username" >
                    <x-input-error class="mt-2" :messages="$errors->get('email')" />
                  </div>
                    @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                        <div>
                            <p class="text-sm mt-2 text-gray-800">
                                {{ __('Your email address is unverified.') }}

                                <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    {{ __('Click here to re-send the verification email.') }}
                                </button>
                            </p>

                            @if (session('status') === 'verification-link-sent')
                                <p class="mt-2 font-medium text-sm text-green-600">
                                    {{ __('A new verification link has been sent to your email address.') }}
                                </p>
                            @endif
                        </div>
                    @endif
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col d-flex justify-content-end">
                <button class="btn btn-secondary mt-3" type="submit">{{ __('Save') }}</button>
              </div>
            </div>
            @if (session('status') === 'profile-updated')
            <p
                x-data="{ show: true }"
                x-show="show"
                x-transition
                x-init="setTimeout(() => show = false, 2000)"
                class="text-sm text-success"
            ><small>{{ __('Saved.') }}</small></p>
            @endif
        </div>
    </form>
</section>