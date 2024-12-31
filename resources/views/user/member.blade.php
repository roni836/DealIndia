@extends('user.userBase')
@section('title', 'User Member ')
@section('content')

<div class="flex mt-10 bg-gray-100">
    <!-- Sidebar -->
  @include('user.include.sidebar')
<div class="py-16 container mx-auto px-4">
    <h2 class="text-3xl font-bold text-center mb-12">
        Meet the Team Behind DealIndia
    </h2>
    <div class="grid md:grid-cols-3 gap-8">
        <div class="bg-white p-6 rounded-lg shadow-lg text-center">
            <img src="https://images.unsplash.com/photo-1595152772835-219674b2a8a6" alt="Amit Sharma"
                class="w-32 h-32 rounded-full mx-auto mb-4 object-cover"
                onerror="this.src='https://via.placeholder.com/128x128?text=Team+Member'" />
            <h3 class="text-xl font-semibold">Amit Sharma</h3>
            <p class="text-gray-600 mb-4">Founder & CEO</p>
            <div class="flex justify-center space-x-4">
                <a href="#" class="text-teal-600 hover:text-teal-800">
                    <i class="fab fa-linkedin text-2xl"></i>
                </a>
                <a href="#" class="text-teal-600 hover:text-teal-800">
                    <i class="fab fa-facebook text-2xl"></i>
                </a>
                <a href="#" class="text-teal-600 hover:text-teal-800">
                    <i class="fab fa-instagram text-2xl"></i>
                </a>
                <a href="#" class="text-teal-600 hover:text-teal-800">
                    <i class="fab fa-twitter text-2xl"></i>
                </a>
            </div>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-lg text-center">
            <img src="https://images.unsplash.com/photo-1603415526960-f8f0a5f0f6f7" alt="Priya Singh"
                class="w-32 h-32 rounded-full mx-auto mb-4 object-cover"
                onerror="this.src='https://via.placeholder.com/128x128?text=Team+Member'" />
            <h3 class="text-xl font-semibold">Priya Singh</h3>
            <p class="text-gray-600 mb-4">Lead Developer</p>
            <div class="flex justify-center space-x-4">
                <a href="#" class="text-teal-600 hover:text-teal-800">
                    <i class="fab fa-linkedin text-2xl"></i>
                </a>
                <a href="#" class="text-teal-600 hover:text-teal-800">
                    <i class="fab fa-facebook text-2xl"></i>
                </a>
                <a href="#" class="text-teal-600 hover:text-teal-800">
                    <i class="fab fa-instagram text-2xl"></i>
                </a>
                <a href="#" class="text-teal-600 hover:text-teal-800">
                    <i class="fab fa-twitter text-2xl"></i>
                </a>
            </div>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-lg text-center">
            <img src="https://images.unsplash.com/photo-1517841905240-472988babdf9" alt="Ravi Kumar"
                class="w-32 h-32 rounded-full mx-auto mb-4 object-cover"
                onerror="this.src='https://via.placeholder.com/128x128?text=Team+Member'" />
            <h3 class="text-xl font-semibold">Ravi Kumar</h3>
            <p class="text-gray-600 mb-4">Financial Analyst</p>
            <div class="flex justify-center space-x-4">
                <a href="#" class="text-teal-600 hover:text-teal-800">
                    <i class="fab fa-linkedin text-2xl"></i>
                </a>
                <a href="#" class="text-teal-600 hover:text-teal-800">
                    <i class="fab fa-facebook text-2xl"></i>
                </a>
                <a href="#" class="text-teal-600 hover:text-teal-800">
                    <i class="fab fa-instagram text-2xl"></i>
                </a>
                <a href="#" class="text-teal-600 hover:text-teal-800">
                    <i class="fab fa-twitter text-2xl"></i>
                </a>
            </div>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-lg text-center">
            <img src="https://images.unsplash.com/photo-1595152772835-219674b2a8a6" alt="Amit Sharma"
                class="w-32 h-32 rounded-full mx-auto mb-4 object-cover"
                onerror="this.src='https://via.placeholder.com/128x128?text=Team+Member'" />
            <h3 class="text-xl font-semibold">Amit Sharma</h3>
            <p class="text-gray-600 mb-4">Founder & CEO</p>
            <div class="flex justify-center space-x-4">
                <a href="#" class="text-teal-600 hover:text-teal-800">
                    <i class="fab fa-linkedin text-2xl"></i>
                </a>
                <a href="#" class="text-teal-600 hover:text-teal-800">
                    <i class="fab fa-facebook text-2xl"></i>
                </a>
                <a href="#" class="text-teal-600 hover:text-teal-800">
                    <i class="fab fa-instagram text-2xl"></i>
                </a>
                <a href="#" class="text-teal-600 hover:text-teal-800">
                    <i class="fab fa-twitter text-2xl"></i>
                </a>
            </div>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-lg text-center">
            <img src="https://images.unsplash.com/photo-1603415526960-f8f0a5f0f6f7" alt="Priya Singh"
                class="w-32 h-32 rounded-full mx-auto mb-4 object-cover"
                onerror="this.src='https://via.placeholder.com/128x128?text=Team+Member'" />
            <h3 class="text-xl font-semibold">Priya Singh</h3>
            <p class="text-gray-600 mb-4">Lead Developer</p>
            <div class="flex justify-center space-x-4">
                <a href="#" class="text-teal-600 hover:text-teal-800">
                    <i class="fab fa-linkedin text-2xl"></i>
                </a>
                <a href="#" class="text-teal-600 hover:text-teal-800">
                    <i class="fab fa-facebook text-2xl"></i>
                </a>
                <a href="#" class="text-teal-600 hover:text-teal-800">
                    <i class="fab fa-instagram text-2xl"></i>
                </a>
                <a href="#" class="text-teal-600 hover:text-teal-800">
                    <i class="fab fa-twitter text-2xl"></i>
                </a>
            </div>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-lg text-center">
            <img src="https://images.unsplash.com/photo-1517841905240-472988babdf9" alt="Ravi Kumar"
                class="w-32 h-32 rounded-full mx-auto mb-4 object-cover"
                onerror="this.src='https://via.placeholder.com/128x128?text=Team+Member'" />
            <h3 class="text-xl font-semibold">Ravi Kumar</h3>
            <p class="text-gray-600 mb-4">Financial Analyst</p>
            <div class="flex justify-center space-x-4">
                <a href="#" class="text-teal-600 hover:text-teal-800">
                    <i class="fab fa-linkedin text-2xl"></i>
                </a>
                <a href="#" class="text-teal-600 hover:text-teal-800">
                    <i class="fab fa-facebook text-2xl"></i>
                </a>
                <a href="#" class="text-teal-600 hover:text-teal-800">
                    <i class="fab fa-instagram text-2xl"></i>
                </a>
                <a href="#" class="text-teal-600 hover:text-teal-800">
                    <i class="fab fa-twitter text-2xl"></i>
                </a>
            </div>
        </div>
    </div>
    
</div>
</div>

@endsection