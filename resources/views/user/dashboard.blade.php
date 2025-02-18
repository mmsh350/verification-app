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
            <!-- partial:partials/_settings-panel.html -->


            <!-- partial -->
            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">
                            <i class="mdi mdi-view-dashboard menu-icon"></i>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link collapsed" data-bs-toggle="collapse" href="#ui-basic"
                            aria-expanded="false" aria-controls="ui-basic">
                            <i class="mdi mdi-account-check menu-icon"></i>
                            <span class="menu-title">Verification</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="ui-basic">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item">
                                    <a class="nav-link" href="./pages/ui-features/accordions.html">Verify NIN</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="./pages/ui-features/buttons.html">Verify BVN</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="./pages/widgets/widgets.html">
                            <i class="mdi mdi-lifebuoy menu-icon"></i>
                            <span class="menu-title">Support</span>
                        </a>
                    </li>
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
                                <div class="col-md-3 grid-margin stretch-card">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <div class="text-primary mb-4">
                                                <i class="mdi mdi-account-multiple mdi-36px"></i>
                                                <p class="fw-medium mt-2">Customers</p>
                                            </div>
                                            <h1 class="fw-light">45679</h1>
                                            <p class="text-muted mb-0">Increase by 20%</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 grid-margin stretch-card">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <div class="text-danger mb-4">
                                                <i class="mdi mdi-chart-pie mdi-36px"></i>
                                                <p class="fw-medium mt-2">Orders</p>
                                            </div>
                                            <h1 class="fw-light">80927</h1>
                                            <p class="text-muted mb-0">Increase by 60%</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 grid-margin stretch-card">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <div class="text-info mb-4">
                                                <i class="mdi mdi-car mdi-36px"></i>
                                                <p class="fw-medium mt-2">Delivery</p>
                                            </div>
                                            <h1 class="fw-light">22339</h1>
                                            <p class="text-muted mb-0">Decrease by 2%</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 grid-margin stretch-card">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <div class="text-success mb-4">
                                                <i class="mdi mdi-account-check-outline mdi-36px"></i>
                                                <p class="fw-medium mt-2">Users</p>
                                            </div>
                                            <h1 class="fw-light">+1900</h1>
                                            <p class="text-muted mb-0">Steady growth</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row flex-grow-1">
                                <div class="col-lg-6 grid-margin grid-margin-lg-0 stretch-card">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Product categories</h4>
                                            <div class="chart-container">
                                                <canvas id="sales-status-chart"></canvas>
                                            </div>
                                            <div id="sales-status-chart-legend" class="mt-3 chartjs-legend"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 stretch-card">
                                    <div class="card">
                                        <div class="card-body d-flex flex-column justify-content-between">
                                            <div class="d-flex justify-content-between align-items-start">
                                                <h4 class="card-title">Product visits</h4>
                                                <div class="dropdown">
                                                    <button
                                                        class="btn btn-sm btn-outline-secondary btn-rounded dropdown-toggle text-black"
                                                        type="button" id="dropdownMenuButton2"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        This week
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                                        <a class="dropdown-item" href="#">This day</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">This month</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">This week</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">This year</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <canvas id="sales-chart"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 grid-margin stretch-card">
                            <div class="card d-flex flex-column justify-content-between">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-start">
                                        <h4 class="card-title">Revenue</h4>
                                        <div class="dropdown mb-4">
                                            <button
                                                class="btn btn-sm btn-outline-secondary btn-rounded dropdown-toggle text-black"
                                                type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                                This week
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#">This day</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">This month</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">This week</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">This year</a>
                                            </div>
                                        </div>
                                    </div>
                                    <h1 class="fw-normal">36568</h1>
                                    <h4 class="fw-light mb-0">Total revenue</h4>
                                    <div class="d-md-flex justify-content-start mt-5">
                                        <div class="mb-3 mb-lg-0">
                                            <h4 class="fw-light text-primary">+40%</h4>
                                            <p class="text-primary mb-0">Growth</p>
                                        </div>
                                        <div class="mb-3 mb-lg-0 ms-md-4">
                                            <h4 class="fw-light text-danger">2.5%</h4>
                                            <p class="text-danger mb-0">Refund</p>
                                        </div>
                                        <div class="ms-md-4">
                                            <h4 class="fw-light text-info">+23.6%</h4>
                                            <p class="text-info mb-0">Online</p>
                                        </div>
                                    </div>
                                    <p class="mt-3 mb-0 text-muted">Lorem ipsum doller sit amete Lorem ipsum doller sit
                                        amete Lorem ipsum doller sit amete Lorem ipsum doller sit amete</p>
                                </div>
                                <div class="card-body px-0 pb-0 d-flex flex-column justify-content-between">
                                    <canvas id="statistics-chart" class="mt-auto"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Calendar</h4>
                                    <div id="inline-datepicker-example" class="datepicker"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Best sellers</h4>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>
                                                        Name
                                                    </th>
                                                    <th>
                                                        Sales
                                                    </th>
                                                    <th>
                                                        Stock
                                                    </th>
                                                    <th>
                                                        Category
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        Moon Fever
                                                    </td>
                                                    <td>
                                                        42070
                                                    </td>
                                                    <td>
                                                        801
                                                    </td>
                                                    <td>
                                                        Cynthialand
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Dude You Re Getting A Telescope
                                                    </td>
                                                    <td>
                                                        38667
                                                    </td>
                                                    <td>
                                                        882
                                                    </td>
                                                    <td>
                                                        West Janie
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Telescopes 101
                                                    </td>
                                                    <td>
                                                        12467
                                                    </td>
                                                    <td>
                                                        181
                                                    </td>
                                                    <td>
                                                        Harrisport
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Asteroids
                                                    </td>
                                                    <td>
                                                        8118
                                                    </td>
                                                    <td>
                                                        336
                                                    </td>
                                                    <td>
                                                        West Furmanstad
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        The Glossary Of Telescopes
                                                    </td>
                                                    <td>
                                                        21136
                                                    </td>
                                                    <td>
                                                        979
                                                    </td>
                                                    <td>
                                                        Lake Berenice
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body d-flex flex-column justify-content-between">
                                    <h4 class="card-title">Statistics</h4>
                                    <div>
                                        <h1 class="fw-normal">87659</h1>
                                        <h4 class="fw-light mb-0">Last 6 months sales</h4>
                                    </div>
                                    <canvas id="orders-chart"></canvas>
                                    <div id="orders-chart-legend" class="chartjs-legend orders-legend"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Tickets</h4>
                                    <div class="d-flex border-bottom pb-3">
                                        <img src="../assets/images/faces/face1.jpg" alt="profile"
                                            class="img-xs rounded-circle" />
                                        <div class="flex-grow-1 ms-3">
                                            <p>Dollie Ellis</p>
                                            <div class="d-flex text-muted">
                                                <p class="mb-0">Friesenview</p>
                                                <p class="ms-auto mb-0">12:45</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex border-bottom py-3">
                                        <img src="../assets/images/faces/face2.jpg" alt="profile"
                                            class="img-xs rounded-circle" />
                                        <div class="flex-grow-1 ms-3">
                                            <p>Lillie Long</p>
                                            <div class="d-flex text-muted">
                                                <p class="mb-0">Susiehaven</p>
                                                <p class="ms-auto mb-0">10:33</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex border-bottom py-3">
                                        <img src="../assets/images/faces/face3.jpg" alt="profile"
                                            class="img-xs rounded-circle" />
                                        <div class="flex-grow-1 ms-3">
                                            <p>Lloyd Harper</p>
                                            <div class="d-flex text-muted">
                                                <p class="mb-0">South Hilbert</p>
                                                <p class="ms-auto mb-0">11:10</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex pt-3">
                                        <img src="../assets/images/faces/face4.jpg" alt="profile"
                                            class="img-xs rounded-circle" />
                                        <div class="flex-grow-1 ms-3">
                                            <p>Bradley Foster</p>
                                            <div class="d-flex text-muted">
                                                <p class="mb-0">Deshawnhaven</p>
                                                <p class="ms-auto mb-0">13:20</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Activity timeline</h4>
                                    <ul class="bullet-line-list">
                                        <li>
                                            <p class="text-muted mb-2">24 May 2018</p>
                                            <p>Vacation Home Rental Success</p>
                                        </li>
                                        <li>
                                            <p class="text-muted mb-2">25 May 2018</p>
                                            <p>Online Games How To Play To Win</p>
                                        </li>
                                        <li>
                                            <p class="text-muted mb-2">26 May 2018</p>
                                            <p>Big Savings On Gas</p>
                                        </li>
                                        <li>
                                            <p class="text-muted mb-2">27 May 2018</p>
                                            <p class="mb-0">A Time Travel Postcard</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2024 <a
                                href="https://www.bootstrapdash.com/" target="_blank">Bootstrapdash</a>. All rights
                            reserved.</span>
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made
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
