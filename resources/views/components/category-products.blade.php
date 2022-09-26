@props(['title','image','price','sale_price','id'])

<div class="item  product clearfix">
    <div class="item-wrap">
        <div class="item-detail">
            <div class="item-img products-thumb">
                <a href="{{ route('product-detail', ['id'=>$id]) }}"><img
                            width="300" height="300"
                            src="{{$image}}"
                            class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="ut labore et do"
                            srcset="{{$image}} 300w, {{ asset('wp-content/uploads/2016/10/f25-100x100.jpg') }} 100w, {{ asset('wp-content/uploads/2016/10/f25.jpg') }} 600w, {{ asset('wp-content/uploads/2016/10/f25-150x150.jpg') }} 150w"
                            sizes="(max-width: 300px) 100vw, 300px"></noscript></a>
                </a>
                <div class="">
                    <span class="onsale">Sale!</span>
                </div>
                <div class="">
                    <span class="onsale">Sale!</span>
                </div>
            </div>
            <div class="item-content">
                <h4><a href="{{ route('product-detail', ['id'=>$id]) }}" title="{{$title}}">{{$title}}</a>
                </h4>
                <!-- price -->
                <div class="item-price">
                    <span>
                        <span class="woocommerce-Price-amount amount"><bdi><span
                                    class="woocommerce-Price-currencySymbol">&#36;</span>{{$sale_price}}</bdi></span>
                        &ndash;
                        <span class="woocommerce-Price-amount amount"><bdi><span
                                    class="woocommerce-Price-currencySymbol">&#36;</span>{{$price}}</bdi></span>
                    </span>
                </div>
                <div class="item-bottom clearfix">
                    <a href="{{ route('product-detail', ['id'=>$id]) }}" data-quantity="1"
                        class="button product_type_variable add_to_cart_button" data-product_id="1089"
                        data-product_sku="" aria-label="Select options for &ldquo;ut labore et do&rdquo;"
                        rel="nofollow">View Details</a>
                    <div class="yith-wcwl-add-to-wishlist add-to-wishlist-1089  wishlist-fragment on-first-load"
                        data-fragment-ref="1089"
                        data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:false,&quot;is_single&quot;:false,&quot;show_exists&quot;:false,&quot;product_id&quot;:1089,&quot;parent_product_id&quot;:1089,&quot;product_type&quot;:&quot;variable&quot;,&quot;show_view&quot;:false,&quot;browse_wishlist_text&quot;:&quot;Browse Wishlist&quot;,&quot;already_in_wishslist_text&quot;:&quot;The product is already in the wishlist!&quot;,&quot;product_added_text&quot;:&quot;Product added!&quot;,&quot;heading_icon&quot;:&quot;&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:false,&quot;item&quot;:&quot;add_to_wishlist&quot;}">

                        <!-- ADD TO WISHLIST -->

                        <div class="yith-wcwl-add-button">
                            <a href="#" wire:click.preven='addToWishlist({{$id}})' rel="nofollow" data-product-id="{{$id}}"
                                data-product-type="variable" data-original-product-id="{{$id}}"
                                class="add_to_wishlist single_add_to_wishlist" data-title="Add to Wishlist">
                                <span>Add
                                    to
                                    Wishlist</span>
                            </a>
                        </div>
                        <!-- COUNT TEXT -->

                    </div>
                    <a href="javascript:void(0)" class="compare button" data-product_id="1089"
                        rel="nofollow">Compare</a>
                </div>
            </div>
        </div>
    </div>
</div>

