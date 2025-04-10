<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title', $settings->site_name ?? config('app.name'))</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('assets/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor.bundle.base.css') }}">
    <!-- endinject -->

    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datepicker.min.css') }}">
    <!-- End plugin css for this page -->
    <link rel="shortcut icon"
        href="{{ asset('assets/images/' . $settings->favicon ?? 'assets/images/default_favicon.png') }}">
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- endinject -->
    <link rel="stylesheet" href="{{ asset('assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    @stack('styles')
    <style>
        /* Sidebar base styling */
        .sidebar {
            background-color: #5e2572;
            color: #ecf0f1;
            font-family: Arial, sans-serif;
            /* height: 100vh; */
            padding-top: 7px;
            padding-bottom: 10px;
        }

        .sidebar .nav-item {
            border-bottom: 1px solid #fff;
        }

        .sidebar .nav-link {
            padding: 15px 25px;
            display: flex;
            align-items: center;
            font-size: 16px;
            color: #ecf0f1;
            text-transform: uppercase;
            font-weight: 500;
            transition: all 0.3s ease;
            border-radius: 4px;
        }

        .sidebar .nav-link:hover {
            background-color: #3e1a52;
            /* color: #3498db; */
        }

        .sidebar .nav-link.active {
            background-color: #3e1a52;
            color: #fff;
        }

        .sidebar .menu-icon {
            margin-right: 15px;
            font-size: 20px;
        }

        .sidebar .menu-title {
            font-weight: 500;
        }

        /* Remove sub-menu and nested styling */
        .sidebar .sub-menu {
            display: none;
        }

        /* For collapsible section, remove icon rotation */
        .menu-arrow {
            display: none;
        }

        /* Hide sidebar-profile-info when sidebar is collapsed */
        .sidebar-collapse-hide {
            display: block;
            /* Show by default */
        }

        /* Hide sidebar-profile-info when sidebar is collapsed */
        .sidebar.collapsed .sidebar-profile-info {
            display: none !important;
        }

        .sidebar.collapsed .sidebar-profile {
            display: none !important;
        }

        .truncate-text {
            display: block;
            max-width: 100%;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .sidebar-profile-name,
        .sidebar-profile-email small {
            font-size: 0.9rem;
        }

        @media (max-width: 576px) {

            .sidebar-profile-name,
            .sidebar-profile-email small {
                font-size: 0.8rem;
            }
        }
    </style>
</head>

<body>
    <div class="page-loading" id="loader">
        <div class="page-loading-inner">

            <div class="square-box-loader mb-5">
                <div class="square-box-loader-container">
                    <div class="square-box-loader-corner-top"></div>
                    <div class="square-box-loader-corner-bottom"></div>
                </div>
                <div class="square-box-loader-square"></div>
            </div>

            <h6 class="loader-text">
                {{ $settings->short_name ?? config('app.name') }}
            </h6>

        </div>

    </div>
    <div class="container-scroller">
        @include('partials.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.html -->
            @include('partials.sidebar')

            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">

                    @yield('content')

                </div>
                <!-- content-wrapper ends -->

                @include('partials.footer')
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>

    <!-- plugins:js -->
    <script src="{{ asset('assets/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->

    <!-- Plugin js for this page -->
    <script src="{{ asset('assets/js/chart.umd.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-datepicker.min.js') }}"></script>
    <!-- End plugin js for this page -->

    <!-- inject:js -->
    <script src="{{ asset('assets/js/off-canvas.js') }}"></script>
    <script src="{{ asset('assets/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('assets/js/template.js') }}"></script>
    <script src="{{ asset('assets/js/settings.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <!-- endinject -->

    <!-- Custom js for this page-->

    @stack('scripts')

</body>

</html>
