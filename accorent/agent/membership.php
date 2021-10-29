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
  $page_title = " | Membership";
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
                                $membershipActive = "active";
                                include("../templates/sidebar.php") ?>
                            </div>
                            <div class="col-md-7 col-lg-8 col-xl-8">
                                <div class="page-header bordered">
                                    <h1>Membership</h1>
                                </div>
                                <form action="index.php">

                                    <h3 class="subheadline">Current Plans</h3>

                                    <div class="card">
                                        <div class="media mt-0">
                                            <div class="media-left"> <a href="agent.html"> <img
                                                        class="media-object rounded-circle" src="../img/demo/badge.png"
                                                        width="100" height="100" alt=""> </a> </div>
                                            <div class="media-body">
                                                <a class="btn btn-link float-right" href="#">Cancel Plan</a>
                                                <h4 class="media-heading"><a href="../agent/plans.php">Plan
                                                        <strong>Pro</strong></a></h4>
                                                <p class="text-muted">Expiring on 1st August 2018</p>

                                            </div>
                                        </div>
                                    </div>
                                    <a href="../agent/plans.php" class="btn btn-light">Upgrade Plan</a>
                                </form>
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