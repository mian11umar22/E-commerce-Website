@include('header')

<div class="max-w-6xl mx-auto p-6 bg-white shadow-lg rounded-lg mt-10 border border-gray-200">
    <h1 class="text-3xl font-bold mb-6 text-gray-800">Checkout</h1>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <div class="lg:col-span-2">
            <form action="{{ route('store') }}" method="POST" class="space-y-8">
                @csrf
                <!-- Personal Information -->
                <div class="bg-gray-50 p-6 rounded-lg shadow-sm border border-gray-200">
                    <h2 class="text-2xl font-semibold mb-4 text-gray-800">Personal Information</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="first-name" class="block text-sm font-medium text-gray-700">First Name</label>
                            <input type="text" id="first-name" name="FirstName" 
                                   value="{{ old('FirstName') }}" 
                                   class="mt-1 block w-full border border-gray-300 rounded-lg shadow-sm p-2 @error('FirstName') border-red-500 @enderror">
                            @error('FirstName')
                                <span class="text-sm text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <label for="last-name" class="block text-sm font-medium text-gray-700">Last Name</label>
                            <input type="text" id="lastName" name="LastName" 
                                   value="{{ old('LastName') }}" 
                                   class="mt-1 block w-full border border-gray-300 rounded-lg shadow-sm p-2 @error('LastName') border-red-500 @enderror">
                            @error('LastName')
                                <span class="text-sm text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                            <input type="email" id="email" name="Email" 
                                   value="{{ old('Email') }}" 
                                   class="mt-1 block w-full border border-gray-300 rounded-lg shadow-sm p-2 @error('Email') border-red-500 @enderror">
                            @error('Email')
                                <span class="text-sm text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <label for="phone" class="block text-sm font-medium text-gray-700">Phone Number</label>
                            <input type="tel" id="phone" name="Phone" 
                                   value="{{ old('Phone') }}" 
                                   class="mt-1 block w-full border border-gray-300 rounded-lg shadow-sm p-2 @error('Phone') border-red-500 @enderror">
                            @error('Phone')
                                <span class="text-sm text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- Shipping Address -->
                <div class="bg-gray-50 p-6 rounded-lg shadow-sm border border-gray-200">
                    <h2 class="text-2xl font-semibold mb-4 text-gray-800">Shipping Address</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
                            <input type="text" id="address" name="Address" 
                                   value="{{ old('Address') }}" 
                                   class="mt-1 block w-full border border-gray-300 rounded-lg shadow-sm p-2 @error('Address') border-red-500 @enderror">
                            @error('Address')
                                <span class="text-sm text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <label for="city" class="block text-sm font-medium text-gray-700">City</label>
                            <input type="text" id="city" name="city" 
                                   value="{{ old('city') }}" 
                                   class="mt-1 block w-full border border-gray-300 rounded-lg shadow-sm p-2 @error('city') border-red-500 @enderror">
                            @error('city')
                                <span class="text-sm text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <label for="state" class="block text-sm font-medium text-gray-700">State</label>
                            <input type="text" id="state" name="State" 
                                   value="{{ old('State') }}" 
                                   class="mt-1 block w-full border border-gray-300 rounded-lg shadow-sm p-2 @error('State') border-red-500 @enderror">
                            @error('State')
                                <span class="text-sm text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <label for="ZipCode" class="block text-sm font-medium text-gray-700">ZIP Code</label>
                            <input type="text" id="zip" name="ZipCode" 
                                   value="{{ old('ZipCode') }}" 
                                   class="mt-1 block w-full border border-gray-300 rounded-lg shadow-sm p-2 @error('ZipCode') border-red-500 @enderror">
                            @error('ZipCode')
                                <span class="text-sm text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- Payment Information -->
                <div class="bg-gray-50 p-6 rounded-lg shadow-sm border border-gray-200">
                    <h2 class="text-2xl font-semibold mb-4 text-gray-800">Payment Information</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="card-name" class="block text-sm font-medium text-gray-700">Name on Card</label>
                            <input type="text" id="card-name" name="CardName" 
                                   value="{{ old('CardName') }}" 
                                   class="mt-1 block w-full border border-gray-300 rounded-lg shadow-sm p-2 @error('CardName') border-red-500 @enderror">
                            @error('CardName')
                                <span class="text-sm text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <label for="card-number" class="block text-sm font-medium text-gray-700">Card Number</label>
                            <input type="text" id="card-number" name="CardNumber" 
                                   value="{{ old('CardNumber') }}" 
                                   class="mt-1 block w-full border border-gray-300 rounded-lg shadow-sm p-2 @error('CardNumber') border-red-500 @enderror">
                            @error('CardNumber')
                                <span class="text-sm text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <label for="expiry-date" class="block text-sm font-medium text-gray-700">Expiry Date</label>
                            <input type="text" id="expiry-date" name="ExpiryDate" 
                                   value="{{ old('ExpiryDate') }}" 
                                   class="mt-1 block w-full border border-gray-300 rounded-lg shadow-sm p-2 @error('ExpiryDate') border-red-500 @enderror">
                            @error('ExpiryDate')
                                <span class="text-sm text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <label for="cvv" class="block text-sm font-medium text-gray-700">CVV</label>
                            <input type="text" id="cvv" name="CVV" 
                                   value="{{ old('CVV') }}" 
                                   class="mt-1 block w-full border border-gray-300 rounded-lg shadow-sm p-2 @error('CVV') border-red-500 @enderror">
                            @error('CVV')
                                <span class="text-sm text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="mt-6">
                    <button type="submit" class="bg-blue-600 text-white py-2 px-4 rounded-lg shadow-sm hover:bg-blue-700">Place Order</button>
                </div>
            </form>
        </div>

        <div class="bg-gray-50 p-6 rounded-lg shadow-sm border border-gray-200">
            <h2 class="text-2xl font-semibold mb-4 text-gray-800">Cart Summary</h2>
            <table class="table-auto w-full text-left text-sm">
                <thead>
                    <tr>
                        <th class="p-2 border-b">Image</th>
                        <th class="p-2 border-b">Product Name</th>
                        <th class="p-2 border-b">Price</th>
                        <th class="p-2 border-b">Quantity</th>
                        <th class="p-2 border-b">Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    @php 
                        $carts = session()->get('cart', []);  // Get cart data directly from the session
                        $grandTotal = 0; 
                    @endphp
                
                    @if (empty($carts))
                        <tr>
                            <td colspan="5" class="text-center p-6 text-gray-500 font-semibold">Your cart is empty!</td>
                        </tr>
                    @else
                        @foreach ($carts as $item)
                            @php 
                                $subtotal = $item['SalePrice'] * $item['quantity']; 
                                $grandTotal += $subtotal; 
                            @endphp
                            <tr>
                                <td class="p-2 border-b">
                                    <img src="{{'storage/'. $item['ProductImage'] }}" alt="Product Image" class="w-16 h-16 object-cover rounded-lg shadow">
                                </td>
                                <td class="p-2 border-b">{{ $item['ProductName'] }}</td>
                                <td class="p-2 border-b">{{ number_format($item['SalePrice'], 2) }}</td>
                                <td class="p-2 border-b">{{ $item['quantity'] }}</td>
                                <td class="p-2 border-b">{{ number_format($subtotal, 2) }}</td>
                            </tr>
                        @endforeach
                        <tr>
                            <td colspan="4" class="text-right font-bold">Grand Total:</td>
                            <td class="font-bold">{{ number_format($grandTotal, 2) }}</td>
                        </tr>
                    @endif
                </tbody>
                
                
                
            </table>
        </div>
    </div>
</div>

@include('footer')
