<!-- add Modal HTML -->
<div id="addModal" aria-labelledby="addModalLabel" aria-hidden="true" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{route('products.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-header">						
                    <h4 class="modal-title">{{__('Add Product')}}</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">					
                    <div class="form-group">
                        <label>{{__('Product Name')}}</label>
                        <input class="form-control" type="text" name="name" required>
                    </div>
                    <div class="form-group">
                        <label>{{__('Product Price')}}</label>
                        <input class="form-control" type="number" min="0" name="price" required>
                    </div>
                    <div class="form-group">
                        <label>{{__('Retail Price')}}</label>
                        <input class="form-control" type="number" min="0" name="retail_price" required>
                    </div>
                    <div class="form-group">
                        <label>{{__('Description')}}</label>
                        <textarea class="form-control" type="text" name="description" required></textarea>
                    </div>
                    <div class="form-group">
                        <label>{{__('Image')}}</label>
                        <input type="file" name="img[]" class="form-control" multiple required>
                    </div>					
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <input type="submit" class="btn btn-success" value="Add">
                </div>
            </form>
        </div>
    </div>
</div>