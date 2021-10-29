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
  $page_title = " | Account";
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
                                $accountActive = "active";
                                include("../templates/sidebar.php") ?>
                            </div>
                            <div class="col-md-7 col-lg-8 col-xl-8">
                                <div class="page-header bordered">
                                    <h1>Account Settings</h1>
                                </div>
                                <form action="index.php">
                                    <h3 class="subheadline">Delete Account</h3>
                                    <p>If you are no longer interested in using your account click the button below to
                                        delete your
                                        account.</p>
                                    <hr>
                                    <div class="form-group action">
                                        <button type="submit" class="btn btn-danger">Delete Account</button>
                                    </div>
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