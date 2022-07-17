<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Booking-Hote Payant</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
    <script src="../assets/js/3b-reservation.js"></script>
    <link rel="stylesheet" href="../assets/css/3c-reservation.css"/>
    
    <link rel="stylesheet" href="../assets/css/tailwind.output.css" />
    <style type="text/css">
      #seatsDiagram td,
    #displaySeats td{
        padding: 0.5rem;
        text-align: center;
        margin: 0.2rem;
        width: 50px;
        border: 3px solid transparent;
        display: inline-block;
        background-color: #efefef;
        border-radius: 5px;
    }

    #displaySeats{
        margin: 3rem auto 1rem auto;
    }


      #seatsDiagram{
        width: 100%;
        margin-bottom: 1rem;
    }

    #seatsDiagram  td.selected{
        background-color: #037192;
        -webkit-animation-name: rubberBand;
        animation-name: rubberBand;
        animation-duration: 300ms;
        animation-fill-mode: both;
    }

    #seatsDiagram td.notAvailable,
    #displaySeats td.notAvailable
    {
        color: white;
        background-color: #db2619;
    }

    #seatsDiagram td:not(.space,.notAvailable):hover{
        cursor: pointer;
        border-color:#037192;
    }

    #seatsDiagram .space,
    #displaySeats .space{
        background-color: #1e2c4b;
        border: none;
    }
    </style>
    <script
      src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"
      defer
    ></script>
    <script src="../assets/js/init-alpine.js"></script>
  </head>
  <body>
    <div
      class="flex h-screen bg-gray-50 dark:bg-gray-900"
      :class="{ 'overflow-hidden': isSideMenuOpen}"
    >
      <!-- Desktop sidebar -->
      <aside
        class="z-20 flex-shrink-0 hidden w-64 overflow-y-auto bg-white dark:bg-gray-800 md:block"
      >
        <div class="py-4 text-gray-500 dark:text-gray-400">
          <a
            class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200"
            href="index.php"
          >
            Hote Payant
          </a>
          <ul class="mt-6">
            <li class="relative px-6 py-3">
              <a
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                href="dashstu.php"
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
                <span class="ml-4">Student Dashboard</span>
              </a>
            </li>
          </ul>
          <ul>
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
                    d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122"
                  ></path>
                </svg>
                <span class="ml-4">Booking</span>
              </a>
            </li>
           
          
            <li class="relative px-6 py-3">
              <a
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                href="payment2.php"
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
                href="issue2.php"
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
          <div class="py-4 text-gray-500 dark:text-gray-400">
            <a
              class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200"
              href="index.php"
            >
              Hote Payant
            </a>
            <ul class="mt-6">
              <li class="relative px-6 py-3">
                <a
                  class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                  href="dashstu.php"
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
                  <span class="ml-4">Student Dashboard</span>
                </a>
              </li>
            </ul>
            <ul>
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
                      d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122"
                    ></path>
                  </svg>
                  <span class="ml-4">Booking</span>
                </a>
              </li>
              <li class="relative px-6 py-3">
                <a
                  class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                  href="payment2.php"
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
                  href="issue2.php"
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
      <div class="flex flex-col flex-1">
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
              <!-- <div
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
                  placeholder="Search for projects"
                  aria-label="Search"
                />
              </div> -->
            </div>
            <!-- <ul class="flex items-center flex-shrink-0 space-x-6"> -->
              <!-- Theme toggler -->
              <!-- <li class="flex">
                <button
                  class="rounded-md focus:outline-none focus:shadow-outline-purple"
                  @click="toggleTheme"
                  aria-label="Toggle color mode"
                >
                  <template x-if="!dark">
                    <svg
                      class="w-5 h-5"
                      aria-hidden="true"
                      fill="currentColor"
                      viewBox="0 0 20 20"
                    >
                      <path
                        d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"
                      ></path>
                    </svg>
                  </template>
                  <template x-if="dark">
                    <svg
                      class="w-5 h-5"
                      aria-hidden="true"
                      fill="currentColor"
                      viewBox="0 0 20 20"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                        clip-rule="evenodd"
                      ></path>
                    </svg>
                  </template>
                </button>
              </li> -->
              <!-- Notifications menu -->
              <!-- <li class="relative">
                <button
                  class="relative align-middle rounded-md focus:outline-none focus:shadow-outline-purple"
                  @click="toggleNotificationsMenu"
                  @keydown.escape="closeNotificationsMenu"
                  aria-label="Notifications"
                  aria-haspopup="true"
                >
                  <svg
                    class="w-5 h-5"
                    aria-hidden="true"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                  >
                    <path
                      d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z"
                    ></path>
                  </svg> -->
                  <!-- Notification badge -->
                  <!-- <span
                    aria-hidden="true"
                    class="absolute top-0 right-0 inline-block w-3 h-3 transform translate-x-1 -translate-y-1 bg-red-600 border-2 border-white rounded-full dark:border-gray-800"
                  ></span>
                </button>
                <template x-if="isNotificationsMenuOpen">
                  <ul
                    x-transition:leave="transition ease-in duration-150"
                    x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0"
                    @click.away="closeNotificationsMenu"
                    @keydown.escape="closeNotificationsMenu"
                    class="absolute right-0 w-56 p-2 mt-2 space-y-2 text-gray-600 bg-white border border-gray-100 rounded-md shadow-md dark:text-gray-300 dark:border-gray-700 dark:bg-gray-700"
                    aria-label="submenu"
                  > -->
                    <!-- <li class="flex">
                      <a
                        class="inline-flex items-center justify-between w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                        href="#"
                      >
                        <span>Messages</span>
                        <span
                          class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-600 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-600"
                        >
                          13
                        </span>
                      </a>
                    </li>-->
                    <!-- <li class="flex">
                      <a
                        class="inline-flex items-center justify-between w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                        href="#"
                      >
                        <span>Alerts</span>
                        <span
                          class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-600 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-600"
                        >
                          2
                        </span>
                      </a>
                    </li>  -->
                    <!-- <li class="flex">
                      <a
                        class="inline-flex items-center justify-between w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                        href="#"
                      >
                        <span>Alerts</span>
                      </a>
                    </li> -->
                  <!-- </ul>
                </template>
              </li> -->
              <!-- Profile menu -->
              <!-- <li class="relative"> -->
                <button
                  class="align-middle rounded-full focus:shadow-outline-purple focus:outline-none"
                  @click="toggleProfileMenu"
                  @keydown.escape="closeProfileMenu"
                  aria-label="Account"
                  aria-haspopup="true"
                >
                  <a
                  class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                  href="../pages/login.php"
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
                <!-- <template x-if="isProfileMenuOpen">
                  <ul
                    x-transition:leave="transition ease-in duration-150"
                    x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0"
                    @click.away="closeProfileMenu"
                    @keydown.escape="closeProfileMenu"
                    class="absolute right-0 w-56 p-2 mt-2 space-y-2 text-gray-600 bg-white border border-gray-100 rounded-md shadow-md dark:border-gray-700 dark:text-gray-300 dark:bg-gray-700"
                    aria-label="submenu"
                  >
                    <li class="flex">
                      <a
                        class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                        href="#"
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
                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"
                          ></path>
                        </svg>
                        <span>Profile</span>
                      </a>
                    </li>
                    <li class="flex">
                      <a
                        class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                        href="#"
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
                            d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"
                          ></path>
                          <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li class="flex">
                      <a
                        class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                        href="#"
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
                    </li>
                  </ul>
                </template>
              </li> -->
            </ul>
          </div>
        </header>
      <div class="container grid px-6 mx-auto">    
        <h2
              class="mx-auto text-2xl font-semibold text-gray-700 dark:text-gray-200"
              style="margin-top:0.5em"
            >
              Bookings 
          </h2> 
          <hr> 
          <div class="movie-container">
            <label style="color: aliceblue;   font-size: 1em;">Select type of sharing:</label>
            <select id="pg" style="color: rgb(255, 255, 255); background-color: #1a1c23;">
              <option value="10">Single</option>
              <option value="12">Double</option>
              <option value="8">Triple</option>
            </select>
          </div>

          <ul class="showcase">
            <li>
              <div id="seat" class="seat1"></div>
              <small class="status" style="font-size: 1em;">N/A</small>
            </li>
            <li>
              <div id="seat" class="seat2"></div>
              <small class="status" style="font-size: 1em;">Selected</small>
            </li>
            <li>
              <div id="seat" class="seat3"></div>
              <small class="status" style="font-size: 1em;">Occupied</small>
            </li>
          </ul>
      </div>
      <?php
    // (A) FIXED FOR THIS DEMO
    $sessid = 1;
    $userid = 999;

    // (B) GET SESSION SEATS
    require "2-reserve-lib.php";
    $seats = $_RSV->get($sessid);
    ?>

    <!-- (C) DRAW SEATS LAYOUT -->
    <div id="layout"><?php
      foreach ($seats as $s) {
        $taken = is_numeric($s["user_id"]);
        printf("<div class='seat%s'%s>%s</div>",
          $taken ? " taken" : "",
          $taken ? "" : " onclick='reserve.toggle(this)'",
          $s["seat_id"]
        );
      }
    ?></div>

    <!-- (D) LEGEND -->
    

    <!-- (E) SAVE SELECTION -->
    <form id="ninja" method="post" action="4-save.php">
      <input type="hidden" name="sessid" value="<?=$sessid?>"/>
      <input type="hidden" name="userid" value="<?=$userid?>"/>
    </form>
    <button onclick="reserve.save()">Reserve Seats</button>
          <!-- <div class="container1">
            

            <div class="row">
              <div id="seat" class="seat"></div>
              <div id="seat" class="seat"></div>
              <div id="seat" class="seat"></div>
              <div id="seat" class="seat"></div>
              
              <div id="seat" class="seat"></div>
              <div id="seat" class="seat"></div>
            </div>
            <div class="row">
              <div id="seat" class="seat"></div>
              <div id="seat" class="seat"></div>
              <div id="seat" class="seat"></div>
              <div id="seat" class="seat occupied"></div>
            
              <div id="seat" class="seat"></div>
              <div id="seat" class="seat"></div>
            </div>
            <div class="row">
              <div id="seat" class="seat"></div>
              <div id="seat" class="seat"></div>
              <div id="seat" class="seat"></div>
              <div id="seat" class="seat"></div>
              
              <div id="seat" class="seat occupied"></div>
              <div id="seat" class="seat occupied"></div>
            </div>
            <div class="row">
              <div id="seat" class="seat"></div>
              <div id="seat" class="seat"></div>
              <div id="seat" class="seat"></div>
              <div id="seat" class="seat"></div>
              
              <div id="seat" class="seat"></div>
              <div id="seat" class="seat"></div>
            </div>
            <div class="row">
              <div id="seat" class="seat"></div>
              <div id="seat" class="seat"></div>
              <div id="seat" class="seat"></div>
              <div id="seat" class="seat occupied"></div>
              
              <div id="seat" class="seat"></div>
              <div id="seat" class="seat"></div>
            </div>
            <div class="row">
              <div id="seat" class="seat"></div>
              <div id="seat" class="seat"></div>
              <div id="seat" class="seat"></div>
              <div id="seat" class="seat occupied"></div>
              
              <div id="seat" class="seat occupied"></div>
              <div id="seat" class="seat"></div>
            </div>
            <p class="text" style="color: #fff; font-size: 1em;margin:0px 0px 15px 0px">
              You have selected <span id="count">0</span> beds for a price of ₹<span
                id="total"
                >0</span
              >/-
            </p>
            <form onsubmit="pay()">
            <label class="block text-sm" style="margin: 0.4rem;">
                <span class="text-gray-700 dark:text-gray-400">Phone Number</span>
                <input id="ph_no"
                  class="block mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="Phone Number" required
                />
              </label>
            <a href="dashstu2.php">
              <button class="btn-home px-10 py-4 font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                Pay
              </button>
            </a>
          </form>
      
      </div> -->
      
      <!-- <div class="mb-3">
                                <table id="seatsDiagram">
                                <tr>
                                    <td id="seat-101-A" data-name="101-A">101-A</td>
                                    <td class="space">&nbsp;</td>
                                    <td id="seat-102-A" data-name="102-A">102-A</td>
                                    <td id="seat-102-B" data-name="102-B">102-B</td>
                                    <td class="space">&nbsp;</td>
                                    <td id="seat-103-A" data-name="103-A">103-A</td>
                                    <td class="space">&nbsp;</td>
                                    <td id="seat-104-A" data-name="104-A">104-A</td>
                                    <td class="space">&nbsp;</td>
                                    <td id="seat-105-A" data-name="105-A">105-A</td>
                                    <td class="space">&nbsp;</td>
                                    <td id="seat-106-A" data-name="106-A">106-A</td>
                                    <td id="seat-106-B" data-name="106-B">106-B</td>
                                    <td class="space">&nbsp;</td>
                                    <td id="seat-107-A" data-name="107-A">107-A</td>
                                    <td id="seat-107-B" data-name="107-B">107-B</td>
                                </tr>
                                <tr>
                                    <td id="seat-101-B" data-name="101-B">101-B</td>
                                    <td class="space">&nbsp;</td>
                                    <td id="seat-102-C" data-name="102-C">102-C</td>
                                    <td id="seat-102-D" data-name="102-D">102-D</td>
                                    <td class="space">&nbsp;</td>
                                    <td id="seat-103-B" data-name="103-B">103-B</td>
                                    <td class="space">&nbsp;</td>
                                    <td id="seat-104-B" data-name="104-B">104-B</td>
                                    <td class="space">&nbsp;</td>
                                    <td id="seat-105-B" data-name="105-B">105-B</td>
                                    <td id="seat-105-C" data-name="105-C">105-C</td>
                                    <td class="space">&nbsp;</td>
                                    <td id="seat-106-C" data-name="106-C">106-C</td>
                                    <td class="space">&nbsp;</td>
                                    <td id="seat-107-C" data-name="107-C">107-C</td>
                                    <td id="seat-107-D" data-name="107-D">107-D</td>
                                </tr>
                                <tr>
                                        <td class="space">&nbsp;</td>
                                        <td class="space">&nbsp;</td>
                                        <td class="space">&nbsp;</td>
                                        <td class="space">&nbsp;</td>
                                        <td class="space">&nbsp;</td>
                                        <td class="space">&nbsp;</td>
                                        <td class="space">&nbsp;</td>
                                        <td class="space">&nbsp;</td>
                                        <td class="space">&nbsp;</td>
                                        <td class="space">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td id="seat-201-A" data-name="201-A">201-A</td>
                                    <td class="space">&nbsp;</td>
                                    <td id="seat-202-A" data-name="202-A">202-A</td>
                                    <td id="seat-202-B" data-name="202-B">202-B</td>
                                    <td class="space">&nbsp;</td>
                                    <td id="seat-203-A" data-name="203-A">203-A</td>
                                    <td class="space">&nbsp;</td>
                                    <td id="seat-204-A" data-name="204-A">204-A</td>
                                    <td class="space">&nbsp;</td>
                                    <td id="seat-205-A" data-name="205-A">205-A</td>
                                    <td class="space">&nbsp;</td>
                                    <td id="seat-206-A" data-name="206-A">206-A</td>
                                    <td id="seat-206-B" data-name="206-B">206-B</td>
                                    <td class="space">&nbsp;</td>
                                    <td id="seat-207-A" data-name="207-A">207-A</td>
                                    <td id="seat-207-B" data-name="207-B">207-B</td>
                                </tr>
                                <tr>
                                    <td id="seat-201-B" data-name="201-B">201-B</td>
                                    <td class="space">&nbsp;</td>
                                    <td id="seat-202-C" data-name="202-C">202-C</td>
                                    <td id="seat-202-D" data-name="202-D">202-D</td>
                                    <td class="space">&nbsp;</td>
                                    <td id="seat-203-B" data-name="203-B">203-B</td>
                                    <td class="space">&nbsp;</td>
                                    <td id="seat-204-B" data-name="204-B">204-B</td>
                                    <td class="space">&nbsp;</td>
                                    <td id="seat-205-B" data-name="205-B">205-B</td>
                                    <td id="seat-205-C" data-name="205-C">205-C</td>
                                    <td class="space">&nbsp;</td>
                                    <td id="seat-206-C" data-name="206-C">206-C</td>
                                    <td class="space">&nbsp;</td>
                                    <td id="seat-207-C" data-name="207-C">207-C</td>
                                    <td id="seat-207-D" data-name="207-D">207-D</td>
                                </tr>
                            </table>
                            </div>
                            <div class="row g-3 align-items-center mb-3">
                                <div class="col-auto">
                                    <label for="seatInput" class="col-form-label">Seat Number</label>
                                </div>
                                <div class="col-auto">
                                    <input type="text" id="seatInput" class="form-control" name="seatInput" readonly>
                                </div>
                                <div class="col-auto">
                                    <span id="seatInfo" class="form-text">
                                    Select from the above figure, Maximum 1 seat.
                                    </span>
                                </div>
                            </div>
                            <!- <div class="mb-3">
                                <label for="bookAmount" class="form-label">Total Amount</label>
                                <input type="text" class="form-control" id="bookAmount" name="bookAmount" readonly>
                            </div> ->
                            <input type="submit" class="btn btn-success" name="submit">Submit
                        </form>
                    </div> -->
                    <!-- <//?php
                  require '../DatabaseConnection/dbcon.php';
                  
                  if(isset($_POST["submit"]))
                  {
                    $booked_seat = $_POST["seatInput"];
                    
                    $pg_id=$_SESSION['pg_id'];
                    //$seats=$conn->query("SELECT seat_booked from seats where pg_id='$pg_id'");
                    //$seats = get_from_table($conn, "seats", "pg_id", $pg_id, "seat_booked");

                    $numofrow=$seats->num_rows;
                    if($numofrow>0)
                    {
                        $seats .= "," . $booked_seat;
                    }
                    else 
                        $seats = $booked_seat;

                    $updateSeatSql = "UPDATE `seats` SET `seat_booked` = '$seats' WHERE `seats`.`pg_id` = '$';";
                    mysqli_query($conn, $updateSeatSql);
                }
                
            
                  
                  ?> -->


    
    
    <script src="../assets/js/admin_booking.js">
      /*function pay()
     {
       alert("Payment Succesfull\nBooked a Slot Succesfully");
     }
      var count=0;
      var seats=document.getElementsByClassName("seat");
      
      for(var i=0;i<seats.length;i++){
        var item=seats[i];
        
        item.addEventListener("click",(event)=>{
          var price= document.getElementById("pg").value;

          if (!event.target.classList.contains('occupied') && !event.target.classList.contains('selected') ){
          count++;
          
          var total=count*6000;
          event.target.classList.add("selected");
          }
          else if (event.target.classList.contains('selected') && count>0){
          count--;
          var total=count*6000;
          event.target.classList.add("reselected");
          }
          document.getElementById("count").innerText=count;
          if(total!=undefined)
          document.getElementById("total").innerText=total;
        })
      }*/
    </script>
    
    </div>
  </body>
</html>
