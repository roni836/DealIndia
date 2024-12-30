@extends('user.userBase')
@section('title', '')
@section('content')
<section class="bg-teal-900 text-white py-20">
    <div class="container mx-auto px-4 text-center">
      <img src="https://comestro.novafix.in/logo.png" alt="Contact" class="w-auto h-24 mx-auto mb-6 object-cover" />
      <h1 class="text-4xl font-bold mb-4">We'd Love to Hear from You!</h1>
      <p class="text-xl max-w-2xl mx-auto">
        Whether you have questions about our platform, need support, or want
        to provide feedback, we're here to help.
      </p>
    </div>
  </section>

  <!-- Main Content -->
  <div class="container mx-auto px-4 py-16">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
      <!-- Contact Form -->
      <div class="bg-white p-8 rounded-lg shadow-lg">
        <h2 class="text-3xl font-bold mb-6 text-gray-800">Get in Touch</h2>
        <form id="contactForm" class="space-y-6">
          <div>
            <label class="block text-gray-700 mb-2">Name *</label>
            <input type="text" required
              class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-teal-500"
              placeholder="Your Name" />
          </div>
          <div>
            <label class="block text-gray-700 mb-2">Email *</label>
            <input type="email" required
              class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-teal-500"
              placeholder="Your Email" />
          </div>
          <div>
            <label class="block text-gray-700 mb-2">Phone Number</label>
            <input type="tel" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-teal-500"
              placeholder="Your Phone Number" />
          </div>
          <div>
            <label class="block text-gray-700 mb-2">Subject *</label>
            <select required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-teal-500">
              <option value="">Select Subject</option>
              <option value="inquiry">Inquiry</option>
              <option value="support">Support</option>
              <option value="feedback">Feedback</option>
              <option value="other">Other</option>
            </select>
          </div>
          <div>
            <label class="block text-gray-700 mb-2">Message *</label>
            <textarea required maxlength="500" rows="4"
              class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-teal-500"
              placeholder="Your Message"></textarea>
          </div>
          <div class="flex space-x-4">
            <button type="submit"
              class="bg-teal-600 text-white px-6 py-3 rounded-lg hover:bg-teal-700 transition duration-300">
              Send Message
            </button>
            <button type="reset"
              class="bg-gray-200 text-gray-800 px-6 py-3 rounded-lg hover:bg-gray-300 transition duration-300">
              Clear Form
            </button>
          </div>
        </form>
      </div>

      <!-- Contact Information -->
      <div class="space-y-8">
        <div class="bg-white p-8 rounded-lg shadow-lg">
          <h2 class="text-3xl font-bold mb-6 text-gray-800">
            Contact Us Directly
          </h2>
          <div class="space-y-4">
            <div class="flex items-center space-x-4">
              <i class="fas fa-envelope text-teal-600 text-xl"></i>
              <p class="text-gray-600">support@DealIndia.com</p>
            </div>
            <div class="flex items-center space-x-4">
              <i class="fas fa-phone text-teal-600 text-xl"></i>
              <p class="text-gray-600">+1-800-FINANCE</p>
            </div>
            <div class="flex items-center space-x-4">
              <i class="fas fa-map-marker-alt text-teal-600 text-xl"></i>
              <p class="text-gray-600">
                123 Finance Street, Business City, 10101
              </p>
            </div>
          </div>
        </div>

        <!-- FAQ Section -->
        <div class="bg-white p-8 rounded-lg shadow-lg">
          <h2 class="text-3xl font-bold mb-6 text-gray-800">FAQ</h2>
          <div class="space-y-4">
            <details class="p-4 rounded-lg bg-gray-50">
              <summary class="font-semibold cursor-pointer">
                How do I create an account?
              </summary>
              <p class="mt-2 text-gray-600">
                Click on the "Sign Up" button and follow the registration
                process.
              </p>
            </details>
            <details class="p-4 rounded-lg bg-gray-50">
              <summary class="font-semibold cursor-pointer">
                What services does DealIndia offer?
              </summary>
              <p class="mt-2 text-gray-600">
                We offer financial consulting, investment planning, and wealth
                management services.
              </p>
            </details>
          </div>
        </div>
      </div>
    </div>

    <!-- Map Section -->
    <div class="mt-12 bg-white p-8 rounded-lg shadow-lg">
      <h2 class="text-3xl font-bold mb-6 text-gray-800">Visit Us</h2>
      <div class="aspect-w-16 aspect-h-9">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57485.4663019765!2d87.43791507600422!3d25.775793592743703!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eff97656feec5f%3A0xc57dda35d9a83807!2sPurnia%2C%20Bihar!5e0!3m2!1sen!2sin!4v1735495551244!5m2!1sen!2sin"
          width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <button class="mt-4 bg-teal-600 text-white px-6 py-3 rounded-lg hover:bg-teal-700 transition duration-300">
        Get Directions
      </button>
    </div>

    <!-- CTA Section -->
    <div class="mt-12 bg-teal-600 text-white p-8 rounded-lg text-center">
      <h2 class="text-3xl font-bold mb-4">Need Immediate Assistance?</h2>
      <div class="flex justify-center space-x-4">
        <button class="bg-white text-teal-600 px-6 py-3 rounded-lg hover:bg-gray-100 transition duration-300">
          +91 800-123-4567
        </button>
        <button class="bg-white text-teal-600 px-6 py-3 rounded-lg hover:bg-gray-100 transition duration-300">
          Call Now
        </button>
      </div>
    </div>
  </div>
  {{-- <script>
    // Load header and footer
    fetch("header.html")
      .then((response) => response.text())
      .then((data) => {
        document.getElementById("header").innerHTML = data;
      });

    fetch("footer.html")
      .then((response) => response.text())
      .then((data) => {
        document.getElementById("footer").innerHTML = data;
      });
  </script> --}}
@endsection