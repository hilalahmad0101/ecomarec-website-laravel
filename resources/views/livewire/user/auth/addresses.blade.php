<div>
    <x-slot name='title'>Addresses</x-slot>
    <div class="bg-gray-100 pb-8 w-full">
        <div class="container mx-auto flex lg:space-x-4 space-x-0 md:p-3 p-0 pt-6">
            <x-user-sidebar />
            <div class="bg-gray-100 pb-8 w-full">
                <div class="container mx-auto flex md:space-x-4 p-3 pt-6">
                    <div id="acountSideBar"></div>
                    <div class="bg-white p-6 shadow w-full">
                        <div class="pb-3">
                            <h5 class="text-customeorange-500 md:text-2xl text-xl font-bold my-2">
                                My Address
                                <i class="fa-solid fa-location-dot ml-3"></i>
                            </h5>
                        </div>
                        <hr>
                        <div class="my-9">
                            <a href="{{ route('user.billing-address') }}"
                                class="text-white bg-textColor-100 hover:bg-textColor-200    font-medium rounded text-sm px-6 py-2.5 text-center mr-2 mb-2">
                                <i class="fa-solid fa-plus mr-2"></i> {{ $billing_addresses == null ? 'Add' : 'Edit' }}
                            </a>
                        </div>
                        <div class="">
                            @if ($billing_addresses != null)
                                <div class="flex items-center space-x-3">
                                    <h5 class="text-customeorange-500 md:text-lg text-sm font-bold ">First Name</h5>
                                    <p class=" md:text-md text-black text-xs font-medium ">
                                        {{ $billing_addresses->first_name }}</p>
                                </div>
                                <div class="flex items-center space-x-3">
                                    <h5 class="text-customeorange-500 md:text-lg text-sm font-bold ">Last Name</h5>
                                    <p class=" md:text-md text-black text-xs font-medium ">
                                        {{ $billing_addresses->last_name }}</p>
                                </div>
                                <div class="flex items-center space-x-3">
                                    <h5 class="text-customeorange-500 md:text-lg text-sm font-bold ">Company Name</h5>
                                    <p class=" md:text-md text-black text-xs font-medium ">
                                        {{ $billing_addresses->company_name }}</p>
                                </div>
                                <div class="flex items-center space-x-3">
                                    <h5 class="text-customeorange-500 md:text-lg text-sm font-bold ">Street Address</h5>
                                    <p class=" md:text-md text-black text-xs font-medium ">
                                        {{ $billing_addresses->street_address1 }}</p>
                                </div>
                                <div class="flex items-center space-x-3">
                                    <h5 class="text-customeorange-500 md:text-lg text-sm font-bold ">City</h5>
                                    <p class=" md:text-md text-black text-xs font-medium ">
                                        {{ $billing_addresses->City }}</p>
                                </div>
                                <div class="flex items-center space-x-3">
                                    <h5 class="text-customeorange-500 md:text-lg text-sm font-bold ">State</h5>
                                    <p class=" md:text-md text-black text-xs font-medium ">
                                        {{ $billing_addresses->state }}</p>
                                </div>
                                <div class="flex items-center space-x-3">
                                    <h5 class="text-customeorange-500 md:text-lg text-sm font-bold ">Postal Code</h5>
                                    <p class=" md:text-md text-black text-xs font-medium ">
                                        {{ $billing_addresses->postcode }}</p>
                                </div>
                                <div class="flex items-center space-x-3">
                                    <h5 class="text-customeorange-500 md:text-lg text-sm font-bold ">Country</h5>
                                    <p class=" md:text-md text-black text-xs font-medium ">
                                        {{ $billing_addresses->country }}</p>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
