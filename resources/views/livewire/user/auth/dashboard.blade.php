<div>
    <x-slot name='title'>Dashboard</x-slot>
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
                                    <p>
                                        Hello <strong>{{Auth::user()->email}}</strong> (not <strong>{{Auth::user()->username}}</strong>?
                                        <a href="#">@livewire('user.auth.logout')</a>)</p>

                                    <p>
                                        From your account dashboard you can view your 
                                        <a href="https://demo.wpthemego.com/themes/sw_revo/wc_vendor/my-account/orders/">recent
                                            orders</a>, manage your 
                                            <a href="https://demo.wpthemego.com/themes/sw_revo/wc_vendor/my-account/edit-address/">shipping
                                            and billing addresses</a>, and <a href="https://demo.wpthemego.com/themes/sw_revo/wc_vendor/my-account/edit-account/">edit
                                            your password and account details</a>
                                    </p>
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
