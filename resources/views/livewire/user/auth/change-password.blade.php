<div>
    <x-slot name='title'>Change Password</x-slot>
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
        <div class="row">

            <div id="contents" role="main" class="main-page  col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="post-7 page type-page status-publish hentry">
                    <div class="entry-content">
                        <div class="entry-summary">
                        <div class="woocommerce">
                                <div class="woocommerce-notices-wrapper"></div>
                                <div class="col2-set" id="change Password">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <h2>Change Password</h2>
                                            <form wire:submit.prevent='changePassword' class="woocommerce-form woocommerce-form-login login">

                                                <p class="form-row form-row-wide">
                                                    <label for="username">New Password&nbsp;<span
                                                            class="required">*</span></label>
                                                    <input type="text" class="input-text" wire:model.lazy="new_password"
                                                        >
                                                </p>
                                                <p class="form-row form-row-wide">
                                                    <label for="password">Comfirm Password &nbsp;<span
                                                            class="required">*</span></label>
                                                    <input class="input-text" type="password"  wire:model.lazy="c_password">
                                                </p>
                                                <p class="form-row">
                                                    <input type="submit"
                                                        class="button" name="login" value="Change Password">
                                                </p>
                                                <p class="lost_password">
                                                    <a
                                                        href="https://demo.wpthemego.com/themes/sw_revo/my-account/lost-password/">Lost
                                                        your password?</a>
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
