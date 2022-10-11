<div>
    <x-slot name='title'>{{ __('About') }}</x-slot>



    <div class="container mx-auto">
        <h1 class="text-customeorange-500 text-center mt-20   md:text-5xl text-3xl font-bold my-3 px-24">
            About Our Store
        </h1>
    </div>

    <div class="container mx-auto flex justify-center items-center my-12  lg:flex-nowrap flex-wrap">

        <div>
            <img src="{{ asset('storage') }}/{{ $abouts->image }}" alt="" class="w-96" />
        </div>
        <div class="px-2 max-w-2xl pl-9 lg:my-0 mt-12">
            <h5 class="text-black sm:text-xl text-sm font-bold my-3">
                <i class="fa-solid fa-basket-shopping"></i> About Our Store
            </h5>
            <h5 class="text-textColor-100 sm:text-2xl font-bold my-2">
                {{ $abouts->title }}
            </h5>
            <p class="text-gray-500 max-w-lg sm:text-lg text-xs my-3">
                {!! $abouts->para !!}
            </p>
       
        </div>
    </div>



    <div class="bg-gray-100 md:mt-56  pb-10 md:pt-0 pt-16  ">
        <!-- //quality  card -->
        <div class="container mx-auto relative md:-top-28 top-0 ">
            <div class="flex justify-center lg:flex-nowrap flex-wrap">
                <div class="aboutCard w-450 bg-white drop-shadow m-3 p-10">
                    <img src="https://new.axilthemes.com/demo/template/etrade/assets/images/about/shape-01.png"
                        alt="" />
                    <h4 class="text-customeorange-500 text-sm font-bold my-4">
                        40,000+ Happy Customer
                    </h4>
                    <p class="text-gray-500 text-base">
                        Empower your sales teams with industry tailored solutions that
                        support.
                    </p>
                </div>
                <div class="aboutCard w-450 bg-white drop-shadow m-3 p-10">
                    <img src="https://new.axilthemes.com/demo/template/etrade/assets/images/about/shape-02.png"
                        alt="" />
                    <h4 class="text-customeorange-500 text-sm font-bold my-4">
                        16 Years of Experiences
                    </h4>
                    <p class="text-gray-500 text-base">
                        Empower your sales teams with industry tailored solutions that
                        support.
                    </p>
                </div>
                <div class="aboutCard w-450 bg-white drop-shadow m-3 p-10">
                    <img src="https://new.axilthemes.com/demo/template/etrade/assets/images/about/shape-03.png"
                        alt="" />
                    <h4 class="text-customeorange-500 text-sm font-bold my-4">12 Awards Won</h4>
                    <p class="text-gray-500 text-base">
                        Empower your sales teams with industry tailored solutions that
                        support.
                    </p>
                </div>
            </div>
        </div>
        <!-- //Team  card -->
        {{-- 
    <div class="container mx-auto text-center md:t-0 mt-16">
      <div>
        <h5 class="text-customeorange-500 sm:text-2xl text-1xl font-bold mb-3">
          <i class="fa-solid fa-thumbs-up"></i> Our Team
        </h5>
        <h5 class="text-black sm:text-2xl text-xl font-bold my-2">
          Expart Management Team
        </h5>
      </div>
    </div>
    <div class="flex justify-center mt-6 lg:flex-nowrap flex-wrap">
      <div class="m-3">
        <img
          class="sm:w-300 w-4.6 rounded-lg"
          src="https://new.axilthemes.com/demo/template/etrade/assets/images/team/team-01.png"
          alt=""
        />
        <h5 class="text-customeorange-500 sm:text-1xl  text-lg   font-bold sm:my-0 mt-3">Rosolina</h5>
        <p>Founder</p>
      </div>
      <div class="m-3">
        <img
          class="sm:w-300 w-4.6 rounded-lg"
          src="https://new.axilthemes.com/demo/template/etrade/assets/images/team/team-02.png"
          alt=""
        />
        <h5 class="text-customeorange-500 sm:text-1xl  text-lg  font-bold sm:my-0 mt-3">Rosolina</h5>
        <p>Founder</p>
      </div>
      <div class="m-3">
        <img
          class="sm:w-300 w-4.6 rounded-lg"
          src="https://new.axilthemes.com/demo/template/etrade/assets/images/team/team-04.png"
          alt=""
        />
        <h5 class="text-customeorange-500 sm:text-1xl  text-lg  font-bold sm:my-0 mt-3">Rosolina</h5>
        <p>Founder</p>
      </div>
      <div class="m-3">
        <img
          class="sm:w-300 w-4.6 rounded-lg"
          src="https://new.axilthemes.com/demo/template/etrade/assets/images/team/team-02.png"
          alt=""
        />
        <h5 class="text-customeorange-500 sm:text-1xl  text-lg  font-bold sm:my-0 mt-3">Rosolina</h5>
        <p>Founder</p>
      </div>
    </div> --}}
    </div>

    {{-- <div>
    <div class="container mx-auto space-x-3 flex justify-center items-center my-12  lg:flex-nowrap flex-wrap">
      <div>
        <img
          src="https://new.axilthemes.com/demo/template/etrade/assets/images/about/about-02.png"
          alt=""
          class="w-96 rounded-lg "
        />
      </div>
      <div class="px-2 max-w-2xl md:pl-9 md:mt-0 mt-7">
        <h5 class="text-customeorange-500 md:text-xl text-md   font-bold my-3">
          <i class="fa-solid fa-basket-shopping"></i> Features #01
        </h5>
        <h5 class="text-black md:text-3xl text-2xl font-bold my-2">
          Solutions that work together
        </h5>
        <p class="text-gray-500 max-w-lg text-sm my-3">
          Publish your eCommerce site quickly with our easy-to-use store
          builder— no coding required. Migrate your items from your point of
          sale system or turn your Instagram feed into a shopping site and
          start selling fast. Square Online works for all kinds of
          businesses—retail, restaurants, services.
        </p>

        <button
          type="button"
          class="my-2 text-white bg-textColor-100 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
        >
          Get in Touch
        </button>
      </div>
    </div>
  </div> --}}

</div>
