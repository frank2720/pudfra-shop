@extends('layouts.main')
@section('content')
<main>
    @include('layouts.carousel')
    <div class="container">
        <h2 class="mt-4 mb-4 text-center">{{__('Featured Products')}}</h2>
        <section>
            <div class="text-center">
                <div class="row">
                    @foreach ($recent_products as $product)
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light">
                                    <img src="{{Storage::url($product->img)}}" alt="" class="w-100 card-img">
                                    <a href="{{route('product_details',['id'=>$product->id])}}">
                                        <div class="mask">
                                            <div class="d-flex justify-content-start align-items-end h-100">
                                                @if ($product->retail_price > $product->price)
                                                    <h5>
                                                        <span class="badge sale-badge ms-2">
                                                           {{__(round(($product->price/$product->retail_price)*100-100))}} % 
                                                        </span>
                                                    </h5>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="hover-overlay">
                                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                        </div>
                                    </a>
                                </div>
                                <div class="card-body">
                                    <a href="{{route('product_details',['id'=>$product->id])}}" class="text-reset">
                                      <h5 class="card-title mb-2"><small>{{__(ucfirst(strtolower($product->name)))}}</small></h5>
                                    </a>
                                    @if ($product->retail_price > $product->price)
                                        <h6 class="mb-3 price">
                                            <s>{{__(number_format($product->retail_price))}}</s>
                                            <strong class="ms-2 sale"><small>Ksh. {{__(number_format($product->price))}}</small></strong>
                                        </h6>
                                    @else
                                        <h6 class="mb-3 price"><small>Ksh {{__(number_format($product->price))}}</small></h6>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>
</main>
@endsection