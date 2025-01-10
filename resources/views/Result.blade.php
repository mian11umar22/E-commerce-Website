@include('header')

<div class="container mx-auto px-6 py-12">
    <h1 class="text-2xl font-bold mb-4">Search Results for "{{ $query }}"</h1>

    @if($products->isEmpty())
        <p class="text-gray-500">No products found matching your search.</p>
    @else
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($products as $product)
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="{{ asset('storage/'.$product->ProductImage) }}" alt="{{ $product->ProductName }}" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h2 class="text-lg font-semibold text-gray-800">{{ $product->ProductName }}</h2>
                        <p class="text-gray-600">{{ Str::limit($product->ProductDescription, 80) }}</p>
                        <p class="text-blue-600 font-bold mt-2">${{ number_format($product->ProductPrice, 2) }}</p>
                        <a href="{{ route('singleProduct', $product->id) }}" class="inline-block mt-4 px-6 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 transition-transform transform hover:-translate-y-1">View Details</a>
                        <form action="{{ route('addtocart', $product->id) }}" method="post">
                            @csrf
                        <button class="inline-block mt-4 ml-2  px-6 py-2 bg-red-500 text-white rounded-md ">Add To Cart</button></form>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
@include('footer')
