<div>
    <x-slot name='title'>Order</x-slot>
    <div class="ec-content-wrapper">
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
                                                            alt="">
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
