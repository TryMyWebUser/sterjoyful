<nav class="navbar">
    <!-- nav Logo -->
    <div class="logo-item">
        <i class="bi bi-list" id="sidebarOpen"></i>
        <a href="index.php">
            <svg class="logo" width="128" height="53" viewBox="0 0 128 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_289_13794)">
                    <path
                        class="logo-svg"
                        d="M79.7311 34.2624H68.6318L66.5182 39.405H60.8418L71.4942 15.3901H76.9653L87.6539 39.405H81.8446L79.7311 34.2624ZM77.9798 30.0416L74.1875 20.8481L70.3951 30.0416H77.9798Z"
                        fill="#5956FF"
                    />
                    <path class="logo-svg" d="M90.1416 15.3901H95.6731V39.405H90.1416V15.3901Z" fill="#5956FF" />
                    <path
                        class="logo-svg"
                        d="M106.217 38.2043C104.225 37.1248 102.667 35.6451 101.543 33.7652C100.42 31.8731 99.8525 29.7627 99.8525 27.3976C99.8525 25.0446 100.42 22.9221 101.543 21.03C102.667 19.1379 104.225 17.6582 106.217 16.5909C108.21 15.5114 110.445 14.9778 112.933 14.9778C115.42 14.9778 117.643 15.5114 119.623 16.5909C121.604 17.6704 123.162 19.1501 124.297 21.03C125.433 22.9221 126 25.0325 126 27.3976C126 29.7506 125.433 31.8731 124.297 33.7652C123.162 35.6572 121.604 37.1369 119.623 38.2043C117.643 39.2837 115.408 39.8174 112.933 39.8174C110.445 39.8174 108.21 39.2837 106.217 38.2043ZM116.761 34.1048C117.896 33.4498 118.79 32.5402 119.442 31.3758C120.094 30.2114 120.421 28.8773 120.421 27.3976C120.421 25.9058 120.094 24.5837 119.442 23.4194C118.79 22.255 117.896 21.3454 116.761 20.6904C115.626 20.0355 114.346 19.708 112.933 19.708C111.519 19.708 110.239 20.0355 109.104 20.6904C107.969 21.3454 107.075 22.255 106.423 23.4194C105.771 24.5837 105.444 25.9179 105.444 27.3976C105.444 28.8894 105.771 30.2114 106.423 31.3758C107.075 32.5402 107.969 33.4498 109.104 34.1048C110.239 34.7597 111.519 35.0872 112.933 35.0872C114.346 35.0872 115.614 34.7597 116.761 34.1048Z"
                        fill="#5956FF"
                    />
                    <path
                        class="logo-svg"
                        d="M32.7132 25.2993L5.4421 41.3092C3.28022 39.4777 2 36.7609 2 33.8621V19.1257C2 15.6448 3.84786 12.4307 6.85517 10.6842L19.5728 3.3099C22.5801 1.56337 26.2758 1.56337 29.2831 3.3099L32.7132 5.29901V25.2993Z"
                        fill="#5956FF"
                    />
                    <path
                        class="logo-svg"
                        d="M34.5735 29.0349L45.7573 38.3619C44.924 39.9871 43.6317 41.3698 41.9891 42.3159L29.2715 49.6901C26.2642 51.4366 22.5684 51.4366 19.5611 49.6901L9.41602 43.7956L34.5735 29.0349Z"
                        fill="#5956FF"
                    />
                    <path d="M46.8557 19.1257V33.8621L36.8555 25.5296V7.70044L42.0005 10.6841C45.0078 12.4306 46.8557 15.6447 46.8557 19.1257Z" fill="#9EB3E8" />
                </g>
                <defs>
                    <clipPath id="clip0_289_13794">
                        <rect width="124" height="49" fill="white" transform="translate(2 2)" />
                    </clipPath>
                </defs>
            </svg>
        </a>
    </div>
    <!-- /nav Logo -->
    <!-- Search -->
    <div class="search-bar">
        <input class="form-control rounded-pill" type="text" placeholder="Search" />
    </div>
    <!-- /Search -->
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