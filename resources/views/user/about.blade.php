@extends('user.userBase')
@section('title', '')
@section('content')
    <div class="bg-gray-50">
        <!-- Hero Section -->
        <div class="relative overflow-hidden bg-white">
            <div class="max-w-7xl mx-auto">
                <div class="relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
                    <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                        <div class="sm:text-center lg:text-left">
                            <h1 class="text-4xl tracking-tight font-bold text-gray-900 sm:text-5xl md:text-6xl">
                                <span class="block xl:inline">About Dealindia:</span>
                                <span class="block text-teal-600 xl:inline">
                                    Your Trusted Financial Growth Partner</span>
                            </h1>
                            <p
                                class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                                At Dealindia, we empower individuals and businesses to achieve
                                their financial goals through innovative solutions and
                                collaborative investments.
                            </p>
                        </div>
                    </main>
                </div>
            </div>
            <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
                <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full"
                    src="https://images.unsplash.com/photo-1551434678-e076c223a692" alt="Team collaboration" />
            </div>
        </div>

        <!-- Mission and Vision Section -->
        <div class="py-16 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="lg:text-center">
                    <h2 class="text-3xl font-bold text-gray-900">
                        Our Mission & Vision
                    </h2>
                </div>
                <div class="mt-10">
                    <div class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10">
                        <div class="bg-teal-50 p-6 rounded-lg">
                            <h3 class="text-2xl font-semibold text-gray-900">Mission</h3>
                            <p class="mt-2 text-gray-600">
                                To create a transparent and collaborative environment for
                                investors to grow together.
                            </p>
                        </div>
                        <div class="bg-teal-50 p-6 rounded-lg">
                            <h3 class="text-2xl font-semibold text-gray-900">Vision</h3>
                            <p class="mt-2 text-gray-600">
                                To become the leading platform for managing financial
                                activities and fostering profitable partnerships.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Features Section -->
        <div class="py-16 bg-gray-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="lg:text-center">
                    <h2 class="text-3xl font-bold text-gray-900">
                        Features & Benefits
                    </h2>
                </div>
                <div class="mt-10">
                    <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                        <div class="bg-white p-6 rounded-lg shadow-lg">
                            <div class="text-teal-600 text-4xl mb-4">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900">
                                Comprehensive Investment Tracking
                            </h3>
                            <p class="mt-2 text-gray-600">
                                Monitor and manage all your investments in one place.
                            </p>
                        </div>
                        <div class="bg-white p-6 rounded-lg shadow-lg">
                            <div class="text-teal-600 text-4xl mb-4">
                                <i class="fas fa-users"></i>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900">
                                Seamless Collaboration
                            </h3>
                            <p class="mt-2 text-gray-600">
                                Connect with other investors and grow together.
                            </p>
                        </div>
                        <div class="bg-white p-6 rounded-lg shadow-lg">
                            <div class="text-teal-600 text-4xl mb-4">
                                <i class="fas fa-lightbulb"></i>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900">
                                Advanced Insights
                            </h3>
                            <p class="mt-2 text-gray-600">
                                Make informed decisions with detailed analytics.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @auth
        <!-- Team Section -->
        <div class="py-16 container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">
                Meet the Team Behind Dealindia
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
            </div>
        </div>
@endauth
        <!-- Timeline Section -->
        <div class="py-16 bg-gray-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="lg:text-center">
                    <h2 class="text-3xl font-bold text-gray-900">Our Journey So Far</h2>
                </div>
                <div class="mt-10">
                    <div class="flex flex-col md:grid grid-cols-9 mx-auto p-2">
                        <div class="flex md:contents">
                            <div class="col-start-5 col-end-6 mr-10 md:mx-auto relative">
                                <div class="h-full w-6 flex items-center justify-center">
                                    <div class="h-full w-1 bg-teal-600 pointer-events-none"></div>
                                </div>
                                <div class="w-6 h-6 absolute top-1/2 -mt-3 rounded-full bg-teal-600"></div>
                            </div>
                            <div class="bg-white col-start-6 col-end-10 p-4 rounded-xl my-4 mr-auto shadow-md">
                                <h3 class="font-semibold text-lg mb-1">2018</h3>
                                <p class="text-gray-600">Conceptualization of Dealindia</p>
                            </div>
                        </div>
                        <div class="flex md:contents">
                            <div class="col-start-5 col-end-6 mr-10 md:mx-auto relative">
                                <div class="h-full w-6 flex items-center justify-center">
                                    <div class="h-full w-1 bg-teal-600 pointer-events-none"></div>
                                </div>
                                <div class="w-6 h-6 absolute top-1/2 -mt-3 rounded-full bg-teal-600"></div>
                            </div>
                            <div class="bg-white col-start-6 col-end-10 p-4 rounded-xl my-4 mr-auto shadow-md">
                                <h3 class="font-semibold text-lg mb-1">2020</h3>
                                <p class="text-gray-600">Platform launch</p>
                            </div>
                        </div>
                        <div class="flex md:contents">
                            <div class="col-start-5 col-end-6 mr-10 md:mx-auto relative">
                                <div class="h-full w-6 flex items-center justify-center">
                                    <div class="h-full w-1 bg-teal-600 pointer-events-none"></div>
                                </div>
                                <div class="w-6 h-6 absolute top-1/2 -mt-3 rounded-full bg-teal-600"></div>
                            </div>
                            <div class="bg-white col-start-6 col-end-10 p-4 rounded-xl my-4 mr-auto shadow-md">
                                <h3 class="font-semibold text-lg mb-1">2022</h3>
                                <p class="text-gray-600">10,000+ active users</p>
                            </div>
                        </div>
                        <div class="flex md:contents">
                            <div class="col-start-5 col-end-6 mr-10 md:mx-auto relative">
                                <div class="h-full w-6 flex items-center justify-center">
                                    <div class="h-full w-1 bg-teal-600 pointer-events-none"></div>
                                </div>
                                <div class="w-6 h-6 absolute top-1/2 -mt-3 rounded-full bg-teal-600"></div>
                            </div>
                            <div class="bg-white col-start-6 col-end-10 p-4 rounded-xl my-4 mr-auto shadow-md">
                                <h3 class="font-semibold text-lg mb-1">2024</h3>
                                <p class="text-gray-600">Expanded global partnerships</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Testimonials Section -->
        <div class="py-16 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="lg:text-center">
                    <h2 class="text-3xl font-bold text-gray-900">What Our Users Say</h2>
                </div>
                <div class="mt-10">
                    <div class="relative bg-white p-8 rounded-lg shadow-lg">
                        <i class="fas fa-quote-left text-4xl text-teal-600 mb-4"></i>
                        <div class="flex items-center mb-8">
                            <img class="testimonial-image h-12 w-12 rounded-full object-cover"
                                src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7" alt="David Wilson" />
                            <div class="ml-4">
                                <h4 class="testimonial-name text-lg font-semibold">
                                    David Wilson
                                </h4>
                                <p class="testimonial-role text-gray-600">
                                    Investment Manager
                                </p>
                            </div>
                        </div>
                        <p class="testimonial-text text-gray-600 italic">
                            Dealindia has transformed how I manage my investments. The
                            platform's intuitive interface and comprehensive analytics make
                            decision-making easier.
                        </p>
                        <div class="mt-6 flex justify-center space-x-2">
                            <button class="testimonial-indicator w-3 h-3 rounded-full bg-teal-600"></button>
                            <button class="testimonial-indicator w-3 h-3 rounded-full bg-gray-300"></button>
                            <button class="testimonial-indicator w-3 h-3 rounded-full bg-gray-300"></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- CTA Section -->
        <div class="bg-teal-600">
            <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
                <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">
                    <span class="block">Join Us Today</span>
                    <span class="block text-teal-200">Start your investment journey with Dealindia.</span>
                </h2>
                <div class="mt-8 flex lg:mt-0 lg:flex-shrink-0 space-x-4">
                    <button
                        class="bg-white text-teal-600 px-6 py-3 rounded-md font-semibold hover:bg-teal-50 transition-colors">
                        Start Your Journey
                    </button>
                    <button
                        class="border-2 border-white text-white px-6 py-3 rounded-md font-semibold hover:bg-teal-700 transition-colors">
                        Contact Us
                    </button>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const testimonials = [{
                    name: "Rajesh Kumar",
                    role: "Investment Manager",
                    image: "https://images.unsplash.com/photo-1603415526960-f8f0a5f0f6f7",
                    text: "DealIndia has transformed how I manage my investments. The platform's intuitive interface and comprehensive analytics make decision-making easier.",
                },
                {
                    name: "Anita Desai",
                    role: "Private Investor",
                    image: "https://images.unsplash.com/photo-1529626455594-4ff0802cfb7e",
                    text: "The collaborative features have opened up new opportunities. I've connected with like-minded investors and grown my portfolio significantly.",
                },
                {
                    name: "Vikram Singh",
                    role: "Financial Advisor",
                    image: "https://images.unsplash.com/photo-1502767089025-6572583495b9",
                    text: "As a financial advisor, I recommend DealIndia to all my clients. The platform's transparency and detailed insights are unmatched.",
                },
            ];

            let currentTestimonial = 0;

            function updateTestimonial(index) {
                const testimonial = testimonials[index];
                document.querySelector(".testimonial-image").src = testimonial.image;
                document.querySelector(".testimonial-name").textContent =
                    testimonial.name;
                document.querySelector(".testimonial-role").textContent =
                    testimonial.role;
                document.querySelector(".testimonial-text").textContent =
                    testimonial.text;
                document
                    .querySelectorAll(".testimonial-indicator")
                    .forEach((indicator, i) => {
                        indicator.classList.toggle("bg-teal-600", i === index);
                        indicator.classList.toggle("bg-gray-300", i !== index);
                    });
            }

            document
                .querySelectorAll(".testimonial-indicator")
                .forEach((indicator, index) => {
                    indicator.addEventListener("click", () => {
                        currentTestimonial = index;
                        updateTestimonial(index);
                    });
                });

            updateTestimonial(currentTestimonial);
        });

        // Load header and footer
        // fetch("header.html")
        //   .then((response) => response.text())
        //   .then((data) => {
        //     document.getElementById("header").innerHTML = data;
        //   });

        // fetch("footer.html")
        //   .then((response) => response.text())
        //   .then((data) => {
        //     document.getElementById("footer").innerHTML = data;
        //   });
    </script>
@endsection
