@props(['id', 'cname', 'image', 'slug'])
{{-- @props(['id','cname','image','slug']) --}}


<div class="item item-product-cat">
    <div class="item-image">
        <a href="product-category/bags/" title="Bags"><img width="210" height="270"
                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20210%20270'%3E%3C/svg%3E"
                class="attachment-full size-full" alt=""
                data-lazy-src="{{ $image }}" /><noscript><img width="210"
                    height="270" src="{{ $image }}"
                    class="attachment-full size-full" alt="" /></noscript></a>
    </div>
    <div class="item-content">
        <h3><a href="/{{$slug}}">{{$cname}}</a>
        </h3>
    </div>
</div>
