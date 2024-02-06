<!-- Modal -->
<div class="modal fade" id="cart-modal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"><small>{{__('Products in Cart')}}</small></h4>
      </div>
      <div class="modal-body">
        <table class="table cart-products">
          <thead>
            <tr>
              <th>Product</th>
              <th>Quantity</th>
              <th>Price</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($cart_products as $cart_product)
            <tr>
                  <td>{{$cart_product['item']->name}}</td>
                  <td>{{$product['qty']}}</td>
                  <td>${{number_format($product['price'])}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary close" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>