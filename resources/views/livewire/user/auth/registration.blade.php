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
                                {{-- <ul class="woocommerce-error" role="alert">
                                    <li>
                                        <strong>Error</strong>: The password you entered for the email address
                                        <strong>programmerhero6@gmail.com</strong> is incorrect. <a
                                            href="https://demo.wpthemego.com/themes/sw_revo/wc_vendor/my-account/lost-password/">Lost
                                            your password?</a>
                                    </li>
                                </ul> --}}

                                <div class="woocommerce-notices-wrapper"></div>
                                <div class="col2-set" id="customer_login">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12">


                                            <h2>Login</h2>

                                            <form method="post" class="woocommerce-form woocommerce-form-login login">


                                                <p class="form-row form-row-wide">
                                                    <label for="username">Username or email address &nbsp;<span
                                                            class="required">*</span></label>
                                                    <input type="text" class="input-text" name="username"
                                                        id="username" value="">
                                                </p>
                                                <p class="form-row form-row-wide">
                                                    <label for="password">Password &nbsp;<span
                                                            class="required">*</span></label>
                                                    <input class="input-text" type="password" name="password"
                                                        id="password" value="">
                                                </p>

                                                <p class="form-row">
                                                    <label for="rememberme" class="inline">
                                                        <input name="rememberme" type="checkbox" id="rememberme"
                                                            value="forever"> Remember me </label>
                                                </p>
                                                <p class="form-row">
                                                    <input type="hidden" id="woocommerce-login-nonce"
                                                        name="woocommerce-login-nonce" value="86203eb48a"><input
                                                        type="hidden" name="_wp_http_referer"
                                                        value="/themes/sw_revo/wc_vendor/my-account/"> <input
                                                        type="submit" class="button" name="login" value="Login">
                                                </p>
                                                <p class="lost_password">
                                                    <a
                                                        href="https://demo.wpthemego.com/themes/sw_revo/wc_vendor/my-account/lost-password/">Lost
                                                        your password?</a>
                                                </p>


                                            </form>


                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            @csrf
                                            <h2>Register</h2>

                                            <form method="post" wire:submit.prevent='create'
                                                class="woocommerce-form woocommerce-form-register register">

                                                <p class="form-row form-row-wide">
                                                    <label for="reg_email">Email address &nbsp;<span
                                                            class="required">*</span></label>
                                                    <input type="email" class="input-text" wire:model="email"
                                                        id="reg_email" value="">
                                                        @error('email')
                                                            <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                </p>


                                                <p class="form-row form-row-wide">
                                                    <label for="reg_password">Password &nbsp;<span
                                                            class="required">*</span></label>
                                                    <input type="password" class="input-text" wire:model="password"
                                                        id="reg_password">
                                                        @error('password')
                                                        <span class="text-danger">{{$message}}</span>
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
