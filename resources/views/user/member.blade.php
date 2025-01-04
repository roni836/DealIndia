@extends('user.userBase')
@section('title', 'Our Team ')
@section('meta_description', 'Meet the dedicated team behind Deal India. Our experts are passionate about delivering top-notch financial solutions and empowering you to achieve financial success.')

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
                <img src="{{asset('07.jpg')}}" alt="Ravi Kumar"
                    class="w-32 h-32 rounded-full mx-auto object-cover"
                    onerror="this.src='https://via.placeholder.com/128x128?text=Team+Member'" />
                <h3 class="text-xl font-semibold">Shri Rohan Shree</h3>
                <p class="text-gray-600 mb-4">Managing Director</p>
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
                <img src="{{asset('06.jpg')}}" alt="Priya Singh"
                    class="w-32 h-32 rounded-full mx-auto mb-4 object-cover"
                    onerror="this.src='https://via.placeholder.com/128x128?text=Team+Member'" />
                <h3 class="text-xl font-semibold">Nilesh Kumar Gupta</h3>
                <p class="text-gray-600 mb-4">Face Reader and VIP Member</p>
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
                <img src="{{asset('01.jpg')}}" alt="Amit Sharma"
                    class="w-32 h-32 rounded-full mx-auto mb-4 object-cover"
                    onerror="this.src='https://via.placeholder.com/128x128?text=Team+Member'" />
                <h3 class="text-xl font-semibold">MD. Mustakim Anshari</h3>
                <p class="text-gray-600 mb-4">VIP Member</p>
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
                <img src="{{asset('02.jpg')}}" alt="Ravi Kumar"
                    class="w-32 h-32 rounded-full mx-auto mb-4 object-cover"
                    onerror="this.src='https://via.placeholder.com/128x128?text=Team+Member'" />
                <h3 class="text-xl font-semibold">Ashik Anshari</h3>
                <p class="text-gray-600 mb-4">VIP Member</p>
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
                <img src="{{asset('03.jpg')}}" alt="Amit Sharma"
                    class="w-32 h-32 rounded-full mx-auto mb-4 object-cover"
                    onerror="this.src='https://via.placeholder.com/128x128?text=Team+Member'" />
                <h3 class="text-xl font-semibold">MD. Qamruddin</h3>
                <p class="text-gray-600 mb-4">VIP Member</p>
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
                <img src="{{asset('04.jpg')}}" alt="Priya Singh"
                    class="w-32 h-32 rounded-full mx-auto mb-4 object-cover"
                    onerror="this.src='https://via.placeholder.com/128x128?text=Team+Member'" />
                <h3 class="text-xl font-semibold">MD. Shamim Rahi</h3>
                <p class="text-gray-600 mb-4">VIP Member</p>
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
                <img src="{{asset('05.jpg')}}" alt="Ravi Kumar"
                    class="w-32 h-32 rounded-full mx-auto mb-4 mt-2 object-cover"
                    onerror="this.src='https://via.placeholder.com/128x128?text=Team+Member'" />
                <h3 class="text-xl font-semibold">MD. Jahangir Anshari</h3>
                <p class="text-gray-600 mb-4">VIP Member</p>
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