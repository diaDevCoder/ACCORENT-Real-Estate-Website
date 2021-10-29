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
  $page_title = " | Property lists";
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

        <div class="clearfix"></div>
        <div id="content">
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col col-lg-12 col-xl-10">
                        <div class="row has-sidebar">
                            <div class="col-md-5 col-lg-4 col-xl-4 col-sidebar">
                                <?php 
                                $propertyList_Active = "active";
                                include("../templates/sidebar.php") ?>
                            </div>
                            <div class="col-md-7 col-lg-8 col-xl-8">
                                <div class="page-header bordered">
                                    <h1>My Listings</h1>
                                </div>
                                <div class="item-listing list">
                                    <div class="item">
                                        <div class="row">
                                            <div class="col-lg-5">
                                                <div class="item-image"> <a href="property_single.html"><img
                                                            src="../img/demo/property/1.jpg" class="img-fluid" alt="">
                                                        <div class="item-badges">
                                                            <div class="item-badge-right">For Sale</div>
                                                        </div>
                                                        <div class="item-meta">
                                                            <div class="item-price">$420,000
                                                                <small>$777 / sq m</small>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="save-item"><i class="fa fa-star"></i></a>
                                                </div>
                                                <a href="#" class="remove-item"><i class="fa fa-trash-o"></i> Delete</a>
                                            </div>
                                            <div class="col-lg-7">
                                                <div class="item-info">
                                                    <h3 class="item-title"><a href="property_single.html">3 bed
                                                            semi-detached house for sale</a></h3>
                                                    <div class="item-location"><i class="fa fa-map-marker"></i>
                                                        Kirkstone Road, Middlesbrough TS3</div>
                                                    <div class="item-details-i"> <span class="bedrooms"
                                                            data-toggle="tooltip" title="3 Bedrooms">3 <i
                                                                class="fa fa-bed"></i></span> <span class="bathrooms"
                                                            data-toggle="tooltip" title="2 Bathrooms">2 <i
                                                                class="fa fa-bath"></i></span> </div>
                                                    <div class="item-details">
                                                        <ul>
                                                            <li>Sq Ft <span>730-2600</span></li>
                                                            <li>Type <span>Apartments</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="added-on">Listed on 19th Feb 2017 </div>

                                                    </div>
                                                    <div class="col-md-6">
                                                        <p class="added-by text-secondary">by John Doe</p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
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