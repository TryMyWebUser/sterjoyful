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
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <?php include "temp/head.php" ?>

    </head>
    <body class="">
        <!-- ========== Navbar ========== -->
        <?php include "temp/header.php" ?>
        <!-- ========== End Navbar ========== -->

        <!-- ========== Sidebar ========== -->
        <?php include "temp/sideheader.php" ?>
        <!-- ========== End Sidebar ========== -->

        <!-- ========== Start Main ========== -->
        <div class="main">
            <div class="row g-2" data-masonry='{"percentPosition": true }'>
                <!-- col -->
                <?php
                    $product = Operations::getProducts();
                    if (!empty($product)) {
                        foreach ($product as $pro) {
                ?>
                <div class="col-md-3">
                    <!-- card -->
                    <div class="card">
                        <img src="<?= $pro['img'] ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title"><?= $pro['title'] ?></h5>
                        <p class="card-text">Your Price: ₹<?= $pro['price'] ?></p>
                        <p class="card-text">Market Price: <del>₹<?= $pro['subprice'] ?></del></p>
                        <a href="editIE.php?edit_id=<?= $pro['id'] ?>" class="btn btn-primary text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325"/>
                            </svg>
                        </a>
                        <a href="deleteIE.php?delete_id=<?= $pro['id'] ?>" class="btn btn-danger text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
                            </svg>
                        </a>
                        </div>
                    </div>
                    <!-- /card -->
                </div>
                <?php } } else { echo "<p>Product Not Found.</p>"; } ?>
                <!-- /col -->
            </div>
        </div>
        <!-- ========== End Main ========== -->

        <!-- ========== Start Scripts ========== -->
		<?php include "temp/footer.php" ?>
        <!-- ========== End Scripts ========== -->

    </body>

    <script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>

</html>