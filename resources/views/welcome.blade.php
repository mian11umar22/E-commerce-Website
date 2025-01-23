<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>


    @include('header')

    <main class="flex flex-wrap items-center justify-between mx-auto px-6 lg:px-16 mt-12 space-y-6 lg:space-y-0 md:flex-row flex-col">
        <!-- Left Section -->
        <div class="w-full md:w-1/2 flex flex-col items-center md:items-start text-center md:text-left">
            <h1 class="text-3xl md:text-4xl font-bold text-blue-600">{{ $home->title }}</h1>
            <p class="text-base md:text-lg leading-relaxed">{{ $home->content }}</p>
            <a href="{{ route('shop') }}" class="px-6 py-3 bg-blue-600 text-white font-semibold rounded-lg shadow-lg hover:bg-blue-700 hover:shadow-xl transition-all transform hover:-translate-y-1 mt-5 inline-block">
                Shop Now
            </a>
        </div>

        <!-- Right Section -->
        <div class="w-full md:w-1/2 flex justify-center">
            <img src={{ asset('images/cart.webp') }} alt="Shopping Cart Illustration" class="w-full max-w-xs md:max-w-md rounded-lg shadow-md object-cover">
        </div>
    </main>

    @include('footer')
