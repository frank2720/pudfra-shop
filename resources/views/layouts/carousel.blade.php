<div class="body">
  <div class="gallery">
    @foreach ($recent_products as $product)
    <img src="{{Storage::url($product->img)}}">
    @endforeach
  </div>
</div>
