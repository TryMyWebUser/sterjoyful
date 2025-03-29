<?php

    include "../libs/load.php";

    // Start a session
    Session::start();

    // Redirect if the user is already logged in
    if (Session::get('login_user'))
    {
        header('Location: welcome.php');
        exit;
    }

    $error = "";

    // Check if form is submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        // Check if both username and password keys exist in $_POST
        if (isset($_POST['submit']) && isset($_POST['username']) && isset($_POST['password']))
        {
            $username = $_POST['username'] ?? "";
            $password = $_POST['password'] ?? "";
            $error = User::login($username, $password);
        }
    }

?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />

        <!-- Theme Initialization -->
        <script src="assets/js/init.js"></script>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com/" />
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&amp;display=swap" rel="stylesheet" />
        
		<title>Admin - Login</title>

        <!-- Favicons -->
        <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png" />
        <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png" />
        <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png" />
        <link rel="manifest" href="assets/img/favicons/site.webmanifest" />
        <link rel="mask-icon" href="assets/img/favicons/safari-pinned-tab.svg" color="#5855ff" />
        <link rel="shortcut icon" href="assets/img/favicons/favicon.ico" />
        <meta name="msapplication-TileColor" content="#ffffff" />
        <meta name="msapplication-config" content="assets/img/favicons/browserconfig.xml" />
        <meta name="theme-color" content="#ffffff" />

        <!-- ========== Stlysheets ========== -->
        <!-- Bootstrap Icons -->
        <link rel="stylesheet" href="assets/fonts/icons/font/bootstrap-icons.css" />
        <!-- Vendor Style -->
        <link rel="stylesheet" href="assets/css/vendor.css" />
        <!-- Theme Style -->
        <link rel="stylesheet" href="assets/css/aio-admin.css" />
        <!-- Your Custom Code -->
        <link rel="stylesheet" href="assets/css/custom.css" />
        <!-- ========== End Stlysheets ========== -->

    </head>
    <body class="alt-bg">
        <div class="container vh-100 d-flex flex-column justify-content-between">
            <form method="POST">
                <div class="auth-basic">
                    <div class="brand d-flex justify-content-center">
                        <img src="assets/img/logo/logo-square.svg" alt="" srcset="" />
                    </div>
                    <div class="form-area px-md-4 px-2">
                        <div class="text-center">
                            <h1 class="form-heading">
                                Welcome Back
                            </h1>
                            <div class="pt-2">
                                <p>
                                    Admin Please Login Your Account
                                </p>
                            </div>
                        </div>

                        <div class="form pt-3">
                            <div class="mb-3">
                                <label for="Username" class="form-label">Username</label>
                                <input type="text" name="username" class="form-control" placeholder="Username or Email address" required/>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" id="exampleInputEmail1" aria-describedby="password" placeholder="Password" required/>
                            </div>
                            <div class="form-cta mt-4 text-center">
                                <div class="d-grid">
                                    <button type="submit" name="submit" class="btn btn-primary mb-3">Login</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
			</form>
        </div>
    </body>

    <!-- ========== Start Scripts ========== -->
    <!-- All Vendors -->
    <script src="assets/js/vendor.js"></script>
    <!-- Theme JS -->
    <script src="assets/js/aio.admin.js"></script>
    <!-- Your Custom Code -->
    <script src="assets/js/custom.js"></script>

    <!-- Page Level Javasctipt -->
    <script></script>
    <!-- /Page Level Javasctipt -->
    <!-- ========== End Scripts ========== -->

</html>