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

            <li class="nav-item nav-profile dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
                    <img src="../assets/images/faces/face5.jpg" alt="" />
                    <span class="nav-profile-name">Evan Morales</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
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
