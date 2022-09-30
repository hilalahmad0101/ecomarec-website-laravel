<div>
    <x-slot name='title'>Order</x-slot>
    <div class="container mx-auto">
        <div class="flex flex-col">
            <div class="flex flex-1  flex-col md:flex-row lg:flex-row mx-2">
                <div class="mb-2 border-solid border-gray-300 rounded border shadow-sm w-full">
                    @if (session()->has('success'))
                        <span class="block text-green-500">{{ session('success') }}</span>
                    @endif
                    <div
                        class="bg-gray-200 px-2 py-3 border-solid flex justify-between items-center border-gray-200 border-b">
                        <h4>Order</h4>

                    </div>
                    <div class="p-3">
                        <table class="table-responsive w-full rounded">
                            <thead>
                                <tr>
                                    <th class="border w-1/4 px-4 py-2">Product title</th>
                                    <th class="border w-1/6 px-4 py-2">Product Price</th>
                                    <th class="border w-1/6 px-4 py-2">Product image</th>
                                    <th class="border w-1/7 px-4 py-2">Status</th>
                                    <th class="border w-1/5 px-4 py-2">Genrate Invoice</th>
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
                                                <img src="{{ asset('storage') }}/{{ $product->image }}" alt="">
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
</div>
