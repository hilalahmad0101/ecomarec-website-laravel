<div>
    <x-slot name='title'>Vendor</x-slot>
    <div class="flex flex-col">
        <div class="flex flex-1  flex-col md:flex-row lg:flex-row mx-2">
            <div class="mb-2 border-solid border-gray-300 rounded border shadow-sm w-full">
                @if (session()->has('success'))
                <span class="block text-green-500">{{ session('success')}}</span>
             @endif
                <div class="bg-gray-200 px-2 py-3 border-solid border-gray-200 border-b">
                    Vendor
                </div>
                <div class="p-3">
                    <table class="table-responsive w-full rounded">
                        <thead>
                            <tr>
                                <th class="border w-1/4 px-4 py-2">Vendor Name</th>
                                <th class="border w-1/6 px-4 py-2">Email</th>
                                <th class="border w-1/6 px-4 py-2">Mobile</th>
                                <th class="border w-1/6 px-4 py-2">Business Location</th>
                                <th class="border w-1/7 px-4 py-2">Status</th>
                                <th class="border w-1/5 px-4 py-2">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($vendors as $vendor)
                                <tr>
                                    <td class="border px-4 py-2">{{ $vendor->name }}</td>
                                    <td class="border px-4 py-2">{{ $vendor->email }}</td>
                                    <td class="border px-4 py-2">{{ $vendor->mobile }}</td>
                                    <td class="border px-4 py-2">{{ $vendor->business_location }}</td>
                                    <td class="border px-4 py-2">
                                        @if ($vendor->status == 1)
                                            <i class="fas fa-check text-green-500 mx-2"></i>
                                        @else
                                            <i class="fas fa-times text-red-500 mx-2"></i>
                                        @endif
                                    </td>
                                    <td class="border px-4 py-2">
                                        <a data-modal="centeredFormModal" wire:click.prevent='showVendor({{$vendor->id}})'
                                            class="modal-trigger bg-teal-300 cursor-pointer rounded p-1 mx-1 text-white">
                                            <i class="fa fa-envelope"></i>
                                        </a>
                                        <a class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-green-600">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a  wire:click.prevent='delete({{$vendor->id}})' class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-red-500">
                                            <i class="fas fa-trash"></i>
                                        </a>
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

    <div id="centeredFormModal" class="modal-wrapper" wire:ignore.self>
        <div class="overlay close-modal"></div>
        <div class="modal modal-centered">
            <div class="modal-content shadow-lg p-5">
                <div class="border-b p-2 pb-3 pt-0 mb-4">
                    <div class="flex justify-between items-center">
                        Send Mail to Vendor
                        <span class="close-modal cursor-pointer px-3 py-1 rounded-full bg-gray-100 hover:bg-gray-200">
                            <i class="fas fa-times text-gray-700"></i>
                        </span>
                    </div>
                </div>
                <!-- Modal content -->
                <form id="form_id" class="w-full" wire:submit.prevent='sendMail'>
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1"
                            for="grid-first-name">
                            Vendor Company/Brand name
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-black-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white-500"
                            readonly id="grid-first-name" type="text" wire:model='company_name'>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1"
                            for="grid-first-name">
                            Vendor Email
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-black-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white-500"
                            readonly id="grid-first-name" type="text" wire:model='email'>
                    </div>

                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1"
                                for="grid-password">
                                Message for vendor
                            </label>
                            <textarea wire:model.lazy='message' id="" cols="30" rows="10" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-black-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white-500"></textarea>
                        </div>
                    </div>

                    <div class="mt-5">
                        <button class="bg-green-500 hover:bg-green-800 text-white font-bold py-2 px-4 rounded"> Submit
                        </button>
                        <span
                            class="close-modal cursor-pointer bg-red-200 hover:bg-red-500 text-red-900 font-bold py-2 px-4 rounded">
                            Close
                        </span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
