@props(['product'])
<div>
  <a href="{{route('product_details',['id'=>$product->id])}}">
    <img class="hover:grow hover:shadow-lg rounded-lg h-48 w-64" src="{{Storage::url($product->img)}}">
  </a>
  <div class="pt-3 flex items-center justify-between">
    <p class="font-semibold">{{ucfirst($product->name)}}</p>
    <a href="{{route('addToCart',['id'=>$product->id])}}">
      <i class="h-6 w-6 text-gray-500 hover:text-black fa-solid fa-cart-plus"></i>
    </a>
  </div>
  <p class="pt-1 text-gray-900">Ksh. {{number_format($product->price)}}</p>
</div>