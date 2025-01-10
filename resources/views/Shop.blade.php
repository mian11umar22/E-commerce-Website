@include('header')

<div class="ml-16 text-4xl mt-12 font-extrabold text-gray-800 tracking-wide underline decoration-blue-500 decoration-2 mb-8">Shop</div>


@if(session('status'))
    <div class="bg-green-50 border border-green-300 text-green-800 px-6 py-4 rounded-lg shadow-md mx-16 mb-8">
        <p class="font-bold text-lg">{{ session('status') }}</p>
    </div>
@endif

<div class="flex flex-wrap gap-8 mt-5 ml-8 mr-16">
    @foreach ($shop as $item)
        <!-- Example Product: Repeat this block for each product -->
        <div class="border p-4 rounded-lg shadow-lg bg-white w-64 transition-transform transform hover:scale-105 hover:shadow-2xl hover:bg-gray-50">
            <a href="{{ route('singleProduct', $item->id) }}" class="text-blue-500 hover:underline">
                <img src="{{ asset('storage/'.$item->ProductImage) }}" alt="{{ $item->ProductName }}" class="w-full h-40 object-cover rounded-lg mb-4">
                <div class="text-center font-semibold text-xl text-gray-900 hover:text-blue-600">{{ $item->ProductName }}</div>
            </a>
            <p class="text-gray-600 mt-2">Price: <span class="font-bold text-gray-800 text-lg">${{ $item->ProductPrice }}</span></p>
            <p class="text-red-600 mt-1">Sale Price: <span class="font-bold text-lg">${{ $item->SalePrice }}</span></p>
            
            <form method="post" action="{{ route('addtocart', $item->id) }}" class="mt-4 flex justify-center">
                @csrf
                <button type="submit" name="add" class="bg-gradient-to-r from-blue-500 to-purple-500 text-white py-2 px-6 rounded-full hover:from-purple-500 hover:to-blue-500 shadow-lg transition-transform transform hover:scale-110">Add to Cart</button>
            </form>
        </div>
        <!-- End Example Product -->
    @endforeach
</div>

@include('footer')
