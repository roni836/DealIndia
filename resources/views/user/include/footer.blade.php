<footer class="bg-blue-900 text-gray-100 ">
    <div class="max-w-7xl mx-auto px-4 py-12 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">

            <!-- Logo & Tagline -->
            <div class="space-y-4">
                <div class="flex items-center space-x-2">
                    @if (!empty($logo?->meta_logo))
                        <img src="{{ asset('storage/images/setting/' . $logo->meta_logo) }}" alt="Company Logo"
                            class="h-20 w-auto">
                    @else
                        <img src="{{ asset('logo.png') }}" alt="Default Logo" class="h-20 md:h-32 object-contain">
                    @endif
                </div>
                <p class="text-sm">Your Partner in Financial Growth and Management</p>
                <div class="flex items-center space-x-2">
                    <i class="fas fa-shield-alt text-green-500"></i>
                    <span class="text-xs">Secure & Trusted</span>
                </div>
            </div>

            <!-- Quick Links -->
            <div>
                <h3 class="text-lg font-semibold text-white mb-4">Quick Links</h3>
                <ul class="space-y-2">
                    <li><a href="#" class="hover:text-white transition-colors">Home</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">About</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">Services</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">Contact</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">Privacy Policy</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">Terms of Service</a></li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div>
                <h3 class="text-lg font-semibold text-white mb-4">Contact Us</h3>
                <ul class="space-y-2">
                    <li class="flex items-center space-x-2">
                        <i class="fas fa-envelope"></i>
                        <span>support@DealIndia.com</span>
                    </li>
                    <li class="flex items-center space-x-2">
                        <i class="fas fa-phone"></i>
                        <span>+1-800-FINANCE</span>
                    </li>
                    <li class="flex items-center space-x-2">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>123 Finance Street, Business City, 10101</span>
                    </li>
                </ul>
            </div>

            <!-- Newsletter -->
            <div>
                <h3 class="text-lg font-semibold text-white mb-4">Newsletter</h3>
                <p class="text-sm mb-4">Stay updated with the latest investment insights!</p>
                <form class="space-y-2">
                    <input type="email" placeholder="Enter your email"
                        class="w-full px-4 py-2 bg-gray-800 rounded focus:ring-2 focus:ring-blue-500 focus:outline-none">
                    <button
                        class="w-full px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition-colors">Subscribe</button>
                </form>
                <div class="mt-6 space-x-4">
                    <a href="#" class="text-gray-400 hover:text-white transition-colors"><i
                            class="fab fa-facebook"></i></a>
                    <a href="#" class="text-gray-400 hover:text-white transition-colors"><i
                            class="fab fa-twitter"></i></a>
                    <a href="#" class="text-gray-400 hover:text-white transition-colors"><i
                            class="fab fa-linkedin"></i></a>
                    <a href="#" class="text-gray-400 hover:text-white transition-colors"><i
                            class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>

        <div class="mt-12 pt-8 border-t border-gray-800">
            <div class="text-center">
                <p class="text-sm">&copy; 2024 DealIndia. All Rights Reserved.</p>
                <p class="text-xs mt-2 text-gray-200">Financial information provided is for educational purposes only.
                    Always consult with a qualified financial advisor before making investment decisions.</p>
            </div>
        </div>
    </div>
</footer>