@extends('layouts.main')
@section('title')
    {{__('Shopping checkout')}}
@endsection
@section('content')
<!--cart section-->
<div class="kalles-section cart_page_section container mt__60">
    <div class=" container-fluid my-5 ">
        <div class="row justify-content-center ">
            <div class="col-xl-10">
                <div class="card shadow-lg ">
                    <div class="row p-2 mt-3 justify-content-between mx-sm-2">
                        <div class="col">
                            <p class="text-muted space mb-0 shop"> Shop No.78618K</p> 
                            <p class="text-muted space mb-0 shop">Store Locator</p>   
                        </div>
                        <div class="col">
                            <div class="row justify-content-start ">
                                <div class="col">
                                    <img class="irc_mi img-fluid cursor-pointer" src="{{Vite::asset('resources/assets/logo/logo.png')}}"  width="70" height="70" >
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row  mx-auto justify-content-center text-center">
                        <div class="col-12 mt-3 ">
                            <nav aria-label="breadcrumb" class="second ">
                                <ol class="breadcrumb indigo lighten-6 first  ">
                                    <li class="breadcrumb-item font-weight-bold "><a class="black-text text-uppercase " href="#"><span class="mr-md-3 mr-1">BACK TO SHOP</span></a><i class="fa fa-angle-double-right " aria-hidden="true"></i></li>
                                    <li class="breadcrumb-item font-weight-bold"><a class="black-text text-uppercase" href="#"><span class="mr-md-3 mr-1">SHOPPING BAG</span></a><i class="fa fa-angle-double-right text-uppercase " aria-hidden="true"></i></li>
                                    <li class="breadcrumb-item font-weight-bold"><a class="black-text text-uppercase active-2" href="#"><span class="mr-md-3 mr-1">CHECKOUT</span></a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                
                    <div class="row justify-content-around">
                        <div class="col-md-5">
                            <div class="card border-0">
                                <div class="card-header pb-0">
                                    <h2 class="card-title space ">Checkout</h2>
                                    <p class="card-text text-muted mt-4  space">SHIPPING DETAILS</p>
                                    <hr class="my-0">
                                </div>
                                <div class="card-body">
                                    <div class="row justify-content-between">
                                        <div class="col-auto mt-0"><p><b>Town to be delivered</b></p></div>
                                        <div class="col-auto"><p><b>email@gmail.com</b> </p></div>
                                    </div>
                                    <div class="row mt-4">
                                        <p class="text-muted">PAYMENT DETAILS</p>
                                        <form action="{{route('stkpush')}}" id="payform" method="POST">
                                            @csrf
                                            <p class="checkout-section__field">
                                                <label for="no." class="small text-muted mb-1">PHONE NUMBER</label>
                                                <input type="text" id="no." name="phone" required placeholder="Enter phone number for payment" class="mb-3"/>
                                                <button type="submit" class="button button_primary btn checkout-payment__btn-place-order">Place order</button>
                                            </p>
                                        </form>
                                    </div> 
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="card border-0 ">
                                <div class="card-header card-2">
                                    <p class="card-text text-muted mt-md-4  mb-2 space">YOUR ORDER <span class=" small text-muted ml-2 cursor-pointer">EDIT SHOPPING BAG</span> </p>
                                    <hr class="my-2">
                                </div>
                                <div class="card-body pt-2">
                                    @foreach ($cart_products as $product)
                                    <div class="row  justify-content-between">
                                        <div class="col-auto col-md-7">
                                            <div class="media flex-column flex-sm-row">
                                                <img class=" img-fluid mx-2" src="{{Storage::url($product['item']->images[0]->url??$product['item']->images[1]->url??null)}}" width="62" height="62">
                                                <div class="media-body  my-auto">
                                                    <div class="row ">
                                                        <div class="col-auto"><p class="mb-0"><b>{{$product['item']->name}}</b></p></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" pl-0 flex-sm-col col-auto  my-auto"> <p class="boxed-1">{{$product['qty']}}</p></div>
                                        <div class=" pl-0 flex-sm-col col-auto  my-auto "><p><b>Ksh {{number_format($product['item']->price,2,'.',',')}}</b></p></div>
                                    </div>
                                    <hr class="my-2">
                                    @endforeach

                                    
                                    <div class="row ">
                                        <div class="col">
                                            <div class="row justify-content-between">
                                                <div class="col-4"><p class="mb-1"><b>Subtotal</b></p></div>
                                                <div class="flex-sm-col col-auto"><p class="mb-1"><b>Ksh {{number_format($totalPrice,2,'.',',')}}</b></p></div>
                                            </div>
                                            <div class="row justify-content-between">
                                                <div class="col"><p class="mb-1"><b>Shipping</b></p></div>
                                                <div class="flex-sm-col col-auto"><p class="mb-1"><b>0</b></p></div>
                                            </div>
                                            <div class="row justify-content-between">
                                                <div class="col-4"><p ><b>Total</b></p></div>
                                                <div class="flex-sm-col col-auto"><p  class="mb-1"><b>Ksh {{number_format($totalPrice,2,'.',',')}}</b></p> </div>
                                            </div><hr class="my-0">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end cart section-->
@endsection