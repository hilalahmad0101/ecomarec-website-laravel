<div>
    <x-slot name='title'>My Account</x-slot>

    <div class="container">
        <div class="container">
            <div class="listing-title">
                <h1><span></span></h1>
            </div>
            <div class="breadcrumbs custom-font theme-clearfix">
                <ul class="breadcrumb">
                    <li><a href="https://demo.wpthemego.com/themes/sw_revo/wc_vendor">Home</a><span
                            class="go-page"></span></li>
                    <li class="active"><span>My Account</span></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div id="contents" role="main" class="main-page  col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="post-7 page type-page status-publish hentry">
                    <div class="entry-content">
                        <div class="entry-summary">
                            <div class="woocommerce">
                                @if (session()->has('error'))
                                     <ul class="woocommerce-error" role="alert">
                                    <li>
                                        <strong>Error</strong>: {!! session('error') !!}
                                    </li>
                                </ul>
                                @endif

                                @if (session()->has('verified'))
                                <ul class="woocommerce-error" role="alert">
                               <li>
                                   <strong>Error</strong>: {!! session('verified') !!}  <a
                                   href='{{route('user.verify-account')}}'>Verified Account</a>
                               </li>
                           </ul>
                           @endif
                               

                                <div class="woocommerce-notices-wrapper"></div>
                                <div class="col2-set" id="customer_login">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12">


                                            <h2>Login</h2>

                                            <form method="post" wire:submit.prevent='login' class="woocommerce-form woocommerce-form-login login">

                                                @csrf
                                                <p class="form-row form-row-wide">
                                                    <label for="reg_email">Email address &nbsp;<span
                                                            class="required">*</span></label>
                                                    <input type="email" class="input-text" wire:model="login_email"
                                                        id="reg_email" value="">
                                                    @error('login_email')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </p>


                                                <p class="form-row form-row-wide">
                                                    <label for="reg_password">Password &nbsp;<span
                                                            class="required">*</span></label>
                                                    <input type="password" class="input-text" wire:model="login_password"
                                                        id="reg_password">
                                                    @error('login_password')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </p>

                                                <div class="clear"></div>
                                                <div class="woocommerce-privacy-policy-text"></div>
                                                <p class="form-row">
                                                    <button type="submit" class="woocommerce-Button button"
                                                        name="login" value="Login">Login</button>
                                                </p>

                                                <p class="lost_password">
                                                    <a
                                                        href="https://demo.wpthemego.com/themes/sw_revo/wc_vendor/my-account/lost-password/">Lost
                                                        your password?</a>
                                                </p>


                                            </form>


                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <h2>Register</h2>

                                            <form method="post" wire:submit.prevent='create'
                                                class="woocommerce-form woocommerce-form-register register">
                                                @csrf
                                                <p class="form-row form-row-wide">
                                                    <label for="reg_email">Email address &nbsp;<span
                                                            class="required">*</span></label>
                                                    <input type="email" class="input-text" wire:model="email"
                                                        id="reg_email" value="">
                                                    @error('email')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </p>


                                                <p class="form-row form-row-wide">
                                                    <label for="reg_password">Password &nbsp;<span
                                                            class="required">*</span></label>
                                                    <input type="password" class="input-text" wire:model="password"
                                                        id="reg_password">
                                                    @error('password')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </p>

                                                <div class="clear"></div>
                                                <div class="woocommerce-privacy-policy-text"></div>
                                                <p class="form-row">
                                                    <button type="submit" class="woocommerce-Button button"
                                                        name="register" value="Register">Register</button>
                                                </p>


                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>


                </div>
            </div>
        </div>
    </div>
</div>
