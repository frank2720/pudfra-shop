<x-app-layout>
    @include('layouts.header')
    <div id="default-carousel" class="relative w-full" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="images/blackfriday.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="images/arrangement-black-friday-shopping-carts-with-copy-space.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="images/top-view-desk-with-copy-space-tags.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 4 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="images/pexels-junior-teixeira-2047905.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 5 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="images/new-laptop-balancing-with-water.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
        </div>
        <!-- Slider indicators -->
        <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
        </div>
        <!-- Slider controls -->
        <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
            </svg>
            <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg>
            <span class="sr-only">Next</span>
            </span>
        </button>
    </div>

     <!-- features -->
     <div class="container py-16">
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

            <!-- product -->
            <div class="container pb-16">
                <h1 class="text-2xl font-medium text-gray-800 uppercase mb-6">new products</h1>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6">

                    @foreach ($recent_products as $product)

                    <div class="card flex flex-col justify-center p-10 bg-white rounded-lg shadow-2xl">
                      
                        <div class="prod-img">
                            <a href="/product?id={{$product->id}}">
                                <img src="{{$product->img}}" class="w-full object-cover object-center"  />
                            </a>
                        </div>
                        <div class="prod-info grid gap-10 mt-3">
                          <div class="text-orange-500">
                            <ul class="flex flex-row justify-center items-center">
                              <li>
                                <span><i class="fa-solid fa-star"></i></span>
                              </li>
                              <li>
                                <span><i class="fa-solid fa-star"></i></span>
                              </li>
                              <li>
                                <span><i class="fa-solid fa-star"></i></span>
                              </li>
                              <li>
                                <span><i class="fa-solid fa-star"></i></span>
                              </li>
                              <li>
                                <span><i class="fa-solid fa-star"></i></span>
                              </li>
                              <li>
                                <span><p class="text-sm ml-2">({{$product->reviews}})</p></span>
                              </li>
                            </ul>
                          </div>
                          <div class="prod-title">
                            <a href="/product?id={{$product->id}}">
                                <p class="text-base text-center text-gray-900 font-bold">{{ucfirst($product->name)}}</p>
                            </a>
                            @php
                                $maxPos = 50;
                                $text = $product->description;
                            @endphp

                            @if (strlen($text)>$maxPos)
                                @php
                                    $lastPos = ($maxPos) - strlen($text);
                                    $text = substr($text,0,strrpos($text, ' ',$lastPos)). '....'
                                @endphp                   
                            @endif
                            <a href="/product?id={{$product->id}}">
                                <p class="text-xs text-sm text-center text-gray-400 mb-2">{{ucfirst($text)}}</p>
                            </a>
                          </div>
                          <div class="flex flex-col md:flex-row justify-between items-center text-gray-900">
                            <p class="text-sm text-blue-600">Ksh. {{number_format($product->price)}}</p>
                            @if ($product->retail_price>$product->price)
                                <del class="text-sm text-red-400">{{number_format($product->retail_price)}}</del>
                            @else
                            <p>......</p>
                            @endif
                              <button type="button" class="px-5 py-2 rounded-full hover:bg-blue-600 hover:text-white border-2 border-gray-900 focus:outline-none">
                                <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m5 11 4-7"/><path d="m19 11-4-7"/><path d="M2 11h20"/>
                                    <path d="m3.5 11 1.6 7.4a2 2 0 0 0 2 1.6h9.8c.9 0 1.8-.7 2-1.6l1.7-7.4"/>
                                    <path d="m9 11 1 9"/>
                                    <path d="M4.5 15.5h15"/>
                                    <path d="m15 11-1 9"/>
                                </svg>
                              </button>
                          </div>
                        </div>
                    </div>

                    @endforeach
                </div>
        </div>
        <!-- ./product -->
</x-app-layout>
