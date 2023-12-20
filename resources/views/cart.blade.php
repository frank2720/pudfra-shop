<x-app-layout>
<section class="sectionSize bg-secondary pt-24">
  <h2 class="secondaryTitle bg-underline3 bg-100%">{{__('Items in the Cart')}}</h2>
  <div class="mx-auto max-w-5xl justify-center px-6 md:flex md:space-x-6 xl:px-0">
    <div class="rounded-lg md:w-2/3">
      @if (session()->has('cart') && number_format($totalPrice)>0)
      @foreach ($products as $product)
      <x-cart-products :product="$product"/>
      @endforeach
      @else
      <div class="justify-between mb-6 rounded-lg bg-white p-6 shadow-md sm:flex sm:justify-start">
        <div class="sm:ml-4 sm:flex sm:w-full sm:justify-between">
          <div class="mt-4 flex justify-between im sm:space-y-6 sm:mt-0 sm:block sm:space-x-6">
            <div class="">
              <p class="text-red-600">{{__('You have no products in the cart')}}</p>
            </div>
          </div>
        </div>
      </div>
            @endif
          </div>
          <!-- Sub total -->
          @if (session()->has('cart') && number_format($totalPrice)>0)
              <div class="mt-6 mb-6 h-full rounded-lg border bg-white p-6 shadow-md md:mt-0 md:w-1/3">
                <div class="mb-2 flex justify-between">
                  <p class="text-gray-700">Subtotal</p>
                  <p class="text-gray-700">Ksh {{number_format($totalPrice)}}</p>
                </div>
                <div class="flex justify-between">
                  <p class="text-gray-700">Shipping</p>
                  <p class="text-gray-700">...</p>
                </div>
                <hr class="my-4" />
                <div class="flex justify-between">
                  <p class="text-lg font-bold">Total</p>
                  <div class="">
                    @if (session()->has('cart'))
                      <p class="mb-1 text-lg font-bold">Ksh {{number_format($totalPrice)}}</p>
                    @else
                      <p class="mb-1 text-lg font-bold">Ksh {{__(0.00)}}</p>
                    @endif
                    <p class="text-sm text-gray-700">including VAT</p>
                  </div>
                </div>
                <button class="mt-6 w-full rounded-md bg-blue-500 py-1.5 font-medium text-blue-50 hover:bg-blue-600">Check out</button>
              </div>
            @endif
        </div>
</section>
</x-app-layout>
