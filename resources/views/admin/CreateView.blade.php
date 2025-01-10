<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Product</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 py-10">
  <div class="container mx-auto px-4 max-w-2xl">
    <h1 class="text-3xl font-bold text-center mb-6">Add New Product</h1>
    
    <!-- Success Message -->
    @if(session('success'))
      <div class="mb-4 text-green-600 bg-green-100 border border-green-500 p-3 rounded">
        {{ session('success') }}
      </div>
    @endif
    
    <!-- Form -->
    <form action="{{ route('Products.store') }}" method="POST" enctype="multipart/form-data" class="bg-white shadow-md rounded-lg p-6">
        @csrf
        <!-- Image Upload -->
        <div class="mb-4">
          <label for="product-image" class="block text-gray-700 font-bold mb-2">Product Image</label>
          <input type="file" name="ProductImage" id="product-image" accept="image/*" class="w-full p-2 border border-gray-300 rounded">
          @error('ProductImage')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
          @enderror
        </div>
        <!-- Product Name -->
        <div class="mb-4">
          <label for="product-name" class="block text-gray-700 font-bold mb-2">Product Name</label>
          <input type="text" name="ProductName" id="product-name" placeholder="Enter product name" value="{{ old('ProductName') }}" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" required>
          @error('ProductName')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
          @enderror
        </div>
        <!-- Product Price -->
        <div class="mb-4">
          <label for="product-price" class="block text-gray-700 font-bold mb-2">Price</label>
          <input type="number" name="ProductPrice" id="product-price" placeholder="Enter product price" value="{{ old('ProductPrice') }}" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" required>
          @error('ProductPrice')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
          @enderror
        </div>
        <!-- Sale Price -->
        <div class="mb-4">
          <label for="sale-price" class="block text-gray-700 font-bold mb-2">Sale Price</label>
          <input type="number" name="SalePrice" id="sale-price" placeholder="Enter sale price" value="{{ old('SalePrice') }}" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
          @error('SalePrice')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
          @enderror
        </div>
        <!-- Description -->
        <div class="mb-4">
          <label for="product-description" class="block text-gray-700 font-bold mb-2">Description</label>
          <textarea name="ProductDescription" id="product-description" placeholder="Enter product description" rows="4" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" required>{{ old('ProductDescription') }}</textarea>
          @error('ProductDescription')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
          @enderror
        </div>
        <!-- Submit Button -->
        <div class="text-center">
          <button type="submit" class="bg-blue-500 text-white px-6 py-2 rounded hover:bg-blue-600 transition duration-300">
            Add Product
          </button>
        </div>
      </form>
      
  </div>
</body>
</html>
