<div>
    <x-slot name='title'>{{ __('Wishlist') }}</x-slot>
    <div class="bg-gray-100 pb-8">
        <div
            class="container mx-auto flex justify-center lg:flex-nowrap flex-wrap lg:space-x-4 space-x-0 md:p-3 p-0 pt-6">
            <div class="bg-white md:p-6 p-2 shadow lg:w-8/12 w-full">
                <h5 class="text-customeorange-500 sm:text-4xl text-xl  md:pl-20 px-0 font-bold my-2">
                    My WishList
                </h5>
                <div class="md:px-6 px-0 py-3 flex justify-center">
                    <div>
                        @foreach ($wishlists as $wishlist)
                        <div class="flex items-center justify-between lg:flex-nowrap flex-wrap">
                            <div class="flex ie max-w-4xl">
                                <div class="md:p-4 p-0 relative flex justify- flex-col items-center">
                                    <img src="https://rukminim1.flixcart.com/image/312/312/kltryq80/television/t/l/k/hd24d1m19-huidi-original-imagyv5ys3f8frtq.jpeg?q=70"
                                        alt="" class="md:w-60" />
                                    {{-- <div class="flex mt-4">
                                        <button class="md:w-9 w-5 h-9 md:h-5 text-blue-900 bg-custome-100">
                                            +
                                        </button>
                                        <div
                                            class="md:w-20 w-12 md:h-5 h-9 flex justify-center md:text-lg text-xs items-center text-blue-900 bg-white border border-gray-200">
                                            1
                                        </div>
                                        <button class="md:w-9 w-5 md:h-5 h-9 text-blue-900 bg-custome-100">
                                            -
                                        </button>
                                    </div> --}}

                                    <div id="dropdown"
                                        class="hidden z-10 w-auto bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700"
                                        data-popper-reference-hidden="" data-popper-escaped=""
                                        data-popper-placement="bottom"
                                        style="  position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(0px, 510px);  ">
                                        <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                                            aria-labelledby="dropdownDefault">
                                            <li>
                                                <a href="#"
                                                    class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">1</a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">2</a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">3</a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">4</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="md:pl-4 pl-2">
                                    <h5 class="text-customeorange-500 md:text-lg sm:text-sm text-xs font-bold">
                                       {{$wishlist->products->product_title}}
                                    </h5>
                                    {{-- <p class="text-gray-500 md:mt-2 mt-1 md:text-sm text-xs">
                                        Blue
                                    </p> --}}
                                    <p class="text-gray-500 md:mt-2 mt-1 md:text-sm text-xs md:pb-3 pb-0">
                                        @php
                                            $owner=\App\Models\Vendor::findOrFail($wishlist->products->owner_id)
                                        @endphp
                                        Seller:{{$owner->name}}
                                    </p>

                                    <div
                                        class="leading-loose items-center flex-wrap md:space-x-4 space-x-2 lg:my-0 flex">
                                        <h5 class="text-black md:text-xl sm:text-sm text-sm font-extrabold my-1">
                                            ₹{{$wishlist->products->price}}
                                        </h5>
                                        {{-- <p class="text-gray-500 md:text-base sm:text-xs text-xsm">
                                            ₹15,00067% off
                                        </p> --}}
                                        <p class="text-blue-900 md:text-base text-xs">
                                            free delivery
                                        </p>
                                        {{-- <h5 class="text-green-800 font-extrabold md:text-lg sm:text-xsm text-xs">
                                            1 coupon & 2 offers applied
                                        </h5> --}}
                                    </div>
                                    <button type="button" wire:click='deleteWishList({{$wishlist->id}})' 
                                        class="mt-3 text-white bg-customeorange-500 font-medium rounded text-sm md:px-4 px-3 md:py-2 py-1.5 text-center mr-2 mb-2">
                                        <i class="fa-solid fa-trash md:text-md text-sm"></i>
                                    </button>
                                    <button type="button" wire:click='addToCart({{$wishlist->id}})' 
                                        class="mt-3 text-white bg-customeorange-500 font-medium rounded text-sm md:px-4 px-3 md:py-2 py-1.5 text-center mr-2 mb-2">
                                        <i class="fa-solid fa-cart-shopping md:text-md text-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <hr>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
