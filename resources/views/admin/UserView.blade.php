<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Table</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body class="bg-gray-100">

  <!-- Display Session Success Message -->
  @if(session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4" role="alert">
      <strong>Success!</strong> {{ session('success') }}
    </div>
  @endif

  <!-- Navbar -->
  <nav class="bg-gradient-to-r from-purple-500 via-pink-500 to-red-500 text-white shadow-lg w-full top-0 left-0 z-10">
    <div class="container mx-auto px-6 py-4 flex justify-between items-center">
      <div class="text-lg font-bold">
        <a href="{{ route('dashboard') }}" class="hover:text-gray-200">My Admin Panel</a>
      </div>
      <div class="flex space-x-6">
        <a href="{{ route('dashboard') }}" class="hover:bg-purple-700 px-4 py-2 rounded-md transition-all duration-200">
          <i class="fas fa-tachometer-alt mr-2"></i>Dashboard
        </a>
        <a href="{{ route('users.create') }}" class="hover:bg-purple-700 px-4 py-2 rounded-md transition-all duration-200">
          <i class="fas fa-user-plus mr-2"></i>Add User
        </a>
        <a href="{{ route('logout') }}" class="bg-red-600 hover:bg-red-700 px-4 py-2 rounded-md transition-all duration-200">
          <i class="fas fa-sign-out-alt mr-2"></i>Logout
        </a>
      </div>
    </div>
  </nav>

  <!-- Main Content Section -->
  <div class="pt-16"> <!-- Adds spacing from the navbar to the content below -->

    <h1 class="text-3xl font-bold text-center mb-6">User Details</h1>

    <!-- User Table -->
    <div class="overflow-x-auto">
      <table class="min-w-full bg-white shadow-lg rounded-lg">
        <thead class="bg-gray-200">
          <tr>
            <th class="py-4 px-6 text-left text-sm font-bold text-gray-600">#</th>
            <th class="py-4 px-6 text-left text-sm font-bold text-gray-600">Name</th>
            <th class="py-4 px-6 text-left text-sm font-bold text-gray-600">Email</th>
            <th class="py-4 px-6 text-left text-sm font-bold text-gray-600">Role</th>
            <th class="py-4 px-6 text-center text-sm font-bold text-gray-600">Actions</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
          @foreach ($data as $item)
            <tr>
              <td class="py-4 px-6 text-sm text-gray-700">{{ $item->id }}</td>
              <td class="py-4 px-6 text-sm text-gray-800">{{ $item->UserName }}</td>
              <td class="py-4 px-6 text-sm text-gray-800">{{ $item->email }}</td>
              <td class="py-4 px-6 text-sm text-gray-800">{{ $item->Role }}</td>
              <td class="py-4 px-6 text-center">
                <div class="flex justify-center space-x-2">
                  <a href="{{ route('users.edit', $item->id) }}" class="bg-yellow-500 text-white text-xs px-3 py-1 rounded hover:bg-yellow-600">Edit</a>
                  <form action="{{ route('users.destroy', $item->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="bg-red-500 text-white text-xs px-3 py-1 rounded hover:bg-red-600">Delete</button>
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
