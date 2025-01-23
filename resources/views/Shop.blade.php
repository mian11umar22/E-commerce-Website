<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <style>
        body {
            transition: background-color 0.3s, color 0.3s;
            background-color: white;
            color: black;
        }
    </style>
</head>


    @include('header')

    <div class="ml-4 md:ml-16 text-3xl md:text-4xl mt-12 font-extrabold text-gray-800 tracking-wide underline decoration-blue-500 decoration-2 mb-8">Shop</div>

    @if(session('status'))
        <div class="bg-green-50 border border-green-300 text-green-800 px-4 md:px-6 py-4 rounded-lg shadow-md mx-4 md:mx-16 mb-8">
            <p class="font-bold text-lg">{{ session('status') }}</p>
        </div>
    @endif

    <div class="flex flex-wrap justify-center gap-8 mt-5 px-4 md:px-16">
        @foreach ($shop as $item)
            <div class="border p-4 rounded-lg shadow-lg bg-white w-full sm:w-64 transition-transform transform hover:scale-105 hover:shadow-2xl hover:bg-gray-50">
                <a href="{{ route('singleProduct', $item->id) }}" class="text-blue-500 hover:underline">
                    <img src="{{ asset('storage/'.$item->ProductImage) }}" alt="{{ $item->ProductName }}" class="w-full h-40 object-cover rounded-lg mb-4">
                    <div class="text-center font-semibold text-lg md:text-xl text-gray-900 hover:text-blue-600">{{ $item->ProductName }}</div>
                </a>
                <p class="text-gray-600 mt-2">Price: <span class="font-bold text-gray-800 text-lg">${{ $item->ProductPrice }}</span></p>
                <p class="text-red-600 mt-1">Sale Price: <span class="font-bold text-lg">${{ $item->SalePrice }}</span></p>
                <form method="post" action="{{ route('addtocart', $item->id) }}" class="mt-4 flex justify-center">
                    @csrf
                    <button type="submit" name="add" class="bg-gradient-to-r from-blue-500 to-purple-500 text-white py-2 px-6 rounded-full hover:from-purple-500 hover:to-blue-500 shadow-lg transition-transform transform hover:scale-110">Add to Cart</button>
                </form>
            </div>
        @endforeach
    </div>

    @include('footer')

    <script>
        let menuBtn = document.querySelector('#menu-btn');
        let mobileMenu = document.querySelector('#mobile-menu');

        menuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>

