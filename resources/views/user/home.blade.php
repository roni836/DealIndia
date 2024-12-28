@extends('user.userBase')
@section('title', '')
@section('content')
<main class="">
   
    <section class="container mx-auto px-6 py-16 flex flex-col md:flex-row items-center">
        <div class="md:w-1/2 lg:pr-24 md:pr-16">
            <h1 class="text-4xl md:text-6xl font-bold text-gray-900 leading-tight mb-6">Empower Your Investments with DealIndia.</h1>
            <p class="text-lg text-gray-600 mb-8">Streamline investment tracking, connect with top investors, and grow your financial opportunities—all in one place.</p>
            <div class="flex gap-4">
                <button class="bg-blue-600 text-white px-8 py-3 rounded-lg hover:bg-blue-700 transition duration-300">Explore Services</button>
                <button class="border-2 border-blue-600 text-blue-600 px-8 py-3 rounded-lg hover:bg-blue-50 transition duration-300">Learn More</button>
            </div>
        </div>
        <div class="md:w-1/2 mt-12 md:mt-0">
            <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-1.2.1&auto=format&fit=crop&w=800" alt="Financial Growth" class="rounded-lg shadow-xl">
        </div>
    </section>

    <!-- Features Section -->
    <section class="bg-white py-20">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="p-6 bg-gray-50 rounded-xl hover:shadow-lg transition duration-300">
                    <i class="fas fa-chart-line text-4xl text-blue-600 mb-4"></i>
                    <h3 class="text-xl font-semibold mb-2">Investment Tracking</h3>
                    <p class="text-gray-600">Real-time monitoring of your investments with detailed analytics and insights.</p>
                </div>
                <div class="p-6 bg-gray-50 rounded-xl hover:shadow-lg transition duration-300">
                    <i class="fas fa-handshake text-4xl text-blue-600 mb-4"></i>
                    <h3 class="text-xl font-semibold mb-2">Investor Management</h3>
                    <p class="text-gray-600">Connect with potential investors and manage relationships effectively.</p>
                </div>
                <div class="p-6 bg-gray-50 rounded-xl hover:shadow-lg transition duration-300">
                    <i class="fas fa-analytics text-4xl text-blue-600 mb-4"></i>
                    <h3 class="text-xl font-semibold mb-2">Portfolio Insights</h3>
                    <p class="text-gray-600">Advanced analytics to make informed investment decisions.</p>
                </div>
                <div class="p-6 bg-gray-50 rounded-xl hover:shadow-lg transition duration-300">
                    <i class="fas fa-building text-4xl text-blue-600 mb-4"></i>
                    <h3 class="text-xl font-semibold mb-2">Business Partnerships</h3>
                    <p class="text-gray-600">Forge strong business relationships and explore new opportunities.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-xl shadow-lg">
                    <div class="flex items-center mb-4">
                        <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&auto=format&fit=crop&w=100" alt="User" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-semibold">Sarah Johnson</h4>
                            <div class="text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600">"DealIndia simplified my investment tracking like never before!"</p>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-lg">
                    <div class="flex items-center mb-4">
                        <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&auto=format&fit=crop&w=100" alt="User" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-semibold">Michael Chen</h4>
                            <div class="text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600">"The best platform for managing investments and finding opportunities."</p>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-lg">
                    <div class="flex items-center mb-4">
                        <img src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?ixlib=rb-1.2.1&auto=format&fit=crop&w=100" alt="User" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-semibold">Emma Wilson</h4>
                            <div class="text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600">"Outstanding portfolio management and investor networking features."</p>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-16">How It Works</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center">
                    <div class="w-20 h-20 mx-auto bg-blue-100 rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-user-plus text-3xl text-blue-600"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Step 1</h3>
                    <p class="text-gray-600">Sign up and complete your profile setup</p>
                </div>
                <div class="text-center">
                    <div class="w-20 h-20 mx-auto bg-blue-100 rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-chart-bar text-3xl text-blue-600"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Step 2</h3>
                    <p class="text-gray-600">Track investments in real-time</p>
                </div>
                <div class="text-center">
                    <div class="w-20 h-20 mx-auto bg-blue-100 rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-rocket text-3xl text-blue-600"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Step 3</h3>
                    <p class="text-gray-600">Grow with insights and analytics</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-blue-600">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-4xl font-bold text-white mb-8">Ready to Take Control of Your Financial Future?</h2>
            <button class="bg-white text-blue-600 px-10 py-4 rounded-lg text-lg font-semibold hover:bg-blue-50 transition duration-300">Join Now</button>
        </div>
    </section>

    @endsection
