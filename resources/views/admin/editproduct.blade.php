<!-- Edit Modal HTML -->
<div id="editModal" aria-labelledby="editModalLabel" aria-hidden="true" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="" method="POST" enctype="multipart/form-data" id="productform">
                @csrf
                @method('patch')
                <div class="modal-header">						
                    <h4 class="modal-title">{{__('Update Product')}}</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">					
                    <div class="form-group">
                        <label>{{__('Product Name')}}</label>
                        <input class="form-control" type="text" name="name" value="{{old('name')}}">
                    </div>
                    <div class="form-group">
                        <label>{{__('Product Price')}}</label>
                        <input class="form-control" type="number" min="0" name="price" value="{{old('price')}}">
                    </div>
                    <div class="form-group">
                        <label>{{__('Retail Price')}}</label>
                        <input class="form-control" type="number" min="0" name="retail_price" value="{{old('retail_price')}}">
                    </div>
                    <div class="form-group">
                        <label>{{__('Description')}}</label>
                        <textarea class="form-control" type="text" name="description">{{old('description')}}</textarea>
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