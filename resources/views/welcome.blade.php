<x-app-layout>
<section class="pt-24 md:mt-0 md:h-screen flex flex-col justify-center text-center md:text-left md:flex-row md:justify-between md:items-center lg:px-48 md:px-12 px-4 bg-grey-100">
  <div class="md:flex-1 md:mr-10">
    <h1 class="text-4xl font-semibold mb-7">
        Welcome to Pudfra's 
      <span class="bg-underline1 bg-left-bottom bg-no-repeat pb-2 bg-100%">
        Ecommerce development hub!
      </span>
    </h1>
    <p class="font-normal mb-7">
        Step into the realm of online innovation and seamless shopping experiences. 
        As a Junior Laravel Developer, I'm excited to invite you to our digital marketplace where every line of code contributes 
        to a smoother, more delightful e-commerce journey.
    </p>
    <div>
      <a href="https://wa.me/254741061815">
        <button class="bg-black px-6 py-4 rounded-lg border-2 border-black border-solid text-white mr-2 mb-2">
          Quick Contact <i class="fa-brands fa-whatsapp"></i>
        </button>
      </a>
      <a href="{{route('shop')}}">
        <button class="px-6 py-4 border-2 border-black border-solid rounded-lg">
            Visit the E-commerce shop <i class="fa-solid fa-bag-shopping"></i>
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
<section class="bg-blue-500 text-white sectionSize">
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
<section class="sectionSize bg-secondary">
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
        <p class="font-normal">
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
    <div class="container mx-auto flex items-center flex-wrap pt-4 pb-12">

      <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
        @foreach ($recent_products as $product)

        <x-homepage-product :product="$product"/>

        @endforeach
      </div>
    </div>
</section>
</x-app-layout>