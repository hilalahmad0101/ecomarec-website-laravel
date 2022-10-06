<div>
    <x-slot name='title'>Slider</x-slot>
    <div class="ec-content-wrapper">
        <div class="content">
            <div class="breadcrumb-wrapper breadcrumb-wrapper-2 breadcrumb-contacts">
                <h1>Slider</h1>
                <p class="breadcrumbs"><span><a href="index.html">Home</a></span>
                    <span><i class="mdi mdi-chevron-right"></i></span>Slider
                </p>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-12">
                    <div class="ec-cat-list card card-default mb-24px">
                        <div class="card-body">
                            @if ($update)
                                <div class="ec-cat-form">
                                    <h4>Update Slider</h4>
                                    <form wire:submit.prevent='update'>
                                        <div class="form-group row">
                                            <label for="slug" class="col-12 col-form-label">Upload Image</label>
                                            <div class="col-12">
                                                <input class="form-control" wire:model='new_image' type="file">
                                                @if ($this->new_image)
                                                    <img src="{{ $new_image->temporaryUrl() }}" width="48"
                                                        height="48" />
                                                @else
                                                    <img src="{{ asset('storage') }}/{{ $old_image }}" width="48"
                                                        height="48" />
                                                @endif
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <button name="submit" type="submit"
                                                    class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            @else
                                <div class="ec-cat-form">
                                    <h4>Add New Slider</h4>
                                    <form wire:submit.prevent='save'>
                                        <div class="form-group row">
                                            <label class="col-12 col-form-label">Upload Image</label>
                                            <div class="col-12">
                                                <input class="form-control" wire:model='image' type="file">
                                                @error('image')
                                                    <span style='color:red'>{{ $message }}</span>
                                                @enderror
                                                @if ($image)
                                                    <img src="{{ $image->temporaryUrl() }}" width="48"
                                                        height="48" />
                                                @endif
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <button name="submit" type="submit"
                                                    class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            @endif

                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-12">
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
                                                            <th>Slider Image</th>
                                                            <th>Date</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($sliders as $slider)
                                                            <tr>
                                                                <td><img class="tbl-thumb"
                                                                        src="{{ asset('storage') }}/{{ $slider->image }}"
                                                                        alt="Product Image" width="48"
                                                                        height="48" /></td>
                                                                <td>{{ $slider->created_at->format('Y-m-d') }}</td>
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
                                                                                wire:click.prevent='edit({{ $slider->id }})'
                                                                                href="#">Edit</a>
                                                                            <a class="dropdown-item"
                                                                                wire:click.prevent='delete({{ $slider->id }})'
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
