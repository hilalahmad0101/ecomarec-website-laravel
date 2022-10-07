  <div>
      <div wire:ignore.self
          class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
          id="exampleModalScrollable2" tabindex="-1" aria-labelledby="exampleModalScrollableLabel" aria-hidden="true">
          <div
              class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable relative w-auto pointer-events-none">
              <div
                  class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                  <div
                      class="modal-header  flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                      <button type="button"
                          class="btn-close box-content w-4 h-4 p-1 text-customeorange-600  border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-customeorange-600  hover:opacity-75 hover:no-underline"
                          data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body relative">
                      <div class="grid md:grid-cols-2 grid-cols-1">
                          <div
                              class="sm:flex hidden  itmes-stretch modal-bg justify-between flex-col items-center p-5 py12">
                              <div class="">
                                  <h5 class="max-w-xs mb-2 text-customeorange-500 md:text-2xl text-xl font-bold">
                                      Login
                                  </h5>
                                  <p class="text-customeorange-500 md:text-sm text-xs">
                                      Get access to your Orders, Wishlist and Recommendations
                                  </p>
                              </div>
                              <br />
                              <br />
                              <br />

                              <img src="./images/Computer login-amico.svg" width="300px" alt="" />
                          </div>

                          <div class="p-5 ">
                              @if (session()->has('error'))
                                  <div class="bg-red-500 py-4 px-2 rounded-md font-semibold text-white">
                                      {{ session('error') }}
                                  </div>
                              @endif
                              <form class="space-y-4 md:space-y-6" action="#" wire:submit.prevent='login'>
                                  <h5 class="max-w-xs text-customeorange-600 md:text-2xl text-xl font-bold">
                                      Login
                                  </h5>
                                  <div class="relative">
                                      <input type="text" id="floating_outlined" wire:model.lazy='email_or_phone'
                                          class="block border px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                          placeholder=" " />
                                      <label for="floating_outlined"
                                          class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white  px-2 peer-focus:px-2 peer-focus:text-customeorange-500 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Enter
                                          Number</label>
                                      @error('email_or_phone')
                                          <span class="text-red-500">{{ $message }}</span>
                                      @enderror
                                  </div>

                                  <div class="relative">
                                      <input type="password" id="floating_outlined2" wire:model.lazy='login_password'
                                          class="block border px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300  dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                          placeholder=" " />
                                      <label for="floating_outlined2"
                                          class="absolute text-sm text-gray-500  dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-customeorange-500 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Enter
                                          Password</label>
                                      @error('login_password')
                                          <span class="text-red-500">{{ $message }}</span>
                                      @enderror
                                  </div>
                                  <button type="submit"
                                      class="text-white bg-customeorange-600 hover:bg-customeorange-600 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm w-full py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-customeorange-600 focus:outline-none dark:focus:ring-blue-800">
                                      Login
                                  </button>
                                  <p
                                      class="md:text-sm text-xs font-blue-600 text-center font-medium text-customeorange-500 dark:text-gray-400">
                                      Don't have an account yet?
                                      <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModalScrollable"
                                          class="font-medium text-primary-600 hover:underline dark:text-primary-500">Sign
                                          Up</a>
                                  </p>
                                  <p
                                      class="md:text-sm text-xs font-blue-600 text-center font-medium text-customeorange-500 dark:text-gray-400">
                                      Forget Password?
                                      <a href="#" data-bs-toggle="modal" data-bs-target="#forgetPasswordModal"
                                          class="font-medium text-primary-600 hover:underline dark:text-primary-500">click
                                          here</a>
                                  </p>
                                  <br />
                                  <br />
                                  <br />
                                  <div class="flex justify-center mt-12">
                                      <p
                                          class="md:text-sm text-xs px-5 max-w-xs text-center font-extralight text-gray-400 dark:text-gray-400">
                                          By continuing, you agree to abc Terms of Use and Privacy
                                          Policy.
                                      </p>
                                  </div>
                              </form>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <!-- ///// Sgin up Modal doiluge -->

      <div wire:ignore.self
          class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
          id="exampleModalScrollable" tabindex="-1" aria-labelledby="exampleModalScrollableLabel" aria-hidden="true">
          <div
              class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable relative w-auto pointer-events-none">
              <div
                  class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                  <div
                      class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                      <button type="button"
                          class="btn-close box-content w-4 h-4 p-1 text-customeorange-600  border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-customeorange-600  hover:opacity-75 hover:no-underline"
                          data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body relative">
                      <div class="grid sm:grid-cols-2 grid-cols-1">
                          <div
                              class="sm:flex hidden itmes-stretch modal-bg justify-between flex-col items-center p-5 py12">
                              <div>
                                  <h5 class="max-w-xs mb-2 text-customeorange-500 md:text-2xl text-xl font-bold">
                                      Looks like you're new here!
                                  </h5>
                                  <p class="md:text-sm text-xs text-customeorange-500">
                                      Sign up with your mobile number to get started
                                  </p>
                              </div>
                              <br />
                              <br />
                              <br />

                              <img src="./images/Computer login-amico.svg" width="300px" alt="" />
                          </div>

                          <div class="p-5">
                              {{-- <form class="space-y-4 md:space-y-6"> --}}
                              <div class='space-y-4 md:space-y-6'>
                                  <h5 class="max-w-xs text-customeorange-600 md:text-2xl text-xl font-bold">
                                      Register Your Account
                                  </h5>
                                  <div class="relative">
                                      <input type="text" id="floating_outlined" wire:model.lazy='email'
                                          class="block border px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                          placeholder=" " />
                                      @error('email')
                                          <span class="text-red-500">{{ $message }}</span>
                                      @enderror
                                      <label for="floating_outlined"
                                          class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-customeorange-500 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Enter
                                          Email Address</label>
                                  </div>
                                  @if (!$showOtp)
                                      <button type="submit" wire:click='nextStep' wire:loading.attr="disabled"
                                          wire:loading.class="bg-gray-500 hover:bg-gray-800"
                                          wire:loading.class.remove='bg-customeorange-600 hover:bg-customeorange-600'
                                          class="text-white bg-customeorange-600 hover:bg-customeorange-600 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm w-full py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-customeorange-600 focus:outline-none dark:focus:ring-blue-800">
                                          Continue
                                      </button>
                                  @endif
                                  <div wire:loading wire:target="checkout">
                                      Otp is sending
                                  </div>
                                  @if ($showOtp)
                                      <form class="space-y-4 md:space-y-6" wire:submit.prevent='create'>
                                          <div class="relative">
                                              <input type="text" id="floating_outlined" wire:model.lazy='otp'
                                                  class="block border px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                                  placeholder=" " />
                                              <label for="floating_outlined"
                                                  class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-customeorange-500 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Enter
                                                  Valid Otp</label>
                                              @error('otp')
                                                  <span class="text-red-500">{{ $message }}</span>
                                              @enderror
                                          </div>
                                          <div class="relative">
                                              <input type="password" id="floating_outlined"
                                                  wire:model.lazy='password'
                                                  class="block border px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                                  placeholder=" " />
                                              <label for="floating_outlined"
                                                  class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-customeorange-500 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Enter
                                                  Password</label>
                                              @error('password')
                                                  <span class="text-red-500">{{ $message }}</span>
                                              @enderror
                                          </div>
                                          <button type="submit"
                                              class="text-white bg-customeorange-600 hover:bg-customeorange-600 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm w-full py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-customeorange-600 focus:outline-none dark:focus:ring-blue-800">
                                              Register
                                          </button>
                                      </form>
                                  @endif
                                  <p
                                      class="md:text-sm text-xs font-blue-600 text-center font-medium text-customeorange-500 dark:text-gray-400">
                                      have an account yet?
                                      <a href="#" data-bs-toggle="modal"
                                          data-bs-target="#exampleModalScrollable2"
                                          class="font-medium text-primary-600 hover:underline dark:text-primary-500">Sign
                                          In</a>
                                  </p>
                                  <br />
                                  <br />
                                  <br />
                                  <div class="flex justify-center mt-12">
                                      <p
                                          class="md:text-sm text-xs px-5 max-w-xs text-center font-extralight text-gray-400 dark:text-gray-400">
                                          By continuing, you agree to abc Terms of Use and Privacy
                                          Policy.
                                      </p>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div wire:ignore.self
          class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
          id="forgetPasswordModal" tabindex="-1" aria-labelledby="forgetPasswordModal" aria-hidden="true">
          <div
              class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable relative w-auto pointer-events-none">
              <div
                  class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                  <div
                      class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                      <button type="button"
                          class="btn-close box-content w-4 h-4 p-1 text-customeorange-600  border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-customeorange-600  hover:opacity-75 hover:no-underline"
                          data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body relative">
                      <div class="grid sm:grid-cols-2 grid-cols-1">
                          <div
                              class="sm:flex hidden itmes-stretch modal-bg justify-between flex-col items-center p-5 py12">
                              <div>
                                  <h5 class="max-w-xs mb-2 text-customeorange-500 md:text-2xl text-xl font-bold">
                                      Looks like you're new here!
                                  </h5>
                                  <p class="md:text-sm text-xs text-customeorange-500">
                                      Forget Password
                                  </p>
                              </div>
                              <br />
                              <br />
                              <br />
                              <img src="./images/Computer login-amico.svg" width="300px" alt="" />
                          </div>
                          <div class="p-5">
                              {{-- <form class="space-y-4 md:space-y-6"> --}}
                              @if (session()->has('error'))
                                  <div class="bg-red-500 py-4 px-2 rounded-md font-semibold text-white">
                                      {!! session('error') !!}
                                  </div>
                              @endif
                              <div class='space-y-4 md:space-y-6'>
                                  <h5 class="max-w-xs text-customeorange-600 md:text-2xl text-xl font-bold">
                                      Forget Your Password
                                  </h5>
                                  <div class="relative">
                                      <input type="text" id="floating_outlined" wire:model.lazy='forget_email'
                                          class="block border px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                          placeholder=" " />

                                      <label for="floating_outlined"
                                          class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-customeorange-500 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Enter
                                          Email Address</label>
                                      @error('forget_email')
                                          <span class="text-red-500">{{ $message }}</span>
                                      @enderror
                                  </div>
                                  <button type="submit" wire:click='forgetPassword' wire:loading.attr="disabled"
                                      wire:loading.class="bg-gray-500 hover:bg-gray-800"
                                      wire:loading.class.remove='bg-customeorange-600 hover:bg-customeorange-600'
                                      class="text-white bg-customeorange-600 hover:bg-customeorange-600 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm w-full py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-customeorange-600 focus:outline-none dark:focus:ring-blue-800">
                                      Forget Password
                                  </button>
                                  <br />
                                  <br />
                                  <br />
                                  <div class="flex justify-center mt-12">
                                      <p
                                          class="md:text-sm text-xs px-5 max-w-xs text-center font-extralight text-gray-400 dark:text-gray-400">
                                          By continuing, you agree to abc Terms of Use and Privacy
                                          Policy.
                                      </p>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
