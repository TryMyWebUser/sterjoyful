<nav class="navbar">
    <!-- nav Logo -->
    <div class="logo-item">
        <i class="bi bi-list" id="sidebarOpen"></i>
        <a href="index.php">
            <img src="../assets/images/logo-2.png" Style="width: 5rem;" alt="Brand Logo">
        </a>
    </div>
    <!-- /nav Logo -->
    <!-- Navbar Content -->
    <div class="navbar-content">
        <div class="navbar-icons d-flex align-items-center">
            <!-- Light<->Dark Switch -->
            <div class="theme-switcher">
                <span class="toggle" data-theme-toggle-value="light" aria-pressed="false">
                    <div class="btn btn-icon">
                        <i class="bi bi-brightness-high"></i>
                    </div>
                </span>

                <span class="toggle active" data-theme-toggle-value="dark" aria-pressed="true">
                    <div class="btn btn-icon">
                        <i class="bi bi-moon"></i>
                    </div>
                </span>
                <span class="toggle" data-theme-toggle-value="auto" aria-pressed="false">
                    <div class="btn btn-icon">
                        <i class="bi bi-laptop"></i>
                    </div>
                </span>
            </div>
            <!-- /Light<->Dark Switch -->
        </div>
        <!-- Profile Dropdown -->
        <div class="dropdown">
            <img src="assets/img/avatars/Memoji/colored-bg/Memoji-21.png" alt="" class="profile dropdown-toggle" data-bs-toggle="dropdown" />
            <div class="dropdown-menu profile-dropdown shadow">
                <div class="user-info">
                    <div class="user-avatar">
                        <img src="assets/img/avatars/Memoji/colored-bg/Memoji-21.png" alt="" class="profile-img" />
                    </div>
                    <div class="user-bio">
                        <h6 class="username">STERjoyful Private Limited</h6>
                        <p class="user-role">
                            <span class="role">Admin</span>
                        </p>
                    </div>
                </div>

                <a class="log-out" href="#!">
                    <div class="log-btn">
                        <i class="bi bi-box-arrow-right"></i>
                        <span class="">Log out</span>
                    </div>
                </a>
            </div>
        </div>
        <!-- /Profile Dropdown -->
    </div>
    <!-- /Navbar Content -->
</nav>