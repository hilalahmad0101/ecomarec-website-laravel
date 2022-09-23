<div>
    <x-slot name='title'>Account Details</x-slot>
    <div class="breadcrumbs custom-font theme-clearfix">
        <ul class="breadcrumb">
            <li><a href="https://demo.wpthemego.com/themes/sw_revo/wc_vendor">Home</a><span class="go-page"></span></li>
            <li class="active"><span>My Account</span></li>
        </ul>
    </div>
    <div class="container">
        <div class="row">
            @if (Auth::user()->verified != 1)
                <h5>Please Verified Your Account <a href="{{ route('user.verify-account') }}">Verified Account</a> </h5>
            @endif
            <div id="contents" role="main" class="main-page  col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="post-7 page type-page status-publish hentry">
                    <div class="entry-content">
                        <div class="entry-summary">
                            <div class="woocommerce">
                                <x-user-navigation />

                                <div class="woocommerce-MyAccount-content">
                                    <div class="woocommerce-notices-wrapper"></div>
                                    <form class="woocommerce-EditAccountForm edit-account"
                                        wire:submit.prevent='updateProfile' action="" method="post">
                                        @csrf
                                        <p
                                            class="woocommerce-form-row woocommerce-form-row--first form-row form-row-first">
                                            <label for="first_name">First name&nbsp;<span
                                                    class="required">*</span></label>
                                            <input type="text"
                                                class="woocommerce-Input woocommerce-Input--text input-text"
                                                wire:model="first_name" id="first_name" autocomplete="given-name" >
                                                @error('first_name')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                        </p>
                                        <p
                                            class="woocommerce-form-row woocommerce-form-row--last form-row form-row-last">
                                            <label for="last_name">Last name&nbsp;<span
                                                    class="required">*</span></label>
                                            <input type="text"
                                                class="woocommerce-Input woocommerce-Input--text input-text"
                                                wire:model="last_name" id="last_name" autocomplete="family-name">
                                                @error('last_name')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </p>
                                        <div class="clear"></div>

                                        <p
                                            class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                            <label for="username">Display name&nbsp;<span
                                                    class="required">*</span></label>
                                            <input type="text"
                                                class="woocommerce-Input woocommerce-Input--text input-text"
                                                wire:model="username" id="username" >
                                                @error('username')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                            <span><em>This will be how your name will be displayed in the account
                                                    section and in reviews</em></span>
                                        </p>
                                        <div class="clear"></div>
                                        <p
                                            class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                            <label for="email">Email address&nbsp;<span
                                                    class="required">*</span></label>
                                            <input type="email"
                                                class="woocommerce-Input woocommerce-Input--email input-text"
                                                wire:model="email" id="email" autocomplete="email" >
                                                @error('email')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </p>
                                        <fieldset>
                                            <legend>Password change</legend>
                                            <p
                                                class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                                <label for="password_current">Current password (leave blank to leave
                                                    unchanged)</label>
                                                <span class="password-input"><input type="password"
                                                        class="woocommerce-Input woocommerce-Input--password input-text"
                                                        name="password_current" id="password_current"
                                                        autocomplete="off"><span
                                                        class="show-password-input"></span></span>
                                            </p>
                                            <p
                                                class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                                <label for="password_1">New password (leave blank to leave
                                                    unchanged)</label>
                                                <span class="password-input"><input type="password"
                                                        class="woocommerce-Input woocommerce-Input--password input-text"
                                                        name="password_1" id="password_1" autocomplete="off"><span
                                                        class="show-password-input"></span></span>
                                            </p>
                                            <p
                                                class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                                <label for="password_2">Confirm new password</label>
                                                <span class="password-input"><input type="password"
                                                        class="woocommerce-Input woocommerce-Input--password input-text"
                                                        name="password_2" id="password_2" autocomplete="off"><span
                                                        class="show-password-input"></span></span>
                                            </p>
                                        </fieldset>
                                        <div class="clear"></div>


                                        <p>
                                             <button
                                                type="submit" class="woocommerce-Button button"
                                                name="save_account_details" value="Save changes">Save changes</button>
                                        </p>

                                    </form>

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
