<x-app-layout>
	@include('layouts.header')
	<!-- component -->
<style>@import url(https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.min.css);</style>
<div class="w-full rounded bg-white p-10 mx-auto text-gray-800 relative md:text-left">
    <div class="md:flex items-center mb-5">
        <div class="w-full md:w-1/2 px-10 mb-10 md:mb-0">
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

                    

                    <p class="inline-block text-4xl text-gray-700 dark:text-gray-400 ">
                        <span>Ksh {{number_format($product->price)}}</span>
                        @if ($product->retail_price>$product->price)
                        <span class="text-base font-normal text-red-500 line-through dark:text-gray-400">
                            Ksh {{number_format($product->retail_price)}}
                        </span>
                        @endif
                    </p>

                    <form action="" method="">
                        @csrf
                        <div class="py-2 px-3 inline-block bg-white border border-gray-200 rounded-lg dark:bg-slate-900 dark:border-gray-700 mt-2">
                            <input type="number" name="quantity" 
                            class="p-0 w-20 bg-transparent border-0 text-gray-800 text-center focus:ring-0 dark:text-white"
                            min="1" required>
                        </div>
    
                        <div class="flex flex-wrap items-center gap-4 mt-4 mb-6">
                            <button type="submit"
                            class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded-full">
                                Add to cart
                            </button>
                        </div>
                    </form>
                    

                    <div class="flex flex-wrap -mx-2 -mb-2">
                        {{$product->description}}
                    </div>

                </div>


            </div>

        </div>
    </div>
</div>
</x-app-layout>