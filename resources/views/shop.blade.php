<x-app-layout>
<section class="sectionSize bg-secondary">
    <!-- products -->
    <div class="col-span-3">
        <div class="mx-auto flex items-center flex-wrap pt-24 pb-12">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                @foreach ($products as $product)
                <x-product-card :product="$product"/>
                @endforeach
            </div>
        </div>
        <div class="mt-3">
            {{$products->links()}}
        </div>
    </div>
</section>
</x-app-layout>