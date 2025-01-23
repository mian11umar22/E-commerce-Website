<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dark Mode Footer</title>
    <script src="https://cdn.tailwindcss.com"></script> 
</head>
<body class="bg-gray-100 dark:bg-gray-900 dark:text-white transition-colors duration-300">

    <!-- Dark Mode Toggle Button -->
    

    <footer id="footer" class="py-12 mt-16 bg-gray-100 dark:bg-gray-900 dark:text-white transition-colors duration-300">
        <div class="container mx-auto px-6 lg:px-16 grid grid-cols-1 md:grid-cols-4 gap-8">
            <div>
                <h3 class="font-bold text-xl dark:text-white">WooCommerce</h3>
                <p class="mt-4 dark:text-gray-300">Sign up for exclusive deals and updates about our products.</p>
                <div class="flex space-x-4 mt-4">
                    <a href="#" class="text-gray-500 hover:text-blue-600 dark:text-gray-300 dark:hover:text-blue-400">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-blue-600 dark:text-gray-300 dark:hover:text-blue-400">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="https://www.instagram.com/mian_umar_saifullah/" class="text-gray-500 hover:text-blue-600 dark:text-gray-300 dark:hover:text-blue-400">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
            </div>
            <div>
                <h3 class="font-bold text-xl dark:text-white">Contact</h3>
                <ul class="mt-4 space-y-2">
                    <li class="dark:text-gray-300"><i class="fas fa-map-marker-alt text-blue-500 mr-2"></i>123 Main Street, City</li>
                    <li class="dark:text-gray-300"><i class="fas fa-envelope text-blue-500 mr-2"></i>mian11umar22@gmail.com</li>
                    <li class="dark:text-gray-300"><i class="fas fa-phone-alt text-blue-500 mr-2"></i>309 4399601</li>
                </ul>
            </div>
            <div>
                <h3 class="font-bold text-xl dark:text-white">Our Pages</h3>
                <ul class="mt-4 space-y-2">
                    <li><a href="{{ route('home') }}" class="hover:text-blue-500 dark:text-gray-300 dark:hover:text-blue-400">Home</a></li>
                    <li><a href="{{ route('shop') }}" class="hover:text-blue-500 dark:text-gray-300 dark:hover:text-blue-400">Shop</a></li>
                    <li><a href="{{ route('cart') }}" class="hover:text-blue-500 dark:text-gray-300 dark:hover:text-blue-400">Cart</a></li>
                    <li><a href="{{ route('checkout') }}"class="hover:text-blue-500 dark:text-gray-300 dark:hover:text-blue-400">Checkout</a></li>
                </ul>
            </div>
            <div>
                <h3 class="font-bold text-xl dark:text-white">Newsletter</h3>
                <p class="mt-4 dark:text-gray-300">Sign up to stay updated on our latest products and offers.</p>
                <form class="mt-4" action="#" method="POST">
                    <input type="email" placeholder="Your email" name="email"
                        class="px-4 py-2 w-full border rounded-md focus:ring-2 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-600 dark:text-white">
                    <button type="submit"
                        class="mt-2 px-4 py-2 bg-blue-500 text-white rounded-md w-full hover:bg-blue-600 transition">
                        Submit
                    </button>
                </form>
            </div>
        </div>
        <div class="mt-12 border-t pt-6 text-center text-sm dark:text-gray-300">
            <p>&copy; 2023 WooCommerce. All Rights Reserved.</p>
        </div>
    </footer>

    {{-- <script>
        document.addEventListener('DOMContentLoaded', function () {
            let btn1 = document.querySelector('#mode');
            let html = document.querySelector('html');

            // Retrieve saved mode or default to 'light'
            let savedMode = localStorage.getItem('mode') || 'light';

            if (savedMode === "dark") {
                html.classList.add('dark'); // Apply dark mode class
            } else {
                html.classList.remove('dark');
            }

            // Toggle dark mode on button click
            btn1.addEventListener('click', () => {
                html.classList.toggle('dark'); // Toggle dark mode class on <html>

                // Save mode in localStorage
                let newMode = html.classList.contains('dark') ? "dark" : "light";
                localStorage.setItem('mode', newMode);
            });
        });
    </script> --}}
</body>
</html>
