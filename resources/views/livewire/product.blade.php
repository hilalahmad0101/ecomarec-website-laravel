<div>
    <x-slot name='title'>Products</x-slot>
    <div class="revo_breadcrumbs">
        <div class="container">
            <div class="breadcrumbs custom-font theme-clearfix">
                <ul class="breadcrumb">
                    <li><a href="https://demo.wpthemego.com/themes/sw_revo">Home</a><span class="go-page"></span></li>
                    <li class="active"><span>You searched for " "</span></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="listing-title">
            <h1><span>Search Results for <small> {{$category_name != null ? $category_name:''}} </small></span></h1>
        </div>
        <div id="search-product" class="content-list-category container">
            <div class="row">
               <x-category-navigation  products=""/>
                <div id="contents" class="content col-lg-9 col-md-9 col-sm-12" role="main">
                    <div class="content_list_product">
                        <div class="products-wrapper">
                            <ul id="loop-products" class="products-loop row clearfix grid-view grid" data-postids=""
                                data-attributes="item  col-lg-3 col-md-4 col-sm-6 col-xs-6" data-maxpage="13">

                                @forelse ($products as $product)
                                <li
                                class="item col-lg-3 col-md-4 col-sm-6 col-xs-6 post-963 product type-product status-publish has-post-thumbnail product_cat-fashion first instock featured shipping-taxable purchasable product-type-simple"
                                >
                                <div class="item-wrap">
                                    <div class="item-detail">
                                        <div class="item-img products-thumb">
                                            <!-- quickview & thumbnail  -->
                                            <a
                                                href="{{ route('product-detail', ['id'=>$product->id]) }}"><img
                                                    width="300" height="300"
                                                    src="{{ $product->image}}"
                                                    class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                    alt="Iste natus error"
                                                    sizes="(max-width: 300px) 100vw, 300px"></a>
                                        </div>
                                        <div class="item-content">
                                            <h4><a href="{{ route('product-detail', ['id'=>$product->id]) }}"
                                                    title="Iste natus error">{{$product->product_title}}</a></h4>

                                            <!-- rating  -->
                                            <div class="reviews-content">
                                                <div class="star"></div>
                                            </div>
                                            <!-- end rating  -->
                                            <div class="item-price">
                                                <span>
                                                    <span class="woocommerce-Price-amount amount"
                                                        data-original="<bdi><span class=&quot;woocommerce-Price-currencySymbol&quot;>$</span>80.00</bdi>"
                                                        data-price="{{$product->price}}" title="Original price:80">{{$product->price}}</span>
                                                </span>
                                            </div>
                                            <div class="item-bottom clearfix"><a href="?add-to-cart=963"
                                                    data-quantity="1"
                                                    class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                    data-product_id="963" data-product_sku=""
                                                    aria-label="Add “Iste natus error” to your cart"
                                                    rel="nofollow" title="Add To Cart">Add to cart</a>
                                                <div class="yith-wcwl-add-to-wishlist add-to-wishlist-963  wishlist-fragment on-first-load"
                                                    data-fragment-ref="963"
                                                    data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:false,&quot;is_single&quot;:false,&quot;show_exists&quot;:false,&quot;product_id&quot;:963,&quot;parent_product_id&quot;:963,&quot;product_type&quot;:&quot;simple&quot;,&quot;show_view&quot;:false,&quot;browse_wishlist_text&quot;:&quot;Browse Wishlist&quot;,&quot;already_in_wishslist_text&quot;:&quot;The product is already in the wishlist!&quot;,&quot;product_added_text&quot;:&quot;Product added!&quot;,&quot;heading_icon&quot;:&quot;&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:false,&quot;item&quot;:&quot;add_to_wishlist&quot;}">

                                                    <!-- ADD TO WISHLIST -->

                                                    <div class="yith-wcwl-add-button">
                                                        <a href="?add_to_wishlist=963" rel="nofollow"
                                                            data-product-id="963" data-product-type="simple"
                                                            data-original-product-id="963"
                                                            class="add_to_wishlist single_add_to_wishlist"
                                                            data-title="Add to Wishlist" title="Add To WishList">
                                                            <span>Add to Wishlist</span>
                                                        </a>
                                                    </div>
                                                    <!-- COUNT TEXT -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                                @empty
                                    <h2>Record not found</h2>
                                @endforelse
                               
                            </ul>
                            <!--Pagination-->
                            <div class="pag-search ">
                                <div class="pagination nav-pag pull-right">
                                    <ul class="page-numbers">
                                        <li><a class="prev page-numbers"
                                                href="https://demo.wpthemego.com/themes/sw_revo/page/12/?category_product=appliances&amp;s&amp;search_posttype=product"><i
                                                    class="fa fa-angle-left"></i></a></li>
                                        <li><a class="page-numbers"
                                                href="https://demo.wpthemego.com/themes/sw_revo/page/1/?category_product=appliances&amp;s&amp;search_posttype=product">1</a>
                                        </li>
                                        <li><span class="page-numbers dots">…</span></li>
                                        <li><a class="page-numbers"
                                                href="https://demo.wpthemego.com/themes/sw_revo/page/12/?category_product=appliances&amp;s&amp;search_posttype=product">12</a>
                                        </li>
                                        <li><span aria-current="page" class="page-numbers current">13</span></li>
                                    </ul>
                                </div>
                            </div>
                            <!--End Pagination-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
