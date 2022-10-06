<div>
    <x-slot name='title'>Dashboard</x-slot>

    <div class="bg-gray-100 pb-8">

        <div class="container mx-auto flex lg:space-x-4 space-x-0 md:p-3 p-0 pt-6">
            <x-user-sidebar />
            <div class="bg-white p-6 shadow w-full h-screen">
                <div class="pb-3">
                    <h5 class="text-blue-900 md:text-2xl text-xl font-bold my-2">
                        Edit Profile <i class="fa-solid fa-pen-to-square ml-3"></i>
                    </h5>
                </div>
                <hr />

                <form action="" wire:submit.prevent='updateProfile'>
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
                    <div class="grid md:grid-cols-3 grid-cols-1 gap-10 my-7">

                        <div class="relative z-0">
                            <input type="text" id="floating_standard" wire:model.lazy='first_name'
                                class="block py-2.5 px-0 w-full  text-sm text-gray-500 bg-transparent border-0 border-b border-blue-800 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " />
                            <label for="floating_standard"
                                class="absolute text-sm blue-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">First
                                Name</label>
                            @error('first_name')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="relative z-0">
                            <input type="text" id="floating_standard" wire:model.lazy='last_name'
                                class="block py-2.5 px-0 w-full  text-sm text-gray-500 bg-transparent border-0 border-b border-blue-800 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " />
                            <label for="floating_standard"
                                class="absolute text-sm blue-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">First
                                Name</label>
                            @error('last_name')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="relative z-0">
                            <input type="text" id="floating_standard" wire:model.lazy='username'
                                class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b border-blue-800 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " />
                            <label for="floating_standard"
                                class="absolute text-sm text-gray-800 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Username</label>
                            @error('username')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class=" flex my-9">
                        <h5 class="text-blue-900 md:text-lg text-sm font-bold ">Your Gender</h5>
                        <div class="flex space-x-4  ml-3">
                            <div class="flex items-center">
                                <input checked id="default-radio-2" type="radio" wire:model.lazy='gender'
                                    value="{{ $gender }}" name="default-radio"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" />
                                <label for="default-radio-2"
                                    class="ml-2 text-sm font-medium text-blue-900 dark:text-gray-300">Male</label>
                            </div>
                            <div class="flex items-center">
                                <input checked id="default-radio-1" type="radio" wire:model.lazy='gender'
                                    value="{{ $gender }}" name="default-radio"
                                    class="w-4 h-4 text-blue-600 bg-blue-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" />
                                <label for="default-radio-1"
                                    class="ml-2 text-sm font-medium text-blue-900 dark:text-gray-300">Female</label>
                            </div>
                        </div>
                        @error('gender')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="grid md:grid-cols-2 grid-cols-1 gap-10 my-7">
                        <div class="relative z-0">
                            <div class="relative z-0">
                                <input type="email" id="floating_standard" wire:model.lazy='email'
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b border-blue-800 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " />
                                <label for="floating_standard"
                                    class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Your
                                    Email</label>
                                @error('email')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="relative z-0">
                            <input type="number" id="floating_standard" wire:model.lazy='mobile_number'
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b border-blue-800 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " />
                            <label for="floating_standard"
                                class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Your
                                Number</label>
                            @error('mobile_number')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="my-9">
                        <div class="relative z-0 my-6">
                            <input type="text" id="floating_standard" wire:model.lazy='address'
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b border-blue-800 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " />
                            <label for="floating_standard"
                                class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Add
                                Address</label>
                            @error('address')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="flex space-x-3 my-5 mt-9">
                        <div class="overflow-hidden relative w-12 h-12 bg-gray-200 rounded-full dark:bg-gray-600">
                            @if ($new_image != null)
                                <img src="{{ $new_image->temporaryUrl() }}" class="w-full p-1 text-gray-400"
                                    alt="" />
                            @else
                                <img src="{{ $image }}" class="w-full p-1 text-gray-400" alt="" />
                            @endif
                        </div>
                        <label
                            class="relative px-7 py-1 cursor-pointer inline-flex items-center justify-center  overflow-hidden md:text-sm text-xs font-medium text-blue-600 rounded-lg group bg-gradient-to-br from-purple-600 to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
                            <span
                                class="  group-hover:text-white font-semibold py-2 text-sm text-white transition-all ease-in duration-75  dark:bg-gray-900 rounded group-hover:bg-opacity-0">
                                <i class="fa-solid fa-upload mr-2"></i> Choose Photo</span>
                            <input type="file" class="hidden" wire:model='new_image' />
                        </label>
                    </div>
                    <button
                        class="w-15 relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden md:text-sm text-xs font-medium text-blue-600 rounded-lg group bg-gradient-to-br from-purple-600 to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
                        <span
                            class="w-full relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                            Update Profile
                        </span>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
