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
                    <a href="{{ route('brands') }}">
                        <i class="bi bi-collection"></i>
                        <span class="menu-text">Brands</span>
                    </a>
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
                <li class="sidebar-dropdown">
                    <a href="#">
                        <i class="bi bi-stickies"></i>
                        <span class="menu-text">Pages</span>
                    </a>
                    <div class="sidebar-submenu">
                        <ul>
                            <li>
                                <a href="create-invoice.html">Create Invoice</a>
                            </li>
                            <li>
                                <a href="view-invoice.html">View Invoice</a>
                            </li>
                            <li>
                                <a href="invoice-list.html">Invoice List</a>
                            </li>
                            <li>
                                <a href="subscribers.html">Subscribers</a>
                            </li>
                            <li>
                                <a href="contacts.html">Contacts</a>
                            </li>
                            <li>
                                <a href="pricing.html">Pricing</a>
                            </li>
                            <li>
                                <a href="profile.html">Profile</a>
                            </li>
                            <li>
                                <a href="account-settings.html">Account Settings</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="sidebar-dropdown">
                    <a href="#">
                        <i class="bi bi-calendar4"></i>
                        <span class="menu-text">Calendars</span>
                    </a>
                    <div class="sidebar-submenu">
                        <ul>
                            <li>
                                <a href="calendar.html">Daygrid View</a>
                            </li>
                            <li>
                                <a href="calendar-external-draggable.html">External Draggable</a>
                            </li>
                            <li>
                                <a href="calendar-google.html">Google Calendar</a>
                            </li>
                            <li>
                                <a href="calendar-list-view.html">List View</a>
                            </li>
                            <li>
                                <a href="calendar-selectable.html">Selectable</a>
                            </li>
                            <li>
                                <a href="calendar-week-numbers.html">Week Numbers</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="sidebar-dropdown">
                    <a href="#">
                        <i class="bi bi-columns-gap"></i>
                        <span class="menu-text">Forms</span>
                    </a>
                    <div class="sidebar-submenu">
                        <ul>
                            <li>
                                <a href="form-inputs.html">Form Inputs</a>
                            </li>
                            <li>
                                <a href="form-checkbox-radio.html">Checkbox &amp; Radio</a>
                            </li>
                            <li>
                                <a href="form-file-input.html">File Input</a>
                            </li>
                            <li>
                                <a href="form-validations.html">Validations</a>
                            </li>
                            <li>
                                <a href="bs-select.html">Bootstrap Select</a>
                            </li>
                            <li>
                                <a href="date-time-pickers.html">Date Time Pickers</a>
                            </li>
                            <li>
                                <a href="input-mask.html">Input Masks</a>
                            </li>
                            <li>
                                <a href="summernote.html">Summernote</a>
                            </li>
                            <li>
                                <a href="form-layout1.html">Form Layout</a>
                            </li>
                            <li>
                                <a href="form-layout2.html">Form Layout 2</a>
                            </li>
                            <li>
                                <a href="form-layout3.html">Form Layout 3</a>
                            </li>
                            <li>
                                <a href="form-layout4.html">Form Layout Horizontal</a>
                            </li>
                            <li>
                                <a href="form-layout5.html">Form Layout Tabs</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="sidebar-dropdown">
                    <a href="#">
                        <i class="bi bi-window-split"></i>
                        <span class="menu-text">Tables</span>
                    </a>
                    <div class="sidebar-submenu">
                        <ul>
                            <li>
                                <a href="tables.html">Tables</a>
                            </li>
                            <li>
                                <a href="data-tables.html">Data Tables</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="sidebar-dropdown">
                    <a href="#">
                        <i class="bi bi-pie-chart"></i>
                        <span class="menu-text">Graphs &amp; Maps</span>
                    </a>
                    <div class="sidebar-submenu">
                        <ul>
                            <li>
                                <a href="apex.html">Apex</a>
                            </li>
                            <li>
                                <a href="morris.html">Morris</a>
                            </li>
                            <li>
                                <a href="maps.html">Maps</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="sidebar-dropdown">
                    <a href="#">
                        <i class="bi bi-layout-sidebar"></i>
                        <span class="menu-text">Layouts</span>
                    </a>
                    <div class="sidebar-submenu">
                        <ul>
                            <li>
                                <a href="layout.html">Default Layout</a>
                            </li>
                            <li>
                                <a href="layout-grid.html">Grid Layout</a>
                            </li>
                            <li>
                                <a href="layout-mega-menu.html">Mega Menu</a>
                            </li>
                            <li>
                                <a href="layout-full-screen.html">Full Screen</a>
                            </li>
                            <li>
                                <a href="layout-toggle-screen.html">Toggle Screen</a>
                            </li>
                            <li>
                                <a href="layout-welcome.html">Welcome Layout</a>
                            </li>
                            <li>
                                <a href="layout-dark-sidebar.html">Dark Sidebar</a>
                            </li>
                            <li>
                                <a href="layout-logo-large.html">Full Logo</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="sidebar-dropdown">
                    <a href="#">
                        <i class="bi bi-x-diamond"></i>
                        <span class="menu-text">Authentication</span>
                    </a>
                    <div class="sidebar-submenu">
                        <ul>
                            <li>
                                <a href="login.html">Login</a>
                            </li>
                            <li>
                                <a href="signup.html">Signup</a>
                            </li>
                            <li>
                                <a href="error.html">Error</a>
                            </li>
                            <li>
                                <a href="maintenance.html">Maintenance</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="starter-page.html">
                        <i class="bi bi-hand-index-thumb"></i>
                        <span class="menu-text">Link</span>
                    </a>
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