<html>
  <head>
    <meta charset="utf-8"/>
    <link crossorigin="" href="https://fonts.gstatic.com/" rel="preconnect"/>
    <link as="style" href="https://fonts.googleapis.com/css2?display=swap&family=Noto+Sans%3Awght%40400%3B500%3B700%3B900&family=Plus+Jakarta+Sans%3Awght%40400%3B500%3B700%3B800" onload="this.rel='stylesheet'" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
    <title>CabEase - Your Ride, Your Way</title>
    <link href="data:image/x-icon;base64," rel="icon" type="image/x-icon"/>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <style>
      body {
        min-height: max(884px, 100dvh);
      }
    </style>
  </head>
  <body class="bg-gray-50">
    <div class="relative flex min-h-screen flex-col bg-white justify-between group/design-root overflow-x-hidden" style='font-family: "Plus Jakarta Sans", "Noto Sans", sans-serif;'>
      <div>
        <header class="sticky top-0 z-50 bg-white shadow-sm">
          <div class="container mx-auto flex items-center justify-between p-4">
            <div class="flex items-center">
              <img alt="CabEase Logo" class="h-10 w-auto mr-3" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDvjWg0-5D3h_ot9sjUE-iRgTu4xcjGUN3DZC-JTYw_SWx5pVc8zABuQo9GLPVN2Z1z9zbnImkvSVZ6tphe-I5IJFooES4XZUERnYt2POa8WZu5ALH43VZWNV0-2nSKCrpTjGx0lMCioMO_0ecZx3Irp7KhOMqPWZBi0r90vQ5-AWGVSFb68ywga0OUaJdxOeJumXBgSRdd91mViqq-H1XhQN2v5ga84gkBOWyz9UPCtBei7D-aswiuNA108Lna39XHdpsxbiS6kXQ"/>
              <span class="text-2xl font-bold text-[#007BFF]">CabEase</span>
            </div>
            <nav class="hidden md:flex space-x-6 items-center">
              <a class="text-gray-700 hover:text-[#007BFF] font-medium" href="#about">About Us</a>
              <a class="text-gray-700 hover:text-[#007BFF] font-medium" href="#services">Services</a>
              <a class="text-gray-700 hover:text-[#007BFF] font-medium" href="#contact">Contact Us</a>
              <button class="flex items-center justify-center rounded-full h-10 px-5 bg-[#007BFF] text-white text-sm font-bold leading-normal tracking-[0.015em] hover:bg-[#0056b3] transition-colors" onclick="window.location.href='login.php'">
                <span class="truncate">Login / Register</span>
              </button>
            </nav>
            <button class="md:hidden text-[#121118]">
              <span class="material-icons">menu</span>
            </button>
          </div>
        </header>
        <main>
          <section class="relative flex min-h-[calc(100vh-80px)] flex-col items-center justify-center bg-cover bg-center bg-no-repeat p-4 text-center" style='background-image: linear-gradient(rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0.7) 100%), url("https://lh3.googleusercontent.com/aida-public/AB6AXuCQorSvjoYJzOo2CGoEOOVxf5vz3ujwwnMYHhUy-iFnCEdBYlgBBIlJ0NvLnIJHVhQTsJT-MSPSVRsn4x_YizYqJHdX1DILBNisGFR-SI9kjHqE_VBBNwCA_aVFsGEX2_ox8R3F97kIAi2oZRuz3XdsUlYmROHPQKYDY-_GcJwe3UMMFS01Sw4ST7yChLLYT7y7WgJnGNVX0eyppKRqbEs5iTnjgp8xoNRo_p8UcTDaZak7iRkU5EjXqfnuwBFJrG1vQC2tN5nK7NM");'>
            <div class="max-w-2xl">
              <h1 class="text-4xl font-black leading-tight tracking-tight text-white sm:text-5xl md:text-6xl">Your ride, your way.</h1>
              <p class="mt-4 text-lg text-gray-200 sm:text-xl">Book in seconds, ride with ease.</p>
              <div class="mt-10 flex flex-col space-y-4 sm:flex-row sm:space-y-0 sm:space-x-4 justify-center">
                <button class="flex w-full sm:w-auto min-w-[180px] cursor-pointer items-center justify-center overflow-hidden rounded-full h-12 px-6 bg-[#007BFF] text-white text-base font-bold leading-normal tracking-[0.015em] hover:bg-[#0056b3] transition-colors shadow-lg" onclick="window.location.href='login.php'">
                  <span class="truncate">Login to Book a Ride</span>
                </button>
                <button class="flex w-full sm:w-auto min-w-[180px] cursor-pointer items-center justify-center overflow-hidden rounded-full h-12 px-6 bg-white text-[#007BFF] text-base font-bold leading-normal tracking-[0.015em] hover:bg-gray-100 transition-colors shadow-lg" onclick="window.location.href='register.php'">
                  <span class="truncate">Register Now</span>
                </button>
              </div>
            </div>
          </section>
          <section class="py-16 px-4 @container bg-white" id="about">
            <div class="container mx-auto text-center">
              <h2 class="text-3xl font-bold tracking-tight text-[#121118] sm:text-4xl mb-6">About Us</h2>
              <p class="mx-auto max-w-3xl text-lg text-gray-700 mb-12">
                CabEase is dedicated to providing safe, reliable, and affordable transportation solutions. Our mission is to connect riders with professional drivers seamlessly,
                ensuring a comfortable and efficient travel experience.
              </p>
              <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
                <div class="flex flex-col items-center rounded-xl border border-gray-200 bg-white p-6 shadow-lg transition-transform hover:scale-105">
                  <div class="mb-4 flex size-16 items-center justify-center rounded-full bg-[#007BFF] text-white">
                    <span class="material-icons text-3xl">security</span>
                  </div>
                  <h3 class="mb-2 text-xl font-bold text-[#121118]">Our Commitment</h3>
                  <p class="text-gray-600">We prioritize safety, reliability, and customer satisfaction in every ride.</p>
                </div>
                <div class="flex flex-col items-center rounded-xl border border-gray-200 bg-white p-6 shadow-lg transition-transform hover:scale-105">
                  <div class="mb-4 flex size-16 items-center justify-center rounded-full bg-[#007BFF] text-white">
                    <span class="material-icons text-3xl">directions_car</span>
                  </div>
                  <h3 class="mb-2 text-xl font-bold text-[#121118]">Modern Fleet</h3>
                  <p class="text-gray-600">Enjoy your journey in our comfortable and well-maintained vehicles.</p>
                </div>
                <div class="flex flex-col items-center rounded-xl border border-gray-200 bg-white p-6 shadow-lg transition-transform hover:scale-105">
                  <div class="mb-4 flex size-16 items-center justify-center rounded-full bg-[#007BFF] text-white">
                    <span class="material-icons text-3xl">support_agent</span>
                  </div>
                  <h3 class="mb-2 text-xl font-bold text-[#121118]">24/7 Support</h3>
                  <p class="text-gray-600">Our team is always here to help you, anytime you need assistance.</p>
                </div>
              </div>
            </div>
          </section>
          <section class="py-16 px-4 @container bg-gray-50" id="services">
            <div class="container mx-auto text-center">
              <h2 class="text-3xl font-bold tracking-tight text-[#121118] sm:text-4xl mb-6">Our Services</h2>
              <p class="mx-auto max-w-3xl text-lg text-gray-700 mb-12">
                We offer a range of services to meet your transportation needs, including on-demand rides, scheduled pickups, and airport transfers. Our platform ensures quick
                booking, real-time tracking, and transparent pricing.
              </p>
              <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
                <div class="flex flex-col items-center rounded-xl border border-gray-200 bg-white p-6 shadow-lg transition-transform hover:scale-105">
                  <div class="mb-4 flex size-16 items-center justify-center rounded-full bg-[#007BFF] text-white">
                    <span class="material-icons text-3xl">gps_fixed</span>
                  </div>
                  <h3 class="mb-2 text-xl font-bold text-[#121118]">On-Demand Rides</h3>
                  <p class="text-gray-600">Get a ride whenever you need it, right at your fingertips.</p>
                </div>
                <div class="flex flex-col items-center rounded-xl border border-gray-200 bg-white p-6 shadow-lg transition-transform hover:scale-105">
                  <div class="mb-4 flex size-16 items-center justify-center rounded-full bg-[#007BFF] text-white">
                    <span class="material-icons text-3xl">event_available</span>
                  </div>
                  <h3 class="mb-2 text-xl font-bold text-[#121118]">Scheduled Pickups</h3>
                  <p class="text-gray-600">Plan your trips in advance for peace of mind.</p>
                </div>
                <div class="flex flex-col items-center rounded-xl border border-gray-200 bg-white p-6 shadow-lg transition-transform hover:scale-105">
                  <div class="mb-4 flex size-16 items-center justify-center rounded-full bg-[#007BFF] text-white">
                    <span class="material-icons text-3xl">flight</span>
                  </div>
                  <h3 class="mb-2 text-xl font-bold text-[#121118]">Airport Transfers</h3>
                  <p class="text-gray-600">Reliable and timely rides to and from the airport.</p>
                </div>
              </div>
            </div>
          </section>
          <section class="py-16 px-4 @container bg-white" id="contact">
            <div class="container mx-auto text-center">
              <h2 class="text-3xl font-bold tracking-tight text-[#121118] sm:text-4xl mb-6">Contact Us</h2>
              <p class="mx-auto max-w-3xl text-lg text-gray-700 mb-12">
                For any inquiries or support, please reach out to us. Our customer service team is available 24/7 to assist you with your needs.
              </p>
              <div class="grid grid-cols-1 gap-8 md:grid-cols-3">
                <div class="flex flex-col items-center rounded-xl border border-gray-200 bg-gray-50 p-6 shadow-lg">
                  <div class="mb-4 flex size-16 items-center justify-center rounded-full bg-[#007BFF] text-white">
                    <span class="material-icons text-3xl">call</span>
                  </div>
                  <h3 class="mb-2 text-xl font-bold text-[#121118]">Phone</h3>
                  <p class="text-gray-600 hover:text-[#007BFF]"><a href="tel:+1-555-123-4567">+91-555-123-4567</a></p>
                </div>
                <div class="flex flex-col items-center rounded-xl border border-gray-200 bg-gray-50 p-6 shadow-lg">
                  <div class="mb-4 flex size-16 items-center justify-center rounded-full bg-[#007BFF] text-white">
                    <span class="material-icons text-3xl">email</span>
                  </div>
                  <h3 class="mb-2 text-xl font-bold text-[#121118]">Email</h3>
                  <p class="text-gray-600 hover:text-[#007BFF]"><a href="mailto:support@cabease.com">support@cabease.com</a></p>
                </div>
                <div class="flex flex-col items-center rounded-xl border border-gray-200 bg-gray-50 p-6 shadow-lg">
                  <div class="mb-4 flex size-16 items-center justify-center rounded-full bg-[#007BFF] text-white">
                    <span class="material-icons text-3xl">location_on</span>
                  </div>
                  <h3 class="mb-2 text-xl font-bold text-[#121118]">Address</h3>
                  <p class="text-gray-600">Dhule</p>
                </div>
              </div>
            </div>
          </section>
        </main>
      </div>
      <footer class="bg-gray-800 text-white py-10">
        <div class="container mx-auto flex flex-col md:flex-row items-center justify-between px-4 text-center md:text-left">
          <div class="flex items-center mb-4 md:mb-0">
            <img alt="CabEase Logo" class="h-10 w-auto mr-3 invert brightness-0" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC9ufw4OVx1APa-Ks2DtLpmseFQEfRxMXA3pDLWtAX_1K3qYKzbKOQM3rvLMa2vNW9fZvmLRRbqAXaefnXMBUA7b2NEkXnokO9fZJ_qiN9Np9Dr1k84a2gDyCR9y3vM4c_2ixFhmOcEiEulgpfzGN5fLdpGOZu4c4lHuTqU7fN9tdJ873j8c_1BAMzLP7_QESjN0wTSkim82ogBZtUKmbarQ-vGyPFIaJfmT_vSOnoOzpV9GsMTOSzGZU3rytQ-_agVUTA49ZH_alg"/>
            <span class="text-xl font-bold">CabEase</span>
          </div>
          <p class="text-gray-400 text-sm">© CabEase. All rights reserved.</p>
        </div>
      </footer>
    </div>
  </body>
</html>
