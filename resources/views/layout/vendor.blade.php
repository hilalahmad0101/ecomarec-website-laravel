<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashoard</title>
    <link rel="shortcut icon" href="images/logo2.png" type="image/x-icon" />
    <link rel="stylesheet" href="{{asset('css/custome.css')}}" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('vendorDashboard.css')}}" />
    <link rel="stylesheet" href="{{asset('css/daterangepicker.css')}}" />
    <link rel="stylesheet" href="{{asset('css/simplebar.css')}}" />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
      integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>
  <body>
    <!-- ///Side bar -->

    <div
      id="side-bar"
      class="transition-all w-72 pl-4 p-2 h-screen z-20 bg-white fixed top-0"
    >
      <div class="">
        <div id="toggleof" class="flex justify-between items-center">
          <a href="index.html" class="">
            <img
              src="https://icms-image.slatic.net/images/ims-web/3ae67ef5-e5f6-42c3-9a40-993ef9a7bfae.png"
              class="sm:w-40 w-20 my-4"
              alt="Flowbite Logo"
            />
          </a>
          <div
            class="w-8 h-8 bg-gray-100 flex justify-center items-center rounded-full"
          >
            <i class="fa-solid fa-xmark"></i>
          </div>
        </div>

        <hr />

        <div>
          <div class="flex items-center space-x-3 py-4 pl-4">
            <i
              class="fa-solid fa-table-cells-large text-customeorange-500 text-xl"
            ></i>
           <a href="dashboard.html"> <h3 class="sm:text-xl text-sm font-medium">Dashboard</h3></a>
          </div>
          <hr />
          <button
            type="button"
            class="flex border-b-2 border-gray-200 items-center w-full p-2 py-4 text-base font-normal text-black transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
            aria-controls="dropdown-example"
            data-collapse-toggle="dropdown-example"
          >
            <img src="../images/grid.png" alt="" />
           <a href="product.html"> <span class="flex-1 ml-3 text-left whitespace-nowrap">Product</span></a>
            <svg
              class="w-6 h-6"
              fill="currentColor"
              viewBox="0 0 20 20"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                fill-rule="evenodd"
                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                clip-rule="evenodd"
              ></path>
            </svg>
          </button>
          <ul id="dropdown-example" class="hidden py-2 space-y-2">
            <li>
              <a
                href="addProduct.html"
                class="flex items-center w-full p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                > Add Products</a
              >
            </li>
            <li>
              <a
                href="#"
                class="flex items-center w-full p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                >Billing</a
              >
            </li>
            <li>
              <a
                href="#"
                class="flex items-center w-full p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                >Invoice</a
              >
            </li>
          </ul>

          <div class="flex items-center space-x-3 py-4 pl-4">
            <i
              class="fa-solid fa-table-cells-large text-customeorange-500 sm:text-xl text-sm"
            ></i>
            <a href="order.html"><h3 class="sm:text-xl text-sm font-medium">Order</h3></a>
          </div>
          <div class="flex items-center space-x-3 py-4 pl-4">
            <i
              class="fa-solid fa-table-cells-large text-customeorange-500 sm:text-xl text-sm"
            ></i>
          <a href="changepassword.html">  <h3 class="sm:text-xl text-sm font-medium">Chnage Password</h3></a>
          </div>
        </div>
      </div>
    </div>

    <!-- ///Header -->

    <div
      class="flex transition-all bg-white z-10 transition-all fixed top-0 left-0 justify-between lg:px-24 px-3 w-full border border-gray-100 py-4 shadow"
    >
      <div id="movilng" class="flex sm:space-x-3 space-x-1 items-center">
        <div>
          <i
            id="menuIcon"
            class="fa-solid fa-bars sm:text-2xl text-xl cursor-pointer"
          ></i>
        </div>
        <a href="index.html" class="" id="hidelogo">
          <img
            src="https://icms-image.slatic.net/images/ims-web/3ae67ef5-e5f6-42c3-9a40-993ef9a7bfae.png"
            class="sm:mr-3 mr-1 h-7 sm:sm:h-12 h-10"
            alt="Flowbite Logo"
          />
        </a>
        <!-- <form class=" lg:flex hidden items-center">
          <label for="simple-search " class="sr-only">Search</label>
          <div class="relative w-full">
            <div
              class="flex absolute inset-y-0 right-5 items-center pl-3 pointer-events-none"
            >
              <svg
                aria-hidden="true"
                class="w-5 h-5 text-gray-500 dark:text-gray-400"
                fill="currentColor"
                viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                  clip-rule="evenodd"
                ></path>
              </svg>
            </div>
            <input
              type="text"
              id="simple-search"
              class="w-full xl:w-550 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block pl-4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
              placeholder="Search Itmes"
              required=""
            />
          </div>
        </form> -->
      </div>

      <div class="flex items-center space-x-4">
        <button
          id="dropdownAvatarNameButton"
          data-dropdown-toggle="dropdownAvatarName"
          class="flex items-center text-sm font-medium text-gray-900 rounded-full hover:text-customeorange-500 dark:hover:text-blue-500 md:mr-0 bg-gray-50 p-2"
          type="button"
        >
          <span class="sr-only">Open user menu</span>
          <img
            class="mr-2 sm:w-8 w-6 sm:h-8 h-6 rounded-full"
            src="https://avatars.githubusercontent.com/u/92790017?v=4"
            alt="user photo"
          />
          Bonnie Green
          <svg
            class="w-4 h-4 mx-1.5"
            aria-hidden="true"
            fill="currentColor"
            viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              fill-rule="evenodd"
              d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
              clip-rule="evenodd"
            ></path>
          </svg>
        </button>

        <!-- Dropdown menu -->
        <div
          id="dropdownAvatarName"
          class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600"
          data-popper-reference-hidden=""
          data-popper-escaped=""
          data-popper-placement="bottom"
          style="
            position: absolute;
            inset: 0px auto auto 0px;
            margin: 0px;
            transform: translate(0px, 510px);
          "
        >
          <div class="py-3 px-4 text-sm text-gray-900 dark:text-white">
            <div class="font-medium">Pro User</div>
            <div class="truncate">name@flowbite.com</div>
          </div>
          <ul
            class="py-1 text-sm text-gray-700 dark:text-gray-200"
            aria-labelledby="dropdownInformdropdownAvatarNameButtonationButton"
          >
            <li>
              <a
                href="#"
                class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                >Dashboard</a
              >
            </li>
            <li>
              <a
                href="#"
                class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                >Settings</a
              >
            </li>
            <li>
              <a
                href="#"
                class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                >Earnings</a
              >
            </li>
          </ul>
          <div class="py-1">
            <a
              href="#"
              class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white"
              >Sign out</a
            >
          </div>
        </div>

        <div>
          <i
            class="fa-regular fa-bell sm:text-3xl text-xl text-customeorange-500"
          ></i>
        </div>
        <div>
          <i
            class="fa-solid fa-gear sm:text-3xl text-xl text-customeorange-500"
          ></i>
        </div>
      </div>
    </div>

    {{$slot}}
  </body>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('js/Chart.min.js')}}"></script>
  <script src="{{asset('js/chart.js')}}"></script>
  <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
  <script src="../../node_modules/tw-elements/dist/js/index.min.js"></script>

  <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
  
  <script src="{{asset('vendordashboard.js')}}"></script>
</html>