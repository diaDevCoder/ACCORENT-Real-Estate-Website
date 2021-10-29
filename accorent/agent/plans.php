<?php
    session_start();

    if (!empty($_SESSION['role'])){

    } else {
        header('Location: ../');
    }
?>

<!DOCTYPE html>
<html lang="en">

<?php
  $page_title = " | Plans";
  include('../templates/header.php');
 ?>

<body>
    <div id="main">

<?php 
      $home_active = "active";
      $home_activeBtn = "";
      $home_style = "black";

      $properties_active = "active";
      $properties_activeBtn = "";
      $properties_style = "black";

      $agents_active = "active";
      $agents_activeBtn = "";
      $agents_style = "black";

      $about_active = "active";
      $about_activeBtn = "";
      $about_style = "black";

      $contact_active = "active";
      $contact_activeBtn = "";
      $contact_style = "black";

      include('../templates/navbar.php');
?>

        <div id="content">
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col col-lg-12 col-xl-10">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Plans</li>
                            </ol>
                        </nav>
                        <h1 class="main-title centered"><span>Available Plans</span></h1>
                        <div class="lead text-center mb50">Select or upgrade to a plan for your property</div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="pricing-column">
                                    <ul>
                                        <li class="title">Basic</li>
                                        <li class="price">Free</li>
                                        <li>Upload 3 properties</li>
                                        <li>Upload 3 properties</li>
                                        <li class="action"><a class="btn disabled btn-primary btn-lg btn-block" href="#">Default Plan</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="pricing-column popular">
                                    <ul>
                                        <li class="title">Pro <small>Most Popular</small></li>
                                        <li class="price">&#8358;2</li>
                                        <li>25GB Storage</li>
                                        <li>25 Emails</li>
                                        <li>25 Domains</li>
                                        <li>2GB Bandwidth</li>
                                        <li>24x7 Tech Support</li>
                                        <li class="action"><a class="btn btn-primary btn-lg btn-block" href="#">Request Plan</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="pricing-column">
                                    <ul>
                                        <li class="title">Premium</li>
                                        <li class="price">$ 49.99 / year</li>
                                        <li>50GB Storage</li>
                                        <li>50 Emails</li>
                                        <li>50 Domains</li>
                                        <li>5GB Bandwidth</li>
                                        <li class="action"><a class="btn btn-primary btn-lg btn-block" href="#">Request Plan</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="feature-box centered gray">
            <div>
                <div class="container">
                    <div class="row justify-content-md-center">
                        <div class="col col-md-10">
                            <div class="main-title"><span>What our clients say</span></div>
                            <div class="swiper-container testimonials">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="item content-box centered">
                                            <div class="image"> <img class="rounded-circle"
                                                    src="../img/demo/profile.jpg" width="180" alt=""> </div>
                                            <h4>Thank you for your quick and clear responses. They are much appreciated.
                                                This was a site that needed to go up fast and it has – customizations
                                                and all!</h4>
                                            <div class="caption">The Brown Family</div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="item content-box centered">
                                            <div class="image"> <img class="rounded-circle"
                                                    src="../img/demo/profile2.jpg" width="180" alt="">
                                                <h4>Thank you for your quick and clear responses. They are much
                                                    appreciated. This was a site that needed to go up fast and it has –
                                                    customizations and all!</h4>
                                                <div class="caption">The Brown Family</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="item content-box centered">
                                            <div class="image"> <img class="rounded-circle"
                                                    src="../img/demo/profile3.jpg" width="180" alt="">
                                                <h4>Thank you for your quick and clear responses. They are much
                                                    appreciated. This was a site that needed to go up fast and it has –
                                                    customizations and all!</h4>
                                                <div class="caption">The Brown Family</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Add Arrows -->
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                            <script>
                            var swiper = new Swiper('.swiper-container', {
                                loop: true,
                                centeredSlides: true,
                                autoplay: {
                                    delay: 5000,
                                    disableOnInteraction: false,
                                },
                                pagination: {
                                    el: '.swiper-pagination',
                                    clickable: true,
                                },
                                navigation: {
                                    nextEl: '.swiper-button-next',
                                    prevEl: '.swiper-button-prev',
                                },
                            });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="btn btn-primary btn-circle" id="to-top"><i class="fa fa-angle-up"></i></button>

        <?php include('../templates/footer.php'); ?>
    </div>

</body>

</html>