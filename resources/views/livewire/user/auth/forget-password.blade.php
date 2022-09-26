<div>
    <x-slot name='title'>Forget Password</x-slot>
    <div class="container">
        <div class="listing-title">
            <h1><span></span></h1>
        </div>
        <div class="breadcrumbs custom-font theme-clearfix">
            <ul class="breadcrumb">
                <li><a href="https://demo.wpthemego.com/themes/sw_revo">Home</a><span class="go-page"></span></li>
                <li class="active"><span>My Account</span></li>
            </ul>
        </div>
    </div>
    <div class="container">
        @if (session()->has('error'))
            <div class="alert alert-danger">{!! session('error') !!}</div>
        @endif
        <div class="row">

            <div id="contents" role="main" class="main-page  col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="post-7 page type-page status-publish hentry">
                    <div class="entry-content">
                        <div class="entry-summary">
                            <div class="woocommerce">
                                <div class="woocommerce-notices-wrapper"></div>
                                <form class="woocommerce-ResetPassword lost_reset_password" wire:submit.prevent='forgetPassword'>
                                    @csrf
                                    <p>Lost your password? Please enter your username or email address. You will receive
                                        a link to create a new password via email.</p>
                                    <p class="woocommerce-form-row woocommerce-form-row--first form-row form-row-first">
                                        <label for="user_login">Username or email</label>
                                        <input class="woocommerce-Input woocommerce-Input--text input-text"
                                            type="text" wire:model.lazy="email"  autocomplete="username">
                                    </p>
                                    <div class="clear"></div>
                                    <p class="woocommerce-form-row form-row">
                                        <button type="submit" class="woocommerce-Button button"
                                            value="Reset password">Reset password</button>
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>


                </div>
            </div>
        </div>
    </div>
</div>
