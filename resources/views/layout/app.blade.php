<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $title }}</title>
    <link rel="shortcut icon" href="./images/logo2.png" type="image/x-icon" />
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('custome.css') }}">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
  />
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

    <!-- ///// LOgin Modal doiluge -->

    {{-- <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
        id="exampleModalScrollable2" tabindex="-1" aria-labelledby="exampleModalScrollableLabel" aria-hidden="true">
        <div
            class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable relative w-auto pointer-events-none">
            <div
                class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                <div
                    class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                    <button type="button"
                        class="btn-close box-content w-4 h-4 p-1 text-black hover:text-customeorange-600 transition-all border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:opacity-75 hover:no-underline"
                        data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body relative">
                    <div class="grid md:grid-cols-2 grid-cols-1">
                        <div
                            class="sm:flex hidden itmes-stretch modal-bg justify-between flex-col items-center p-5 py12">
                            <div class="">
                                <h5 class="max-w-xs mb-2 text-customeorange-500 md:text-2xl text-xl font-bold">
                                    Login
                                </h5>
                                <p class="text-black md:text-sm text-xs">
                                    Get access to your Orders, Wishlist and Recommendations
                                </p>
                            </div>
                            <br />
                            <br />
                            <br />

                            <img src="./images/Computer login-amico.svg" width="300px" alt="" />
                        </div>

                        <div class="p-5">
                            <form class="space-y-4 md:space-y-6" action="#">
                                <h5 class="max-w-xs text-customeorange-500 md:text-2xl text-xl font-bold">
                                    Login
                                </h5>

                                <div class="relative">
                                    <input type="text" id="floating_outlined"
                                        class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                        placeholder=" " />
                                    <label for="floating_outlined"
                                        class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Enter
                                        Number</label>
                                </div>

                                <div class="relative">
                                    <input type="password" id="floating_outlined2"
                                        class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                        placeholder=" " />
                                    <label for="floating_outlined2"
                                        class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Enter
                                        Password</label>
                                </div>



                                <button type="button"
                                    class="text-white bg-customeorange-500 hover:bg-customeorange-600 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm w-full py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                    Continue
                                </button>
                                <p class="md:text-sm text-xs font-medium text-center text-black dark:text-gray-400">
                                    Don't have an account yet?
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModalScrollable"
                                        class="font-medium text-primary-600 hover:underline dark:text-primary-500">Sign
                                        Up</a>
                                </p>
                                <br />
                                <br />
                                <br />
                                <div class="flex justify-center mt-12">
                                    <p
                                        class="md:text-xsm text-xs px-5 max-w-xs text-center font-extralight text-gray-600 dark:text-gray-400">
                                        By continuing, you agree to abc Terms of Use and Privacy
                                        Policy.
                                    </p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ///// Sgin up Modal doiluge -->

    <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
        id="exampleModalScrollable" tabindex="-1" aria-labelledby="exampleModalScrollableLabel" aria-hidden="true">
        <div
            class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable relative w-auto pointer-events-none">
            <div
                class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                <div
                    class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                    <button type="button"
                        class="btn-close box-content w-4 h-4 p-1 text-black hover:text-customeorange-600 transition-all border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100  hover:opacity-75 hover:no-underline"
                        data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body relative">
                    <div class="grid sm:grid-cols-2 grid-cols-1">
                        <div
                            class="sm:flex hidden itmes-stretch modal-bg justify-between flex-col items-center p-5 py12">
                            <div>
                                <h5 class="max-w-xs mb-2 text-customeorange-500 md:text-2xl text-xl font-bold">
                                    Looks like you're new here!
                                </h5>
                                <p class="md:text-sm text-xs text-black">
                                    Sign up with your mobile number to get started
                                </p>
                            </div>
                            <br />
                            <br />
                            <br />

                            <img src="./images/Sign up-amico.svg" width="300px" alt="" />
                        </div>

                        <div class="p-5">
                            <form class="space-y-4 md:space-y-6" action="#">
                                <h5 class="max-w-xs text-customeorange-500 md:text-2xl text-xl font-bold">
                                    Register Your Account
                                </h5>

                                <div class="relative">
                                    <input type="text" id="floating_outlined3"
                                        class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                        placeholder=" " />
                                    <label for="floating_outlined3"
                                        class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Enter
                                        Number</label>
                                </div>

                                <div class="relative">
                                    <input type="password" id="floating_outlined4"
                                        class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                        placeholder=" " />
                                    <label for="floating_outlined4"
                                        class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Enter
                                        Password</label>
                                </div>
                                <button type="button"
                                    class="text-white bg-customeorange-500 hover:bg-customeorange-500 font-medium rounded-lg text-sm w-full py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                    Continue
                                </button>
                                <p class="md:text-sm text-xs text-center font-medium text-black dark:text-gray-400">
                                    have an account yet?
                                    <a href="#" data-bs-toggle="modal"
                                        data-bs-target="#exampleModalScrollable2"
                                        class="font-medium text-primary-600 hover:underline dark:text-primary-500">Sign
                                        In</a>
                                </p>
                                <br />
                                <br />
                                <br />
                                <div class="flex justify-center mt-12">
                                    <p
                                        class="md:text-sm text-xs px-5 max-w-xs text-center font-extralight text-black dark:text-gray-400">
                                        By continuing, you agree to abc Terms of Use and Privacy
                                        Policy.
                                    </p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <livewire:user.auth.registration />

    <!-- ///siede bar -->
    <div id="drawer-navigation"
        class="hidden fixed lg:hidden z-50 h-screen p-4 overflow-y-auto bg-white w-80 dark:bg-gray-800" tabindex="-1"
        aria-labelledby="drawer-navigation-label">
        <h5 id="drawer-navigation-label"
            class="md:text-md text-sm font-bold text-customeorange-500 uppercase dark:text-customeorange-500">
            Menu
        </h5>
        <button type="button" data-drawer-dismiss="drawer-navigation" aria-controls="drawer-navigation"
            id="close"
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
                        <i class="fa-solid fa-bag-shopping"></i>
                        <span class="ml-3">Become a Seller</span>
                    </a>
                </li>
                <li>
                    <button type="button"
                        class="flex items-center w-full p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                        aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                        <i class="fa-regular fa-circle-down"></i>
                        <span class="flex-1 text-left whitespace-nowrap ml-3">More </span>
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
                            class="inline-flex items-center justify-center w-3 h-3 p-3 ml-3 text-sm font-bold text-black bg-gray-200 rounded-full dark:bg-blue-900 dark:text-blue-200">3</span>
                    </a>
                </li>
                <li>
                    <a href="accountSetting.html"
                        class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                        <svg aria-hidden="true"
                            class="flex-shrink-0 w-6 h-6 text-black hover:text-customeorange-600 transition-all  duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
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
                            class="flex-shrink-0 w-6 h-6 text-black hover:text-customeorange-600 transition-all  duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
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
                            class="flex-shrink-0 w-6 h-6 text-black hover:text-customeorange-600 transition-all  duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
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

    <!-- //header box -->
    <div class="bg-white sticky top-0 z-40">
        <!-- Mobile Header -->
        <div>
            <div class="flex lg:hidden justify-between w-full sm:justify-around px-4 py-5">
                <div class="flex space-x-2">
                    <div data-drawer-target="drawer-navigation" data-drawer-show="drawer-navigation"
                        aria-controls="drawer-navigation" id="show"
                        class="w-9 h-9 lg:hidden flex justify-center items-center rounded bg-custome-100">
                        <i class="fa-solid fa-bars text-black hover:text-customeorange-600 transition-all"></i>
                    </div>
                    <a href="index.html" class="">
                        <img src="https://icms-image.slatic.net/images/ims-web/3ae67ef5-e5f6-42c3-9a40-993ef9a7bfae.png"
                            class="mr-3 h-9 sm:h-7" alt="Flowbite Logo" />
                    </a>
                </div>

                <div class="flex space-x-5">
                    <button type="button"
                        class="inline-flex relative items-center text-sm font-mediun text-center text-orange-500 bg-white rounded-lg">
                        <a href="addtocart.html">
                            <i class="fa-solid fa-cart-shopping text-customeorange-500 text-2xl"></i>
                        </a>
                        <span class="sr-only">Notifications</span>
                        <div
                            class="inline-flex absolute -top-1 -right-3 justify-center items-center w-5 h-5 text-xxs font-mediun text-white bg-red-500 rounded-full dark:border-gray-900">
                            20
                        </div>
                    </button>

                    <button type="button"
                        class="inline-flex relative items-center mx-4 text-sm font-mediun text-center text-orange-500 bg-white rounded-lg">
                        <a href="whishlist.html">
                            <i class="fa-solid fa-heart text-customeorange-500 text-2xl"></i>
                        </a>

                        <span class="sr-only">Whishlist</span>
                        <div
                            class="inline-flex absolute -top-1 -right-3 justify-center items-center w-5 h-5 text-xxs font-mediun text-white bg-red-500 rounded-full">
                            20
                        </div>
                    </button>
                </div>
            </div>

            <div class="bg-white pb-2 w-full ">
                <div class="sm:mx-0 mx-3 lg:hidden  flex justify-center">
                    <form class="items-center sm:w-3/5 w-full">
                        <label for="simple-search2" class="sr-only">Search</label>
                        <div class="relative w-full">
                            <div class="flex absolute inset-y-0 right-5 items-center pointer-events-none">
                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <input type="text" id="simple-search2"
                                class="w-full xl:w-550 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block pl-4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Search Itmes" required="" />
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- ///Desktop Header -->
        <div class="bg-white shadow transition-all">

            {{-- justify-center on line 422 --}}
            <nav class="container mx-auto lg:flex hidden space-x-4 items-center p-5 justify-between">
                <a href="index.html" class="">
                    <img src="https://icms-image.slatic.net/images/ims-web/3ae67ef5-e5f6-42c3-9a40-993ef9a7bfae.png"
                        class="mr-3 h-12 sm:h-12" alt="Flowbite Logo" />
                </a>

                {{-- <form class="flex items-center">
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
                </form> --}}
                <form class="w-[30%]">
                    {{-- <label for="simple-search" class="sr-only">Search</label> --}}
                    <div class="w-full bg-white flex items-center px-3 py-2 rounded-lg border ">
                        <input type="text" id="simple-search" class="w-full outline-none" placeholder="Search Itmes"
                            required="" />
                        <svg aria-hidden="true" class="w-5 h-5 ml-2 text-gray-500 dark:text-gray-400" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                </form>
                <div class="flex items-center space-x-2">
                    <a href="./seller.html"
                        class="block py-2 pr-4 pl-3 text-black hover:text-customeorange-600 transition-all font-mediun text-lg rounded hover:bg-gray-100 md:hover:bg-transparent md:p-0">Become
                        a Seller
                    </a>

                    <li class="list-none">
                        <button id="mega-menu-dropdown-button" data-dropdown-toggle="mega-menu-dropdown"
                            class="flex justify-between items-center text-black hover:text-customeorange-600 transition-all font-mediun text-lg py-2 w-full font-mediun border-b border-gray-100 md:w-auto hover:bg-gray-50 md:hover:bg-transparent md:border-0">
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
                                            class="text-gray-500 dark:text-gray-400 hover:text-customeorange-600 dark:hover:text-blue-500">
                                            About Us
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="text-gray-500 dark:text-gray-400 hover:text-customeorange-600 dark:hover:text-blue-500">
                                            Library
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="text-gray-500 dark:text-gray-400 hover:text-customeorange-600 dark:hover:text-blue-500">
                                            Resources
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="text-gray-500 dark:text-gray-400 hover:text-customeorange-600 dark:hover:text-blue-500">
                                            Pro Version
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                                <ul class="space-y-4">
                                    <li>
                                        <a href="account.html"
                                            class="text-gray-500 dark:text-gray-400 hover:text-customeorange-600 dark:hover:text-blue-500">
                                            Account
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="text-gray-500 dark:text-gray-400 hover:text-customeorange-600 dark:hover:text-blue-500">
                                            Newsletter
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="text-gray-500 dark:text-gray-400 hover:text-customeorange-600 dark:hover:text-blue-500">
                                            Playground
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="text-gray-500 dark:text-gray-400 hover:text-customeorange-600 dark:hover:text-blue-500">
                                            License
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="p-4 text-gray-900 dark:text-white">
                                <ul class="space-y-4">
                                    <li>
                                        <a href="contact-us.html"
                                            class="text-gray-500 dark:text-gray-400 hover:text-customeorange-600 dark:hover:text-blue-500">
                                            Contact Us
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="text-gray-500 dark:text-gray-400 hover:text-customeorange-600 dark:hover:text-blue-500">
                                            Support Center
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="text-gray-500 dark:text-gray-400 hover:text-customeorange-600 dark:hover:text-blue-500">
                                            Terms
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>

                    <a href="" data-bs-toggle="modal" data-bs-target="#exampleModalScrollable2"
                        class="text-black hover:text-customeorange-600 transition-all py-2 rounded-md text-lg font-mediun"
                        aria-current="page">Login
                    </a>
                    <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModalScrollable"
                        class="text-white bg-orange-500 focus:ring-4 focus:outline-none focus:ring-orange-300 dark:focus:ring-orange-800 font-mediun rounded-full text-sm px-8 py-2.5 text-center mr-2 ">
                        Sign Up
                    </button>
                </div>

                <div>
                    <a href="addtocart.html">
                        <button type="button"
                            class="inline-flex mr-2 relative items-center text-sm font-mediun text-center text-orange-500 bg-white rounded-lg">
                                <i class="fa-solid fa-cart-shopping text-customeorange-500 text-2xl"></i>
                                <span class="sr-only">cart</span>
                                <div
                                    class="inline-flex absolute -top-3 -right-4 justify-center items-center w-5 h-5 text-xxs font-mediun text-white bg-red-500 rounded-full dark:border-gray-900">
                                    20
                                </div>
                            
                        </button>
                    </a>
                    <a href="whishlist.html">
                        <button type="button"
                            class="inline-flex relative items-center mx-4 text-sm font-mediun text-center  bg-white text-orange-500 rounded-lg focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <i class="fa-regular fa-heart focus:text-white text-customeorange-500 text-2xl"></i>

                            <span class="sr-only">Whishlist</span>
                            <div
                                class="inline-flex absolute -top-3 -right-4 justify-center items-center w-5 h-5 text-xxs font-mediun text-white bg-red-500 rounded-full dark:border-gray-900">
                                20
                            </div>
                        </button>
                    </a>
                </div>
            </nav>
        </div>


        <!-- ///Caurosal  -->
        <div class="shadow bg-white lg:py-0 py-2">
            <div class="container mx-auto px-3 sm:pb-3 pb-0 py-3">
                <div class="swiper catSwiper">
                    <div class="swiper-wrapper pl-6">
                        <div class="swiper-slide flex">
                            <div id="mrginzero" class="w-full text-center">
                                <a class="flex items-center" href="mobile.html">
                                    <i class="fa-solid fa-table-cells-large text-customeorange-500 mr-2"></i>
                                    <h5
                                        class="text-black cat-text hover:text-customeorange-600 transition-all sm:text-1xl sm:text-lg text-xs font-medium">
                                        Category
                                    </h5>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="">
                                <a class="flex items-center" href="mobile.html">
                                    <i class="fa-solid fa-gift text-customeorange-500 mr-2"></i>
                                    <h5
                                        class="text-black cat-text hover:text-customeorange-600 transition-all sm:text-1xl sm:text-lg text-xs font-medium">
                                        Top offers
                                    </h5>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="w-full">
                                <a class="flex items-center" href="mobile.html">
                                    <div class="sm:w-6 w-5 mr-2">
                                        <img src="./images/toys.png" class="w-full" alt="" />
                                    </div>
                                    <h5
                                        class="text-black cat-text hover:text-customeorange-600 transition-all sm:text-1xl sm:text-lg text-xs font-medium">
                                        Toys
                                    </h5>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="w-full">
                                <a class="flex items-center" href="mobile.html">
                                    <div class="sm:w-5 w-4 mr-2">
                                        <img class="w-full" src="./images/headphone-symbol.png" class="mr-2"
                                            alt="" />
                                    </div>

                                    <h5
                                        class="text-black cat-text hover:text-customeorange-600 transition-all sm:text-1xl sm:text-lg text-xs font-medium">
                                        Eloctronics
                                    </h5>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="w-full">
                                <a class="flex items-center" href="mobile.html">
                                    <i class="fa-solid fa-house text-customeorange-500 mr-2"></i>
                                    <h5
                                        class="text-black cat-text hover:text-customeorange-600 transition-all sm:text-1xl sm:text-lg text-xs font-medium">
                                        Home
                                    </h5>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="w-full">
                                <a class="flex items-center" href="mobile.html">
                                    <i class="fa-solid fa-mobile-button text-customeorange-500 mr-2"></i>
                                    <h5
                                        class="text-black cat-text hover:text-customeorange-600 transition-all sm:text-1xl sm:text-lg text-xs font-medium">
                                        Mobile
                                    </h5>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="w-full">
                                <a class="flex items-center" href="mobile.html">
                                    <div class="sm:w-5 w-4 mr-2">
                                        <img src="./images/electric-appliance.png" class="w-full" alt="" />
                                    </div>

                                    <h5
                                        class="text-black cat-text hover:text-customeorange-600 transition-all sm:text-1xl sm:text-lg text-xs font-medium">
                                        Appliances
                                    </h5>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="w-full">
                                <a class="flex items-center" href="mobile.html">
                                    <div class="sm:w-5 w-4 mr-2">
                                        <img src="./images/plane.png" class="w-full" alt="" />
                                    </div>
                                    <h5
                                        class="text-black cat-text hover:text-customeorange-600 transition-all sm:text-1xl sm:text-lg text-xs font-medium">
                                        Travel
                                    </h5>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="w-full">
                                <a class="flex items-center" href="mobile.html">
                                    <div class="sm:w-6 w-5 mr-2">
                                        <img src="./images/grocery.png" class="w-full" alt="" />
                                    </div>

                                    <h5
                                        class="text-black cat-text hover:text-customeorange-600 transition-all sm:text-1xl sm:text-lg text-xs font-medium">
                                        Grocey
                                    </h5>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="w-full">
                                <a class="flex items-center" href="mobile.html">
                                    <img src="./images/motorcycle.png" class="mr-2" alt="" />

                                    <h5
                                        class="text-black cat-text hover:text-customeorange-600 transition-all sm:text-1xl sm:text-lg text-xs font-medium">
                                        Whreelers
                                    </h5>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-next catbtnhide after:text-xxs"></div>
                    <div class="swiper-button-prev catbtnhide"></div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- /// main caurosal -->
        {{$slot}}
    <!-- Footer -->
    <div class="bg-custome-100 md:block hidden">
        <footer class="container mx-auto lg:px-12 px-0">
            <div class="grid md:grid-cols-4 grid-cols-2 gap-1 py-24 px-6 lg:grid-cols-6">
                <div>
                    <h2
                        class="mb-6 text-sm font-semibold text-black hover:text-customeorange-600 transition-all uppercase dark:text-gray-400">
                        Company
                    </h2>
                    <ul class="text-gray-500 dark:text-gray-400">
                        <li class="md:mb-4 mb-2">
                            <a href="about.html"
                                class="hover:underline hover:text-customeorange-600 transform translate-x-0 hover:translate-x-3 transition-all text-xs md:text-base">About</a>
                        </li>
                        <li class="md:mb-4 mb-2">
                            <a href="contact-us.html"
                                class="hover:underline hover:text-customeorange-600 transform translate-x-0 hover:translate-x-3 transition-all text-xs md:text-base">Contact
                                us</a>
                        </li>
                        <li class="md:mb-4 mb-2">
                            <a href="#"
                                class="hover:underline hover:text-customeorange-600 transform translate-x-0 hover:translate-x-3 transition-all text-xs md:text-base">Brand
                                Center</a>
                        </li>
                        <li class="md:mb-4 mb-2">
                            <a href="{{ route('user.dashboard') }}"
                                class="hover:underline hover:text-customeorange-600 transform translate-x-0 hover:translate-x-3 transition-all text-xs md:text-base">Account</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-black uppercase dark:text-gray-400">
                        Company
                    </h2>
                    <ul class="text-gray-500 dark:text-gray-400">
                        <li class="md:mb-4 mb-2">
                            <a href="#"
                                class="hover:underline hover:text-customeorange-600 transform translate-x-0 hover:translate-x-3 transition-all text-xs md:text-base">About</a>
                        </li>
                        <li class="md:mb-4 mb-2">
                            <a href="#"
                                class="hover:underline hover:text-customeorange-600 transform translate-x-0 hover:translate-x-3 transition-all text-xs md:text-base">Careers</a>
                        </li>
                        <li class="md:mb-4 mb-2">
                            <a href="#"
                                class="hover:underline hover:text-customeorange-600 transform translate-x-0 hover:translate-x-3 transition-all text-xs md:text-base">Brand
                                Center</a>
                        </li>
                        <li class="md:mb-4 mb-2">
                            <a href="#"
                                class="hover:underline hover:text-customeorange-600 transform translate-x-0 hover:translate-x-3 transition-all text-xs md:text-base">Blog</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-black uppercase dark:text-gray-400">
                        Help center
                    </h2>
                    <ul class="text-gray-500 dark:text-gray-400">
                        <li class="md:mb-4 mb-2">
                            <a href="#"
                                class="hover:underline hover:text-customeorange-600 transform translate-x-0 hover:translate-x-3 transition-all text-xs md:text-base">Discord
                                Server</a>
                        </li>
                        <li class="md:mb-4 mb-2">
                            <a href="#"
                                class="hover:underline hover:text-customeorange-600 transform translate-x-0 hover:translate-x-3 transition-all text-xs md:text-base">Twitter</a>
                        </li>
                        <li class="md:mb-4 mb-2">
                            <a href="#"
                                class="hover:underline hover:text-customeorange-600 transform translate-x-0 hover:translate-x-3 transition-all text-xs md:text-base">Facebook</a>
                        </li>
                        <li class="md:mb-4 mb-2">
                            <a href="#"
                                class="hover:underline hover:text-customeorange-600 transform translate-x-0 hover:translate-x-3 transition-all text-xs md:text-base">Contact
                                Us</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-black uppercase dark:text-gray-400">
                        Legal
                    </h2>
                    <ul class="text-gray-500 dark:text-gray-400">
                        <li class="md:mb-4 mb-2">
                            <a href="#"
                                class="hover:underline hover:text-customeorange-600 transform translate-x-0 hover:translate-x-3 transition-all text-xs md:text-base">Privacy
                                Policy</a>
                        </li>
                        <li class="md:mb-4 mb-2">
                            <a href="#"
                                class="hover:underline hover:text-customeorange-600 transform translate-x-0 hover:translate-x-3 transition-all text-xs md:text-base">Licensing</a>
                        </li>
                        <li class="md:mb-4 mb-2">
                            <a href="#"
                                class="hover:underline hover:text-customeorange-600 transform translate-x-0 hover:translate-x-3 transition-all text-xs md:text-base">Terms
                                &amp; Conditions</a>
                        </li>
                    </ul>
                </div>
                <div class="col-span-2">
                    <h2 class="mb-6 text-sm font-semibold text-black uppercase dark:text-gray-400">
                        CONTACT US
                    </h2>
                    <ul class="text-gray-500 dark:text-gray-400">
                        <li class="md:mb-4 mb-2">
                            <div class="flex space-x-4">
                                <div
                                    class="w-10 h-10 justify-center flex items-center items-center text-center rounded-full bg-customeorange-500">
                                    <i class="fa-solid fa-envelope text-white"></i>
                                </div>
                                <a href="#"
                                    class="hover:underline hover:text-customeorange-600 transform translate-x-0 hover:translate-x-3 transition-all text-xs md:text-base">
                                    Address : No 40 Baria Sreet 133/2 NewYork City,
                                </a>
                            </div>
                        </li>
                        <li class="md:mb-4 mb-2">
                            <div class="flex space-x-4">
                                <div
                                    class="w-10 h-10 justify-center items-center text-center rounded-full bg-customeorange-500">
                                    <div class="">
                                        <i class="fa-solid mt-3.5 fa-mobile-button text-white"></i>
                                    </div>
                                </div>
                                <a href="#"
                                    class="hover:underline hover:text-customeorange-600 transform translate-x-0 hover:translate-x-3 transition-all text-xs md:text-base">
                                    0123456789 <br />
                                </a>
                            </div>
                        </li>
                        <li class="md:mb-4 mb-2">
                            <div class="flex space-x-4">
                                <div
                                    class="w-10 h-10 justify-center items-center flex items-center text-center rounded-full bg-customeorange-500">
                                    <div>
                                        <i class="text-white fa-solid fa-location-pin"></i>
                                    </div>
                                </div>
                                <a href="#"
                                    class="hover:underline hover:text-customeorange-600 transform translate-x-0 hover:translate-x-3 transition-all text-xs md:text-base">
                                    Email : contact@Revoshop.com
                                </a>
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
                        class="accordion-button collapsed relative flex items-center w-full py-4 px-5 text-xs text-black hover:text-customeorange-600 transition-all text-left font-bold capitalize border-0 rounded-none transition focus:outline-none"
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
                                <a href="#"
                                    class="hover:underline hover:text-customeorange-600 transform translate-x-0 hover:translate-x-3 transition-all text-xs md:text-base">Privacy
                                    Policy</a>
                            </li>
                            <li class="md:mb-4 mb-2">
                                <a href="#"
                                    class="hover:underline hover:text-customeorange-600 transform translate-x-0 hover:translate-x-3 transition-all text-xs md:text-base">Licensing</a>
                            </li>
                            <li class="md:mb-4 mb-2">
                                <a href="#"
                                    class="hover:underline hover:text-customeorange-600 transform translate-x-0 hover:translate-x-3 transition-all text-xs md:text-base">Terms
                                    &amp; Conditions</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item border border-gray-200">
                <h2 class="accordion-header mb-0" id="headingThree">
                    <button
                        class="accordion-button collapsed relative flex items-center w-full py-4 px-5 text-xs text-black hover:text-customeorange-600 transition-all text-left font-bold capitalize border-0 rounded-none transition focus:outline-none"
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
                        class="accordion-button collapsed relative flex items-center w-full py-4 px-5 text-xs text-black hover:text-customeorange-600 transition-all text-left font-bold capitalize border-0 rounded-none transition focus:outline-none"
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
                                        class="w-10 h-10 justify-center flex items-center text-center rounded-full bg-customeorange-500">
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
                        class="accordion-button collapsed relative flex items-center w-full py-4 px-5 text-xs text-black hover:text-customeorange-600 transition-all text-left font-bold capitalize border-0 rounded-none transition focus:outline-none"
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
    <!-- Bootom Footer -->
    <div class="bg-customeorange-500 p-3">
        <div class="text-center flex justify-center flex-col items-center">
            <p class="md:mb-4 mb-2 text-xs md:text-sm text-white">
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

{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
</script> --}}
<script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
{{-- <script src="{{asset('node_modules/tw-elements/dist/js/index.min.js')}}"></script> --}}
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
<script src="{{ asset('app.js') }}"></script>
<script>
    // const img1 = document.querySelectorAll(".img1")
    // const cattext = document.querySelectorAll(".cat-text")
    // const catbtnhide = document.querySelectorAll(".catbtnhide")
    // const mrginzero = document.getElementById("mrginzero")
    // // let scrollPosition = window.pageYOffset;
    // // window.addEventListener("scroll" , ()=>{
    // //   console.log(window.scrollY);


    // // })
    // var prevScrollpos = window.pageYOffset;
    // window.onscroll = function() {
    //     var currentScrollPos = window.pageYOffset;
    //     console.log();
    //     if (prevScrollpos < currentScrollPos) {

    //         catbtnhide[0].style.display = "none"
    //         catbtnhide[1].style.display = "none"
    //         for (i = 0; i < img1.length; i++) {
    //             img1[i].style.display = "none"
    //             // catbtnhide[i].style.display= "none"
    //             cattext[i].style.marginTop = "0px"
    //             mrginzero.style.marginTop = "0px !important"

    //         }

    //     }

    //     prevScrollpos = currentScrollPos;
    // }

    const close = document.getElementById('close');
    const show = document.getElementById('show');
    close.addEventListener('click', () => {
        document.getElementById('drawer-navigation').classList.add('hidden')
        document.getElementById('drawer-navigation').classList.remove('block')
    })
    show.addEventListener('click', () => {
        document.getElementById('drawer-navigation').classList.remove('hidden')
        document.getElementById('drawer-navigation').classList.add('block')
    })
</script>
@livewireScripts

</html>
