<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CalmUI Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('assets/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor.bundle.base.css') }}">
    <!-- endinject -->

    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datepicker.min.css') }}">
    <!-- End plugin css for this page -->

    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- endinject -->

    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}">
    <style>
        /* Sidebar base styling */
        .sidebar {
            background-color: #5e2572;
            color: #ecf0f1;
            font-family: Arial, sans-serif;
            height: 100vh;
            padding-top: 20px;
            padding-bottom: 20px;
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
            background-color: #34495e;
            color: #3498db;
        }

        .sidebar .nav-link.active {
            background-color: #2980b9;
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

        /* Default style (for larger screens) */
        .price {
            font-size: 2rem;
            /* Default font size for larger screens */
            white-space: normal;
            /* Allow wrapping on larger screens */
            overflow: visible;
            /* Allow content to overflow if necessary */
            text-overflow: unset;
            /* Reset ellipsis */
            line-height: 1.2;
            /* Standard line height */
        }

        /* Style for smaller screens (e.g., mobile or tablet) */
        @media (max-width: 767px) {
            .price {
                font-size: 1.2rem;
                /* Adjust font size for smaller screens */
                white-space: nowrap;
                /* Prevent text from wrapping */
                overflow: hidden;
                /* Hide overflow */
                text-overflow: ellipsis;
                /* Show ellipsis if text overflows */
            }
        }

        /* General Styles for Service Cards */
        .service-card-body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .icon-box {
            margin-bottom: 1.5rem;
        }

        .icon-box-media {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #5e2572;
            border-radius: 50%;
            width: 70px;
            height: 70px;
        }

        .icon-box-title {
            font-weight: bolder;
            font-size: 1.25rem;
            color: #333;
        }

        /* Responsive Layout */
        @media (max-width: 768px) {
            .icon-box-media {
                width: 60px;
                height: 60px;
            }

            .icon-box-title {
                font-size: 1rem;
            }
        }

        /* Ensures 2 items per row on mobile (smaller than 576px) */
        @media (max-width: 576px) {
            .col-6 {
                flex: 0 0 50%;
                max-width: 50%;
            }

            .icon-box-media {
                width: 50px;
                height: 50px;
            }

            .icon-box-title {
                font-size: 0.9rem;
            }
        }
    </style>

</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->

        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="navbar-menu-wrapper d-flex align-items-stretch justify-content-between">
                <ul class="navbar-nav me-lg-2 d-none d-lg-flex">
                    <li class="nav-item nav-toggler-item">
                        <button class="navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
                            <span class="mdi mdi-menu"></span>
                        </button>
                    </li>
                    <li class="nav-item nav-search d-none d-lg-flex">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="search">
                                    <i class="mdi mdi-magnify"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" placeholder="search" aria-label="search"
                                aria-describedby="search">
                        </div>
                    </li>
                </ul>
                <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                    <a class="navbar-brand brand-logo" href="index.html"><img src="../assets/images/logo.svg"
                            alt="logo" /></a>
                    <a class="navbar-brand brand-logo-mini" href="index.html"><img src="../assets/images/logo-mini.svg"
                            alt="logo" /></a>
                </div>
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item dropdown">
                        <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#"
                            data-bs-toggle="dropdown">
                            <i class="mdi mdi-bell-outline mx-0"></i>
                            <span class="count"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                            aria-labelledby="notificationDropdown">
                            <a class="dropdown-item">
                                <p class="mb-0 fw-normal float-start">You have 4 new notifications
                                </p>
                                <span class="badge badge-pill bg-warning float-end">View all</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-success">
                                        <i class="mdi mdi-information mx-0"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <h6 class="preview-subject fw-medium">Application Error</h6>
                                    <p class="fw-light small-text mb-0">
                                        Just now
                                    </p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-warning">
                                        <i class="mdi mdi-cog mx-0"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <h6 class="preview-subject fw-medium">Settings</h6>
                                    <p class="fw-light small-text mb-0">
                                        Private message
                                    </p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-info">
                                        <i class="mdi mdi-account-box mx-0"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <h6 class="preview-subject fw-medium">New user registration</h6>
                                    <p class="fw-light small-text mb-0">
                                        2 days ago
                                    </p>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                            id="profileDropdown">
                            <img src="../assets/images/faces/face5.jpg" alt="profile" />
                            <span class="nav-profile-name">Evan Morales</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown"
                            aria-labelledby="profileDropdown">
                            <a class="dropdown-item">
                                <i class="mdi mdi-cog text-primary"></i>
                                Settings
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item">
                                <i class="mdi mdi-logout text-primary"></i>
                                Logout
                            </a>
                        </div>
                    </li>

                    <li class="nav-item nav-toggler-item-right d-lg-none">
                        <button class="navbar-toggler align-self-center" type="button" data-bs-toggle="offcanvas">
                            <span class="mdi mdi-menu"></span>
                        </button>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial -->
            <!-- partial:partials/_sidebar.html -->
            <!-- partial -->
            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <!-- Dashboard Section -->
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">
                            <i class="mdi mdi-view-dashboard menu-icon"></i>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>

                    <!-- Verification Section -->
                    <li class="nav-item">
                        <a class="nav-link" href="./pages/widgets/widgets.html">
                            <i class="mdi mdi-check-circle-outline menu-icon"></i>
                            <span class="menu-title">Verify NIN</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="./pages/widgets/widgets.html">
                            <i class="mdi mdi-check-circle-outline menu-icon"></i>
                            <span class="menu-title">Verify BVN</span>
                        </a>
                    </li>

                    <!-- Support Section -->
                    <li class="nav-item">
                        <a class="nav-link" href="./pages/widgets/widgets.html">
                            <i class="mdi mdi-lifebuoy menu-icon"></i>
                            <span class="menu-title">Support</span>
                        </a>
                    </li>

                    <!-- Logout Section -->
                    <li class="nav-item">
                        <a class="nav-link" href="./pages/widgets/widgets.html">
                            <i class="mdi mdi-logout menu-icon"></i>
                            <span class="menu-title">Logout</span>
                        </a>
                    </li>
                </ul>
            </nav>




            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-lg-8 grid-margin d-flex flex-column">
                            <div class="row">
                                <div class="col-md-6 col-6 grid-margin stretch-card">
                                    <div class="card hover-shadow">
                                        <div class="card-body text-center">
                                            <div class="text-primary mb-2">
                                                <i class="mdi mdi-wallet-outline mdi-36px"></i>
                                                <p class="fw-medium mt-3">Main Wallet</p>
                                            </div>
                                            <h1 class="fw-light price">₦1,450,000</h1>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-6 grid-margin stretch-card">
                                    <div class="card hover-shadow">
                                        <div class="card-body text-center">
                                            <div class="text-danger mb-2">
                                                <i class="mdi mdi-gift-outline mdi-36px"></i>
                                                <p class="fw-medium mt-3">Bonus Wallet</p>
                                            </div>
                                            <h1 class="fw-light price">₦80,927</h1>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row flex-grow-1">
                                <!-- Left side column containing the icons -->
                                <div class="col-lg-6 col-12">
                                    <div class="container py-5">
                                        <h4 class="fw-light mb-4 text-center">Our Services</h4>
                                        <div class="row g-4">
                                            <!-- Service 1 -->
                                            <div class="col-6 col-md-6 col-lg-4">
                                                <div class="card shadow-sm border-0 h-100">
                                                    <div class="service-card-body text-center">
                                                        <div class="icon-box mb-3">
                                                            <div class="icon-box-media mx-auto"
                                                                style="background-color:#5e2572; width: 70px; height: 70px; border-radius: 50%;">
                                                                <i class="bi bi-printer text-white"
                                                                    style="font-size: 35px;"></i>
                                                            </div>
                                                        </div>
                                                        <h5 class="icon-box-title mb-0" style="font-weight: bolder;">
                                                            Print NIN Slip</h5>
                                                        <a href="https://adamcyverify.com.ng/Instant_nin_slip"
                                                            class="stretched-link"></a>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Service 2 -->
                                            <div class="col-6 col-md-6 col-lg-4">
                                                <div class="card shadow-sm border-0 h-100">
                                                    <div class="service-card-body text-center">
                                                        <div class="icon-box mb-3">
                                                            <div class="icon-box-media mx-auto"
                                                                style="background-color:#5e2572; width: 70px; height: 70px; border-radius: 50%;">
                                                                <i class="bi bi-card-checklist text-white"
                                                                    style="font-size: 35px;"></i>
                                                            </div>
                                                        </div>
                                                        <h5 class="icon-box-title mb-0" style="font-weight: bolder;">
                                                            Verify NIN</h5>
                                                        <a href="https://adamcyverify.com.ng/verify_nin"
                                                            class="stretched-link"></a>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Service 3 -->
                                            <div class="col-6 col-md-6 col-lg-4">
                                                <div class="card shadow-sm border-0 h-100">
                                                    <div class="service-card-body text-center">
                                                        <div class="icon-box mb-3">
                                                            <div class="icon-box-media mx-auto"
                                                                style="background-color:#5e2572; width: 70px; height: 70px; border-radius: 50%;">
                                                                <i class="bi bi-people text-white"
                                                                    style="font-size: 35px;"></i>
                                                            </div>
                                                        </div>
                                                        <h5 class="icon-box-title mb-1" style="font-weight: bolder;">
                                                            NIN Services</h5>
                                                        <a href="https://adamcyverify.com.ng/nin_services"
                                                            class="stretched-link"></a>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Service 4 -->
                                            <div class="col-6 col-md-6 col-lg-4">
                                                <div class="card shadow-sm border-0 h-100">
                                                    <div class="service-card-body text-center">
                                                        <div class="icon-box mb-3">
                                                            <div class="icon-box-media mx-auto"
                                                                style="background-color:#5e2572; width: 70px; height: 70px; border-radius: 50%;">
                                                                <i class="bi bi-check-circle text-white"
                                                                    style="font-size: 35px;"></i>
                                                            </div>
                                                        </div>
                                                        <h5 class="mdi mdi-cogs mb-0" style="font-weight: bolder;">
                                                            Verify BVN</h5>
                                                        <a href="https://adamcyverify.com.ng/verify_bvn"
                                                            class="stretched-link"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>







                                </div>

                                <!-- Right side column for transaction table -->
                                <div class="col-lg-6 stretch-card">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Last (20) Transactions</h4>

                                            <div class="table-responsive">
                                                <table class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>User</th>
                                                            <th>Product</th>
                                                            <th>Sale</th>
                                                            <th>Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Jacob</td>
                                                            <td>Photoshop</td>
                                                            <td class="text-danger">28.76% <i
                                                                    class="mdi mdi-arrow-down"></i></td>
                                                            <td><label class="badge bg-danger">Pending</label></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Messsy</td>
                                                            <td>Flash</td>
                                                            <td class="text-danger">21.06% <i
                                                                    class="mdi mdi-arrow-down"></i></td>
                                                            <td><label class="badge bg-warning">In progress</label>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>John</td>
                                                            <td>Premier</td>
                                                            <td class="text-danger">35.00% <i
                                                                    class="mdi mdi-arrow-down"></i></td>
                                                            <td><label class="badge bg-info">Fixed</label></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Peter</td>
                                                            <td>After effects</td>
                                                            <td class="text-success">82.00% <i
                                                                    class="mdi mdi-arrow-up"></i></td>
                                                            <td><label class="badge bg-success">Completed</label></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Dave</td>
                                                            <td>53275535</td>
                                                            <td class="text-success">98.05% <i
                                                                    class="mdi mdi-arrow-up"></i></td>
                                                            <td><label class="badge bg-warning">In progress</label>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-4 grid-margin stretch-card">
                            <div class="card d-flex flex-column justify-content-between">
                                <div class="card-body">


                                    <h4 class="fw-light mb-0">Virtual Accounts</h4>

                                    <p class="mt-3 mb-0 text-muted">Lorem ipsum doller sit amete Lorem ipsum doller
                                        sit
                                        amete Lorem ipsum doller sit amete Lorem ipsum doller sit amete</p>
                                </div>
                                <div class="card-body px-0 pb-0 d-flex flex-column justify-content-between">

                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright ©
                            2024 <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrapdash</a>. All
                            rights
                            reserved.</span>
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted &
                            made
                            with <i class="mdi mdi-heart text-danger"></i></span>
                    </div>
                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

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
    <script src="{{ asset('assets/js/todolist.js') }}"></script>
    <!-- endinject -->

    <!-- Custom js for this page-->
    <script src="{{ asset('assets/js/dashboard.js') }}"></script>

    <!-- End custom js for this page-->
</body>

</html>
