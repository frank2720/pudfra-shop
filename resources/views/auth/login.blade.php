<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form class="space-y-6" action="{{route('login')}}" method="POST">
        <h5 class="text-xl font-medium text-gray-900 dark:text-white">Login to Pudfra</h5>
        @csrf
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="name@company.com" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" placeholder="••••••••" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>
        
        <div class="flex items-start">
            <!--Remeber this device-->
            <div class="flex items-center h-5">
                <input id="remember" aria-describedby="remember" name="remember" type="checkbox" class="w-4 h-4 border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:bg-gray-700 dark:border-gray-600">
            </div>
            <div class="ms-3 text-sm">
            <label for="remember" class="font-medium text-gray-500 dark:text-gray-400">{{__('Remember this device')}}</label>
            </div>

            <!--Forgot password-->
            @if (Route::has('password.request'))
                <a href="{{route('password.request')}}" class="ms-auto text-sm font-medium text-blue-600 hover:underline dark:text-blue-500">
                    {{__('Lost Password?')}}
                </a>
            @endif
            
        </div>
        <x-primary-button>{{__('Login to your account')}}</x-primary-button>
        <div class="text-sm font-medium text-gray-900 dark:text-white">
            Not registered yet? <a href="{{route('register')}}" class="text-blue-600 hover:underline dark:text-blue-500">Create account</a>
        </div>
    </form>
</x-guest-layout>