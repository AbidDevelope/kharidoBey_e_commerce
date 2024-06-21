<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin KharidoBey')</title>
    @include('admin.includes.link')
</head>

<body>

    <!-- Page wrapper start -->
    <div class="page-wrapper">

        <!-- Sidebar wrapper start -->
        <div>
            @include('admin.includes.sidebar')
        </div>
        <!-- Sidebar wrapper end -->

        <!-- **
				************ Main container start *************
			** -->
        <div class="main-container">

            <!-- Page header starts -->
            <header>
                @include('admin.includes.header')
            </header>
            <!-- Page header ends -->

            <!-- Content wrapper scroll start -->
            <div class="content-wrapper-scroll">

                <!-- Content wrapper start -->
                @yield('content')
                <!-- Content wrapper end -->

                <!-- App Footer start -->
                <footer>
                    @include('admin.includes.footer')
                </footer>
                <!-- App footer end -->

            </div>
            <!-- Content wrapper scroll end -->

        </div>
        <!-- **
				************ Main container end *************
			** -->

    </div>
    <!-- Page wrapper end -->
    <!-- **
			************ Required JavaScript Files *************
		** -->
    <!-- Required jQuery first, then Bootstrap Bundle JS -->
    <script src="{{ asset('assets/admin/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/modernizr.js') }}"></script>
    <script src="{{ asset('assets/admin/js/moment.js') }}"></script>

    <!-- **
			************ Vendor Js Files *************
		** -->

    <!-- Overlay Scroll JS -->
    <script src="{{ asset('assets/admin/vendor/overlay-scroll/jquery.overlayScrollbars.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/overlay-scroll/custom-scrollbar.js') }}"></script>

    <!-- Apex Charts -->
    <script src="{{ asset('assets/admin/vendor/apex/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/apex/custom/ecommerce/orders-visits.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/apex/custom/ecommerce/visitors.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/apex/custom/ecommerce/customers.js') }}"></script>

    <!-- jQcloud Keywords -->
	<script src="{{ asset('assets/admin/vendor/tagsCloud/tagsCloud.js') }}"></script>

    <!-- Vector Maps -->
    <script src="{{ asset('assets/admin/vendor/jvectormap/jquery-jvectormap-2.0.5.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/jvectormap/world-mill-en.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/jvectormap/gdp-data.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/jvectormap/custom/world-map-markers.js') }}"></script>

    <!-- Main Js Required -->
    <script src="{{ asset('assets/admin/js/main.js') }}"></script>
</body>

</html>