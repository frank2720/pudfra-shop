@extends('layouts.errors')
@section('title')
    {{__('Maintainance')}}
@endsection
@section('page')
<section class="py-3 py-md-5 min-vh-100 d-flex justify-content-center align-items-center">
    <div class="container">
        <div class="row">
        <div class="col-12">
            <div class="text-center">
            <h2 class="d-flex justify-content-center align-items-center gap-2 mb-4">
                <h1 class="display-1 fw-bold">503</h1>
            </h2>
            <h2>{{$exception->getMessage()}}</h2>
            </div>
        </div>
        </div>
    </div>
</section>
@endsection