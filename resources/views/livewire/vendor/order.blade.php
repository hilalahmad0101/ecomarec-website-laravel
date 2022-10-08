<div>
    <x-slot name='title'>Order</x-slot>
    {{-- <div class="ec-content-wrapper">
        <div class="content">
            @if (session()->has('success'))
                <span>{{ session('success') }}</span>
            @endif
            <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
                <div>
                    <h1>Order</h1>
                    <p class="breadcrumbs"><span><a href="index.html">Home</a></span>
                        <span><i class="mdi mdi-chevron-right"></i></span>Order
                    </p>
                </div>

            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card card-default">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="responsive-data-table" class="table" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Product title</th=>
                                            <th>Product Price</th>
                                            <th>Product image</th>
                                            <th>Status</th>
                                            <th>Genrate Invoice</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($orders  as $order)
                                            <tr>
                                                <td>
                                                    <?php
                                                foreach (json_decode($order->pro_id) as $pro_id) {
                                                    $products  = \App\Models\Product::where('id', $pro_id)
                                                        ->get();
                                                ?>
                                                    @foreach ($products as $product)
                                                        <p>{{ $product->product_title }} -> {{ $product->price }}</p>
                                                    @endforeach
                                                    <?php
                                                    }
                                                  ?>
                                                </td>
                                                <td>
                                                    {{ $order->sub_total }}
                                                </td>
                                                <td>
                                                    @foreach ($products as $product)
                                                        <img src="{{ asset('storage') }}/{{ $product->image }}"
                                                            alt="" width="48" height="48">
                                                    @endforeach
                                                </td>
                                                <td>
                                                    @if ($order->status == 0)
                                                        onhold
                                                    @else
                                                        shiped
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href='{{ route('vendor.index', ['id' => $order->id]) }}'
                                                        type="submit">Invoice</a>
                                                </td>
                                            </tr>

                                        @empty
                                            <h3>Record not found</h3>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End Content -->
    </div> <!-- End Content Wrapper --> --}}

    <div id="movilng" class="bg-gray-50">
        <div class="px-12 py-4 flex justify-between">
            <h2 class="sm:text-2xl text-xl font-bold">Order</h2>
            <div>

            </div>
        </div>

        <div class="sm:px-12 px-3">

            <div class=" py-3 bg-white px-3 rounded-lg">
              

                <div class="flex justify-between items-center mt-2">
                    <div class="flex space-x-3 items-center">
                        <h4 class="text-sm text-gray-600">Show</h4>
                        <button id="dropdownRadioButton" data-dropdown-toggle="dropdownRadio"
                            class="inline-flex items-center text-gray-500 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-2 py-1 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700"
                            type="button">
                            30
                            <svg class="ml-2 w-3 h-3" aria-hidden="true" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="dropdownRadio"
                            class="hidden z-10 w-48 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600"
                            data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom"
                            style="  position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(0px, 510px);  ">
                            {{-- <ul class="p-3 space-y-1 text-sm text-gray-700 dark:text-gray-200"
                                aria-labelledby="dropdownRadioButton">
                                <li>
                                    <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                        <input id="filter-radio-example-1" type="radio" value=""
                                            name="filter-radio"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" />
                                        <label for="filter-radio-example-1"
                                            class="ml-2 w-full text-sm font-medium text-gray-900 rounded dark:text-gray-300">Last
                                            day</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                        <input checked="" id="filter-radio-example-2" type="radio" value=""
                                            name="filter-radio"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" />
                                        <label for="filter-radio-example-2"
                                            class="ml-2 w-full text-sm font-medium text-gray-900 rounded dark:text-gray-300">Last
                                            7 days</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                        <input id="filter-radio-example-3" type="radio" value=""
                                            name="filter-radio"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" />
                                        <label for="filter-radio-example-3"
                                            class="ml-2 w-full text-sm font-medium text-gray-900 rounded dark:text-gray-300">Last
                                            30 days</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                        <input id="filter-radio-example-4" type="radio" value=""
                                            name="filter-radio"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" />
                                        <label for="filter-radio-example-4"
                                            class="ml-2 w-full text-sm font-medium text-gray-900 rounded dark:text-gray-300">Last
                                            month</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                        <input id="filter-radio-example-5" type="radio" value=""
                                            name="filter-radio"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" />
                                        <label for="filter-radio-example-5"
                                            class="ml-2 w-full text-sm font-medium text-gray-900 rounded dark:text-gray-300">Last
                                            year</label>
                                    </div>
                                </li>
                            </ul> --}}
                        </div>
                        <h4 class="text-sm text-gray-600">Enteries</h4>
                    </div>
                    <label for="table-search" class="sr-only">Search</label>
                    <div class="relative sm:ml-0 ml-4">
                        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                            <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <input type="text" id="table-search"
                            class="block p-2 pl-10  sm:w-80 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Search for items" />
                    </div>
                </div>

            </div>
            <div class="overflow-x-scroll relative shadow-lg bg-white rounded-2xl">
                <table class="w-full text-sm text-left text-gray-500 rounded-2xl dark:text-gray-400">
                    <thead
                        class="text-xs text-gray-700 uppercase rounded-l-2xl rounded-r-2xl bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="py-3 px-6 sm:text-base text-xs  ">Product name</th>
                            <th scope="col" class="py-3 px-6 sm:text-base text-xs  ">Color</th>
                            <th scope="col" class="py-3 px-6 sm:text-base text-xs  ">Category</th>
                            <th scope="col" class="py-3 px-6 sm:text-base text-xs  ">Price</th>
                            <th scope="col" class="py-3 px-6 sm:text-base text-xs  ">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($orders  as $order)
                            <tr  class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td   class="py-4 px-6 sm:text-base text-xs   font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <?php
                                foreach (json_decode($order->pro_id) as $pro_id) {
                                    $products  = \App\Models\Product::where('id', $pro_id)
                                        ->get();
                                ?>
                                    @foreach ($products as $product)
                                        <p>{{ $product->product_title }} -> {{ $product->price }}</p>
                                    @endforeach
                                    <?php
                                    }
                                  ?>
                                </td>
                                <td class="py-4 px-6 sm:text-base text-xs  ">
                                    {{ $order->sub_total }}
                                </td>
                                <td class="py-4 px-6 sm:text-base text-xs  ">
                                    @foreach ($products as $product)
                                        <img src="{{ asset('storage') }}/{{ $product->image }}"
                                            alt="" width="48" height="48">
                                    @endforeach
                                </td>
                                <td class="py-4 px-6 sm:text-base text-xs  ">
                                    @if ($order->status == 0)
                                        onhold
                                    @else
                                        shiped
                                    @endif
                                </td>
                                <td class="py-4 px-6 sm:text-base text-xs  ">
                                    <a href='{{ route('vendor.index', ['id' => $order->id]) }}'
                                        type="submit">Invoice</a>
                                </td>
                            </tr>

                        @empty
                        <h2 class="text-black sm:text-2xl text-xl font-medium my-2">
                            Record Not Found
                        </h2>
                        <hr>
                        @endforelse
                    </tbody>
                   
                </table>
                {{-- <nav class="flex justify-between items-center py-4 sm:px-4 px-2" aria-label="Table navigation">
                    <span class="sm:text-sm text-xs font-normal text-gray-500 dark:text-gray-400">Showing
                        <span class="font-semibold text-gray-900 dark:text-white">1-10</span>
                        of
                        <span class="font-semibold text-gray-900 dark:text-white">1000</span></span>
                    <ul class="inline-flex items-center -space-x-px">
                        <li>
                            <a href="#"
                                class="block py-2 px-3 ml-0 leading-tight text-gray-500 bg-white rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                <span class="sr-only">Previous</span>
                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                        </li>
                        <li>
                            <a href="#"
                                class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                        </li>
                        <li>
                            <a href="#" aria-current="page"
                                class="z-10 py-2 px-3 leading-tight text-blue-600 bg-blue-50 border border-blue-300 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
                        </li>
                        <li>
                            <a href="#"
                                class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">...</a>
                        </li>
                        <li>
                            <a href="#"
                                class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">100</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 px-3 leading-tight text-gray-500 bg-white rounded-r-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                <span class="sr-only">Next</span>
                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </nav> --}}
            </div>
        </div>
    </div>
</div>
