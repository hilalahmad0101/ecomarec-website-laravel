<div>
    <x-slot name='title'>Update Product</x-slot>

    <div class="ec-content-wrapper">
        <div class="content">
            <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
                <div>
                    <h1>Update Product</h1>
                    <p class="breadcrumbs"><span><a href="index.html">Home</a></span>
                        <span><i class="mdi mdi-chevron-right"></i></span>Product
                    </p>
                </div>
                <div>
                    <a href="{{ route('vendor.products') }}" class="btn btn-primary"> View All</a>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card card-default">
                        <div class="card-header card-header-border-bottom">
                            <h2>Update Product</h2>
                        </div>

                        <div class="card-body">
                            <div class="row ec-vendor-uploads">
                                {{-- <div class="col-lg-4">
                                    <div class="ec-vendor-img-upload">
                                        <div class="ec-vendor-main-img">
                                            <div class="avatar-upload">
                                                <div class="avatar-edit">
                                                    <input type='file' id="imageUpload" class="ec-image-upload"
                                                        accept=".png, .jpg, .jpeg" />
                                                    <label for="imageUpload"><img src="assets/img/icons/edit.svg"
                                                            class="svg_img header_svg" alt="edit" /></label>
                                                </div>
                                                <div class="avatar-preview ec-preview">
                                                    <div class="imagePreview ec-div-preview">
                                                        <img class="ec-image-preview"
                                                            src="assets/img/products/vender-upload-preview.jpg"
                                                            alt="edit" />
                                                    </div>
                                                </div>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="col-lg-12">
                                    <div class="ec-vendor-upload-detail">
                                        <form class="row g-3" wire:submit.prevent='save'>
                                            <div class="col-md-6">
                                                <label for="inputEmail4" class="form-label">Product name</label>
                                                <input type="text" wire:model.lazy='product_title'
                                                    class="form-control slug-title" id="inputEmail4">
                                                @error('product_title')
                                                    <span style="color:red">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Select Categories</label>
                                                <select wire:model="category" id="Categories" class="form-select">
                                                    <option value="">Select Any Category</option>
                                                    @foreach ($categories as $category)
                                                        {{-- <optgroup label="{{ $category->category_name }}">
                                                            @php
                                                                $sub_categories = \App\Models\SubCategory::where('cat_id', $category->id)->get();
                                                            @endphp
                                                            @foreach ($sub_categories as $sub_category) --}}
                                                        <option value="{{ $category->id }}">
                                                            {{ $category->category_name }}</option>
                                                        {{-- @endforeach
                                                        </optgroup> --}}
                                                    @endforeach

                                                    {{-- <optgroup label="Furniture">
                                                        <option value="table">Table</option>
                                                        <option value="sofa">Sofa</option>
                                                    </optgroup>
                                                    <optgroup label="Electronic">
                                                        <option value="phone">I Phone</option>
                                                        <option value="laptop">Laptop</option>
                                                    </optgroup> --}}
                                                </select>
                                                @error('category')
                                                    <span style="color:red">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            {{-- <div class="col-md-12">
                                                <label for="slug" class="col-12 col-form-label">Slug</label>
                                                <div class="col-12">
                                                    <input id="slug" name="slug"
                                                        class="form-control here set-slug" type="text">
                                                </div>
                                            </div> --}}
                                            <div class="col-md-12">
                                                <label class="form-label">Sort Description</label>
                                                <textarea class="form-control" wire:model.lazy='small_content' rows="2"></textarea>
                                                @error('small_content')
                                                    <span style="color:red">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            {{-- <div class="col-md-4 mb-25">
                                                <label class="form-label">Colors</label>
                                                <input type="color" class="form-control form-control-color"
                                                    id="exampleColorInput1" value="#ff6191"
                                                    title="Choose your color">
                                                <input type="color" class="form-control form-control-color"
                                                    id="exampleColorInput2" value="#33317d"
                                                    title="Choose your color">
                                                <input type="color" class="form-control form-control-color"
                                                    id="exampleColorInput3" value="#56d4b7"
                                                    title="Choose your color">
                                                <input type="color" class="form-control form-control-color"
                                                    id="exampleColorInput4" value="#009688"
                                                    title="Choose your color">
                                            </div>
                                            <div class="col-md-8 mb-25">
                                                <label class="form-label">Size</label>
                                                <div class="form-checkbox-box">
                                                    <div class="form-check form-check-inline">
                                                        <input type="checkbox" name="size1" value="size">
                                                        <label>S</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input type="checkbox" name="size1" value="size">
                                                        <label>M</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input type="checkbox" name="size1" value="size">
                                                        <label>L</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input type="checkbox" name="size1" value="size">
                                                        <label>XL</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input type="checkbox" name="size1" value="size">
                                                        <label>XXL</label>
                                                    </div>
                                                </div>
                                            </div> --}}
                                            <div class="col-md-6">
                                                <label class="form-label">Price <span>( In USD
                                                        )</span></label>
                                                <input type="number" class="form-control" wire:model.lazy='price'
                                                    id="price1">
                                                @error('price')
                                                    <span style="color:red">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Sale Price</label>
                                                <input type="number" wire:model.lazy='sale_price' class="form-control"
                                                    id="quantity1">
                                                @error('sale_price')
                                                    <span style="color:red">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-md-12">
                                                <label class="form-label">Ful Detail</label>
                                                <textarea class="form-control" wire:model.lazy='long_content' rows="4"></textarea>
                                                @error('long_content')
                                                    <span style="color:red">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            {{-- <div class="col-md-12">
                                                <label class="form-label">Product Tags <span>( Type and
                                                        make comma to separate tags )</span></label>
                                                <input type="text" class="form-control" id="group_tag"
                                                    name="group_tag" value="" placeholder=""
                                                    data-role="tagsinput" />
                                            </div> --}}
                                            <div class="col-md-6">
                                                <label class="form-label">Upload Product Image</label>
                                                <input type="file" wire:model='image' class="form-control"
                                                    id="quantity1">
                                                @error('image')
                                                    <span style="color:red">{{ $message }}</span>
                                                @enderror
                                                @if ($new_image)
                                                    <img src="{{ $new_image->temporaryUrl() }}" width="48"
                                                        height="48" class="" alt="edit" />
                                                @else
                                                    <img src="{{ asset('storage') }}/{{ $old_image }}"
                                                        width="48" height="48" class="" alt="edit" />
                                                @endif
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Sale Price</label>
                                                <input type="number" wire:model.lazy='items' class="form-control"
                                                    id="quantity1">
                                                @error('items')
                                                    <span style="color:red">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End Content -->
    </div> <!-- End Content Wrapper -->
</div>
