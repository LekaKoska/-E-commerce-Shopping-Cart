<div class="max-w-6xl mx-auto px-4 py-6">

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($products as $product)
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-5 hover:shadow-md transition">

                <h3 class="text-lg font-semibold text-gray-800 mb-2">
                    {{ $product->name }}
                </h3>

                <p class="text-gray-600 mb-1">
                    <span class="font-medium">Price:</span>
                    <span class="text-gray-900">{{ number_format($product->price, 2) }} €</span>
                </p>

                <p class="text-gray-600">
                    <span class="font-medium">On stock:</span>

                    @if($product->stock_quantity > 0)
                        <span class="inline-block ml-2 px-2 py-0.5 text-sm rounded-full bg-green-100 text-green-700">
                            {{ $product->stock_quantity }}
                        </span>
                    @else
                        <span class="inline-block ml-2 px-2 py-0.5 text-sm rounded-full bg-red-100 text-red-700">
                           Sold out
                        </span>
                    @endif
                </p>
                <button wire:click="addToCart"
                    class="bg-blue-600 text-white px-5 py-2 rounded-lg font-medium
           hover:bg-blue-700 transition duration-200">
                    Add to cart
                </button>


            </div>
        @endforeach
    </div>

    <div class="mt-8">
        {{ $products->links() }}
    </div>

</div>

