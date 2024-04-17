@extends('layouts.main')
@section('content')
<!--cart section-->
<div class="kalles-section cart_page_section container mt__60">
<div class="frm_cart_page check-out_calculator">
<div class="row">
    <div class="col-12 col-md-6 col-lg-7">
        <div class="checkout-section">
            <h3 class="checkout-section__title">Billing details</h3>
            <div class="row">
                <p class="checkout-section__field col-12">
                    <label for="phone">Phone Number</label>
                    <input type="text" id="phone" placeholder="Enter phone number for payment"/>
                </p>
            </div>
        </div>
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
                            <div class="checkout-payment">
                                <button type="button" class="button button_primary btn checkout-payment__btn-place-order">Place order</button>
                            </div>
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