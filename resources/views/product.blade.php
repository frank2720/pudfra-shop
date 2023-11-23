<x-app-layout>
	@include('layouts.header')
	<!-- component -->
<style>@import url(https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.min.css);</style>
<div class="w-full rounded bg-white p-10 mx-auto text-gray-800 relative md:text-left">
    <div class="md:flex items-center mb-5">
        <div class="w-full md:w-1/2 px-10 mb-10 md:mb-0">
            <div class="relative">
                <img src="{{asset($product->img)}}" alt="" class="h-auto max-w-xs">
                <div class="grid grid-cols-5 gap-4 mt-4">
                    <img src="{{asset($product->img)}}" alt="product2">
                    <img src="{{asset($product->img)}}" alt="product2">
                    <img src="{{asset($product->img)}}" alt="product2">
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
                    <div class="flex flex-wrap items-center gap-4 mt-4 mb-6">
                        <button type="submit"
                        class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded-full">
                            <a href="{{route('addToCart',['id'=>$product->id])}}">Add to Cart</a>
                        </button>
                    </div>
                    <div class="flex flex-wrap -mx-2 -mb-2">
                        {{$product->description}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</x-app-layout>