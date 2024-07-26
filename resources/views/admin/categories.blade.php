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
				<th>Category</th>
			</tr>
		</thead>
		<tbody>
            @foreach ($categories as $category)
            <tr>
				<td>{{$category->category}}</td>

                <td>
                    <ul class="list-inline m-0">
                        <li class="list-inline-item">
                            <a href="{{route('admin.category.edit',['category'=>$category->id])}}"><i class='bx bx-edit-alt' title="edit"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="{{route('admin.category.destroy',['category'=>$category->id])}}" class="text-danger"><i class='bx bx-trash' title="delete"></i></a>
                        </li>
                    </ul>
                </td>
			</tr>
            @endforeach
		</tbody>
	</table>
</div>
@endsection