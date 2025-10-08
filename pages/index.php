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
      // Configure Tailwind with a modern color palette, custom gradients, and animation
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              'cabease-blue': '#006BFF', // Slightly deeper primary
              'cabease-darkblue': '#004CBA',
              'cabease-light': '#F0F7FF', // Lighter, more vibrant background
            },
            boxShadow: {
              'premium': '0 15px 30px -5px rgba(0, 0, 0, 0.1), 0 5px 10px -5px rgba(0, 0, 0, 0.04)',
            },
            backgroundImage: {
              'cta-gradient': 'linear-gradient(to right, #007BFF, #0056b3)',
            },
            keyframes: {
                float: {
                    '0%, 100%': { transform: 'translateY(0)' },
                    '50%': { transform: 'translateY(-10px)' },
                }
            },
            animation: {
                float: 'float 4s ease-in-out infinite',
            }
          },
        },
      }
    </script>
    <style>
      body {
        min-height: max(884px, 100dvh);
      }
      /* Custom style for active link underline effect */
      .nav-link:hover::after {
        content: '';
        display: block;
        width: 100%;
        height: 2px;
        background-color: #006BFF;
        transition: width 0.3s ease;
        position: absolute;
        bottom: -4px;
      }
    </style>
  </head>
  <body class="bg-gray-50">
    <div
      class="relative flex min-h-screen flex-col bg-white justify-between group/design-root overflow-x-hidden"
      style='font-family: "Plus Jakarta Sans", "Noto Sans", sans-serif;'
    >
      <div>
        <header class="sticky top-0 z-50 bg-white shadow-md">
          <div class="container mx-auto flex items-center justify-between p-4">
            <div class="flex items-center">
              <span class="text-2xl font-black text-cabease-blue"
                >CabEase</span
              >
            </div>
            <nav class="hidden md:flex space-x-8 items-center">
              <a
                class="nav-link relative text-gray-700 hover:text-cabease-blue font-medium transition duration-200"
                href="#about"
                >About Us</a
              >
              <a
                class="nav-link relative text-gray-700 hover:text-cabease-blue font-medium transition duration-200"
                href="#services"
                >Services</a
              >
              <a
                class="nav-link relative text-gray-700 hover:text-cabease-blue font-medium transition duration-200"
                href="#contact"
                >Contact Us</a
              >
              <button
                class="flex items-center justify-center rounded-full h-10 px-6 bg-cabease-blue text-white text-sm font-bold tracking-wide hover:bg-cabease-darkblue transition-colors shadow-lg"
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
            class="relative flex min-h-[calc(100vh-80px)] flex-col items-center justify-center bg-cover bg-center bg-no-repeat p-4 text-center overflow-hidden"
            style='background-image: linear-gradient(rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0.9) 100%), url("https://lh3.googleusercontent.com/aida-public/AB6AXuCQorSvjoYJzOo2CGoEOOVxf5vz3ujwwnMYHhUy-iFnCEdBYlgBBIlJ0NvLnIJHVhQTsJT-MSPSVRsn4x_YizYqJHdX1DILBNisGFR-SI9kjHqE_VBBNwCA_aVFsGEX2_ox8R3F97kIAi2oZRuz3XdsUlYmROHPQKYDY-_GcJwe3UMMFS01Sw4ST7yChLLYT7y7WgJnGNVX0eyppKRqbEs5iTnjgp8xoNRo_p8UcTDaZak7iRkU5EjXqfnuwBFJrG1vQC2tN5nK7NM");'
          >
            <span class="material-icons text-white/50 text-9xl absolute bottom-0 right-10 opacity-5 animate-float hidden lg:block">local_taxi</span>
            <span class="material-icons text-white/50 text-7xl absolute top-10 left-20 opacity-5 animate-float hidden lg:block" style="animation-delay: 2s;">location_on</span>
            
            <div class="max-w-4xl z-10 p-6">
              <h1
                class="text-5xl font-extrabold leading-tight tracking-tight text-white sm:text-6xl md:text-7xl"
              >
                Book your ride. <span class="text-cabease-blue">Arrive with Ease.</span>
              </h1>
              <p class="mt-6 text-xl text-gray-200 sm:text-2xl font-light">
                The fastest, safest, and most affordable way to travel locally and beyond.
              </p>
              <div
                class="mt-12 flex flex-col space-y-4 sm:flex-row sm:space-y-0 sm:space-x-6 justify-center"
              >
                <button
                  class="flex w-full sm:w-auto min-w-[220px] cursor-pointer items-center justify-center rounded-full h-14 px-8 bg-cta-gradient text-white text-lg font-extrabold tracking-wide hover:shadow-2xl transition-all duration-300 shadow-xl shadow-cabease-blue/50 transform hover:scale-[1.05]"
                  onclick="window.location.href='login.php'"
                >
                  <span class="truncate">Book Your Ride Now</span>
                  <span class="material-icons ml-2 text-2xl">chevron_right</span>
                </button>
                <button
                  class="flex w-full sm:w-auto min-w-[220px] cursor-pointer items-center justify-center rounded-full h-14 px-8 bg-transparent text-white text-lg font-semibold tracking-wide border-2 border-white hover:bg-white/10 transition-all duration-300 transform hover:scale-[1.05]"
                  onclick="window.location.href='#'"
                >
                  <span class="material-icons mr-2 text-2xl">calculate</span>
                  <span class="truncate">Estimate Your Fare</span>
                </button>
              </div>
            </div>
          </section>

          <section class="bg-cabease-blue py-8 shadow-inner">
            <div class="container mx-auto px-4">
              <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-white text-center">
                <div class="p-2">
                  <p class="text-3xl font-black">25k+</p>
                  <p class="text-sm font-light uppercase tracking-wider opacity-90">Rides Completed</p>
                </div>
                <div class="p-2">
                  <p class="text-3xl font-black">4.9</p>
                  <p class="text-sm font-light uppercase tracking-wider opacity-90">Avg. Rating</p>
                </div>
                <div class="p-2">
                  <p class="text-3xl font-black">500+</p>
                  <p class="text-sm font-light uppercase tracking-wider opacity-90">Active Drivers</p>
                </div>
                <div class="p-2">
                  <p class="text-3xl font-black">24/7</p>
                  <p class="text-sm font-light uppercase tracking-wider opacity-90">Support</p>
                </div>
              </div>
            </div>
          </section>

          <section
            class="py-20 px-4 @container bg-white"
            id="about"
          >
            <div class="container mx-auto text-center">
              <span class="text-sm font-semibold uppercase text-cabease-blue"
                >Our Promise</span
              >
              <h2
                class="text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl mb-4"
              >
                Driven by Trust and Technology
              </h2>
              <p class="mx-auto max-w-3xl text-lg text-gray-600 mb-12">
                CabEase is dedicated to providing safe, reliable, and affordable transportation solutions. We connect riders with professional drivers seamlessly, ensuring a comfortable and efficient travel experience.
              </p>
              <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
                <div
                  class="flex flex-col items-center rounded-xl bg-white p-8 shadow-premium transition-all duration-300 hover:shadow-2xl hover:-translate-y-1 border border-cabease-blue/10"
                >
                  <div
                    class="mb-4 flex size-16 items-center justify-center rounded-xl bg-cabease-blue/10 text-cabease-blue border border-cabease-blue/50"
                  >
                    <span class="material-icons text-3xl">verified_user</span>
                  </div>
                  <h3 class="mb-2 text-xl font-bold text-gray-900">
                    Verified Drivers
                  </h3>
                  <p class="text-gray-600">
                    All our drivers undergo rigorous background checks for your peace of mind.
                  </p>
                </div>

                <div
                  class="flex flex-col items-center rounded-xl bg-white p-8 shadow-premium transition-all duration-300 hover:shadow-2xl hover:-translate-y-1 border border-cabease-blue/10"
                >
                  <div
                    class="mb-4 flex size-16 items-center justify-center rounded-xl bg-cabease-blue/10 text-cabease-blue border border-cabease-blue/50"
                  >
                    <span class="material-icons text-3xl">track_changes</span>
                  </div>
                  <h3 class="mb-2 text-xl font-bold text-gray-900">
                    Real-time GPS
                  </h3>
                  <p class="text-gray-600">
                    Track your ride location and estimated time of arrival with high accuracy.
                  </p>
                </div>

                <div
                  class="flex flex-col items-center rounded-xl bg-white p-8 shadow-premium transition-all duration-300 hover:shadow-2xl hover:-translate-y-1 border border-cabease-blue/10"
                >
                  <div
                    class="mb-4 flex size-16 items-center justify-center rounded-xl bg-cabease-blue/10 text-cabease-blue border border-cabease-blue/50"
                  >
                    <span class="material-icons text-3xl">currency_rupee</span>
                  </div>
                  <h3 class="mb-2 text-xl font-bold text-gray-900">
                    Transparent Pricing
                  </h3>
                  <p class="text-gray-600">
                    No hidden fees. See your fare upfront before you book your ride.
                  </p>
                </div>
              </div>
            </div>
          </section>

          <section
            class="py-20 px-4 @container bg-cabease-light"
            id="services"
          >
            <div class="container mx-auto text-center">
              <span class="text-sm font-semibold uppercase text-cabease-blue"
                >Explore Options</span
              >
              <h2
                class="text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl mb-4"
              >
                Catering to Every Need
              </h2>
              <p class="mx-auto max-w-3xl text-lg text-gray-600 mb-12">
                Whether it's a quick trip across town or a planned airport journey, we have a service for you.
              </p>
              <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
                <div
                  class="flex flex-col items-center rounded-xl bg-white p-8 shadow-lg transition-transform hover:scale-[1.02] duration-300 border border-gray-100"
                >
                  <div
                    class="mb-4 flex size-16 items-center justify-center rounded-full bg-cabease-blue text-white shadow-lg"
                  >
                    <span class="material-icons text-3xl">flash_on</span>
                  </div>
                  <h3 class="mb-2 text-xl font-bold text-gray-900">
                    CabExpress
                  </h3>
                  <p class="text-gray-600">
                    Our standard, fastest on-demand service for quick local travel.
                  </p>
                </div>
                <div
                  class="flex flex-col items-center rounded-xl bg-white p-8 shadow-lg transition-transform hover:scale-[1.02] duration-300 border border-gray-100"
                >
                  <div
                    class="mb-4 flex size-16 items-center justify-center rounded-full bg-cabease-blue text-white shadow-lg"
                  >
                    <span class="material-icons text-3xl">business_center</span>
                  </div>
                  <h3 class="mb-2 text-xl font-bold text-gray-900">
                    CabPremium
                  </h3>
                  <p class="text-gray-600">
                    Executive sedans and professional drivers for business trips and luxury travel.
                  </p>
                </div>
                <div
                  class="flex flex-col items-center rounded-xl bg-white p-8 shadow-lg transition-transform hover:scale-[1.02] duration-300 border border-gray-100"
                >
                  <div
                    class="mb-4 flex size-16 items-center justify-center rounded-full bg-cabease-blue text-white shadow-lg"
                  >
                    <span class="material-icons text-3xl">group</span>
                  </div>
                  <h3 class="mb-2 text-xl font-bold text-gray-900">
                    CabShare
                  </h3>
                  <p class="text-gray-600">
                    Affordable option for groups or commuters traveling on similar routes.
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
                >Always Available</span
              >
              <h2
                class="text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl mb-4"
              >
                Let's Get in Touch
              </h2>
              <p class="mx-auto max-w-3xl text-lg text-gray-600 mb-12">
                For any inquiries or support, please reach out to us. Our customer service team is available 24/7 to assist you.
              </p>
              <div class="grid grid-cols-1 gap-8 md:grid-cols-3">
                <div
                  class="flex flex-col items-center rounded-xl bg-gray-50 p-8 shadow-md transition-shadow hover:shadow-lg"
                >
                  <div
                    class="mb-4 flex size-16 items-center justify-center rounded-full bg-cabease-blue text-white shadow-xl"
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
                  class="flex flex-col items-center rounded-xl bg-gray-50 p-8 shadow-md transition-shadow hover:shadow-lg"
                >
                  <div
                    class="mb-4 flex size-16 items-center justify-center rounded-full bg-cabease-blue text-white shadow-xl"
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
                  class="flex flex-col items-center rounded-xl bg-gray-50 p-8 shadow-md transition-shadow hover:shadow-lg"
                >
                  <div
                    class="mb-4 flex size-16 items-center justify-center rounded-full bg-cabease-blue text-white shadow-xl"
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

      <footer class="bg-gray-900 text-white py-12">
        <div class="container mx-auto px-4 grid grid-cols-2 md:grid-cols-5 gap-8 border-b border-gray-700 pb-8">
            <div class="col-span-2 md:col-span-2">
                <span class="text-3xl font-black text-cabease-blue">CabEase</span>
                <p class="text-gray-400 text-sm mt-4 max-w-sm">
                    Your ride, your way. Dedicated to providing safe, reliable, and comfortable travel across the city.
                </p>
                <div class="flex space-x-4 mt-4">
                    <a href="#" class="text-gray-400 hover:text-cabease-blue transition-colors"><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.75s.784-1.75 1.75-1.75 1.75.79 1.75 1.75-.783 1.75-1.75 1.75zm13.5 12.268h-3v-5.604c0-3.368-4.012-3.233-4.012 0v5.604h-3v-11h3v1.765c1.396-2.586 7.012-2.356 7.012 3.616v5.619z"/></svg></a>
                    <a href="#" class="text-gray-400 hover:text-cabease-blue transition-colors"><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.795-1.574 2.164-2.722-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.594 0-6.495 2.902-6.495 6.495 0 .509.058 1.002.162 1.478-5.397-.27-10.198-2.859-13.402-6.795-.558.955-.877 2.067-.877 3.242 0 2.257 1.149 4.254 2.898 5.432-.849-.026-1.649-.262-2.352-.648-.008.027-.008.053-.008.081 0 3.15 2.238 5.786 5.213 6.398-.54.145-1.112.222-1.702.222-.418 0-.82-.041-1.215-.115.827 2.578 3.375 4.45 6.331 4.45 0-.001-.001-.001-.001-.001 0-.001 0-.001 0-.001-2.223 1.837-5.045 2.946-8.083 2.946-.525 0-1.042-.031-1.55-.091 3.056 1.963 6.666 3.111 10.551 3.111 12.66 0 19.596-10.468 19.596-19.596 0-.594-.012-1.182-.039-1.763.801-.577 1.492-1.29 2.043-2.105z"/></svg></a>
                </div>
            </div>

            <div>
                <h4 class="text-lg font-bold text-white mb-4">Quick Links</h4>
                <ul class="space-y-2">
                    <li><a href="#about" class="text-gray-400 hover:text-white transition-colors">About CabEase</a></li>
                    <li><a href="#services" class="text-gray-400 hover:text-white transition-colors">Our Services</a></li>
                    <li><a href="#contact" class="text-gray-400 hover:text-white transition-colors">Contact Support</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Career Opportunities</a></li>
                </ul>
            </div>

            <div>
                <h4 class="text-lg font-bold text-white mb-4">Legal</h4>
                <ul class="space-y-2">
                    <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Privacy Policy</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Terms of Service</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Refund Policy</a></li>
                </ul>
            </div>

            <div class="col-span-2 md:col-span-1">
                <h4 class="text-lg font-bold text-white mb-4">Get Started</h4>
                <ul class="space-y-2">
                    <li><a href="login.php" class="text-gray-400 hover:text-white transition-colors">Login / Sign Up</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Become a Driver</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Fare Calculator</a></li>
                </ul>
            </div>
        </div>

        <div class="container mx-auto px-4 pt-8 text-center">
          <p class="text-gray-500 text-sm">
            © 2024 CabEase. All rights reserved. | Crafted with <span class="text-red-500">♥</span> in Dhule.
          </p>
        </div>
      </footer>
    </div>
  </body>
</html>
