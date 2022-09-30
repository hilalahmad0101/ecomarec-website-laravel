<div>
    <x-slot name='title'>Products</x-slot>
    <div class="flex flex-col">
        <div class="flex flex-1  flex-col md:flex-row lg:flex-row mx-2">
            <div class="mb-2 border-solid border-gray-300 rounded border shadow-sm w-full">
                @if (session()->has('success'))
                    <span class="block text-green-500">{{ session('success') }}</span>
                @endif
                <div class="bg-gray-200 px-2 py-3 border-solid border-gray-200 border-b">
                    Product
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
                                    <td class="border px-4 py-2"><img src="{{ asset('storage') }}/{{ $product->image }}"
                                            class="w-10 h-10" alt=""></td>
                                    <td class="border px-4 py-2">
                                        @if ($product->status == 1)
                                            <i class="fas fa-check text-green-500 mx-2"></i>
                                        @else
                                            <i class="fas fa-times text-red-500 mx-2"></i>
                                        @endif
                                    </td>
                                    <td class="border px-4 py-2">
                                        @if ($product->status == 1)
                                            <a wire:click.prevent='dactive({{ $product->id }})'
                                            class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-green-800">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                        @else
                                            <a wire:click.prevent='active({{ $product->id }})'
                                                class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-green-500">
                                                <i class="fas fa-eye-slash"></i>
                                            </a>
                                        @endif
                                        <a wire:click.prevent='delete({{ $product->id }})'
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
</div>
