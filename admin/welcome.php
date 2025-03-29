<?php

    include "../libs/load.php";

    // Start a session
    Session::start();

    if (!Session::get('login_user'))
    {
        header("Location: index.php");
        exit;
    }

?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />

        <?php include "temp/head.php" ?>

    </head>

    <body class="">
        <!-- ========== Navbar ========== -->
        <?php include "temp/header.php" ?>
        <!-- ========== End Navbar ========== -->

        <!-- ========== Sidebar ========== -->
        <?php include "temp/sideheader.php" ?>
        <!-- ========== End Sidebar ========== -->

        <!-- ========== Main ========== -->
        <div class="main">
            <div class="row g-2">
                <!-- ========== Start Analyrics slider ========== -->
                <div class="col-lg-6">
                    <div class="swiper h-100 shadow" id="dashboard-swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="row g-3 h-100">
                                    <div class="col-md-4 d-flex align-items-center justify-content-md-end justify-content-center">
                                        <img src="assets/img/illustrations/Rocket.png" alt="" srcset="" />
                                    </div>
                                    <div class="col-md-8 pe-md-5 px-4 py-md-4 mb-md-3 d-md-flex flex-column justify-content-center content">
                                        <div class="fs-3 mb-2 fw-semibold">Welcome, Admin.</div>
                                        <p class="text-white mb-4 pb-1 pb-md-0 mb-md-3">Here's what's happening with your store today.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="swiper-button-next">
                            <i class="bi bi-chevron-right"></i>
                        </div>
                        <div class="swiper-button-prev">
                            <i class="bi bi-chevron-left"></i>
                        </div>
                        <div class="swiper-pagination"></div> -->
                    </div>
                </div>
                <!-- ========== End Analyrics slider ========== -->
            </div>
        </div>
        <!-- ========== End Main ========== -->

        <!-- ========== Start Scripts ========== -->
        <?php include "temp/footer.php" ?>
        <!-- ========== End Scripts ========== -->

    </body>
</html>