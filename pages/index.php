<html>
  <head>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
    <link
      rel="stylesheet"
      as="style"
      onload="this.rel='stylesheet'"
      href="https://fonts.googleapis.com/css2?display=swap&family=Noto+Sans%3Awght%40400%3B500%3B700%3B900&family=Plus+Jakarta+Sans%3Awght%40400%3B500%3B700%3B800"
    />

    <title>CabEase</title>
    <link rel="icon" type="image/x-icon" href="data:image/x-icon;base64," />

    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  </head>
  <body>
    <div class="relative flex size-full min-h-screen flex-col bg-white group/design-root overflow-x-hidden" style='font-family: "Plus Jakarta Sans", "Noto Sans", sans-serif;'>
      <div class="layout-container flex h-full grow flex-col">
        <header class="flex items-center justify-between whitespace-nowrap border-b border-solid border-b-[#f0f2f5] px-10 py-3">
          <div class="flex items-center gap-4 text-[#111318]">
            <div class="size-4">
              <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M4 42.4379C4 42.4379 14.0962 36.0744 24 41.1692C35.0664 46.8624 44 42.2078 44 42.2078L44 7.01134C44 7.01134 35.068 11.6577 24.0031 5.96913C14.0971 0.876274 4 7.27094 4 7.27094L4 42.4379Z"
                  fill="currentColor"
                ></path>
              </svg>
            </div>
            <h2 class="text-[#111318] text-lg font-bold leading-tight tracking-[-0.015em]">CabEase</h2>
          </div>
          <div class="flex flex-1 justify-end gap-8">
            <div class="flex items-center gap-9">
              <a class="text-[#111318] text-sm font-medium leading-normal" href="#about-us">About Us</a>
              <a class="text-[#111318] text-sm font-medium leading-normal" href="#services">Services</a>
              <a class="text-[#111318] text-sm font-medium leading-normal" href="#contact-us">Contact Us</a>
            </div>
            <button
              class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-[#246cf3] text-white text-sm font-bold leading-normal tracking-[0.015em]"
              onclick="window.location.href='login.php'"
            >
              <span class="truncate">Login / Register</span>
            </button>
          </div>
        </header>
        <div class="px-40 flex flex-1 justify-center py-5">
          <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
            <div class="@container">
              <div class="@[480px]:p-4">
                <div
                  class="flex min-h-[480px] flex-col gap-6 bg-cover bg-center bg-no-repeat @[480px]:gap-8 @[480px]:rounded-lg items-center justify-center p-4"
                  style='background-image: linear-gradient(rgba(0, 0, 0, 0.1) 0%, rgba(0, 0, 0, 0.4) 100%), url("https://lh3.googleusercontent.com/aida-public/AB6AXuABx2aTePp9SsPXHbwt0gnZEyMCCZzAv_NCn4_1ph_L28xRheeOBvB6Gz1u8ZCDgXuUN0PDHNMBPjdXH6wIMEsDjjm8mMsHHrT_e48ttrXygDxC-BYMAS5Uhxk8W0CO0HtxyICqa1nzLv_MY70SqTJ81wqYC_uMY3mBgP954iHTivUYSL57zSE3HC0sCpxGbbJhAF_vIsPt4gzGHtQ7gMq0oAihVhD14FBVMpn1r9oUJn-c26xfEXtks08uy833rGtdccRE5dPBslKg");'
                >
                  <h1
                    class="text-white text-4xl font-black leading-tight tracking-[-0.033em] @[480px]:text-5xl @[480px]:font-black @[480px]:leading-tight @[480px]:tracking-[-0.033em] text-center"
                  >
                    Your ride, your way. Book in seconds, ride with ease.
                  </h1>
                  <div class="flex-wrap gap-3 flex justify-center">
                    <button
                      class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 @[480px]:h-12 @[480px]:px-5 bg-[#246cf3] text-white text-sm font-bold leading-normal tracking-[0.015em] @[480px]:text-base @[480px]:font-bold @[480px]:leading-normal @[480px]:tracking-[0.015em]"
                      onclick="window.location.href='login.php'"
                    >
                      <span class="truncate">Login to Book a Ride</span>
                    </button>
                    <button
                      class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 @[480px]:h-12 @[480px]:px-5 bg-[#f0f2f5] text-[#111318] text-sm font-bold leading-normal tracking-[0.015em] @[480px]:text-base @[480px]:font-bold @[480px]:leading-normal @[480px]:tracking-[0.015em]"
                      onclick="window.location.href='register.php'"
                    >
                      <span class="truncate">Register Now</span>
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <h2 class="text-[#111318] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5" id="about-us">About Us</h2>
            <div class="flex flex-col gap-10 px-4 py-10 @container">
              <div class="flex flex-col gap-4">
                <h1
                  class="text-[#111318] tracking-light text-[32px] font-bold leading-tight @[480px]:text-4xl @[480px]:font-black @[480px]:leading-tight @[480px]:tracking-[-0.033em] max-w-[720px]"
                >
                  Our Mission & Values
                </h1>
                <p class="text-[#111318] text-base font-normal leading-normal max-w-[720px]">
                  At CabEase, we're dedicated to transforming your travel experience. Our mission is to provide a seamless, reliable, and safe cab booking service that caters to
                  your unique needs. We value transparency, customer satisfaction, and continuous improvement.
                </p>
              </div>
              <div class="grid grid-cols-[repeat(auto-fit,minmax(158px,1fr))] gap-3 p-0">
                <div class="flex flex-1 gap-3 rounded-lg border border-[#dbdfe6] bg-white p-4 flex-col">
                  <div class="text-[#111318]" data-icon="Users" data-size="24px" data-weight="regular">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                      <path
                        d="M117.25,157.92a60,60,0,1,0-66.5,0A95.83,95.83,0,0,0,3.53,195.63a8,8,0,1,0,13.4,8.74,80,80,0,0,1,134.14,0,8,8,0,0,0,13.4-8.74A95.83,95.83,0,0,0,117.25,157.92ZM40,108a44,44,0,1,1,44,44A44.05,44.05,0,0,1,40,108Zm210.14,98.7a8,8,0,0,1-11.07-2.33A79.83,79.83,0,0,0,172,168a8,8,0,0,1,0-16,44,44,0,1,0-16.34-84.87,8,8,0,1,1-5.94-14.85,60,60,0,0,1,55.53,105.64,95.83,95.83,0,0,1,47.22,37.71A8,8,0,0,1,250.14,206.7Z"
                      ></path>
                    </svg>
                  </div>
                  <div class="flex flex-col gap-1">
                    <h2 class="text-[#111318] text-base font-bold leading-tight">Customer-Centric Approach</h2>
                    <p class="text-[#606f8a] text-sm font-normal leading-normal">We prioritize your comfort and convenience, ensuring every ride is a pleasant experience.</p>
                  </div>
                </div>
                <div class="flex flex-1 gap-3 rounded-lg border border-[#dbdfe6] bg-white p-4 flex-col">
                  <div class="text-[#111318]" data-icon="Target" data-size="24px" data-weight="regular">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                      <path
                        d="M221.87,83.16A104.1,104.1,0,1,1,195.67,49l22.67-22.68a8,8,0,0,1,11.32,11.32l-96,96a8,8,0,0,1-11.32-11.32l27.72-27.72a40,40,0,1,0,17.87,31.09,8,8,0,1,1,16-.9,56,56,0,1,1-22.38-41.65L184.3,60.39a87.88,87.88,0,1,0,23.13,29.67,8,8,0,0,1,14.44-6.9Z"
                      ></path>
                    </svg>
                  </div>
                  <div class="flex flex-col gap-1">
                    <h2 class="text-[#111318] text-base font-bold leading-tight">Reliability & Safety</h2>
                    <p class="text-[#606f8a] text-sm font-normal leading-normal">We guarantee safe and dependable rides, with rigorous driver screening and vehicle maintenance.</p>
                  </div>
                </div>
                <div class="flex flex-1 gap-3 rounded-lg border border-[#dbdfe6] bg-white p-4 flex-col">
                  <div class="text-[#111318]" data-icon="ShieldCheck" data-size="24px" data-weight="regular">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                      <path
                        d="M208,40H48A16,16,0,0,0,32,56v58.78c0,89.61,75.82,119.34,91,124.39a15.53,15.53,0,0,0,10,0c15.2-5.05,91-34.78,91-124.39V56A16,16,0,0,0,208,40Zm0,74.79c0,78.42-66.35,104.62-80,109.18-13.53-4.51-80-30.69-80-109.18V56H208ZM82.34,141.66a8,8,0,0,1,11.32-11.32L112,148.68l50.34-50.34a8,8,0,0,1,11.32,11.32l-56,56a8,8,0,0,1-11.32,0Z"
                      ></path>
                    </svg>
                  </div>
                  <div class="flex flex-col gap-1">
                    <h2 class="text-[#111318] text-base font-bold leading-tight">Innovation & Efficiency</h2>
                    <p class="text-[#606f8a] text-sm font-normal leading-normal">We constantly innovate to enhance our platform, making booking and riding easier than ever.</p>
                  </div>
                </div>
              </div>
            </div>
            <h2 class="text-[#111318] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5" id="services">Our Services</h2>
            <div class="flex flex-col gap-10 px-4 py-10 @container">
              <div class="flex flex-col gap-4">
                <h1
                  class="text-[#111318] tracking-light text-[32px] font-bold leading-tight @[480px]:text-4xl @[480px]:font-black @[480px]:leading-tight @[480px]:tracking-[-0.033em] max-w-[720px]"
                >
                  Explore Our Comprehensive Services
                </h1>
                <p class="text-[#111318] text-base font-normal leading-normal max-w-[720px]">
                  CabEase offers a range of services designed to meet all your transportation needs. From quick bookings to detailed ride management, we've got you covered.
                </p>
              </div>
              <div class="grid grid-cols-[repeat(auto-fit,minmax(158px,1fr))] gap-3 p-0">
                <div class="flex flex-1 gap-3 rounded-lg border border-[#dbdfe6] bg-white p-4 flex-col">
                  <div class="text-[#111318]" data-icon="ClockCounterClockwise" data-size="24px" data-weight="regular">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                      <path
                        d="M136,80v43.47l36.12,21.67a8,8,0,0,1-8.24,13.72l-40-24A8,8,0,0,1,120,128V80a8,8,0,0,1,16,0Zm-8-48A95.44,95.44,0,0,0,60.08,60.15C52.81,67.51,46.35,74.59,40,82V64a8,8,0,0,0-16,0v40a8,8,0,0,0,8,8H72a8,8,0,0,0,0-16H49c7.15-8.42,14.27-16.35,22.39-24.57a80,80,0,1,1,1.66,114.75,8,8,0,1,0-11,11.64A96,96,0,1,0,128,32Z"
                      ></path>
                    </svg>
                  </div>
                  <div class="flex flex-col gap-1">
                    <h2 class="text-[#111318] text-base font-bold leading-tight">Instant Cab Booking</h2>
                    <p class="text-[#606f8a] text-sm font-normal leading-normal">Book a cab in seconds with our intuitive platform, available on web and mobile.</p>
                  </div>
                </div>
                <div class="flex flex-1 gap-3 rounded-lg border border-[#dbdfe6] bg-white p-4 flex-col">
                  <div class="text-[#111318]" data-icon="User" data-size="24px" data-weight="regular">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                      <path
                        d="M230.92,212c-15.23-26.33-38.7-45.21-66.09-54.16a72,72,0,1,0-73.66,0C63.78,166.78,40.31,185.66,25.08,212a8,8,0,1,0,13.85,8c18.84-32.56,52.14-52,89.07-52s70.23,19.44,89.07,52a8,8,0,1,0,13.85-8ZM72,96a56,56,0,1,1,56,56A56.06,56.06,0,0,1,72,96Z"
                      ></path>
                    </svg>
                  </div>
                  <div class="flex flex-col gap-1">
                    <h2 class="text-[#111318] text-base font-bold leading-tight">User Dashboard</h2>
                    <p class="text-[#606f8a] text-sm font-normal leading-normal">Manage your profile, preferences, and payment methods with ease.</p>
                  </div>
                </div>
                <div class="flex flex-1 gap-3 rounded-lg border border-[#dbdfe6] bg-white p-4 flex-col">
                  <div class="text-[#111318]" data-icon="Clock" data-size="24px" data-weight="regular">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                      <path
                        d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm0,192a88,88,0,1,1,88-88A88.1,88.1,0,0,1,128,216Zm64-88a8,8,0,0,1-8,8H128a8,8,0,0,1-8-8V72a8,8,0,0,1,16,0v48h48A8,8,0,0,1,192,128Z"
                      ></path>
                    </svg>
                  </div>
                  <div class="flex flex-col gap-1">
                    <h2 class="text-[#111318] text-base font-bold leading-tight">Ride History</h2>
                    <p class="text-[#606f8a] text-sm font-normal leading-normal">Access your past rides, review details, and manage your travel history.</p>
                  </div>
                </div>
                <div class="flex flex-1 gap-3 rounded-lg border border-[#dbdfe6] bg-white p-4 flex-col">
                  <div class="text-[#111318]" data-icon="Headset" data-size="24px" data-weight="regular">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                      <path
                        d="M201.89,54.66A103.43,103.43,0,0,0,128.79,24H128A104,104,0,0,0,24,128v56a24,24,0,0,0,24,24H64a24,24,0,0,0,24-24V144a24,24,0,0,0-24-24H40.36A88.12,88.12,0,0,1,190.54,65.93,87.39,87.39,0,0,1,215.65,120H192a24,24,0,0,0-24,24v40a24,24,0,0,0,24,24h24a24,24,0,0,1-24,24H136a8,8,0,0,0,0,16h56a40,40,0,0,0,40-40V128A103.41,103.41,0,0,0,201.89,54.66ZM64,192a8,8,0,0,1-16,0V128a8,8,0,0,1,16,0Zm136,0a8,8,0,0,1-16,0V128a8,8,0,0,1,16,0Z"
                      ></path>
                    </svg>
                  </div>
                  <div class="flex flex-col gap-1">
                    <h2 class="text-[#111318] text-base font-bold leading-tight">24/7 Customer Support</h2>
                    <p class="text-[#606f8a] text-sm font-normal leading-normal">Our dedicated support team is available around the clock to assist you with any queries or issues.</p>
                  </div>
                </div>
              </div>
            </div>
            <h2 class="text-[#111318] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5" id="contact-us">Contact Us</h2>
            <div class="flex flex-col gap-10 px-4 py-10 @container">
              <div class="flex flex-col gap-4">
                <h1
                  class="text-[#111318] tracking-light text-[32px] font-bold leading-tight @[480px]:text-4xl @[480px]:font-black @[480px]:leading-tight @[480px]:tracking-[-0.033em] max-w-[720px]"
                >
                  Get in Touch with CabEase
                </h1>
                <p class="text-[#111318] text-base font-normal leading-normal max-w-[720px]">
                  Have questions, feedback, or need assistance? Reach out to us through the contact information below.
                </p>
              </div>
              <div class="grid grid-cols-[repeat(auto-fit,minmax(158px,1fr))] gap-3 p-0">
                <div class="flex flex-1 gap-3 rounded-lg border border-[#dbdfe6] bg-white p-4 flex-col">
                  <div class="text-[#111318]" data-icon="Phone" data-size="24px" data-weight="regular">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                      <path
                        d="M222.31,166.42l-40.16-17.21a16,16,0,0,0-18.06,4.07l-17.84,17.84a96,96,0,0,1-105.82-105.82l17.84-17.84a16,16,0,0,0,4.07-18.06L89.58,33.69A16,16,0,0,0,73.1,28.2L32.44,38.83A16,16,0,0,0,21.84,55.33C48.51,146.43,109.57,207.49,200.67,234.16a16,16,0,0,0,16.5-10.6L227.8,182.9A16,16,0,0,0,222.31,166.42Z"
                      ></path>
                    </svg>
                  </div>
                  <div class="flex flex-col gap-1">
                    <h2 class="text-[#111318] text-base font-bold leading-tight">Phone</h2>
                    <p class="text-[#606f8a] text-sm font-normal leading-normal">Call us anytime for direct assistance.</p>
                    <a class="text-[#246cf3] text-sm font-medium leading-normal" href="#">+1 (123) 456-7890</a>
                  </div>
                </div>
                <div class="flex flex-1 gap-3 rounded-lg border border-[#dbdfe6] bg-white p-4 flex-col">
                  <div class="text-[#111318]" data-icon="EnvelopeSimple" data-size="24px" data-weight="regular">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                      <path
                        d="M224,48H32A16,16,0,0,0,16,64V192a16,16,0,0,0,16,16H224a16,16,0,0,0,16-16V64A16,16,0,0,0,224,48ZM32,64H224L128,128ZM32,192V69.1L121.37,130.4a16,16,0,0,0,13.26,0L224,69.1V192Z"
                      ></path>
                    </svg>
                  </div>
                  <div class="flex flex-col gap-1">
                    <h2 class="text-[#111318] text-base font-bold leading-tight">Email</h2>
                    <p class="text-[#606f8a] text-sm font-normal leading-normal">Send us an email with your inquiries.</p>
                    <a class="text-[#246cf3] text-sm font-medium leading-normal" href="#">support@cabease.com</a>
                  </div>
                </div>
                <div class="flex flex-1 gap-3 rounded-lg border border-[#dbdfe6] bg-white p-4 flex-col">
                  <div class="text-[#111318]" data-icon="ChatTeardropText" data-size="24px" data-weight="regular">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                      <path
                        d="M216,40H40A16,16,0,0,0,24,56V200a16,16,0,0,0,16,16H192.17l36.09,24.06A8,8,0,0,0,236,240a8,8,0,0,0,4-1.06,8,8,0,0,0,4-6.94V56A16,16,0,0,0,216,40ZM228,66.69V222.18L197.83,200H40V56H216Z"
                      ></path>
                    </svg>
                  </div>
                  <div class="flex flex-col gap-1">
                    <h2 class="text-[#111318] text-base font-bold leading-tight">Live Chat</h2>
                    <p class="text-[#606f8a] text-sm font-normal leading-normal">Chat with a representative for instant help.</p>
                    <a class="text-[#246cf3] text-sm font-normal leading-normal" href="#">Start Chat</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="flex flex-col gap-6 py-10 px-4">
              <div class="flex flex-col gap-3">
                <h2 class="text-[#111318] text-[22px] font-bold leading-tight tracking-[-0.015em]">Follow Us</h2>
                <p class="text-[#606f8a] text-base font-normal leading-normal">Stay connected and get the latest updates by following us on social media.</p>
              </div>
              <div class="flex gap-4">
                <a href="#">
                  <div class="flex flex-col items-center gap-2 bg-white py-2.5 text-center w-20">
                    <div class="rounded-full bg-[#f0f2f5] p-2.5">
                      <div class="text-[#111318]" data-icon="FacebookLogo" data-size="20px" data-weight="regular">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                          <path
                            d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm8,191.63V152h24a8,8,0,0,0,0-16H136V112a16,16,0,0,1,16-16h16a8,8,0,0,0,0-16H152a32,32,0,0,0-32,32v24H96a8,8,0,0,0,0,16h24v63.63a88,88,0,1,1,16,0Z"
                          ></path>
                        </svg>
                      </div>
                    </div>
                  </div>
                </a>
                <a href="#">
                  <div class="flex flex-col items-center gap-2 bg-white py-2.5 text-center w-20">
                    <div class="rounded-full bg-[#f0f2f5] p-2.5">
                      <div class="text-[#111318]" data-icon="TwitterLogo" data-size="20px" data-weight="regular">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                          <path
                            d="M247.39,68.94A8,8,0,0,0,240,64H209.57A48.66,48.66,0,0,0,168.1,40a46.91,46.91,0,0,0-33.75,13.7A47.9,47.9,0,0,0,120,88v6.09C79.74,83.47,46.81,50.72,46.46,50.37a8,8,0,0,0-13.65,4.92c-4.31,47.79,9.57,79.77,22,98.18a110.93,110.93,0,0,0,21.88,24.2c-15.23,17.53-39.21,26.74-39.47,26.84a8,8,0,0,0-3.85,11.93c.75,1.12,3.75,5.05,11.08,8.72C53.51,229.7,65.48,232,80,232c70.67,0,129.72-54.42,135.75-124.44l29.91-29.9A8,8,0,0,0,247.39,68.94Zm-45,29.41a8,8,0,0,0-2.32,5.14C196,166.58,143.28,216,80,216c-10.56,0-18-1.4-23.22-3.08,11.51-6.25,27.56-14.94,40-25.29,4.42-3.6,8.3-7.53,11.45-11.49a8,8,0,0,0-13.76-8C89.5,176.4,75.11,186.2,60.9,193.36,66.19,178.68,57.73,158.49,57.5,133.44c.14-11.17,1.83-20.73,4.11-29.83a8,8,0,0,0-13.56-6.4C37.28,107.13,32.33,121.72,32,137.66c.25,23.3,7.58,42.44,19.26,58.33,13.58,18.17,33.56,31.2,56.55,36.42,2.77.63,5.65.91,8.59.91,1.15,0,2.3-.06,3.44-.19,57.57-6.27,103.73-51.13,103.73-107.12,0-1.42-.06-2.83-.1-4.24a8,8,0,0,0-2.48-6C218.4,94.27,222.39,97.77,202.39,98.35Z"
                          ></path>
                        </svg>
                      </div>
                    </div>
                  </div>
                </a>
                <a href="#">
                  <div class="flex flex-col items-center gap-2 bg-white py-2.5 text-center w-20">
                    <div class="rounded-full bg-[#f0f2f5] p-2.5">
                      <div class="text-[#111318]" data-icon="InstagramLogo" data-size="20px" data-weight="regular">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                          <path
                            d="M128,80a48,48,0,1,0,48,48A48.05,48.05,0,0,0,128,80Zm0,80a32,32,0,1,1,32-32A32,32,0,0,1,128,160ZM176,24H80A56,56,0,0,0,24,80v96a56,56,0,0,0,56,56h96a56,56,0,0,0,56-56V80A56,56,0,0,0,176,24Zm40,152a40,40,0,0,1-40,40H80a40,40,0,0,1-40-40V80A40,40,0,0,1,80,40h96a40,40,0,0,1,40,40ZM192,76a12,12,0,1,1-12-12A12,12,0,0,1,192,76Z"
                          ></path>
                        </svg>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
        <footer class="flex items-center justify-between gap-4 border-t border-solid border-t-[#f0f2f5] px-10 py-3">
          <div class="flex items-center gap-4 text-[#111318]">
            <div class="size-4">
              <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M4 42.4379C4 42.4379 14.0962 36.0744 24 41.1692C35.0664 46.8624 44 42.2078 44 42.2078L44 7.01134C44 7.01134 35.068 11.6577 24.0031 5.96913C14.0971 0.876274 4 7.27094 4 7.27094L4 42.4379Z"
                  fill="currentColor"
                ></path>
              </svg>
            </div>
            <h2 class="text-[#111318] text-lg font-bold leading-tight tracking-[-0.015em]">CabEase</h2>
          </div>
          <p class="text-[#606f8a] text-sm font-normal leading-normal">© CabEase. All rights reserved.</p>
        </footer>
      </div>
    </div>
  </body>
</html>