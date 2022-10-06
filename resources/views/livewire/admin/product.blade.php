<div>
    <x-slot name='title'>Products</x-slot>
    <div class="ec-content-wrapper">
        <div class="content">
            <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
                <div>
                    <h1>Product</h1>
                    <p class="breadcrumbs"><span><a href="index.html">Home</a></span>
                        <span><i class="mdi mdi-chevron-right"></i></span>Product
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
                                            <th>Vendor Name</th>
                                            <th>Email</th>
                                            <th>Mobile</th>
                                            <th>Business Location</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($products as $product)
                                            <tr>
                                                <td>{{ $product->product_title }}</td>
                                                <td>{{ $product->price }}</td>
                                                <td><img src="{{ asset('storage') }}/{{ $product->image }}"
                                                        class="w-10 h-10" alt=""></td>
                                                <td>
                                                    @if ($product->status == 1)
                                                        <i class="fas fa-check text-green-500 mx-2"></i>
                                                    @else
                                                        <i class="fas fa-times text-red-500 mx-2"></i>
                                                    @endif
                                                </td>
                                                <td>

                                                <td>
                                                    <div class="btn-group mb-1">
                                                        <button type="button"
                                                            class="btn btn-outline-success">Info</button>
                                                        <button type="button"
                                                            class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                            data-bs-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false" data-display="static">
                                                            <span class="sr-only">Info</span>
                                                        </button>

                                                        <div class="dropdown-menu">
                                                            @if ($product->status == 1)
                                                                <a class="dropdown-item" wire:click.prevent='dactive({{ $product->id }})'>
                                                                   Active
                                                                </a>
                                                            @else
                                                                <a class="dropdown-item" wire:click.prevent='active({{ $product->id }})'>
                                                                  Deactive
                                                                </a>
                                                            @endif
                                                            <a class="dropdown-item"
                                                                wire:click.prevent='delete({{ $product->id }})'
                                                                href="#">Delete</a>
                                                        </div>
                                                    </div>
                                                </td>
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
        </div> <!-- End Content -->
    </div> <!-- End Content Wrapper -->
</div>
