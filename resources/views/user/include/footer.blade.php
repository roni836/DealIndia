<footer class="bg-gradient-to-r from-blue-900 via-blue-800 to-blue-700 text-white py-12">
    <div class="max-w-screen-xl mx-auto px-6 lg:px-8">
        <!-- Top Section -->
        <div class="grid grid-cols-1  sm:grid-cols-2 lg:grid-cols-4 gap-8 text-center lg:text-left">
            <!-- Logo and About Section -->
            <div>
                <img src="logo.png" alt="Logo" class="h-14 mx-auto lg:mx-0 mb-4">
                <p class="text-sm ">
                    Deal India delivers exceptional solutions in design, finance, and business. Quality is at the heart of everything we do.
                </p>
                <div class="mt-4 space-y-2">
                    <p class="text-sm"><i class="fas fa-phone"></i> +123 456 7890</p>
                    <p class="text-sm"><i class="fas fa-envelope"></i> info@dealindia.com</p>
                </div>
            </div>

            <!-- Quick Links Sections -->
            <div>
                <h3 class="text-xl font-semibold mb-4">Business</h3>
                <ul class="space-y-2 text-sm">
                    <li><a href="#" class="hover:underline">Consulting</a></li>
                    <li><a href="#" class="hover:underline">Marketing</a></li>
                    <li><a href="#" class="hover:underline">Startups</a></li>
                    <li><a href="#" class="hover:underline">Growth Strategies</a></li>
                </ul>
            </div>

            <div>
                <h3 class="text-xl font-semibold mb-4">Design</h3>
                <ul class="space-y-2 text-sm">
                    <li><a href="#" class="hover:underline">Web Design</a></li>
                    <li><a href="#" class="hover:underline">UI/UX Design</a></li>
                    <li><a href="#" class="hover:underline">Graphic Design</a></li>
                    <li><a href="#" class="hover:underline">Branding</a></li>
                </ul>
            </div>

            <div>
                <h3 class="text-xl font-semibold mb-4">Finance</h3>
                <ul class="space-y-2 text-sm">
                    <li><a href="#" class="hover:underline">Investment</a></li>
                    <li><a href="#" class="hover:underline">Accounting</a></li>
                    <li><a href="#" class="hover:underline">Financial Planning</a></li>
                    <li><a href="#" class="hover:underline">Loans</a></li>
                </ul>
            </div>
        </div>

        <!-- Social Media Section -->
        <div class="mt-12 text-center">
            <h3 class="text-lg font-semibold mb-4">Follow Us</h3>
            <div class="flex justify-center space-x-6">
                <a href="https://www.linkedin.com" target="_blank" class="text-white hover:text-blue-500 transition duration-300">
                    <i class="fab fa-linkedin fa-2x"></i>
                </a>
                <a href="https://www.facebook.com" target="_blank" class="text-white hover:text-blue-600 transition duration-300">
                    <i class="fab fa-facebook fa-2x"></i>
                </a>
                <a href="https://www.instagram.com" target="_blank" class="text-white hover:text-pink-500 transition duration-300">
                    <i class="fab fa-instagram fa-2x"></i>
                </a>
                <a href="https://www.twitter.com" target="_blank" class="text-white hover:text-blue-400 transition duration-300">
                    <i class="fab fa-twitter fa-2x"></i>
                </a>
            </div>
        </div>

        <!-- Bottom Section -->
        <div class="border-t border-gray-600 mt-8 pt-4">
            <p class="text-center text-sm">
                &copy; <span id="currentYear"></span> Deal India. All rights reserved.
            </p>
        </div>
    </div>
</footer>

<script>
    // Set the current year dynamically
    document.getElementById('currentYear').textContent = new Date().getFullYear();
</script>
