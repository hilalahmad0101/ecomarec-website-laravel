<div>
    <x-slot name="title">Home</x-slot>

   @if (session()->has('success'))
   <div class="fixed bg-green-400 z-[999] top-4 rounded-md right-4 py-2 px-3">
    {{session('success')}}
   </div>
   @endif

   @if (session()->has('error'))
   <div class="fixed bg-red-400 z-[999] top-4 rounded-md right-4 py-2 px-3">
    {{session('error')}}
   </div>
   @endif
    <div id="carouselExampleCaptions" class="carousel slide relative" data-bs-ride="carousel">
        <div class="carousel-indicators absolute right-0 bottom-0 left-0 flex justify-center p-0 mb-4">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active hidden"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" class="hidden" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button class="hidden" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner relative w-full overflow-hidden">
            <div class="carousel-item active relative float-left w-full">
                <img src="https://s.alicdn.com/@img/imgextra/i3/O1CN01M9x0R41VzdeRW8FYF_!!6000000002724-0-tps-990-400.jpg"
                    class="block w-full" alt="..." />
            </div>
            <div class="carousel-item relative float-left w-full">
                <img src="https://s.alicdn.com/@img/imgextra/i2/O1CN01rYC4hI1lJzSxuJUm1_!!6000000004799-2-tps-990-400.png"
                    class="block w-full" alt="..." />
            </div>
            <div class="carousel-item relative float-left w-full">
                <img src="https://s.alicdn.com/@img/imgextra/i1/O1CN01AAmzwV1GWaIkhRPMg_!!6000000000630-2-tps-990-400.png"
                    class="block w-full" alt="..." />
            </div>
        </div>
        <button
            class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
            type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon inline-block bg-no-repeat" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button
            class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
            type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon inline-block bg-no-repeat" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- ////New Arrivals -->
    <div class="mx-auto container mt-12 bg-custome-100 p-2 rounded-t-lg">
        <h1
            class="font md:text-2xl text-md font-medium capitalize tracking-tight text hover:customeorange-600 transition-all-black">
            New Arrivals
        </h1>
    </div>
    <div class="shadow rounded-lg bg-white container mx-auto">
        <div class="swiper proSwiper">
            <div class="swiper-wrapper">
                @foreach ($products as $product)
                    <div class="swiper-slide flex justify-center items-center">
                        <div class="bg-white  shadow my-4 w-full mx-1 rounded-lg relative">
                            <div
                                class="h-7 on flex justify-center items-center w-7 absolute cursor-pointer top-1 right-1 bg-custome-100 rounded-full">
                                <div>
                                    <i
                                        class="red fa-regular fa-heart text-textColor-100 hover:text-red-500 focus:ring-2  active:text-red-600  focus:text-red-900"></i>
                                </div>
                            </div>
                            <a href="product.html">
                                <img src="{{ asset('storage') }}/{{ $product->image }}"
                                    class="rounded-r rounded-l w-full h-72 object-cover" alt="" />
                            </a>
                            <div class="p-2">
                                <div class="flex justify-between items-center">
                                    <h3 class="text-textColor-100 font-bold sm:text-lg text-md mt-1">
                                        ${{ $product->price }} <span class="text-red-500 text-xs">50%</span>
                                    </h3>
                                    <p class="text-black font-bold text-md">
                                        4.6 <i class="fa-solid fa-star text-yellow-300"></i>
                                    </p>
                                </div>
                                <h3 class="sm:text-xs text-xs text-gray-600 mb-1">
                                    {{ $product->product_title }}
                                </h3>
                                <h3 class="sm:text-xs text-xsm text-gray-600 mb-1">
                                    {{ $product->category->category_name }}</h3>
                                <div class="flex justify-between space-x-1">
                                    <button type="button"
                                        class="text-customeorange-500 transition bg-transparent hover:text-white hover:bg-textColor-100 border border-textColor-100 focus:ring-4 focus:ring-blue-300 font-semibold rounded-lg text-xsm px-3 py-2 w-full flex justify-center items-center dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                        <a href="payment-details.html"> Buy Now </a>
                                    </button>
                                    <button type="button" wire:click='addToCart({{$product->owner_id}},{{$product->id}})'
                                        class="text-white w-full pt-2.5  hover:border-textColor-100 border transition bg-textColor-100 hover:bg-transparent hover:text-customeorange-600 focus:ring-4 focus:ring-blue-300 font-semibold rounded-lg text-xsm px-2 py-2 flex justify-center items-center dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                        Add to card
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>

    </div>
    <!-- ///Gold Bag Mobile Caurosal -->
    <div id="carouselExampleControls" class="carousel slide relative md:hidden block" data-bs-ride="carousel">
        <div class="carousel-inner relative w-full overflow-hidden">
            <div class="carousel-item active relative float-left w-full">
                <div class="text-center p-105 bg-gradient-to-r from-gray-600 to-gray-600 relative top-0 left-0 my-3">
                    <img src="./images/menCollection.jpg"
                        class="w-full h-full top-0 left-0 absolute object-cover mix-blend-overlay" alt="" />
                    <h3 class="text-white md:text-4xl text-2xl md:mb-2 mb-1 font-light relative top-0">
                        Men Collection
                    </h3>

                    <h1 class="text-white mb-2 md:mb-3 md:text-4xl text-2xl leading-30 font-semibold">
                        Special Offer
                    </h1>
                    <p class="font-sm text-white">SAVE 20%</p>
                    <button></button>
                    <!-- <a href="" class="   bg-customeorange-500 text-white">Shop Now </a> -->

                    <button type="button"
                        class="text-white relative top-3 left-0 bg-customeorange-500 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg md:text-sm text-xs md:px-5 px-3 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-customeorange-500 focus:outline-none dark:focus:ring-blue-800">
                        Shop Now <i class="fa-solid fa-arrow-right"></i>
                    </button>
                </div>
            </div>
            <div class="carousel-item relative float-left w-full">
                <div class="text-center p-105 bg-gradient-to-r from-gray-600 to-gray-600 relative top-0 left-0 my-3">
                    <img src="./images/p9.jpg"
                        class="w-full h-full top-0 left-0 absolute object-cover mix-blend-overlay" alt="" />
                    <h3 class="text-white md:text-4xl text-2xl md:mb-2 mb-1 font-light relative top-0">
                        Gold Bag
                    </h3>

                    <h1 class="text-white mb-2 md:mb-3 md:text-4xl text-2xl md-leading-30 font-semibold">
                        Special Offer
                    </h1>
                    <p class="font-sm text-white font-light">SAVE 90%</p>

                    <button type="button"
                        class="text-white relative top-3 left-0 bg-customeorange-500 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg md:text-sm text-xs md:px-5 px-3 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-customeorange-500 focus:outline-none dark:focus:ring-blue-800">
                        Shop Now <i class="fa-solid fa-arrow-right"></i>
                    </button>
                </div>
            </div>
        </div>
        <button
            class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
            type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon inline-block bg-no-repeat" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button
            class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
            type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon inline-block bg-no-repeat" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- ///Gold Bag  two Boxes -->
    <div class="container mx-auto my-7 mt-12 md:block hidden rounded-lg">
        <div
            class="w-full h-full grid grid-cols-1 lg:grid-cols-2 lg:space-x-3 space-x-0 pb-3 my-5 md:border-b-0 border-b-2">
            <div class="text-center p-105 bg-gradient-to-r from-gray-600 to-gray-600 relative top-0 left-0 my-3">
                <img src="./images/p9.jpg" class="w-full h-full top-0 left-0 absolute object-cover mix-blend-overlay"
                    alt="" />
                <h3 class="text-white md:text-4xl text-2xl md:mb-2 mb-1 font-light relative top-0">
                    Gold Bag
                </h3>

                <h1 class="text-white mb-2 md:mb-3 md:text-4xl text-2xl md-leading-30 font-semibold">
                    Special Offer
                </h1>
                <p class="font-sm text-white font-light">SAVE 90%</p>

                <button type="button"
                    class="text-white relative top-3 left-0 bg-customeorange-500 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg md:text-sm text-xs md:px-5 px-3 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-customeorange-500 focus:outline-none dark:focus:ring-blue-800">
                    Shop Now <i class="fa-solid fa-arrow-right"></i>
                </button>
            </div>
            <div class="text-center p-105 bg-gradient-to-r from-gray-600 to-gray-600 relative top-0 left-0 my-3">
                <img src="./images/menCollection.jpg"
                    class="w-full h-full top-0 left-0 absolute object-cover mix-blend-overlay" alt="" />
                <h3 class="text-white md:text-4xl text-2xl md:mb-2 mb-1 font-light relative top-0">
                    Men Collection
                </h3>

                <h1 class="text-white mb-2 md:mb-3 md:text-4xl text-2xl leading-30 font-semibold">
                    Special Offer
                </h1>
                <p class="font-sm text-white">SAVE 20%</p>
                <button></button>
                <!-- <a href="" class="   bg-customeorange-500 text-white">Shop Now </a> -->

                <button type="button"
                    class="text-white relative top-3 left-0 bg-customeorange-500 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg md:text-sm text-xs md:px-5 px-3 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-customeorange-500 focus:outline-none dark:focus:ring-blue-800">
                    Shop Now <i class="fa-solid fa-arrow-right"></i>
                </button>
            </div>
        </div>
    </div>

    @foreach ($categories as $category)
        <!-- ///mobile menu -->
        @if ($category->id % 2)
            <!-- //second Mobile menu -->
            <div
                class="container mx-auto mt-12 bg-custome-100 p-2 rounded-t-lg lg:hidden flex space-x-12 justify-between pl-10 items-center">
                <h1
                    class="text-customeorange-500 md:text-3xl text-xl font-medium capitalize text-end tracking-tight text hover:customeorange-600 transition-all-black">
                    {{$category->category_name}}
                </h1>

                <button id="dropdownDefault" data-dropdown-toggle="dropdown"
                    class="text-black bg-gray-300 hover:bg-gray-300 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center"
                    type="button">
                    Priduct Fliter
                    <svg class="ml-2 w-4 h-4" aria-hidden="true" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                        </path>
                    </svg>
                </button>
                <!-- Dropdown menu -->
                <div id="dropdown"
                    class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700"
                    data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom"
                    style="  position: absolute;  inset: 0px auto auto 0px; margin: 0px; transform: translate(0px, 510px); ">
                    <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefault">
                        <li>
                            <a href="#"
                                class="block py-2 px-4 hover:bg-gray-100 cursor-pointer hover:text-customeorange-600 transition-all dark:hover:bg-gray-600 dark:hover:text-white">Latest
                                Product
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 px-4 hover:bg-gray-100 cursor-pointer hover:text-customeorange-600 transition-all dark:hover:bg-gray-600 dark:hover:text-white">Best
                                Selling Product</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 px-4 hover:bg-gray-100 cursor-pointer hover:text-customeorange-600 transition-all dark:hover:bg-gray-600 dark:hover:text-white">Top
                                Rating Product</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 px-4 hover:bg-gray-100 cursor-pointer hover:text-customeorange-600 transition-all dark:hover:bg-gray-600 dark:hover:text-white">Sign
                                out</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Second desktop menu -->
            <div
                class="container mx-auto mt-12 bg-custome-100 p-2 rounded-t-lg lg:flex hidden space-x-12 pl-10 items-center">
                <div class="flex justify-start">
                    <h1
                        class="font text-left pl-1 text-customeorange-500 text-3xl font-medium capitalize  tracking-tight">
                        {{$category->category_name}}
                    </h1>
                </div>
                <div class="flex justify-end space-x-12 pr-8">
                    <h1
                        class="font text-1xl cursor-pointer hover:text-customeorange-600 transition-all font-medium capitalize text-end tracking-tight text hover:customeorange-600 transition-all-black">
                        Latest Product
                    </h1>
                    <h1
                        class="font text-1xl font-medium cursor-pointer hover:text-customeorange-600 transition-all capitalize text-end tracking-tight text hover:customeorange-600 transition-all-black">
                        Best Selling Product
                    </h1>
                    <h1
                        class="font text-1xl cursor-pointer hover:text-customeorange-600 transition- font-medium capitalize text-end tracking-tight text hover:customeorange-600 transition-all-black">
                        Top Rating Product
                    </h1>
                </div>
            </div>
            <div class="container mx-auto flex h-full mb-12 ">
                <div class="swiper mySwiper w-full h-full">
                    <div class="swiper-wrapper">
                        @php
                            $products1=\App\Models\Product::where('cat_id',$category->id)->get();
                        @endphp
                        @foreach ($products1 as $product)
                            <div class="swiper-slide bg-white flex justify-center">
                                <div>
                                    <div class="bg-white shadow my-4 w-full rounded-lg relative">
                                        <div
                                            class="h-7 on flex justify-center items-center w-7 absolute cursor-pointer top-1 right-1 bg-custome-100 rounded-full">
                                            <div>
                                                <i wire:click='addToWishlist({{$product->id}})'
                                                    class="red fa-regular fa-heart text-textColor-100 hover:text-red-500 focus:ring-2  active:text-red-600  focus:text-red-900"></i>
                                            </div>
                                        </div>
                                        <a href="product.html">
                                            <img src="{{ asset('storage') }}/{{ $product->image }}"
                                                class="rounded-r rounded-l  w-[250px] h-[300px] object-cover"
                                                alt="" />
                                        </a>
                                        <div class="p-2">
                                            <div class="flex justify-between items-center">
                                                <h3 class="text-textColor-100 font-bold sm:text-lg text-md mt-1">
                                                    ${{ $product->price }} <span
                                                        class="text-red-500 text-xs">50%</span>
                                                </h3>
                                                <p class="text-black font-bold text-md">
                                                    4.6 <i class="fa-solid fa-star text-yellow-300"></i>
                                                </p>
                                            </div>
                                            <h3 class="sm:text-xs text-xs text-gray-600 mb-1">
                                                {{ $product->product_title }}
                                            </h3>
                                            <h3 class="sm:text-xs text-xsm text-gray-600 mb-1">
                                                {{ $product->category->category_name }}</h3>
                                            <div class="flex justify-between space-x-1">
                                                <button type="button"
                                                    class="text-customeorange-500 transition bg-transparent hover:text-white hover:bg-textColor-100 border border-textColor-100 focus:ring-4 focus:ring-blue-300 font-semibold rounded-lg text-xsm px-3 py-2 w-full flex justify-center items-center dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                                    <a href="payment-details.html"> Buy Now </a>
                                                </button>
                                                <button type="button"
                                                    class="text-white w-full pt-2.5  hover:border-textColor-100 border transition bg-textColor-100 hover:bg-transparent hover:text-customeorange-600 focus:ring-4 focus:ring-blue-300 font-semibold rounded-lg text-xsm px-2 py-2 flex justify-center items-center dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                                    Add to card
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class="card"></div> --}}
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>

                <div class="lg:block hidden">
                    <img class="h-full w-full object-cover"
                        src="https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/electrolict.jpg"
                        alt="" />
                </div>
            </div>
        @else
            <div
                class="container mx-auto mt-12 bg-custome-100 p-2 rounded-t-lg lg:hidden flex space-x-12 justify-between pl-10 items-center">
                <h1
                    class="text-customeorange-500 md:text-3xl text-xl font-medium capitalize text-end tracking-tight text hover:customeorange-600 transition-all-black">
                    {{$category->category_name}}
                </h1>

                <button id="dropdownDefault" data-dropdown-toggle="dropdown"
                    class="text-black bg-gray-300 hover:bg-gray-300 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center"
                    type="button">
                    Priduct Fliter
                    <svg class="ml-2 w-4 h-4" aria-hidden="true" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                        </path>
                    </svg>
                </button>
                <!-- Dropdown menu -->
                <div id="dropdown"
                    class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700"
                    data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom"
                    style=" position: absolute; inset: 0px auto auto 0px;  margin: 0px;  transform: translate(0px, 510px); ">
                    <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefault">
                        <li>
                            <a href="#"
                                class="block py-2 px-4 hover:bg-gray-100 cursor-pointer hover:text-customeorange-600 transition-all dark:hover:bg-gray-600 dark:hover:text-white">Latest
                                Product
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 px-4 hover:bg-gray-100 cursor-pointer hover:text-customeorange-600 transition-all dark:hover:bg-gray-600 dark:hover:text-white">Best
                                Selling Product</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 px-4 hover:bg-gray-100 cursor-pointer hover:text-customeorange-600 transition-all dark:hover:bg-gray-600 dark:hover:text-white">Top
                                Rating Product</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 px-4 hover:bg-gray-100 cursor-pointer hover:text-customeorange-600 transition-all dark:hover:bg-gray-600 dark:hover:text-white">Sign
                                out</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Desktop menu -->
            <div
                class="container mx-auto mt-12 bg-custome-100 p-2 rounded-t-lg lg:flex hidden space-x-12 pl-10 items-center">
                <h1
                    class="text-customeorange-500 md:text-3xl text-xl font-medium capitalize text-end tracking-tight text hover:customeorange-600 transition-all-black">
                    {{$category->category_name}}
                </h1>
                <div class="flex justify-center">
                    <div>
                        <div class="dropdown relative">
                            <ul class="dropdown-menu min-w-max absolute  bg-white text-base z-50 float-left py-2 list-none text-left rounded-lg shadow-lg mt-1 hidden m-0 bg-clip-padding border-none"
                                aria-labelledby="dropdownMenuButton1">
                                <li>
                                    <a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100"
                                        href="#">
                                        <h1
                                            class="font sm:text-1xl cursor-pointer hover:text-customeorange-600 transition-all text-xs font-medium capitalize text-end tracking-tight text hover:customeorange-600 transition-all-black">
                                            Best Selling Product
                                        </h1>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100"
                                        href="#">
                                        <h1
                                            class="font cursor-pointer hover:text-customeorange-600 transition-all text-1xl font-medium capitalize text-end tracking-tight text hover:customeorange-600 transition-all-black">
                                            Latest Product
                                        </h1>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100"
                                        href="#">
                                        <h1
                                            class="font text-1xl cursor-pointer hover:text-customeorange-600 transition-all font-medium capitalize text-end tracking-tight text hover:customeorange-600 transition-all-black">
                                            Top Rating Product
                                        </h1>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <h1
                    class="font text-1xl font-medium cursor-pointer hover:text-customeorange-600 transition-all capitalize text-end tracking-tight text hover:customeorange-600 transition-all-black">
                    Latest Product
                </h1>
                <h1
                    class="font text-1xl font-medium capitalize cursor-pointer hover:text-customeorange-600 transition-all text-end tracking-tight text hover:customeorange-600 transition-all-black">
                    Best Selling Product
                </h1>
                <h1
                    class="font text-1xl cursor-pointer hover:text-customeorange-600 transition-all font-medium capitalize text-end tracking-tight text hover:customeorange-600 transition-all-black">
                    Top Rating Product
                </h1>
            </div>
            <div class="container mx-auto flex h-full mb-12 ">
                <div class="lg:block hidden">
                    <img class="h-full w-full object-cover"
                        src="https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/fashion2.jpg"
                        alt="" />
                </div>
                <div class="swiper mySwiper w-full h-full">
                    <div class="swiper-wrapper">
                        @php
                        $products2=\App\Models\Product::where('cat_id',$category->id)->get();
                    @endphp
               
                        @foreach ($products2 as $product)
                            <div class="swiper-slide bg-white flex justify-center">
                                <div>
                                    <div class="bg-white  shadow my-4 w-full rounded-lg relative">
                                        <div
                                            class="h-7 on flex justify-center items-center w-7 absolute cursor-pointer top-1 right-1 bg-custome-100 rounded-full">
                                            <div>
                                                <i wire:click='addToWishlist({{$product->id}})'
                                                    class="red fa-regular fa-heart text-textColor-100 hover:text-red-500 focus:ring-2  active:text-red-600  focus:text-red-900"></i>
                                            </div>
                                        </div>
                                        <a href="product.html">
                                            <img src="{{ asset('storage') }}/{{ $product->image }}"
                                                class="rounded-r rounded-l w-[250px] h-[300px] object-cover"
                                                alt="" />
                                        </a>
                                        <div class="p-2">
                                            <div class="flex justify-between items-center">
                                                <h3 class="text-textColor-100 font-bold sm:text-lg text-md mt-1">
                                                    ${{ $product->price }} <span
                                                        class="text-red-500 text-xs">50%</span>
                                                </h3>
                                                <p class="text-black font-bold text-md">
                                                    4.6 <i class="fa-solid fa-star text-yellow-300"></i>
                                                </p>
                                            </div>
                                            <h3 class="sm:text-xs text-xs text-gray-600 mb-1">
                                                {{ $product->product_title }}
                                            </h3>
                                            <h3 class="sm:text-xs text-xsm text-gray-600 mb-1">
                                                {{ $product->category->category_name }}</h3>
                                            <div class="flex justify-between space-x-1">
                                                <button type="button"
                                                    class="text-customeorange-500 transition bg-transparent hover:text-white hover:bg-textColor-100 border border-textColor-100 focus:ring-4 focus:ring-blue-300 font-semibold rounded-lg text-xsm px-3 py-2 w-full flex justify-center items-center dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                                    <a href="payment-details.html"> Buy Now </a>
                                                </button>
                                                <button type="button"
                                                    class="text-white w-full pt-2.5  hover:border-textColor-100 border transition bg-textColor-100 hover:bg-transparent hover:text-customeorange-600 focus:ring-4 focus:ring-blue-300 font-semibold rounded-lg text-xsm px-2 py-2 flex justify-center items-center dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                                    Add to card
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class="card"></div> --}}
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        @endif
    @endforeach

    <!-- ///Sringp Box -->

    <div class="container my-9 mx-auto w-full custome-bg p-12 flex justify-start align-center flex-row">
        <div class="px-12 text-center w-full">
            <h3 class="text-white md:text-4xl text-2xl md:mb-2  mb-2 font-light">
                Spring
            </h3>

            <h1 class="text-white md:text-4xl text-2xl md:mb-2 mb-1 leading-30 font-semibold">
                2022 Ready
            </h1>
            <p class="font-sm md:text-sm text-xs mb-1 leading-5 text-white">
                It is a long established fact that a reader will be distracted <br />
                by the readable content of a page
            </p>
            <a href="" class="text-customeorange-400 md:text-sm text-xs">Explore Now <i
                    class="fa-solid fa-arrow-right"></i></a>
        </div>
    </div>

    <div class="mx-auto container mt-12 bg-custome-100 p-2 rounded-t-lg">
        <h1
            class="font text-2xl font-medium capitalize tracking-tight text hover:customeorange-600 transition-all-black">
            New Arrrivals
        </h1>
    </div>
    <div class="shadow rounded-lg bg-white container mx-auto">
        <div class="swiper proSwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide flex justify-center align-center">
                    <div class="card2"></div>
                </div>
                <div class="swiper-slide flex justify-center align-center">
                    <div class="card2"></div>
                </div>
                <div class="swiper-slide flex justify-center align-center">
                    <div class="card2"></div>
                </div>
                <div class="swiper-slide flex justify-center align-center">
                    <div class="card2"></div>
                </div>
                <div class="swiper-slide flex justify-center align-center">
                    <div class="card2"></div>
                </div>
                <div class="swiper-slide flex justify-center align-center">
                    <div class="card2"></div>
                </div>
                <div class="swiper-slide flex justify-center align-center">
                    <div class="card2"></div>
                </div>
                <div class="swiper-slide flex justify-center align-center">
                    <div class="card2"></div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
    </div>

    <!-- //Kids Fashion Mobile caurrosal Container -->

    <div id="carouselExampleIndicators" class="carousel slide relative md:hidden block" data-bs-ride="carousel">
        <div class="carousel-indicators absolute right-0 bottom-0 left-0 flex justify-center p-0 mb-4">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                class="active hidden" aria-current="true" aria-label="Slide 1"></button>
            <button class="hidden" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button class="hidden" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner relative w-full overflow-hidden">
            <div class="carousel-item active float-left w-full">
                <div
                    class="text-center max-w-3xl p-105 bg-gradient-to-r from-gray-600 to-gray-600 relative top-0 left-0">
                    <img src="./images/kids-fashion.jpg"
                        class="w-full h-full top-0 left-0 absolute object-cover mix-blend-overlay" alt="" />
                    <h3 class="text-white md:text-4xl text-2xl md:mb-2 mb-1 font-light relative top-0">
                        Kids Fashion
                    </h3>

                    <h1 class="text-white mb-2 md:mb-3 md:text-4xl text-2xl md-leading-30 font-semibold">
                        Special Offer
                    </h1>
                    <p class="font-sm text-white font-light">SAVE 20%</p>
                    <button></button>
                    <!-- <a href="" class="   bg-customeorange-500 text-white">Shop Now </a> -->

                    <button type="button"
                        class="text-white relative top-3 left-0 bg-customeorange-500 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg md:text-sm text-xs md:px-5 px-3 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-customeorange-500 focus:outline-none dark:focus:ring-blue-800">
                        Shop Now <i class="fa-solid fa-arrow-right"></i>
                    </button>
                </div>
            </div>
            <div class="carousel-item float-left w-full">
                <div
                    class="text-center max-w-3xl p-105 bg-gradient-to-r from-gray-600 to-gray-600 relative top-0 left-0">
                    <img src="./images/watch1.jpg"
                        class="w-full h-full top-0 left-0 absolute object-cover mix-blend-overlay" alt="" />
                    <h3 class="text-white md:text-4xl text-2xl md:mb-2 mb-1 font-light relative top-0">
                        IWATCH
                    </h3>

                    <h1 class="text-white mb-2 md:mb-3 md:text-4xl text-2xl md-leading-30 font-semibold">
                        Special Offer
                    </h1>
                    <p class="font-sm text-white">SAVE 20%</p>
                    <button></button>
                    <!-- <a href="" class="   bg-customeorange-500 text-white">Shop Now </a> -->

                    <button type="button"
                        class="text-white relative top-3 left-0 bg-customeorange-500 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg md:text-sm text-xs md:px-5 px-3 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-customeorange-500 focus:outline-none dark:focus:ring-blue-800">
                        Shop Now <i class="fa-solid fa-arrow-right"></i>
                    </button>
                </div>
            </div>
        </div>
        <button
            class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
            type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon inline-block bg-no-repeat" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button
            class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
            type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon inline-block bg-no-repeat" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- //Kids Fashion Desktop Container -->

    <div class="container mx-auto my-7 mt-12 rounded-lg hidden md:block">
        <div class="w-full h-full grid grid-cols-1 lg:grid-cols-2 lg:space-x-3 space-x-0 lg:space-y-0 space-y-3">
            <div class="text-center max-w-3xl p-105 bg-gradient-to-r from-gray-600 to-gray-600 relative top-0 left-0">
                <img src="./images/kids-fashion.jpg"
                    class="w-full h-full top-0 left-0 absolute object-cover mix-blend-overlay" alt="" />
                <h3 class="text-white md:text-4xl text-2xl md:mb-2 mb-1 font-light relative top-0">
                    Kids Fashion
                </h3>

                <h1 class="text-white mb-2 md:mb-3 md:text-4xl text-2xl md-leading-30 font-semibold">
                    Special Offer
                </h1>
                <p class="font-sm text-white font-light">SAVE 20%</p>
                <button></button>
                <!-- <a href="" class="   bg-customeorange-500 text-white">Shop Now </a> -->

                <button type="button"
                    class="text-white relative top-3 left-0 bg-customeorange-500 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg md:text-sm text-xs md:px-5 px-3 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-customeorange-500 focus:outline-none dark:focus:ring-blue-800">
                    Shop Now <i class="fa-solid fa-arrow-right"></i>
                </button>
            </div>
            <div class="text-center max-w-3xl p-105 bg-gradient-to-r from-gray-600 to-gray-600 relative top-0 left-0">
                <img src="./images/watch1.jpg"
                    class="w-full h-full top-0 left-0 absolute object-cover mix-blend-overlay" alt="" />
                <h3 class="text-white md:text-4xl text-2xl md:mb-2 mb-1 font-light relative top-0">
                    IWATCH
                </h3>

                <h1 class="text-white mb-2 md:mb-3 md:text-4xl text-2xl md-leading-30 font-semibold">
                    Special Offer
                </h1>
                <p class="font-sm text-white">SAVE 20%</p>
                <button></button>
                <!-- <a href="" class="   bg-customeorange-500 text-white">Shop Now </a> -->

                <button type="button"
                    class="text-white relative top-3 left-0 bg-customeorange-500 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg md:text-sm text-xs md:px-5 px-3 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-customeorange-500 focus:outline-none dark:focus:ring-blue-800">
                    Shop Now <i class="fa-solid fa-arrow-right"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Best of Electronics -->

    <div class="mx-auto container mt-12 bg-custome-100 p-2 rounded-t-lg">
        <h1
            class="font text-2xl font-medium capitalize tracking-tight text hover:customeorange-600 transition-all-black">
            Best of Electronics
        </h1>
    </div>
    <div class="shadow rounded-lg bg-white container mx-auto">
        <div class="swiper proSwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide flex justify-center align-center">
                    <div class="card2"></div>
                </div>
                <div class="swiper-slide flex justify-center align-center">
                    <div class="card2"></div>
                </div>
                <div class="swiper-slide flex justify-center align-center">
                    <div class="card2"></div>
                </div>
                <div class="swiper-slide flex justify-center align-center">
                    <div class="card2"></div>
                </div>
                <div class="swiper-slide flex justify-center align-center">
                    <div class="card2"></div>
                </div>
                <div class="swiper-slide flex justify-center align-center">
                    <div class="card2"></div>
                </div>
                <div class="swiper-slide flex justify-center align-center">
                    <div class="card2"></div>
                </div>
                <div class="swiper-slide flex justify-center align-center">
                    <div class="card2"></div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
    </div>

    <!-- ///Brand logo Caurosal -->
    <div class="container mx-auto my-12 border-2 border-gray-200 rounded-lg p-3">
        <div class="swiper BrandSwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide flex justify-center align-center">
                    <img src="https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2017/02/brand-3.jpg"
                        class="w-96" alt="" />
                </div>
                <div class="swiper-slide flex justify-center align-center">
                    <img src="https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/09/brand-5.png"
                        class="w-96" alt="" />
                </div>
                <div class="swiper-slide flex justify-center align-center">
                    <img src="https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/09/brand-5.png"
                        class="w-96" alt="" />
                </div>
                <div class="swiper-slide flex justify-center align-center">
                    <img src="https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/09/brand-3.png"
                        class="w-96" alt="" />
                </div>
                <div class="swiper-slide flex justify-center align-center">
                    <img src="https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/09/brand-2.png"
                        class="w-96" alt="" />
                </div>
                <div class="swiper-slide flex justify-center align-center">
                    <img src="https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/09/brand-1.png"
                        class="w-96" alt="" />
                </div>
                <div class="swiper-slide flex justify-center align-center">
                    <img src="https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/09/brand-6.png"
                        class="w-96" alt="" />
                </div>
                <div class="swiper-slide flex justify-center align-center">
                    <img src="https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2017/02/brand-3.jpg"
                        class="w-96" alt="" />
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
    

</div>
