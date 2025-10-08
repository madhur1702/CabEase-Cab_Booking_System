<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <link crossorigin="" href="https://fonts.gstatic.com/" rel="preconnect" />
    <link
      as="style"
      href="https://fonts.googleapis.com/css2?display=swap&family=Noto+Sans%3Awght%40400%3B500%3B700%3B900&family=Plus+Jakarta+Sans%3Awght%40400%3B500%3B700%3B800"
      onload="this.rel='stylesheet'"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
    <title>CabEase - Your Ride, Your Way</title>
    <link
      href="data:image/x-icon;base64,"
      rel="icon"
      type="image/x-icon"
    />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script>
      // Configure Tailwind to use a slightly more vibrant primary color and better shadows
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              'cabease-blue': '#007BFF', // Primary Color
              'cabease-darkblue': '#0056b3',
              'cabease-light': '#E6F0FF', // Light background for contrast
            },
            boxShadow: {
              'soft': '0 10px 15px -3px rgba(0, 0, 0, 0.05), 0 4px 6px -2px rgba(0, 0, 0, 0.02)',
              'lg': '0 10px 25px -3px rgba(0, 0, 0, 0.1)',
            }
          },
        },
      }
    </script>
    <style>
      /* Keep minimal height for better mobile experience */
      body {
        min-height: max(884px, 100dvh);
      }
    </style>
  </head>
  <body class="bg-gray-50">
    <div
      class="relative flex min-h-screen flex-col bg-white justify-between group/design-root overflow-x-hidden"
      style='font-family: "Plus Jakarta Sans", "Noto Sans", sans-serif;'
    >
      <div>
        <header class="sticky top-0 z-50 bg-white shadow-lg">
          <div class="container mx-auto flex items-center justify-between p-4">
            <div class="flex items-center">
              <span class="text-2xl font-black text-cabease-blue"
                >CabEase</span
              >
            </div>
            <nav class="hidden md:flex space-x-8 items-center">
              <a
                class="text-gray-700 hover:text-cabease-blue font-medium transition duration-200"
                href="#about"
                >About Us</a
              >
              <a
                class="text-gray-700 hover:text-cabease-blue font-medium transition duration-200"
                href="#services"
                >Services</a
              >
              <a
                class="text-gray-700 hover:text-cabease-blue font-medium transition duration-200"
                href="#contact"
                >Contact Us</a
              >
              <button
                class="flex items-center justify-center rounded-full h-10 px-6 bg-cabease-blue text-white text-sm font-bold tracking-wide hover:bg-cabease-darkblue transition-colors shadow-md"
                onclick="window.location.href='login.php'"
              >
                <span class="truncate">Login / Register</span>
              </button>
            </nav>
            <button class="md:hidden text-gray-800">
              <span class="material-icons">menu</span>
            </button>
          </div>
        </header>

        <main>
          <section
            class="relative flex min-h-[calc(100vh-80px)] flex-col items-center justify-center bg-cover bg-center bg-no-repeat p-4 text-center"
            style='background-image: linear-gradient(rgba(0, 0, 0, 0.6) 0%, rgba(0, 0, 0, 0.8) 100%), url("https://lh3.googleusercontent.com/aida-public/AB6AXuCQorSvjoYJzOo2CGoEOOVxf5vz3ujwwnMYHhUy-iFnCEdBYlgBBIlJ0NvLnIJHVhQTsJT-MSPSVRsn4x_YizYqJHdX1DILBNisGFR-SI9kjHqE_VBBNwCA_aVFsGEX2_ox8R3F97kIAi2oZRuz3XdsUlYmROHPQKYDY-_GcJwe3UMMFS01Sw4ST7yChLLYT7y7WgJnGNVX0eyppKRqbEs5iTnjgp8xoNRo_p8UcTDaZak7iRkU5EjXqfnuwBFJrG1vQC2tN5nK7NM");'
          >
            <div class="max-w-3xl z-10 p-6 rounded-xl bg-black/10 backdrop-blur-sm">
              <h1
                class="text-5xl font-extrabold leading-tight tracking-tight text-white sm:text-6xl md:text-7xl"
              >
                Your ride, your way.
              </h1>
              <p class="mt-4 text-xl text-gray-200 sm:text-2xl font-light">
                Book in seconds, ride with ease. Safe, reliable, and always on time.
              </p>
              <div
                class="mt-12 flex flex-col space-y-4 sm:flex-row sm:space-y-0 sm:space-x-6 justify-center"
              >
                <button
                  class="flex w-full sm:w-auto min-w-[200px] cursor-pointer items-center justify-center rounded-full h-14 px-8 bg-cabease-blue text-white text-lg font-bold tracking-wide hover:bg-cabease-darkblue transition-all duration-300 shadow-xl shadow-cabease-blue/30 transform hover:scale-[1.03]"
                  onclick="window.location.href='login.php'"
                >
                  <span class="truncate">Book Your Ride Now</span>
                  <span class="material-icons ml-2">arrow_forward</span>
                </button>
                <button
                  class="flex w-full sm:w-auto min-w-[200px] cursor-pointer items-center justify-center rounded-full h-14 px-8 bg-white/10 text-white text-lg font-semibold tracking-wide border-2 border-white hover:bg-white/20 transition-all duration-300 shadow-xl transform hover:scale-[1.03]"
                  onclick="window.location.href='register.php'"
                >
                  <span class="truncate">Join as a Driver</span>
                </button>
              </div>
            </div>
          </section>

          <section
            class="py-20 px-4 @container bg-white"
            id="about"
          >
            <div class="container mx-auto text-center">
              <span class="text-sm font-semibold uppercase text-cabease-blue"
                >Who We Are</span
              >
              <h2
                class="text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl mb-4"
              >
                Committed to Excellence
              </h2>
              <p class="mx-auto max-w-3xl text-lg text-gray-600 mb-12">
                CabEase is dedicated to providing safe, reliable, and affordable transportation solutions. We connect riders with professional drivers seamlessly, ensuring a comfortable and efficient travel experience.
              </p>
              <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
                <div
                  class="flex flex-col items-center rounded-xl bg-cabease-light p-8 shadow-soft transition-all duration-300 hover:shadow-lg hover:bg-white border border-transparent hover:border-cabease-blue/30"
                >
                  <div
                    class="mb-4 flex size-16 items-center justify-center rounded-full bg-cabease-blue text-white shadow-md"
                  >
                    <span class="material-icons text-3xl">security</span>
                  </div>
                  <h3 class="mb-2 text-xl font-bold text-gray-900">
                    Safety First
                  </h3>
                  <p class="text-gray-600">
                    We prioritize safety and reliability with vetted drivers and real-time tracking.
                  </p>
                </div>

                <div
                  class="flex flex-col items-center rounded-xl bg-cabease-light p-8 shadow-soft transition-all duration-300 hover:shadow-lg hover:bg-white border border-transparent hover:border-cabease-blue/30"
                >
                  <div
                    class="mb-4 flex size-16 items-center justify-center rounded-full bg-cabease-blue text-white shadow-md"
                  >
                    <span class="material-icons text-3xl">local_taxi</span>
                  </div>
                  <h3 class="mb-2 text-xl font-bold text-gray-900">
                    Modern Fleet
                  </h3>
                  <p class="text-gray-600">
                    Enjoy your journey in comfortable, clean, and well-maintained vehicles.
                  </p>
                </div>

                <div
                  class="flex flex-col items-center rounded-xl bg-cabease-light p-8 shadow-soft transition-all duration-300 hover:shadow-lg hover:bg-white border border-transparent hover:border-cabease-blue/30"
                >
                  <div
                    class="mb-4 flex size-16 items-center justify-center rounded-full bg-cabease-blue text-white shadow-md"
                  >
                    <span class="material-icons text-3xl">support_agent</span>
                  </div>
                  <h3 class="mb-2 text-xl font-bold text-gray-900">
                    24/7 Support
                  </h3>
                  <p class="text-gray-600">
                    Our dedicated team is always available to help you, anytime you need assistance.
                  </p>
                </div>
              </div>
            </div>
          </section>

          <section
            class="py-20 px-4 @container bg-gray-50"
            id="services"
          >
            <div class="container mx-auto text-center">
              <span class="text-sm font-semibold uppercase text-cabease-blue"
                >How We Serve You</span
              >
              <h2
                class="text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl mb-4"
              >
                Our Seamless Services
              </h2>
              <p class="mx-auto max-w-3xl text-lg text-gray-600 mb-12">
                We offer a range of services to meet your transportation needs. Our platform ensures quick booking, real-time tracking, and transparent pricing.
              </p>
              <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
                <div
                  class="flex flex-col items-center rounded-xl bg-white p-8 shadow-lg transition-transform hover:scale-[1.02] duration-300 border border-gray-100"
                >
                  <div
                    class="mb-4 flex size-16 items-center justify-center rounded-full bg-cabease-blue/10 text-cabease-blue border-2 border-cabease-blue"
                  >
                    <span class="material-icons text-3xl">access_time</span>
                  </div>
                  <h3 class="mb-2 text-xl font-bold text-gray-900">
                    Instant Rides
                  </h3>
                  <p class="text-gray-600">
                    Get a ride whenever you need it, with minimal wait time and real-time tracking.
                  </p>
                </div>
                <div
                  class="flex flex-col items-center rounded-xl bg-white p-8 shadow-lg transition-transform hover:scale-[1.02] duration-300 border border-gray-100"
                >
                  <div
                    class="mb-4 flex size-16 items-center justify-center rounded-full bg-cabease-blue/10 text-cabease-blue border-2 border-cabease-blue"
                  >
                    <span class="material-icons text-3xl">calendar_month</span>
                  </div>
                  <h3 class="mb-2 text-xl font-bold text-gray-900">
                    Scheduled Pickups
                  </h3>
                  <p class="text-gray-600">
                    Plan your trips in advance and ensure a timely pickup for important events.
                  </p>
                </div>
                <div
                  class="flex flex-col items-center rounded-xl bg-white p-8 shadow-lg transition-transform hover:scale-[1.02] duration-300 border border-gray-100"
                >
                  <div
                    class="mb-4 flex size-16 items-center justify-center rounded-full bg-cabease-blue/10 text-cabease-blue border-2 border-cabease-blue"
                  >
                    <span class="material-icons text-3xl">flight_land</span>
                  </div>
                  <h3 class="mb-2 text-xl font-bold text-gray-900">
                    Airport Transfers
                  </h3>
                  <p class="text-gray-600">
                    Reliable, fixed-price, and hassle-free rides to and from the airport.
                  </p>
                </div>
              </div>
            </div>
          </section>

          <section
            class="py-20 px-4 @container bg-white"
            id="contact"
          >
            <div class="container mx-auto text-center">
              <span class="text-sm font-semibold uppercase text-cabease-blue"
                >Get In Touch</span
              >
              <h2
                class="text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl mb-4"
              >
                We're Here to Help
              </h2>
              <p class="mx-auto max-w-3xl text-lg text-gray-600 mb-12">
                For any inquiries or support, please reach out to us. Our customer service team is available 24/7.
              </p>
              <div class="grid grid-cols-1 gap-8 md:grid-cols-3">
                <div
                  class="flex flex-col items-center rounded-xl bg-gray-50 p-8 shadow-soft border-t-4 border-cabease-blue"
                >
                  <div
                    class="mb-4 flex size-16 items-center justify-center rounded-full bg-cabease-blue text-white shadow-md"
                  >
                    <span class="material-icons text-3xl">call</span>
                  </div>
                  <h3 class="mb-2 text-xl font-bold text-gray-900">Phone</h3>
                  <p class="text-gray-600 font-medium">
                    <a
                      href="tel:+91-555-123-4567"
                      class="hover:text-cabease-blue transition-colors"
                      >+91-555-123-4567</a
                    >
                  </p>
                </div>
                <div
                  class="flex flex-col items-center rounded-xl bg-gray-50 p-8 shadow-soft border-t-4 border-cabease-blue"
                >
                  <div
                    class="mb-4 flex size-16 items-center justify-center rounded-full bg-cabease-blue text-white shadow-md"
                  >
                    <span class="material-icons text-3xl">email</span>
                  </div>
                  <h3 class="mb-2 text-xl font-bold text-gray-900">Email</h3>
                  <p class="text-gray-600 font-medium">
                    <a
                      href="mailto:support@cabease.com"
                      class="hover:text-cabease-blue transition-colors"
                      >support@cabease.com</a
                    >
                  </p>
                </div>
                <div
                  class="flex flex-col items-center rounded-xl bg-gray-50 p-8 shadow-soft border-t-4 border-cabease-blue"
                >
                  <div
                    class="mb-4 flex size-16 items-center justify-center rounded-full bg-cabease-blue text-white shadow-md"
                  >
                    <span class="material-icons text-3xl">location_on</span>
                  </div>
                  <h3 class="mb-2 text-xl font-bold text-gray-900">Address</h3>
                  <p class="text-gray-600 font-medium">
                    Dhule, Maharashtra
                  </p>
                </div>
              </div>
            </div>
          </section>
        </main>
      </div>

      <footer class="bg-gray-900 text-white py-8">
        <div
          class="container mx-auto flex flex-col md:flex-row items-center justify-between px-4 text-center md:text-left"
        >
          <div class="flex items-center mb-4 md:mb-0">
            <span class="text-2xl font-black text-cabease-blue"
              >CabEase</span
            >
          </div>
          <div class="flex flex-col md:flex-row md:space-x-6 text-sm">
            <a href="#about" class="text-gray-400 hover:text-white transition-colors">About</a>
            <a href="#services" class="text-gray-400 hover:text-white transition-colors">Services</a>
            <a href="#contact" class="text-gray-400 hover:text-white transition-colors">Contact</a>
            <a href="#" class="text-gray-400 hover:text-white transition-colors">Privacy Policy</a>
          </div>
          <p class="text-gray-400 text-sm mt-4 md:mt-0">
            © 2024 CabEase. All rights reserved.
          </p>
        </div>
      </footer>
    </div>
  </body>
</html>
