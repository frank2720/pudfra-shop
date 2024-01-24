@props(['product'])

<div class="justify-center p-10 bg-white shadow-md rounded-xl">
  <a href="{{route('product_details',['id'=>$product->id])}}">
      <img class="hover:grow hover:shadow-lg rounded-lg" src="{{Storage::url($product->img)}}">
  </a>
  <div class="pt-3 flex items-center justify-between">
      <p class="font-semibold">{{ucfirst($product->name)}}</p>
      <a href="{{route('addToCart',['id'=>$product->id])}}">
        <i class="fa-solid fa-cart-plus"></i>
      </a>
  </div>
  <p class="pt-1 text-gray-900">Ksh. {{number_format($product->price)}}</p>
  @if ($product->retail_price>$product->price)
      <del class="text-sm text-red-500 cursor-auto ml-2">{{number_format($product->retail_price)}}</del>
  @endif
</div>