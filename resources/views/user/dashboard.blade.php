@extends('layouts.dashboard')

@section('title', 'Dashboard')
@push('styles')
    <style>
        /* Sidebar base styling */
        .sidebar {
            background-color: #5e2572;
            color: #ecf0f1;
            font-family: Arial, sans-serif;
            height: 100vh;
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
            /* background-color: #3e1a52; */
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
            font-size: 1rem;
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

        /* Custom CSS for icon box */
        .icon-box-media {
            transition: transform 0.3s ease;
        }

        .icon-box-media:hover {
            transform: scale(1.1);
        }

        /* Custom CSS for cards */
        .card {
            transition: box-shadow 0.3s ease;
        }

        .card:hover {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
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
    </style>
@endpush
@section('content')
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
                <div class="col-lg-6 col-12 col-md-6">
                    <div class="container py-5">
                        <h4 class="fw-light mb-4 text-center">Our Services</h4>
                        <div class="row g-4">
                            <!-- Service 1 -->
                            <div class="col-6 col-md-6 col-lg-4">
                                <div class="card shadow-sm border-0 h-100">
                                    <div class="card-body text-center p-3">
                                        <div class="icon-box mb-3">
                                            <div class="icon-box-media mx-auto d-flex align-items-center justify-content-center bg-primary rounded-circle"
                                                style="width: 70px; height: 70px;">
                                                <i class="bi bi-fingerprint text-white" style="font-size: 35px;"></i>
                                            </div>
                                        </div>
                                        <h5 class="icon-box-title mb-0 fw-bold">Verify NIN</h5>
                                        <a href="#" class="stretched-link"></a>
                                    </div>
                                </div>
                            </div>

                            <!-- Service 2 -->
                            <div class="col-6 col-md-6 col-lg-4">
                                <div class="card shadow-sm border-0 h-100">
                                    <div class="card-body text-center p-3">
                                        <div class="icon-box mb-3">
                                            <div class="icon-box-media mx-auto d-flex align-items-center justify-content-center bg-primary rounded-circle"
                                                style="width: 70px; height: 70px;">
                                                <i class="bi bi-fingerprint text-white" style="font-size: 35px;"></i>
                                            </div>
                                        </div>
                                        <h5 class="icon-box-title mb-0 fw-bold">Verify BVN</h5>
                                        <a href="#" class="stretched-link"></a>
                                    </div>
                                </div>
                            </div>


                            <div class="col-6 col-md-6 col-lg-4">
                                <div class="card shadow-sm border-0 h-100">
                                    <div class="card-body text-center p-3">
                                        <div class="icon-box mb-3">
                                            <div class="icon-box-media mx-auto d-flex align-items-center justify-content-center bg-primary rounded-circle"
                                                style="width: 70px; height: 70px;">
                                                <i class="bi bi-search text-white" style="font-size: 35px;"></i>
                                            </div>
                                        </div>
                                        <h5 class="icon-box-title mb-0 fw-bold">Personalize</h5>
                                        <a href="#" class="stretched-link"></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Service 3 -->
                            <div class="col-6 col-md-6 col-lg-4">
                                <div class="card shadow-sm border-0 h-100">
                                    <div class="card-body text-center p-3">
                                        <div class="icon-box mb-3">
                                            <div class="icon-box-media mx-auto d-flex align-items-center justify-content-center bg-primary rounded-circle"
                                                style="width: 70px; height: 70px;">
                                                <i class="bi bi-arrow-repeat text-white" style="font-size: 35px;"></i>
                                            </div>
                                        </div>
                                        <h5 class="icon-box-title mb-0 fw-bold">BVN Modification</h5>
                                        <a href="#" class="stretched-link"></a>
                                    </div>
                                </div>
                            </div>

                            <!-- Service 4 -->
                            <div class="col-6 col-md-6 col-lg-4">
                                <div class="card shadow-sm border-0 h-100">
                                    <div class="card-body text-center p-3">
                                        <div class="icon-box mb-3">
                                            <div class="icon-box-media mx-auto d-flex align-items-center justify-content-center bg-primary rounded-circle"
                                                style="width: 70px; height: 70px;">
                                                <i class="bi bi-arrow-left-right text-white" style="font-size: 35px;"></i>
                                            </div>
                                        </div>
                                        <h5 class="icon-box-title mb-0 fw-bold">CRM Request</h5>
                                        <a href="#" class="stretched-link"></a>
                                    </div>
                                </div>
                            </div>

                            <!-- Service 5 -->
                            <div class="col-6 col-md-6 col-lg-4">
                                <div class="card shadow-sm border-0 h-100">
                                    <div class="card-body text-center p-3">
                                        <div class="icon-box mb-3">
                                            <div class="icon-box-media mx-auto d-flex align-items-center justify-content-center bg-primary rounded-circle"
                                                style="width: 70px; height: 70px;">
                                                <i class="bi bi-person-plus text-white" style="font-size: 35px;"></i>
                                            </div>
                                        </div>
                                        <h5 class="icon-box-title mb-0 fw-bold">BVN Enrollment</h5>
                                        <a href="#" class="stretched-link"></a>
                                    </div>
                                </div>
                            </div>

                            {{-- <!-- Service 6 -->
                        <div class="col-6 col-md-6 col-lg-4">
                            <div class="card shadow-sm border-0 h-100">
                                <div class="card-body text-center p-3">
                                    <div class="icon-box mb-3">
                                        <div class="icon-box-media mx-auto d-flex align-items-center justify-content-center bg-primary rounded-circle"
                                            style="width: 70px; height: 70px;">
                                            <i class="bi bi-person-badge text-white"
                                                style="font-size: 35px;"></i>
                                        </div>
                                    </div>
                                    <h5 class="icon-box-title mb-0 fw-bold">NIN SERVICES</h5>
                                    <a href="#"
                                        class="stretched-link"></a>
                                </div>
                            </div>
                        </div> --}}
                        </div>
                    </div>
                </div>

                <!-- Right side column for transaction table -->
                <div class="col-lg-6 stretch-card">
                    <div class="card h-100">
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
                                            <td class="text-danger">28.76% <i class="bi bi-arrow-down"></i></td>
                                            <td><span class="badge bg-danger">Pending</span></td>
                                        </tr>
                                        <tr>
                                            <td>Messsy</td>
                                            <td>Flash</td>
                                            <td class="text-danger">21.06% <i class="bi bi-arrow-down"></i></td>
                                            <td><span class="badge bg-warning">In progress</span></td>
                                        </tr>
                                        <tr>
                                            <td>John</td>
                                            <td>Premier</td>
                                            <td class="text-danger">35.00% <i class="bi bi-arrow-down"></i></td>
                                            <td><span class="badge bg-info">Fixed</span></td>
                                        </tr>
                                        <tr>
                                            <td>Peter</td>
                                            <td>After effects</td>
                                            <td class="text-success">82.00% <i class="bi bi-arrow-up"></i></td>
                                            <td><span class="badge bg-success">Completed</span></td>
                                        </tr>
                                        <tr>
                                            <td>Dave</td>
                                            <td>53275535</td>
                                            <td class="text-success">98.05% <i class="bi bi-arrow-up"></i></td>
                                            <td><span class="badge bg-warning">In progress</span></td>
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
@endsection
@push('scripts')
    <script>
        document.querySelector('.navbar-toggler').addEventListener('click', function() {
            const sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('collapsed');
        });
    </script>
@endpush
