<div class="ec-left-sidebar ec-bg-sidebar">
    <div id="sidebar" class="sidebar ec-sidebar-footer">

        <div class="ec-brand">
            <a href="index.html" title="Ekka">
                <img class="ec-brand-icon" src="assets/img/logo/ec-site-logo.png" alt="" />
                <span class="ec-brand-name text-truncate">Ekka</span>
            </a>
        </div>
        
        <!-- begin sidebar scrollbar -->
        <div class="ec-navigation" data-simplebar>
            <!-- sidebar menu -->
            <ul class="nav sidebar-inner" id="sidebar-menu">
                <!-- Dashboard -->
                <li class="">
                    <a class="sidenav-item-link" href="{{route('vendor.dashboard') }}">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span class="nav-text">Dashboard</span>
                    </a>
                    <hr>
                </li>
                <!-- Category -->
                <li class="has-sub ">
                    <a class="sidenav-item-link" href="javascript:void(0)">
                        <i class="mdi mdi-dns-outline"></i>
                        <span class="nav-text">Products</span> <b class="caret"></b>
                    </a>
                    <div class="collapse">
                        <ul class="sub-menu" id="categorys" data-parent="#sidebar-menu">
                            <li class="{{Request::routeIs('vendor.products') ? 'active':''}}">
                                <a class="sidenav-item-link" href="{{route('vendor.products') }}">
                                    <span class="nav-text">List Products</span>
                                </a>
                            </li>
                            <li class="{{Request::routeIs('vendor.add-products') ? 'active':''}}">
                                <a class="sidenav-item-link" href="{{route('vendor.add-products') }}">
                                    <span class="nav-text">Add Products</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                {{-- <li class="has-sub">
                    <a class="sidenav-item-link" href="javascript:void(0)">
                        <i class="mdi mdi-dns-outline"></i>
                        <span class="nav-text">Sub Categories</span> <b class="caret"></b>
                    </a>
                    <div class="collapse">
                        <ul class="sub-menu" id="categorys" data-parent="#sidebar-menu">
                            <li class="">
                                <a class="sidenav-item-link" href="{{ route('vendor.order') }}">
                                    <span class="nav-text">Sub Category</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li> --}}
                <li class="{{Request::routeIs('vendor.order') ?'active':''}} ">
                    <a class="sidenav-item-link" href="{{ route('vendor.order') }}">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span class="nav-text">Order</span>
                    </a>
                </li>
{{-- 
                <li class=" {{Request::routeIs('vendor.product') ?'active':''}}">
                    <a class="sidenav-item-link" href="{{ route('vendor.products') }}">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span class="nav-text">Product</span>
                    </a>
                </li> --}}
                <li class=" {{Request::routeIs('vendor.change-password') ?'active':''}}">
                    <a class="sidenav-item-link" href="{{ route('vendor.change-password') }}">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span class="nav-text">change Password</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>