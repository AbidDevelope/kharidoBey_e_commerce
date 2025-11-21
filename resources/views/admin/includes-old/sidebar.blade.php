<!-- Sidebar wrapper start -->
<nav class="sidebar-wrapper">

    <!-- Sidebar brand starts -->
    <div class="sidebar-brand">
        <a href="{{ route('dashboard') }}" class="logo">
            <img src="{{ asset('assets/admin/images/icon/kharidoBey.png') }}" alt="Melon Admin Dashboard" />
        </a>
    </div>
    <!-- Sidebar brand starts -->

    <!-- Sidebar menu starts -->
    <div class="sidebar-menu">
        <div class="sidebarMenuScroll">
            <ul>
                <li class="active">
                    <a href="{{ route('dashboard') }}" class="current-page">
                        <i class="bi bi-house"></i>
                        <span class="menu-text">Dashboards</span>
                    </a>
                </li>
                <li class="sidebar-dropdown">
                    <a href="#">
                        <i class="bi bi-gem"></i>
                        <span class="menu-text">Category</span>
                    </a>
                    <div class="sidebar-submenu">
                        <ul>
                            <li>
                                <a href="{{ route('categories') }}">Category</a>
                            </li>
                            <li>
                                <a href="{{ route('sub_categories') }}">Sub Category</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="sidebar-dropdown">
                    <a href="#">
                        <i class="bi bi-collection"></i>
                        <span class="menu-text">Brands</span>
                    </a>
                    <div class="sidebar-submenu">
                        <ul>
                            <li>
                                <a href="{{ route('brands/add') }}">Add Brand</a>
                            </li>
                            <li>
                                <a href="{{ route('brands') }}">Brands</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="sidebar-dropdown">
                    <a href="#">
                        <i class="bi bi-handbag"></i>
                        <span class="menu-text">Products</span>
                    </a>
                    <div class="sidebar-submenu">
                        <ul>
                            <li>
                                <a href="{{ route('products') }}">Products</a>
                            </li>
                            <li>
                                <a href="{{ route('products/add') }}">Add Product</a>
                            </li>
                        </ul>
                    </div>
                </li>
           
            </ul>
        </div>
    </div>
    <!-- Sidebar menu ends -->

</nav>
<!-- Sidebar wrapper end -->

<!-- Overlay Scroll JS -->
<script src="{{ asset('assets/admin/vendor/overlay-scroll/jquery.overlayScrollbars.min.js') }}"></script>
<script src="{{ asset('assets/admin/vendor/overlay-scroll/custom-scrollbar.js') }}"></script>