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
                <li class="{{Request::routeIs('admin.dashboard') ?'active':''}}">
                    <a class="sidenav-item-link" href="index.html">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span class="nav-text">Dashboard</span>
                    </a>
                    <hr>
                </li>
                <!-- Category -->
                <li class="has-sub {{Request::routeIs('admin.category') ?'active':''}}">
                    <a class="sidenav-item-link" href="javascript:void(0)">
                        <i class="mdi mdi-dns-outline"></i>
                        <span class="nav-text">Categories</span> <b class="caret"></b>
                    </a>
                    <div class="collapse">
                        <ul class="sub-menu" id="categorys" data-parent="#sidebar-menu">
                            <li class="">
                                <a class="sidenav-item-link" href="{{ route('admin.category') }}">
                                    <span class="nav-text">Main Category</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="has-sub {{Request::routeIs('admin.sub-category') ?'active':''}}">
                    <a class="sidenav-item-link" href="javascript:void(0)">
                        <i class="mdi mdi-dns-outline"></i>
                        <span class="nav-text">Sub Categories</span> <b class="caret"></b>
                    </a>
                    <div class="collapse">
                        <ul class="sub-menu" id="categorys" data-parent="#sidebar-menu">
                            <li class="">
                                <a class="sidenav-item-link" href="{{ route('admin.sub-category') }}">
                                    <span class="nav-text">Sub Category</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="{{Request::routeIs('admin.vendor') ?'active':''}} ">
                    <a class="sidenav-item-link" href="{{ route('admin.vendor') }}">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span class="nav-text">Vendor</span>
                    </a>
                </li>

                <li class=" {{Request::routeIs('admin.product') ?'active':''}}">
                    <a class="sidenav-item-link" href="{{ route('admin.product') }}">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span class="nav-text">Product</span>
                    </a>
                </li>
                <li class=" {{Request::routeIs('admin.slider') ?'active':''}}">
                    <a class="sidenav-item-link" href="{{ route('admin.slider') }}">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span class="nav-text">Slider</span>
                    </a>
                </li>
                <li class=" {{Request::routeIs('admin.about') ?'active':''}}">
                    <a class="sidenav-item-link" href="{{ route('admin.about') }}">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span class="nav-text">About</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>