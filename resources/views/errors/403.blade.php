@extends('layouts.errors')
@section('content')
<section class="py-3 py-md-5 min-vh-100 d-flex justify-content-center align-items-center">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="text-center">
          <h2 class="d-flex justify-content-center align-items-center gap-2 mb-4">
            <span class="display-1 fw-bold">4</span>
            <span class="display-1 fw-bold">0</span>
            <span class="display-1 fw-bold">3</span>
          </h2>
          <h3 class="h2 mb-2">Oops! You're not authorized.</h3>
          <p class="mb-5">You dont have the authority to access this page.</p>
          <a class="btn bsb-btn-5xl btn-dark rounded-pill px-5 fs-6 m-0" href="{{route('welcome')}}" role="button">Back to Home</a>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection