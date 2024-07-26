@extends('admin.main')
@section('title')
    {{__('List of customers')}}
@endsection
@section('maintitle')
    {{__('Ecommerce')}}
@endsection
@section('pagetitle')
    {{__('Customers')}}
@endsection
@section('content')
<div class="table-responsive">
	<table class="table table-bordered table-striped border-primary">
		<thead>
			<tr class="fw-bold fs-6 text-gray-800">
				<th>Name</th>
				<th>Email</th>
				<th>Customer type</th>
				<th>Address</th>
			</tr>
		</thead>
		<tbody>
            @foreach ($customers as $customer)
            <tr>
				<td>{{$customer->name}}</td>
				<td>{{$customer->email}}</td>
                @php
                    $customerType = $customer->type == 'B'?'Business':'Individual';
                @endphp
				<td>{{$customerType}}</td>
				<td>{{$customer->address}}</td>
			</tr>
            @endforeach
		</tbody>
	</table>
</div>
<div class="clearfix">
    {{$customers->links()}}
</div>
@endsection
