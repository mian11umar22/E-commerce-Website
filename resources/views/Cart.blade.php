@include('header')
<body class="bg-gray-100">
    <div class="container mx-auto py-12">
        <!-- Shopping Cart Header -->
        <div class="flex justify-between items-center mb-8">
            <h1 class="text-3xl font-bold text-gray-800">Shopping Cart</h1>
            <p class="text-gray-600 text-lg font-semibold text-blue-500 bg-blue-100 px-4 py-2 rounded-lg shadow-sm transform -translate-x-6">
                {{ $totalItems }}
            </p>
            
        </div>

        <!-- Main Section -->
        <div class="flex flex-wrap bg-white shadow-md rounded-lg overflow-hidden">
            <!-- Cart Items -->
            <div class="w-full p-6">
                <table class="w-full text-left">
                    <thead>
                        <tr>
                            <th class="pb-3 text-gray-600 text-sm font-medium">Product Details</th>
                            <th class="pb-3 text-gray-600 text-sm font-medium">Quantity</th>
                            <th class="pb-3 text-gray-600 text-sm font-medium">Price</th>
                            <th class="pb-3 text-gray-600 text-sm font-medium">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $grandTotal = 0; 
                    @endphp
                        @foreach ($carts as $item)

                        <tr class="border-b">
                            <td class="py-4 flex items-center space-x-4">
                                <img src="{{ asset('storage/'.$item['ProductImage']) }}" alt="Product" class="w-16 h-16 rounded">
            <div>
                                    <p class="text-gray-900 font-semibold">{{ $item['ProductName'] }}</p>
                                    <a href="{{ route('remove',$item['id']) }}" class="text-blue-500 text-sm hover:underline">Remove</a>
                                </div>
                            </td>
                            <td class="py-4">
                                <div class="flex items-center space-x-2">
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
                            <td class="py-4 text-gray-700">{{ $item['SalePrice'] }}</td>
                            @php
                                $total = $item['quantity'] * $item['SalePrice'];
                                $grandTotal += $total; 
                            @endphp
                            <td class="py-4 text-gray-900 font-semibold">{{ $total }}</td>

                        </tr>
                        
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>  
        <div class="flex justify-between items-center mt-8 px-6">
            <p class="text-xl font-semibold text-gray-800">Grand Total:</p>
            <p class="text-2xl font-bold text-green-500">${{ ($grandTotal) }}</p>
        </div>  
        <!-- Checkout Button -->
        <div class="flex justify-center mt-8">
            <a href="{{ route('checkout') }}" 
            class="w-full sm:w-1/2 bg-gradient-to-r from-purple-500 to-blue-500 
            text-white py-3 px-6 rounded-lg shadow-md 
            hover:from-blue-500 hover:to-purple-500 
            transform hover:scale-105 transition-transform duration-300 ease-in-out 
            font-semibold text-lg text-center block">
            Proceed to Checkout
        </a>
        
        </div>
    </div>
    @include('footer')
    

