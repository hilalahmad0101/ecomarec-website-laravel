<div>
    <x-slot name="title">Thank you</x-slot>
    <div class="container mx-auto flex justify-center lg:flex-nowrap flex-wrap lg:space-x-4 space-x-0 md:p-3 p-0 pt-6">
        <div class="bg-white md:p-6 p-2 shadow lg:w-11/12 w-full">
            <div class="flex justify-center flex-col items-center">
                <h5 class="text-black sm:text-4xl text-2xl text-center font-bold my-2">
                    Thank you  <span class="text-customeorange-500"> Order Place Successfully </span>
                </h5>
                <h5 class="text-2xl">Approve Order Will you Recive Message in email or mobile number </h5>
                <img src="https://png.pngtree.com/png-vector/20190228/ourmid/pngtree-check-mark-icon-design-template-vector-isolated-png-image_711429.jpg"
                    class="w-96" alt="" />
                <a href="{{ route('home') }}">
                    <button type="button"
                        class="w-full mt-5 text-white bg-customeorange-500 font-medium rounded text-sm px-6 py-2.5 text-center mr-2 mb-2">
                        Return to Shop
                    </button>
                </a>
            </div>
        </div>
    </div>
</div>
