<x-app-layout>
<div class="md:container md:mx-auto px-4 pt-4 pb-16 items-center">
    <!-- products -->
    <div class="col-span-3">
        <div class="mx-auto flex items-center flex-wrap pt-24 pb-12">
            <nav id="store" class="w-full z-30 top-0 px-6 py-1">
                <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 px-2 py-3">
                    <a class="uppercase tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-xl " href="#">
                        Store
                    </a>
                    <div class="flex items-center" id="store-nav-content">
                        <a class="pl-3 inline-block no-underline hover:text-black" href="#">
                            <svg class="fill-current hover:text-black" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M7 11H17V13H7zM4 7H20V9H4zM10 15H14V17H10z" />
                            </svg>
                        </a>
                        <a class="pl-3 inline-block no-underline hover:text-black" href="#">
                            <svg class="fill-current hover:text-black" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M10,18c1.846,0,3.543-0.635,4.897-1.688l4.396,4.396l1.414-1.414l-4.396-4.396C17.365,13.543,18,11.846,18,10 c0-4.411-3.589-8-8-8s-8,3.589-8,8S5.589,18,10,18z M10,4c3.309,0,6,2.691,6,6s-2.691,6-6,6s-6-2.691-6-6S6.691,4,10,4z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </nav>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                @foreach ($products as $product)
                <div class="justify-center p-10 bg-white shadow-md rounded-xl">
                <a href="{{route('product_details',['id'=>$product->id])}}">
                    <img class="hover:grow hover:shadow-lg rounded-lg" src="{{$product->img}}">
                    <div class="pt-3 flex items-center justify-between">
                        <p class="">{{ucfirst($product->name)}}</p>
                        <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m5 11 4-7"/><path d="m19 11-4-7"/><path d="M2 11h20"/>
                            <path d="m3.5 11 1.6 7.4a2 2 0 0 0 2 1.6h9.8c.9 0 1.8-.7 2-1.6l1.7-7.4"/>
                            <path d="m9 11 1 9"/>
                            <path d="M4.5 15.5h15"/>
                            <path d="m15 11-1 9"/>
                        </svg>
                    </div>
                    <p class="pt-1 text-gray-900">Ksh. {{number_format($product->price)}}</p>
                    @if ($product->retail_price>$product->price)
                        <del class="text-sm text-red-500 cursor-auto ml-2">{{number_format($product->retail_price)}}</del>
                    @endif
                </a>
                </div>
                @endforeach
            </div>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            @foreach ($products as $product)
                <x-product-card :product="$product"/>
            @endforeach
        </div>
        <div class="mt-3">
            {{$products->links()}}
        </div>
    </div>
</div>
</x-app-layout>