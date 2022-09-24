@props(['products'])

<aside id="left" class="sidebar col-lg-3 col-md-3 col-sm-12">
    <div id="woocommerce_product_categories-3"
        class="widget-1 widget-first widget woocommerce_product_categories-3 woocommerce widget_product_categories">
        <div class="widget-inner">
            <div class="block-title-widget">
                <h2><span>Categories</span></h2>
            </div>
            <ul class="product-categories" data-number="10" data-moretext="See More" data-lesstext="See Less">
                @if ($products)

                    @php
                        $categories = App\Models\Category::where('status', 1)->get();
                    @endphp

                    @forelse ($categories as $category)
                        <li class="cat-item cat-item-221">
                            <a href="{{ route('category-product', ['slug'=>$category->slug]) }}">{{ $category->category_name }}</a>
                        </li>
                    @empty
                        <h3>Record not found</h3>
                    @endforelse
                    <li class="showMore"><a>See More +</a></li>
                @else
                    @php
                        $categories = App\Models\Category::where('status', 1)->get();
                    @endphp

                    @forelse ($categories as $category)
                        <li class="cat-item cat-item-221">
                            <a href="#"
                                wire:click.prevent="showCategoryProduct('{{ $category->slug }}')">{{ $category->category_name }}</a>
                        </li>
                    @empty
                        <h3>Record not found</h3>
                    @endforelse
                    <li class="showMore"><a>See More +</a></li>
                @endif
            </ul>
        </div>
    </div>
    {{-- <div id="text-9" class="widget-5 widget-last widget text-9 widget_text">
        <div class="widget-inner">
            <div class="textwidget">
                <div id="bestsale-19398182191664017996" class="sw-best-seller-product vc_element">
                    <div class="box-title">
                        <h3>BEST SELLER</h3>
                    </div>
                    <div class="wrap-content">

                        <div class="item">
                            <div class="item-inner">
                                <div class="item-img">
                                    <a href="https://demo.wpthemego.com/themes/sw_revo/product/totam-rem-aperiam/"
                                        title="totam rem aperiam">
                                        <img width="100" height="100"
                                            src="https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/36-100x100.jpg"
                                            class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image"
                                            alt=""
                                            srcset="https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/36-100x100.jpg 100w, https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/36-300x300.jpg 300w, https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/36.jpg 600w, https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/36-150x150.jpg 150w"
                                            sizes="(max-width: 100px) 100vw, 100px"> </a>
                                </div>
                                <div class="item-content">
                                    <h4><a href="https://demo.wpthemego.com/themes/sw_revo/product/totam-rem-aperiam/"
                                            title="totam rem aperiam">totam rem aperiam</a></h4>
                                    <div class="item-price"><del><span class="woocommerce-Price-amount amount"
                                                data-original="<bdi><span class=&quot;woocommerce-Price-currencySymbol&quot;>$</span>79.00</bdi>"
                                                data-price="79" title="">$79.00</span></del>
                                        <ins><span class="woocommerce-Price-amount amount"
                                                data-original="<bdi><span class=&quot;woocommerce-Price-currencySymbol&quot;>$</span>60.00</bdi>"
                                                data-price="60" title="Original price:60">$60.00</span></ins>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="item-inner">
                                <div class="item-img">
                                    <a href="https://demo.wpthemego.com/themes/sw_revo/product/ut-enim-ad-mini-2/"
                                        title="Ut enim ad mini">
                                        <img width="100" height="100"
                                            src="https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/f8-100x100.jpg"
                                            class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image"
                                            alt=""
                                            srcset="https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/f8-100x100.jpg 100w, https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/f8-300x300.jpg 300w, https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/f8.jpg 600w, https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/f8-150x150.jpg 150w"
                                            sizes="(max-width: 100px) 100vw, 100px"> </a>
                                </div>
                                <div class="item-content">
                                    <h4><a href="https://demo.wpthemego.com/themes/sw_revo/product/ut-enim-ad-mini-2/"
                                            title="Ut enim ad mini">Ut enim ad mini</a></h4>
                                    <div class="item-price"><span class="woocommerce-Price-amount amount"
                                            data-original="<bdi><span class=&quot;woocommerce-Price-currencySymbol&quot;>$</span>70.00</bdi>"
                                            data-price="70" title="Original price:70">$70.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="item-inner">
                                <div class="item-img">
                                    <a href="https://demo.wpthemego.com/themes/sw_revo/product/beatae-vitae-dicta/"
                                        title="beatae vitae dicta">
                                        <img width="100" height="100"
                                            src="https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/f43-100x100.jpg"
                                            class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image"
                                            alt=""
                                            srcset="https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/f43-100x100.jpg 100w, https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/f43-300x300.jpg 300w, https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/f43.jpg 600w, https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/f43-150x150.jpg 150w"
                                            sizes="(max-width: 100px) 100vw, 100px"> </a>
                                </div>
                                <div class="item-content">
                                    <h4><a href="https://demo.wpthemego.com/themes/sw_revo/product/beatae-vitae-dicta/"
                                            title="beatae vitae dicta">beatae vitae dicta</a></h4>
                                    <div class="item-price"><del><span class="woocommerce-Price-amount amount"
                                                data-original="<bdi><span class=&quot;woocommerce-Price-currencySymbol&quot;>$</span>72.00</bdi>"
                                                data-price="72" title="Original price:72">$72.00</span></del>
                                        <ins><span class="woocommerce-Price-amount amount"
                                                data-original="<bdi><span class=&quot;woocommerce-Price-currencySymbol&quot;>$</span>60.00</bdi>"
                                                data-price="60" title="Original price:60">$60.00</span></ins>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="item-inner">
                                <div class="item-img">
                                    <a href="https://demo.wpthemego.com/themes/sw_revo/product/neque-porro-quis/"
                                        title="Neque porro quis">
                                        <img width="100" height="100"
                                            src="https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/3-100x100.jpg"
                                            class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image"
                                            alt=""
                                            srcset="https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/3-100x100.jpg 100w, https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/3-300x300.jpg 300w, https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/3.jpg 600w, https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/10/3-150x150.jpg 150w"
                                            sizes="(max-width: 100px) 100vw, 100px"> </a>
                                </div>
                                <div class="item-content">
                                    <h4><a href="https://demo.wpthemego.com/themes/sw_revo/product/neque-porro-quis/"
                                            title="Neque porro quis">Neque porro quis</a></h4>
                                    <div class="item-price"><span class="woocommerce-Price-amount amount"
                                            data-original="<bdi><span class=&quot;woocommerce-Price-currencySymbol&quot;>$</span>70.00</bdi>"
                                            data-price="70" title="Original price:70">$70.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div> --}}
</aside>
