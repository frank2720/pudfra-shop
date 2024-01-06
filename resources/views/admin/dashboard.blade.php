@extends('admin.main')
@section('content')
  <!-- strat wrapper -->
<div class="h-screen flex flex-row flex-wrap">
  @include('admin.sidebar')
  <div class="bg-gray-300 flex-1 p-6 md:mt-16">
    @include('admin.general_report')
  </div>
</div>
<!-- end wrapper -->

@endsection
