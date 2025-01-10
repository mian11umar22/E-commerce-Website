<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product List</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
  <style>
    .max-height-description {
      max-height: 60px; /* Show two lines only */
      overflow: hidden;
    }
  </style>
</head>
<body class="bg-gray-100">
  <nav class="bg-gradient-to-r from-purple-500 via-pink-500 to-red-500 text-white shadow-lg">
    <div class="container mx-auto px-6 py-4 flex justify-between items-center">
      <div class="text-lg font-bold">
        <a href="{{ route('dashboard') }}" class="hover:text-gray-200">My Admin Panel</a>
      </div>
      <div class="flex space-x-6">
        <a href="{{ route('dashboard') }}" class="hover:bg-purple-700 px-3 py-2 rounded-md">
          <i class="fas fa-tachometer-alt mr-2"></i>Dashboard
        </a>
        <a href="{{ route('Products.create') }}" class="hover:bg-purple-700 px-3 py-2 rounded-md">
          <i class="fas fa-user-plus mr-2"></i>Add Product
        </a>
        <a href="{{ route('logout') }}" class="bg-red-600 hover:bg-red-700 px-3 py-2 rounded-md">
          <i class="fas fa-sign-out-alt mr-2"></i>Logout
        </a>
      </div>
    </div>
  </nav>
  

  <!-- Main Content -->
  <div class="container mx-auto p-8">
    <div class="flex justify-between items-center mb-8">
      <h1 class="text-3xl font-bold">Products List</h1>
    </div>

    <!-- Add New Product Button -->
    <div class="flex justify-end mb-4">
      <a href="{{ route('Products.create') }}" class="bg-green-500 text-white text-sm px-4 py-2 rounded shadow hover:bg-green-600">
        <i class="fas fa-plus mr-2"></i> Add New Product
      </a>
    </div>

    <!-- Product Table -->
    <div class="overflow-x-auto">
      <table class="min-w-full bg-white shadow-lg rounded-lg overflow-hidden">
        <thead class="bg-gray-200">
          <tr>
            <th class="py-4 px-6 text-left text-sm font-bold text-gray-600">#</th>
            <th class="py-4 px-6 text-left text-sm font-bold text-gray-600">Image</th>
            <th class="py-4 px-6 text-left text-sm font-bold text-gray-600">Product Name</th>
            <th class="py-4 px-6 text-left text-sm font-bold text-gray-600">Description</th>
            <th class="py-4 px-6 text-left text-sm font-bold text-gray-600">Price</th>
            <th class="py-4 px-6 text-left text-sm font-bold text-gray-600">Sale Price</th>
            <th class="py-4 px-6 text-center text-sm font-bold text-gray-600">Actions</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
          @foreach ($data as $item)
          <tr>
            <td class="py-4 px-6 text-sm text-gray-700">{{ $item->id }}</td>
            <td class="py-4 px-6">
              <img src="{{ asset('storage/'.$item->ProductImage) }}" alt="Product Image" class="h-16 w-16 object-cover rounded-md">
            </td>
            <td class="py-4 px-6 text-sm text-gray-700">{{ $item->ProductName }}</td>
            <td class="py-4 px-6 text-sm text-gray-600 max-height-description">{{ $item->ProductDescription }}</td>
            <td class="py-4 px-6 text-sm font-bold text-red-500 line-through">{{ $item->ProductPrice }}</td>
            <td class="py-4 px-6 text-sm font-bold text-green-600">{{ $item->SalePrice }}</td>
            <td class="py-4 px-6 text-center">
              <div class="flex justify-center space-x-2">
                <a href="{{ route('Products.show', $item->id) }}" class="bg-blue-500 text-white text-xs px-3 py-1 rounded hover:bg-blue-600">View</a>
                <a href="{{ route('Products.edit', $item->id) }}" class="bg-yellow-500 text-white text-xs px-3 py-1 rounded hover:bg-yellow-600">Edit</a>
                <form action="{{ route('Products.destroy', $item->id) }}" method="post" class="inline">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="bg-red-500 text-white text-xs px-3 py-1 rounded hover:bg-red-600">Delete</button>
                </form>
              </div>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</body>
</html>
