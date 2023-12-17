<nav class="fixed flex justify-between py-6 w-full lg:px-48 md:px-12 px-4 content-center bg-secondary z-10">
  <div class="flex items-center">
      <img src="{{asset('images/pudfralogo.svg')}}" alt="Logo" class="h-8" />
  </div>
  <ul class="items-center hidden md:flex">
      <li class="mx-3 ">
        <a class="growing-underline" href="{{route('welcome')}}">
          Home
        </a>
      </li>
      <li class="growing-underline mx-3">
        <a href="{{route('shop')}}">Shop</a>
      </li>
      <li class="growing-underline mx-3">
        <a href="">Categories</a>
      </li>
      <li class="growing-underline mx-3">
        <a href="{{route('shop')}}">New Arrivals</a>
      </li>
      <li class="growing-underline mx-3">
        <a href="{{route('shop')}}">Deals</a>
      </li>
    </ul>
    <a href="{{route('shopping')}}" class="relative inline-flex">
      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path  class="dark:fill-white" fill-rule="evenodd" clip-rule="evenodd" d="M16.9303 7C16.9621 6.92913 16.977 6.85189 16.9739 6.77432H17C16.8882 4.10591 14.6849 2 12.0049 2C9.325 2 7.12172 4.10591 7.00989 6.77432C6.9967 6.84898 6.9967 6.92535 7.00989 7H6.93171C5.65022 7 4.28034 7.84597 3.88264 10.1201L3.1049 16.3147C2.46858 20.8629 4.81062 22 7.86853 22H16.1585C19.2075 22 21.4789 20.3535 20.9133 16.3147L20.1444 10.1201C19.676 7.90964 18.3503 7 17.0865 7H16.9303ZM15.4932 7C15.4654 6.92794 15.4506 6.85153 15.4497 6.77432C15.4497 4.85682 13.8899 3.30238 11.9657 3.30238C10.0416 3.30238 8.48184 4.85682 8.48184 6.77432C8.49502 6.84898 8.49502 6.92535 8.48184 7H15.4932ZM9.097 12.1486C8.60889 12.1486 8.21321 11.7413 8.21321 11.2389C8.21321 10.7366 8.60889 10.3293 9.097 10.3293C9.5851 10.3293 9.98079 10.7366 9.98079 11.2389C9.98079 11.7413 9.5851 12.1486 9.097 12.1486ZM14.002 11.2389C14.002 11.7413 14.3977 12.1486 14.8858 12.1486C15.3739 12.1486 15.7696 11.7413 15.7696 11.2389C15.7696 10.7366 15.3739 10.3293 14.8858 10.3293C14.3977 10.3293 14.002 10.7366 14.002 11.2389Z" fill="#200E32" />
      </svg>
      <div class="absolute inline-flex items-center justify-center w-5 h-5 text-xs font-bold text-white bg-red-500 rounded-full -top-2 -end-2 dark:border-gray-900">
        @if (session()->has('cart'))
          {{session()->get('cart')->totalQty}}
        @else
          {{__('0')}}
        @endif
      </div>
    </a>
      
    <div class="hidden md:block">
      <button class="mr-6">Login</button>
      <button class="py-2 px-4 text-white bg-black rounded-3xl">
        Signup
      </button>
    </div>
    <div id="showMenu" class="md:hidden">
      <img src="{{asset('assets/images/logos/Menu.svg')}}" alt="Menu icon" />
    </div>
</nav>