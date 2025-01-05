@extends('user.userBase')
@section('title', 'Privacy Policy')
@section('meta_description', 'Learn how Deal India protects your personal data. Our Privacy Policy outlines our practices for data collection, usage, and security to ensure your information is safe.')
@section('content')
    <!-- Hero Section -->
    <div class="bg-gradient-to-r from-teal-600 to-teal-800 text-white py-16">
        <div class="container mx-auto px-4 text-center">
            <i class="fas fa-shield-alt text-3xl md:text-4xl lg:text-6xl mx-auto mb-6"></i>
            <h1 class="text-4xl font-bold mb-4">Dealindia Privacy Policy</h1>
            <p class="text-xl max-w-2xl mx-auto">
                Your privacy is our priority. Learn how DeaiIndia handles your information with transparency and care.
            </p>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container mx-auto px-4 py-8 flex flex-col md:flex-row gap-8">
        <!-- Table of Contents -->
        <div class="md:w-1/4">
            <div class="sticky top-8 bg-white rounded-lg shadow-lg p-6">
                <h2 class="text-xl font-bold mb-4">Table of Contents</h2>
                <nav>
                    <ul class="space-y-2">
                        <li>
                            <button onclick="scrollToSection('collect')"
                                class="flex items-center w-full p-2 rounded-md transition-colors hover:bg-gray-100">
                                <i class="fas fa-user-shield mr-2"></i>
                                <span>Information We Collect</span>
                            </button>
                        </li>
                        <li>
                            <button onclick="scrollToSection('use')"
                                class="flex items-center w-full p-2 rounded-md transition-colors hover:bg-gray-100">
                                <i class="fas fa-database mr-2"></i>
                                <span>How We Use Your Information</span>
                            </button>
                        </li>
                        <li>
                            <button onclick="scrollToSection('share')"
                                class="flex items-center w-full p-2 rounded-md transition-colors hover:bg-gray-100">
                                <i class="fas fa-share mr-2"></i>
                                <span>Sharing Your Information</span>
                            </button>
                        </li>
                        <li>
                            <button onclick="scrollToSection('security')"
                                class="flex items-center w-full p-2 rounded-md transition-colors hover:bg-gray-100">
                                <i class="fas fa-key mr-2"></i>
                                <span>Data Security</span>
                            </button>
                        </li>
                        <li>
                            <button onclick="scrollToSection('rights')"
                                class="flex items-center w-full p-2 rounded-md transition-colors hover:bg-gray-100">
                                <i class="fas fa-lock mr-2"></i>
                                <span>Your Rights and Choices</span>
                            </button>
                        </li>
                        <li>
                            <button onclick="scrollToSection('cookies')"
                                class="flex items-center w-full p-2 rounded-md transition-colors hover:bg-gray-100">
                                <i class="fas fa-cookie mr-2"></i>
                                <span>Cookies and Tracking</span>
                            </button>
                        </li>
                        <li>
                            <button onclick="scrollToSection('changes')"
                                class="flex items-center w-full p-2 rounded-md transition-colors hover:bg-gray-100">
                                <i class="fas fa-exclamation-circle mr-2"></i>
                                <span>Changes to Policy</span>
                            </button>
                        </li>
                        <li>
                            <button onclick="scrollToSection('contact')"
                                class="flex items-center w-full p-2 rounded-md transition-colors hover:bg-gray-100">
                                <i class="fas fa-envelope mr-2"></i>
                                <span>Contact Us</span>
                            </button>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

        <!-- Content Sections -->
        <div class="md:w-3/4">
            <div class="space-y-12">
                <section id="collect" class="bg-white rounded-lg shadow-lg p-8">
                    <h2 class="text-2xl font-bold mb-4 flex items-center">
                        <i class="fas fa-user-shield mr-2"></i> Information We Collect
                    </h2>
                    <ul class="list-disc pl-6 space-y-2">
                        <li>Personal details (name, email, phone number)</li>
                        <li>Financial information (payment details, transaction history)</li>
                        <li>Technical data (IP address, browser information)</li>
                        <li>Usage data (how you interact with our services)</li>
                    </ul>
                </section>

                <section id="use" class="bg-white rounded-lg shadow-lg p-8">
                    <h2 class="text-2xl font-bold mb-4 flex items-center">
                        <i class="fas fa-database mr-2"></i> How We Use Your Information
                    </h2>
                    <ul class="list-disc pl-6 space-y-2">
                        <li>To provide and improve our services</li>
                        <li>To communicate important updates</li>
                        <li>To ensure platform security</li>
                        <li>To personalize your experience</li>
                    </ul>
                </section>

                <section id="share" class="bg-white rounded-lg shadow-lg p-8">
                    <h2 class="text-2xl font-bold mb-4 flex items-center">
                        <i class="fas fa-share mr-2"></i> Sharing Your Information
                    </h2>
                    <p class="mb-4">We do not sell your personal information. We may share data with:</p>
                    <ul class="list-disc pl-6 space-y-2">
                        <li>Service providers who assist our operations</li>
                        <li>Law enforcement when required by law</li>
                        <li>Business partners with your consent</li>
                    </ul>
                </section>

                <section id="security" class="bg-white rounded-lg shadow-lg p-8">
                    <h2 class="text-2xl font-bold mb-4 flex items-center">
                        <i class="fas fa-key mr-2"></i> Data Security
                    </h2>
                    <ul class="list-disc pl-6 space-y-2">
                        <li>End-to-end encryption for sensitive data</li>
                        <li>Regular security audits and updates</li>
                        <li>Secure data storage facilities</li>
                        <li>Employee training on data protection</li>
                    </ul>
                </section>

                <section id="rights" class="bg-white rounded-lg shadow-lg p-8">
                    <h2 class="text-2xl font-bold mb-4 flex items-center">
                        <i class="fas fa-lock mr-2"></i> Your Rights and Choices
                    </h2>
                    <ul class="list-disc pl-6 space-y-2">
                        <li>Access your personal data</li>
                        <li>Request data correction or deletion</li>
                        <li>Opt-out of marketing communications</li>
                        <li>Data portability rights</li>
                    </ul>
                </section>

                <section id="cookies" class="bg-white rounded-lg shadow-lg p-8">
                    <h2 class="text-2xl font-bold mb-4 flex items-center">
                        <i class="fas fa-cookie mr-2"></i> Cookies and Tracking
                    </h2>
                    <p class="mb-4">We use cookies to:</p>
                    <ul class="list-disc pl-6 space-y-2">
                        <li>Remember your preferences</li>
                        <li>Analyze site traffic</li>
                        <li>Improve user experience</li>
                        <li>Provide personalized content</li>
                    </ul>
                </section>

                <section id="changes" class="bg-white rounded-lg shadow-lg p-8">
                    <h2 class="text-2xl font-bold mb-4 flex items-center">
                        <i class="fas fa-exclamation-circle mr-2"></i> Changes to Policy
                    </h2>
                    <p>We may update this privacy policy periodically. We will notify you of any material changes via email
                        or website notice.</p>
                </section>

                <section id="contact" class="bg-white rounded-lg shadow-lg p-8">
                    <h2 class="text-2xl font-bold mb-4 flex items-center">
                        <i class="fas fa-envelope mr-2"></i> Contact Us
                    </h2>
                    <div class="space-y-4">
                        <p class="flex items-center">
                            <i class="fas fa-envelope mr-2"></i> Email: <a href="mailto:privacy@dealindia.org"
                                class="text-teal-600 hover:underline">privacy@dealindia.org</a>
                        </p>
                        {{-- <p class="flex items-center">
                            <i class="fas fa-phone mr-2"></i> Phone: +1-800-DEALINDIA
                        </p>
                        <p class="flex items-center">
                            <i class="fas fa-map-marker-alt mr-2"></i> Address: 123 Investment Lane, DealCity, 45678
                        </p> --}}
                    </div>
                    <button class="mt-6 bg-teal-600 text-white px-6 py-3 rounded-lg hover:bg-teal-700 transition-colors">
                        Contact Us for Privacy Concerns
                    </button>
                </section>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const sections = document.querySelectorAll('section');
            const navLinks = document.querySelectorAll('nav ul li button');

            const handleScroll = () => {
                sections.forEach((section) => {
                    const rect = section.getBoundingClientRect();
                    if (rect.top <= 100 && rect.bottom >= 100) {
                        navLinks.forEach((link) => {
                            link.classList.remove('bg-teal-100', 'text-teal-600');
                            if (link.textContent.trim() === section.querySelector('h2')
                                .textContent.trim()) {
                                link.classList.add('bg-teal-100', 'text-teal-600');
                            }
                        });
                    }
                });
            };

            window.addEventListener('scroll', handleScroll);

            navLinks.forEach((link) => {
                link.addEventListener('click', () => {
                    const sectionId = link.textContent.trim().toLowerCase().replace(/ /g, '-');
                    document.getElementById(sectionId).scrollIntoView({
                        behavior: 'smooth'
                    });
                });
            });
            // Load header and footer
            // fetch("/header.html")
            //   .then((response) => response.text())
            //   .then((data) => {
            //     document.getElementById("header").innerHTML = data;
            //   });

            // fetch("/footer.html")
            //   .then((response) => response.text())
            //   .then((data) => {
            //     document.getElementById("footer").innerHTML = data;
            //   });
        });


        function scrollToSection(sectionId) {
            const element = document.getElementById(sectionId);
            if (element) {
                element.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        }
    </script>
@endsection
