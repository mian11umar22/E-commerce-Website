<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body>
    <header class="relative bg-blue-50 pb-16">
        <div class="mx-auto px-6 lg:px-16">
            <div class="flex justify-between items-center py-6">
                <div class="flex items-center space-x-4">
                    <h1 class="font-bold text-4xl text-blue-700">WooCommerce</h1>
                    <span class="text-sm text-gray-500 italic">Your one-stop shop!</span>
                </div>
                <form role="search" method="get" action="{{ route('search') }}" class="flex items-center">
                    <input type="search" id="woocommerce-product-search-field-0"
                        class="search-field px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="Search products..." name="query" value="{{ request('query') }}">
                    <button type="submit" value="Search"
                        class="ml-2 px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 transition-transform transform hover:-translate-y-1 focus:outline-none focus:ring-2 focus:ring-blue-500">Search</button>
                </form>
                
            </div>
            <nav class="flex items-center space-x-8 mt-8 text-lg font-semibold">
                <a href="{{ route('home') }}" class="text-gray-700 hover:text-blue-500 transition-colors">Home</a>
                <a href="{{ route('cart') }}" class="text-gray-700 hover:text-blue-500 transition-colors">Cart</a>
                <a href="{{ route('checkout') }}" class="text-gray-700 hover:text-blue-500 transition-colors">Checkout</a>
                <a href="{{ route('shop') }}" class="text-gray-700 hover:text-blue-500 transition-colors">Shop</a>
                <div class="relative">
                    @php
                        
                    $carts= session()->get('cart',[]);
        
        $totalItems = array_sum(array_column($carts, 'quantity'));
                    @endphp
                    <a href="{{ route('cart') }}" class="text-sm flex items-center">
                        <i class="fas fa-shopping-cart text-2xl text-gray-500 mr-2"></i>
                        <span
                            class="bg-red-500 text-white rounded-full px-2 text-xs absolute -top-1 -right-4">{{ $totalItems }}</span>
                    </a>
                </div>
                <a href="{{ route('Signup') }}"
                    class="px-4 py-2 bg-green-500 text-white rounded-md hover:bg-green-600 text-sm focus:ring-2 focus:ring-green-500">Sign
                    Up</a>
                <a href="login"
                    class="px-4 py-2 bg-gray-500 text-white rounded-md hover:bg-gray-600 text-sm focus:ring-2 focus:ring-gray-500">Login</a>
            </nav>
        </div>
    </header>