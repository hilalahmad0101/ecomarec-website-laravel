<div>
    <x-slot name='title'>Dashboard</x-slot>
    <div class="flex flex-col">
        <!-- Stats Row Starts Here -->
        <div class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2">
            <div class="shadow-lg bg-red-vibrant border-l-8 hover:bg-red-vibrant-dark border-red-vibrant-dark mb-2 p-2 md:w-1/4 mx-2">
                <div class="p-4 flex flex-col">
                    <a href="#" class="no-underline text-white text-2xl">
                        $244
                    </a>
                    <a href="#" class="no-underline text-white text-lg">
                        Total Sales
                    </a>
                </div>
            </div>

            <div class="shadow bg-info border-l-8 hover:bg-info-dark border-info-dark mb-2 p-2 md:w-1/4 mx-2">
                <div class="p-4 flex flex-col">
                    <a href="#" class="no-underline text-white text-2xl">
                        $199.4
                    </a>
                    <a href="#" class="no-underline text-white text-lg">
                        Total Cost
                    </a>
                </div>
            </div>

            <div class="shadow bg-warning border-l-8 hover:bg-warning-dark border-warning-dark mb-2 p-2 md:w-1/4 mx-2">
                <div class="p-4 flex flex-col">
                    <a href="#" class="no-underline text-white text-2xl">
                        900
                    </a>
                    <a href="#" class="no-underline text-white text-lg">
                        Total Users
                    </a>
                </div>
            </div>

            <div class="shadow bg-success border-l-8 hover:bg-success-dark border-success-dark mb-2 p-2 md:w-1/4 mx-2">
                <div class="p-4 flex flex-col">
                    <a href="#" class="no-underline text-white text-2xl">
                        500
                    </a>
                    <a href="#" class="no-underline text-white text-lg">
                        Total Products
                    </a>
                </div>
            </div>
        </div>

        <!-- /Stats Row Ends Here -->

        <!-- Card Sextion Starts Here -->
        {{-- <div class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2">

            <!-- card -->

            <div class="rounded overflow-hidden shadow bg-white mx-2 w-full">
                <div class="px-6 py-2 border-b border-light-grey">
                    <div class="font-bold text-xl">Trending Categories</div>
                </div>
                <div class="table-responsive">
                    <table class="table text-grey-darkest">
                        <thead class="bg-grey-dark text-white text-normal">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Item</th>
                            <th scope="col">Last</th>
                            <th scope="col">Current</th>
                            <th scope="col">Change</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>
                                <button class="bg-blue-500 hover:bg-blue-800 text-white font-light py-1 px-2 rounded-full">
                                    Twitter
                                </button>
                            </td>
                            <td>4500</td>
                            <td>4600</td>
                            <td>
                                <span class="text-green-500"><i class="fas fa-arrow-up"></i>5%</span>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>
                                <button class="bg-primary hover:bg-primary-dark text-white font-light py-1 px-2 rounded-full">
                                    Facebook
                                </button>
                            </td>
                            <td>10000</td>
                            <td>3000</td>
                            <td>
                                <span class="text-red-500"><i class="fas fa-arrow-down"></i>65%</span>
                            </td>
                        </tr>

                        <tr>
                            <th scope="row">3</th>
                            <td>
                                <button class="bg-success hover:bg-success-dark text-white font-light py-1 px-2 rounded-full">
                                    Amazon
                                </button>
                            </td>
                            <td>10000</td>
                            <td>3000</td>
                            <td>
                                <span class="text-red-500"><i class="fas fa-arrow-down"></i>65%</span>
                            </td>
                        </tr>

                        <tr>
                            <th scope="row">4</th>
                            <td>
                                <button class="bg-blue-500 hover:bg-blue-800 text-white font-light py-1 px-2 rounded-full">
                                    Microsoft
                                </button>
                            </td>
                            <td>10000</td>
                            <td>3000</td>
                            <td>
                                <span class="text-green-500"><i class="fas fa-arrow-up"></i>65%</span>
                            </td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /card -->

        </div> --}}
        <!-- /Cards Section Ends Here -->

        {{-- <!-- Progress Bar -->
        <div class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2 mt-2">
            <div class="rounded overflow-hidden shadow bg-white mx-2 w-full pt-2">
                <div class="px-6 py-2 border-b border-light-grey">
                    <div class="font-bold text-xl">Progress Among Projects</div>
                </div>
                <div class="">
                    <div class="w-full">

                        <div class="shadow w-full bg-grey-light">
                            <div class="bg-blue-500 text-xs leading-none py-1 text-center text-white"
                                 style="width: 45%">45%
                            </div>
                        </div>


                        <div class="shadow w-full bg-grey-light mt-2">
                            <div class="bg-teal-500 text-xs leading-none py-1 text-center text-white"
                                 style="width: 55%">55%
                            </div>
                        </div>


                        <div class="shadow w-full bg-grey-light mt-2">
                            <div class="bg-orange-500 text-xs leading-none py-1 text-center text-white"
                                 style="width: 65%">65%
                            </div>
                        </div>


                        <div class="shadow w-full bg-grey-300 mt-2">
                            <div class="bg-red-800 text-xs leading-none py-1 text-center text-white"
                                 style="width: 75%">75%
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
</div>
