<div>
    <x-slot name='title'>{{ $product->product_title }}</x-slot>
    <div style="margin: 20px">
        <div class="container">
            <div class="breadcrumbs custom-font theme-clearfix">
                <ul class="breadcrumb">
                    <li><a href="https://demo.wpthemego.com/themes/sw_revo">Home</a><span class="go-page"></span></li>
                    <li><a href="https://demo.wpthemego.com/themes/sw_revo/product-category/fashion/">{{$product->category->category_name}}</a><span
                            class="go-page"></span></li>
                    <li class="active"><span>{{$product->product_title}}</span></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container">
        <div id="search-product" class="content-list-category container">
            <div class="row">
                <x-category-navigation  :products="$product"/>
                <div id="contents-detail" class="content col-lg-9 col-md-9 col-sm-12" role="main">
                    <div id="primary" class="content-area">
                        <main id="main" class="site-main" role="main">
                            <div class="single-product clearfix">


                                <div class="woocommerce-notices-wrapper"></div>
                                <div id="product-963"
                                    class="post-963 product type-product status-publish has-post-thumbnail product_cat-fashion first instock featured shipping-taxable purchasable product-type-simple">
                                    <div class="product_detail row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 clear_xs">
                                            <div class="slider_img_productd">
                                                <!-- woocommerce_show_product_images -->
                                                <div id="product_img_963"
                                                    class="woocommerce-product-gallery woocommerce-product-gallery--with-images images product-images"
                                                    data-vertical="true" data-video="">
                                                    <figure class="woocommerce-product-gallery__wrapper">
                                                        <div class="product-images-container clearfix thumbnail-right">
                                                            <!-- Image Slider -->
                                                            <div
                                                                class="slider product-responsive slick-initialized slick-slider">
                                                                <a href="#"
                                                                    class="woocommerce-product-gallery__trigger">🔍</a>
                                                                <div aria-live="polite" class="slick-list draggable">
                                                                    <div class="slick-track" role="listbox"
                                                                        style="opacity: 1; width: 1515px;">
                                                                        <div data-thumb="https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/10-100x100.jpg"
                                                                            class="woocommerce-product-gallery__image slick-slide slick-current slick-active"
                                                                            data-slick-index="0" aria-hidden="false"
                                                                            tabindex="0" role="option"
                                                                            aria-describedby="slick-slide10"
                                                                            style="width: 303px; position: relative; left: 0px; top: 0px; z-index: 999; opacity: 1; overflow: hidden;">
                                                                            <a href="https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/10.jpg"
                                                                                tabindex="0"><img width="600"
                                                                                    height="600"
                                                                                    src="https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/10.jpg"
                                                                                    class="wp-post-image" alt=""
                                                                                    title="10" data-caption=""
                                                                                    data-src="https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/10.jpg"
                                                                                    data-large_image="https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/10.jpg"
                                                                                    data-large_image_width="600"
                                                                                    data-large_image_height="600"
                                                                                    srcset="https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/10.jpg 600w, https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/10-300x300.jpg 300w, https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/10-100x100.jpg 100w, https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/10-150x150.jpg 150w"
                                                                                    sizes="(max-width: 600px) 100vw, 600px"></a>
                                                                            <img role="presentation" alt=""
                                                                                src="https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/10.jpg"
                                                                                class="zoomImg"
                                                                                style="position: absolute; top: -84.297px; left: -104.391px; opacity: 0; width: 600px; height: 600px; border: none; max-width: none; max-height: none;">
                                                                        </div>
                                                                    </div>
                                                                </div>




                                                            </div>

                                                        </div>
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 clear_xs">
                                            <div class="content_product_detail">
                                                <h1 class="product_title entry-title">{{$product->product_title}}</h1>
                                                <div class="reviews-content">
                                                    <div class="star">
                                                        <span style="width:0px"></span>
                                                    </div>
                                                    <a href="#reviews" class="woocommerce-review-link"
                                                        rel="nofollow"><span class="count">0</span> Review(s)</a>
                                                </div>

                                                <div itemprop="offers">
                                                    <p class="price"><span class="woocommerce-Price-amount amount"
                                                            data-original="<bdi><span class=&quot;woocommerce-Price-currencySymbol&quot;>$</span>80.00</bdi>"
                                                            data-price="{{$product->price}}" title="Original price:80">{{$product->price}}</span>
                                                    </p>
                                                </div>
                                                <div class="product-info product_meta">
                                                </div>
                                                <div class="description" itemprop="description">
                                                    <p>{{$product->short_content}}</p>
                                                </div>

                                                <form class="cart"
                                                    action="https://demo.wpthemego.com/themes/sw_revo/product/iste-natus-error/"
                                                    method="post" enctype="multipart/form-data">
                                                    @if (session()->has('success'))
                                                        <div class="alert alert-success">
                                                            {{session('success')}}
                                                        </div>
                                                    @endif
                                                    @if (session()->has('error'))
                                                    <div class="alert alert-danger">
                                                        {{session('error')}}
                                                    </div>
                                                @endif
                                                    <div class="addcart-wrapper single-buynow clearfix">
                                                        <div class="quantity buttons_added"><input type="button"
                                                                value="-" class="minus" wire:click='minus'>
                                                            <label class="screen-reader-text"
                                                                for="quantity_632eb7c0af8ee">Iste natus error
                                                                quantity</label>
                                                            <input type="number" id="quantity_632eb7c0af8ee"
                                                                class="input-text qty text" step="1"
                                                                min="1" max="" name="quantity"
                                                                wire:model='qty' title="Qty" size="4"
                                                                placeholder="" inputmode="numeric">
                                                            <input type="button" value="+" wire:click='plus' class="plus">
                                                        </div>

                                                        <button type="submit" name="add-to-cart" 
                                                            class="single_add_to_cart_button button alt" wire:click.prevent='addToCart({{$product->owner_id}})'>Add to
                                                            cart</button>

                                                        <a class="button-buynow"
                                                            href="https://demo.wpthemego.com/themes/sw_revo/checkout/?add-to-cart=963&amp;quantity=1"
                                                            data-url="https://demo.wpthemego.com/themes/sw_revo/checkout/?add-to-cart=963">Buy
                                                            Now</a>
                                                        <div class="clear"></div>
                                                        <div class="item-bottom">
                                                            <div class="yith-wcwl-add-to-wishlist add-to-wishlist-963  wishlist-fragment on-first-load"
                                                                data-fragment-ref="963"
                                                                data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:false,&quot;is_single&quot;:true,&quot;show_exists&quot;:false,&quot;product_id&quot;:963,&quot;parent_product_id&quot;:963,&quot;product_type&quot;:&quot;simple&quot;,&quot;show_view&quot;:true,&quot;browse_wishlist_text&quot;:&quot;Browse Wishlist&quot;,&quot;already_in_wishslist_text&quot;:&quot;The product is already in the wishlist!&quot;,&quot;product_added_text&quot;:&quot;Product added!&quot;,&quot;heading_icon&quot;:&quot;&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:false,&quot;item&quot;:&quot;add_to_wishlist&quot;}">

                                                                <!-- ADD TO WISHLIST -->

                                                                <div class="yith-wcwl-add-button">
                                                                    <a href="?add_to_wishlist=963" rel="nofollow"
                                                                        data-product-id="963"
                                                                        data-product-type="simple"
                                                                        data-original-product-id="963"
                                                                        class="add_to_wishlist single_add_to_wishlist"
                                                                        data-title="Add to Wishlist"
                                                                        title="Add To WishList">
                                                                        <span>Add to Wishlist</span>
                                                                    </a>
                                                                </div>
                                                                <!-- COUNT TEXT -->

                                                            </div><a href="javascript:void(0)" class="compare button"
                                                                data-product_id="963" rel="nofollow"
                                                                title="Add To Compare">Compare</a>
                                                        </div>
                                                    </div>
                                                </form>


                                                <div class="social-share">
                                                    <div class="title-share">Share</div>
                                                    <div class="wrap-content">
                                                        <a href="http://www.facebook.com/share.php?u=https://demo.wpthemego.com/themes/sw_revo/product/iste-natus-error/&amp;title=Iste natus error"
                                                            onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i
                                                                class="fa fa-facebook"></i></a>
                                                        <a href="http://twitter.com/home?status=Iste natus error+https://demo.wpthemego.com/themes/sw_revo/product/iste-natus-error/"
                                                            onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i
                                                                class="fa fa-twitter"></i></a>
                                                        <a href="http://pinterest.com/pin/create/button/?url=https://demo.wpthemego.com/themes/sw_revo/product/iste-natus-error/&amp;description=Iste natus error"
                                                            class="pin-it-button" count-layout="horizontal"><i
                                                                class="fa fa-pinterest"></i></a>
                                                    </div>
                                                </div>
                                                <div class="item-meta">
                                                    <span class="posted_in">Category: <a
                                                            href="https://demo.wpthemego.com/themes/sw_revo/product-category/fashion/"
                                                            rel="tag">{{$product->category->category_name}}</a></span>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tabs clearfix">

                                    <div class="tabbable">
                                        <ul class="nav nav-tabs">

                                            <li class="description_tab active">
                                                <a href="#tab-description" data-toggle="tab">Description</a>
                                            </li>

                                            <li class="reviews_tab ">
                                                <a href="#tab-reviews" data-toggle="tab">Reviews (0)</a>
                                            </li>

                                            <li class="seller_tab ">
                                                <a href="#tab-seller" data-toggle="tab">Vendor Info</a>
                                            </li>

                                            <li class="more_seller_product_tab ">
                                                <a href="#tab-more_seller_product" data-toggle="tab">More Products</a>
                                            </li>
                                        </ul>
                                        <div class="clear"></div>
                                        <div class=" tab-content">

                                            <div class="tab-pane active" id="tab-description">

                                                <h2>Description</h2>

                                                <p>{{$product->long_content}}</p>
                                            </div>

                                            <div class="tab-pane " id="tab-reviews">
                                                <div id="reviews" class="woocommerce-Reviews">
                                                    <div id="comments">
                                                        <h2 class="woocommerce-Reviews-title">
                                                            Reviews </h2>

                                                        <p class="woocommerce-noreviews">There are no reviews yet.</p>
                                                    </div>

                                                    <div id="review_form_wrapper">
                                                        <div id="review_form">
                                                            <div id="respond" class="comment-respond">
                                                                <span id="reply-title" class="comment-reply-title">Be
                                                                    the first to review “Iste natus error” <small><a
                                                                            rel="nofollow"
                                                                            id="cancel-comment-reply-link"
                                                                            href="/themes/sw_revo/product/iste-natus-error/#respond"
                                                                            style="display:none;">Cancel
                                                                            reply</a></small></span>
                                                                <p class="must-log-in">You must be <a
                                                                        href="https://demo.wpthemego.com/themes/sw_revo/my-account/">logged
                                                                        in</a> to post a review.</p>
                                                            </div><!-- #respond -->
                                                        </div>
                                                    </div>

                                                    <div class="clear"></div>
                                                </div>
                                            </div>

                                            <div class="tab-pane " id="tab-seller">

                                                <h2>Vendor Information</h2>

                                                <ul class="list-unstyled">

                                                    <li class="store-name">
                                                        <span>Store Name:</span>
                                                        <span class="details">
                                                            admin </span>
                                                    </li>

                                                    <li class="seller-name">
                                                        <span>
                                                            Vendor: </span>

                                                        <span class="details">
                                                            <a
                                                                href="https://demo.wpthemego.com/themes/sw_revo/store/wpthemego/">wpthemego</a>
                                                        </span>
                                                    </li>
                                                    <li class="store-address">
                                                        <span><b>Address:</b></span>
                                                        <span class="details">
                                                        </span>
                                                    </li>

                                                    <li class="clearfix">
                                                        <span class="seller-rating">
                                                            <span title=" Rated 4.86 out of 5" class="star-rating">
                                                                <span class="width" style="width: 97.2%"></span>
                                                                <span><strong>4.86</strong></span>
                                                            </span>
                                                        </span>
                                                        <span class="text">4.86 rating from 21 reviews</span>
                                                    </li>

                                                </ul>
                                            </div>

                                            <div class="tab-pane " id="tab-more_seller_product">
                                                <ul class="products-loop row grid clearfix" id="product_listing">
                                                    @forelse ($relatedProducts as $products)
                                                    <li
                                                        class="item col-lg-3 col-md-4 col-sm-6 col-xs-6 post-1387 product type-product status-publish has-post-thumbnail product_cat-boys first instock featured shipping-taxable purchasable product-type-simple">
                                                        <div class="products-entry item-wrap clearfix">
                                                            <div class="item-detail">
                                                                <div class="item-img products-thumb">
                                                                    <a
                                                                        href="https://demo.wpthemego.com/themes/sw_revo/product/tatis-et-quasi/"><img
                                                                                width="300" height="300"
                                                                                src="{{$products->image}}"
                                                                                class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                                                alt="tatis et quasi"
                                                                                srcset="https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/16-1-300x300.jpg 300w, https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/16-1-100x100.jpg 100w, https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/16-1-150x150.jpg 150w"
                                                                                sizes="(max-width: 300px) 100vw, 300px"></noscript></a>
                                                                <div class="item-content products-content">
                                                                    <h4><a href="https://demo.wpthemego.com/themes/sw_revo/product/tatis-et-quasi/"
                                                                            title="tatis et quasi">{{$products->product_title}}</a>
                                                                    </h4>

                                                                    <div class="reviews-content">
                                                                        <div class="star">
                                                                            <span style="width: 0px"></span>
                                                                        </div>
                                                                    </div>
                                                                    <span class="item-price"><span
                                                                            class="woocommerce-Price-amount amount"
                                                                            data-original="<bdi><span class=&quot;woocommerce-Price-currencySymbol&quot;>$</span>85.00</bdi>"
                                                                            data-price="85"
                                                                            title="Original price:{{$products->price}}">{{$products->price}}</span></span>
                                                                    <div class="item-description">{{$products->short_content}}
                                                                    </div>
                                                                    <div class="item-bottom clearfix"><a wire:click.prevent='addToCart({{$products->owner_id}})'
                                                                            href="#" 
                                                                            class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                                            title="Add To Cart">Add to
                                                                            cart</a>
                                                                        <div class="yith-wcwl-add-to-wishlist add-to-wishlist-1387  wishlist-fragment on-first-load"
                                                                            data-fragment-ref="1387"
                                                                            data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:false,&quot;is_single&quot;:true,&quot;show_exists&quot;:false,&quot;product_id&quot;:1387,&quot;parent_product_id&quot;:1387,&quot;product_type&quot;:&quot;simple&quot;,&quot;show_view&quot;:true,&quot;browse_wishlist_text&quot;:&quot;Browse Wishlist&quot;,&quot;already_in_wishslist_text&quot;:&quot;The product is already in the wishlist!&quot;,&quot;product_added_text&quot;:&quot;Product added!&quot;,&quot;heading_icon&quot;:&quot;&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:false,&quot;item&quot;:&quot;add_to_wishlist&quot;}">

                                                                            <!-- ADD TO WISHLIST -->

                                                                            <div class="yith-wcwl-add-button">
                                                                                <a href="?add_to_wishlist=1387"
                                                                                    rel="nofollow"
                                                                                    data-product-id="1387"
                                                                                    data-product-type="simple"
                                                                                    data-original-product-id="1387"
                                                                                    class="add_to_wishlist single_add_to_wishlist"
                                                                                    data-title="Add to Wishlist"
                                                                                    title="Add To WishList">
                                                                                    <span>Add to Wishlist</span>
                                                                                </a>
                                                                            </div>
                                                                            <!-- COUNT TEXT -->

                                                                        </div><a href="javascript:void(0)"
                                                                            class="compare button"
                                                                            data-product_id="1387" rel="nofollow"
                                                                            title="Add To Compare">Compare</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    @empty
                                                    <h3>Related Products</h3>
                                                    @endforelse
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                {{-- <div class="bottom-single-product theme-clearfix">
                                    <div id="sw_related_upsell_widget-4"
                                        class="widget-1 widget-first widget sw_related_upsell_widget-4 sw_related_upsell_widget"
                                        data-scroll-reveal="enter bottom move 20px wait 0.2s">
                                        <div class="widget-inner">
                                            <div id="reup_sw_related_upsell_widget-4" class="product-ur">
                                                <div id="tab_sw_related_upsell_widget-4" class="tabbable tabs">
                                                    <ul class="nav nav-tabs">
                                                        <li class="active">
                                                            <a href="#single_related" data-toggle="tab">Related
                                                                Products</a>
                                                        </li>
                                                    </ul>
                                                    <div class="tab-content">
                                                        <div id="single_related" class="tab-pane active">
                                                            <div id="slider_sw_related_upsell_widget-4"
                                                                class="sw-woo-container-slider related-products responsive-slider clearfix"
                                                                data-lg="4" data-md="3" data-sm="3"
                                                                data-xs="2" data-mobile="1" data-speed="1000"
                                                                data-scroll="1" data-interval="5000"
                                                                data-autoplay="true"><span data-role="none"
                                                                    class="res-button slick-prev slick-arrow"
                                                                    aria-label="previous"
                                                                    style="display: inline;"></span>
                                                                <div class="resp-slider-container">
                                                                    <div class="box-slider-title">
                                                                        <h2><span></span></h2>
                                                                    </div>
                                                                    <div
                                                                        class="slider responsive slick-initialized slick-slider">





                                                                        <div aria-live="polite"
                                                                            class="slick-list draggable">
                                                                            <div class="slick-track"
                                                                                style="opacity: 1; width: 2925px; transform: translate3d(-1800px, 0px, 0px);"
                                                                                role="listbox">
                                                                                <div class="item slick-slide slick-cloned"
                                                                                    tabindex="-1" role="option"
                                                                                    aria-describedby="slick-slide01"
                                                                                    style="width: 225px;"
                                                                                    data-slick-index="-4"
                                                                                    aria-hidden="true">
                                                                                    <div class="item-wrap">
                                                                                        <div class="item-detail">
                                                                                            <div
                                                                                                class="item-img products-thumb">
                                                                                                <a href="https://demo.wpthemego.com/themes/sw_revo/product/nisi-ut-aliquid/"
                                                                                                    tabindex="-1"><img
                                                                                                        width="300"
                                                                                                        height="300"
                                                                                                        src="https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/f32-300x300.jpg"
                                                                                                        class="attachment-shop_catalog size-shop_catalog wp-post-image lazyloaded"
                                                                                                        alt="nisi ut aliquid"
                                                                                                        sizes="(max-width: 300px) 100vw, 300px"
                                                                                                        srcset="https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/f32-300x300.jpg 300w, https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/f32-100x100.jpg 100w, https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/f32.jpg 600w, https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/f32-150x150.jpg 150w"
                                                                                                        data-ll-status="loaded"><noscript><img
                                                                                                            width="300"
                                                                                                            height="300"
                                                                                                            src="https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/f32-300x300.jpg"
                                                                                                            class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                                                                            alt="nisi ut aliquid"
                                                                                                            srcset="https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/f32-300x300.jpg 300w, https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/f32-100x100.jpg 100w, https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/f32.jpg 600w, https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/f32-150x150.jpg 150w"
                                                                                                            sizes="(max-width: 300px) 100vw, 300px"></noscript></a><a
                                                                                                    href="javascript:void(0)"
                                                                                                    data-product_id="965"
                                                                                                    class="sw-quickview"
                                                                                                    data-type="quickview"
                                                                                                    data-ajax_url="/themes/sw_revo/?wc-ajax=%%endpoint%%"
                                                                                                    tabindex="-1">Quick
                                                                                                    View </a>
                                                                                            </div>
                                                                                            <div class="item-content">
                                                                                                <h4><a href="https://demo.wpthemego.com/themes/sw_revo/product/nisi-ut-aliquid/"
                                                                                                        title="nisi ut aliquid"
                                                                                                        tabindex="-1">nisi
                                                                                                        ut aliquid</a>
                                                                                                </h4>
                                                                                                <div class="cate-name">
                                                                                                    <span
                                                                                                        class="posted_in">
                                                                                                        <a href="https://demo.wpthemego.com/themes/sw_revo/product-category/fashion/"
                                                                                                            rel="tag"
                                                                                                            tabindex="-1">Fashion</a></span>
                                                                                                </div>
                                                                                                <!-- price -->
                                                                                                <div
                                                                                                    class="item-price">
                                                                                                    <span>
                                                                                                        <span
                                                                                                            class="woocommerce-Price-amount amount"
                                                                                                            data-original="<bdi><span class=&quot;woocommerce-Price-currencySymbol&quot;>$</span>75.00</bdi>"
                                                                                                            data-price="75"
                                                                                                            title="Original price:75">$75.00</span>
                                                                                                    </span>
                                                                                                </div>

                                                                                                <!-- add to cart, wishlist, compare -->
                                                                                                <div
                                                                                                    class="item-bottom clearfix">
                                                                                                    <a href="?add-to-cart=965"
                                                                                                        data-quantity="1"
                                                                                                        class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                                                                        data-product_id="965"
                                                                                                        data-product_sku=""
                                                                                                        aria-label="Add “nisi ut aliquid” to your cart"
                                                                                                        rel="nofollow"
                                                                                                        title="Add To Cart"
                                                                                                        tabindex="-1">Add
                                                                                                        to cart</a>
                                                                                                    <div class="yith-wcwl-add-to-wishlist add-to-wishlist-965  wishlist-fragment on-first-load"
                                                                                                        data-fragment-ref="965"
                                                                                                        data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:false,&quot;is_single&quot;:true,&quot;show_exists&quot;:false,&quot;product_id&quot;:965,&quot;parent_product_id&quot;:965,&quot;product_type&quot;:&quot;simple&quot;,&quot;show_view&quot;:true,&quot;browse_wishlist_text&quot;:&quot;Browse Wishlist&quot;,&quot;already_in_wishslist_text&quot;:&quot;The product is already in the wishlist!&quot;,&quot;product_added_text&quot;:&quot;Product added!&quot;,&quot;heading_icon&quot;:&quot;&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:false,&quot;item&quot;:&quot;add_to_wishlist&quot;}">

                                                                                                        <!-- ADD TO WISHLIST -->

                                                                                                        <div
                                                                                                            class="yith-wcwl-add-button">
                                                                                                            <a href="?add_to_wishlist=965"
                                                                                                                rel="nofollow"
                                                                                                                data-product-id="965"
                                                                                                                data-product-type="simple"
                                                                                                                data-original-product-id="965"
                                                                                                                class="add_to_wishlist single_add_to_wishlist"
                                                                                                                data-title="Add to Wishlist"
                                                                                                                title="Add To WishList"
                                                                                                                tabindex="-1">
                                                                                                                <span>Add
                                                                                                                    to
                                                                                                                    Wishlist</span>
                                                                                                            </a>
                                                                                                        </div>
                                                                                                        <!-- COUNT TEXT -->

                                                                                                    </div><a
                                                                                                        href="javascript:void(0)"
                                                                                                        class="compare button"
                                                                                                        data-product_id="965"
                                                                                                        rel="nofollow"
                                                                                                        title="Add To Compare"
                                                                                                        tabindex="-1">Compare</a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="item slick-slide slick-cloned"
                                                                                    tabindex="-1" role="option"
                                                                                    aria-describedby="slick-slide02"
                                                                                    style="width: 225px;"
                                                                                    data-slick-index="-3"
                                                                                    aria-hidden="true">
                                                                                    <div class="item-wrap">
                                                                                        <div class="item-detail">
                                                                                            <div
                                                                                                class="item-img products-thumb">
                                                                                                <a href="https://demo.wpthemego.com/themes/sw_revo/product/tium-lores-eos/"
                                                                                                    tabindex="-1"><img
                                                                                                        width="300"
                                                                                                        height="300"
                                                                                                        src="https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/13-300x300.jpg"
                                                                                                        class="attachment-shop_catalog size-shop_catalog wp-post-image lazyloaded"
                                                                                                        alt="An tium lores eos"
                                                                                                        sizes="(max-width: 300px) 100vw, 300px"
                                                                                                        srcset="https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/13-300x300.jpg 300w, https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/13-100x100.jpg 100w, https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/13.jpg 600w, https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/13-150x150.jpg 150w"
                                                                                                        data-ll-status="loaded"><noscript><img
                                                                                                            width="300"
                                                                                                            height="300"
                                                                                                            src="https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/13-300x300.jpg"
                                                                                                            class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                                                                            alt="An tium lores eos"
                                                                                                            srcset="https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/13-300x300.jpg 300w, https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/13-100x100.jpg 100w, https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/13.jpg 600w, https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/13-150x150.jpg 150w"
                                                                                                            sizes="(max-width: 300px) 100vw, 300px"></noscript></a><a
                                                                                                    href="javascript:void(0)"
                                                                                                    data-product_id="953"
                                                                                                    class="sw-quickview"
                                                                                                    data-type="quickview"
                                                                                                    data-ajax_url="/themes/sw_revo/?wc-ajax=%%endpoint%%"
                                                                                                    tabindex="-1">Quick
                                                                                                    View </a>
                                                                                            </div>
                                                                                            <div class="item-content">
                                                                                                <h4><a href="https://demo.wpthemego.com/themes/sw_revo/product/tium-lores-eos/"
                                                                                                        title="An tium lores eos"
                                                                                                        tabindex="-1">An
                                                                                                        tium lores
                                                                                                        eos</a></h4>
                                                                                                <div class="cate-name">
                                                                                                    <span
                                                                                                        class="posted_in">
                                                                                                        <a href="https://demo.wpthemego.com/themes/sw_revo/product-category/fashion/"
                                                                                                            rel="tag"
                                                                                                            tabindex="-1">Fashion</a></span>
                                                                                                </div>
                                                                                                <!-- price -->
                                                                                                <div
                                                                                                    class="item-price">
                                                                                                    <span>
                                                                                                        <span
                                                                                                            class="woocommerce-Price-amount amount"
                                                                                                            data-original="<bdi><span class=&quot;woocommerce-Price-currencySymbol&quot;>$</span>72.00</bdi>"
                                                                                                            data-price="72"
                                                                                                            title="Original price:72">$72.00</span>
                                                                                                    </span>
                                                                                                </div>

                                                                                                <!-- add to cart, wishlist, compare -->
                                                                                                <div
                                                                                                    class="item-bottom clearfix">
                                                                                                    <a href="?add-to-cart=953"
                                                                                                        data-quantity="1"
                                                                                                        class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                                                                        data-product_id="953"
                                                                                                        data-product_sku=""
                                                                                                        aria-label="Add “An tium lores eos” to your cart"
                                                                                                        rel="nofollow"
                                                                                                        title="Add To Cart"
                                                                                                        tabindex="-1">Add
                                                                                                        to cart</a>
                                                                                                    <div class="yith-wcwl-add-to-wishlist add-to-wishlist-953  wishlist-fragment on-first-load"
                                                                                                        data-fragment-ref="953"
                                                                                                        data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:false,&quot;is_single&quot;:true,&quot;show_exists&quot;:false,&quot;product_id&quot;:953,&quot;parent_product_id&quot;:953,&quot;product_type&quot;:&quot;simple&quot;,&quot;show_view&quot;:true,&quot;browse_wishlist_text&quot;:&quot;Browse Wishlist&quot;,&quot;already_in_wishslist_text&quot;:&quot;The product is already in the wishlist!&quot;,&quot;product_added_text&quot;:&quot;Product added!&quot;,&quot;heading_icon&quot;:&quot;&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:false,&quot;item&quot;:&quot;add_to_wishlist&quot;}">

                                                                                                        <!-- ADD TO WISHLIST -->

                                                                                                        <div
                                                                                                            class="yith-wcwl-add-button">
                                                                                                            <a href="?add_to_wishlist=953"
                                                                                                                rel="nofollow"
                                                                                                                data-product-id="953"
                                                                                                                data-product-type="simple"
                                                                                                                data-original-product-id="953"
                                                                                                                class="add_to_wishlist single_add_to_wishlist"
                                                                                                                data-title="Add to Wishlist"
                                                                                                                title="Add To WishList"
                                                                                                                tabindex="-1">
                                                                                                                <span>Add
                                                                                                                    to
                                                                                                                    Wishlist</span>
                                                                                                            </a>
                                                                                                        </div>
                                                                                                        <!-- COUNT TEXT -->

                                                                                                    </div><a
                                                                                                        href="javascript:void(0)"
                                                                                                        class="compare button"
                                                                                                        data-product_id="953"
                                                                                                        rel="nofollow"
                                                                                                        title="Add To Compare"
                                                                                                        tabindex="-1">Compare</a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="item slick-slide slick-cloned"
                                                                                    tabindex="-1" role="option"
                                                                                    aria-describedby="slick-slide03"
                                                                                    style="width: 225px;"
                                                                                    data-slick-index="-2"
                                                                                    aria-hidden="true">
                                                                                    <div class="item-wrap">
                                                                                        <div class="item-detail">
                                                                                            <div
                                                                                                class="item-img products-thumb">
                                                                                                <a href="https://demo.wpthemego.com/themes/sw_revo/product/ut-labore-et/"
                                                                                                    tabindex="-1"><img
                                                                                                        width="300"
                                                                                                        height="300"
                                                                                                        src="https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/f11-300x300.jpg"
                                                                                                        class="attachment-shop_catalog size-shop_catalog wp-post-image lazyloaded"
                                                                                                        alt="Ut labore et"
                                                                                                        sizes="(max-width: 300px) 100vw, 300px"
                                                                                                        srcset="https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/f11-300x300.jpg 300w, https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/f11-100x100.jpg 100w, https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/f11.jpg 600w, https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/f11-150x150.jpg 150w"
                                                                                                        data-ll-status="loaded"><noscript><img
                                                                                                            width="300"
                                                                                                            height="300"
                                                                                                            src="https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/f11-300x300.jpg"
                                                                                                            class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                                                                            alt="Ut labore et"
                                                                                                            srcset="https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/f11-300x300.jpg 300w, https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/f11-100x100.jpg 100w, https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/f11.jpg 600w, https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/f11-150x150.jpg 150w"
                                                                                                            sizes="(max-width: 300px) 100vw, 300px"></noscript></a><a
                                                                                                    href="javascript:void(0)"
                                                                                                    data-product_id="941"
                                                                                                    class="sw-quickview"
                                                                                                    data-type="quickview"
                                                                                                    data-ajax_url="/themes/sw_revo/?wc-ajax=%%endpoint%%"
                                                                                                    tabindex="-1">Quick
                                                                                                    View </a>
                                                                                            </div>
                                                                                            <div class="item-content">
                                                                                                <h4><a href="https://demo.wpthemego.com/themes/sw_revo/product/ut-labore-et/"
                                                                                                        title="Ut labore et"
                                                                                                        tabindex="-1">Ut
                                                                                                        labore et</a>
                                                                                                </h4>
                                                                                                <div class="cate-name">
                                                                                                    <span
                                                                                                        class="posted_in">
                                                                                                        <a href="https://demo.wpthemego.com/themes/sw_revo/product-category/fashion/"
                                                                                                            rel="tag"
                                                                                                            tabindex="-1">Fashion</a></span>
                                                                                                </div>
                                                                                                <!-- price -->
                                                                                                <div
                                                                                                    class="item-price">
                                                                                                    <span>
                                                                                                        <span
                                                                                                            class="woocommerce-Price-amount amount"
                                                                                                            data-original="<bdi><span class=&quot;woocommerce-Price-currencySymbol&quot;>$</span>85.00</bdi>"
                                                                                                            data-price="85"
                                                                                                            title="Original price:85">$85.00</span>
                                                                                                    </span>
                                                                                                </div>

                                                                                                <!-- add to cart, wishlist, compare -->
                                                                                                <div
                                                                                                    class="item-bottom clearfix">
                                                                                                    <a href="?add-to-cart=941"
                                                                                                        data-quantity="1"
                                                                                                        class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                                                                        data-product_id="941"
                                                                                                        data-product_sku="f-1003"
                                                                                                        aria-label="Add “Ut labore et” to your cart"
                                                                                                        rel="nofollow"
                                                                                                        title="Add To Cart"
                                                                                                        tabindex="-1">Add
                                                                                                        to cart</a>
                                                                                                    <div class="yith-wcwl-add-to-wishlist add-to-wishlist-941  wishlist-fragment on-first-load"
                                                                                                        data-fragment-ref="941"
                                                                                                        data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:false,&quot;is_single&quot;:true,&quot;show_exists&quot;:false,&quot;product_id&quot;:941,&quot;parent_product_id&quot;:941,&quot;product_type&quot;:&quot;simple&quot;,&quot;show_view&quot;:true,&quot;browse_wishlist_text&quot;:&quot;Browse Wishlist&quot;,&quot;already_in_wishslist_text&quot;:&quot;The product is already in the wishlist!&quot;,&quot;product_added_text&quot;:&quot;Product added!&quot;,&quot;heading_icon&quot;:&quot;&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:false,&quot;item&quot;:&quot;add_to_wishlist&quot;}">

                                                                                                        <!-- ADD TO WISHLIST -->

                                                                                                        <div
                                                                                                            class="yith-wcwl-add-button">
                                                                                                            <a href="?add_to_wishlist=941"
                                                                                                                rel="nofollow"
                                                                                                                data-product-id="941"
                                                                                                                data-product-type="simple"
                                                                                                                data-original-product-id="941"
                                                                                                                class="add_to_wishlist single_add_to_wishlist"
                                                                                                                data-title="Add to Wishlist"
                                                                                                                title="Add To WishList"
                                                                                                                tabindex="-1">
                                                                                                                <span>Add
                                                                                                                    to
                                                                                                                    Wishlist</span>
                                                                                                            </a>
                                                                                                        </div>
                                                                                                        <!-- COUNT TEXT -->

                                                                                                    </div><a
                                                                                                        href="javascript:void(0)"
                                                                                                        class="compare button"
                                                                                                        data-product_id="941"
                                                                                                        rel="nofollow"
                                                                                                        title="Add To Compare"
                                                                                                        tabindex="-1">Compare</a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="item slick-slide slick-cloned"
                                                                                    tabindex="-1" role="option"
                                                                                    aria-describedby="slick-slide04"
                                                                                    style="width: 225px;"
                                                                                    data-slick-index="-1"
                                                                                    aria-hidden="true">
                                                                                    <div class="item-wrap">
                                                                                        <div class="item-detail">
                                                                                            <div
                                                                                                class="item-img products-thumb">
                                                                                                <a href="https://demo.wpthemego.com/themes/sw_revo/product/eius-modi-tempo/"
                                                                                                    tabindex="-1"><img
                                                                                                        width="300"
                                                                                                        height="300"
                                                                                                        src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20300%20300'%3E%3C/svg%3E"
                                                                                                        class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                                                                        alt="eius modi tempo"
                                                                                                        data-lazy-srcset="https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/14-300x300.jpg 300w, https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/14-100x100.jpg 100w, https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/14.jpg 600w, https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/14-150x150.jpg 150w"
                                                                                                        data-lazy-sizes="(max-width: 300px) 100vw, 300px"
                                                                                                        data-lazy-src="https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/14-300x300.jpg"><noscript><img
                                                                                                            width="300"
                                                                                                            height="300"
                                                                                                            src="https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/14-300x300.jpg"
                                                                                                            class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                                                                            alt="eius modi tempo"
                                                                                                            srcset="https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/14-300x300.jpg 300w, https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/14-100x100.jpg 100w, https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/14.jpg 600w, https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/14-150x150.jpg 150w"
                                                                                                            sizes="(max-width: 300px) 100vw, 300px"></noscript></a><a
                                                                                                    href="javascript:void(0)"
                                                                                                    data-product_id="945"
                                                                                                    class="sw-quickview"
                                                                                                    data-type="quickview"
                                                                                                    data-ajax_url="/themes/sw_revo/?wc-ajax=%%endpoint%%"
                                                                                                    tabindex="-1">Quick
                                                                                                    View </a>
                                                                                                <div
                                                                                                    class="sale-off ">
                                                                                                    -27%</div>
                                                                                            </div>
                                                                                            <div class="item-content">
                                                                                                <h4><a href="https://demo.wpthemego.com/themes/sw_revo/product/eius-modi-tempo/"
                                                                                                        title="eius modi tempo"
                                                                                                        tabindex="-1">eius
                                                                                                        modi tempo</a>
                                                                                                </h4>
                                                                                                <div
                                                                                                    class="cate-name">
                                                                                                    <span
                                                                                                        class="posted_in">
                                                                                                        <a href="https://demo.wpthemego.com/themes/sw_revo/product-category/fashion/"
                                                                                                            rel="tag"
                                                                                                            tabindex="-1">Fashion</a>,
                                                                                                        <a href="https://demo.wpthemego.com/themes/sw_revo/product-category/health-beauty/"
                                                                                                            rel="tag"
                                                                                                            tabindex="-1">Health
                                                                                                            &amp;
                                                                                                            Beauty</a></span>
                                                                                                </div>
                                                                                                <!-- price -->
                                                                                                <div
                                                                                                    class="item-price">
                                                                                                    <span>
                                                                                                        <del><span
                                                                                                                class="woocommerce-Price-amount amount"
                                                                                                                data-original="<bdi><span class=&quot;woocommerce-Price-currencySymbol&quot;>$</span>55.00</bdi>"
                                                                                                                data-price="55"
                                                                                                                title="Original price:55">$55.00</span></del>
                                                                                                        <ins><span
                                                                                                                class="woocommerce-Price-amount amount"
                                                                                                                data-original="<bdi><span class=&quot;woocommerce-Price-currencySymbol&quot;>$</span>40.00</bdi>"
                                                                                                                data-price="40"
                                                                                                                title="Original price:40">$40.00</span></ins>
                                                                                                    </span>
                                                                                                </div>

                                                                                                <!-- add to cart, wishlist, compare -->
                                                                                                <div
                                                                                                    class="item-bottom clearfix">
                                                                                                    <a href="?add-to-cart=945"
                                                                                                        data-quantity="1"
                                                                                                        class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                                                                        data-product_id="945"
                                                                                                        data-product_sku="f-1005"
                                                                                                        aria-label="Add “eius modi tempo” to your cart"
                                                                                                        rel="nofollow"
                                                                                                        title="Add To Cart"
                                                                                                        tabindex="-1">Add
                                                                                                        to cart</a>
                                                                                                    <div class="yith-wcwl-add-to-wishlist add-to-wishlist-945  wishlist-fragment on-first-load"
                                                                                                        data-fragment-ref="945"
                                                                                                        data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:false,&quot;is_single&quot;:true,&quot;show_exists&quot;:false,&quot;product_id&quot;:945,&quot;parent_product_id&quot;:945,&quot;product_type&quot;:&quot;simple&quot;,&quot;show_view&quot;:true,&quot;browse_wishlist_text&quot;:&quot;Browse Wishlist&quot;,&quot;already_in_wishslist_text&quot;:&quot;The product is already in the wishlist!&quot;,&quot;product_added_text&quot;:&quot;Product added!&quot;,&quot;heading_icon&quot;:&quot;&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:false,&quot;item&quot;:&quot;add_to_wishlist&quot;}">

                                                                                                        <!-- ADD TO WISHLIST -->

                                                                                                        <div
                                                                                                            class="yith-wcwl-add-button">
                                                                                                            <a href="?add_to_wishlist=945"
                                                                                                                rel="nofollow"
                                                                                                                data-product-id="945"
                                                                                                                data-product-type="simple"
                                                                                                                data-original-product-id="945"
                                                                                                                class="add_to_wishlist single_add_to_wishlist"
                                                                                                                data-title="Add to Wishlist"
                                                                                                                title="Add To WishList"
                                                                                                                tabindex="-1">
                                                                                                                <span>Add
                                                                                                                    to
                                                                                                                    Wishlist</span>
                                                                                                            </a>
                                                                                                        </div>
                                                                                                        <!-- COUNT TEXT -->

                                                                                                    </div><a
                                                                                                        href="javascript:void(0)"
                                                                                                        class="compare button"
                                                                                                        data-product_id="945"
                                                                                                        rel="nofollow"
                                                                                                        title="Add To Compare"
                                                                                                        tabindex="-1">Compare</a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="item slick-slide"
                                                                                    tabindex="-1" role="option"
                                                                                    aria-describedby="slick-slide00"
                                                                                    style="width: 225px;"
                                                                                    data-slick-index="0"
                                                                                    aria-hidden="true">
                                                                                    <div class="item-wrap">
                                                                                        <div class="item-detail">
                                                                                            <div
                                                                                                class="item-img products-thumb">
                                                                                                <a href="https://demo.wpthemego.com/themes/sw_revo/product/beatae-vitae-dicta/"
                                                                                                    tabindex="-1"><img
                                                                                                        width="300"
                                                                                                        height="300"
                                                                                                        src="https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/f43-300x300.jpg"
                                                                                                        class="attachment-shop_catalog size-shop_catalog wp-post-image lazyloaded"
                                                                                                        alt="beatae vitae dicta"
                                                                                                        sizes="(max-width: 300px) 100vw, 300px"
                                                                                                        srcset="https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/f43-300x300.jpg 300w, https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/f43-100x100.jpg 100w, https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/f43.jpg 600w, https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/f43-150x150.jpg 150w"
                                                                                                        data-ll-status="loaded"><noscript><img
                                                                                                            width="300"
                                                                                                            height="300"
                                                                                                            src="https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/f43-300x300.jpg"
                                                                                                            class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                                                                            alt="beatae vitae dicta"
                                                                                                            srcset="https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/f43-300x300.jpg 300w, https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/f43-100x100.jpg 100w, https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/f43.jpg 600w, https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/f43-150x150.jpg 150w"
                                                                                                            sizes="(max-width: 300px) 100vw, 300px"></noscript></a><a
                                                                                                    href="javascript:void(0)"
                                                                                                    data-product_id="1086"
                                                                                                    class="sw-quickview"
                                                                                                    data-type="quickview"
                                                                                                    data-ajax_url="/themes/sw_revo/?wc-ajax=%%endpoint%%"
                                                                                                    tabindex="-1">Quick
                                                                                                    View </a>
                                                                                                <div
                                                                                                    class="sale-off ">
                                                                                                    -17%</div>
                                                                                            </div>
                                                                                            <div class="item-content">
                                                                                                <h4><a href="https://demo.wpthemego.com/themes/sw_revo/product/beatae-vitae-dicta/"
                                                                                                        title="beatae vitae dicta"
                                                                                                        tabindex="-1">beatae
                                                                                                        vitae dicta</a>
                                                                                                </h4>
                                                                                                <div
                                                                                                    class="cate-name">
                                                                                                    <span
                                                                                                        class="posted_in">
                                                                                                        <a href="https://demo.wpthemego.com/themes/sw_revo/product-category/fashion/"
                                                                                                            rel="tag"
                                                                                                            tabindex="-1">Fashion</a></span>
                                                                                                </div>
                                                                                                <!-- price -->
                                                                                                <div
                                                                                                    class="item-price">
                                                                                                    <span>
                                                                                                        <del><span
                                                                                                                class="woocommerce-Price-amount amount"
                                                                                                                data-original="<bdi><span class=&quot;woocommerce-Price-currencySymbol&quot;>$</span>72.00</bdi>"
                                                                                                                data-price="72"
                                                                                                                title="Original price:72">$72.00</span></del>
                                                                                                        <ins><span
                                                                                                                class="woocommerce-Price-amount amount"
                                                                                                                data-original="<bdi><span class=&quot;woocommerce-Price-currencySymbol&quot;>$</span>60.00</bdi>"
                                                                                                                data-price="60"
                                                                                                                title="Original price:60">$60.00</span></ins>
                                                                                                    </span>
                                                                                                </div>

                                                                                                <!-- add to cart, wishlist, compare -->
                                                                                                <div
                                                                                                    class="item-bottom clearfix">
                                                                                                    <a href="?add-to-cart=1086"
                                                                                                        data-quantity="1"
                                                                                                        class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                                                                        data-product_id="1086"
                                                                                                        data-product_sku=""
                                                                                                        aria-label="Add “beatae vitae dicta” to your cart"
                                                                                                        rel="nofollow"
                                                                                                        title="Add To Cart"
                                                                                                        tabindex="-1">Add
                                                                                                        to cart</a>
                                                                                                    <div class="yith-wcwl-add-to-wishlist add-to-wishlist-1086  wishlist-fragment on-first-load"
                                                                                                        data-fragment-ref="1086"
                                                                                                        data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:false,&quot;is_single&quot;:true,&quot;show_exists&quot;:false,&quot;product_id&quot;:1086,&quot;parent_product_id&quot;:1086,&quot;product_type&quot;:&quot;simple&quot;,&quot;show_view&quot;:true,&quot;browse_wishlist_text&quot;:&quot;Browse Wishlist&quot;,&quot;already_in_wishslist_text&quot;:&quot;The product is already in the wishlist!&quot;,&quot;product_added_text&quot;:&quot;Product added!&quot;,&quot;heading_icon&quot;:&quot;&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:false,&quot;item&quot;:&quot;add_to_wishlist&quot;}">

                                                                                                        <!-- ADD TO WISHLIST -->

                                                                                                        <div
                                                                                                            class="yith-wcwl-add-button">
                                                                                                            <a href="?add_to_wishlist=1086"
                                                                                                                rel="nofollow"
                                                                                                                data-product-id="1086"
                                                                                                                data-product-type="simple"
                                                                                                                data-original-product-id="1086"
                                                                                                                class="add_to_wishlist single_add_to_wishlist"
                                                                                                                data-title="Add to Wishlist"
                                                                                                                title="Add To WishList"
                                                                                                                tabindex="-1">
                                                                                                                <span>Add
                                                                                                                    to
                                                                                                                    Wishlist</span>
                                                                                                            </a>
                                                                                                        </div>
                                                                                                        <!-- COUNT TEXT -->

                                                                                                    </div><a
                                                                                                        href="javascript:void(0)"
                                                                                                        class="compare button"
                                                                                                        data-product_id="1086"
                                                                                                        rel="nofollow"
                                                                                                        title="Add To Compare"
                                                                                                        tabindex="-1">Compare</a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="item slick-slide"
                                                                                    tabindex="-1" role="option"
                                                                                    aria-describedby="slick-slide01"
                                                                                    style="width: 225px;"
                                                                                    data-slick-index="1"
                                                                                    aria-hidden="true">
                                                                                    <div class="item-wrap">
                                                                                        <div class="item-detail">
                                                                                            <div
                                                                                                class="item-img products-thumb">
                                                                                                <a href="https://demo.wpthemego.com/themes/sw_revo/product/nisi-ut-aliquid/"
                                                                                                    tabindex="-1"><img
                                                                                                        width="300"
                                                                                                        height="300"
                                                                                                        src="https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/f32-300x300.jpg"
                                                                                                        class="attachment-shop_catalog size-shop_catalog wp-post-image lazyloaded"
                                                                                                        alt="nisi ut aliquid"
                                                                                                        sizes="(max-width: 300px) 100vw, 300px"
                                                                                                        srcset="https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/f32-300x300.jpg 300w, https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/f32-100x100.jpg 100w, https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/f32.jpg 600w, https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/f32-150x150.jpg 150w"
                                                                                                        data-ll-status="loaded"><noscript><img
                                                                                                            width="300"
                                                                                                            height="300"
                                                                                                            src="https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/f32-300x300.jpg"
                                                                                                            class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                                                                            alt="nisi ut aliquid"
                                                                                                            srcset="https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/f32-300x300.jpg 300w, https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/f32-100x100.jpg 100w, https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/f32.jpg 600w, https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/f32-150x150.jpg 150w"
                                                                                                            sizes="(max-width: 300px) 100vw, 300px"></noscript></a><a
                                                                                                    href="javascript:void(0)"
                                                                                                    data-product_id="965"
                                                                                                    class="sw-quickview"
                                                                                                    data-type="quickview"
                                                                                                    data-ajax_url="/themes/sw_revo/?wc-ajax=%%endpoint%%"
                                                                                                    tabindex="-1">Quick
                                                                                                    View </a>
                                                                                            </div>
                                                                                            <div class="item-content">
                                                                                                <h4><a href="https://demo.wpthemego.com/themes/sw_revo/product/nisi-ut-aliquid/"
                                                                                                        title="nisi ut aliquid"
                                                                                                        tabindex="-1">nisi
                                                                                                        ut aliquid</a>
                                                                                                </h4>
                                                                                                <div
                                                                                                    class="cate-name">
                                                                                                    <span
                                                                                                        class="posted_in">
                                                                                                        <a href="https://demo.wpthemego.com/themes/sw_revo/product-category/fashion/"
                                                                                                            rel="tag"
                                                                                                            tabindex="-1">Fashion</a></span>
                                                                                                </div>
                                                                                                <!-- price -->
                                                                                                <div
                                                                                                    class="item-price">
                                                                                                    <span>
                                                                                                        <span
                                                                                                            class="woocommerce-Price-amount amount"
                                                                                                            data-original="<bdi><span class=&quot;woocommerce-Price-currencySymbol&quot;>$</span>75.00</bdi>"
                                                                                                            data-price="75"
                                                                                                            title="Original price:75">$75.00</span>
                                                                                                    </span>
                                                                                                </div>

                                                                                                <!-- add to cart, wishlist, compare -->
                                                                                                <div
                                                                                                    class="item-bottom clearfix">
                                                                                                    <a href="?add-to-cart=965"
                                                                                                        data-quantity="1"
                                                                                                        class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                                                                        data-product_id="965"
                                                                                                        data-product_sku=""
                                                                                                        aria-label="Add “nisi ut aliquid” to your cart"
                                                                                                        rel="nofollow"
                                                                                                        title="Add To Cart"
                                                                                                        tabindex="-1">Add
                                                                                                        to cart</a>
                                                                                                    <div class="yith-wcwl-add-to-wishlist add-to-wishlist-965  wishlist-fragment on-first-load"
                                                                                                        data-fragment-ref="965"
                                                                                                        data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:false,&quot;is_single&quot;:true,&quot;show_exists&quot;:false,&quot;product_id&quot;:965,&quot;parent_product_id&quot;:965,&quot;product_type&quot;:&quot;simple&quot;,&quot;show_view&quot;:true,&quot;browse_wishlist_text&quot;:&quot;Browse Wishlist&quot;,&quot;already_in_wishslist_text&quot;:&quot;The product is already in the wishlist!&quot;,&quot;product_added_text&quot;:&quot;Product added!&quot;,&quot;heading_icon&quot;:&quot;&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:false,&quot;item&quot;:&quot;add_to_wishlist&quot;}">

                                                                                                        <!-- ADD TO WISHLIST -->

                                                                                                        <div
                                                                                                            class="yith-wcwl-add-button">
                                                                                                            <a href="?add_to_wishlist=965"
                                                                                                                rel="nofollow"
                                                                                                                data-product-id="965"
                                                                                                                data-product-type="simple"
                                                                                                                data-original-product-id="965"
                                                                                                                class="add_to_wishlist single_add_to_wishlist"
                                                                                                                data-title="Add to Wishlist"
                                                                                                                title="Add To WishList"
                                                                                                                tabindex="-1">
                                                                                                                <span>Add
                                                                                                                    to
                                                                                                                    Wishlist</span>
                                                                                                            </a>
                                                                                                        </div>
                                                                                                        <!-- COUNT TEXT -->

                                                                                                    </div><a
                                                                                                        href="javascript:void(0)"
                                                                                                        class="compare button"
                                                                                                        data-product_id="965"
                                                                                                        rel="nofollow"
                                                                                                        title="Add To Compare"
                                                                                                        tabindex="-1">Compare</a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="item slick-slide"
                                                                                    tabindex="-1" role="option"
                                                                                    aria-describedby="slick-slide02"
                                                                                    style="width: 225px;"
                                                                                    data-slick-index="2"
                                                                                    aria-hidden="true">
                                                                                    <div class="item-wrap">
                                                                                        <div class="item-detail">
                                                                                            <div
                                                                                                class="item-img products-thumb">
                                                                                                <a href="https://demo.wpthemego.com/themes/sw_revo/product/tium-lores-eos/"
                                                                                                    tabindex="-1"><img
                                                                                                        width="300"
                                                                                                        height="300"
                                                                                                        src="https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/13-300x300.jpg"
                                                                                                        class="attachment-shop_catalog size-shop_catalog wp-post-image lazyloaded"
                                                                                                        alt="An tium lores eos"
                                                                                                        sizes="(max-width: 300px) 100vw, 300px"
                                                                                                        srcset="https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/13-300x300.jpg 300w, https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/13-100x100.jpg 100w, https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/13.jpg 600w, https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/13-150x150.jpg 150w"
                                                                                                        data-ll-status="loaded"><noscript><img
                                                                                                            width="300"
                                                                                                            height="300"
                                                                                                            src="https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/13-300x300.jpg"
                                                                                                            class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                                                                            alt="An tium lores eos"
                                                                                                            srcset="https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/13-300x300.jpg 300w, https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/13-100x100.jpg 100w, https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/13.jpg 600w, https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/13-150x150.jpg 150w"
                                                                                                            sizes="(max-width: 300px) 100vw, 300px"></noscript></a><a
                                                                                                    href="javascript:void(0)"
                                                                                                    data-product_id="953"
                                                                                                    class="sw-quickview"
                                                                                                    data-type="quickview"
                                                                                                    data-ajax_url="/themes/sw_revo/?wc-ajax=%%endpoint%%"
                                                                                                    tabindex="-1">Quick
                                                                                                    View </a>
                                                                                            </div>
                                                                                            <div class="item-content">
                                                                                                <h4><a href="https://demo.wpthemego.com/themes/sw_revo/product/tium-lores-eos/"
                                                                                                        title="An tium lores eos"
                                                                                                        tabindex="-1">An
                                                                                                        tium lores
                                                                                                        eos</a></h4>
                                                                                                <div
                                                                                                    class="cate-name">
                                                                                                    <span
                                                                                                        class="posted_in">
                                                                                                        <a href="https://demo.wpthemego.com/themes/sw_revo/product-category/fashion/"
                                                                                                            rel="tag"
                                                                                                            tabindex="-1">Fashion</a></span>
                                                                                                </div>
                                                                                                <!-- price -->
                                                                                                <div
                                                                                                    class="item-price">
                                                                                                    <span>
                                                                                                        <span
                                                                                                            class="woocommerce-Price-amount amount"
                                                                                                            data-original="<bdi><span class=&quot;woocommerce-Price-currencySymbol&quot;>$</span>72.00</bdi>"
                                                                                                            data-price="72"
                                                                                                            title="Original price:72">$72.00</span>
                                                                                                    </span>
                                                                                                </div>

                                                                                                <!-- add to cart, wishlist, compare -->
                                                                                                <div
                                                                                                    class="item-bottom clearfix">
                                                                                                    <a href="?add-to-cart=953"
                                                                                                        data-quantity="1"
                                                                                                        class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                                                                        data-product_id="953"
                                                                                                        data-product_sku=""
                                                                                                        aria-label="Add “An tium lores eos” to your cart"
                                                                                                        rel="nofollow"
                                                                                                        title="Add To Cart"
                                                                                                        tabindex="-1">Add
                                                                                                        to cart</a>
                                                                                                    <div class="yith-wcwl-add-to-wishlist add-to-wishlist-953  wishlist-fragment on-first-load"
                                                                                                        data-fragment-ref="953"
                                                                                                        data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:false,&quot;is_single&quot;:true,&quot;show_exists&quot;:false,&quot;product_id&quot;:953,&quot;parent_product_id&quot;:953,&quot;product_type&quot;:&quot;simple&quot;,&quot;show_view&quot;:true,&quot;browse_wishlist_text&quot;:&quot;Browse Wishlist&quot;,&quot;already_in_wishslist_text&quot;:&quot;The product is already in the wishlist!&quot;,&quot;product_added_text&quot;:&quot;Product added!&quot;,&quot;heading_icon&quot;:&quot;&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:false,&quot;item&quot;:&quot;add_to_wishlist&quot;}">

                                                                                                        <!-- ADD TO WISHLIST -->

                                                                                                        <div
                                                                                                            class="yith-wcwl-add-button">
                                                                                                            <a href="?add_to_wishlist=953"
                                                                                                                rel="nofollow"
                                                                                                                data-product-id="953"
                                                                                                                data-product-type="simple"
                                                                                                                data-original-product-id="953"
                                                                                                                class="add_to_wishlist single_add_to_wishlist"
                                                                                                                data-title="Add to Wishlist"
                                                                                                                title="Add To WishList"
                                                                                                                tabindex="-1">
                                                                                                                <span>Add
                                                                                                                    to
                                                                                                                    Wishlist</span>
                                                                                                            </a>
                                                                                                        </div>
                                                                                                        <!-- COUNT TEXT -->

                                                                                                    </div><a
                                                                                                        href="javascript:void(0)"
                                                                                                        class="compare button"
                                                                                                        data-product_id="953"
                                                                                                        rel="nofollow"
                                                                                                        title="Add To Compare"
                                                                                                        tabindex="-1">Compare</a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="item slick-slide"
                                                                                    tabindex="-1" role="option"
                                                                                    aria-describedby="slick-slide03"
                                                                                    style="width: 225px;"
                                                                                    data-slick-index="3"
                                                                                    aria-hidden="true">
                                                                                    <div class="item-wrap">
                                                                                        <div class="item-detail">
                                                                                            <div
                                                                                                class="item-img products-thumb">
                                                                                                <a href="https://demo.wpthemego.com/themes/sw_revo/product/ut-labore-et/"
                                                                                                    tabindex="-1"><img
                                                                                                        width="300"
                                                                                                        height="300"
                                                                                                        src="https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/f11-300x300.jpg"
                                                                                                        class="attachment-shop_catalog size-shop_catalog wp-post-image lazyloaded"
                                                                                                        alt="Ut labore et"
                                                                                                        sizes="(max-width: 300px) 100vw, 300px"
                                                                                                        srcset="https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/f11-300x300.jpg 300w, https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/f11-100x100.jpg 100w, https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/f11.jpg 600w, https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/f11-150x150.jpg 150w"
                                                                                                        data-ll-status="loaded"><noscript><img
                                                                                                            width="300"
                                                                                                            height="300"
                                                                                                            src="https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/f11-300x300.jpg"
                                                                                                            class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                                                                            alt="Ut labore et"
                                                                                                            srcset="https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/f11-300x300.jpg 300w, https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/f11-100x100.jpg 100w, https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/f11.jpg 600w, https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/f11-150x150.jpg 150w"
                                                                                                            sizes="(max-width: 300px) 100vw, 300px"></noscript></a><a
                                                                                                    href="javascript:void(0)"
                                                                                                    data-product_id="941"
                                                                                                    class="sw-quickview"
                                                                                                    data-type="quickview"
                                                                                                    data-ajax_url="/themes/sw_revo/?wc-ajax=%%endpoint%%"
                                                                                                    tabindex="-1">Quick
                                                                                                    View </a>
                                                                                            </div>
                                                                                            <div class="item-content">
                                                                                                <h4><a href="https://demo.wpthemego.com/themes/sw_revo/product/ut-labore-et/"
                                                                                                        title="Ut labore et"
                                                                                                        tabindex="-1">Ut
                                                                                                        labore et</a>
                                                                                                </h4>
                                                                                                <div
                                                                                                    class="cate-name">
                                                                                                    <span
                                                                                                        class="posted_in">
                                                                                                        <a href="https://demo.wpthemego.com/themes/sw_revo/product-category/fashion/"
                                                                                                            rel="tag"
                                                                                                            tabindex="-1">Fashion</a></span>
                                                                                                </div>
                                                                                                <!-- price -->
                                                                                                <div
                                                                                                    class="item-price">
                                                                                                    <span>
                                                                                                        <span
                                                                                                            class="woocommerce-Price-amount amount"
                                                                                                            data-original="<bdi><span class=&quot;woocommerce-Price-currencySymbol&quot;>$</span>85.00</bdi>"
                                                                                                            data-price="85"
                                                                                                            title="Original price:85">$85.00</span>
                                                                                                    </span>
                                                                                                </div>

                                                                                                <!-- add to cart, wishlist, compare -->
                                                                                                <div
                                                                                                    class="item-bottom clearfix">
                                                                                                    <a href="?add-to-cart=941"
                                                                                                        data-quantity="1"
                                                                                                        class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                                                                        data-product_id="941"
                                                                                                        data-product_sku="f-1003"
                                                                                                        aria-label="Add “Ut labore et” to your cart"
                                                                                                        rel="nofollow"
                                                                                                        title="Add To Cart"
                                                                                                        tabindex="-1">Add
                                                                                                        to cart</a>
                                                                                                    <div class="yith-wcwl-add-to-wishlist add-to-wishlist-941  wishlist-fragment on-first-load"
                                                                                                        data-fragment-ref="941"
                                                                                                        data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:false,&quot;is_single&quot;:true,&quot;show_exists&quot;:false,&quot;product_id&quot;:941,&quot;parent_product_id&quot;:941,&quot;product_type&quot;:&quot;simple&quot;,&quot;show_view&quot;:true,&quot;browse_wishlist_text&quot;:&quot;Browse Wishlist&quot;,&quot;already_in_wishslist_text&quot;:&quot;The product is already in the wishlist!&quot;,&quot;product_added_text&quot;:&quot;Product added!&quot;,&quot;heading_icon&quot;:&quot;&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:false,&quot;item&quot;:&quot;add_to_wishlist&quot;}">

                                                                                                        <!-- ADD TO WISHLIST -->

                                                                                                        <div
                                                                                                            class="yith-wcwl-add-button">
                                                                                                            <a href="?add_to_wishlist=941"
                                                                                                                rel="nofollow"
                                                                                                                data-product-id="941"
                                                                                                                data-product-type="simple"
                                                                                                                data-original-product-id="941"
                                                                                                                class="add_to_wishlist single_add_to_wishlist"
                                                                                                                data-title="Add to Wishlist"
                                                                                                                title="Add To WishList"
                                                                                                                tabindex="-1">
                                                                                                                <span>Add
                                                                                                                    to
                                                                                                                    Wishlist</span>
                                                                                                            </a>
                                                                                                        </div>
                                                                                                        <!-- COUNT TEXT -->

                                                                                                    </div><a
                                                                                                        href="javascript:void(0)"
                                                                                                        class="compare button"
                                                                                                        data-product_id="941"
                                                                                                        rel="nofollow"
                                                                                                        title="Add To Compare"
                                                                                                        tabindex="-1">Compare</a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="item slick-slide slick-current slick-active"
                                                                                    tabindex="0" role="option"
                                                                                    aria-describedby="slick-slide04"
                                                                                    style="width: 225px;"
                                                                                    data-slick-index="4"
                                                                                    aria-hidden="false">
                                                                                    <div class="item-wrap">
                                                                                        <div class="item-detail">
                                                                                            <div
                                                                                                class="item-img products-thumb">
                                                                                                <a href="https://demo.wpthemego.com/themes/sw_revo/product/eius-modi-tempo/"
                                                                                                    tabindex="0"><img
                                                                                                        width="300"
                                                                                                        height="300"
                                                                                                        src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20300%20300'%3E%3C/svg%3E"
                                                                                                        class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                                                                        alt="eius modi tempo"
                                                                                                        data-lazy-srcset="https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/14-300x300.jpg 300w, https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/14-100x100.jpg 100w, https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/14.jpg 600w, https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/14-150x150.jpg 150w"
                                                                                                        data-lazy-sizes="(max-width: 300px) 100vw, 300px"
                                                                                                        data-lazy-src="https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/14-300x300.jpg"><noscript><img
                                                                                                            width="300"
                                                                                                            height="300"
                                                                                                            src="https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/14-300x300.jpg"
                                                                                                            class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                                                                            alt="eius modi tempo"
                                                                                                            srcset="https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/14-300x300.jpg 300w, https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/14-100x100.jpg 100w, https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/14.jpg 600w, https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/14-150x150.jpg 150w"
                                                                                                            sizes="(max-width: 300px) 100vw, 300px"></noscript></a><a
                                                                                                    href="javascript:void(0)"
                                                                                                    data-product_id="945"
                                                                                                    class="sw-quickview"
                                                                                                    data-type="quickview"
                                                                                                    data-ajax_url="/themes/sw_revo/?wc-ajax=%%endpoint%%"
                                                                                                    tabindex="0">Quick
                                                                                                    View </a>
                                                                                                <div
                                                                                                    class="sale-off ">
                                                                                                    -27%</div>
                                                                                            </div>
                                                                                            <div class="item-content">
                                                                                                <h4><a href="https://demo.wpthemego.com/themes/sw_revo/product/eius-modi-tempo/"
                                                                                                        title="eius modi tempo"
                                                                                                        tabindex="0">eius
                                                                                                        modi tempo</a>
                                                                                                </h4>
                                                                                                <div
                                                                                                    class="cate-name">
                                                                                                    <span
                                                                                                        class="posted_in">
                                                                                                        <a href="https://demo.wpthemego.com/themes/sw_revo/product-category/fashion/"
                                                                                                            rel="tag"
                                                                                                            tabindex="0">Fashion</a>,
                                                                                                        <a href="https://demo.wpthemego.com/themes/sw_revo/product-category/health-beauty/"
                                                                                                            rel="tag"
                                                                                                            tabindex="0">Health
                                                                                                            &amp;
                                                                                                            Beauty</a></span>
                                                                                                </div>
                                                                                                <!-- price -->
                                                                                                <div
                                                                                                    class="item-price">
                                                                                                    <span>
                                                                                                        <del><span
                                                                                                                class="woocommerce-Price-amount amount"
                                                                                                                data-original="<bdi><span class=&quot;woocommerce-Price-currencySymbol&quot;>$</span>55.00</bdi>"
                                                                                                                data-price="55"
                                                                                                                title="Original price:55">$55.00</span></del>
                                                                                                        <ins><span
                                                                                                                class="woocommerce-Price-amount amount"
                                                                                                                data-original="<bdi><span class=&quot;woocommerce-Price-currencySymbol&quot;>$</span>40.00</bdi>"
                                                                                                                data-price="40"
                                                                                                                title="Original price:40">$40.00</span></ins>
                                                                                                    </span>
                                                                                                </div>

                                                                                                <!-- add to cart, wishlist, compare -->
                                                                                                <div
                                                                                                    class="item-bottom clearfix">
                                                                                                    <a href="?add-to-cart=945"
                                                                                                        data-quantity="1"
                                                                                                        class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                                                                        data-product_id="945"
                                                                                                        data-product_sku="f-1005"
                                                                                                        aria-label="Add “eius modi tempo” to your cart"
                                                                                                        rel="nofollow"
                                                                                                        title="Add To Cart"
                                                                                                        tabindex="0">Add
                                                                                                        to cart</a>
                                                                                                    <div class="yith-wcwl-add-to-wishlist add-to-wishlist-945  wishlist-fragment on-first-load"
                                                                                                        data-fragment-ref="945"
                                                                                                        data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:false,&quot;is_single&quot;:true,&quot;show_exists&quot;:false,&quot;product_id&quot;:945,&quot;parent_product_id&quot;:945,&quot;product_type&quot;:&quot;simple&quot;,&quot;show_view&quot;:true,&quot;browse_wishlist_text&quot;:&quot;Browse Wishlist&quot;,&quot;already_in_wishslist_text&quot;:&quot;The product is already in the wishlist!&quot;,&quot;product_added_text&quot;:&quot;Product added!&quot;,&quot;heading_icon&quot;:&quot;&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:false,&quot;item&quot;:&quot;add_to_wishlist&quot;}">

                                                                                                        <!-- ADD TO WISHLIST -->

                                                                                                        <div
                                                                                                            class="yith-wcwl-add-button">
                                                                                                            <a href="?add_to_wishlist=945"
                                                                                                                rel="nofollow"
                                                                                                                data-product-id="945"
                                                                                                                data-product-type="simple"
                                                                                                                data-original-product-id="945"
                                                                                                                class="add_to_wishlist single_add_to_wishlist"
                                                                                                                data-title="Add to Wishlist"
                                                                                                                title="Add To WishList"
                                                                                                                tabindex="0">
                                                                                                                <span>Add
                                                                                                                    to
                                                                                                                    Wishlist</span>
                                                                                                            </a>
                                                                                                        </div>
                                                                                                        <!-- COUNT TEXT -->

                                                                                                    </div><a
                                                                                                        href="javascript:void(0)"
                                                                                                        class="compare button"
                                                                                                        data-product_id="945"
                                                                                                        rel="nofollow"
                                                                                                        title="Add To Compare"
                                                                                                        tabindex="0">Compare</a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="item slick-slide slick-cloned slick-active"
                                                                                    tabindex="0" role="option"
                                                                                    aria-describedby="slick-slide00"
                                                                                    style="width: 225px;"
                                                                                    data-slick-index="5"
                                                                                    aria-hidden="false">
                                                                                    <div class="item-wrap">
                                                                                        <div class="item-detail">
                                                                                            <div
                                                                                                class="item-img products-thumb">
                                                                                                <a href="https://demo.wpthemego.com/themes/sw_revo/product/beatae-vitae-dicta/"
                                                                                                    tabindex="0"><img
                                                                                                        width="300"
                                                                                                        height="300"
                                                                                                        src="https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/f43-300x300.jpg"
                                                                                                        class="attachment-shop_catalog size-shop_catalog wp-post-image lazyloaded"
                                                                                                        alt="beatae vitae dicta"
                                                                                                        sizes="(max-width: 300px) 100vw, 300px"
                                                                                                        srcset="https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/f43-300x300.jpg 300w, https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/f43-100x100.jpg 100w, https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/f43.jpg 600w, https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/f43-150x150.jpg 150w"
                                                                                                        data-ll-status="loaded"><noscript><img
                                                                                                            width="300"
                                                                                                            height="300"
                                                                                                            src="https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/f43-300x300.jpg"
                                                                                                            class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                                                                            alt="beatae vitae dicta"
                                                                                                            srcset="https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/f43-300x300.jpg 300w, https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/f43-100x100.jpg 100w, https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/f43.jpg 600w, https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/f43-150x150.jpg 150w"
                                                                                                            sizes="(max-width: 300px) 100vw, 300px"></noscript></a><a
                                                                                                    href="javascript:void(0)"
                                                                                                    data-product_id="1086"
                                                                                                    class="sw-quickview"
                                                                                                    data-type="quickview"
                                                                                                    data-ajax_url="/themes/sw_revo/?wc-ajax=%%endpoint%%"
                                                                                                    tabindex="0">Quick
                                                                                                    View </a>
                                                                                                <div
                                                                                                    class="sale-off ">
                                                                                                    -17%</div>
                                                                                            </div>
                                                                                            <div class="item-content">
                                                                                                <h4><a href="https://demo.wpthemego.com/themes/sw_revo/product/beatae-vitae-dicta/"
                                                                                                        title="beatae vitae dicta"
                                                                                                        tabindex="0">beatae
                                                                                                        vitae dicta</a>
                                                                                                </h4>
                                                                                                <div
                                                                                                    class="cate-name">
                                                                                                    <span
                                                                                                        class="posted_in">
                                                                                                        <a href="https://demo.wpthemego.com/themes/sw_revo/product-category/fashion/"
                                                                                                            rel="tag"
                                                                                                            tabindex="0">Fashion</a></span>
                                                                                                </div>
                                                                                                <!-- price -->
                                                                                                <div
                                                                                                    class="item-price">
                                                                                                    <span>
                                                                                                        <del><span
                                                                                                                class="woocommerce-Price-amount amount"
                                                                                                                data-original="<bdi><span class=&quot;woocommerce-Price-currencySymbol&quot;>$</span>72.00</bdi>"
                                                                                                                data-price="72"
                                                                                                                title="Original price:72">$72.00</span></del>
                                                                                                        <ins><span
                                                                                                                class="woocommerce-Price-amount amount"
                                                                                                                data-original="<bdi><span class=&quot;woocommerce-Price-currencySymbol&quot;>$</span>60.00</bdi>"
                                                                                                                data-price="60"
                                                                                                                title="Original price:60">$60.00</span></ins>
                                                                                                    </span>
                                                                                                </div>

                                                                                                <!-- add to cart, wishlist, compare -->
                                                                                                <div
                                                                                                    class="item-bottom clearfix">
                                                                                                    <a href="?add-to-cart=1086"
                                                                                                        data-quantity="1"
                                                                                                        class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                                                                        data-product_id="1086"
                                                                                                        data-product_sku=""
                                                                                                        aria-label="Add “beatae vitae dicta” to your cart"
                                                                                                        rel="nofollow"
                                                                                                        title="Add To Cart"
                                                                                                        tabindex="0">Add
                                                                                                        to cart</a>
                                                                                                    <div class="yith-wcwl-add-to-wishlist add-to-wishlist-1086  wishlist-fragment on-first-load"
                                                                                                        data-fragment-ref="1086"
                                                                                                        data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:false,&quot;is_single&quot;:true,&quot;show_exists&quot;:false,&quot;product_id&quot;:1086,&quot;parent_product_id&quot;:1086,&quot;product_type&quot;:&quot;simple&quot;,&quot;show_view&quot;:true,&quot;browse_wishlist_text&quot;:&quot;Browse Wishlist&quot;,&quot;already_in_wishslist_text&quot;:&quot;The product is already in the wishlist!&quot;,&quot;product_added_text&quot;:&quot;Product added!&quot;,&quot;heading_icon&quot;:&quot;&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:false,&quot;item&quot;:&quot;add_to_wishlist&quot;}">

                                                                                                        <!-- ADD TO WISHLIST -->

                                                                                                        <div
                                                                                                            class="yith-wcwl-add-button">
                                                                                                            <a href="?add_to_wishlist=1086"
                                                                                                                rel="nofollow"
                                                                                                                data-product-id="1086"
                                                                                                                data-product-type="simple"
                                                                                                                data-original-product-id="1086"
                                                                                                                class="add_to_wishlist single_add_to_wishlist"
                                                                                                                data-title="Add to Wishlist"
                                                                                                                title="Add To WishList"
                                                                                                                tabindex="0">
                                                                                                                <span>Add
                                                                                                                    to
                                                                                                                    Wishlist</span>
                                                                                                            </a>
                                                                                                        </div>
                                                                                                        <!-- COUNT TEXT -->

                                                                                                    </div><a
                                                                                                        href="javascript:void(0)"
                                                                                                        class="compare button"
                                                                                                        data-product_id="1086"
                                                                                                        rel="nofollow"
                                                                                                        title="Add To Compare"
                                                                                                        tabindex="0">Compare</a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="item slick-slide slick-cloned slick-active"
                                                                                    tabindex="0" role="option"
                                                                                    aria-describedby="slick-slide01"
                                                                                    style="width: 225px;"
                                                                                    data-slick-index="6"
                                                                                    aria-hidden="false">
                                                                                    <div class="item-wrap">
                                                                                        <div class="item-detail">
                                                                                            <div
                                                                                                class="item-img products-thumb">
                                                                                                <a href="https://demo.wpthemego.com/themes/sw_revo/product/nisi-ut-aliquid/"
                                                                                                    tabindex="0"><img
                                                                                                        width="300"
                                                                                                        height="300"
                                                                                                        src="https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/f32-300x300.jpg"
                                                                                                        class="attachment-shop_catalog size-shop_catalog wp-post-image lazyloaded"
                                                                                                        alt="nisi ut aliquid"
                                                                                                        sizes="(max-width: 300px) 100vw, 300px"
                                                                                                        srcset="https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/f32-300x300.jpg 300w, https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/f32-100x100.jpg 100w, https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/f32.jpg 600w, https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/f32-150x150.jpg 150w"
                                                                                                        data-ll-status="loaded"><noscript><img
                                                                                                            width="300"
                                                                                                            height="300"
                                                                                                            src="https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/f32-300x300.jpg"
                                                                                                            class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                                                                            alt="nisi ut aliquid"
                                                                                                            srcset="https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/f32-300x300.jpg 300w, https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/f32-100x100.jpg 100w, https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/f32.jpg 600w, https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/f32-150x150.jpg 150w"
                                                                                                            sizes="(max-width: 300px) 100vw, 300px"></noscript></a><a
                                                                                                    href="javascript:void(0)"
                                                                                                    data-product_id="965"
                                                                                                    class="sw-quickview"
                                                                                                    data-type="quickview"
                                                                                                    data-ajax_url="/themes/sw_revo/?wc-ajax=%%endpoint%%"
                                                                                                    tabindex="0">Quick
                                                                                                    View </a>
                                                                                            </div>
                                                                                            <div class="item-content">
                                                                                                <h4><a href="https://demo.wpthemego.com/themes/sw_revo/product/nisi-ut-aliquid/"
                                                                                                        title="nisi ut aliquid"
                                                                                                        tabindex="0">nisi
                                                                                                        ut aliquid</a>
                                                                                                </h4>
                                                                                                <div
                                                                                                    class="cate-name">
                                                                                                    <span
                                                                                                        class="posted_in">
                                                                                                        <a href="https://demo.wpthemego.com/themes/sw_revo/product-category/fashion/"
                                                                                                            rel="tag"
                                                                                                            tabindex="0">Fashion</a></span>
                                                                                                </div>
                                                                                                <!-- price -->
                                                                                                <div
                                                                                                    class="item-price">
                                                                                                    <span>
                                                                                                        <span
                                                                                                            class="woocommerce-Price-amount amount"
                                                                                                            data-original="<bdi><span class=&quot;woocommerce-Price-currencySymbol&quot;>$</span>75.00</bdi>"
                                                                                                            data-price="75"
                                                                                                            title="Original price:75">$75.00</span>
                                                                                                    </span>
                                                                                                </div>

                                                                                                <!-- add to cart, wishlist, compare -->
                                                                                                <div
                                                                                                    class="item-bottom clearfix">
                                                                                                    <a href="?add-to-cart=965"
                                                                                                        data-quantity="1"
                                                                                                        class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                                                                        data-product_id="965"
                                                                                                        data-product_sku=""
                                                                                                        aria-label="Add “nisi ut aliquid” to your cart"
                                                                                                        rel="nofollow"
                                                                                                        title="Add To Cart"
                                                                                                        tabindex="0">Add
                                                                                                        to cart</a>
                                                                                                    <div class="yith-wcwl-add-to-wishlist add-to-wishlist-965  wishlist-fragment on-first-load"
                                                                                                        data-fragment-ref="965"
                                                                                                        data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:false,&quot;is_single&quot;:true,&quot;show_exists&quot;:false,&quot;product_id&quot;:965,&quot;parent_product_id&quot;:965,&quot;product_type&quot;:&quot;simple&quot;,&quot;show_view&quot;:true,&quot;browse_wishlist_text&quot;:&quot;Browse Wishlist&quot;,&quot;already_in_wishslist_text&quot;:&quot;The product is already in the wishlist!&quot;,&quot;product_added_text&quot;:&quot;Product added!&quot;,&quot;heading_icon&quot;:&quot;&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:false,&quot;item&quot;:&quot;add_to_wishlist&quot;}">

                                                                                                        <!-- ADD TO WISHLIST -->

                                                                                                        <div
                                                                                                            class="yith-wcwl-add-button">
                                                                                                            <a href="?add_to_wishlist=965"
                                                                                                                rel="nofollow"
                                                                                                                data-product-id="965"
                                                                                                                data-product-type="simple"
                                                                                                                data-original-product-id="965"
                                                                                                                class="add_to_wishlist single_add_to_wishlist"
                                                                                                                data-title="Add to Wishlist"
                                                                                                                title="Add To WishList"
                                                                                                                tabindex="0">
                                                                                                                <span>Add
                                                                                                                    to
                                                                                                                    Wishlist</span>
                                                                                                            </a>
                                                                                                        </div>
                                                                                                        <!-- COUNT TEXT -->

                                                                                                    </div><a
                                                                                                        href="javascript:void(0)"
                                                                                                        class="compare button"
                                                                                                        data-product_id="965"
                                                                                                        rel="nofollow"
                                                                                                        title="Add To Compare"
                                                                                                        tabindex="0">Compare</a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="item slick-slide slick-cloned slick-active"
                                                                                    tabindex="0" role="option"
                                                                                    aria-describedby="slick-slide02"
                                                                                    style="width: 225px;"
                                                                                    data-slick-index="7"
                                                                                    aria-hidden="false">
                                                                                    <div class="item-wrap">
                                                                                        <div class="item-detail">
                                                                                            <div
                                                                                                class="item-img products-thumb">
                                                                                                <a href="https://demo.wpthemego.com/themes/sw_revo/product/tium-lores-eos/"
                                                                                                    tabindex="0"><img
                                                                                                        width="300"
                                                                                                        height="300"
                                                                                                        src="https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/13-300x300.jpg"
                                                                                                        class="attachment-shop_catalog size-shop_catalog wp-post-image lazyloaded"
                                                                                                        alt="An tium lores eos"
                                                                                                        sizes="(max-width: 300px) 100vw, 300px"
                                                                                                        srcset="https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/13-300x300.jpg 300w, https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/13-100x100.jpg 100w, https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/13.jpg 600w, https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/13-150x150.jpg 150w"
                                                                                                        data-ll-status="loaded"><noscript><img
                                                                                                            width="300"
                                                                                                            height="300"
                                                                                                            src="https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/13-300x300.jpg"
                                                                                                            class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                                                                            alt="An tium lores eos"
                                                                                                            srcset="https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/13-300x300.jpg 300w, https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/13-100x100.jpg 100w, https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/13.jpg 600w, https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/13-150x150.jpg 150w"
                                                                                                            sizes="(max-width: 300px) 100vw, 300px"></noscript></a><a
                                                                                                    href="javascript:void(0)"
                                                                                                    data-product_id="953"
                                                                                                    class="sw-quickview"
                                                                                                    data-type="quickview"
                                                                                                    data-ajax_url="/themes/sw_revo/?wc-ajax=%%endpoint%%"
                                                                                                    tabindex="0">Quick
                                                                                                    View </a>
                                                                                            </div>
                                                                                            <div class="item-content">
                                                                                                <h4><a href="https://demo.wpthemego.com/themes/sw_revo/product/tium-lores-eos/"
                                                                                                        title="An tium lores eos"
                                                                                                        tabindex="0">An
                                                                                                        tium lores
                                                                                                        eos</a></h4>
                                                                                                <div
                                                                                                    class="cate-name">
                                                                                                    <span
                                                                                                        class="posted_in">
                                                                                                        <a href="https://demo.wpthemego.com/themes/sw_revo/product-category/fashion/"
                                                                                                            rel="tag"
                                                                                                            tabindex="0">Fashion</a></span>
                                                                                                </div>
                                                                                                <!-- price -->
                                                                                                <div
                                                                                                    class="item-price">
                                                                                                    <span>
                                                                                                        <span
                                                                                                            class="woocommerce-Price-amount amount"
                                                                                                            data-original="<bdi><span class=&quot;woocommerce-Price-currencySymbol&quot;>$</span>72.00</bdi>"
                                                                                                            data-price="72"
                                                                                                            title="Original price:72">$72.00</span>
                                                                                                    </span>
                                                                                                </div>

                                                                                                <!-- add to cart, wishlist, compare -->
                                                                                                <div
                                                                                                    class="item-bottom clearfix">
                                                                                                    <a href="?add-to-cart=953"
                                                                                                        data-quantity="1"
                                                                                                        class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                                                                        data-product_id="953"
                                                                                                        data-product_sku=""
                                                                                                        aria-label="Add “An tium lores eos” to your cart"
                                                                                                        rel="nofollow"
                                                                                                        title="Add To Cart"
                                                                                                        tabindex="0">Add
                                                                                                        to cart</a>
                                                                                                    <div class="yith-wcwl-add-to-wishlist add-to-wishlist-953  wishlist-fragment on-first-load"
                                                                                                        data-fragment-ref="953"
                                                                                                        data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:false,&quot;is_single&quot;:true,&quot;show_exists&quot;:false,&quot;product_id&quot;:953,&quot;parent_product_id&quot;:953,&quot;product_type&quot;:&quot;simple&quot;,&quot;show_view&quot;:true,&quot;browse_wishlist_text&quot;:&quot;Browse Wishlist&quot;,&quot;already_in_wishslist_text&quot;:&quot;The product is already in the wishlist!&quot;,&quot;product_added_text&quot;:&quot;Product added!&quot;,&quot;heading_icon&quot;:&quot;&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:false,&quot;item&quot;:&quot;add_to_wishlist&quot;}">

                                                                                                        <!-- ADD TO WISHLIST -->

                                                                                                        <div
                                                                                                            class="yith-wcwl-add-button">
                                                                                                            <a href="?add_to_wishlist=953"
                                                                                                                rel="nofollow"
                                                                                                                data-product-id="953"
                                                                                                                data-product-type="simple"
                                                                                                                data-original-product-id="953"
                                                                                                                class="add_to_wishlist single_add_to_wishlist"
                                                                                                                data-title="Add to Wishlist"
                                                                                                                title="Add To WishList"
                                                                                                                tabindex="0">
                                                                                                                <span>Add
                                                                                                                    to
                                                                                                                    Wishlist</span>
                                                                                                            </a>
                                                                                                        </div>
                                                                                                        <!-- COUNT TEXT -->

                                                                                                    </div><a
                                                                                                        href="javascript:void(0)"
                                                                                                        class="compare button"
                                                                                                        data-product_id="953"
                                                                                                        rel="nofollow"
                                                                                                        title="Add To Compare"
                                                                                                        tabindex="0">Compare</a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="item slick-slide slick-cloned"
                                                                                    tabindex="-1" role="option"
                                                                                    aria-describedby="slick-slide03"
                                                                                    style="width: 225px;"
                                                                                    data-slick-index="8"
                                                                                    aria-hidden="true">
                                                                                    <div class="item-wrap">
                                                                                        <div class="item-detail">
                                                                                            <div
                                                                                                class="item-img products-thumb">
                                                                                                <a href="https://demo.wpthemego.com/themes/sw_revo/product/ut-labore-et/"
                                                                                                    tabindex="-1"><img
                                                                                                        width="300"
                                                                                                        height="300"
                                                                                                        src="https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/f11-300x300.jpg"
                                                                                                        class="attachment-shop_catalog size-shop_catalog wp-post-image lazyloaded"
                                                                                                        alt="Ut labore et"
                                                                                                        sizes="(max-width: 300px) 100vw, 300px"
                                                                                                        srcset="https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/f11-300x300.jpg 300w, https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/f11-100x100.jpg 100w, https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/f11.jpg 600w, https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/f11-150x150.jpg 150w"
                                                                                                        data-ll-status="loaded"><noscript><img
                                                                                                            width="300"
                                                                                                            height="300"
                                                                                                            src="https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/f11-300x300.jpg"
                                                                                                            class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                                                                            alt="Ut labore et"
                                                                                                            srcset="https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/f11-300x300.jpg 300w, https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/f11-100x100.jpg 100w, https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/f11.jpg 600w, https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/f11-150x150.jpg 150w"
                                                                                                            sizes="(max-width: 300px) 100vw, 300px"></noscript></a><a
                                                                                                    href="javascript:void(0)"
                                                                                                    data-product_id="941"
                                                                                                    class="sw-quickview"
                                                                                                    data-type="quickview"
                                                                                                    data-ajax_url="/themes/sw_revo/?wc-ajax=%%endpoint%%"
                                                                                                    tabindex="-1">Quick
                                                                                                    View </a>
                                                                                            </div>
                                                                                            <div class="item-content">
                                                                                                <h4><a href="https://demo.wpthemego.com/themes/sw_revo/product/ut-labore-et/"
                                                                                                        title="Ut labore et"
                                                                                                        tabindex="-1">Ut
                                                                                                        labore et</a>
                                                                                                </h4>
                                                                                                <div
                                                                                                    class="cate-name">
                                                                                                    <span
                                                                                                        class="posted_in">
                                                                                                        <a href="https://demo.wpthemego.com/themes/sw_revo/product-category/fashion/"
                                                                                                            rel="tag"
                                                                                                            tabindex="-1">Fashion</a></span>
                                                                                                </div>
                                                                                                <!-- price -->
                                                                                                <div
                                                                                                    class="item-price">
                                                                                                    <span>
                                                                                                        <span
                                                                                                            class="woocommerce-Price-amount amount"
                                                                                                            data-original="<bdi><span class=&quot;woocommerce-Price-currencySymbol&quot;>$</span>85.00</bdi>"
                                                                                                            data-price="85"
                                                                                                            title="Original price:85">$85.00</span>
                                                                                                    </span>
                                                                                                </div>

                                                                                                <!-- add to cart, wishlist, compare -->
                                                                                                <div
                                                                                                    class="item-bottom clearfix">
                                                                                                    <a href="?add-to-cart=941"
                                                                                                        data-quantity="1"
                                                                                                        class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                                                                        data-product_id="941"
                                                                                                        data-product_sku="f-1003"
                                                                                                        aria-label="Add “Ut labore et” to your cart"
                                                                                                        rel="nofollow"
                                                                                                        title="Add To Cart"
                                                                                                        tabindex="-1">Add
                                                                                                        to cart</a>
                                                                                                    <div class="yith-wcwl-add-to-wishlist add-to-wishlist-941  wishlist-fragment on-first-load"
                                                                                                        data-fragment-ref="941"
                                                                                                        data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:false,&quot;is_single&quot;:true,&quot;show_exists&quot;:false,&quot;product_id&quot;:941,&quot;parent_product_id&quot;:941,&quot;product_type&quot;:&quot;simple&quot;,&quot;show_view&quot;:true,&quot;browse_wishlist_text&quot;:&quot;Browse Wishlist&quot;,&quot;already_in_wishslist_text&quot;:&quot;The product is already in the wishlist!&quot;,&quot;product_added_text&quot;:&quot;Product added!&quot;,&quot;heading_icon&quot;:&quot;&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:false,&quot;item&quot;:&quot;add_to_wishlist&quot;}">

                                                                                                        <!-- ADD TO WISHLIST -->

                                                                                                        <div
                                                                                                            class="yith-wcwl-add-button">
                                                                                                            <a href="?add_to_wishlist=941"
                                                                                                                rel="nofollow"
                                                                                                                data-product-id="941"
                                                                                                                data-product-type="simple"
                                                                                                                data-original-product-id="941"
                                                                                                                class="add_to_wishlist single_add_to_wishlist"
                                                                                                                data-title="Add to Wishlist"
                                                                                                                title="Add To WishList"
                                                                                                                tabindex="-1">
                                                                                                                <span>Add
                                                                                                                    to
                                                                                                                    Wishlist</span>
                                                                                                            </a>
                                                                                                        </div>
                                                                                                        <!-- COUNT TEXT -->

                                                                                                    </div><a
                                                                                                        href="javascript:void(0)"
                                                                                                        class="compare button"
                                                                                                        data-product_id="941"
                                                                                                        rel="nofollow"
                                                                                                        title="Add To Compare"
                                                                                                        tabindex="-1">Compare</a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <span data-role="none"
                                                                    class="res-button slick-next slick-arrow"
                                                                    aria-label="next"
                                                                    style="display: inline;"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}

                            </div>

                        </main>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
