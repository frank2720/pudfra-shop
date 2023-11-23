<x-slot name="header">
    <div class="w-full max-w-xl relative flex">
            <!--Add anything here-->
    </div>
    <div class="flex items-center space-x-4 mr-4">
        <a href="{{route('shopping')}}" class="text-center text-gray-700 hover:text-blue-600 transition relative">
            <div class="text-2xl">
                <i class="fa-solid fa-bag-shopping"></i>
            </div>
            <div class="text-xs leading-3">Cart</div>
            <div class="absolute -right-3 -top-1 w-5 h-5 rounded-full flex items-center justify-center bg-primary text-white text-xs">
                @if (session()->has('cart'))
                    {{session()->get('cart')->totalQty}}
                @else
                {{__('0')}}
                @endif
            </div>
        </a>
        <a href="#" class="text-center text-gray-700 hover:text-blue-600 transition relative">
            <div class="text-2xl">
                <i class="fa-regular fa-bell"></i>
            </div>
            <div class="text-xs leading-3">Alert</div>
            <div class="absolute -right-3 -top-1 w-5 h-5 rounded-full flex items-center justify-center bg-primary text-white text-xs">
                0
            </div>
        </a>
    </div>
</x-slot>