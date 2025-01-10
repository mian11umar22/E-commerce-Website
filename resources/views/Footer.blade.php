<footer class="bg-gray-100 py-12 mt-16">
    <div class="container mx-auto px-6 lg:px-16 grid grid-cols-1 md:grid-cols-4 gap-8">
        <div>
            <h3 class="font-bold text-xl text-gray-800">WooCommerce</h3>
            <p class="mt-4 text-gray-600">Sign up for exclusive deals and updates about our products.</p>
            <div class="flex space-x-4 mt-4">
                <a href="#" class="text-gray-500 hover:text-blue-600"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="text-gray-500 hover:text-blue-600"><i class="fab fa-twitter"></i></a>
                <a href="#" class="text-gray-500 hover:text-blue-600"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <div>
            <h3 class="font-bold text-xl text-gray-800">Contact</h3>
            <ul class="mt-4 text-gray-600 space-y-2">
                <li><i class="fas fa-map-marker-alt text-blue-500 mr-2"></i>123 Main Street, City</li>
                <li><i class="fas fa-envelope text-blue-500 mr-2"></i>mian11umar22@gmail.com</li>
                <li><i class="fas fa-phone-alt text-blue-500 mr-2"></i>309 4399601</li>
            </ul>
        </div>
        <div>
            <h3 class="font-bold text-xl text-gray-800">Our Pages</h3>
            <ul class="mt-4 text-gray-600 space-y-2">
                <li><a href="#" class="hover:text-blue-500">Home</a></li>
                <li><a href="#" class="hover:text-blue-500">Shop</a></li>
                <li><a href="#" class="hover:text-blue-500">About Us</a></li>
                <li><a href="#" class="hover:text-blue-500">Contact</a></li>
            </ul>
        </div>
        <div>
            <h3 class="font-bold text-xl text-gray-800">Newsletter</h3>
            <p class="mt-4 text-gray-600">Sign up to stay updated on our latest products and offers.</p>
            <form class="mt-4" action="{{ route('email') }}" method="POST">
                @csrf
                <input type="email" placeholder="Your email" name="email" class="px-4 py-2 w-full border rounded-md focus:ring-2 focus:ring-blue-500">
                <button type="submit" class="mt-2 px-4 py-2 bg-blue-500 text-white rounded-md w-full hover:bg-blue-600 transition">Submit</button>
            </form>
        </div>
    </div>
    <div class="mt-12 border-t pt-6 text-center text-gray-600 text-sm">
        <p>&copy; 2023 WooCommerce. All Rights Reserved.</p>
    </div>
</footer>
