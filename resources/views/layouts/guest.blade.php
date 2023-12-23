<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name','pudfra-shop')}}</title>

        <link rel="icon" type="image/x-icon" href="{{asset('assets/images/icons/money-back.svg')}}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

        <!--Font Awesome Kit-->
        <script src="https://kit.fontawesome.com/3f96f27cdc.js" crossorigin="anonymous"></script>

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
        <script src="{{asset('assets/js/script.js')}}"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.1.1/flowbite.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>
    </head>
    <body class="antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <div id='mobileNav' class="hidden px-4 py-6 fixed top-0 left-0 h-full w-full bg-secondary z-20 animate-fade-in-down">
                <div id="hideMenu" class="flex justify-end">
                    <img src="{{asset('assets/images/logos/Cross.svg')}}" alt="" class="h-16 w-16" />
                </div>
                  <ul class="flex flex-col mx-8 my-24 items-center text-3xl">
                    <li class="my-6">
                      <a href="{{route('welcome')}}">Home</a>
                    </li>
                    <li class="my-6">
                      <a href="{{route('shop')}}">Shop</a>
                    </li>
                    @if (Route::has('login'))
                        @auth
                        <form method="POST" action="{{route('logout')}}">
                            @csrf
                        <li class="my-6">
                          <a href="{{route('logout')}}"
                            onclick="event.preventDefault();
                            this.closest('form').submit();">SignOut
                          </a>
                        </li>
                        </form>
                        @else
                        <li class="my-6">
                        <a href="{{route('login')}}">Login</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="my-6">
                        <a href="{{route('register')}}">SignUp</a>
                        </li>
                        @endif
                        @endauth
                    @endif
                    </li>
                  </ul> 
            </div>
            <!-- Page Heading -->
            @if (isset($header))
                <header class="py-4 shadow-sm sm:rounded-lg bg-gray-300">
                    <div class="container flex items-center justify-between">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
                {{$slot}}
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.1.1/flowbite.min.js"></script>
    </body>
</html>