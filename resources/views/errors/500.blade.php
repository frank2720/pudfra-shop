@extends('layouts.errors')
@section('page')
<section class="py-3 py-md-5 min-vh-100 d-flex justify-content-center align-items-center">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="text-center">
          <h2 class="d-flex justify-content-center align-items-center gap-2 mb-4">
            <span class="display-1 fw-bold">5</span>
            <span class="display-1 fw-bold">0</span>
            <span class="display-1 fw-bold">5</span>
          </h2>
          <h3 class="h2 mb-2">Oops! server error</h3><h2>{{$exception->getMessage()}}</h2>
          <p class="mb-5">We apologize for any inconvinience caused. Try again later</p>
          <a class="btn bsb-btn-5xl btn-dark rounded-pill px-5 fs-6 m-0" href="{{route('home')}}" role="button">Back to Home</a>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection