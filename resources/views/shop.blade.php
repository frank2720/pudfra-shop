<x-app-layout>
@include('layouts.header')

<!-- shop wrapper -->
<div class="md:container md:mx-auto px-4 pt-4 pb-16 items-center">
    <!-- products -->
    <div class="col-span-3">
        <div class="flex items-center mb-4">
            <form action="" method="POST">
                <select name="sort" id="sort" class="w-44 text-sm text-gray-600 py-3 px-4 border-gray-300 shadow-sm rounded focus:ring-blue-600 focus:border-blue-600">
                    <option value="">Default sorting</option>
                    <option value="price-low-to-high">Price low to high</option>
                    <option value="price-high-to-low">Price high to low</option>
                    <option value="latest">Latest product</option>
                </select>
            </form>

            <div class="flex gap-2 ml-auto">
                <div
                    class="border border-blue-600 w-10 h-9 flex items-center justify-center text-white bg-blue-600 rounded cursor-pointer">
                    <i class="fa-solid fa-grip-vertical"></i>
                </div>
                <div
                    class="border border-gray-300 w-10 h-9 flex items-center justify-center text-gray-600 rounded cursor-pointer">
                    <i class="fa-solid fa-list"></i>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            @foreach ($products as $product)
                <x-product-card :product="$product"/>
            @endforeach
        </div>
        <div class="mt-3">
            {{$products->links()}}
        </div>
    </div>
</div>
<!-- ./shop wrapper -->
</x-app-layout>