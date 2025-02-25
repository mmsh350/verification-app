<nav class="sidebar sidebar-offcanvas mt-0" id="sidebar">
    <!-- User Profile Section -->
    <div class="sidebar-profile text-center p-3">
        <i class="bi bi-person-circle" style="font-size: 3rem; color: #fff;"></i>
        <!-- Bootstrap user-circle icon -->
        <div class="sidebar-profile-info mt-2 d-none d-md-block"> <!-- Hide on mobile by default -->
            <span class="sidebar-profile-name d-block">Evan Morales</span> <!-- User's name -->
            <span class="sidebar-profile-email d-block text-light">evan.morales@example.com</span>
            <!-- User's email -->
        </div>
    </div>

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
            <form action="{{ route('logout') }}" method="POST" class="d-inline">
                @csrf
                <a class="nav-link d-flex align-items-center" style="margin-left:14px;" href="#"
                    onclick="event.preventDefault(); this.closest('form').submit();">
                    <i class="mdi mdi-logout menu-icon"></i>
                    <span class="menu-title">Logout</span>
                </a>
            </form>
        </li>


    </ul>
</nav>
