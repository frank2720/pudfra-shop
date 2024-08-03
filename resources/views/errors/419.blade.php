@extends('layouts.errors')
@section('title')
    {{__('Page Error-419')}}
@endsection
@section('page')
<section class="py-3 py-md-5 min-vh-100 d-flex justify-content-center align-items-center">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="text-center">
              <h2 class="d-flex justify-content-center align-items-center gap-2 mb-4">
                <h1 class="display-1 fw-bold">419</h1>
              </h2>
              <p>
                  {{$exception->getMessage()}}.
              </p>
              <a class="btn bsb-btn-5xl btn-dark rounded-pill px-5 fs-6 m-0" href="{{route('welcome')}}" role="button">Back to Home</a>
            </div>
          </div>
        </div>
      </div>
</section>
@endsection