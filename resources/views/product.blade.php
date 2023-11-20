<x-app-layout>
	@include('layouts.header')
	<!-- component -->
<style>@import url(https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.min.css);</style>
<div class="w-full max-w-6xl rounded bg-white p-10 mx-auto text-gray-800 relative md:text-left mt-4">
    <div class="md:flex items-center mb-5">
        <div class="w-full md:w-1/2 px-10 mb-10 md:mb-0">
            <div class="relative">
                <img src="{{$product->img}}" class="w-full relative z-10 hover:scale-125 transition duration-500 cursor-pointer" alt="">
            </div>
        </div>
        <div class="w-full md:w-1/2 px-10">
            <div class="mb-10">
                <h1 class="font-bold uppercase text-2xl mb-5">{{$product->name}}</h1>
                <p class="text-sm">{{$product->description}}<a href="#" class="opacity-50 text-gray-900 hover:opacity-100 inline-block text-xs leading-none border-b border-gray-900">MORE <i class="mdi mdi-arrow-right"></i></a></p>
            </div>
            <div>
                <div class="inline-block align-bottom mr-5">
                    <span class="text-2xl leading-none align-baseline"></span>
                    <span class="font-bold text-5xl leading-none align-baseline">Ksh. {{$product->price}}</span>
                    
                </div>
                <div class="inline-block align-bottom">
                    <button class="bg-blue-600 opacity-75 hover:opacity-100 text-white hover:text-white rounded-full px-10 py-2 font-semibold"><i class="mdi mdi-cart -ml-2 mr-2"></i> BUY NOW</button>
                </div>
            </div>
        </div>
    </div>
</div>
</x-app-layout>