@include('header')

<body class=" light bg-gray-100">

    <div class="container mx-auto mt-12 flex justify-center items-center">
        <div class="max-w-2xl w-full bg-white shadow-lg rounded-lg overflow-hidden">
            <!-- Header Section -->
@if(session('status'))
    <div class="bg-green-50 border border-green-300 text-green-800 px-6 py-4 rounded-lg shadow-md mx-16 mb-8">
        <p class="font-bold text-lg">{{ session('status') }}</p>
    </div>
@endif
            <div class="p-6">
                <h2 class="text-3xl font-bold mb-4">{{$single->ProductName}}</h2>
            </div>

            <!-- Image Section -->
            <div>
                <img src="{{ asset('storage/'.$single->ProductImage) }}" alt="Product Name" class="w-full h-64 object-cover">
            </div>

            <!-- Details Section -->
            <div class="p-6">
                <!-- Pricing -->
                <div class="mb-4">
                    <p class="text-gray-700 text-lg">Price: <span class="font-bold text-gray-900">{{ $single->ProductPrice }}</span></p>
                </div>

                <!-- Features -->
                <p class="text-gray-600 text-sm mb-6 leading-relaxed">
                    {{ $single->ProductDescription }}
                </p>

                <!-- Call to Action -->
                <form method="post" action="{{ route('addtocart', $single->id) }}" class="mt-4 flex justify-center">
                    @csrf
                    <button type="submit" name="add" class="bg-gradient-to-r from-blue-500 to-purple-500 text-white py-2 px-6 rounded-full hover:from-purple-500 hover:to-blue-500 shadow-lg transition-transform transform hover:scale-110">Add to Cart</button>
                </form>
            </div>
        </div>
    </div>
@include('footer')