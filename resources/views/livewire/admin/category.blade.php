<div>
    <x-slot name='title'>Category</x-slot>
    <div class="ec-content-wrapper">
        <div class="content">
            <div class="breadcrumb-wrapper breadcrumb-wrapper-2 breadcrumb-contacts">
                    <h1>Main Category</h1>
                    <p class="breadcrumbs"><span><a href="index.html">Home</a></span>
                        <span><i class="mdi mdi-chevron-right"></i></span>Main Category</p>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-12">
                    <div class="ec-cat-list card card-default mb-24px">
                        <div class="card-body">
                            <div class="ec-cat-form">
                                <h4>Add New Category</h4>

                                <form>

                                    <div class="form-group row">
                                        <label for="text" class="col-12 col-form-label">Category Name</label> 
                                        <div class="col-12">
                                            <input id="text" name="text" wire:model.lazy='category_name' class="form-control here slug-title" type="text">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="slug" class="col-12 col-form-label">Slug</label> 
                                        <div class="col-12">
                                            <input id="slug" name="slug" wire:model.lazy='slug' class="form-control here set-slug" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="slug" class="col-12 col-form-label">Upload Image</label> 
                                        <div class="col-12">
                                            <input id="slug" name="slug" class="form-control" wire:model='image' type="file">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-12">
                    <div class="ec-cat-list card card-default">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="responsive-data-table" class="table">
                                    <thead>
                                        <tr>
                                            <th>Thumb</th>
                                            <th>Name</th>
                                            <th>Sub Categories</th>
                                            <th>Product</th>
                                            <th>Total Sell</th>
                                            <th>Status</th>
                                            <th>Trending</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td><img class="cat-thumb" src="assets/img/category/clothes.png" alt="Product Image" /></td>
                                            <td>Clothes</td>
                                            <td>
                                                <span class="ec-sub-cat-list">
                                                <span class="ec-sub-cat-count" title="Total Sub Categories">5</span>
                                                <span class="ec-sub-cat-tag">T-shirt</span>
                                                <span class="ec-sub-cat-tag">Shirt</span>
                                                <span class="ec-sub-cat-tag">Dress</span>
                                                <span class="ec-sub-cat-tag">Jeans</span>
                                                <span class="ec-sub-cat-tag">Top</span>
                                                </span>
                                            </td>
                                            <td>28</td>
                                            <td>2161</td>
                                            <td>ACTIVE</td>
                                            <td><span class="badge badge-success">Top</span></td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button"
                                                        class="btn btn-outline-success">Info</button>
                                                    <button type="button"
                                                        class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false" data-display="static">
                                                        <span class="sr-only">Info</span>
                                                    </button>

                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Edit</a>
                                                        <a class="dropdown-item" href="#">Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img class="cat-thumb" src="assets/img/category/footwear.png" alt="Product Image" /></td>
                                            <td>Footwear</td>
                                            <td>
                                                <span class="ec-sub-cat-list">
                                                    <span class="ec-sub-cat-count" title="Total Sub Categories">4</span>
                                                    <span class="ec-sub-cat-tag">Sports</span>
                                                    <span class="ec-sub-cat-tag">Casual</span>
                                                    <span class="ec-sub-cat-tag">safety shoes </span>
                                                    <span class="ec-sub-cat-tag">Sandal</span>
                                                </span>
                                            </td>
                                            <td>68</td>
                                            <td>5161</td>
                                            <td>ACTIVE</td>
                                            <td><span class="badge bg-primary">Medium</span></td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button"
                                                        class="btn btn-outline-success">Info</button>
                                                    <button type="button"
                                                        class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false" data-display="static">
                                                        <span class="sr-only">Info</span>
                                                    </button>

                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Edit</a>
                                                        <a class="dropdown-item" href="#">Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img class="cat-thumb" src="assets/img/category/jewelry.png" alt="Product Image" /></td>
                                            <td>Jewelry</td>
                                            <td>
                                                <span class="ec-sub-cat-list">
                                                    <span class="ec-sub-cat-count" title="Total Sub Categories">4</span>
                                                    <span class="ec-sub-cat-tag">necklace</span>
                                                    <span class="ec-sub-cat-tag">chain</span>
                                                    <span class="ec-sub-cat-tag">rings</span>
                                                    <span class="ec-sub-cat-tag">earings</span>
                                                </span>
                                            </td>
                                            <td>68</td>
                                            <td>5161</td>
                                            <td><span class="inactive">Inactive</span></td>
                                            <td><span class="badge badge-success">Top</span></td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button"
                                                        class="btn btn-outline-success">Info</button>
                                                    <button type="button"
                                                        class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false" data-display="static">
                                                        <span class="sr-only">Info</span>
                                                    </button>

                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Edit</a>
                                                        <a class="dropdown-item" href="#">Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img class="cat-thumb" src="assets/img/category/perfume.png" alt="Product Image" /></td>
                                            <td>Perfume</td>
                                            <td>
                                                <span class="ec-sub-cat-list">
                                                    <span class="ec-sub-cat-count" title="Total Sub Categories">4</span>
                                                    <span class="ec-sub-cat-tag">Clothes perfume</span>
                                                    <span class="ec-sub-cat-tag">deodorant </span>
                                                    <span class="ec-sub-cat-tag">Flower fragrance </span>
                                                    <span class="ec-sub-cat-tag">Air Freshener</span>
                                                </span>
                                            </td>
                                            <td>38</td>
                                            <td>1561</td>
                                            <td>ACTIVE</td>
                                            <td><span class="badge bg-primary">Medium</span></td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button"
                                                        class="btn btn-outline-success">Info</button>
                                                    <button type="button"
                                                        class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false" data-display="static">
                                                        <span class="sr-only">Info</span>
                                                    </button>

                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Edit</a>
                                                        <a class="dropdown-item" href="#">Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img class="cat-thumb" src="assets/img/category/cosmetics.png" alt="Product Image" /></td>
                                            <td>Cosmetics</td>
                                            <td>
                                                <span class="ec-sub-cat-list">
                                                    <span class="ec-sub-cat-count" title="Total Sub Categories">10</span>
                                                    <span class="ec-sub-cat-tag">Makeup kit</span>
                                                    <span class="ec-sub-cat-tag">Hair gel</span>
                                                    <span class="ec-sub-cat-tag">sunscreen</span>
                                                    <span class="ec-sub-cat-tag">facewash</span>
                                                    <span class="ec-sub-cat-tag">Body shop</span>
                                                    <span class="ec-sub-cat-tag">Lipstick</span>
                                                    <span class="ec-sub-cat-tag">eye liner</span>
                                                    <span class="ec-sub-cat-tag">Hair Shampoo</span>
                                                    <span class="ec-sub-cat-tag">Beauty Cream</span>
                                                    <span class="ec-sub-cat-tag">Skin Serum</span>
                                                </span>
                                            </td>
                                            <td>18</td>
                                            <td>1061</td>
                                            <td>ACTIVE</td>
                                            <td><span class="badge bg-danger">Low</span></td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button"
                                                        class="btn btn-outline-success">Info</button>
                                                    <button type="button"
                                                        class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false" data-display="static">
                                                        <span class="sr-only">Info</span>
                                                    </button>

                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Edit</a>
                                                        <a class="dropdown-item" href="#">Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img class="cat-thumb" src="assets/img/category/glasses.png" alt="Product Image" /></td>
                                            <td>Glasses</td>
                                            <td>
                                                <span class="ec-sub-cat-list">
                                                    <span class="ec-sub-cat-count" title="Total Sub Categories">2</span>
                                                    <span class="ec-sub-cat-tag">Sunglasses </span>
                                                    <span class="ec-sub-cat-tag">Lenses </span>
                                                </span>
                                            </td>
                                            <td>82</td>
                                            <td>10061</td>
                                            <td><span class="inactive">Inactive</span></td>
                                            <td><span class="badge bg-primary">Medium</span></td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button"
                                                        class="btn btn-outline-success">Info</button>
                                                    <button type="button"
                                                        class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false" data-display="static">
                                                        <span class="sr-only">Info</span>
                                                    </button>

                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Edit</a>
                                                        <a class="dropdown-item" href="#">Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img class="cat-thumb" src="assets/img/category/bag.png" alt="Product Image" /></td>
                                            <td>Bags</td>
                                            <td>
                                                <span class="ec-sub-cat-list">
                                                    <span class="ec-sub-cat-count" title="Total Sub Categories">4</span>
                                                    <span class="ec-sub-cat-tag">shopping bag</span>
                                                    <span class="ec-sub-cat-tag">Gym backpack</span>
                                                    <span class="ec-sub-cat-tag">purse </span>
                                                    <span class="ec-sub-cat-tag">wallet </span>
                                                </span>
                                            </td>
                                            <td>18</td>
                                            <td>3061</td>
                                            <td>ACTIVE</td>
                                            <td><span class="badge badge-success">Top</span></td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button"
                                                        class="btn btn-outline-success">Info</button>
                                                    <button type="button"
                                                        class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false" data-display="static">
                                                        <span class="sr-only">Info</span>
                                                    </button>

                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Edit</a>
                                                        <a class="dropdown-item" href="#">Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img class="cat-thumb" src="assets/img/category/footwear.png" alt="Product Image" /></td>
                                            <td>Footwear</td>
                                            <td>
                                                <span class="ec-sub-cat-list">
                                                    <span class="ec-sub-cat-count" title="Total Sub Categories">4</span>
                                                    <span class="ec-sub-cat-tag">Sports</span>
                                                    <span class="ec-sub-cat-tag">Casual</span>
                                                    <span class="ec-sub-cat-tag">safety shoes </span>
                                                    <span class="ec-sub-cat-tag">Sandal</span>
                                                </span>
                                            </td>
                                            <td>68</td>
                                            <td>5161</td>
                                            <td>ACTIVE</td>
                                            <td><span class="badge bg-primary">Medium</span></td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button"
                                                        class="btn btn-outline-success">Info</button>
                                                    <button type="button"
                                                        class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false" data-display="static">
                                                        <span class="sr-only">Info</span>
                                                    </button>

                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Edit</a>
                                                        <a class="dropdown-item" href="#">Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img class="cat-thumb" src="assets/img/category/jewelry.png" alt="Product Image" /></td>
                                            <td>Jewelry</td>
                                            <td>
                                                <span class="ec-sub-cat-list">
                                                    <span class="ec-sub-cat-count" title="Total Sub Categories">4</span>
                                                    <span class="ec-sub-cat-tag">necklace</span>
                                                    <span class="ec-sub-cat-tag">chain</span>
                                                    <span class="ec-sub-cat-tag">rings</span>
                                                    <span class="ec-sub-cat-tag">earings</span>
                                                </span>
                                            </td>
                                            <td>68</td>
                                            <td>5161</td>
                                            <td><span class="inactive">Inactive</span></td>
                                            <td><span class="badge badge-success">Top</span></td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button"
                                                        class="btn btn-outline-success">Info</button>
                                                    <button type="button"
                                                        class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false" data-display="static">
                                                        <span class="sr-only">Info</span>
                                                    </button>

                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Edit</a>
                                                        <a class="dropdown-item" href="#">Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img class="cat-thumb" src="assets/img/category/perfume.png" alt="Product Image" /></td>
                                            <td>Perfume</td>
                                            <td>
                                                <span class="ec-sub-cat-list">
                                                    <span class="ec-sub-cat-count" title="Total Sub Categories">4</span>
                                                    <span class="ec-sub-cat-tag">Clothes perfume</span>
                                                    <span class="ec-sub-cat-tag">deodorant </span>
                                                    <span class="ec-sub-cat-tag">Flower fragrance </span>
                                                    <span class="ec-sub-cat-tag">Air Freshener</span>
                                                </span>
                                            </td>
                                            <td>38</td>
                                            <td>1561</td>
                                            <td>ACTIVE</td>
                                            <td><span class="badge bg-primary">Medium</span></td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button"
                                                        class="btn btn-outline-success">Info</button>
                                                    <button type="button"
                                                        class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false" data-display="static">
                                                        <span class="sr-only">Info</span>
                                                    </button>

                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Edit</a>
                                                        <a class="dropdown-item" href="#">Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End Content -->
    </div> <!-- End Content Wrapper -->
    <div id="createFormModel" class="modal-wrapper" wire:ignore.self>
        <div class="overlay close-modal"></div>
        <div class="modal modal-centered">
            <div class="modal-content shadow-lg p-5">
                <div class="border-b p-2 pb-3 pt-0 mb-4">
                    <div class="flex justify-between items-center">
                        Send Mail to Vendor
                        <span class="close-modal cursor-pointer px-3 py-1 rounded-full bg-gray-100 hover:bg-gray-200">
                            <i class="fas fa-times text-gray-700"></i>
                        </span>
                    </div>
                </div>
                <!-- Modal content -->
                <form id="form_id" class="w-full" wire:submit.prevent='save'>
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1"
                            for="grid-first-name">
                            Category Name
                        </label>
                        <input
                            class=" block w-full bg-gray-200 text-gray-700 border border-black-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white-500"
                             id="grid-first-name" type="text" wire:model='category_name'>
                        @error('category_name')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1"
                            for="grid-first-name">
                            Category Image
                        </label>
                        <input
                            class=" block w-full bg-gray-200 text-gray-700 border border-black-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white-500"
                             id="grid-first-name" type="file" wire:model='image'>
                             {{$image}}
                    </div>

                    <div class="mt-5">
                        <button class="bg-green-500 hover:bg-green-800 text-white font-bold py-2 px-4 rounded"> Submit
                        </button>
                        <span
                            class="close-modal cursor-pointer bg-red-200 hover:bg-red-500 text-red-900 font-bold py-2 px-4 rounded">
                            Close
                        </span>
                    </div>
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
                        Send Mail to Vendor
                        <span class="close-modal cursor-pointer px-3 py-1 rounded-full bg-gray-100 hover:bg-gray-200">
                            <i class="fas fa-times text-gray-700"></i>
                        </span>
                    </div>
                </div>
                <!-- Modal content -->
                <form id="form_id" class="w-full" wire:submit.prevent='update({{$edit_id}})'>
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1"
                            for="grid-first-name">
                            Category Name
                        </label>
                        <input
                            class=" block w-full bg-gray-200 text-gray-700 border border-black-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white-500"
                             id="grid-first-name" type="text" wire:model='edit_category_name'>
                        @error('edit_category_name')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1"
                            for="grid-first-name">
                            Vendor Email
                        </label>
                        <input
                            class=" block w-full bg-gray-200 text-gray-700 border border-black-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white-500"
                             id="grid-first-name" type="file" wire:model='new_image'>

                             {{$new_image}}
                             <input type="text" wire:model="{{$old_image}}" id="">
                    </div>

                    <div class="mt-5">
                        <button class="bg-green-500 hover:bg-green-800 text-white font-bold py-2 px-4 rounded"> Submit
                        </button>
                        <span
                            class="close-modal cursor-pointer bg-red-200 hover:bg-red-500 text-red-900 font-bold py-2 px-4 rounded">
                            Close
                        </span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
