<!-- Modal -->
<div class="modal fade" id="cart-modal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content cart-products">
      <div class="modal-header">
        <h4 class="modal-title"><small>{{__('Products in Cart')}}</small></h4>
      </div>
      <div class="modal-body table-responsive">
        @if (session()->has('cart') && $totalPrice>0)
          <table class="table table-bordered m-0">
            <thead>
              <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($cart_products as $cart_product)
              <tr>
                    <td>
                      <img src="{{Storage::url($cart_product['item']->img)}}" alt="product-image" class="d-block ui-w-40 ui-bordered">
                      {{$cart_product['item']->name}}
                    </td>
                    <td class="align-middle p-4">
                      <input type="number" class="form-control text-center input-size" value="{{$cart_product['qty']}}">
                    </td>
                    <td>${{number_format($cart_product['price'])}}</td>
                    <td>
                      <a href="#" class="shop-tooltip float-none text-danger remove-product" data-productremoved-id="{{$cart_product['item']->id}}">
                        <i class="fas fa-trash-alt"></i>
                      </a>
                    </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        @else
        <p class="text-center text-danger">{{__('You have no products in the cart')}}</p>
        @endif
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary close" data-dismiss="modal">Continue shopping</button>
        <button type="button" class="btn btn-primary">CheckOut</button>
      </div>
    </div>
  </div>
</div>