<div>
    <x-slot name='title'>Update Profile</x-slot>
    <!-- CONTENT WRAPPER -->
    <div class="ec-content-wrapper">
        <div class="content">
            <div class="breadcrumb-wrapper breadcrumb-contacts">
                <div>
                    <h1>User Profile</h1>
                    <p class="breadcrumbs"><span><a href="index.html">Home</a></span>
                        <span><i class="mdi mdi-chevron-right"></i></span>Profile
                    </p>
                </div>
            </div>
            <div class="card bg-white profile-content">
                <div class="row">
                    <div class="col-lg-8 col-xl-9">
                        @if (session()->has('success'))
                            <span style="color:green">{{ session('success') }}</span>
                        @endif
                        @if (session()->has('error'))
                            <span style="color:red">{{ session('error') }}</span>
                        @endif
                        <div class="profile-content-right profile-right-spacing py-5">
                            <ul class="nav nav-tabs px-3 px-xl-5 nav-style-border" id="myProfileTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="settings-tab" data-bs-toggle="tab"
                                        data-bs-target="#settings" type="button" role="tab"
                                        aria-controls="settings" aria-selected="false">Settings</button>
                                </li>
                            </ul>
                            <div class="tab-content px-3 px-xl-5" id="myTabContent">
                                <div class="tab-pane-content mt-5">
                                    <form wire:submit.prevent='updateProfile'>
                                        {{-- <div class="form-group row mb-6">
                                            <label for="coverImage" class="col-sm-4 col-lg-2 col-form-label">User
                                                Image</label>
                                            <div class="col-sm-8 col-lg-10">
                                                <div class="custom-file mb-1">
                                                    <input type="file" class="custom-file-input" id="coverImage"
                                                        required>
                                                    <label class="custom-file-label" for="coverImage">Choose
                                                        file...</label>
                                                    <div class="invalid-feedback">Example invalid custom
                                                        file feedback</div>
                                                </div>
                                            </div>
                                        </div> --}}

                                        <div class="row mb-2">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="firstName">Full Name</label>
                                                    <input type="text" class="form-control" id=""
                                                        wire:model.lazy='full_name'>
                                                    @error('full_name')
                                                        <span style="color:red">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="lastName">User Name</label>
                                                    <input type="text" class="form-control"
                                                        wire:model.lazy='username'>
                                                    @error('username')
                                                        <span style="color:red">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        {{-- 
                                        <div class="form-group mb-4">
                                            <label for="userName">User name</label>
                                            <input type="text" class="form-control" id="userName" value="User name">
                                            <span class="d-block mt-1">Accusamus nobis at omnis consequuntur
                                                culpa tempore saepe animi.</span>
                                        </div> --}}

                                        <div class="form-group mb-4">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" wire:model.lazy='email'>
                                            @error('email')
                                                <span style="color:red">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group mb-4">
                                            <label for="oldPassword">Old password</label>
                                            <input type="password" class="form-control" wire:model.lazy="oldPassword">
                                        </div>

                                        <div class="form-group mb-4">
                                            <label for="newPassword">New password</label>
                                            <input type="password" class="form-control" wire:model.lazy="newPassword">
                                        </div>

                                        <div class="form-group mb-4">
                                            <label for="conPassword">Confirm password</label>
                                            <input type="password" class="form-control" wire:model.lazy="conPassword">
                                        </div>

                                        <div class="d-flex justify-content-end mt-5">
                                            <button type="submit" class="btn btn-primary mb-2 btn-pill">Update
                                                Profile</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End Content -->
    </div> <!-- End Content Wrapper -->
</div>
