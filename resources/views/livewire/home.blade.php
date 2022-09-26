<div>
    <x-slot name="title">Home</x-slot>
    <div class="row">

        <style>
            #alert {
                position: fixed;
                top: 10px;
                right: 10px;
                background-color: green;
                padding: 10px 20px;
                border-radius: 3px;
                color: white;
                font-size: 19px;
            }
            #alert-error{
                position: fixed;
                top: 10px;
                right: 10px;
                background-color: red;
                padding: 10px 20px;
                border-radius: 3px;
                color: white;
                font-size: 19px;
            }
        </style>
        @if (session()->has('success'))
            <div id="alert">{{session('success')}}</div>
        @endif
        @if (session()->has('error'))
        <div id="alert-error">{{session('error')}}</div>
    @endif
        <div id="contents" role="main" class="main-page  col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="post-9 page type-page status-publish hentry">
                <div class="entry-content">
                    <div class="entry-summary">
                        <div data-elementor-type="wp-page" data-elementor-id="9" class="elementor elementor-9"
                            data-elementor-settings="[]">
                            <div class="elementor-inner">
                                <div class="elementor-section-wrap">
                                    <x-slider />

                                    <section
                                        class="elementor-section elementor-top-section elementor-element elementor-element-f098688 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                        data-id="f098688" data-element_type="section">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-row">
                                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-caacce7"
                                                    data-id="caacce7" data-element_type="column">
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div class="elementor-element elementor-element-00ef874 elementor-widget elementor-widget-wp-widget-sw_woo_cat_slider_widget"
                                                                data-id="00ef874" data-element_type="widget"
                                                                data-widget_type="wp-widget-sw_woo_cat_slider_widget.default">
                                                                <div class="elementor-widget-container">
                                                                    <div id="slider_wp-widget-sw_woo_cat_slider_widget"
                                                                        class="responsive-slider sw-category-slider loading"
                                                                        data-append=".resp-slider-container"
                                                                        data-lg="5" data-md="4" data-sm="3"
                                                                        data-xs="3" data-mobile="2" data-speed="1000"
                                                                        data-scroll="1" data-interval="5000"
                                                                        data-autoplay="true">
                                                                        <div class="block-title">
                                                                            <h3 class="font-custome"><span>featured
                                                                                    categories</span></h3>
                                                                        </div>
                                                                        <div class="resp-slider-container">
                                                                            <div class="slider responsive">
                                                                                @foreach ($categories as $category)
                                                                                    <x-category id="{{ $category->id }}"
                                                                                        cname="{{ $category->category_name }}"
                                                                                        image="{{ $category->image }}"
                                                                                        slug="{{ $category->slug }}" />
                                                                                @endforeach
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    {{-- <section
                                        class="elementor-section elementor-top-section elementor-element elementor-element-94cb0dc elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                        data-id="94cb0dc" data-element_type="section">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-row">
                                                <div class="elementor-column elementor-col-66 elementor-top-column elementor-element elementor-element-5ceae40"
                                                    data-id="5ceae40" data-element_type="column">
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div class="elementor-element elementor-element-b4a7797 elementor-widget elementor-widget-wp-widget-sw_woo_slider_countdown_widget"
                                                                data-id="b4a7797" data-element_type="widget"
                                                                data-widget_type="wp-widget-sw_woo_slider_countdown_widget.default">
                                                                <div class="elementor-widget-container">
                                                                    <div id="fashion_sw_countdown_sw_woo_slider_countdown_widget_1"
                                                                        class="sw-woo-container-slider responsive-slider countdown-slider loading"
                                                                        data-lg="1" data-md="1" data-sm="1"
                                                                        data-xs="1" data-mobile="1"
                                                                        data-speed="1000" data-scroll="1"
                                                                        data-interval="5000" data-autoplay="false"
                                                                        data-circle="false">

                                                                        <div class="resp-slider-container">
                                                                            <div class="box-title">
                                                                                <h3>Today deals</h3>
                                                                            </div>
                                                                            <div class="slider responsive">

                                                                                <div class="item-countdown product "
                                                                                    id="product_sw_countdown_sw_woo_slider_countdown_widget_1933">
                                                                                    <div class="item-wrap">
                                                                                        <div class="item-detail">
                                                                                            <div
                                                                                                class="item-image-countdown">
                                                                                                <div
                                                                                                    class="sale-off ">
                                                                                                    -25%</div> <a
                                                                                                    href="product/magni-dolores/"><img
                                                                                                        width="300"
                                                                                                        height="300"
                                                                                                        src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20300%20300'%3E%3C/svg%3E"
                                                                                                        class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                                                                        alt="Magni dolores"
                                                                                                        data-lazy-srcset="{{asset('wp-content/uploads/2016/10/15-300x300.jpg')}} 300w, {{asset('wp-content/uploads/2016/10/15-100x100.jpg')}} 100w, {{asset('wp-content/uploads/2016/10/15.jpg')}} 600w, {{asset('wp-content/uploads/2016/10/15-150x150.jpg')}} 150w"
                                                                                                        data-lazy-sizes="(max-width: 300px) 100vw, 300px"
                                                                                                        data-lazy-src="{{asset('wp-content/uploads/2016/10/15-300x300.jpg')}}"><noscript><img
                                                                                                            width="300"
                                                                                                            height="300"
                                                                                                            src="{{asset('wp-content/uploads/2016/10/15-300x300.jpg')}}"
                                                                                                            class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                                                                            alt="Magni dolores"
                                                                                                            srcset="{{asset('wp-content/uploads/2016/10/15-300x300.jpg')}} 300w, {{asset('wp-content/uploads/2016/10/15-100x100.jpg')}} 100w, {{asset('wp-content/uploads/2016/10/15.jpg')}} 600w, {{asset('wp-content/uploads/2016/10/15-150x150.jpg')}} 150w"
                                                                                                            sizes="(max-width: 300px) 100vw, 300px"></noscript></a><a
                                                                                                    href="javascript:void(0)"
                                                                                                    data-product_id="933"
                                                                                                    class="sw-quickview"
                                                                                                    data-type="quickview"
                                                                                                    data-ajax_url="/themes/sw_revo/?wc-ajax=%%endpoint%%">Quick
                                                                                                    View </a>
                                                                                                <div
                                                                                                    class="sale-off ">
                                                                                                    -25%</div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="item-content">
                                                                                                <h4><a href="product/magni-dolores/"
                                                                                                        title="Magni dolores">Magni
                                                                                                        dolores</a>
                                                                                                </h4>
                                                                                                <!-- rating  -->
                                                                                                <div
                                                                                                    class="reviews-content">
                                                                                                    <div
                                                                                                        class="star">
                                                                                                        <span
                                                                                                            style="width:65px"></span>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="item-number-rating">
                                                                                                        1 Review(s)
                                                                                                    </div>
                                                                                                </div>
                                                                                                <!-- end rating  -->
                                                                                                <div
                                                                                                    class="description">
                                                                                                    Style Code Live
                                                                                                    is a daily, live
                                                                                                    show where style
                                                                                                    enthusiasts can
                                                                                                    connect, chat,
                                                                                                    shop, and get
                                                                                                    the inside scoop
                                                                                                    on the latest
                                                                                                    fashion and
                                                                                                    beauty trends.
                                                                                                </div>
                                                                                                <!-- Price -->
                                                                                                <div
                                                                                                    class="item-price">
                                                                                                    <span>
                                                                                                        <del><span
                                                                                                                class="woocommerce-Price-amount amount"><bdi><span
                                                                                                                        class="woocommerce-Price-currencySymbol">&#36;</span>80.00</bdi></span></del>
                                                                                                        <ins><span
                                                                                                                class="woocommerce-Price-amount amount"><bdi><span
                                                                                                                        class="woocommerce-Price-currencySymbol">&#36;</span>60.00</bdi></span></ins>
                                                                                                    </span>
                                                                                                </div>
                                                                                                <div class="product-countdown"
                                                                                                    data-date="1670889599"
                                                                                                    data-starttime="1592524800">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-element elementor-element-01a36a2 elementor-widget elementor-widget-wp-widget-sw_woo_slider_countdown_widget"
                                                                data-id="01a36a2" data-element_type="widget"
                                                                data-widget_type="wp-widget-sw_woo_slider_countdown_widget.default">
                                                                <div class="elementor-widget-container">
                                                                    <div id="fashion_sw_countdown_sw_woo_slider_countdown_widget_2"
                                                                        class="sw-woo-container-slider responsive-slider countdown-slider2 loading"
                                                                        data-lg="6" data-md="4" data-sm="3"
                                                                        data-xs="2" data-mobile="2"
                                                                        data-speed="1000" data-scroll="1"
                                                                        data-interval="5000" data-autoplay="false"
                                                                        data-circle="false">
                                                                        <div class="resp-slider-container">
                                                                            <div class="slider responsive">
                                                                                <div class="item-countdown product "
                                                                                    id="product_sw_countdown_sw_woo_slider_countdown_widget_2933">
                                                                                    <div class="item-wrap">
                                                                                        <div class="item-detail">
                                                                                            <div
                                                                                                class="item-image-countdown">
                                                                                                <a
                                                                                                    href="product/magni-dolores/"><img
                                                                                                        width="300"
                                                                                                        height="300"
                                                                                                        src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20300%20300'%3E%3C/svg%3E"
                                                                                                        class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                                                                        alt="Magni dolores"
                                                                                                        data-lazy-srcset="{{asset('wp-content/uploads/2016/10/15-300x300.jpg')}} 300w, {{asset('wp-content/uploads/2016/10/15-100x100.jpg')}} 100w, {{asset('wp-content/uploads/2016/10/15.jpg')}} 600w, {{asset('wp-content/uploads/2016/10/15-150x150.jpg')}} 150w"
                                                                                                        data-lazy-sizes="(max-width: 300px) 100vw, 300px"
                                                                                                        data-lazy-src="{{asset('wp-content/uploads/2016/10/15-300x300.jpg')}}"><noscript><img
                                                                                                            width="300"
                                                                                                            height="300"
                                                                                                            src="{{asset('wp-content/uploads/2016/10/15-300x300.jpg')}}"
                                                                                                            class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                                                                            alt="Magni dolores"
                                                                                                            srcset="{{asset('wp-content/uploads/2016/10/15-300x300.jpg')}} 300w, {{asset('wp-content/uploads/2016/10/15-100x100.jpg')}} 100w, {{asset('wp-content/uploads/2016/10/15.jpg')}} 600w, {{asset('wp-content/uploads/2016/10/15-150x150.jpg')}} 150w"
                                                                                                            sizes="(max-width: 300px) 100vw, 300px"></noscript></a><a
                                                                                                    href="javascript:void(0)"
                                                                                                    data-product_id="933"
                                                                                                    class="sw-quickview"
                                                                                                    data-type="quickview"
                                                                                                    data-ajax_url="/themes/sw_revo/?wc-ajax=%%endpoint%%">Quick
                                                                                                    View </a>
                                                                                                <div
                                                                                                    class="sale-off ">
                                                                                                    -25%</div>
                                                                                                <div
                                                                                                    class="sale-off ">
                                                                                                    -25%</div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="item-content">
                                                                                                <h4><a href="product/magni-dolores/"
                                                                                                        title="Magni dolores">Magni
                                                                                                        dolores</a>
                                                                                                </h4>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="item-countdown product "
                                                                                    id="product_sw_countdown_sw_woo_slider_countdown_widget_2942">
                                                                                    <div class="item-wrap">
                                                                                        <div class="item-detail">
                                                                                            <div
                                                                                                class="item-image-countdown">
                                                                                                <a
                                                                                                    href="product/sed-ut-pers/"><img
                                                                                                        width="300"
                                                                                                        height="300"
                                                                                                        src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20300%20300'%3E%3C/svg%3E"
                                                                                                        class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                                                                        alt="Sed ut pers"
                                                                                                        data-lazy-srcset="{{asset('wp-content/uploads/2016/10/f28-300x300.jpg')}} 300w, {{asset('wp-content/uploads/2016/10/f28-100x100.jpg')}} 100w, {{asset('wp-content/uploads/2016/10/f28.jpg')}} 600w, {{asset('wp-content/uploads/2016/10/f28-150x150.jpg')}} 150w"
                                                                                                        data-lazy-sizes="(max-width: 300px) 100vw, 300px"
                                                                                                        data-lazy-src="{{asset('wp-content/uploads/2016/10/f28-300x300.jpg')}}"><noscript><img
                                                                                                            width="300"
                                                                                                            height="300"
                                                                                                            src="{{asset('wp-content/uploads/2016/10/f28-300x300.jpg')}}"
                                                                                                            class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                                                                            alt="Sed ut pers"
                                                                                                            srcset="{{asset('wp-content/uploads/2016/10/f28-300x300.jpg')}} 300w, {{asset('wp-content/uploads/2016/10/f28-100x100.jpg')}} 100w, {{asset('wp-content/uploads/2016/10/f28.jpg')}} 600w, {{asset('wp-content/uploads/2016/10/f28-150x150.jpg')}} 150w"
                                                                                                            sizes="(max-width: 300px) 100vw, 300px"></noscript></a><a
                                                                                                    href="javascript:void(0)"
                                                                                                    data-product_id="942"
                                                                                                    class="sw-quickview"
                                                                                                    data-type="quickview"
                                                                                                    data-ajax_url="/themes/sw_revo/?wc-ajax=%%endpoint%%">Quick
                                                                                                    View </a>
                                                                                                <div
                                                                                                    class="sale-off ">
                                                                                                    -11%</div>
                                                                                                <div
                                                                                                    class="sale-off ">
                                                                                                    -11%</div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="item-content">
                                                                                                <h4><a href="product/sed-ut-pers/"
                                                                                                        title="Sed ut pers">Sed
                                                                                                        ut pers</a>
                                                                                                </h4>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="item-countdown product "
                                                                                    id="product_sw_countdown_sw_woo_slider_countdown_widget_2944">
                                                                                    <div class="item-wrap">
                                                                                        <div class="item-detail">
                                                                                            <div
                                                                                                class="item-image-countdown">
                                                                                                <a
                                                                                                    href="product/natus-error-sit/"><img
                                                                                                        width="300"
                                                                                                        height="300"
                                                                                                        src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20300%20300'%3E%3C/svg%3E"
                                                                                                        class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                                                                        alt="natus error sit"
                                                                                                        data-lazy-srcset="{{asset('wp-content/uploads/2016/10/12-300x300.jpg')}} 300w, {{asset('wp-content/uploads/2016/10/12-100x100.jpg')}} 100w, {{asset('wp-content/uploads/2016/10/12-150x150.jpg')}} 150w, {{asset('wp-content/uploads/2016/10/12.jpg')}} 600w"
                                                                                                        data-lazy-sizes="(max-width: 300px) 100vw, 300px"
                                                                                                        data-lazy-src="{{asset('wp-content/uploads/2016/10/12-300x300.jpg')}}"><noscript><img
                                                                                                            width="300"
                                                                                                            height="300"
                                                                                                            src="{{asset('wp-content/uploads/2016/10/12-300x300.jpg')}}"
                                                                                                            class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                                                                            alt="natus error sit"
                                                                                                            srcset="{{asset('wp-content/uploads/2016/10/12-300x300.jpg')}} 300w, {{asset('wp-content/uploads/2016/10/12-100x100.jpg')}} 100w, {{asset('wp-content/uploads/2016/10/12-150x150.jpg')}} 150w, {{asset('wp-content/uploads/2016/10/12.jpg')}} 600w"
                                                                                                            sizes="(max-width: 300px) 100vw, 300px"></noscript></a><a
                                                                                                    href="javascript:void(0)"
                                                                                                    data-product_id="944"
                                                                                                    class="sw-quickview"
                                                                                                    data-type="quickview"
                                                                                                    data-ajax_url="/themes/sw_revo/?wc-ajax=%%endpoint%%">Quick
                                                                                                    View </a>
                                                                                                <div
                                                                                                    class="sale-off ">
                                                                                                    -33%</div>
                                                                                                <div
                                                                                                    class="sale-off ">
                                                                                                    -33%</div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="item-content">
                                                                                                <h4><a href="product/natus-error-sit/"
                                                                                                        title="natus error sit">natus
                                                                                                        error
                                                                                                        sit</a></h4>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="item-countdown product "
                                                                                    id="product_sw_countdown_sw_woo_slider_countdown_widget_2945">
                                                                                    <div class="item-wrap">
                                                                                        <div class="item-detail">
                                                                                            <div
                                                                                                class="item-image-countdown">
                                                                                                <a
                                                                                                    href="product/eius-modi-tempo/"><img
                                                                                                        width="300"
                                                                                                        height="300"
                                                                                                        src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20300%20300'%3E%3C/svg%3E"
                                                                                                        class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                                                                        alt="eius modi tempo"
                                                                                                        data-lazy-srcset="{{asset('wp-content/uploads/2016/10/14-300x300.jpg')}} 300w, {{asset('wp-content/uploads/2016/10/14-100x100.jpg')}} 100w, {{asset('wp-content/uploads/2016/10/14.jpg')}} 600w, {{asset('wp-content/uploads/2016/10/14-150x150.jpg')}} 150w"
                                                                                                        data-lazy-sizes="(max-width: 300px) 100vw, 300px"
                                                                                                        data-lazy-src="{{asset('wp-content/uploads/2016/10/14-300x300.jpg')}}"><noscript><img
                                                                                                            width="300"
                                                                                                            height="300"
                                                                                                            src="{{asset('wp-content/uploads/2016/10/14-300x300.jpg')}}"
                                                                                                            class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                                                                            alt="eius modi tempo"
                                                                                                            srcset="{{asset('wp-content/uploads/2016/10/14-300x300.jpg')}} 300w, {{asset('wp-content/uploads/2016/10/14-100x100.jpg')}} 100w, {{asset('wp-content/uploads/2016/10/14.jpg')}} 600w, {{asset('wp-content/uploads/2016/10/14-150x150.jpg')}} 150w"
                                                                                                            sizes="(max-width: 300px) 100vw, 300px"></noscript></a><a
                                                                                                    href="javascript:void(0)"
                                                                                                    data-product_id="945"
                                                                                                    class="sw-quickview"
                                                                                                    data-type="quickview"
                                                                                                    data-ajax_url="/themes/sw_revo/?wc-ajax=%%endpoint%%">Quick
                                                                                                    View </a>
                                                                                                <div
                                                                                                    class="sale-off ">
                                                                                                    -27%</div>
                                                                                                <div
                                                                                                    class="sale-off ">
                                                                                                    -27%</div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="item-content">
                                                                                                <h4><a href="product/eius-modi-tempo/"
                                                                                                        title="eius modi tempo">eius
                                                                                                        modi
                                                                                                        tempo</a>
                                                                                                </h4>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="item-countdown product "
                                                                                    id="product_sw_countdown_sw_woo_slider_countdown_widget_2967">
                                                                                    <div class="item-wrap">
                                                                                        <div class="item-detail">
                                                                                            <div
                                                                                                class="item-image-countdown">
                                                                                                <a
                                                                                                    href="product/odit-aut-fugit/"><img
                                                                                                        width="300"
                                                                                                        height="300"
                                                                                                        src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20300%20300'%3E%3C/svg%3E"
                                                                                                        class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                                                                        alt="Odit aut fugit"
                                                                                                        data-lazy-srcset="{{asset('wp-content/uploads/2016/10/5-300x300.jpg')}} 300w, {{asset('wp-content/uploads/2016/10/5-100x100.jpg')}} 100w, {{asset('wp-content/uploads/2016/10/5.jpg')}} 600w, {{asset('wp-content/uploads/2016/10/5-150x150.jpg')}} 150w"
                                                                                                        data-lazy-sizes="(max-width: 300px) 100vw, 300px"
                                                                                                        data-lazy-src="{{asset('wp-content/uploads/2016/10/5-300x300.jpg')}}"><noscript><img
                                                                                                            width="300"
                                                                                                            height="300"
                                                                                                            src="{{asset('wp-content/uploads/2016/10/5-300x300.jpg')}}"
                                                                                                            class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                                                                            alt="Odit aut fugit"
                                                                                                            srcset="{{asset('wp-content/uploads/2016/10/5-300x300.jpg')}} 300w, {{asset('wp-content/uploads/2016/10/5-100x100.jpg')}} 100w, {{asset('wp-content/uploads/2016/10/5.jpg')}} 600w, {{asset('wp-content/uploads/2016/10/5-150x150.jpg')}} 150w"
                                                                                                            sizes="(max-width: 300px) 100vw, 300px"></noscript></a><a
                                                                                                    href="javascript:void(0)"
                                                                                                    data-product_id="967"
                                                                                                    class="sw-quickview"
                                                                                                    data-type="quickview"
                                                                                                    data-ajax_url="/themes/sw_revo/?wc-ajax=%%endpoint%%">Quick
                                                                                                    View </a>
                                                                                                <div
                                                                                                    class="sale-off ">
                                                                                                    -38%</div>
                                                                                                <div
                                                                                                    class="sale-off ">
                                                                                                    -38%</div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="item-content">
                                                                                                <h4><a href="product/odit-aut-fugit/"
                                                                                                        title="Odit aut fugit">Odit
                                                                                                        aut
                                                                                                        fugit</a>
                                                                                                </h4>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="item-countdown product "
                                                                                    id="product_sw_countdown_sw_woo_slider_countdown_widget_21086">
                                                                                    <div class="item-wrap">
                                                                                        <div class="item-detail">
                                                                                            <div
                                                                                                class="item-image-countdown">
                                                                                                <a
                                                                                                    href="product/beatae-vitae-dicta/"><img
                                                                                                        width="300"
                                                                                                        height="300"
                                                                                                        src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20300%20300'%3E%3C/svg%3E"
                                                                                                        class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                                                                        alt="beatae vitae dicta"
                                                                                                        data-lazy-srcset="{{asset('wp-content/uploads/2016/10/f43-300x300.jpg')}} 300w, {{asset('wp-content/uploads/2016/10/f43-100x100.jpg')}} 100w, {{asset('wp-content/uploads/2016/10/f43.jpg')}} 600w, {{asset('wp-content/uploads/2016/10/f43-150x150.jpg')}} 150w"
                                                                                                        data-lazy-sizes="(max-width: 300px) 100vw, 300px"
                                                                                                        data-lazy-src="{{asset('wp-content/uploads/2016/10/f43-300x300.jpg')}}"><noscript><img
                                                                                                            width="300"
                                                                                                            height="300"
                                                                                                            src="{{asset('wp-content/uploads/2016/10/f43-300x300.jpg')}}"
                                                                                                            class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                                                                            alt="beatae vitae dicta"
                                                                                                            srcset="{{asset('wp-content/uploads/2016/10/f43-300x300.jpg')}} 300w, {{asset('wp-content/uploads/2016/10/f43-100x100.jpg')}} 100w, {{asset('wp-content/uploads/2016/10/f43.jpg')}} 600w, {{asset('wp-content/uploads/2016/10/f43-150x150.jpg')}} 150w"
                                                                                                            sizes="(max-width: 300px) 100vw, 300px"></noscript></a><a
                                                                                                    href="javascript:void(0)"
                                                                                                    data-product_id="1086"
                                                                                                    class="sw-quickview"
                                                                                                    data-type="quickview"
                                                                                                    data-ajax_url="/themes/sw_revo/?wc-ajax=%%endpoint%%">Quick
                                                                                                    View </a>
                                                                                                <div
                                                                                                    class="sale-off ">
                                                                                                    -17%</div>
                                                                                                <div
                                                                                                    class="sale-off ">
                                                                                                    -17%</div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="item-content">
                                                                                                <h4><a href="product/beatae-vitae-dicta/"
                                                                                                        title="beatae vitae dicta">beatae
                                                                                                        vitae
                                                                                                        dicta</a>
                                                                                                </h4>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-dcd3ee9"
                                                    data-id="dcd3ee9" data-element_type="column">
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div class="elementor-element elementor-element-1e5a5f1 elementor-widget elementor-widget-wp-widget-sw_woo_slider_widget"
                                                                data-id="1e5a5f1" data-element_type="widget"
                                                                data-widget_type="wp-widget-sw_woo_slider_widget.default">
                                                                <div class="elementor-widget-container">
                                                                    <div id="sw_bestsales_sw_woo_slider_widget_1"
                                                                        class="sw-best-seller-product vc_element">
                                                                        <div class="box-title clearfix">
                                                                            <h3>Best Sellers</h3>
                                                                        </div>
                                                                        <div class="wrap-content">

                                                                            <div class="item product ">
                                                                                <div class="item-inner">
                                                                                    <div class="item-img">
                                                                                        <a href="product/totam-rem-aperiam/"
                                                                                            title="totam rem aperiam">
                                                                                            <img width="100"
                                                                                                height="100"
                                                                                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20100%20100'%3E%3C/svg%3E"
                                                                                                class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image"
                                                                                                alt=""
                                                                                                data-lazy-srcset="{{asset('wp-content/uploads/2016/10/36-100x100.jpg')}} 100w, {{asset('wp-content/uploads/2016/10/36-300x300.jpg')}} 300w, {{asset('wp-content/uploads/2016/10/36.jpg')}} 600w, {{asset('wp-content/uploads/2016/10/36-150x150.jpg')}} 150w"
                                                                                                data-lazy-sizes="(max-width: 100px) 100vw, 100px"
                                                                                                data-lazy-src="{{asset('wp-content/uploads/2016/10/36-100x100.jpg')}}"><noscript><img
                                                                                                    width="100"
                                                                                                    height="100"
                                                                                                    src="{{asset('wp-content/uploads/2016/10/36-100x100.jpg')}}"
                                                                                                    class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image"
                                                                                                    alt=""
                                                                                                    srcset="{{asset('wp-content/uploads/2016/10/36-100x100.jpg')}} 100w, {{asset('wp-content/uploads/2016/10/36-300x300.jpg')}} 300w, {{asset('wp-content/uploads/2016/10/36.jpg')}} 600w, {{asset('wp-content/uploads/2016/10/36-150x150.jpg')}} 150w"
                                                                                                    sizes="(max-width: 100px) 100vw, 100px"></noscript>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="item-content">
                                                                                        <h4><a href="product/totam-rem-aperiam/"
                                                                                                title="totam rem aperiam">totam
                                                                                                rem aperiam</a></h4>
                                                                                        <div class="item-price">
                                                                                            <del><span
                                                                                                    class="woocommerce-Price-amount amount"><bdi><span
                                                                                                            class="woocommerce-Price-currencySymbol">&#36;</span>79.00</bdi></span></del>
                                                                                            <ins><span
                                                                                                    class="woocommerce-Price-amount amount"><bdi><span
                                                                                                            class="woocommerce-Price-currencySymbol">&#36;</span>60.00</bdi></span></ins>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="item product ">
                                                                                <div class="item-inner">
                                                                                    <div class="item-img">
                                                                                        <a href="product/ut-enim-ad-mini-2/"
                                                                                            title="Ut enim ad mini">
                                                                                            <img width="100"
                                                                                                height="100"
                                                                                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20100%20100'%3E%3C/svg%3E"
                                                                                                class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image"
                                                                                                alt=""
                                                                                                data-lazy-srcset="{{asset('wp-content/uploads/2016/10/f8-100x100.jpg')}} 100w, {{asset('wp-content/uploads/2016/10/f8-300x300.jpg')}} 300w, {{asset('wp-content/uploads/2016/10/f8.jpg')}} 600w, {{asset('wp-content/uploads/2016/10/f8-150x150.jpg')}} 150w"
                                                                                                data-lazy-sizes="(max-width: 100px) 100vw, 100px"
                                                                                                data-lazy-src="{{asset('wp-content/uploads/2016/10/f8-100x100.jpg')}}"><noscript><img
                                                                                                    width="100"
                                                                                                    height="100"
                                                                                                    src="{{asset('wp-content/uploads/2016/10/f8-100x100.jpg')}}"
                                                                                                    class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image"
                                                                                                    alt=""
                                                                                                    srcset="{{asset('wp-content/uploads/2016/10/f8-100x100.jpg')}} 100w, {{asset('wp-content/uploads/2016/10/f8-300x300.jpg')}} 300w, {{asset('wp-content/uploads/2016/10/f8.jpg')}} 600w, {{asset('wp-content/uploads/2016/10/f8-150x150.jpg')}} 150w"
                                                                                                    sizes="(max-width: 100px) 100vw, 100px"></noscript>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="item-content">
                                                                                        <h4><a href="product/ut-enim-ad-mini-2/"
                                                                                                title="Ut enim ad mini">Ut
                                                                                                enim ad mini</a>
                                                                                        </h4>
                                                                                        <div class="item-price">
                                                                                            <span
                                                                                                class="woocommerce-Price-amount amount"><bdi><span
                                                                                                        class="woocommerce-Price-currencySymbol">&#36;</span>70.00</bdi></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="item product ">
                                                                                <div class="item-inner">
                                                                                    <div class="item-img">
                                                                                        <a href="product/beatae-vitae-dicta/"
                                                                                            title="beatae vitae dicta">
                                                                                            <img width="100"
                                                                                                height="100"
                                                                                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20100%20100'%3E%3C/svg%3E"
                                                                                                class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image"
                                                                                                alt=""
                                                                                                data-lazy-srcset="{{asset('wp-content/uploads/2016/10/f43-100x100.jpg')}} 100w, {{asset('wp-content/uploads/2016/10/f43-300x300.jpg')}} 300w, {{asset('wp-content/uploads/2016/10/f43.jpg')}} 600w, {{asset('wp-content/uploads/2016/10/f43-150x150.jpg')}} 150w"
                                                                                                data-lazy-sizes="(max-width: 100px) 100vw, 100px"
                                                                                                data-lazy-src="{{asset('wp-content/uploads/2016/10/f43-100x100.jpg')}}"><noscript><img
                                                                                                    width="100"
                                                                                                    height="100"
                                                                                                    src="{{asset('wp-content/uploads/2016/10/f43-100x100.jpg')}}"
                                                                                                    class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image"
                                                                                                    alt=""
                                                                                                    srcset="{{asset('wp-content/uploads/2016/10/f43-100x100.jpg')}} 100w, {{asset('wp-content/uploads/2016/10/f43-300x300.jpg')}} 300w, {{asset('wp-content/uploads/2016/10/f43.jpg')}} 600w, {{asset('wp-content/uploads/2016/10/f43-150x150.jpg')}} 150w"
                                                                                                    sizes="(max-width: 100px) 100vw, 100px"></noscript>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="item-content">
                                                                                        <h4><a href="product/beatae-vitae-dicta/"
                                                                                                title="beatae vitae dicta">beatae
                                                                                                vitae dicta</a></h4>
                                                                                        <div class="item-price">
                                                                                            <del><span
                                                                                                    class="woocommerce-Price-amount amount"><bdi><span
                                                                                                            class="woocommerce-Price-currencySymbol">&#36;</span>72.00</bdi></span></del>
                                                                                            <ins><span
                                                                                                    class="woocommerce-Price-amount amount"><bdi><span
                                                                                                            class="woocommerce-Price-currencySymbol">&#36;</span>60.00</bdi></span></ins>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="item product ">
                                                                                <div class="item-inner">
                                                                                    <div class="item-img">
                                                                                        <a href="product/odit-aut-fugit/"
                                                                                            title="Odit aut fugit">
                                                                                            <img width="100"
                                                                                                height="100"
                                                                                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20100%20100'%3E%3C/svg%3E"
                                                                                                class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image"
                                                                                                alt=""
                                                                                                data-lazy-srcset="{{asset('wp-content/uploads/2016/10/5-100x100.jpg')}} 100w, {{asset('wp-content/uploads/2016/10/5-300x300.jpg')}} 300w, {{asset('wp-content/uploads/2016/10/5.jpg')}} 600w, {{asset('wp-content/uploads/2016/10/5-150x150.jpg')}} 150w"
                                                                                                data-lazy-sizes="(max-width: 100px) 100vw, 100px"
                                                                                                data-lazy-src="{{asset('wp-content/uploads/2016/10/5-100x100.jpg')}}"><noscript><img
                                                                                                    width="100"
                                                                                                    height="100"
                                                                                                    src="{{asset('wp-content/uploads/2016/10/5-100x100.jpg')}}"
                                                                                                    class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image"
                                                                                                    alt=""
                                                                                                    srcset="{{asset('wp-content/uploads/2016/10/5-100x100.jpg')}} 100w, {{asset('wp-content/uploads/2016/10/5-300x300.jpg')}} 300w, {{asset('wp-content/uploads/2016/10/5.jpg')}} 600w, {{asset('wp-content/uploads/2016/10/5-150x150.jpg')}} 150w"
                                                                                                    sizes="(max-width: 100px) 100vw, 100px"></noscript>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="item-content">
                                                                                        <h4><a href="product/odit-aut-fugit/"
                                                                                                title="Odit aut fugit">Odit
                                                                                                aut fugit</a></h4>
                                                                                        <div class="item-price">
                                                                                            <del><span
                                                                                                    class="woocommerce-Price-amount amount"><bdi><span
                                                                                                            class="woocommerce-Price-currencySymbol">&#36;</span>80.00</bdi></span></del>
                                                                                            <ins><span
                                                                                                    class="woocommerce-Price-amount amount"><bdi><span
                                                                                                            class="woocommerce-Price-currencySymbol">&#36;</span>50.00</bdi></span></ins>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section> --}}
                                    <x-banner />
                                    <section
                                        class="elementor-section elementor-top-section elementor-element elementor-element-dc06634 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                        data-id="dc06634" data-element_type="section">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-row">
                                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-bcf345b"
                                                    data-id="bcf345b" data-element_type="column">
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div class="elementor-element elementor-element-41c6b82 elementor-widget elementor-widget-wp-widget-sw_woo_tab_slider"
                                                                data-id="41c6b82" data-element_type="widget"
                                                                data-widget_type="wp-widget-sw_woo_tab_slider.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="sw-wootab-slider sw-ajax sw-woo-tab-default"
                                                                        id="woo_tab_wp-widget-sw_woo_tab_slider5039975331663678713">
                                                                        <div class="resp-tab"
                                                                            style="position:relative;">
                                                                            <div
                                                                                class="category-slider-content  clearfix">
                                                                                <!-- Get child category -->
                                                                                <div class="box-title">
                                                                                    <h3>Fashion</h3>
                                                                                </div>


                                                                                <button
                                                                                    class="button-collapse collapsed pull-right"
                                                                                    type="button"
                                                                                    data-toggle="collapse"
                                                                                    data-target="#nav_wp-widget-sw_woo_tab_slider2821402051663678713"
                                                                                    aria-expanded="false">
                                                                                </button>
                                                                                {{-- <div class="nav-tabs-select">
                                                <ul class="nav nav-tabs"
                                                    id="nav_wp-widget-sw_woo_tab_slider2821402051663678713">
                                                    <li class="active loaded">
                                                        <a href="#latest_wp-widget-sw_woo_tab_slider6768785541663678713"
                                                            data-type="so_ajax" data-layout="default" data-row="2"
                                                            data-length="0"
                                                            data-ajaxurl="/themes/sw_revo/?wc-ajax=%%endpoint%%"
                                                            data-category="fashion" data-toggle="tab"
                                                            data-sorder="latest" data-catload="ajax" data-number="12"
                                                            data-lg="5" data-md="4" data-sm="3" data-xs="2"
                                                            data-mobile="2" data-speed="1000" data-scroll="1"
                                                            data-interval="5000" data-autoplay="false">
                                                            Latest Products </a>
                                                    </li>
                                                    <li>
                                                        <a href="#bestsales_wp-widget-sw_woo_tab_slider6768785541663678713"
                                                            data-type="so_ajax" data-layout="default" data-row="2"
                                                            data-length="0"
                                                            data-ajaxurl="/themes/sw_revo/?wc-ajax=%%endpoint%%"
                                                            data-category="fashion" data-toggle="tab"
                                                            data-sorder="bestsales" data-catload="ajax" data-number="12"
                                                            data-lg="5" data-md="4" data-sm="3" data-xs="2"
                                                            data-mobile="2" data-speed="1000" data-scroll="1"
                                                            data-interval="5000" data-autoplay="false">
                                                            Best Selling
                                                            Products </a>
                                                    </li>
                                                    <li>
                                                        <a href="#rating_wp-widget-sw_woo_tab_slider6768785541663678713"
                                                            data-type="so_ajax" data-layout="default" data-row="2"
                                                            data-length="0"
                                                            data-ajaxurl="/themes/sw_revo/?wc-ajax=%%endpoint%%"
                                                            data-category="fashion" data-toggle="tab"
                                                            data-sorder="rating" data-catload="ajax" data-number="12"
                                                            data-lg="5" data-md="4" data-sm="3" data-xs="2"
                                                            data-mobile="2" data-speed="1000" data-scroll="1"
                                                            data-interval="5000" data-autoplay="false">
                                                            Top Rating Products
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#featured_wp-widget-sw_woo_tab_slider6768785541663678713"
                                                            data-type="so_ajax" data-layout="default" data-row="2"
                                                            data-length="0"
                                                            data-ajaxurl="/themes/sw_revo/?wc-ajax=%%endpoint%%"
                                                            data-category="fashion" data-toggle="tab"
                                                            data-sorder="featured" data-catload="ajax" data-number="12"
                                                            data-lg="5" data-md="4" data-sm="3"
                                                            data-xs="2" data-mobile="2" data-speed="1000"
                                                            data-scroll="1" data-interval="5000"
                                                            data-autoplay="false">
                                                            Featured Products
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div> --}}
                                                                                <!-- End get child category -->
                                                                                <div class="tab-content clearfix">
                                                                                    <div
                                                                                        class="categories-image clearfix">
                                                                                        <div class="item-image">
                                                                                            <!-- Banner -->
                                                                                            <div
                                                                                                class="banner-category clearfix">
                                                                                                <div id="banner_sw_woo_tab_slider_1"
                                                                                                    class="banner-slider"
                                                                                                    data-lg="1"
                                                                                                    data-md="1"
                                                                                                    data-sm="1"
                                                                                                    data-xs="1"
                                                                                                    data-mobile="1"
                                                                                                    data-dots="true"
                                                                                                    data-arrow="false"
                                                                                                    data-fade="false">
                                                                                                    <div
                                                                                                        class="banner-responsive">
                                                                                                        <div
                                                                                                            class="pull-left">
                                                                                                            <a
                                                                                                                href="#"><img
                                                                                                                    width="196"
                                                                                                                    height="544"
                                                                                                                    src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20196%20544'%3E%3C/svg%3E"
                                                                                                                    class="attachment-full size-full"
                                                                                                                    alt=""
                                                                                                                    data-lazy-srcset="{{ asset('wp-content/uploads/2016/10/fashion2.jpg') }} 196w, {{ asset('wp-content/uploads/2016/10/fashion2-108x300.jpg') }} 108w"
                                                                                                                    data-lazy-sizes="(max-width: 196px) 100vw, 196px"
                                                                                                                    data-lazy-src="{{ asset('wp-content/uploads/2016/10/fashion2.jpg') }}" /><noscript><img
                                                                                                                        width="196"
                                                                                                                        height="544"
                                                                                                                        src="{{ asset('wp-content/uploads/2016/10/fashion2.jpg') }}"
                                                                                                                        class="attachment-full size-full"
                                                                                                                        alt=""
                                                                                                                        srcset="{{ asset('wp-content/uploads/2016/10/fashion2.jpg') }} 196w, {{ asset('wp-content/uploads/2016/10/fashion2-108x300.jpg') }} 108w"
                                                                                                                        sizes="(max-width: 196px) 100vw, 196px" /></noscript></a>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>

                                                                                        </div>
                                                                                    </div>


                                                                                    <!-- Product tab slider -->
                                                                                    <div class="tab-pane active"
                                                                                        id="latest_wp-widget-sw_woo_tab_slider6768785541663678713">
                                                                                        <div id="tab_latest_wp-widget-sw_woo_tab_slider6768785541663678713"
                                                                                            class="woo-tab-container-slider responsive-slider loading clearfix"
                                                                                            data-lg="5"
                                                                                            data-md="4"
                                                                                            data-sm="3"
                                                                                            data-xs="2"
                                                                                            data-mobile="2"
                                                                                            data-speed="1000"
                                                                                            data-scroll="1"
                                                                                            data-interval="5000"
                                                                                            data-autoplay="false"
                                                                                            data-img_w="300"
                                                                                            data-img_h="300"
                                                                                            data-crop="false">
                                                                                            <div
                                                                                                class="resp-slider-container">
                                                                                                <div
                                                                                                    class="slider responsive">
                                                                                                    @foreach ($products as $product)
                                                                                                        <x-category-products
                                                                                                            id="{{ $product->id }}"
                                                                                                            title="{{ $product->product_title }}"
                                                                                                            image="{{ $product->image }}"
                                                                                                            sale_price="{{ $product->sale_price }}"
                                                                                                            price="{{ $product->price }}" />
                                                                                                    @endforeach

                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
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
