<section>
    <form class="form" method="post" action="{{ route('password.update') }}" class="mt-3">
        @csrf
        @method('put')
        <div class="row">
          <div class="col-12 col-sm-6 mb-3 mt-4">
            <div class="mb-2"><b>Change Password</b></div>
            <div class="row">
              <div class="col">
                <div class="form-group">
                  <label>{{__('Current Password')}}</label>
                  <input class="form-control" name="current_password" type="password" autocomplete="current-password">
                  <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <div class="form-group">
                    <label>{{__('New Password')}}</label>
                    <input class="form-control" name="password" type="password" autocomplete="new-password">
                    <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <div class="form-group">
                    <label>{{__('Confirm Password')}}</label>
                    <input class="form-control" name="password_confirmation" type="password" autocomplete="new-password">
                    <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
                </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col d-flex justify-content-end">
            <button class="btn btn-secondary" type="submit">{{__('Save')}}</button>
          </div>
        </div>
        @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-success"
                ><small>{{ __('Saved.') }}</small></p>
            @endif
      </form>
</section>