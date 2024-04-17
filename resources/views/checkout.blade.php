@extends('layouts.main')
@section('content')
<!--cart section-->
<div class="kalles-section cart_page_section container mt__60">
<div class="frm_cart_page check-out_calculator">
<div class="row">
    <div class="col-12 col-md-6 col-lg-7">
        <div class="checkout-section">
            <div class="row">
                <p class="checkout-section__field col-12">
                    <div class="order-review__wrapper">
                        <h3 class="order-review__title">Your order</h3>
                        <div class="checkout-order-review">
                            <table class="checkout-review-order-table">
                                <thead>
                                <tr>
                                    <th class="product-name">Product</th>
                                    <th class="product-total">Subtotal</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cart_products as $product)
                                    <tr class="cart_item">
                                        <td class="product-name">{{$product['item']->name}}<strong class="product-quantity">× {{$product['qty']}}</strong>
                                        </td>
                                        <td class="product-total"><span class="cart_price">Ksh {{number_format($product['item']->price,2,'.',',')}}</span></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                <tr class="cart-subtotal cart_item">
                                    <th>Subtotal</th>
                                    <td><span class="cart_price">Ksh {{number_format($totalPrice,2,'.',',')}}</span></td>
                                </tr>
                                <tr class="cart_item">
                                    <th>Shipping</th>
                                    <td><span class="cart_price"></span></td>
                                </tr>
                                <tr class="order-total cart_item">
                                    <th>Total</th>
                                    <td><strong><span class="cart_price amount">Ksh {{number_format($totalPrice,2,'.',',')}}</span></strong></td>
                                </tr>
                                </tfoot>
                            </table>
                            @if ($totalPrice == 0)
                            <div class="empty tc mt__40"><i class="las la-shopping-bag pr mb__10"></i>
                                <p>Your cart is empty.</p>
                                <p class="return-to-shop mb__15">
                                    <a class="button button_primary tu js_add_ld" href="{{route('shop')}}">Return To Shop</a>
                                </p>
                            </div>
                            @else
                                <div class="checkout-payment">
                                    <h3 class="checkout-section__title">Billing details</h3>
                                    <form action="{{route('stkpush')}}" method="POST" id="payform">
                                        @csrf
                                        <p class="checkout-section__field col-12">
                                            <label for="no.">Phone Number</label>
                                            <input type="text" id="no." name="phone" required placeholder="Enter phone number for payment" class="mb-3"/>
                                            @error('phone')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <button type="submit" class="button button_primary btn checkout-payment__btn-place-order">Place order</button>
                                        </p>
                                    </form>
                                </div>
                            @endif
                        </div>
                    </div>
                </p>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<!--end cart section-->
@endsection