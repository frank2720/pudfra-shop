<!DOCTYPE html>
<html>
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
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
        <script src="{{asset('assets/js/script.js')}}"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.1.1/flowbite.min.css" rel="stylesheet" />
        <style>
            /* Chrome, Safari, Edge, Opera */
            input::-webkit-outer-spin-button,
            input::-webkit-inner-spin-button {
              -webkit-appearance: none;
              margin: 0;
            }
            
            /* Firefox */
            input[type=number] {
              -moz-appearance: textfield;
            }
        </style>
    </head>
<body class="antialiased">
  <div class="min-h-screen bg-gray-100">
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
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path  class="dark:fill-white" fill-rule="evenodd" clip-rule="evenodd" d="M16.9303 7C16.9621 6.92913 16.977 6.85189 16.9739 6.77432H17C16.8882 4.10591 14.6849 2 12.0049 2C9.325 2 7.12172 4.10591 7.00989 6.77432C6.9967 6.84898 6.9967 6.92535 7.00989 7H6.93171C5.65022 7 4.28034 7.84597 3.88264 10.1201L3.1049 16.3147C2.46858 20.8629 4.81062 22 7.86853 22H16.1585C19.2075 22 21.4789 20.3535 20.9133 16.3147L20.1444 10.1201C19.676 7.90964 18.3503 7 17.0865 7H16.9303ZM15.4932 7C15.4654 6.92794 15.4506 6.85153 15.4497 6.77432C15.4497 4.85682 13.8899 3.30238 11.9657 3.30238C10.0416 3.30238 8.48184 4.85682 8.48184 6.77432C8.49502 6.84898 8.49502 6.92535 8.48184 7H15.4932ZM9.097 12.1486C8.60889 12.1486 8.21321 11.7413 8.21321 11.2389C8.21321 10.7366 8.60889 10.3293 9.097 10.3293C9.5851 10.3293 9.98079 10.7366 9.98079 11.2389C9.98079 11.7413 9.5851 12.1486 9.097 12.1486ZM14.002 11.2389C14.002 11.7413 14.3977 12.1486 14.8858 12.1486C15.3739 12.1486 15.7696 11.7413 15.7696 11.2389C15.7696 10.7366 15.3739 10.3293 14.8858 10.3293C14.3977 10.3293 14.002 10.7366 14.002 11.2389Z" fill="#200E32" />
          </svg>
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
    <div id='mobileNav' class="hidden px-4 py-6 fixed top-0 left-0 h-full w-full bg-secondary z-20 animate-fade-in-down">
        <div id="hideMenu" class="flex justify-end">
            <img src="{{asset('assets/images/logos/Cross.svg')}}" alt="" class="h-16 w-16" />
        </div>
          <ul class="flex flex-col mx-8 my-24 items-center text-3xl">
            <li class="my-6">
              <a href="howitworks">How it works</a>
            </li>
            <li class="my-6">
              <a href="features">Features</a>
            </li>
            <li class="my-6">
              <a href="pricing">Pricing</a>
            </li>
          </ul> 
    </div>
     <!-- Hero -->
  <section
  class="pt-24 md:mt-0 md:h-screen flex flex-col justify-center text-center md:text-left md:flex-row md:justify-between md:items-center lg:px-48 md:px-12 px-4 bg-secondary">
  <div class="md:flex-1 md:mr-10">
    <h1 class="font-pt-serif text-4xl font-bold mb-7">
        Welcome to Pudfra's 
      <span class="bg-underline1 bg-left-bottom bg-no-repeat pb-2 bg-100%">
        Ecommerce development hub!
      </span>
    </h1>
    <p class="font-pt-serif font-normal mb-7">
        Step into the realm of online innovation and seamless shopping experiences. 
        As a Junior Laravel Developer, I'm excited to invite you to our digital marketplace where every line of code contributes 
        to a smoother, more delightful e-commerce journey.
    </p>
    <div>
      <a href="{{route('shop')}}">
        <button class="px-6 py-4 border-2 border-black border-solid rounded-lg">
            Visit the Ecommerce-Shop
        </button>
      </a>
    </div>
  </div>
  <div class="flex justify-around md:block mt-8 md:mt-0 md:flex-1">
    <div class="relative">
      <img src="{{asset('assets/images/Highlight1.svg')}}" alt="" class="absolute -top-16 -left-10" />
    </div>
    <img src= "{{asset('assets/images/MacBook Pro.png')}}" alt="Macbook" />
    <div class="relative">
      <img src="{{asset('assets/images/Highlight2.svg')}}" alt="" class="absolute -bottom-10 -right-6" />
    </div>
  </div>
</section>

<!-- How it works -->
<section class="bg-blue-600 text-white sectionSize">
  <div>
    <h2 class="secondaryTitle bg-underline2 bg-100%">How to shop</h2>
  </div>
  <div class="flex flex-col md:flex-row">
    <div class="flex-1 mx-8 flex flex-col items-center my-4">
      <div class="border-2 rounded-full bg-secondary text-black h-12 w-12 flex justify-center items-center mb-3">
        1
      </div>
      <h3 class="font-medium text-xl mb-2">Visit shop</h3>
      <p class="text-center">
        Visit the products page where a list of Items are listed and add the product you want to cart.
      </p>
    </div>
    <div class="flex-1 mx-8 flex flex-col items-center my-4">
      <div class="border-2 rounded-full bg-secondary text-black h-12 w-12 flex justify-center items-center mb-3">
        2
      </div>
      <h3 class="font-medium text-xl mb-2">View Cart</h3>
      <p class="text-center">
       View the number of items added to cart. You can reduce, increase the quantity of the product you want to order.
      </p>
    </div>
    <div class="flex-1 mx-8 flex flex-col items-center my-4">
      <div class="border-2 rounded-full bg-secondary text-black h-12 w-12 flex justify-center items-center mb-3">
        3
      </div>
      <h3 class="font-medium text-xl mb-2">Place Order</h3>
      <p class="text-center">
        Place order for products in the cart and wait for the delivery.
      </p>
    </div>
  </div>
</section>

<!-- About -->
<section class="sectionSize bg-white">
    <h2 class="secondaryTitle bg-underline3 bg-100%">About</h2>
  <!-- features -->
  <div class="container py-5">
    <div class="w-10/12 grid grid-cols-1 md:grid-cols-3 gap-6 mx-auto justify-center">
        <div class="border border-blue-600 rounded-sm px-3 py-6 flex justify-center items-center gap-5">
            <img src="assets/images/icons/delivery-van.svg" alt="Delivery" class="w-12 h-12 object-contain">
                <div>
                    <h4 class="font-medium capitalize text-lg">Free Shipping</h4>
                    <p class="text-gray-500 text-sm">Order over Ksh. {{number_format(10000)}}</p>
                </div>
        </div>
        <div class="border border-blue-600 rounded-sm px-3 py-6 flex justify-center items-center gap-5">
            <img src="assets/images/icons/money-back.svg" alt="Delivery" class="w-12 h-12 object-contain">
                <div>
                    <h4 class="font-medium capitalize text-lg">Money Rturns</h4>
                    <p class="text-gray-500 text-sm">30 days money returs</p>
                </div>
        </div>
        <div class="border border-blue-600 rounded-sm px-3 py-6 flex justify-center items-center gap-5">
            <img src="assets/images/icons/service-hours.svg" alt="Delivery" class="w-12 h-12 object-contain">
            <div>
                <h4 class="font-medium capitalize text-lg">24/7 Support</h4>
                <p class="text-gray-500 text-sm">Customer support</p>
            </div>
        </div>
    </div>
</div>
<!-- ./features -->

    <div class="flex items-start">
      <img src="{{asset('assets/images/logos/Heart.svg')}}" alt='' class="h-7 mr-4" />
      <div>
        <h3 class="font-semibold text-2xl"></h3>
        <p>
            Here, we're not just building a website; 
            we're crafting a space where your shopping desires meet cutting-edge technology. 
            From secure payment gateways to a user-friendly interface, every detail is meticulously designed to enhance your online experience.
            <br><br>
            Whether you're a fellow developer, business enthusiast, 
            or a tech-savvy shopper, this is your space to witness the magic of Laravel shaping the future of e-commerce. 
            Join me in creating a virtual marketplace that's not just functional but a joy to explore.
            <br><br>
            Ready to transform your online shopping venture? Let's dive into the world of e-commerce development together! 💻🛒✨
        </p>
      </div>
    </div>
</section>

<!-- Available products -->
<section class="sectionSize bg-secondary">
    <h2 class="secondaryTitle bg-underline3 bg-100%">Featured Products</h2>
</section>

</div>
<!-- Footer -->
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
</body>
</html>