
    @include('header')

   
    
        <main class="flex flex-wrap lg:flex-nowrap items-center justify-between mx-auto px-6 lg:px-16 mt-12 space-y-6 lg:space-y-0">
            <!-- Left Section -->
            <div class="lg:w-1/2 space-y-6">
                <h1 class="text-4xl font-bold text-blue-600">{{ $home->title }}</h1>
                <p class="text-lg leading-relaxed">
                    {{ $home->content }}</p>
                    <a href="{{ route('shop') }}" 
   class="px-6 py-3 bg-blue-600 text-white font-semibold rounded-lg shadow-lg hover:bg-blue-700 hover:shadow-xl transition-all transform hover:-translate-y-1 mt-5 inline-block">
   Shop Now
</a>

            </div>
    
            <!-- Right Section -->
            <div class="lg:w-1/2 flex justify-center">
<img src={{ asset('images/cart.webp') }} alt="Shopping Cart Illustration" class="w-full max-w-md rounded-lg shadow-md object-cover">
            </div>
        </main>
    
        
    

    @include('footer')
</body>
</html>
