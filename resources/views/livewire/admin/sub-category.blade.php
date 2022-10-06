<div>
    <x-slot name='title'>Sub Category</x-slot>
    <div class="ec-content-wrapper">
        <div class="content">
            <div class="breadcrumb-wrapper breadcrumb-wrapper-2 breadcrumb-contacts">
                <h1>Sub Category</h1>
                <p class="breadcrumbs"><span><a href="index.html">Home</a></span>
                    <span><i class="mdi mdi-chevron-right"></i></span>Sub Category
                </p>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-12">
                    <div class="ec-cat-list card card-default mb-24px">
                        <div class="card-body">
                            @if ($update)
                                <div class="ec-cat-form">
                                    <h4>Update Category</h4>
                                    <form wire:submit.prevent='update'>
                                        <div class="form-group row">
                                            <label for="text" class="col-12 col-form-label">Category Name</label>
                                            <div class="col-12">
                                                <input id="text" name="text"
                                                    wire:model.lazy='edit_sub_category_name'
                                                    class="form-control here slug-title" type="text">
                                                @error('edit_sub_category_name')
                                                    <span style='color:red'>{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="mb-5">
                                            <label class="form-label">Select Categories</label>
                                            <select wire:model="edit_cat_id" id="cat_id" class="form-select">
                                                <option value="">Please select any category</option>
                                                @foreach ($categorys as $category)
                                                    <option value="{{ $category->id }}">
                                                        {{ $category->category_name }}</option>
                                                @endforeach
                                            </select>
                                            @error('edit_cat_id')
                                                <span style='color:red'>{{ $message }}</span>
                                            @enderror
                                        </div>
                                        {{-- <div class="form-group row">
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
                                        </div> --}}
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
                                    <h4>Add New Category</h4>
                                    <form wire:submit.prevent='save'>
                                        <div class="form-group row">
                                            <label for="text" class="col-12 col-form-label">Category
                                                Name</label>
                                            <div class="col-12">
                                                <input id="text" name="text" wire:model.lazy='sub_category_name'
                                                    class="form-control here slug-title" type="text">
                                                @error('sub_category_name')
                                                    <span style='color:red'>{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="mb-5">
                                            <label class="form-label">Select Categories</label>
                                            <select wire:model="cat_id" id="cat_id" class="form-select">
                                                <option value="">Please select any category</option>
                                                @foreach ($categorys as $category)
                                                    <option value="{{ $category->id }}">
                                                        {{ $category->category_name }}</option>
                                                @endforeach
                                            </select>
                                            @error('cat_id')
                                                <span style='color:red'>{{ $message }}</span>
                                            @enderror
                                        </div>
                                        {{-- <div class="form-group row">
                                            <label for="text" class="col-12 col-form-label">Slug</label>
                                            <div class="col-12">
                                                <input wire:model.lazy='slug' class="form-control here set-slug"
                                                    type="text">
                                                @error('slug')
                                                    <span style='color:red'>{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div> --}}
                                        {{-- <div class="form-group row">
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
                                        </div> --}}
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
                                                            <th>Sub Category Name</th>
                                                            <th>Category Name</th>
                                                            <th>Status</th>
                                                            <th>Date</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($sub_categories as $category)
                                                            <tr>
                                                                <td>{{ $category->sub_category_name }}</td>
                                                                <td>{{ $category->categorys->category_name }}</td>
                                                                <td> {{ $category->status ? 'Active' : 'Deactive' }}
                                                                </td>
                                                                <td>{{ $category->created_at->format('Y-m-d') }}</td>
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
                                                                                wire:click.prevent='edit({{ $category->id }})'
                                                                                href="#">Edit</a>
                                                                            <a class="dropdown-item"
                                                                                wire:click.prevent='delete({{ $category->id }})'
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
