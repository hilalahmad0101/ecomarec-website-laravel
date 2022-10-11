<div>
    <x-slot name='title'>{{$category_name}}</x-slot>
    @if (session()->has('success'))
    <div class="fixed bg-green-400 z-[999] top-4 rounded-md right-4 py-2 px-3">
        {{ session('success') }}
    </div>
@endif

@if (session()->has('error'))
    <div class="fixed bg-red-400 z-[999] top-4 rounded-md right-4 py-2 px-3">
        {{ session('error') }}
    </div>
@endif
    <div class="mx-auto container mt-12 bg-custome-100 p-2 rounded-t-lg">
        <h1
            class="font md:text-2xl text-md font-medium capitalize tracking-tight text hover:customeorange-600 transition-all-black">
            Home / {{$category_name}}
        </h1>
    </div>
    <div class="shadow rounded-lg bg-white container mx-auto">
        <div class="swiper proSwiper swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
            <div class="swiper-wrapper" id="swiper-wrapper-25e748cb851d86fc" aria-live="polite"
                style="transform: translate3d(0px, 0px, 0px);">
                <div class="swiper-slide flex justify-center items-center swiper-slide-active" role="group"
                    aria-label="1 / 1" style="width: 220px;">
                    <div class="bg-white  shadow my-4 w-full mx-1 rounded-lg relative">
                        <div
                            class="h-7 on flex justify-center items-center w-7 absolute cursor-pointer top-1 right-1 bg-custome-100 rounded-full">
                            <div>
                                <i
                                    class="red fa-regular fa-heart text-textColor-100 hover:text-red-500 focus:ring-2  active:text-red-600  focus:text-red-900"></i>
                            </div>
                        </div>
                        <a href="product.html">
                            <img src="http://127.0.0.1:8000/storage/products/lmc7zPZETbeuzgTHAy5TJph4sgoIro2eQDriFO3x.jpg"
                                class="rounded-r rounded-l w-full h-72 object-cover" alt="">
                        </a>
                        <div class="p-2">
                            <div class="flex justify-between items-center">
                                <h3 class="text-textColor-100 font-bold sm:text-lg text-md mt-1">
                                    $223 <span class="text-red-500 text-xs">50%</span>
                                </h3>
                                <p class="text-black font-bold text-md">
                                    4.6 <i class="fa-solid fa-star text-yellow-300"></i>
                                </p>
                            </div>
                            <h3 class="sm:text-xs text-xs text-gray-600 mb-1">
                                xuhyx@mailinator.com
                            </h3>
                            <h3 class="sm:text-xs text-xsm text-gray-600 mb-1">
                                hilal123</h3>
                            <div class="flex justify-between space-x-1">
                                <button type="button"
                                    class="text-customeorange-500 transition bg-transparent hover:text-white hover:bg-textColor-100 border border-textColor-100 focus:ring-4 focus:ring-blue-300 font-semibold rounded-lg text-xsm px-3 py-2 w-full flex justify-center items-center dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                    <a href="payment-details.html"> Buy Now </a>
                                </button>
                                <button type="button" wire:click="addToCart(1,2)"
                                    class="text-white w-full pt-2.5  hover:border-textColor-100 border transition bg-textColor-100 hover:bg-transparent hover:text-customeorange-600 focus:ring-4 focus:ring-blue-300 font-semibold rounded-lg text-xsm px-2 py-2 flex justify-center items-center dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                    Add to card
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next swiper-button-disabled swiper-button-lock" tabindex="-1" role="button"
                aria-label="Next slide" aria-controls="swiper-wrapper-25e748cb851d86fc" aria-disabled="true"></div>
            <div class="swiper-button-prev swiper-button-disabled swiper-button-lock" tabindex="-1" role="button"
                aria-label="Previous slide" aria-controls="swiper-wrapper-25e748cb851d86fc" aria-disabled="true"></div>
            <div class="swiper-pagination"></div>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
        </div>

    </div>
</div>
