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

    <div class="container mx-auto py-12 px-4 md:px-16">
        <!-- Shopping Cart Header -->
        <div class="flex flex-col md:flex-row justify-between items-center mb-8 text-center md:text-left">
            <h1 class="text-2xl md:text-3xl font-bold text-gray-800">Shopping Cart</h1>
            <p class="text-gray-600 text-lg font-semibold text-blue-500 bg-blue-100 px-4 py-2 rounded-lg shadow-sm mt-4 md:mt-0">{{ $totalItems }}</p>
        </div>

        <!-- Main Section -->
        <div class="bg-white shadow-md rounded-lg overflow-hidden p-4 md:p-6">
            <!-- Cart Items -->
            <div class="overflow-x-auto">
                <table class="w-full text-left text-sm md:text-base">
                    <thead>
                        <tr>
                            <th class="pb-3 text-gray-600 font-medium">Product</th>
                            <th class="pb-3 text-gray-600 font-medium">Quantity</th>
                            <th class="pb-3 text-gray-600 font-medium">Price</th>
                            <th class="pb-3 text-gray-600 font-medium">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $grandTotal = 0; @endphp
                        @foreach ($carts as $item)
                        <tr class="border-b text-center md:text-left">
                            <td class="py-4 flex flex-col md:flex-row items-center space-x-0 md:space-x-4 text-sm md:text-base">
                                <img src="{{ asset('storage/'.$item['ProductImage']) }}" alt="Product" class="w-16 h-16 rounded mx-auto md:mx-0">
                                <div>
                                    <p class="text-gray-900 font-semibold">{{ $item['ProductName'] }}</p>
                                    <a href="{{ route('remove',$item['id']) }}" class="text-blue-500 text-xs md:text-sm hover:underline">Remove</a>
                                </div>
                            </td>
                            <td class="py-4">
                                <div class="flex items-center justify-center md:justify-start space-x-2">
                                    <form action="{{ route('update',[$item['id'],'action'=>'decrease']) }}" method="POST">
                                        @csrf
                                        <button class="bg-gray-200 text-gray-600 px-2 rounded hover:bg-gray-300">-</button>
                                    </form>
                                    <span class="px-3">{{ $item['quantity'] }}</span>
                                    <form action="{{ route('update',[$item['id'],'action'=>'increase']) }}" method="POST">
                                        @csrf
                                        <button class="bg-gray-200 text-gray-600 px-2 rounded hover:bg-gray-300">+</button>
                                    </form>
                                </div>
                            </td>
                            <td class="py-4 text-gray-700">${{ $item['SalePrice'] }}</td>
                            @php $total = $item['quantity'] * $item['SalePrice']; $grandTotal += $total; @endphp
                            <td class="py-4 text-gray-900 font-semibold">${{ $total }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Grand Total Section -->
        <div class="flex flex-col md:flex-row justify-between items-center mt-8 px-4 text-center md:text-left">
            <p class="text-lg md:text-xl font-semibold text-gray-800">Grand Total:</p>
            <p class="text-xl md:text-2xl font-bold text-green-500">${{ ($grandTotal) }}</p>
        </div>

        <!-- Checkout Button -->
        <div class="flex justify-center mt-8">
            <a href="{{ route('checkout') }}" class="w-full sm:w-3/4 md:w-1/2 bg-gradient-to-r from-purple-500 to-blue-500 text-white py-3 px-6 rounded-lg shadow-md hover:from-blue-500 hover:to-purple-500 transform hover:scale-105 transition-transform duration-300 ease-in-out font-semibold text-lg text-center block">
                Proceed to Checkout
            </a>
        </div>
    </div>

    @include('footer')
