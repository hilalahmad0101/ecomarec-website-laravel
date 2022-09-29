<div>
    <x-slot name='title'>Login</x-slot>
    <div class="h-screen w-full bg-green-600 flex justify-center items-center">
        <div class="container mx-auto max-w-md ">
            <div class="  w-full ">
                <div class="leading-loose">

                    <form action="" class=" m-4 p-10 bg-white rounded shadow-xl" wire:submit.prevent='login'>
                      
                        <h1 class="text-xl md:text-3xl text-center">Admin Login</h1>
                        @if (session()->has('error'))
                        <span class="text-red-500">{{ session('error') }}</span>
                    @endif
                        <div class="my-2">
                            <input type="text" class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded"
                                wire:model.lazy='username' placeholder="Enter Username">
                            @error('username')
                                <span class="text-red-600 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="my-2">
                            <input type="password" class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded"
                                wire:model.lazy='password' placeholder="Enter password">
                            @error('password')
                                <span class="text-red-600 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <button type="submit"
                            class="block bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-4 rounded">Login</button>
                    </form>
                </div>
            </div>
        </div>

    </div>

</div>
