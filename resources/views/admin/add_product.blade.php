@extends('admin.main')
@section('content')
  <!-- strat wrapper -->
<div class="h-screen flex flex-row flex-wrap">
  @include('admin.sidebar')
  <div class="bg-gray-300 flex-1 p-6 md:mt-16">
    <div class="container">
      <form action="{{route('products.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="col-25">
            <label for="product">product name</label>
          </div>
          <div class="col-75">
            <input type="text" required name="name" id="product">
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label for="price">product price</label>
          </div>
          <div class="col-75">
            <input type="number" min="0" required name="price" id="price">
          </div>
        </div>
       <div class="row">
        <div class="col-25">
          <label for="retail">retail price</label>
        </div>
        <div class="col-75">
          <input type="number" min="0" required name="retail_price" id="retail">
        </div>
       </div>
        <div class="row">
          <div class="col-25">
            <label for="reviews">reviews</label>
          </div>
          <div class="col-75">
            <input type="number" min="0" name="reviews" id="reviews">
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label for="desc">description</label>
          </div>
          <div class="col-75">
            <textarea required name="description" id="desc" cols="30" rows="8"></textarea>
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label for="file">image</label>
          </div>
          <div class="col-75">
            <label for="file" class="dropzone">
              <div class="flex flex-col pt-5 pb-6 items-center justify-center">
                <svg class="w-8 h-8 mb-4 text-gray-700 dark:text-gray-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                </svg>
                <p class="mb-2 ml-6 text-sm text-gray-700 dark:text-gray-700"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                <p class="text-xs ml-6 text-gray-700 dark:text-gray-700">SVG, PNG, JPG or GIF</p>
              </div>
              <input id="file" type="file" name="img" />
            </label>
          </div>
        </div>
        <div class="row mt-3">
          <input type="submit" value="add product">
        </div>
      </form>
    </div>
  </div>
</div>
<!-- end wrapper -->

@endsection
