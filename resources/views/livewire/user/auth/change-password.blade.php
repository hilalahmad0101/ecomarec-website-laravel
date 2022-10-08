<div>
    <x-slot name='title'>Change Password</x-slot>
    <div class="bg-gray-100 pb-8">
        <div class="container mx-auto flex lg:space-x-4 space-x-0 md:p-3 p-0 pt-6">
            <x-user-sidebar />
            <div class="bg-white p-6 shadow w-full h-screen ">
                <div class="pb-3">
                    <h5 class="text-customeorange-600 md:text-2xl text-xl font-bold my-2">
                        Change Password <i class="fa-solid fa-pen-to-square ml-3"></i>
                    </h5>
                </div>
                <hr />

                <form action="" wire:submit.prevent='changePassword' class=" max-w-xl container mx-auto">
                    @if (session()->has('success'))
                        <div class="bg-green-500 py-4 px-2 rounded-md font-semibold text-white">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if (session()->has('error'))
                        <div class="bg-red-500 py-4 px-2 rounded-md font-semibold text-white">
                            {{ session('error') }}
                        </div>
                    @endif
                    <div class="my-7 space-y-5">
                        <div class="relative z-0">
                            <input type="password" id="floating_standard" wire:model.lazy='old_password'
                                class="block py-2.5 px-0 w-full  text-sm text-gray-500 bg-transparent border-0 border-b border-customeorange-500 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-customeorange-500 focus:outline-none focus:ring-0 focus:border-customeorange-500 peer"
                                placeholder=" " />
                            <label for="floating_standard"
                                class="absolute text-sm customeorange-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-customeorange-500 peer-focus:dark:text-customeorange-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Old Password</label>
                            @error('old_password')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="relative z-0">
                            <input type="password" id="floating_standard" wire:model.lazy='new_password'
                                class="block py-2.5 px-0 w-full  text-sm text-gray-500 bg-transparent border-0 border-b border-customeorange-500 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-customeorange-500 focus:outline-none focus:ring-0 focus:border-customeorange-500 peer"
                                placeholder=" " />
                            <label for="floating_standard"
                                class="absolute text-sm customeorange-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-customeorange-500 peer-focus:dark:text-customeorange-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">New Password</label>
                            @error('new_password')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="relative z-0">
                            <input type="password" id="floating_standard" wire:model.lazy='confirm_password'
                                class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b border-customeorange-500 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-customeorange-500 focus:outline-none focus:ring-0 focus:border-customeorange-500 peer"
                                placeholder=" " />
                            <label for="floating_standard"
                                class="absolute text-sm text-gray-800 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-customeorange-500 peer-focus:dark:text-customeorange-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Confirm Password</label>
                            @error('confirm_password')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <button
                        class="w-15 relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden md:text-sm text-xs font-medium text-customeorange-500 rounded-lg group bg-gradient-to-br from-purple-600 to-customeorange-500 group-hover:from-purple-600 group-hover:to-customeorange-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-customeorange-500">
                        <span
                            class="w-full relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                            Change Password
                        </span>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
