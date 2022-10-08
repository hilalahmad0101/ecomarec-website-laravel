<div>
    <x-slot name='title'>Cart</x-slot>
    <div class="bg-gray-100 pb-8">
        @if (count($carts) > 0)
            <div
                class="container mx-auto flex justify-center lg:flex-nowrap flex-wrap lg:space-x-4 space-x-0 md:p-3 p-0 pt-6">
                <div class="bg-white md:p-6 p-2 shadow lg:w-3/5 w-full">
                    @if (session()->has('success'))
                        <div class="bg-green-500 w-full py-4 px-4 rounded text-white text-xl text-bold">
                            {{ session('success') }}
                        </div>
                    @endif
                    @foreach ($carts as $cart)
                        <div class="md:px-6 px-0 py-3">
                            <div>
                                <div class="flex items-center justify-between lg:flex-nowrap flex-wrap">
                                    <div class="flex ie max-w-4xl">
                                        <div class="md:p-4 p-0 relative flex justify- flex-col items-center">
                                            <img src="{{ asset('storage') }}/{{ $cart->products->image }}" alt=""
                                                class="md:w-60 h-24 object-cover" />
                                            <div class="flex mt-3 items-center">


                                                <button wire:click='minus' id='minus'
                                                    class=" flex justify-center items-center md:w-9 w-5 md:h-7 text-blue-900 bg-custome-100">
                                                    -
                                                </button>
                                                <input id="input" value="{{ $cart->qty }}" type="number"
                                                    readonly
                                                    class="md:w-28 w-12 md:h-7 flex text-center justify-center md:text-lg text-xs  items-center text-blue-900 bg-white border border-gray-200"
                                                    id="">
                                                <button wire:click='plus' id='plus'
                                                    class="md:w-9 w-5 md:h-7 text-blue-900 flex justify-center items-center bg-custome-100">
                                                    +
                                                </button>

                                                <script defer>
                                                    const plus = document.getElementById('plus');
                                                    const minus = document.getElementById('minus');
                                                    let i = {{ $cart->qty }};
                                                    plus.addEventListener('click', function() {
                                                        const input = document.getElementById("input");
                                                        i++;
                                                        input.value = i;
                                                    })
                                                    minus.addEventListener('click', function() {
                                                        const input = document.getElementById("input");
                                                        if (i != 1) {
                                                            i--;
                                                            input.value = i;
                                                        }


                                                    })
                                                </script>

                                            </div>
                                            {{--                                         <div id="dropdown"
                                            class="hidden z-10 w-auto bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700"
                                            data-popper-reference-hidden="" data-popper-escaped=""
                                            data-popper-placement="bottom"
                                            style="position: absolute; inset: 0px auto auto 0px;  margin: 0px;transform: translate(0px, 510px);">
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
                                        </div> --}}
                                        </div>
                                        <div class="md:pl-4 pl-2">
                                            <h5 class="text-customeorange-500 md:text-lg sm:text-sm text-xs font-bold">
                                                {{ $cart->products->product_title }}
                                            </h5>
                                            {{-- <p class="text-gray-500 md:mt-2 mt-1 md:text-sm text-xs">
                                            Blue
                                        </p> --}}
                                            <p class="text-gray-500 md:mt-2 mt-1 md:text-sm text-xs md:pb-3 pb-0">
                                                @php
                                                    $owner = \App\Models\Vendor::findOrFail($cart->products->owner_id);
                                                @endphp
                                                Seller:{{ $owner->name }}
                                            </p>

                                            <div
                                                class="leading-loose items-center flex-wrap md:space-x-4 space-x-2 lg:my-0 flex">
                                                <h5
                                                    class="text-black md:text-xl sm:text-sm text-sm font-extrabold my-1">
                                                    @php
                                                        $total = $cart->products->price * $cart->qty;
                                                    @endphp
                                                    ₹ {{ $total }}
                                                </h5>
                                                {{-- <p class="text-gray-500 md:text-base sm:text-xs text-xsm">
                                            </p> --}}
                                                <p class="text-blue-900 md:text-base text-xs">
                                                    free delivery
                                                </p>
                                                <h5
                                                    class="text-green-800 font-extrabold md:text-lg sm:text-xsm text-xs">
                                                    {{-- 1 coupon & 2 offers applied --}}
                                                </h5>
                                            </div>
                                            {{-- <button type="button" data-bs-toggle="modal"
                                            data-bs-target="#exampleModalScrollable"
                                            class="mt-3 text-white bg-customeorange-500 font-medium rounded text-sm md:px-4 px-3 md:py-2 py-1.5 text-center mr-2 mb-2">
                                            <i class="fa-solid fa-trash md:text-md text-sm"></i>
                                        </button> --}}
                                            <div class="flex justify-between items-center">
                                                <button type="button" wire:click='deleteCart({{ $cart->id }})'
                                                    class="mt-3 text-white bg-customeorange-500 font-medium rounded text-sm md:px-4 px-3 md:py-2 py-1.5 text-center mr-2 mb-2">
                                                    <i class="fa-solid fa-trash md:text-md text-sm"></i>
                                                </button>
                                                <button type="button" wire:click='updateCart({{ $cart->id }})'
                                                    class="mt-3 text-white bg-customeorange-500 font-medium rounded text-sm md:px-4 px-3 md:py-2 py-1.5 text-center mr-2 mb-2">
                                                    Update Cart
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                    @endforeach

                </div>
                <div class="lg:w-96 w-full h-full lg:my-0 my-4">
                    <div class="w-full p-5 mb-4 bg-white shadow rounded">
                        <h3 class="text-customeorange-500 font-bold sm:text-lg text-sm">
                            PRICE DETAILS
                        </h3>

                        <div class="flex space-x-4 justify-between my-5 items-center">
                            @php
                                $totalQty = 0;
                                $totalPrice = 0;
                            @endphp
                            @foreach ($carts as $cart)
                                @php
                                    $totalQty += $cart->qty;
                                    $totalPrice += $cart->qty * $cart->products->price;
                                @endphp
                            @endforeach
                            <h4 class="text-black font-medium">Price ({{ $totalQty }} item)</h4>
                            <p class="text-customeorange-500">${{ $totalPrice }}</p>
                        </div>
                        {{-- <div class="flex space-x-4 justify-between my-5 items-center">
                            <h4 class="text-black font-medium">Coupons for you</h4>
                            <p class="text-customeorange-500">$555</p>
                        </div> --}}
                        <div class="flex space-x-4 justify-between my-5 items-center">
                            <h4 class="text-black font-medium">Delivery Charges</h4>
                            <p class="text-customeorange-500">$10</p>
                        </div>
                        <hr />
                        <div class="flex space-x-4 justify-between my-5 items-center">
                            <h4 class="text-customeorange-500 font-bold md:text-2xl sm:text-xl text-md">
                                Total Amount
                            </h4>
                            <p class="text-customeorange-500">${{ $totalPrice + 10 }}</p>
                        </div>
                            <button type="button"
                                class="w-full mt-5 text-white bg-customeorange-500 font-medium rounded text-sm px-6 py-2.5 text-center mr-2 mb-2">
                                <a href="{{ route('user.order') }}"> Proceed to checkout</a>
                            </button>
                        <hr />
                        <br />

                        <!-- component -->
                        <!-- Tailwind CSS Playground : https://play.tailwindcss.com/KbKtNzkOBy -->

                        <div>
                            <h4 class=" font-bold sm:text-md text-sm text-green-800">
                                You will save ₹300 on this order
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <div
                class="container mx-auto flex justify-center lg:flex-nowrap flex-wrap lg:space-x-4 space-x-0 md:p-3 p-0 pt-6">
                <div class="bg-white md:p-6 p-2 shadow lg:w-11/12 w-full">
                    <div class="flex justify-center flex-col items-center">
                        <h5 class="text-black sm:text-4xl text-2xl text-center font-bold my-2">
                            Your Cart is <span class="text-customeorange-500"> empty </span>
                        </h5>
                        <img src="https://rukminim1.flixcart.com/www/800/800/promos/16/05/2019/d438a32e-765a-4d8b-b4a6-520b560971e8.png?q=90"
                            class="w-96" alt="" />
                        <a href="index.html">
                            <button type="button"
                                class="w-full mt-5 text-white bg-customeorange-500 font-medium rounded text-sm px-6 py-2.5 text-center mr-2 mb-2">
                                Return to Shop
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        @endif

    </div>


</div>
