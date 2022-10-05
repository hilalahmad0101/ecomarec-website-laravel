<div>
    <x-slot name='title'>Login</x-slot>
    <div class="container d-flex align-items-center justify-content-center form-height-login pt-24px pb-24px">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-10">
                <div class="card">
                    <div class="card-header bg-primary">
                        <div class="ec-brand">
                            <a href="index.html" title="Ekka">
                                <img class="ec-brand-icon" src="assets/img/logo/logo-login.png" alt="" />
                            </a>
                        </div>
                    </div>
                    <div class="card-body p-5">
                        <h4 class="text-dark mb-5">Admin Login</h4>

                        <form wire:submit.prevent='login'>
                            @csrf
                            <div class="row">
                                <div class="form-group col-md-12 mb-4">
                                    <input type="text" wire:model.lazy='username' class="form-control" id="email" placeholder="Username">
                                    @error('username')
                                        <span style="color: rgb(197, 50, 50)">{{$message}}</span>
                                    @enderror
                                </div>

                                <div class="form-group col-md-12 ">
                                    <input type="password" wire:model.lazy='password' class="form-control" id="password" placeholder="Password">
                                    @error('password')
                                    <span style="color: red">{{$message}}</span>
                                @enderror
                                </div>

                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary btn-block mb-4">Sign In</button>
                                    <p class="sign-upp"></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
