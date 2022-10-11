<div>
    <x-slot name='title'>{{ __('Contacts') }}</x-slot>
    <div class="relative relative bg-gradient-to-r from-gray-600 to-gray-600">
        <img src="https://rampapp.org/wp-content/uploads/2019/06/Contact_Us_1.jpg"
            class="mix-blend-overlay w-full object-cover h-64" alt="" />
        <h5
            class="text-white md:text-4xl text-2xl font-bold my-2 absolute top-50 transform -translate-x-40 -translate-y-10 left-50">
            Contact Us
        </h5>
    </div>

    <div class="bg-white sm:pt-28 pt-4 pb-12">
        <div class="container mx-auto flex px-4 justify-evenly flex-wrap">
            <div class="">
                <h5 class="text-customeorange-500 md:text-xl text-md font-bold my-3">
                    Our Store
                </h5>
                <p class="my-4 text-gray-500 md:text-sm text-xs max-w-sm">
                    8212 E. Glen Creek Street Orchard Park, NY 14127, United States of
                    America
                </p>
                <p class="text-gray-500 md:text-sm text-xs">Phone: +123 456 7890</p>
                <p class="text-gray-500 md:text-sm text-xs">
                    Email: Hello@etrade.com
                </p>

                <h5 class="text-customeorange-500 md:text-xl text-md font-bold my-4">
                    Careers
                </h5>
                <p class="my-4 text-gray-500 md:text-sm text-xs">
                    Instead of buying six things, one that you really like.
                </p>

                <h5 class="text-customeorange-500 md:text-xl text-md font-bold my-4">
                    Opening Hours:
                </h5>
                <p class="text-gray-500 md:text-sm text-xs">
                    Monday to Saturday: 9am - 10pm
                </p>
                <p class="text-gray-500 md:text-sm text-xs">Sundays: 10am - 6pm</p>
            </div>

            <div class="mt-14 lg:mt-0 sm:w-auto w-full px-4">
                <h5 class="text-customeorange-500 md:text-2xl text-1xl font-bold my-2">
                    We would love to hear from you.
                </h5>
                <form wire:submit.prevent='save'>
                    <div class="mb-6">
                        <label for="email"
                            class="block mb-2 md:text-sm text-xs font-medium text-gray-900 dark:text-gray-300">Your
                            Name</label>
                        <input type="text" id="name" wire:model.lazy='name'
                            class="sm:w-550 w-full bg-gray-50 border border-gray-300 text-gray-900 md:text-sm text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="name@flowbite.com" required="" />
                    </div>
                    <div class="mb-6">
                        <label for="password"
                            class="block mb-2 md:text-sm text-xs font-medium text-blue-900 dark:text-gray-300">Your
                            Email</label>
                        <input type="email" wire:model.lazy='email'
                            class="sm:w-550 w-full bg-gray-50 border border-gray-300 text-gray-900 md:text-sm text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            required="" />
                    </div>

                    <label for="message"
                        class="block mb-2 md:text-sm text-xs font-medium text-gray-900 dark:text-gray-400">Your
                        message</label>
                    <textarea id="message" rows="4" wire:model.lazy='message'
                        class="sm:w-550 w-full block p-2.5 w-full md:text-sm text-xs text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Your message..."></textarea>

                    <button type="submit"
                        class="text-white mt-5 bg-textColor-100 hover:bg-textColor-200 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg md:text-sm text-xs w-auto px-12 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Send
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
