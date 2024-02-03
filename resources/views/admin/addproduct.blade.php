<div id="addproductModal" aria-hidden="true" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">
                    {{__('Add Product')}}
                </h4>
            </div>
            <form action="{{route('products.store')}}" method="POST" id="productform" class="form-horizontal"  enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">Product name</label>
                        <input class="form-control" type="text" name="name" id="name">
                    </div>
                    <div class="form-group">
                        <label for="price">Product price:</label>
                        <input class="form-control" type="number" min="0" name="price" id="price">
                    </div>
                    <div class="form-group">
                        <label for="retail">Retail price:</label>
                        <input class="form-control" type="number" min="0" name="retail_price" id="retail">
                    </div>
                    <div class="form-group">
                        <label for="description">Description:</label>
                        <textarea class="form-control" type="text" name="description" id="description"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="file">Product Image:</label>
                        <input class="form-control" id="file" type="file" name="img">
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" value="Save">
                </div>
            </form>
        </div>
    </div>
</div>