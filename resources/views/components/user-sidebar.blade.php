<div class="w-96 h-full lg:block hidden">
    <div class="w-full p-5 mb-4 bg-white shadow rounded flex space-x-4 items-center">
        <div class="overflow-hidden relative w-12 h-12 bg-gray-200 rounded-full dark:bg-gray-600">
            <!-- <svg class="absolute -left-1 w-12 h-12 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg> -->
            <img src="{{ asset('storage') }}/{{ Auth::user()->image }}" class="w-full p-1 text-gray-400"
                alt="" />
        </div>
        <div class="leading-6">
            <p class="font-medium text-gray-500">Welcome Back</p>
            <h3 class="text-customeorange-600 font-bold">{{ Auth::user()->username }}</h3>
        </div>
    </div>
    <div class="bg-white">
        <div class="p-5 flex justify-between items-center">
            <div class="flex space-x-4 items-center">
                <i class="fa-brands fa-cc-paypal text-customeorange-600"></i>
                <p class="font-semibold text-black">My Crad</p>
            </div>

            <div>
                <i class="fa-solid fa-chevron-right text-customeorange-600"></i>
            </div>
        </div>
        <hr />

        <div class="pb-5 pt-4">
            <div class="text-gray-800 p-3 transition-all w-full cursor-pointer">
                <a href="account.html" class="pl-1 font-bold">Accound Setting</a>
            </div>
            <a href="editProfile.html">
                <div
                    class="flex justify-between pr-3 w-full items-center cursor-pointer hover:bg-blue-100 transition-all">
                    <div class="flex p-3 pl-7 space-x-4 items-center">
                        <i class="fa-solid fa-user text-customeorange-600"></i>
                        <p class="font-medium text-black">Edit Profile</p>
                    </div>
                    <div>
                        <i class="fa-solid fa-angle-right"></i>
                    </div>
                </div>
            </a>
            <a href="{{ route('user.addresses') }}">
                <div
                    class="flex justify-between pr-3 w-full items-center cursor-pointer hover:bg-blue-100 transition-all">
                    <div class="flex p-3 pl-7 space-x-4 items-center">
                        <i class="fa-solid fa-location-dot text-customeorange-600"></i>
                        <p class="font-medium  {{Request::routeIs('user.addresses') ? 'text-customeorange-600' : 'text-black'}}">Address Management</p>
                    </div>
                    <div>
                        <i class="fa-solid fa-angle-right"></i>
                    </div>
                </div>
            </a>
            <a href="{{ route('user.change-password') }}">
                <div
                    class="flex justify-between pr-3 w-full items-center cursor-pointer hover:bg-blue-100 transition-all">
                    <div class="flex p-3 pl-7 space-x-4 items-center">
                        <i class="fa-solid fa-globe text-customeorange-600"></i>
                        <p class="font-medium text-black">Change Password</p>
                    </div>
                    <div>
                        <i class="fa-solid fa-angle-right"></i>
                    </div>
                </div>
            </a>
            <a href="notification.html">
                <div
                    class="flex justify-between pr-3 w-full items-center cursor-pointer hover:bg-blue-100 transition-all">
                    <div class="flex p-3 pl-7 space-x-4 items-center">
                        <i class="fa-solid fa-bell text-customeorange-600"></i>
                        <p class="font-medium text-black">Notification Setting</p>
                    </div>
                    <div>
                        <i class="fa-solid fa-angle-right"></i>
                    </div>
                </div>
            </a>
            <a href="">
                <div
                    class="flex justify-between pr-3 w-full items-center cursor-pointer hover:bg-blue-100 transition-all">
                    <div class="flex p-3 pl-7 space-x-4 items-center">
                        <i class="fa-brands fa-cc-paypal text-customeorange-600"></i>
                        <p class="font-medium text-black">Save Card & wallet</p>
                    </div>
                    <div>
                        <i class="fa-solid fa-angle-right"></i>
                    </div>
                </div>
            </a>
        </div>
        <hr />

        <div class="py-4">
            <div class="text-gray-800 p-2 transition-all w-full cursor-pointer">
                <a href="edit-profile.html" class="pl-1 font-bold">Earn With abc</a>
            </div>
            <a href="">
                <div
                    class="flex justify-between pr-3 w-full items-center cursor-pointer hover:bg-blue-100 transition-all">
                    <div class="flex p-3 pl-7 space-x-4 items-center">
                        <i class="fa-solid fa-basket-shopping text-customeorange-600"></i>
                        <p class="font-medium text-black">Sell on Website</p>
                    </div>
                    <div>
                        <i class="fa-solid fa-angle-right"></i>
                    </div>
                </div>
            </a>
        </div>
        <hr />

        <div class="py-5">
            <div class="text-gray-800 p-2 transition-all w-full cursor-pointer">
                <a href="edit-profile.html" class="pl-1 font-bold">Feedback & information</a>
            </div>
            <a href="">
                <div
                    class="flex justify-between pr-3 w-full items-center cursor-pointer hover:bg-blue-100 transition-all">
                    <div class="flex p-3 pl-7 space-x-4 items-center">
                        <i class="fa-solid fa-file text-customeorange-600"></i>
                        <p class="font-medium text-black">
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
                    class="flex justify-between pr-3 w-full items-center cursor-pointer hover:bg-blue-100 transition-all">
                    <div class="flex p-3 pl-7 space-x-4 items-center">
                        <i class="fa-solid fa-circle-question text-customeorange-600"></i>

                        <p class="font-medium text-black">Browse FAQS</p>
                    </div>
                    <div>
                        <i class="fa-solid fa-angle-right"></i>
                    </div>
                </div>
            </a>
            <!-- <div class="flex justify-center mt-5">
        <button
          type="button"
          class="m-4 w-9/12 text-white bg-blue-700 hover:bg-customeorange-600 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-customeorange-600"
        >
          <i class="fa-solid fa-power-off text-white mr-3"></i> Logout
        </button>
      </div> -->
            <livewire:user.auth.logout>
        </div>
        <hr />
    </div>
</div>
