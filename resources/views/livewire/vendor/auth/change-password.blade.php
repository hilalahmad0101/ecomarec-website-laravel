<div>
    <x-slot name='title'>Change Password</x-slot>
    <div class="flex flex-col">
        <div class="container mx-auto max-w-md ">
            <div class="w-full ">
                <div class="leading-loose">
                    @if (session()->has('error'))
                        <span class="text-red-500">{{ session('error') }}</span>
                    @endif
                    @if (session()->has('success'))
                        <span class="text-green-500">{{ session('success') }}</span>
                    @endif
                    <form action="" class=" m-4 p-10 bg-white rounded shadow-xl" wire:submit.prevent='changePassword'>
                        <h1 class="text-xl md:text-3xl text-center">Change Password</h1>
                        <div class="my-2">
                            <input type="password" class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded"
                                wire:model.lazy='new_password' placeholder="Enter New Password">
                            @error('new_password')
                                <span class="text-red-600 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="my-2">
                            <input type="password" class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded"
                                wire:model.lazy='c_password' placeholder="Enter Confirm Password">
                            @error('c_password')
                                <span class="text-red-600 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <button type="submit"
                        class="block bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-4 rounded">Change Password</button>
                    </form>
                </div>
            </div>
        </div>


    </div>
</div>
