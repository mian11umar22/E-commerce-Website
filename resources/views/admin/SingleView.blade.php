<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Single Product</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 py-10">
  
  <div class="container mx-auto px-4">
    <!-- Product Card -->
    <div class="bg-white shadow-lg rounded-lg overflow-hidden flex flex-wrap lg:flex-nowrap">
      <!-- Product Image -->
      <div class="w-full lg:w-1/2">
        <img src="{{ asset('storage/'.$data->ProductImage) }}" alt="Product Image" class="object-cover w-full h-full">
      </div>
      
      <!-- Product Details -->
      <div class="w-full lg:w-1/2 p-6">
        <h1 class="text-3xl font-bold text-gray-800 mb-4">{{ $data->ProductName }}</h1>
        <p class="text-gray-600 mb-6">
         {{ $data->ProductDescription }}
        </p>
        
        <div class="mb-6">
          <span class="text-2xl font-bold text-red-500 line-through">{{ $data->ProductPrice }}</span>
          <span class="text-3xl font-bold text-green-600 ml-4">{{ $data->SalePrice }}</span>
        </div>
        
      
          <a  href="{{ route('Products.index') }}" class="bg-gray-200 text-gray-700 text-lg font-bold px-6 py-3 rounded hover:bg-gray-300">
            Back to Shop
          </a>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
