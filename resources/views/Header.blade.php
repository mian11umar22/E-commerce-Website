<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <style>
        body.dark {
            background-color: #1a202c;
            color: white;
        }

        body.light {
            background-color: white;
            color: black;
        }

        #mobile-search-container {
            display: none;
            position: absolute;
            top: 60px;
            left: 0;
            width: 100%;
            background-color: white;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            padding: 10px;
        }
    </style>
</head>

<body class="light">
    <header id="site-header" class="relative pb-16 light-mode">
        <div class="mx-auto px-6 lg:px-16">
            <div class="flex justify-between items-center py-6">
                <div class="flex items-center space-x-4">
                    <h1 class="font-bold text-4xl text-blue-700">WooCommerce</h1>
                    <span class="text-sm text-gray-500 italic hidden md:inline">Your one-stop shop!</span>
                </div>
                <div class="flex items-center space-x-4">
                    <button id="search-btn" class="md:hidden text-2xl">
                        <i class="fas fa-search"></i>
                    </button>
                    <button id="menu-btn" class="md:hidden text-2xl">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
            </div>
            <div id="mobile-search-container">
                <form role="search" method="get" action="{{ route('search') }}" class="flex items-center w-full">
                    <input type="search" id="woocommerce-product-search-field-0" class="search-field px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 w-full" placeholder="Search products..." name="query" value="{{ request('query') }}">
                    <button type="submit" value="Search" class="ml-2 px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 transition-transform transform hover:-translate-y-1 focus:outline-none focus:ring-2 focus:ring-blue-500">Search</button>
                </form>
            </div>
            <nav id="menu" class="hidden md:flex items-center space-x-8 mt-8 text-lg font-semibold">
                <a href="{{ route('home') }}" class="text-gray-700 hover:text-blue-500 transition-colors">Home</a>
                <a href="{{ route('cart') }}" class="text-gray-700 hover:text-blue-500 transition-colors">Cart</a>
                <a href="{{ route('checkout') }}" class="text-gray-700 hover:text-blue-500 transition-colors">Checkout</a>
                <a href="{{ route('shop') }}" class="text-gray-700 hover:text-blue-500 transition-colors">Shop</a>
                <a href="{{ route('Signup') }}" class="px-4 py-2 bg-green-500 text-white rounded-md hover:bg-green-600 text-sm focus:ring-2 focus:ring-green-500">Sign Up</a>
                <a href="login" class="px-4 py-2 bg-gray-500 text-white rounded-md hover:bg-gray-600 text-sm focus:ring-2 focus:ring-gray-500">Login</a>
            </nav>
            <div id="mobile-menu" class="hidden flex flex-col space-y-4 mt-4 text-lg font-semibold md:hidden">
                <a href="{{ route('home') }}" class="text-gray-700 hover:text-blue-500 transition-colors">Home</a>
                <a href="{{ route('cart') }}" class="text-gray-700 hover:text-blue-500 transition-colors">Cart</a>
                <a href="{{ route('checkout') }}" class="text-gray-700 hover:text-blue-500 transition-colors">Checkout</a>
                <a href="{{ route('shop') }}" class="text-gray-700 hover:text-blue-500 transition-colors">Shop</a>
                <a href="{{ route('Signup') }}" class="px-4 py-2 bg-green-500 text-white rounded-md hover:bg-green-600 text-sm focus:ring-2 focus:ring-green-500">Sign Up</a>
                <a href="login" class="px-4 py-2 bg-gray-500 text-white rounded-md hover:bg-gray-600 text-sm focus:ring-2 focus:ring-gray-500">Login</a>
            </div>
        </div>
        <script>
            let menuBtn = document.querySelector('#menu-btn');
            let mobileMenu = document.querySelector('#mobile-menu');
            let searchBtn = document.querySelector('#search-btn');
            let mobileSearchContainer = document.querySelector('#mobile-search-container');

            menuBtn.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });

            searchBtn.addEventListener('click', () => {
                mobileSearchContainer.style.display = mobileSearchContainer.style.display === 'none' || mobileSearchContainer.style.display === '' ? 'block' : 'none';
            });
        </script>
    </header>
</body>

</html>
