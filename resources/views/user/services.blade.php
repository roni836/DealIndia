@extends('user.userBase')
@section('title', '')
@section('content')
    <!-- Hero Section -->
    <div class="relative h-screen flex items-center justify-center bg-gradient-to-r from-teal-900 to-teal-700 text-white px-4"
        style="
  background-image: url('https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-1.2.1&auto=format&fit=crop&w=1500&q=80');
  background-size: cover;
  background-blend-mode: overlay;
">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="relative z-10 text-center max-w-4xl mx-auto">
            <h1 class="text-5xl md:text-6xl font-bold mb-6">
                Empowering Investments with DealiContact Us Directlyndia
            </h1>
            <p class="text-xl md:text-2xl mb-8">
                Discover our innovative solutions for managing financial
                collaborations and investments.
            </p>
            <button
                class="bg-teal-600 hover:bg-teal-700 text-white font-bold py-3 px-8 rounded-full transition duration-300 transform hover:scale-105">
                Get Started
            </button>
        </div>
    </div>

    <!-- Services Overview Section -->
    <div class="py-20 px-4 bg-gray-50">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-4xl font-bold text-center mb-16">Our Services</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-white p-8 rounded-lg shadow-lg hover:shadow-xl transition duration-300 text-center">
                    <div class="mb-6">
                        <i class="fas fa-tools text-4xl text-teal-600"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Streamlined Admin Tools</h3>
                    <p class="text-gray-600">
                        Easily manage investors, monitor financial activities, and
                        maintain full control over investments.
                    </p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-lg hover:shadow-xl transition duration-300 text-center">
                    <div class="mb-6">
                        <i class="fas fa-chart-line text-4xl text-teal-600"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">
                        Investor Monitoring Made Simple
                    </h3>
                    <p class="text-gray-600">
                        Allow investors to track their contributions and monitor financial
                        growth seamlessly.
                    </p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-lg hover:shadow-xl transition duration-300 text-center">
                    <div class="mb-6">
                        <i class="fas fa-chart-bar text-4xl text-teal-600"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Comprehensive Reports</h3>
                    <p class="text-gray-600">
                        Generate detailed reports to make informed financial decisions.
                    </p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-lg hover:shadow-xl transition duration-300 text-center">
                    <div class="mb-6">
                        <i class="fas fa-shield-alt text-4xl text-teal-600"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Enhanced Security</h3>
                    <p class="text-gray-600">
                        Your data and transactions are protected with industry-leading
                        security measures.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Features Section -->
    <div class="py-20 px-4 bg-white">
        <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-4xl font-bold mb-8">Key Features</h2>
                <ul class="space-y-4">
                    <li class="flex items-center text-lg">
                        ✓ Add/remove investors with ease
                    </li>
                    <li class="flex items-center text-lg">
                        ✓ Track investments in real-time
                    </li>
                    <li class="flex items-center text-lg">
                        ✓ Customizable financial reports
                    </li>
                    <li class="flex items-center text-lg">
                        ✓ User-friendly interface for all stakeholders
                    </li>
                </ul>
            </div>
            <div>
                <img src="https://images.unsplash.com/photo-1553877522-43269d4ea984?ixlib=rb-1.2.1&auto=format&fit=crop&w=1500&q=80"
                    alt="Team analyzing data" class="rounded-lg shadow-xl" />
            </div>
        </div>
    </div>

    <!-- Testimonials Section -->
    <div class="py-20 px-4 bg-gray-50">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-4xl font-bold text-center mb-16">What Our Users Say</h2>
            <div class="grid md:grid-cols-2 gap-8">
                <div class="bg-white p-8 rounded-lg shadow-lg">
                    <p class="text-lg italic mb-6">
                        "Dealindia has transformed how we manage investments. It's
                        intuitive and reliable."
                    </p>
                    <div class="flex items-center">
                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                            alt="Rajesh Kumar" class="w-12 h-12 rounded-full mr-4" />
                        <div>
                            <h4 class="font-bold">Rajesh Kumar</h4>
                            <p class="text-gray-600">Investor</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-lg">
                    <p class="text-lg italic mb-6">
                        "The platform has streamlined our investment processes
                        significantly."
                    </p>
                    <div class="flex items-center">
                        <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                            alt="Priya Singh" class="w-12 h-12 rounded-full mr-4" />
                        <div>
                            <h4 class="font-bold">Priya Singh</h4>
                            <p class="text-gray-600">Portfolio Manager</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="py-20 px-4 bg-teal-900 text-white text-center">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-4xl font-bold mb-6">
                Ready to Transform Your Investments?
            </h2>
            <p class="text-xl mb-8">
                Join thousands of users who trust DealIndia for seamless financial
                management.
            </p>
            <div class="space-x-4">
                <button
                    class="bg-teal-600 hover:bg-teal-700 text-white font-bold py-3 px-8 rounded-full transition duration-300">
                    Start Now
                </button>
                <button
                    class="bg-transparent border-2 border-white hover:bg-white hover:text-teal-900 text-white font-bold py-3 px-8 rounded-full transition duration-300">
                    Learn More
                </button>
            </div>
        </div>
    </div>

    <!-- FAQ Section -->
    <div class="py-20 px-4 bg-white">
        <div class="max-w-3xl mx-auto">
            <h2 class="text-4xl font-bold text-center mb-16">
                Frequently Asked Questions
            </h2>
            <div class="space-y-4">
                <div class="border rounded-lg">
                    <button class="w-full px-6 py-4 text-left flex justify-between items-center focus:outline-none"
                        onclick="toggleFAQ(0)">
                        <span class="font-semibold">What services does DealIndia offer?</span>
                        <i class="fas fa-angle-down"></i>
                    </button>
                    <div class="faq-answer px-6 py-4 bg-gray-50">
                        <p>
                            We provide tools for admin and investor management, financial
                            tracking, and secure collaboration.
                        </p>
                    </div>
                </div>
                <div class="border rounded-lg">
                    <button class="w-full px-6 py-4 text-left flex justify-between items-center focus:outline-none"
                        onclick="toggleFAQ(1)">
                        <span class="font-semibold">How do I get started?</span>
                        <i class="fas fa-angle-down"></i>
                    </button>
                    <div class="faq-answer px-6 py-4 bg-gray-50">
                        <p>Simply sign-up and follow the onboarding process.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        let openFAQ = null;

        function toggleFAQ(index) {
            const answers = document.querySelectorAll(".faq-answer");
            answers.forEach((answer, i) => {
                if (i === index) {
                    answer.classList.toggle("open");
                } else {
                    answer.classList.remove("open");
                }
            });
        }
        // fetch("/header.html")
        //   .then((response) => response.text())
        //   .then((html) => {
        //     document.getElementById("header").innerHTML = html;
        //   });
        //   fetch("/footer.html")
        //   .then((response) => response.text())
        //   .then((html) => {
        //     document.getElementById("footer").innerHTML = html;
        //   });
    </script>
    </body>
@endsection
