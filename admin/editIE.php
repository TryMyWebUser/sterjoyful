<?php

	include "../libs/load.php";

    // Start a session
    Session::start();

    if (!Session::get('login_user'))
    {
        header("Location: index.php");
        exit;
    }

	$error = "";

    $conn = Database::getConnect();
    $pro = Operations::getProduct($conn);

	// Handle About Us form submission
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		// Add About Us (setAboutUs)
		if (isset($_POST['submit'])) {
            $getID = $_GET['edit_id'];
			$img = $_FILES['img'];
			$title = $_POST['title'];
			$price = $_POST['price'];
			$sub = $_POST['sub'];

			// Call setAboutUs to insert data
			$error = User::updateProducts($title, $img, $price, $sub, $getID, $conn);
		}
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
            <div class="row g-2">
                <!-- col -->
                <div class="col-lg-12">
                    <!-- card -->
                    <div class="card h-100">
                        <div class="card-top d-flex justify-content-between">
                            <div class="card-heading d-flex align-self-center">
                                Products Edit
                            </div>
                        </div>
                        
						<?= $error ? '<p class="component-desc text-danger">' . $error . '</p>' : "<p class='component-desc'>Enter Your validation Info</p>"; ?>

                        <div class="component-area border-top">
                            <form class="row g-3 needs-validation" method="POST" enctype="multipart/form-data" novalidate>
								<div class="col-md-12">
                                    <label for="validationCustom02" class="form-label">Product Image</label>
                                    <input type="file" class="form-control" name="img" id="validationCustom02"/>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <label for="validationCustom01" class="form-label">Title</label>
                                    <input type="text" class="form-control" name="title" id="validationCustom01" value="<?= $pro['title'] ?>" required />
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
									<div class="invalid-feedback">
										Please Enter Product Title.
									</div>
                                </div>
                                
                                <div class="col-md-6">
                                    <label for="validationCustomUsername" class="form-label">Market Price</label>
									<input type="number" class="form-control" id="validationCustom03" name="sub" value="<?= $pro['subprice'] ?>" required />
									<div class="valid-feedback">
										Looks good!
									</div>
									<div class="invalid-feedback">
										Please Enter Market Price.
									</div>
                                </div>

                                <div class="col-md-6">
                                    <label for="validationCustom03" class="form-label">Your Price</label>
                                    <input type="number" class="form-control" id="validationCustom03" name="price" value="<?= $pro['price'] ?>" required />
									<div class="valid-feedback">
                                        Looks good!
                                    </div>
                                    <div class="invalid-feedback">
                                        Please Enter Your Price.
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary" type="submit" name="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /card -->
                </div>
                <!-- /col -->
            </div>
        </div>
        <!-- ========== End Main ========== -->

        <!-- ========== Start Scripts ========== -->
		<?php include "temp/footer.php" ?>
        <!-- ========== End Scripts ========== -->

    </body>

</html>