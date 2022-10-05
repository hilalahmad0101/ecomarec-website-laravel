

<div class="w-96 h-full lg:block hidden">
    <div
      class="w-full p-5 mb-4 bg-white shadow rounded flex space-x-4 items-center"
    >
      <div
        class="overflow-hidden relative w-12 h-12 bg-gray-200 rounded-full dark:bg-gray-600"
      >
        <!-- <svg class="absolute -left-1 w-12 h-12 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg> -->
        <img
          src="{{asset('storage')}}/{{Auth::user()->image}}"
          class="w-full p-1 text-gray-400"
          alt=""
        />
      </div>
      <div class="leading-6">
        <p class="font-medium text-gray-500">Welcome Back</p>
        <h3 class="text-blue-800 font-bold">{{Auth::user()->username}}</h3>
      </div>
    </div>
    <div class="bg-white">
      <div class="p-5 flex justify-between items-center">
        <div class="flex space-x-4 items-center">
          <i class="fa-brands fa-cc-paypal text-blue-500"></i>
          <p class="font-semibold text-blue-800">My Crad</p>
        </div>
    
        <div>
          <i class="fa-solid fa-chevron-right text-blue-500"></i>
        </div>
      </div>
      <hr />
    
      <div class="pb-5 pt-4">
        <div
          class="text-gray-800 p-3 transition-all w-full cursor-pointer"
        >
          <a href="account.html" class="pl-1 font-bold"
            >Accound Setting</a
          >
        </div>
        <a href="editProfile.html">
        <div
          class="flex justify-between pr-3 w-full items-center cursor-pointer hover:bg-blue-100 transition-all"
        >
            <div class="flex p-3 pl-7 space-x-4 items-center">
              <i class="fa-solid fa-user text-blue-500"></i>
              <p class="font-medium text-blue-800">Edit Profile</p>
            </div>
            <div>
              <i class="fa-solid fa-angle-right"></i>
            </div>
          </div>
      </a>
      <a href="addres.html">
        <div
          class="flex justify-between pr-3 w-full items-center cursor-pointer hover:bg-blue-100 transition-all"
        >
          <div class="flex p-3 pl-7 space-x-4 items-center">
            <i class="fa-solid fa-location-dot text-blue-500"></i>
            <p class="font-medium text-blue-800">Address Management</p>
          </div>
          <div>
            <i class="fa-solid fa-angle-right"></i>
          </div>
        </div>
      </a>
      <a href="language.html">
        <div
          class="flex justify-between pr-3 w-full items-center cursor-pointer hover:bg-blue-100 transition-all"
        >
          <div class="flex p-3 pl-7 space-x-4 items-center">
            <i class="fa-solid fa-globe text-blue-500"></i>
            <p class="font-medium text-blue-800">Select Language</p>
          </div>
          <div>
            <i class="fa-solid fa-angle-right"></i>
          </div>
        </div>
      </a>
      <a href="notification.html">
        <div
          class="flex justify-between pr-3 w-full items-center cursor-pointer hover:bg-blue-100 transition-all"
        >
          <div class="flex p-3 pl-7 space-x-4 items-center">
            <i class="fa-solid fa-bell text-blue-500"></i>
            <p class="font-medium text-blue-800">Notification Setting</p>
          </div>
          <div>
            <i class="fa-solid fa-angle-right"></i>
          </div>
        </div>
      </a>
      <a href="">
        <div
          class="flex justify-between pr-3 w-full items-center cursor-pointer hover:bg-blue-100 transition-all"
        >
          <div class="flex p-3 pl-7 space-x-4 items-center">
            <i class="fa-brands fa-cc-paypal text-blue-500"></i>
            <p class="font-medium text-blue-800">Save Card & wallet</p>
          </div>
          <div>
            <i class="fa-solid fa-angle-right"></i>
          </div>
        </div>
      </a>
      </div>
      <hr />
    
      <div class="py-4">
        <div
          class="text-gray-800 p-2 transition-all w-full cursor-pointer"
        >
          <a href="edit-profile.html" class="pl-1 font-bold"
            >Earn With abc</a
          >
        </div>
        <a href="">
        <div
          class="flex justify-between pr-3 w-full items-center cursor-pointer hover:bg-blue-100 transition-all"
        >
          <div class="flex p-3 pl-7 space-x-4 items-center">
            <i class="fa-solid fa-basket-shopping text-blue-500"></i>
            <p class="font-medium text-blue-800">Sell on Website</p>
          </div>
          <div>
            <i class="fa-solid fa-angle-right"></i>
          </div>
        </div>
      </a>
      </div>
      <hr />
    
      <div class="py-5">
        <div
          class="text-gray-800 p-2 transition-all w-full cursor-pointer"
        >
          <a href="edit-profile.html" class="pl-1 font-bold"
            >Feedback & information</a
          >
        </div>
        <a href="">
        <div
          class="flex justify-between pr-3 w-full items-center cursor-pointer hover:bg-blue-100 transition-all"
        >
          <div class="flex p-3 pl-7 space-x-4 items-center">
            <i class="fa-solid fa-file text-blue-500"></i>
            <p class="font-medium text-blue-800">
              Team Ploices and Licenses
            </p>
          </div>
          <div>
            <i class="fa-solid fa-angle-right"></i>
          </div>
        </div>
      </a>
      <a href="">
        <div
          class="flex justify-between pr-3 w-full items-center cursor-pointer hover:bg-blue-100 transition-all"
        >
          <div class="flex p-3 pl-7 space-x-4 items-center">
            <i class="fa-solid fa-circle-question text-blue-500"></i>
    
            <p class="font-medium text-blue-800">Browse FAQS</p>
          </div>
          <div>
            <i class="fa-solid fa-angle-right"></i>
          </div>
        </div>
      </a>
        <!-- <div class="flex justify-center mt-5">
        <button
          type="button"
          class="m-4 w-9/12 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
        >
          <i class="fa-solid fa-power-off text-white mr-3"></i> Logout
        </button>
      </div> -->
        <div class="flex justify-center my-5">
          <button
            class="w-9/12 relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-blue-600 rounded-lg group bg-gradient-to-br from-purple-600 to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800"
          >
            <span
              class="w-full relative px-5 py-2.5 group-hover:text-white transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0"
            >
              <i
                class="fa-solid fa-power-off group-hover:text-white mr-3"
              ></i>
              Logout
            </span>
          </button>
        </div>
      </div>
      <hr />
    </div>
    </div>