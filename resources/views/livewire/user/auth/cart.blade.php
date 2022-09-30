<div>
    <x-slot name='title'>Cart</x-slot>
    <div class="breadcrumbs custom-font theme-clearfix">
        <ul class="breadcrumb">
            <li><a href="https://demo.wpthemego.com/themes/sw_revo/wc_vendor">Home</a><span class="go-page"></span></li>
            <li class="active"><span>Cart</span></li>
        </ul>
    </div>
    <div class="container">
        @if (session()->has('success'))
        <div class="woocommerce-notices-wrapper">
            <div class="woocommerce-message" role="alert">
                {{session('success')}}</div>
        </div>
        @endif
        <div class="row">
            @if (Auth::user()->verified != 1)
                <h5>Please Verified Your Account <a href="{{ route('user.verify-account') }}">Verified Account</a> </h5>
            @endif
            <div id="contents" role="main" class="main-page  col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="post-5 page type-page status-publish hentry">
                    <div class="entry-content">
                        <div class="entry-summary">
                            <div class="woocommerce">
                                <div class="woocommerce-notices-wrapper"></div>
                                    <table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents"
                                        cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th class="product-remove">&nbsp;</th>
                                                <th class="product-remove">&nbsp;</th>
                                                <th class="product-thumbnail">&nbsp;</th>
                                                <th class="product-name">Product</th>
                                                <th class="product-price">Price</th>
                                                <th class="product-quantity">Quantity</th>
                                                <th class="product-subtotal">Subtotal</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @forelse ($carts as $cart)
                                        <tr class="woocommerce-cart-form__cart-item cart_item">

                                            <td class="product-remove">
                                                <a href="#"
                                                    class="remove" wire:click.prevent="deleteCart({{$cart->id}})">×</a>
                                            </td>
                                            <td >
                                                <button  class="button" style="font-size: 13px;
                                                text-align: center;
                                                vertical-align: middle;" wire:click="updateUserCart({{$cart->id}})">Update cart</button>
                                            </td>
                                            <td class="product-thumbnail">
                                                <a
                                                    href="https://demo.wpthemego.com/themes/sw_revo/product/iste-natus-error/"><img
                                                        width="300" height="300"
                                                        src="{{$cart->products->image}}"
                                                        class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                        alt=""
                                                        sizes="(max-width: 300px) 100vw, 300px"></a>
                                            </td>

                                            <td class="product-name" data-title="Product">
                                                <a
                                                    href="https://demo.wpthemego.com/themes/sw_revo/product/iste-natus-error/">{{$cart->products->product_title}}</a>
                                                <dl class="variation">
                                                    <dt class="variation-Vendor">User:</dt>
                                                    <dd class="variation-Vendor">
                                                        <p>{{$cart->users->username}}</p>
                                                    </dd>
                                                </dl>
                                            </td>

                                            <td class="product-price" data-title="Price">
                                                <span class="woocommerce-Price-amount amount"
                                                    
                                                    data-price="{{$cart->products->price}}" title="Original price:{{$cart->products->price}}">${{$cart->products->price}}</span>
                                            </td>

                                            <td class="product-quantity" data-title="Quantity">
                                                <div class="quantity buttons_added"><input type="button"
                                                        value="-" class="minus"  wire:click="minus">
                                                    <label class="screen-reader-text"
                                                        for="quantity_632f27030e5a0">Iste natus error
                                                        quantity</label>
                                                    <input type="number" readonly id="quantity_632f27030e5a0"
                                                        class="input-text qty text" step="1" min="0"
                                                        max="" value="{{$cart->qty}}" 
                                                        title="Qty" size="4" placeholder=""
                                                        inputmode="numeric">
                                                    <input type="button" value="+" wire:click="plus" class="plus">
                                                </div>
                                            </td>

                                            <td class="product-subtotal" data-title="Subtotal">
                                                @php
                                                        $total=$cart->products->price * $cart->qty;
                                                @endphp
                                                <span class="woocommerce-Price-amount amount"
                                                    data-price="{{$total}}" title="Original price:{{$total}}">
                                                  {{$total}}
                                                </span>
                                            </td>
                                            
                                        </tr>
                                        @empty
                                            <tr>Record not found</tr>
                                        @endforelse
                                        <tr>
                                            <td colspan="6" class="actions">

                                                <div class="coupon">
                                                    <label for="coupon_code">Coupon:</label> <input type="text"
                                                        name="coupon_code" class="input-text" id="coupon_code"
                                                        value="" placeholder="Coupon code"> <button
                                                        type="submit" class="button" name="apply_coupon"
                                                        value="Apply coupon">Apply coupon</button>
                                                </div>

                                               
                                            </td>
                                        </tr>

                                         
                                        </tbody>
                                    </table>
                                <div class="cart-collaterals">
                                    <div class="products-wrapper">
                                        <div class="cart_totals ">


                                            <h2>Cart totals</h2>

                                            <table cellspacing="0" class="shop_table shop_table_responsive">

                                                <tbody>
                                                    <tr class="cart-subtotal">
                                                        <th>Subtotal</th>
                                                        <td data-title="Subtotal">
                                                            @php
                                                            $total=0;
                                                        @endphp
                                                        @foreach ($carts as $cart1)
                                                            @php
                                                                $total+=$cart1->total_price;
                                                            @endphp
                                                        @endforeach
                                                        <span
                                                                class="woocommerce-Price-amount amount"
                                                                title="Original price:{{$total}}">
                                                               
                                                                {{$total}}
                                                            </span></td>
                                                    </tr>
                                                    <tr class="order-total">
                                                        <th>Total</th>
                                                        <td data-title="Subtotal">
                                                            @php
                                                            $total=0;
                                                        @endphp
                                                        @foreach ($carts as $cart1)
                                                            @php
                                                                $total+=$cart1->total_price;
                                                            @endphp
                                                        @endforeach
                                                        <span
                                                                class="woocommerce-Price-amount amount"
                                                                title="Original price:{{$total}}">
                                                                {{$total}}
                                                            </span></td>
                                                    </tr>


                                                </tbody>
                                            </table>

                                            <div class="wc-proceed-to-checkout">

                                                @if (count($carts))
                                                <a href="{{ route('user.order') }}"
                                                class="checkout-button button alt wc-forward">
                                                Proceed to checkout</a>
                                                @endif
                                            </div>


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
