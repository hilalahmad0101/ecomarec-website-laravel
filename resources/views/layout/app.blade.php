<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{$title}}</title>
    <link rel="shortcut icon" href="./images/logo2.png" type="image/x-icon" />
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    @livewireStyles
</head>

<body>
    <style>
        .accordion-button:not(.collapsed) {
            background-color: #f2f2f2 !important;
            color: gray;
        }

        .platform {
            position: relative;
            transition: right 0.3s;
        }

        .body {
            background-color: white !important;
        }

        .swiper-button-next,
        .swiper-button-prev {
            /* width: 10px !important; */
            color: #989898;
        }

        .catSwiper .swiper-button-next,
        .catSwiper .swiper-button-prev {
            top: 30% !important;
        }

        .catSwiper .swiper-button-prev {
            justify-content: start !important;
        }

        .catSwiper .swiper-button-next {
            justify-content: end !important;
        }

        .swiper-button-next::after,
        .swiper-button-prev::after {
            font-size: 30px !important;
        }

        @media only screen and (max-width: 500px) {

            .swiper-button-next::after,
            .swiper-button-prev::after {
                font-size: 20px !important;
            }

            /*Big smartphones [426px -> 600px]*/
            .carousel-control-next-icon,
            .carousel-control-prev-icon {
                width: 1rem !important;
            }
        }

        .modal-bg {
            background-image: radial-gradient(circle at 27% 33%,
                    rgba(193, 193, 193, 0.04) 0%,
                    rgba(193, 193, 193, 0.04) 50%,
                    rgba(77, 77, 77, 0.04) 50%,
                    rgba(77, 77, 77, 0.04) 100%),
                radial-gradient(circle at 35% 8%,
                    rgba(183, 183, 183, 0.04) 0%,
                    rgba(183, 183, 183, 0.04) 50%,
                    rgba(25, 25, 25, 0.04) 50%,
                    rgba(25, 25, 25, 0.04) 100%),
                radial-gradient(circle at 93% 50%,
                    rgba(218, 218, 218, 0.04) 0%,
                    rgba(218, 218, 218, 0.04) 50%,
                    rgba(127, 127, 127, 0.04) 50%,
                    rgba(127, 127, 127, 0.04) 100%),
                linear-gradient(90deg, hsl(116, 0%, 99%), hsl(116, 0%, 99%));
        }
    </style>

    <livewire:user.auth.registration />

    @if (session()->has('error'))
    <div class="bg-red-400 text-xl py-2 px-3 fixed top-3 rounded-md z-[999] right-3">
      {{session('error')}}
    </div>
    @endif
    @if (session()->has('success'))
    <div class="bg-green-400 text-xl py-2 px-3 fixed top-3 rounded-md z-[999] right-3">
        {{session('success')}}
    </div>
    @endif
    <!-- ///Mobile Header  -->

    <div id="MobileHeader" class="sticky lg:shadow-none shadow -top-2 z-40 bg-white  ">
        <div class="flex lg:hidden justify-between w-full sm:justify-around px-4 py-5">
            <div class="flex space-x-2">
                <div data-drawer-target="drawer-navigation" data-drawer-show="drawer-navigation"
                    aria-controls="drawer-navigation"
                    class="w-9 h-9 lg:hidden flex justify-center items-center rounded bg-custome-100">
                    <i class="fa-solid fa-bars"></i>
                </div>
                <a href="index.html" class="">
                    <img src="./images/logo2.png" class="mr-3 h-9 sm:h-7" alt="Flowbite Logo" />
                </a>
            </div>

            <div class="flex space-x-5 ">
                <button type="button"
                    class="inline-flex relative items-center text-sm font-medium text-center text-white bg-white rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <i class="fa-solid fa-cart-shopping text-blue-900 text-2xl"></i>

                    <span class="sr-only">Notifications</span>
                    <div
                        class="inline-flex absolute -top-1 -right-3 justify-center items-center w-5 h-5 text-xxs font-bold text-white bg-red-500 rounded-full dark:border-gray-900">
                        20
                    </div>
                </button>
                <button type="button"
                    class="inline-flex relative items-center mx-4 text-sm font-medium text-center text-white bg-white rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <i class="fa-solid fa-heart text-blue-900 text-2xl"></i>

                    <span class="sr-only">Whishlist</span>
                    <div
                        class="inline-flex absolute -top-1 -right-3 justify-center items-center w-5 h-5 text-xxs font-bold text-white bg-red-500 rounded-full dark:border-gray-900">
                        20
                    </div>
                </button>
            </div>
        </div>


        <div class="bg-white  pb-2">
            <div class="sm:mx-0 mx-3 lg:hidden  flex justify-center">
                <form class="items-center sm:w-3/5 w-full">
                    <label for="simple-search" class="sr-only">Search</label>
                    <div class="relative w-full">
                        <div class="flex absolute inset-y-0 right-5 items-center pointer-events-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <input type="text" id="simple-search"
                            class="w-full xl:w-550 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block pl-4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Search Itmes" required="" />
                    </div>
                </form>
            </div>
        </div>

    </div>

    <div id="drawer-navigation" class="hidden z-40 h-screen p-4 overflow-y-auto bg-white w-80 dark:bg-gray-800"
        tabindex="-1" aria-labelledby="drawer-navigation-label">
        <h5 id="drawer-navigation-label"
            class="md:text-md text-sm font-bold text-blue-800 uppercase dark:text-blue-800">
            Menu
        </h5>
        <button type="button" data-drawer-dismiss="drawer-navigation" aria-controls="drawer-navigation"
            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 right-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                    clip-rule="evenodd"></path>
            </svg>
            <span class="sr-only">Close menu</span>
        </button>
        <div class="py-4 overflow-y-auto">
            <ul class="space-y-2">
                <li>
                    <a href="seller.html"
                        class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                        <!-- <svg aria-hidden="true" class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg> -->
                        <i class="fa-solid fa-bag-shopping"></i>
                        <span class="ml-3">Become a Seller</span>
                    </a>
                </li>
                <li>
                    <button type="button"
                        class="flex items-center w-full p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                        aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                        <!-- <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path></svg> -->
                        <i class="fa-regular fa-circle-down"></i>
                        <span class="flex-1 ml-3 text-left whitespace-nowrap">More
                        </span>
                    </button>
                    <ul id="dropdown-example" class="hidden py-2 space-y-2">
                        <li>
                            <a href="about.html"
                                class="flex items-center w-full p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">About
                                US</a>
                        </li>
                        <li>
                            <a href="contact-us.html"
                                class="flex items-center w-full p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Contact
                                Us</a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center w-full p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Invoice</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                        <i class="fa-solid fa-globe"></i>
                        <span class="flex-1 ml-3 whitespace-nowrap">Choose Language</span>
                    </a>
                </li>
                <li>
                    <a href="notification.html"
                        class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                        <i class="fa-solid fa-bell"></i>
                        <span class="flex-1 ml-3 whitespace-nowrap">Notifications</span>
                        <span
                            class="inline-flex items-center justify-center w-3 h-3 p-3 ml-3 text-sm font-medium text-blue-600 bg-blue-200 rounded-full dark:bg-blue-900 dark:text-blue-200">3</span>
                    </a>
                </li>
                <li>
                    <a href="accountSetting.html"
                        class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                        <svg aria-hidden="true"
                            class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="flex-1 ml-3 whitespace-nowrap">Account</span>
                    </a>
                </li>

                <li>
                    <a data-bs-toggle="modal" data-bs-target="#exampleModalScrollable2" href="#"
                        class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                        <svg aria-hidden="true"
                            class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="flex-1 ml-3 whitespace-nowrap">Sign In</span>
                    </a>
                </li>
                <li>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModalScrollable"
                        class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                        <svg aria-hidden="true"
                            class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M5 4a3 3 0 00-3 3v6a3 3 0 003 3h10a3 3 0 003-3V7a3 3 0 00-3-3H5zm-1 9v-1h5v2H5a1 1 0 01-1-1zm7 1h4a1 1 0 001-1v-1h-5v2zm0-4h5V8h-5v2zM9 8H4v2h5V8z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="flex-1 ml-3 whitespace-nowrap">Sign Up</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="sticky lg:top-0 top-28 z-50">
        <div id="header" class="bg-white">
            <div class="bg-white shadow transition-all  ">
                <nav class="container mx-auto lg:flex hidden space-x-6 items-center p-5 justify-center">
                    <a href="index.html" class="">
                        <img src="./images/logo2.png" class="mr-3 h-12 sm:h-7" alt="Flowbite Logo" />
                    </a>
                    <form class="flex items-center">
                        <label for="simple-search" class="sr-only">Search</label>
                        <div class="relative w-full">
                            <div class="flex absolute inset-y-0 right-5 items-center pl-3 pointer-events-none">
                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <input type="text" id="simple-search"
                                class="w-full xl:w-550 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block pl-4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Search Itmes" required="" />
                        </div>
                    </form>
                    <a href="./seller.html"
                        class="block py-2 pr-4 pl-3 text-blue-800 font-medium text-lg rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Become
                        a Seller
                    </a>

                    <li class="list-none">
                        <button id="mega-menu-dropdown-button" data-dropdown-toggle="mega-menu-dropdown"
                            class="flex justify-between items-center text-blue-800 font-medium text-lg py-2 pr-4 pl-3 w-full font-medium text-gray-700 border-b border-gray-100 md:w-auto hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 dark:text-gray-400 md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700">
                            More
                            <svg aria-hidden="true" class="ml-1 w-5 h-5 md:w-4 md:h-4" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <div id="mega-menu-dropdown"
                            class="grid hidden absolute z-30 grid-cols-2 w-auto text-sm bg-white rounded-lg border border-gray-100 shadow-md dark:border-gray-700 md:grid-cols-3 dark:bg-gray-700">
                            <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                                <ul class="space-y-4" aria-labelledby="mega-menu-dropdown-button">
                                    <li>
                                        <a href="about.html"
                                            class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                            About Us
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                            Library
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                            Resources
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                            Pro Version
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                                <ul class="space-y-4">
                                    <li>
                                        <a href="#"
                                            class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                            Newsletter
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                            Playground
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                            License
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="p-4 text-gray-900 dark:text-white">
                                <ul class="space-y-4">
                                    <li>
                                        <a href="contact-us.html"
                                            class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                            Contact Us
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                            Support Center
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                            Terms
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    @if (Auth::user())
                        <a href="{{ route('user.dashboard') }}"
                            class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                            Account
                        </a>
                    @else
                        <a href="" data-bs-toggle="modal" data-bs-target="#exampleModalScrollable2"
                            class="text-blue-800 py-2 rounded-md text-lg font-medium" aria-current="page">Login
                        </a>
                        <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModalScrollable"
                            class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-full text-sm px-6 py-2.5 text-center mr-2 mb-2">
                            Sign Up
                        </button>
                    @endif
                    <div>
                        <button type="button"
                            class="inline-flex relative items-center text-sm font-medium text-center text-white bg-white rounded-lg  ">
                            <i class="fa-solid fa-cart-shopping text-blue-900 text-2xl"></i>

                            <span class="sr-only">Notifications</span>
                            <div
                                class="inline-flex absolute -top-3 -right-4 justify-center items-center w-5 h-5 text-xxs font-bold text-white bg-red-500 rounded-full dark:border-gray-900">
                                20
                            </div>
                        </button>
                        <button type="button"
                            class="inline-flex relative items-center mx-4 text-sm font-medium text-center text-white bg-white rounded-lg   focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <i class="fa-solid fa-heart focus:text-white text-blue-900 text-2xl"></i>

                            <span class="sr-only">Whishlist</span>
                            <div
                                class="inline-flex absolute -top-3 -right-4 justify-center items-center w-5 h-5 text-xxs font-bold text-white bg-red-500 rounded-full dark:border-gray-900">
                                20
                            </div>
                        </button>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Cattgory Caurosal -->
        <div class="shadow  bg-white   lg:py-0 py-2 ">
            <div class="container mx-auto px-3 sm:pb-3 pb-0">
                <div class="swiper catSwiper">
                    <div class="swiper-wrapper  ">
                        <div class="swiper-slide   flex  justify-center items-center">
                            <div id="mrginzero"
                                class="     sm:w-24  w-14    text-center rounded-full flex-col flex justify-center items-center">
                                <a href="mobile.html">
                                    <img src="https://cdn.iconscout.com/icon/free/png-256/category-2456577-2036097.png"
                                        class="sm:w-full sm:px-3 px-1 w-full  img1  sm:mt-4 mt-2" alt="" />

                                    <h5 class="text-blue-900 cat-text sm:text-1xl sm:text-lg text-xsm font-bold ">
                                        Category
                                    </h5>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide flex justify-center items-center">
                            <div class="      sm:w-24  w-14  rounded-full flex-col flex justify-center items-center">
                                <img src="https://rukminim1.flixcart.com/flap/128/128/image/f15c02bfeb02d15d.png?q=100"
                                    class="sm:w-full w-full img1" alt="" />
                                <h5 class="text-blue-900 cat-text sm:text-1xl sm:text-lg text-xsm font-bold ">
                                    Top Offers
                                </h5>
                            </div>
                        </div>
                        <div class="swiper-slide flex justify-center items-center">
                            <div class="      sm:w-24  w-14  rounded-full flex-col flex justify-center items-center">
                                <img src="https://rukminim1.flixcart.com/flap/128/128/image/dff3f7adcf3a90c6.png?q=100"
                                    class="sm:w-full w-full img1" alt="" />
                                <h5 class="text-blue-900 cat-text  sm:text-1xl sm:text-lg text-xsm font-bold ">Toys
                                </h5>
                            </div>
                        </div>
                        <div class="swiper-slide flex justify-center items-center">
                            <div class="      sm:w-24  w-14  rounded-full flex-col flex justify-center items-center">
                                <img src="https://rukminim1.flixcart.com/flap/128/128/image/69c6589653afdb9a.png?q=100"
                                    class="sm:w-full w-full img1" alt="" />
                                <h5 class="text-blue-900 cat-text sm:text-1xl sm:text-lg text-xsm font-bold ">
                                    Electronics
                                </h5>
                            </div>
                        </div>
                        <div class="swiper-slide flex justify-center items-center">
                            <div class="      sm:w-24  w-14  rounded-full flex-col flex justify-center items-center">
                                <img src="https://rukminim1.flixcart.com/flap/128/128/image/ab7e2b022a4587dd.jpg?q=100"
                                    class="sm:w-full w-full img1" alt="" />
                                <h5 class="text-blue-900 cat-text sm:text-1xl sm:text-lg text-xsm font-bold ">
                                    Home
                                </h5>
                            </div>
                        </div>
                        <div class="swiper-slide flex justify-center items-center">
                            <div class="      sm:w-24  w-14  rounded-full flex-col flex justify-center items-center">
                                <img src="https://rukminim1.flixcart.com/flap/128/128/image/22fddf3c7da4c4f4.png?q=100"
                                    class="sm:w-full w-full img1" alt="" />
                                <h5 class="text-blue-900 cat-text sm:text-1xl sm:text-lg text-xsm font-bold ">
                                    Mobile
                                </h5>
                            </div>
                        </div>
                        <div class="swiper-slide flex justify-center items-center">
                            <div class="      sm:w-24  w-14  rounded-full flex-col flex justify-center items-center">
                                <img src="https://rukminim1.flixcart.com/flap/128/128/image/0ff199d1bd27eb98.png?q=100"
                                    class="sm:w-full w-full img1" alt="" />
                                <h5 class="text-blue-900 cat-text sm:text-1xl sm:text-lg text-xsm font-bold ">
                                    Appliances
                                </h5>
                            </div>
                        </div>
                        <div class="swiper-slide flex justify-center items-center">
                            <div class="      sm:w-24  w-14  rounded-full flex-col flex justify-center items-center">
                                <img src="https://rukminim1.flixcart.com/flap/128/128/image/71050627a56b4693.png?q=100"
                                    class="sm:w-full w-full img1" alt="" />
                                <h5 class="text-blue-900 cat-text sm:text-1xl sm:text-lg text-xsm font-bold ">
                                    Travel
                                </h5>
                            </div>
                        </div>
                        <div class="swiper-slide flex justify-center items-center">
                            <div class="      sm:w-24  w-14  rounded-full flex-col flex justify-center items-center">
                                <img src="https://rukminim1.flixcart.com/flap/128/128/image/29327f40e9c4d26b.png?q=100"
                                    class="sm:w-full w-full img1" alt="" />
                                <h5 class="text-blue-900 cat-text sm:text-1xl sm:text-lg text-xsm font-bold ">
                                    Grocery
                                </h5>
                            </div>
                        </div>
                        <div class="swiper-slide flex justify-center items-center">
                            <div class="      sm:w-24  w-14  rounded-full flex-col flex justify-center items-center">
                                <img src="https://rukminim1.flixcart.com/fk-p-flap/128/128/image/05d708653beff580.png?q=100"
                                    class="sm:w-full w-full img1" alt="" />
                                <h5 class="text-blue-900 cat-text sm:text-1xl sm:text-lg text-xsm font-bold ">

                                    Wheelers
                                </h5>

                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-next catbtnhide after:text-xxs"></div>
                    <div class="swiper-button-prev catbtnhide"></div>
                    <div class="swiper-pagination "></div>
                </div>
            </div>
        </div>
    </div>
    <!-- /// second Cattgory menu which another pages except home page -->
   {{$slot}}
    <div class=" bg-custome-100  md:block hidden ">

        <footer class="container mx-auto lg:px-12 px-0 ">
            <div class="grid md:grid-cols-4 grid-cols-2 gap-1 py-24 px-6 lg:grid-cols-6">
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-500 uppercase dark:text-gray-400">
                        Company
                    </h2>
                    <ul class="text-gray-500 dark:text-gray-400">
                        <li class="md:mb-4 mb-2">
                            <a href="about.html" class="hover:underline text-xs  md:text-base">About</a>
                        </li>
                        <li class="md:mb-4 mb-2">
                            <a href="contact-us.html" class="hover:underline text-xs  md:text-base">Contact us</a>
                        </li>
                        <li class="md:mb-4 mb-2">
                            <a href="#" class="hover:underline text-xs  md:text-base">Brand Center</a>
                        </li>
                        <li class="md:mb-4 mb-2">
                            <a href="account.html" class="hover:underline text-xs  md:text-base">Account</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-500 uppercase dark:text-gray-400">
                        Company
                    </h2>
                    <ul class="text-gray-500 dark:text-gray-400">
                        <li class="md:mb-4 mb-2">
                            <a href="#" class="hover:underline text-xs  md:text-base">About</a>
                        </li>
                        <li class="md:mb-4 mb-2">
                            <a href="#" class="hover:underline text-xs  md:text-base">Careers</a>
                        </li>
                        <li class="md:mb-4 mb-2">
                            <a href="#" class="hover:underline text-xs  md:text-base">Brand Center</a>
                        </li>
                        <li class="md:mb-4 mb-2">
                            <a href="#" class="hover:underline text-xs  md:text-base">Blog</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-500 uppercase dark:text-gray-400">
                        Help center
                    </h2>
                    <ul class="text-gray-500 dark:text-gray-400">
                        <li class="md:mb-4 mb-2">
                            <a href="#" class="hover:underline text-xs  md:text-base">Discord Server</a>
                        </li>
                        <li class="md:mb-4 mb-2">
                            <a href="#" class="hover:underline text-xs  md:text-base">Twitter</a>
                        </li>
                        <li class="md:mb-4 mb-2">
                            <a href="#" class="hover:underline text-xs  md:text-base">Facebook</a>
                        </li>
                        <li class="md:mb-4 mb-2">
                            <a href="#" class="hover:underline text-xs  md:text-base">Contact Us</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-500 uppercase dark:text-gray-400">
                        Legal
                    </h2>
                    <ul class="text-gray-500 dark:text-gray-400">
                        <li class="md:mb-4 mb-2">
                            <a href="#" class="hover:underline text-xs  md:text-base">Privacy Policy</a>
                        </li>
                        <li class="md:mb-4 mb-2">
                            <a href="#" class="hover:underline text-xs  md:text-base">Licensing</a>
                        </li>
                        <li class="md:mb-4 mb-2">
                            <a href="#" class="hover:underline text-xs  md:text-base">Terms &amp;
                                Conditions</a>
                        </li>
                    </ul>
                </div>
                <div class="col-span-2">
                    <h2 class="mb-6 text-sm font-semibold text-gray-500 uppercase dark:text-gray-400">
                        CONTACT US
                    </h2>
                    <ul class="text-gray-500 dark:text-gray-400 ">
                        <li class="md:mb-4 mb-2">
                            <div class="flex space-x-4">
                                <div
                                    class="w-10 h-10 justify-center flex items-center  text-center rounded-full bg-blue-600 ">
                                    <i class="fa-solid fa-envelope  text-white"></i>
                                </div>
                                <a href="#" class="hover:underline text-xs  md:text-base"> Address : No 40
                                    Baria Sreet 133/2 NewYork City,
                                </a>
                            </div>
                        </li>
                        <li class="md:mb-4 mb-2">
                            <div class="flex space-x-4">
                                <div class="w-10 h-10 justify-center  text-center rounded-full bg-blue-600 "><i
                                        class="fa-solid fa-mobile-button mt-3 text-white"></i></div>
                                <a href="#" class="hover:underline text-xs  md:text-base"> 0123456789 <br>
                                </a>
                            </div>
                        </li>
                        <li class="md:mb-4 mb-2">
                            <div class="flex space-x-4">
                                <div
                                    class="w-10 h-10 justify-center  flex items-center text-center rounded-full bg-blue-600 ">
                                    <i class=" text-white fa-solid  fa-location-pin"></i>
                                </div>
                                <a href="#" class="hover:underline text-xs  md:text-base"> Email :
                                    contact@Revoshop.com </a>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>



        </footer>
    </div>
    <!-- ///mobile footer -->

    <div class="bg-custome-100 md:hidden block">
        <div class="accordion" id="accordionExample">

            <div class="accordion-item border border-gray-200">
                <h2 class="accordion-header mb-0" id="headingTwo">
                    <button
                        class="accordion-button collapsed relative flex items-center w-full py-4 px-5 text-xs text-blue-900 text-left font-extrabold capitalize border-0 rounded-none transition focus:outline-none"
                        type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                        aria-expanded="false" aria-controls="collapseTwo">
                        Legal
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body py-4 px-5">
                        <ul class="text-gray-500 dark:text-gray-400">
                            <li class="md:mb-4 mb-2">
                                <a href="#" class="hover:underline text-xs md:text-base">Privacy Policy</a>
                            </li>
                            <li class="md:mb-4 mb-2">
                                <a href="#" class="hover:underline text-xs md:text-base">Licensing</a>
                            </li>
                            <li class="md:mb-4 mb-2">
                                <a href="#" class="hover:underline text-xs md:text-base">Terms &amp;
                                    Conditions</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item border border-gray-200">
                <h2 class="accordion-header mb-0" id="headingThree">
                    <button
                        class="accordion-button collapsed relative flex items-center w-full py-4 px-5 text-xs text-blue-900 text-left font-extrabold capitalize border-0 rounded-none transition focus:outline-none"
                        type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree"
                        aria-expanded="false" aria-controls="collapseThree">
                        Pages
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body py-4 px-5">
                        <ul class="text-gray-500 dark:text-gray-400">
                            <li class="md:mb-4 mb-2">
                                <a href="#" class="hover:underline text-xs md:text-base">About</a>
                            </li>
                            <li class="md:mb-4 mb-2">
                                <a href="#" class="hover:underline text-xs md:text-base">Careers</a>
                            </li>
                            <li class="md:mb-4 mb-2">
                                <a href="#" class="hover:underline text-xs md:text-base">Brand Center</a>
                            </li>
                            <li class="md:mb-4 mb-2">
                                <a href="#" class="hover:underline text-xs md:text-base">Blog</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item border border-gray-200">
                <h2 class="accordion-header mb-0" id="headingfour">
                    <button
                        class="accordion-button collapsed relative flex items-center w-full py-4 px-5 text-xs text-blue-900 text-left font-extrabold capitalize border-0 rounded-none transition focus:outline-none"
                        type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour"
                        aria-expanded="false" aria-controls="collapsefour">
                        Contact Us
                    </button>
                </h2>
                <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body py-4 px-5">
                        <ul class="text-gray-500 dark:text-gray-400">
                            <li class="md:mb-4 mb-2">
                                <div class="flex space-x-4">
                                    <div
                                        class="w-10 h-10 justify-center flex items-center text-center rounded-full bg-blue-600">
                                        <i class="fa-solid fa-envelope text-white"></i>
                                    </div>
                                    <a href="#" class="hover:underline text-xs md:text-base">
                                        Address : No 40 Baria Sreet 133/2 NewYork City,
                                    </a>
                                </div>
                            </li>
                            <li class="md:mb-4 mb-2">
                                <div class="flex space-x-4">
                                    <div class="w-10 h-10 justify-center text-center rounded-full bg-blue-600">
                                        <i class="fa-solid fa-mobile-button mt-3 text-white"></i>
                                    </div>
                                    <a href="#" class="hover:underline text-xs md:text-base">
                                        0123456789 <br />
                                    </a>
                                </div>
                            </li>
                            <li class="md:mb-4 mb-2">
                                <div class="flex space-x-4">
                                    <div
                                        class="w-10 h-10 justify-center flex items-center text-center rounded-full bg-blue-600">
                                        <i class="text-white fa-solid fa-location-pin"></i>
                                    </div>
                                    <a href="#" class="hover:underline text-xs md:text-base">
                                        Email : contact@Revoshop.com
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item border border-gray-200">
                <h2 class="accordion-header mb-0" id="headingfour">
                    <button
                        class="accordion-button collapsed relative flex items-center w-full py-4 px-5 text-xs text-blue-900 text-left font-extrabold capitalize border-0 rounded-none transition focus:outline-none"
                        type="button" data-bs-toggle="collapse" data-bs-target="#collapsefive"
                        aria-expanded="false" aria-controls="collapsefive">
                        Help Center
                    </button>
                </h2>
                <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="headingfive"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body py-4 px-5">
                        <ul class="text-gray-500 dark:text-gray-400">
                            <li class="md:mb-4 mb-2">
                                <a href="#" class="hover:underline text-xs md:text-base">Discord Server</a>
                            </li>
                            <li class="md:mb-4 mb-2">
                                <a href="#" class="hover:underline text-xs md:text-base">Twitter</a>
                            </li>
                            <li class="md:mb-4 mb-2">
                                <a href="#" class="hover:underline text-xs md:text-base">Facebook</a>
                            </li>
                            <li class="md:mb-4 mb-2">
                                <a href="#" class="hover:underline text-xs md:text-base">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-blue-600 p-3 ">
        <div class="text-center flex justify-center flex-col items-center">
            <p class="md:mb-4 mb-2  text-xs md:text-sm text-white">
                ©2021 WordPress Theme SW Revo. All Rights Reserved. Designed by
                WPThemeGo.Com.
            </p>
            <div>
                <img src="https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/09/paypel.png"
                    alt="" class="w-96 text-center" />
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
{{-- <script src="{{asset('node_modules/tw-elements/dist/js/index.min.js')}}"></script> --}}
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
<script src="{{ asset('app.js') }}"></script>
<script>
    const img1 = document.querySelectorAll(".img1")
    const cattext = document.querySelectorAll(".cat-text")
    const catbtnhide = document.querySelectorAll(".catbtnhide")
    const mrginzero = document.getElementById("mrginzero")
    // let scrollPosition = window.pageYOffset;
    // window.addEventListener("scroll" , ()=>{
    //   console.log(window.scrollY);


    // })
    var prevScrollpos = window.pageYOffset;
    window.onscroll = function() {
        var currentScrollPos = window.pageYOffset;
        console.log();
        if (prevScrollpos < currentScrollPos) {

            catbtnhide[0].style.display = "none"
            catbtnhide[1].style.display = "none"
            for (i = 0; i < img1.length; i++) {
                img1[i].style.display = "none"
                // catbtnhide[i].style.display= "none"
                cattext[i].style.marginTop = "0px"
                mrginzero.style.marginTop = "0px !important"

            }

        }

        prevScrollpos = currentScrollPos;
    }
</script>
@livewireScripts

</html>
