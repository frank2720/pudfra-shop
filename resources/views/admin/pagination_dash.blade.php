<div class="table-title">
    <div class="row">
        <div class="col-sm-6">
            <h2>Manage <b>Products</b></h2>
        </div>
        <div class="col-sm-6">
            <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Product</span></a>
            <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Delete</span></a>						
        </div>
    </div>
</div>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>
                <span class="custom-checkbox">
                    <input type="checkbox" id="selectAll">
                    <label for="selectAll"></label>
                </span>
            </th>
            <th>Image</th>
            <th>Name</th>
            <th>Price</th>
            <th>Old price</th>
            <th>Discount</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
        <tr>
            <td>
                <span class="custom-checkbox">
                    <input type="checkbox" id="checkbox1" name="options[]" value="1">
                    <label for="checkbox1"></label>
                </span>
            </td>
            <td><img src="{{Storage::url($product->img)}}" alt="" style="height: 30px"></td>
            <td>{{$product->name}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->retail_price}}</td>
            @if ($product->retail_price>$product->price)
            <td>{{__(round((($product->retail_price-$product->price)/$product->retail_price)*100))}}%</td>
            @else
            <td>{{__('--')}} </td>
            @endif
            <td>
                <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<div class="clearfix">
    {{$products->links()}}
</div>