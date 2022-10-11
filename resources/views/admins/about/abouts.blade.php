<div>
    <x-slot name='title'>{{ __('About') }}</x-slot>
    <div class="ec-content-wrapper">
        <div class="content">
            <div class="breadcrumb-wrapper breadcrumb-wrapper-2 breadcrumb-contacts">
                <h1>{{ __('About') }}</h1>
                <p class="breadcrumbs"><span><a href="index.html">{{ __('Home') }}</a></span>
                    <span><i class="mdi mdi-chevron-right"></i></span>{{ __('About') }}
                </p>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="ec-content-wrapper">
                        <div class="content">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card card-default">
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table id="responsive-data-table" class="table" style="width:100%">
                                                    <thead>
                                                        <tr>
                                                            <th>About Content</th>
                                                            <th>Image</th>
                                                            <th>Status</th>
                                                            <th>Date</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($abouts as $about)
                                                            <tr>
                                                                <td><img class="tbl-thumb"
                                                                        src="{{ asset('storage') }}/{{ $about->image }}"
                                                                        alt="Product Image" width="48"
                                                                        height="48" /></td>
                                                                <td>{{ $about->title }}</td>
                                                                <td> {{ $about->status ? 'Active' : 'Deactive' }}
                                                                </td>
                                                                <td>{{ $about->created_at->format('Y-m-d') }}
                                                                </td>
                                                                <td>
                                                                    <div class="btn-group mb-1">
                                                                        <button type="button"
                                                                            class="btn btn-outline-success">Info</button>
                                                                        <button type="button"
                                                                            class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                                            data-bs-toggle="dropdown"
                                                                            aria-haspopup="true" aria-expanded="false"
                                                                            data-display="static">
                                                                            <span class="sr-only">Info</span>
                                                                        </button>

                                                                        <div class="dropdown-menu">
                                                                            <a class="dropdown-item"
                                                                                wire:click.prevent='edit({{ $about->id }})'
                                                                                href="#">Edit</a>
                                                                            <a class="dropdown-item"
                                                                                wire:click.prevent='delete({{ $about->id }})'
                                                                                href="#">Delete</a>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        @endforeach
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
            </div>
        </div> <!-- End Content -->
    </div> <!-- End Content Wrapper -->
</div>
