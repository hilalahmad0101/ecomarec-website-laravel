<aside id="sidebar" class="bg-side-nav w-1/2 md:w-1/6 lg:w-1/6 border-r border-side-nav hidden md:block lg:block">

    <ul class="list-reset flex flex-col">
        <li class=" w-full h-full py-3 px-2 border-b border-light-border bg-white">
            <a href="{{ route('admin.dashboard') }}"
               class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                <i class="fas fa-tachometer-alt float-left mx-2"></i>
                Dashboard
                <span><i class="fas fa-angle-right float-right"></i></span>
            </a>
        </li>
        <li class=" w-full h-full py-3 px-2 border-b border-light-border bg-white">
            <a href="{{ route('admin.category') }}"
               class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                <i class="fas fa-tachometer-alt float-left mx-2"></i>
                Category
                <span><i class="fas fa-angle-right float-right"></i></span>
            </a>
        </li>
        <li class=" w-full h-full py-3 px-2 border-b border-light-border bg-white">
            <a href="{{ route('admin.sub-category') }}"
               class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                <i class="fas fa-tachometer-alt float-left mx-2"></i>
                Sub Category
                <span><i class="fas fa-angle-right float-right"></i></span>
            </a>
        </li>
        <li class=" w-full h-full py-3 px-2 border-b border-light-border bg-white">
            <a href="{{ route('admin.vendor') }}"
               class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                <i class="fas fa-tachometer-alt float-left mx-2"></i>
                Vendor
                <span><i class="fas fa-angle-right float-right"></i></span>
            </a>
        </li>
        <li class=" w-full h-full py-3 px-2 border-b border-light-border bg-white">
            <a href="{{ route('admin.product') }}"
               class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                <i class="fas fa-tachometer-alt float-left mx-2"></i>
                Product
                <span><i class="fas fa-angle-right float-right"></i></span>
            </a>
        </li>
        <livewire:admin.auth.logout />
       
    </ul>

</aside>