<!-- add Modal HTML -->
<div id="addModal" aria-labelledby="addModalLabel" aria-hidden="true" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{route('admin.products.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-header">						
                    <h4 class="modal-title">{{__('Add Product')}}</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">					
                    <div class="form-group">
                        <label for="p_name">{{__('Product Name')}}</label>
                        <input class="form-control" type="text" id="p_name" name="name" required autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="p_price">{{__('Product Price')}}</label>
                        <input class="form-control" id="p_price" type="number" min="0" name="price" required autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="o_price">{{__('Retail Price')}}</label>
                        <input class="form-control" id="o_price" type="number" min="0" name="retail_price" required autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="p_desc">{{__('Description')}}</label>
                        <textarea class="form-control" id="p_desc" type="text" name="description" required autocomplete="off"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="p_img">{{__('Image')}}</label>
                        <input type="file" id="p_img" name="img[]" class="form-control" multiple required autocomplete="off">
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