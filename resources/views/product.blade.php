<x-app-layout>
	@include('layouts.header')
	<!-- component -->
<style>@import url(https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.min.css);</style>
<div class="w-full rounded bg-white p-10 mx-auto text-gray-800 relative md:text-left">
    <div class="md:flex items-center mb-5">
        <div class="md:w-1/2 px-10 mb-10 md:mb-0">
            <div class="relative">
                <img src="{{$product->img}}" alt="">
                <div class="grid grid-cols-5 gap-4 mt-4">
                    <img src="assets/images/products/product2.jpg" alt="product2">
                    <img src="assets/images/products/product3.jpg" alt="product2">
                    <img src="assets/images/products/product4.jpg" alt="product2">
                    <img src="assets/images/products/product5.jpg" alt="product2">
                    <img src="assets/images/products/product6.jpg" alt="product2">
                </div>
            </div>
        </div>
        <div class="w-full px-4 md:w-1/2 ">

            <div class="lg:pl-20">

                <div class="mb-8">

                    <h2 class="max-w-xl mb-6 text-2xl font-bold dark:text-gray-400 md:text-4xl">
                        {{$product->name}}
                    </h2>

                    <p class="inline-block mb-6 text-4xl font-bold text-gray-700 dark:text-gray-400 ">
                        <span>Ksh {{number_format($product->price)}}</span>
                        @if ($product->retail_price>$product->price)
                        <span class="text-base font-normal text-red-500 line-through dark:text-gray-400">
                            Ksh {{number_format($product->retail_price)}}
                        </span>
                        @endif
                    </p>

                    <div class="flex flex-wrap -mx-2 -mb-2">
                        {{$product->description}}
                    </div>

                </div>

                <div class="w-32 mb-8 ">

                    <label for="" class="w-full pb-1 text-xl font-semibold text-gray-700 border-b border-blue-300 dark:border-gray-600 dark:text-gray-400">
                        Quantity
                    </label>

                    <div class="py-2 px-3 inline-block bg-white border border-gray-200 rounded-lg dark:bg-slate-900 dark:border-gray-700 mt-6">
                        <input type="number" class="p-0 w-20 bg-transparent border-0 text-gray-800 text-center focus:ring-0 dark:text-white" min="1" placeholder="1">
                    </div>

                </div>

                <div class="flex flex-wrap items-center gap-4">

                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                        Add to cart
                    </button>

                    <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded-full">
                        Buy Now
                    </button>

                </div>

            </div>

        </div>
    </div>
</div>
</x-app-layout>