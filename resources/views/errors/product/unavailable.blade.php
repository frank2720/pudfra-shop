@extends('layouts.errors')
@section('title')
    {{__('Product Unavailable')}}
@endsection
@section('page')
<section class="py-3 py-md-5 min-vh-100 d-flex justify-content-center align-items-center">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="text-center">
              <h2>Product nolonger available</h2>
              <a class="btn bsb-btn-5xl btn-dark rounded-pill px-5 fs-6 m-0" href="{{route('shop')}}" role="button">Check Other products</a>
            </div>
          </div>
        </div>
      </div>
</section>
@endsection