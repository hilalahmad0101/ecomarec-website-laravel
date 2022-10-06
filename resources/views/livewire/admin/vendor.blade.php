<div>
    <x-slot name='title'>Vendor</x-slot>

    <div class="ec-content-wrapper">
        <div class="content">
            <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
                <div>
                    <h1>Vendor</h1>
                    <p class="breadcrumbs"><span><a href="index.html">Home</a></span>
                        <span><i class="mdi mdi-chevron-right"></i></span>Vendor
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
                                        @forelse ($vendors as $vendor)
                                            <tr>
                                                <td>{{ $vendor->name }}</td>
                                                <td>{{ $vendor->email }}</td>
                                                <td>{{ $vendor->mobile }}</td>
                                                <td>{{ $vendor->business_location }}</td>
                                                <td>
                                                    {{ $vendor->status ? 'Active' : 'Deactive' }}
                                                </td>
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
                                                            <a class="dropdown-item" data-bs-toggle="modal"
                                                                data-bs-target="#modal-add-member"
                                                                wire:click.prevent='showVendor({{ $vendor->id }})'
                                                                href="#">Edit</a>
                                                            <a class="dropdown-item"
                                                                wire:click.prevent='delete({{ $vendor->id }})'
                                                                href="#">Delete</a>
                                                        </div>
                                                    </div>
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

    <div class="modal fade" wire:ignore.self id="modal-add-member" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white"
                    style="border-top-left-radius: 20px;border-top-right-radius: 20px;">
                    <h5>Send Activation Mail to Vendor</h5>
                </div>
                <form wire:submit.prevent='sendMail'>
                    <div class="modal-body px-5 py-2" data-simplebar style="height:320px">
                        <div class="my-2">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1"
                                for="grid-first-name">
                                Vendor Company/Brand name
                            </label>
                            <input class="form-control here slug-title" readonly id="grid-first-name" type="text"
                                wire:model='company_name'>
                        </div>
                        <div class="my-2">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1"
                                for="grid-first-name">
                                Vendor Email
                            </label>
                            <input class="form-control here slug-title" readonly id="grid-first-name" type="text"
                                wire:model='email'>
                        </div>
                        <div class="my-2">
                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1"
                                for="grid-password">
                                Message for vendor
                            </label>
                            <textarea wire:model.lazy='message' id="" cols="30" rows="5" class="form-control here slug-title"></textarea>
                        </div>

                    </div>
                    <div class="modal-footer px-4">
                        <button type="submit" class="btn btn-primary btn-pill">Add new member</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
