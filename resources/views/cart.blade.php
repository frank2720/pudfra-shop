<!-- Modal -->
<div class="modal fade" id="cart-modal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content cart-products">
      <div class="modal-header">
        <h4 class="modal-title"><small>{{__('Products in Cart')}}</small></h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
                    <td class="align-middle inline p-4">
                      <div class="input-group input-size">
                        <input type="button" value="-" class="button-minus" data-decreased-id="{{$cart_product['item']->id}}">
                        <input type="number" class="form-control text-center" style="background: rgb(246, 246, 247)" disabled value="{{$cart_product['qty']}}">
                        <input type="button" value="+" class="button-plus" data-incresed-id="{{$cart_product['item']->id}}">
                      </div>
                    </td>
                    <td>Ksh {{number_format($cart_product['price'])}}</td>
                    <td>
                      <a href="#" class="shop-tooltip float-none text-danger remove-product" data-productremoved-id="{{$cart_product['item']->id}}">
                        <i class="fas fa-trash-alt"></i>
                      </a>
                    </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          <table class="table table-bordered m-0">
            <thead>
              <th>Total Price</th>
              <th>Ksh {{number_format($totalPrice)}}</th>
            </thead>
          </table>
        @else
        <p class="text-center text-danger">{{__('You have no products in the cart')}}</p>
        @endif
        
      </div>
        @if (session()->has('cart') && $totalPrice>0)
        <form action="{{route('stkpush')}}" method="POST" id="payform">
          @csrf
          <div class="modal-footer bg-info-subtle">
            <input type="text" class="form-control" name="phone" placeholder="Enter phone number here">
            <button type="submit" class="btn btn-primary checkout">CheckOut</button>
          </div>
        </form>
        @endif
    </div>
  </div>
</div>