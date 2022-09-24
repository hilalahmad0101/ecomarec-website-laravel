<div>
    <x-slot name='title'>Addresses</x-slot>
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
                                  @if (session()->has('success'))
                                  <div class="woocommerce-notices-wrapper">
                                    <div class="woocommerce-message" role="alert"> {{session('success')}}</div>
                                </div>

                                  @endif
                                    <p>
                                        The following addresses will be used on the checkout page by default.</p>

                                    <div class="u-columns woocommerce-Addresses col2-set addresses">


                                        <div class="u-column1 col-1 woocommerce-Address">
                                            <header class="woocommerce-Address-title title">
                                                <h3>Billing address</h3>
                                                <a href="{{ route('user.billing-address') }}"
                                                    class="edit">{{$billing_addresses  == null? 'Add':'Edit'}}</a>
                                            </header>
                                            @if ($billing_addresses != null)
                                            <address>
                                                {{$billing_addresses->first_name}} {{$billing_addresses->last_name}}<br>{{$billing_addresses->company_name}}<br>{{$billing_addresses->street_address1}}<br>{{$billing_addresses->city}}<br>{{$billing_addresses->state}}<br>{{$billing_addresses->postcode}}<br>{{$billing_addresses->country}} </address>
                                                @endif

                                        </div>


                                        <div class="u-column2 col-2 woocommerce-Address">
                                            <header class="woocommerce-Address-title title">
                                                <h3>Shipping address</h3>
                                                <a href="{{ route('user.shipping-address') }}"
                                                    class="edit">{{$shipping_addresses  == null? 'Add':'Edit'}}</a>
                                            </header>
                                                @if ($shipping_addresses != null)
                                            <address>
                                                {{$shipping_addresses->first_name}} {{$shipping_addresses->last_name}}<br>{{$shipping_addresses->company_name}}<br>{{$shipping_addresses->street_address1}}<br>{{$shipping_addresses->city}}<br>{{$shipping_addresses->state}}<br>{{$shipping_addresses->postcode}}<br>{{$shipping_addresses->country}} </address>
                                                @endif
                                               
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
