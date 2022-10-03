<div>
    <x-slot name="title">Product</x-slot>
    <div class="container">

        <!-- Button trigger modal -->
       
        <div class="flex flex-col">
            <div class="flex flex-1  flex-col md:flex-row lg:flex-row mx-2">
                <div class="mb-2 border-solid border-gray-300 rounded border shadow-sm w-full">
                    @if (session()->has('success'))
                        <span class="block text-green-500">{{ session('success') }}</span>
                    @endif
                    <div class="bg-gray-200 px-2 py-3 border-solid flex justify-between items-center border-gray-200 border-b">
                        <h4>Vendor</h4>
                        <button type="button" data-modal="createFormModel" class=" modal-trigger bg-green-500 hover:bg-green-800 text-white font-bold py-2 px-4 rounded" data-bs-toggle="modal" data-bs-target="#newProduct">
                            New Product
                        </button>
                    </div>
                    <div class="p-3">
                        <table class="table-responsive w-full rounded">
                            <thead>
                                <tr>
                                    <th class="border w-1/4 px-4 py-2">Product title</th>
                                    <th class="border w-1/6 px-4 py-2">Product Price</th>
                                    <th class="border w-1/6 px-4 py-2">Product image</th>
                                    <th class="border w-1/7 px-4 py-2">Status</th>
                                    <th class="border w-1/5 px-4 py-2">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($products as $product)
                                <tr>
                                    <td class="border px-4 py-2">{{ $product->product_title }}</td>
                                    <td class="border px-4 py-2">{{ $product->price }}</td>
                                    <td class="border px-4 py-2"><img src="{{ asset('storage') }}/{{$product->image}}" class="w-10 h-10" alt=""></td>
                                    <td class="border px-4 py-2">
                                        @if ($product->status == 1)
                                            <i class="fas fa-check text-green-500 mx-2"></i>
                                        @else
                                            <i class="fas fa-times text-red-500 mx-2"></i>
                                        @endif
                                    </td>
                                    <td class="border px-4 py-2">
                                        <a wire:click.prevent='edit({{$product->id}})'  data-modal="updateFormModel" class=" modal-trigger bg-teal-300 cursor-pointer rounded p-1 mx-1 text-green-600">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a  wire:click.prevent='delete({{$product->id}})' class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-red-500">
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

        <div id="createFormModel" class="modal-wrapper" wire:ignore.self>
            <div class="overlay close-modal"></div>
            <div class="modal modal-centered">
                <div class="modal-content shadow-lg p-5">
                    <div class="border-b p-2 pb-3 pt-0 mb-4">
                        <div class="flex justify-between items-center">
                            Create Product
                            <span
                                class="close-modal cursor-pointer px-3 py-1 rounded-full bg-gray-100 hover:bg-gray-200">
                                <i class="fas fa-times text-gray-700"></i>
                            </span>
                        </div>
                    </div>
                    <!-- Modal content -->
                    <form id="form_id" class="w-full" wire:submit.prevent='save'>
                        <div class="my-2">
                            <label for="">Enter product Title</label>
                            <input type="text" wire:model.lazy="product_title" class="block w-full bg-gray-200 text-gray-700 border border-black-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white-500">
                            @error('product_title')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="my-2">
                            <label for="">Enter product Category</label>
                            <select wire:model.lazy="category" class="block w-full bg-gray-200 text-gray-700 border border-black-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white-500">
                                <option value="">Select Category</option>
                                @forelse ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                    @empty
                                    <option value="">Record not found</option>
                                @endforelse
                            </select>
                            @error('category')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="my-2">
                            <label for="">Enter product Sale price</label>
                            <input type="text" wire:model.lazy="sale_price" class="block w-full bg-gray-200 text-gray-700 border border-black-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white-500">
                            @error('sale_price')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="my-2">
                            <label for="">Enter product price</label>
                            <input type="text" wire:model.lazy="price" class="block w-full bg-gray-200 text-gray-700 border border-black-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white-500">
                            @error('price')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="my-2">
                            <label for="">Enter product Stock</label>
                            <input type="text" wire:model.lazy="items" class="block w-full bg-gray-200 text-gray-700 border border-black-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white-500">
                            @error('items')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="my-2">
                            <label for="">Enter product Small Content</label>
                            <textarea rows="3" cols="5"  wire:model.lazy="small_content" class="block w-full bg-gray-200 text-gray-700 border border-black-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white-500"></textarea>
                            @error('small_content')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="my-2">
                            <label for="">Enter product Large Content</label>
                            <textarea rows="3" cols="5" id="long_content" name='long_content' wire:model.lazy="long_content" class="block w-full bg-gray-200 text-gray-700 border border-black-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white-500"></textarea>
                            @error('long_content')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="my-2">
                            <label for="">Enter product Image</label>
                            <input type="file" wire:model.lazy="image" class="block w-full bg-gray-200 text-gray-700 border border-black-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white-500">
                            @error('image')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <button class="bg-green-500 hover:bg-green-800 text-white font-bold py-2 px-4 rounded">Create Product</button>
                    </form>
                </div>
            </div>
        </div>

        <div id="updateFormModel" class="modal-wrapper" wire:ignore.self>
            <div class="overlay close-modal"></div>
            <div class="modal modal-centered">
                <div class="modal-content shadow-lg p-5">
                    <div class="border-b p-2 pb-3 pt-0 mb-4">
                        <div class="flex justify-between items-center">
                            Create Product
                            <span
                                class="close-modal cursor-pointer px-3 py-1 rounded-full bg-gray-100 hover:bg-gray-200">
                                <i class="fas fa-times text-gray-700"></i>
                            </span>
                        </div>
                    </div>
                    <!-- Modal content -->
                    <form id="form_id" class="w-full" wire:submit.prevent='update({{$edit_id}})'>
                        <div class="my-2">
                            <label for="">Enter product Title</label>
                            <input type="text" wire:model.lazy="edit_product_title" class="block w-full bg-gray-200 text-gray-700 border border-black-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white-500">
                            @error('edit_product_title')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="my-2">
                            <label for="">Enter product Category</label>
                            <select wire:model.lazy="edit_category" class="block w-full bg-gray-200 text-gray-700 border border-black-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white-500">
                                @forelse ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                    @empty
                                    <option value="">Record not found</option>
                                @endforelse
                            </select>
                            @error('edit_category')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="my-2">
                            <label for="">Enter product Sale price</label>
                            <input type="text" wire:model.lazy="edit_sale_price" class="block w-full bg-gray-200 text-gray-700 border border-black-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white-500">
                            @error('edit_sale_price')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="my-2">
                            <label for="">Enter product price</label>
                            <input type="text" wire:model.lazy="edit_price" class="block w-full bg-gray-200 text-gray-700 border border-black-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white-500">
                            @error('edit_price')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="my-2">
                            <label for="">Enter product Stock</label>
                            <input type="text" wire:model.lazy="edit_items" class="block w-full bg-gray-200 text-gray-700 border border-black-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white-500">
                            @error('edit_items')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="my-2">
                            <label for="">Enter product Small Content</label>
                            <textarea rows="3" cols="5" wire:model.lazy="edit_small_content" class="block w-full bg-gray-200 text-gray-700 border border-black-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white-500"></textarea>
                            @error('edit_small_content')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="my-2">
                            <label for="">Enter product Large Content</label>
                            <textarea rows="3" cols="5" wire:model.lazy="edit_long_content" class="block w-full bg-gray-200 text-gray-700 border border-black-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white-500"></textarea>
                            @error('edit_long_content')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="my-2">
                            <label for="">Enter product Image</label>
                            <input type="file" wire:model.lazy="new_image" class="block w-full bg-gray-200 text-gray-700 border border-black-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white-500">
                            {{$new_image}}
                           <input type="text"   wire:model='{{$old_image}}' id="">
                        </div>
                        <button class="bg-green-500 hover:bg-green-800 text-white font-bold py-2 px-4 rounded">Create Product</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
