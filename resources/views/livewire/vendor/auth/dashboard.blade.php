<div>
    <x-slot name='title'>Dashboard</x-slot>
    {{-- <div class="flex flex-col">
        <!-- Stats Row Starts Here -->
        <div class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2">
            <div class="shadow-lg bg-red-vibrant border-l-8 hover:bg-red-vibrant-dark border-red-vibrant-dark mb-2 p-2 md:w-1/4 mx-2">
                <div class="p-4 flex flex-col">
                    <a href="#" class="no-underline text-white text-2xl">
                        ${{$total_sales}}
                    </a>
                    <a href="#" class="no-underline text-white text-lg">
                        Total Sales
                    </a>
                </div>
            </div>
            <div class="shadow bg-success border-l-8 hover:bg-success-dark border-success-dark mb-2 p-2 md:w-1/4 mx-2">
                <div class="p-4 flex flex-col">
                    <a href="#" class="no-underline text-white text-2xl">
                        {{$total_products}}
                    </a>
                    <a href="#" class="no-underline text-white text-lg">
                        Total Products
                    </a>
                </div>
            </div>
        </div>

    </div> --}}

    <div id="movilng2" class="transition duration-500 linear bg-gray-50 pt-28">
        <!-- ///Card -->
  
        <div class="flex items-center lg:flex-nowrap flex-wrap px-6">
          <div
            class="md:w-96 w-full m-2 shadow-lg sm:p-6 p-4 sm:py-7 py-3 bg-white rounded-2xl flex items-center justify-between"
          >
            <div>
              <h4 class="text-customeorange-500 sm:text-xl text-sm font-bold">1223</h4>
  
              <p class="sm:text-base text-xs py-2">Daily Sign up</p>
            </div>
            <div
              class="sm:w-12 w-10 sm:h-12 h-10 sm:rounded-2xl rounded-lg bg-customeorange-500 flex justify-center items-center"
            >
              <i class="fa-solid fa-user text-white sm:text-lg text-sm"></i>
            </div>
          </div>
          <div
            class="md:w-96 w-full m-2 shadow-lg sm:p-6 p-4 sm:py-7 py-3 bg-white rounded-2xl flex items-center justify-between"
          >
            <div>
              <h4 class="text-customeorange-500 sm:text-xl text-sm font-bold">1223</h4>
  
              <p class="sm:text-base text-xs py-2">Daily Sign up</p>
            </div>
            <div
              class="sm:w-12 w-10 sm:h-12 h-10 sm:rounded-2xl rounded-lg bg-customeorange-500 flex justify-center items-center"
            >
              <i class="fa-solid fa-user text-white sm:text-lg text-sm"></i>
            </div>
          </div>
          <div
            class="md:w-96 w-full m-2 shadow-lg sm:p-6 p-4 sm:py-7 py-3 bg-white rounded-2xl flex items-center justify-between"
          >
            <div>
              <h4 class="text-customeorange-500 sm:text-xl text-sm font-bold">1223</h4>
  
              <p class="sm:text-base text-xs py-2">Daily Sign up</p>
            </div>
            <div
              class="sm:w-12 w-10 sm:h-12 h-10 sm:rounded-2xl rounded-lg bg-customeorange-500 flex justify-center items-center"
            >
              <i class="fa-solid fa-user text-white sm:text-lg text-sm"></i>
            </div>
          </div>
          <div
            class="md:w-96 w-full m-2 shadow-lg sm:p-6 p-4 sm:py-7 py-3 bg-white rounded-2xl flex items-center justify-between"
          >
            <div>
              <h4 class="text-customeorange-500 sm:text-xl text-sm font-bold">1223</h4>
  
              <p class="sm:text-base text-xs py-2">Daily Sign up</p>
            </div>
            <div
              class="sm:w-12 w-10 sm:h-12 h-10 sm:rounded-2xl rounded-lg bg-customeorange-500 flex justify-center items-center"
            >
              <i class="fa-solid fa-user text-white sm:text-lg text-sm"></i>
            </div>
          </div>
        </div>
  
        <!-- Chart -->
        <div
          class="flex space-x-3 sm:space-x-3 items-center lg:flex-nowrap flex-wrap sm:px-12 px-4"
        >
          <div
            class="shadow bg-white sm:p-6 p-4 w-full w-3/5 border-red-900 rounded-2xl"
          >
            <div id="user-acquisition" class="card card-default">
              <div class="card-header">
                <h2 class="text-2xl font-bold mb-3 text-black">Sales Report</h2>
              </div>
              <hr />
              <div class="card-body mt-6">
                <ul
                  class="nav nav-tabs flex space-x-12 pl-10 nav-style-border justify-content-between justify-content-lg-start border-bottom"
                  role="tablist"
                >
                  <li class="nav-item">
                    <a
                      class="nav-link active"
                      data-bs-toggle="tab"
                      href="#todays"
                      role="tab"
                      aria-selected="true"
                      >Today's</a
                    >
                  </li>
                  <li class="nav-item">
                    <a
                      class="nav-link"
                      data-bs-toggle="tab"
                      href="#monthly"
                      role="tab"
                      aria-selected="false"
                      >Monthly
                    </a>
                  </li>
                  <li class="nav-item">
                    <a
                      class="nav-link"
                      data-bs-toggle="tab"
                      href="#yearly"
                      role="tab"
                      aria-selected="false"
                      >Yearly</a
                    >
                  </li>
                </ul>
                <div class="tab-content pt-4" id="salesReport">
                  <div
                    class="tab-pane fade show active"
                    id="source-medium"
                    role="tabpanel"
                  >
                    <div class="mb-6">
                      <canvas id="acquisition" class="chartjs2"></canvas>
                      <div id="acqLegend" class="customLegend flex mb-2"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
  
          <div class="shadow-lg bg-white sm:p-5 p-0 py-5 rounded-2xl my-12">
            <div class="card card-default">
              <div>
                <h2 class="text-2xl font-bold mb-3 text-center text-black">
                  Order Review
                </h2>
              </div>
              <hr />
              <div class="card-body my-3">
                <canvas id="doChart"></canvas>
              </div>
              <div class="pb-3 flex justify-center">
                <a href="" class="text-gray-500"
                  ><i class="mr-2 fa-solid fa-download"></i> Download Oversell
                  report</a
                >
              </div>
              <hr />
              <div class="flex justify-between px-2 py-5">
                <div>
                  <div class="flex space-x-2 items-center">
                    <div
                      class="w-3 h-3 rounded-full border border-customeorange-500"
                    ></div>
                    <p class="text-sm text-gray-500">order Completed</p>
                  </div>
                  <div class="flex space-x-2 items-center m-2">
                    <div
                      class="w-3 h-3 rounded-full border border-blue-500"
                    ></div>
                    <p class="text-sm text-gray-500">order Returned</p>
                  </div>
                  <div class="flex space-x-2 items-center">
                    <div
                      class="w-3 h-3 rounded-full border border-customeorange-500"
                    ></div>
                    <p class="text-sm text-gray-500">order Unpaid</p>
                  </div>
                </div>
                <div>
                  <div class="flex space-x-2 items-center">
                    <div
                      class="w-3 h-3 rounded-full border border-customeorange-500"
                    ></div>
                    <p class="text-sm text-gray-500">order Completed</p>
                  </div>
                  <div class="flex space-x-2 items-center my-2">
                    <div
                      class="w-3 h-3 rounded-full border border-blue-500"
                    ></div>
                    <p class="text-sm text-gray-500">order Returned</p>
                  </div>
                  <div class="flex space-x-2 items-center">
                    <div
                      class="w-3 h-3 rounded-full border border-customeorange-500"
                    ></div>
                    <p class="text-sm text-gray-500">order Unpaid</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
  
        <!-- ///Table -->
        <div>
          <div
            class="overflow-x-auto relative shadow-lg my-5 mx-5 sm:rounded-2xl mx-6"
          >
            <div
              class="flex justify-between items-center py-3 bg-white px-3 rounded-lg"
            >
              <h2 class="text-black">Recent Order</h2>
              <div>
                <button
                  id="dropdownRadioButton"
                  data-dropdown-toggle="dropdownRadio"
                  class="inline-flex items-center text-gray-500 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-3 py-1.5 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700"
                  type="button"
                >
                  <svg
                    class="mr-2 w-4 h-4 text-gray-400"
                    aria-hidden="true"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                      clip-rule="evenodd"
                    ></path>
                  </svg>
                  Last 30 days
                  <svg
                    class="ml-2 w-3 h-3"
                    aria-hidden="true"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M19 9l-7 7-7-7"
                    ></path>
                  </svg>
                </button>
                <!-- Dropdown menu -->
                <div
                  id="dropdownRadio"
                  class="hidden z-10 w-48 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600"
                  data-popper-reference-hidden=""
                  data-popper-escaped=""
                  data-popper-placement="bottom"
                  style="
                    position: absolute;
                    inset: 0px auto auto 0px;
                    margin: 0px;
                    transform: translate(0px, 510px);
                  "
                >
                  <ul
                    class="p-3 space-y-1 text-sm text-gray-700 dark:text-gray-200"
                    aria-labelledby="dropdownRadioButton"
                  >
                    <li>
                      <div
                        class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600"
                      >
                        <input
                          id="filter-radio-example-1"
                          type="radio"
                          value=""
                          name="filter-radio"
                          class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                        />
                        <label
                          for="filter-radio-example-1"
                          class="ml-2 w-full text-sm font-medium text-gray-900 rounded dark:text-gray-300"
                          >Last day</label
                        >
                      </div>
                    </li>
                    <li>
                      <div
                        class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600"
                      >
                        <input
                          checked=""
                          id="filter-radio-example-2"
                          type="radio"
                          value=""
                          name="filter-radio"
                          class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                        />
                        <label
                          for="filter-radio-example-2"
                          class="ml-2 w-full text-sm font-medium text-gray-900 rounded dark:text-gray-300"
                          >Last 7 days</label
                        >
                      </div>
                    </li>
                    <li>
                      <div
                        class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600"
                      >
                        <input
                          id="filter-radio-example-3"
                          type="radio"
                          value=""
                          name="filter-radio"
                          class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                        />
                        <label
                          for="filter-radio-example-3"
                          class="ml-2 w-full text-sm font-medium text-gray-900 rounded dark:text-gray-300"
                          >Last 30 days</label
                        >
                      </div>
                    </li>
                    <li>
                      <div
                        class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600"
                      >
                        <input
                          id="filter-radio-example-4"
                          type="radio"
                          value=""
                          name="filter-radio"
                          class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                        />
                        <label
                          for="filter-radio-example-4"
                          class="ml-2 w-full text-sm font-medium text-gray-900 rounded dark:text-gray-300"
                          >Last month</label
                        >
                      </div>
                    </li>
                    <li>
                      <div
                        class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600"
                      >
                        <input
                          id="filter-radio-example-5"
                          type="radio"
                          value=""
                          name="filter-radio"
                          class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                        />
                        <label
                          for="filter-radio-example-5"
                          class="ml-2 w-full text-sm font-medium text-gray-900 rounded dark:text-gray-300"
                          >Last year</label
                        >
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="overflow-x-scroll">
              <table
                class="sm:w-full w-96 text-sm text-left text-gray-500 dark:text-gray-400"
              >
                <thead
                  class="text-xs text-gray-600 uppercase bg-white dark:bg-gray-700 dark:text-gray-400"
                >
                  <tr class="bg-white">
                    <th scope="col" class="py-3 md:px-6 px-2">Product name</th>
                    <th scope="col" class="py-3 md:px-6 px-2">Color</th>
                    <th scope="col" class="py-3 md:px-6 px-2">Category</th>
                    <th scope="col" class="py-3 md:px-6 px-2">Price</th>
                    <th scope="col" class="py-3 md:px-6 px-2">Action</th>
                    <th scope="col" class="py-3 md:px-6 px-2"></th>
                  </tr>
                </thead>
                <tbody>
                  <tr
                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600"
                  >
                    <th
                      scope="row"
                      class="py-4 md:px-6 px-2 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                    >
                      Apple MacBook Pro 17"
                    </th>
                    <td class="py-4 md:px-6 px-2">Sliver</td>
                    <td class="py-4 md:px-6 px-2">Laptop</td>
                    <td class="py-4 md:px-6 px-2">$2999</td>
                    <td class="py-4 md:px-6 px-2">
                      <button
                        type="button"
                        class="text-white md:px-9 px-3 pt-2.5 hover:black hover:border-textColor-100 border transition bg-textColor-100 hover:bg-transparent hover:text-customeorange-600 focus:ring-4 focus:ring-blue-300 font-semibold rounded-lg text-xsm px-2 py-2 flex justify-center items-center dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
                      >
                        Completed
                      </button>
                    </td>
                    <td class="py-4 px-6">
                      <i class="fa-solid text-2xl fa-ellipsis-vertical"></i>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
</div>
