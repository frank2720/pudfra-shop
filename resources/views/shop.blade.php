@extends('layouts.main')
@section('content')
<main>
    <section class="section-products">
		<div class="container">
				<div class="row justify-content-center text-center">
						<div class="col-md-8 col-lg-6">
								<div class="header">
										<h2>Available Products</h2>
								</div>
						</div>
				</div>
				<div class="row">
                    @foreach ($products as $product)
                        <!-- Single Product -->
						<div class="col-md-6 col-lg-4 col-xl-3">
                            <div id="product" class="single-product">
                                    <div class="part-1"  style="background: url('{{Storage::url($product->img)}}');  background-repeat: no-repeat;background-position: center;background-size: cover;">
                                        @if ($product->retail_price > $product->price)
                                            <span class="discount">{{__(round((($product->retail_price-$product->price)/$product->retail_price)*100))}}% off</span>
                                        @endif
                                            <ul>
                                                    <li><a href="{{route('addToCart',['id'=>$product->id])}}"><i class="fas fa-shopping-cart"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-heart"></i></a></li>
                                            </ul>
                                    </div>
                                    <div class="part-2">
                                        <a href="{{route('product_details',['id'=>$product->id])}}">
                                            <h3 class="product-title">{{__(ucfirst(strtolower($product->name)))}}</h3>
                                            @if ($product->retail_price>$product->price)
                                                <h4 class="product-old-price">${{__(number_format($product->retail_price))}}</h4>
                                            @endif
                                            <h4 class="product-price">${{__(number_format($product->price))}}</h4>
                                        </a>
                                    </div>
                            </div>
                        </div>
                    @endforeach
                    {{$products->links()}}
				</div>
		</div>
</section>
</main>
@endsection