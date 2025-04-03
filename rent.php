<?php
include "libs/load.php";
include("header.php");
?>


<!--====== Start Hero Section ======-->
<section class="hero-area">
        <div class="breadcrumbs-area bg_cover" style="background-image: url(assets/images/bg/breadcrumbs-bg-1.jpg);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="page-title text-center">
                            <h1 data-aos="fade-up">Rent</h1>
                            <ul class="breadcrumbs-link d-flex justify-content-center" data-aos="fade-up">
                                <li><a href="index.php" target="_self" title="Home">Home</a></li>
                                <li class="active">Rent</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== End Hero Section ======-->
 
    <!--====== Start Pricing Section ======-->
    <section class="pricing-area pt-130 pb-90">
        <div class="container">
           <div class="row">
                <div class="col-lg-12">
                    <div class="tab-content" id="myTabContent" data-aos="fade-up">
                        <div class="tab-pane fade show active" id="all">
                            <div class="row" data-masonry='{"percentPosition": true }'>
                                <?php
                                    $product = Operations::getProducts();
                                    if (!empty($product)) {
                                        foreach ($product as $pro) {
                                            if ($pro['category'] === 'rent') {
                                ?>
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="pricing-item pricing-item-one mb-40 border">
                                        <div class="pricing-img">
                                            <a href="#" target="_self" title="Equipment Image">
                                                <img src="assets/<?= $pro['img'] ?>" alt="Pricing image">
                                            </a>
                                        </div>
                                        <div class="p-3">
                                            <h4><?= $pro['title'] ?></h4>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <p><?= $pro['price'] !== "0" ? '₹' . $pro['price'] : "" ?></p>
                                                <p>
                                                    <del><?= $pro['subprice'] !== "0" ? '₹' . $pro['subprice'] : "" ?></del>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php } } } else { echo "<p>Product Not Found.</p>"; } ?>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== End Pricing Section ======-->

    <script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>
<?php
include("footer.php");
?>    