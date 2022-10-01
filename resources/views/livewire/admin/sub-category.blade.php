<div>
    <x-slot name='title'>Sub Category</x-slot>
    <div class="flex flex-col">
        <div class="flex flex-1  flex-col md:flex-row lg:flex-row mx-2">
            <div class="mb-2 border-solid border-gray-300 rounded border shadow-sm w-full">
                @if (session()->has('success'))
                    <span class="block text-green-500">{{ session('success') }}</span>
                @endif
                <div
                    class="bg-gray-200 px-2 py-3 border-solid flex items-center justify-between border-gray-200 border-b">
                    <h3>Category</h3>
                    <button type="button" data-modal="createCategoryFormModel"
                        class=" modal-trigger bg-green-500 hover:bg-green-800 text-white font-bold py-2 px-4 rounded"
                        data-bs-toggle="modal" data-bs-target="#newProduct">
                        New Sub Category
                    </button>

                </div>
                <div class="p-3">
                    <table class="table-responsive w-full rounded">
                        <thead>
                            <tr>
                                <th class="border w-1/4 px-4 py-2">Category Name</th>
                                <th class="border w-1/6 px-4 py-2">Image</th>
                                <th class="border w-1/7 px-4 py-2">Status</th>
                                <th class="border w-1/5 px-4 py-2">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($sub_categories as $category)
                                <tr>
                                    <td class="border px-4 py-2">{{ $category->sub_category_name }}</td>
                                    <td class="border px-4 py-2">{{ $category->image }}</td>
                                    <td class="border px-4 py-2">
                                        @if ($category->status == 1)
                                            <i class="fas fa-check text-green-500 mx-2"></i>
                                        @else
                                            <i class="fas fa-times text-red-500 mx-2"></i>
                                        @endif
                                    </td>
                                    <td class="border px-4 py-2">
                                        <a wire:click.prevent='edit({{ $category->id }})'
                                            data-modal="updateSubCategoryFormModel" data-bs-toggle="modal"
                                            data-bs-target="#newProduct"
                                            class="bg-teal-300   modal-trigger cursor-pointer rounded p-1 mx-1 text-green-600">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        @if ($category->status == 1)
                                        <a wire:click.prevent='inactive({{ $category->id }})'
                                        class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-green-800">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                    @else
                                        <a wire:click.prevent='active({{ $category->id }})'
                                            class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-green-500">
                                            <i class="fas fa-eye-slash"></i>
                                        </a>
                                    @endif
                                        <a wire:click.prevent='delete({{ $category->id }})'
                                            class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-red-500">
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

    <div id="createCategoryFormModel" class="modal-wrapper" wire:ignore.self>
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
                <form id="form_id" class="w-full" wire:submit.prevent='save'>
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1"
                            for="grid-first-name">
                          Sub  Category Name
                        </label>
                        <input
                            class=" block w-full bg-gray-200 text-gray-700 border border-black-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white-500"
                            id="grid-first-name" type="text" wire:model='sub_category_name'>
                        @error('sub_category_name')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1"
                            for="grid-first-name">
                            Category Name
                        </label>
                        <select
                            class=" block w-full bg-gray-200 text-gray-700 border border-black-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white-500"
                            wire:model='cat_id'>
                            <option value="">Select Category</option>
                            @foreach ($categorys as $category)
                                <option value="{{$category->id}}">{{$category->category_name}}</option>
                            @endforeach
                        </select>
                        @error('cat_id')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
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
    <div id="updateSubCategoryFormModel" class="modal-wrapper" wire:ignore.self>
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
                <form id="form_id" class="w-full" wire:submit.prevent='update({{ $edit_id }})'>
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1"
                            for="grid-first-name">
                            Sub Category Name
                        </label>
                        <input
                            class=" block w-full bg-gray-200 text-gray-700 border border-black-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white-500"
                            id="grid-first-name" type="text" wire:model='edit_sub_category_name'>
                        @error('edit_sub_category_name')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1"
                            for="grid-first-name">
                            Category Name
                        </label>
                        <select
                            class=" block w-full bg-gray-200 text-gray-700 border border-black-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white-500"
                            wire:model='edit_cat_id'>
                            <option value="">Select Category</option>
                            @foreach ($categorys as $category)
                                <option value="{{$category->id}}">{{$category->category_name}}</option>
                            @endforeach
                        </select>
                        @error('edit_cat_id')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
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
