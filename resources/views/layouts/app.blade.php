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
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body x-data="{darkMode: false}" :class="{'dark': darkMode === true }" class="antialiased">
        <div class="min-h-screen">
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
                {{$slot}}
        </div>
        <section class="bg-white dark:bg-gray-900 sectionSize">
            <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
                <div class="md:flex md:justify-between">
                    <div class="mb-6 md:mb-0">
                        <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                            <img src="{{asset('images/pudfralogo.svg')}}" class="h-8" alt="Pudfra Logo" />
                            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Pudfra</span>
                        </a>
                    </div>
                    <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                        <div>
                            <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Resources</h2>
                            <ul class="text-gray-500 dark:text-gray-400 font-medium">
                                <li class="mb-4">
                                    <a href="https://pudfra-talk.xyz/" class="hover:underline">Pudfra-talk</a>
                                </li>
                                <li>
                                    <a href="" class="hover:underline">Pudfra-Shop</a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Follow us</h2>
                            <ul class="text-gray-500 dark:text-gray-400 font-medium">
                                <li class="mb-4">
                                    <a href="https://github.com/frank2720" class="hover:underline ">Github</a>
                                </li>
                                <li>
                                    <a href="" class="hover:underline">Discord</a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Legal</h2>
                            <ul class="text-gray-500 dark:text-gray-400 font-medium">
                                <li class="mb-4">
                                    <a href="#" class="hover:underline">Privacy Policy</a>
                                </li>
                                <li>
                                    <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
                <div class="sm:flex sm:items-center sm:justify-between">
                    <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">&copy; {{date('Y')}} <a href="" class="hover:underline">Pudfra™</a>. All Rights Reserved.
                    </span>
                    <div class="flex mt-4 sm:justify-center sm:mt-0">
                        <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                            <i class="fa-brands fa-facebook"></i>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                            <i class="fa-brands fa-discord"></i>
                        </a>
                        <a href="https://twitter.com/pudfra" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                            <i class="fa-brands fa-x-twitter"></i>
                        </a>
                        <a href="https://github.com/frank2720" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                            <i class="fa-brands fa-github"></i>
                        </a>
                        <a href="https://wa.me/254741061815" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                            <i class="fa-brands fa-whatsapp"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.1.1/flowbite.min.js"></script>
    </body>
</html>