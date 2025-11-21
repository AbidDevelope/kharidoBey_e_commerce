<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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

    <script type="text/javascript">
        $.ajaxSetup({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        });
    </script>
</body>
</html>
