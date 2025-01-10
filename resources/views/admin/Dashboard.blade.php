<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
  <div class="min-h-screen flex flex-col">
    <!-- Navbar -->
    <header class="bg-blue-600">
      <div class="container mx-auto flex justify-between items-center py-4 px-6">
        <!-- Logo -->
        <div class="flex items-center">
          <span class="text-white text-2xl font-bold">Admin Dashboard</span>
        </div>
        <!-- Links -->
        <nav class="hidden md:flex space-x-6">
          <a href="/" class="text-white hover:underline">Home</a>
          <a href="{{ route('users.index') }}" class="text-white hover:underline">View Users</a>
          <a href="{{ route('Products.index') }}" class="text-white hover:underline">View Products</a>
        </nav>
        <!-- Logout Button -->
        <div>
          <a href="{{ route('logout') }}" class="bg-red-500 text-white px-4 py-2 rounded shadow hover:bg-red-600">Logout</a>
        </div>
        <!-- Mobile Menu Icon -->
        <div class="md:hidden text-white">
          <button id="mobile-menu-button" class="focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
          </button>
        </div>
      </div>
      <!-- Mobile Menu -->
      <nav id="mobile-menu" class="hidden md:hidden bg-blue-700 text-white px-6 py-4">
        <a href="/" class="block py-2 hover:underline">Home</a>
        <a href="{{ route('users.index') }}" class="block py-2 hover:underline">View Users</a>
        <a href="{{ route('Products.index') }}" class="block py-2 hover:underline">View Products</a>
      </nav>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto flex-grow p-6">
      <!-- Dashboard Overview -->
      <section>
        <h2 class="text-3xl font-bold mb-6">Dashboard Overview</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
          <!-- Total Users -->
          <div class="bg-white shadow-md rounded-lg p-6">
            <h3 class="text-lg font-bold text-gray-700">Total Users</h3>
            <p class="text-4xl font-extrabold text-blue-600 mt-4">{{ $total }}</p>
          </div>
          <!-- Total Products -->
          @php
          $carts= session()->get('cart',[]);
        
          $totalItems = array_sum(array_column($carts, 'quantity'));
          @endphp
          <div class="bg-white shadow-md rounded-lg p-6">
            <h3 class="text-lg font-bold text-gray-700">Total Products</h3>
            <p class="text-4xl font-extrabold text-green-600 mt-4">{{ $totalItems }}</p>
          </div>
          <!-- Pending Orders -->
          
        </div>
      </section>

      <!-- Quick Shortcuts -->
      <section class="mt-8">
        <h3 class="text-2xl font-bold mb-4">Quick Shortcuts</h3>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
          <!-- Add New User -->
          <a href="{{ route('users.create') }}" class="bg-blue-500 text-white text-sm px-6 py-8 rounded-lg shadow-lg text-center hover:bg-blue-600">
            <div class="mb-2">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
              </svg>
            </div>
            <span class="font-semibold">Add New User</span>
          </a>

          <!-- View Users -->
          <a href="{{ route('users.index') }}" class="bg-green-500 text-white text-sm px-6 py-8 rounded-lg shadow-lg text-center hover:bg-green-600">
            <div class="mb-2">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 21v-2a4 4 0 00-8 0v2M12 11a4 4 0 100-8 4 4 0 000 8zm6 8h.01M6 19h.01" />
              </svg>
            </div>
            <span class="font-semibold">View Users</span>
          </a>

          <!-- Add New Product -->
          <a href="{{ route('Products.create') }}" class="bg-yellow-500 text-white text-sm px-6 py-8 rounded-lg shadow-lg text-center hover:bg-yellow-600">
            <div class="mb-2">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
              </svg>
            </div>
            <span class="font-semibold">Add New Product</span>
          </a>

          <!-- View Products -->
          <a href="{{ route('Products.index') }}" class="bg-red-500 text-white text-sm px-6 py-8 rounded-lg shadow-lg text-center hover:bg-red-600">
            <div class="mb-2">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h11M9 21V3m4 6H6m13 6v5a2 2 0 01-2 2H7a2 2 0 01-2-2v-5" />
              </svg>
            </div>
            <span class="font-semibold">View Products</span>
          </a>
        </div>
      </section>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-4">
      <div class="container mx-auto text-center">
        &copy; 2025 Admin Panel. All Rights Reserved.
      </div>
    </footer>
  </div>

  <!-- Script for Mobile Menu -->
  <script>
    document.getElementById('mobile-menu-button').addEventListener('click', () => {
      const menu = document.getElementById('mobile-menu');
      menu.classList.toggle('hidden');
    });
  </script>
</body>
</html>
