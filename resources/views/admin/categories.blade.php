@extends('admin.main')
@section('title')
    {{__('List of categories')}}
@endsection
@section('maintitle')
    {{__('Ecommerce')}}
@endsection
@section('pagetitle')
    {{__('Categories')}}
@endsection
@section('content')
<div class="table-responsive">
	<table class="table table-bordered table-striped border-primary">
		<thead>
			<tr class="fw-bold fs-6 text-gray-800">
				<th>Number</th>
				<th>Category</th>
			</tr>
		</thead>
		<tbody>
            @foreach ($categories as $category)
            <tr>
				<td>{{$category->id}}</td>
				<td>{{$category->category}}</td>
			</tr>
            @endforeach
		</tbody>
	</table>
</div>
@endsection