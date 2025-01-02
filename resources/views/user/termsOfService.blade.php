@extends('user.userBase')
@section('title', '')
@section('content')
<!-- Hero Section -->
<div class="bg-gradient-to-r from-teal-600 to-teal-800 text-white py-16">
    <div class="container mx-auto px-4 text-center">
      <i class="fas fa-balance-scale w-16 h-16 mx-auto mb-6"></i>
      <h1 class="text-4xl font-bold mb-4">Dealindia Terms of Service</h1>
      <p class="text-xl max-w-2xl mx-auto">
        By using Dealindia, you agree to the following terms and conditions.
        Please read them carefully.
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
              <button
                onclick="scrollToSection('acceptance')"
                class="flex items-center w-full p-2 rounded-md transition-colors hover:bg-gray-100"
              >
                <i class="fas fa-check mr-2"></i>
                <span>Acceptance of Terms</span>
              </button>
            </li>
            <li>
              <button
                onclick="scrollToSection('eligibility')"
                class="flex items-center w-full p-2 rounded-md transition-colors hover:bg-gray-100"
              >
                <i class="fas fa-user-check mr-2"></i>
                <span>Eligibility</span>
              </button>
            </li>
            <li>
              <button
                onclick="scrollToSection('obligations')"
                class="flex items-center w-full p-2 rounded-md transition-colors hover:bg-gray-100"
              >
                <i class="fas fa-tasks mr-2"></i>
                <span>User Obligations</span>
              </button>
            </li>
            <li>
              <button
                onclick="scrollToSection('services')"
                class="flex items-center w-full p-2 rounded-md transition-colors hover:bg-gray-100"
              >
                <i class="fas fa-briefcase mr-2"></i>
                <span>Services Provided</span>
              </button>
            </li>
            <li>
              <button
                onclick="scrollToSection('fees')"
                class="flex items-center w-full p-2 rounded-md transition-colors hover:bg-gray-100"
              >
                <i class="fas fa-money-bill-wave mr-2"></i>
                <span>Fees and Payments</span>
              </button>
            </li>
            <li>
              <button
                onclick="scrollToSection('security')"
                class="flex items-center w-full p-2 rounded-md transition-colors hover:bg-gray-100"
              >
                <i class="fas fa-lock mr-2"></i>
                <span>Account Security</span>
              </button>
            </li>
            <li>
              <button
                onclick="scrollToSection('prohibited')"
                class="flex items-center w-full p-2 rounded-md transition-colors hover:bg-gray-100"
              >
                <i class="fas fa-ban mr-2"></i>
                <span>Prohibited Activities</span>
              </button>
            </li>
            <li>
              <button
                onclick="scrollToSection('termination')"
                class="flex items-center w-full p-2 rounded-md transition-colors hover:bg-gray-100"
              >
                <i class="fas fa-user-slash mr-2"></i>
                <span>Termination of Service</span>
              </button>
            </li>
            <li>
              <button
                onclick="scrollToSection('disclaimer')"
                class="flex items-center w-full p-2 rounded-md transition-colors hover:bg-gray-100"
              >
                <i class="fas fa-exclamation-triangle mr-2"></i>
                <span>Disclaimer and Limitation</span>
              </button>
            </li>
            <li>
              <button
                onclick="scrollToSection('law')"
                class="flex items-center w-full p-2 rounded-md transition-colors hover:bg-gray-100"
              >
                <i class="fas fa-gavel mr-2"></i>
                <span>Governing Law</span>
              </button>
            </li>
            <li>
              <button
                onclick="scrollToSection('changes')"
                class="flex items-center w-full p-2 rounded-md transition-colors hover:bg-gray-100"
              >
                <i class="fas fa-sync-alt mr-2"></i>
                <span>Changes to Terms</span>
              </button>
            </li>
            <li>
              <button
                onclick="scrollToSection('contact')"
                class="flex items-center w-full p-2 rounded-md transition-colors hover:bg-gray-100"
              >
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
        <section id="acceptance" class="bg-white rounded-lg shadow-lg p-8">
          <h2 class="text-2xl font-bold mb-4 flex items-center">
            <i class="fas fa-check mr-2"></i> Acceptance of Terms
          </h2>
          <p>
            By using the Dealindia platform, you agree to these terms and
            conditions. These terms constitute a legal agreement between you
            and Dealindia.
          </p>
        </section>

        <section id="eligibility" class="bg-white rounded-lg shadow-lg p-8">
          <h2 class="text-2xl font-bold mb-4 flex items-center">
            <i class="fas fa-user-check mr-2"></i> Eligibility
          </h2>
          <p>To use Dealindia, you must meet the following criteria:</p>
          <ul class="list-disc pl-6 space-y-2">
            <li>
              Be at least 18 years old or the age of majority in your
              jurisdiction.
            </li>
            <li>
              Provide accurate and truthful information during registration.
            </li>
            <li>Comply with all local laws and regulations.</li>
          </ul>
        </section>

        <section id="obligations" class="bg-white rounded-lg shadow-lg p-8">
          <h2 class="text-2xl font-bold mb-4 flex items-center">
            <i class="fas fa-tasks mr-2"></i> User Obligations
          </h2>
          <ul class="list-disc pl-6 space-y-2">
            <li>Provide valid information during registration.</li>
            <li>Keep your account credentials secure.</li>
            <li>Comply with platform rules and applicable laws.</li>
          </ul>
        </section>

        <section id="services" class="bg-white rounded-lg shadow-lg p-8">
          <h2 class="text-2xl font-bold mb-4 flex items-center">
            <i class="fas fa-briefcase mr-2"></i> Services Provided by
            Dealindia
          </h2>
          <p>Dealindia offers the following services:</p>
          <ul class="list-disc pl-6 space-y-2">
            <li>Managing investments.</li>
            <li>
              Connecting admins and investors for financial collaborations.
            </li>
          </ul>
        </section>

        <section id="fees" class="bg-white rounded-lg shadow-lg p-8">
          <h2 class="text-2xl font-bold mb-4 flex items-center">
            <i class="fas fa-money-bill-wave mr-2"></i> Fees and Payments
          </h2>
          <p>Using Dealindia may incur the following fees:</p>
          <ul class="list-disc pl-6 space-y-2">
            <li>Subscription fees for premium services.</li>
            <li>Transaction fees for certain financial activities.</li>
          </ul>
          <p>
            Payments can be made via credit card, debit card, or other
            accepted methods. Refund policies are outlined in our refund
            policy document.
          </p>
        </section>

        <section id="security" class="bg-white rounded-lg shadow-lg p-8">
          <h2 class="text-2xl font-bold mb-4 flex items-center">
            <i class="fas fa-lock mr-2"></i> Account Security
          </h2>
          <p>
            Maintaining the security of your account is crucial. Please notify
            Dealindia immediately if you suspect any unauthorized access to
            your account.
          </p>
        </section>

        <section id="prohibited" class="bg-white rounded-lg shadow-lg p-8">
          <h2 class="text-2xl font-bold mb-4 flex items-center">
            <i class="fas fa-ban mr-2"></i> Prohibited Activities
          </h2>
          <p>The following activities are not allowed on Dealindia:</p>
          <ul class="list-disc pl-6 space-y-2">
            <li>Misuse of the platform.</li>
            <li>Sharing false or misleading information.</li>
            <li>Engaging in fraudulent or illegal activities.</li>
          </ul>
        </section>

        <section id="termination" class="bg-white rounded-lg shadow-lg p-8">
          <h2 class="text-2xl font-bold mb-4 flex items-center">
            <i class="fas fa-user-slash mr-2"></i> Termination of Service
          </h2>
          <p>
            Dealindia reserves the right to terminate your account under the
            following circumstances:
          </p>
          <ul class="list-disc pl-6 space-y-2">
            <li>Violation of these terms.</li>
            <li>Engagement in prohibited activities.</li>
          </ul>
          <p>
            In case of termination, you have the right to appeal the decision
            by contacting our support team.
          </p>
        </section>

        <section id="disclaimer" class="bg-white rounded-lg shadow-lg p-8">
          <h2 class="text-2xl font-bold mb-4 flex items-center">
            <i class="fas fa-exclamation-triangle mr-2"></i> Disclaimer and
            Limitation of Liability
          </h2>
          <p>
            Dealindia is not responsible for losses resulting from user
            actions or external factors beyond our control.
          </p>
        </section>

        <section id="law" class="bg-white rounded-lg shadow-lg p-8">
          <h2 class="text-2xl font-bold mb-4 flex items-center">
            <i class="fas fa-gavel mr-2"></i> Governing Law
          </h2>
          <p>
            These terms are governed by the laws of the jurisdiction in which
            Dealindia operates.
          </p>
        </section>

        <section id="changes" class="bg-white rounded-lg shadow-lg p-8">
          <h2 class="text-2xl font-bold mb-4 flex items-center">
            <i class="fas fa-sync-alt mr-2"></i> Changes to Terms
          </h2>
          <p>
            We may update these terms periodically. You will be notified of
            any changes via email or website updates.
          </p>
        </section>

        <section id="contact" class="bg-white rounded-lg shadow-lg p-8">
          <h2 class="text-2xl font-bold mb-4 flex items-center">
            <i class="fas fa-envelope mr-2"></i> Contact Us
          </h2>
          <div class="space-y-4">
            <p class="flex items-center">
              <i class="fas fa-envelope mr-2"></i> Email:
              <a
                href="mailto:support@dealindia.com"
                class="text-teal-600 hover:underline"
                >support@dealindia.com</a
              >
            </p>
            <p class="flex items-center">
              <i class="fas fa-phone mr-2"></i> Phone: +1-800-DEALINDIA
            </p>
            <p class="flex items-center">
              <i class="fas fa-map-marker-alt mr-2"></i> Address: 123
              Investment Lane, DealCity, 45678
            </p>
          </div>
        </section>
      </div>
    </div>
  </div>

  <!-- Call-to-Action Section -->
  <div class="text-center py-8">
    <a
      href="/register"
      class="inline-block px-6 py-3 bg-teal-600 text-white rounded-lg hover:bg-teal-700 transition-colors"
    >
      Agree to Terms and Continue
    </a>
  </div>


  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const sections = document.querySelectorAll("section");
      const navLinks = document.querySelectorAll("nav ul li button");

      const handleScroll = () => {
        sections.forEach((section) => {
          const rect = section.getBoundingClientRect();
          if (rect.top <= 100 && rect.bottom >= 100) {
            navLinks.forEach((link) => {
              link.classList.remove("bg-teal-100", "text-teal-600");
              if (
                link.textContent.trim() ===
                section.querySelector("h2").textContent.trim()
              ) {
                link.classList.add("bg-teal-100", "text-teal-600");
              }
            });
          }
        });
      };

      window.addEventListener("scroll", handleScroll);

      navLinks.forEach((link) => {
        link.addEventListener("click", () => {
          const sectionId = link.textContent
            .trim()
            .toLowerCase()
            .replace(/ /g, "-");
          document
            .getElementById(sectionId)
            .scrollIntoView({ behavior: "smooth" });
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
        element.scrollIntoView({ behavior: "smooth" });
      }
    }
  </script>
@endsection
