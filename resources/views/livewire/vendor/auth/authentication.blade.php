<div>
    <x-slot name='title'>{{ __('Registration And Login') }}</x-slot>


    <div class="h-screen w-full bg-green-600 flex justify-center items-center">
        <div class="container mx-auto max-w-3xl ">
            <div class="  w-full ">
                <div class="leading-loose">
                    @if (session()->has('success'))
                        {{ session('success') }}
                    @endif

                    <form action="" class=" m-4 p-10 bg-white rounded shadow-xl" wire:submit.prevent='create'>
                        <h1 class="text-xl md:text-3xl text-center">Vendor Registration</h1>
                        <div class="mt-2">
                            <input type="text" class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded"
                                wire:model.lazy='name' placeholder="Enter name">
                            @error('name')
                                <span class="text-red-600 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mt-2">
                            <input type="email" class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded"
                                wire:model.lazy='email' placeholder="Enter email">
                            @error('email')
                                <span class="text-red-600 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mt-2">
                            <input type="text" class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded"
                                wire:model.lazy='mobile' placeholder="Enter mobile ">
                            @error('mobile')
                                <span class="text-red-600 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                            <div class="mt-2">
                                <input type="text" class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded"
                                    wire:model.lazy='owner_name' placeholder="Name of the Proprietor/Owner">
                                @error('owner_name')
                                    <span class="text-red-600 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mt-2">
                                <input type="text" class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded"
                                    wire:model.lazy='company_name' placeholder="Company/Brand Name">
                            </div>
                        </div>
                        <div class="mt-2">
                            <input type="text" class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded"
                                wire:model.lazy='business_location' placeholder="Business Location">
                            @error('business_location')
                                <span class="text-red-600 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mt-2">
                            <div class="form-check">
                                <input
                                    class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-2 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                    type="checkbox" id="inlineCheckbox1" value="option1">
                                <label class="form-check-label inline-block text-gray-800" for="inlineCheckbox1">Can you
                                    have gst</label>
                            </div>
                            <button type="submit"
                                class="block bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-4 rounded">Submit</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
