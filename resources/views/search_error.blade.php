<div class="container-fluid  mt-100">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Search result</h5>
                </div>
                <div class="card-body cart">
                    <div class="col-sm-12 empty-cart-cls text-center">
                        <img src="{{asset('images/not-found.png')}}" width="130" height="130" class="img-fluid mb-4 mr-3">
                        <h3><strong class="text-danger">Nothing found</strong></h3>
                        <h4>The product you are looking for is not available in our store</h4>
                        <a href="{{route('shop')}}" class="btn btn-primary cart-btn-transform m-3" data-abc="true">continue shopping</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>