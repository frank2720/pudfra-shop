@props(['product'])

<div class="flex flex-col justify-center p-10 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl">
  <a href="{{route('product_details',['id'=>$product->id])}}">
   <img src="{{$product->img}}" class="object-cover rounded-t-xl"  />
  </a>
    
    <div class="px-4 py-3">
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
        <a href="{{route('product_details',['id'=>$product->id])}}">
            <p class="text-base text-center text-gray-900 font-bold">{{ucfirst($product->name)}}</p>
        </a>
      </div>
      <div class="flex flex-col md:flex-row justify-between items-center text-gray-900">
        <p class="text-sm text-blue-600">Ksh. {{number_format($product->price)}}</p>
        @if ($product->retail_price>$product->price)
            <del class="text-sm text-red-500">{{number_format($product->retail_price)}}</del>
        @else
        <p>......</p>
        @endif
          <button type="button" class="px-5 py-2 rounded-full hover:bg-blue-600 hover:text-white border-2 border-gray-900 focus:outline-none">
            <a href="{{route('addToCart', ['id'=>$product->id])}}">
                <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m5 11 4-7"/><path d="m19 11-4-7"/><path d="M2 11h20"/>
                    <path d="m3.5 11 1.6 7.4a2 2 0 0 0 2 1.6h9.8c.9 0 1.8-.7 2-1.6l1.7-7.4"/>
                    <path d="m9 11 1 9"/>
                    <path d="M4.5 15.5h15"/>
                    <path d="m15 11-1 9"/>
                </svg>
            </a>
          </button>
      </div>
    </div>
</div>