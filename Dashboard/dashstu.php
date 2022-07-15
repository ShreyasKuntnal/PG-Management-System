<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>HotePayant Dashboard</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../assets/css/tailwind.output.css" />
    <script
      src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"
      defer
    ></script>
    <script src="../assets/js/init-alpine.js"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css"
    />
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"
      defer
    ></script>
    <script src="./assets/js/charts-lines.js" defer></script>
    <script src="./assets/js/charts-pie.js" defer></script>
  </head>
  <body>
    <div
      class="flex h-screen bg-gray-50 dark:bg-gray-900"
      :class="{ 'overflow-hidden': isSideMenuOpen }"
    >
      <!-- Desktop sidebar -->
      <aside
        class="z-20 hidden w-64 overflow-y-auto bg-white dark:bg-gray-800 md:block flex-shrink-0"
      >
        <div class="py-4 text-gray-500 dark:text-gray-400">
          <a
            class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200"
            href="index.html"
          >
            Hote Payant
          </a>
          <ul class="mt-6">
            <li class="relative px-6 py-3">
              <span
                class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
                aria-hidden="true"
              ></span>
              <a
                class="inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100"
                href="#"
              >
                <svg
                  class="w-5 h-5"
                  aria-hidden="true"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"
                  ></path>
                </svg>
                <span class="ml-4">Booking PG</span>
              </a>
            </li>
            </ul>
              </template>
            </li>
          </ul>
          <ul>
            <li class="relative px-6 py-3">
              <a
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                href="payment2.html"
              >
                <svg
                  class="w-5 h-5"
                  aria-hidden="true"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"
                  ></path>
                </svg>
                <span class="ml-4">Payments</span> 
              </a>
            </li>
            <li class="relative px-6 py-3">
                <a
                  class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                  href="issue2.html"
                >
                  <svg
                    class="w-5 h-5"
                    aria-hidden="true"
                    fill="none"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                  >
                    <path
                      d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"
                    ></path>
                  </svg>
                  <span class="ml-4">Issues</span>
                </a>
              </li>
          </ul>
        </div>
      </aside>
      <!-- Mobile sidebar -->
      <!-- Backdrop -->
      <div
        x-show="isSideMenuOpen"
        x-transition:enter="transition ease-in-out duration-150"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in-out duration-150"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="fixed inset-0 z-10 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center"
      ></div>
      <aside
        class="fixed inset-y-0 z-20 flex-shrink-0 w-64 mt-16 overflow-y-auto bg-white dark:bg-gray-800 md:hidden"
        x-show="isSideMenuOpen"
        x-transition:enter="transition ease-in-out duration-150"
        x-transition:enter-start="opacity-0 transform -translate-x-20"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in-out duration-150"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0 transform -translate-x-20"
        @click.away="closeSideMenu"
        @keydown.escape="closeSideMenu"
      >
        <div class="py-4 text-gray-500 dark:text-gray-400">
          <a
            class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200"
            href="index.html"
          >
            Hote Payant
          </a>
          <ul class="mt-6">
            <li class="relative px-6 py-3">
              <span
              class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
              aria-hidden="true"
            ></span> 
              <a
                  class="inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100"
                  href="dashstu2.html"
                >
                  <svg
                    class="w-5 h-5"
                    aria-hidden="true"
                    fill="none"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                  >
                    <path
                      d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"
                    ></path>
                  </svg>
                  <span class="ml-4">Booking PG</span>
                </a>
              </li>
            </ul>
            </template>
            </li>
          </ul>
          <ul>
            <li class="relative px-6 py-3">
              <a
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                href="payment2.html"
              >
                <svg
                  class="w-5 h-5"
                  aria-hidden="true"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"
                  ></path>
                </svg>
                <span class="ml-4">Payments</span>
              </a>
            </li>
           <li class="relative px-6 py-3">
              <a
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                href="issue2.html"
              >
                <svg
                  class="w-5 h-5"
                  aria-hidden="true"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"
                  ></path>
                </svg>
                <span class="ml-4">Issues</span>
              </a>
            </li>
            
          </ul>
          
        </div>
      </aside>
      <div class="flex flex-col flex-1 w-full">
        <header class="z-10 py-4 bg-white shadow-md dark:bg-gray-800">
          <div
            class="container flex items-center justify-between h-full px-6 mx-auto text-purple-600 dark:text-purple-300"
          >
            <!-- Mobile hamburger -->
            <button
              class="p-1 mr-5 -ml-1 rounded-md md:hidden focus:outline-none focus:shadow-outline-purple"
              @click="toggleSideMenu"
              aria-label="Menu"
            >
              <svg
                class="w-6 h-6"
                aria-hidden="true"
                fill="currentColor"
                viewBox="0 0 20 20"
              >
                <path
                  fill-rule="evenodd"
                  d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                  clip-rule="evenodd"
                ></path>
              </svg>
            </button>
            <!-- Search input -->
            <div class="flex justify-center flex-1 lg:mr-32">
              <div
                class="relative w-full max-w-xl mr-6 focus-within:text-purple-500"
              >
              </div>
            </div>
            <ul class="flex items-center flex-shrink-0 space-x-6">
              
                <button
                  class="align-middle rounded-full focus:shadow-outline-purple focus:outline-none"
                  @click="toggleProfileMenu"
                  @keydown.escape="closeProfileMenu"
                  aria-label="Account"
                  aria-haspopup="true"
                >
                  <a
                  class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                  href="../pages/login.html"
                  >
                  <svg
                    class="w-4 h-4 mr-3"
                    aria-hidden="true"
                    fill="none"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    >
                    <path
                      d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"
                    ></path>
                  </svg>
                  <span>Log out</span>
                </a>
                </button>

            </ul>
          </div>
        </header>
         <!-- New Table -->
            
            <main class="h-full pb-16 overflow-y-auto">
                <div class="container grid px-6 mx-auto">
                  <h2
                    class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
                  >
                  List of Pg's<hr>
                  </h2>
                  <!-- With actions -->
                  <!-- <h4
                    class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300"
                  >
                    
                  </h4> -->
      
                  <div class="flex justify-center flex-1 lg:mr-32">
                    <div
                      class="relative w-full max-w-xl mr-6 focus-within:text-purple-500"
                    >
                      <div class="absolute inset-y-0 flex items-center pl-2">
                        <svg
                          class="w-4 h-4"
                          aria-hidden="true"
                          fill="currentColor"
                          viewBox="0 0 20 20"
                        >
                          <path
                            fill-rule="evenodd"
                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                            clip-rule="evenodd"
                          ></path>
                        </svg>
                      </div>
                      <input
                        class="w-full pl-8 pr-2 text-sm text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input"
                        type="text"
                        placeholder="Search by Name"
                        aria-label="Search"
                      />
                    </div>
                  </div>
                  <br>
                  <div class="w-full overflow-hidden rounded-lg shadow-xs">
                    <div class="w-full overflow-x-auto">
                      <table class="w-full whitespace-no-wrap">
                        <thead>
                          <tr
                            class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
                          >
                            <th class="px-4 py-3">Name</th>
                            <th class="px-4 py-3">Rent per Month</th>
                            <th class="px-4 py-3">Category</th>
                            <th class="px-4 py-3">Phone Number</th>
                            <th class="px-4 py-3">Actions</th>
                          </tr>
                        </thead>
                        <tbody
                          class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"
                        >
                        <!--1st PG-->
                          <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3">
                              <div class="flex items-center text-sm">
                                <div>
                                    <img src="../assets/images/pg images/venu Pg.jpg" >
                                  <p class="font-semibold"><a href="#">Venus PG</a></p>
                                  <p class="text-xs text-gray-600 dark:text-gray-400">
                                    Address:#16, Banashankari Arcade, above Cafe Coffee Day,<br> Kumaraswamy Layout, Bengaluru, Karnataka 560078<br><br>Rating: 4.6/5<br><br>
                                    Distance:700mtrs from college
                                  </p>
                                </div>
                              </div>
                            </td>
                            <td class="px-4 py-3 text-sm">
                              ₹10000/- <br><br>₹8000/- <br><br>₹6500/-
                            </td>
                            <td class="px-4 py-3 text-sm">
                              
                              Single <br><br>Double <br><br> Triple
                            </td>
                            <td class="px-4 py-3 text-sm">
                              +91-8979456325
                            </td>
                            <td class="px-4 py-3">
                              <div class="flex items-center space-x-4 text-sm">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3886.8783262050792!2d77.624621!3d13.043416!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6942e3fff56e1068!2sSri%20Subramanyeswara%20Boys%20PG!5e0!3m2!1sen!2sin!4v1640248799118!5m2!1sen!2sin" width="300" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                <button
                  class="px-10 py-4 font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                >
                  <a href="booking.html" >Book</a>

                              </button>
                              </div>
                            </td>
                          </tr>
                         <!--2nd PG-->
                          <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3">
                              <div class="flex items-center text-sm">
                                <div>
                                    <img src="../assets/images/pg images/venu Pg.jpg" >
                                  <p class="font-semibold"><a href="#">Vishnu PG</a></p>
                                  <p class="text-xs text-gray-600 dark:text-gray-400">
                                    Address: #1764, 14th Main Rd, near Sagar hospital, <br> 1st Stage, Kumaraswamy Layout, Bengaluru, Karnataka 560078<br><br>Rating: 4.5/5<br><br>
                                    Distance:700mtrs from college
                                  </p>
                                </div>
                              </div>
                            </td>
                            <td class="px-4 py-3 text-sm">
                              ₹9000/- <br><br>₹8000/- <br><br>₹7500/-
                            </td>
                            <td class="px-4 py-3 text-sm">
                              
                              Single <br><br>Double <br><br> Triple
                            </td>
                            <td class="px-4 py-3 text-sm">
                              +91-9179456378
                            </td>
                            <td class="px-4 py-3">
                              <div class="flex items-center space-x-4 text-sm">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3886.8783262050792!2d77.624621!3d13.043416!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6942e3fff56e1068!2sSri%20Subramanyeswara%20Boys%20PG!5e0!3m2!1sen!2sin!4v1640248799118!5m2!1sen!2sin" width="300" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                <button
                  class="px-10 py-4 font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                >
                  <a href="booking.html" >Book</a>

                </button>
                                
                              </div>
                            </td>
                          </tr>
      
                          <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3">
                              <div class="flex items-center text-sm">
                                <div>
                                    <img src="../assets/images/pg images/venu Pg.jpg" >
                                  <p class="font-semibold"><a href="">Stanza Living</a></p>
                                  <p class="text-xs text-gray-600 dark:text-gray-400">
                                    Address:4, 2nd Cross Road, Sudhama Nagar,<br> behind Revoli Hotel, Shanti Nagar, Bengaluru, Karnataka 560027<br><br>Rating: 4.3/5<br><br>
                                    Distance:700mtrs from college
                                  </p>
                                </div>
                              </div>
                            </td>
                            <td class="px-4 py-3 text-sm">
                              ₹9500/- <br><br>₹7500/- <br><br>₹5500/-
                            </td>
                            <td class="px-4 py-3 text-sm">
                              
                              Single <br><br>Double <br><br> Triple
                            </td>
                            <td class="px-4 py-3 text-sm">
                              +91-7879451825
                            </td>
                            <td class="px-4 py-3">
                              <div class="flex items-center space-x-4 text-sm">
                                
                                
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3886.8783262050792!2d77.624621!3d13.043416!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6942e3fff56e1068!2sSri%20Subramanyeswara%20Boys%20PG!5e0!3m2!1sen!2sin!4v1640248799118!5m2!1sen!2sin" width="300" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                <button
                  class="px-10 py-4 font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                >
                  <a href="booking.html" >Book</a>

                </button>
                                
                              </div>
                            </td>
                          </tr>
      
                          <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3">
                              <div class="flex items-center text-sm">
                                 <div>
                                    <img src="../assets/images/pg images/venu Pg.jpg" >
                                  <p class="font-semibold"><a href="">My Home PG</a></p>
                                  <p class="text-xs text-gray-600 dark:text-gray-400">
                                    Address:1190, 22nd Cross Rd, Sector 3,<br> HSR Layout, Bengaluru, Karnataka 560102<br><br>Rating: 4.2/5<br><br>
                                    Distance:700mtrs from college
                                  </p>
                                </div>
                              </div>
                            </td>
                            <td class="px-4 py-3 text-sm">
                              ₹11000/- <br><br>₹9000/- <br><br>₹7500/-
                            </td>
                            <td class="px-4 py-3 text-sm">
                              
                              Single <br><br>Double <br><br> Triple
                            </td>
                            <td class="px-4 py-3 text-sm">
                              +91-6979471325
                            </td>
                            <td class="px-4 py-3">
                              <div class="flex items-center space-x-4 text-sm">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3886.8783262050792!2d77.624621!3d13.043416!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6942e3fff56e1068!2sSri%20Subramanyeswara%20Boys%20PG!5e0!3m2!1sen!2sin!4v1640248799118!5m2!1sen!2sin" width="300" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                <button
                  class="px-10 py-4 font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                >
                  <a href="booking.html" >Book</a>

                </button>
                              </div>
                            </td>
                          </tr>      
                        </tbody>
                      </table>
                    </div>
                    <!-- <div
                      class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800"
                    >
                      <span class="flex items-center col-span-3">
                        Showing 1-4 of 2
                      </span>
                      <span class="col-span-2"></span> -->
                      <!-- Pagination -->
                      <!-- <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
                        <nav aria-label="Table navigation">
                          <ul class="inline-flex items-center">
                            <li>
                              <button
                                class="px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-purple"
                                aria-label="Previous"
                              >
                                <svg
                                  class="w-4 h-4 fill-current"
                                  aria-hidden="true"
                                  viewBox="0 0 20 20"
                                >
                                  <path
                                    d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                    clip-rule="evenodd"
                                    fill-rule="evenodd"
                                  ></path>
                                </svg>
                              </button>
                            </li>
                            <li>
                              <button
                                class="px-3 py-1 text-white transition-colors duration-150 bg-purple-600 border border-r-0 border-purple-600 rounded-md focus:outline-none focus:shadow-outline-purple"
                              >
                                1
                              </button>
                            </li>
                            <li>
                              <button
                                class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                              >
                                2
                              </button>
                            </li>
                            <li>
                              <button
                                class="px-3 py-1 rounded-md rounded-r-lg focus:outline-none focus:shadow-outline-purple"
                                aria-label="Next"
                              >
                                <svg
                                  class="w-4 h-4 fill-current"
                                  aria-hidden="true"
                                  viewBox="0 0 20 20"
                                >
                                  <path
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd"
                                    fill-rule="evenodd"
                                  ></path>
                                </svg>
                              </button> -->
                            </li>
                          </ul>
                        </nav>
                      </span>
                    </div>
                  </div>
                </div>
              </main>
            </div>
          </div>
    </div>
  </body>
</html>
