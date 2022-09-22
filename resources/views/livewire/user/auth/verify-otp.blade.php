<div>

    <x-slot name='title'>Verified Otp</x-slot>
    <div class="container">
        <div class="listing-title">
            <h1><span></span></h1>
        </div>
        <div class="breadcrumbs custom-font theme-clearfix">
            <ul class="breadcrumb">
                <li><a href="https://demo.wpthemego.com/themes/sw_revo/wc_vendor">Home</a><span class="go-page"></span>
                </li>
                <li class="active"><span>Verify Otp</span></li>
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
                                @if (Auth::user()->verified == 1)
                                    <ul class="woocommerce-success" role="alert">
                                        <li>
                                            <strong>Success</strong>: Your account is verified
                                        </li>
                                    </ul>
                                @else
                                    <ul class="woocommerce-success" role="alert">
                                        <li>
                                            <strong>{{ Auth::user()->email }}</strong> check mail and verified your
                                            account
                                        </li>
                                    </ul>
                                @if (session()->has('success'))
                                    <ul class="woocommerce-success" role="alert">
                                        <li>
                                            <strong>Success</strong>: {{ session('success') }}
                                        </li>
                                    </ul>
                                @endif

                                @if (session()->has('error'))
                                    <ul class="woocommerce-error" role="alert">
                                        <li>
                                            <strong>Error</strong>: {{ session('error') }}
                                        </li>
                                    </ul>
                                @endif

                                <div class="woocommerce-notices-wrapper"></div>
                                <div class="col2-set" id="customer_login">
                                    <div class="row d-flex justify-content-center">
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <h2>Verified Otp</h2>
                                            <form method="post" wire:submit.prevent='verifiedOtp'
                                                class="woocommerce-form woocommerce-form-login login">
                                                <p class="form-row form-row-wide">
                                                    <label for="username">Otp to Verified Account &nbsp;<span
                                                            class="required">*</span></label>
                                                    <input type="text" class="input-text" wire:model="otp"
                                                        id="username" value="">
                                                    @error('otp')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror

                                                </p>
                                                <p class="form-row">
                                                    <input type="submit" class="button" name="verified" value="Verify">
                                                </p>
                                                <p class="lost_password">
                                                    <span>If you not recived otp in 3 mint please click on : </span>
                                                    <a href="{{ route('resend-otp', ['id' => 1]) }}">Resend Otp</a>
                                                </p>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
