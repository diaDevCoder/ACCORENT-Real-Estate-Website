<?php
    session_start();

    if (empty($_SESSION['username'])) {
    $_SESSION['userAccount'] = "hideAccount";
    $_SESSION['signBtn'] = "displaySign";
    $_SESSION['logBtn'] = "hideLogout";
    
    unset($_SESSION['role']);
}
?>


<!DOCTYPE html>
<html lang="en">

<?php
  $page_title = "";
  include('./templates/header.php');
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

      include('./templates/navbar.php');
  ?>

    <div id="content">
      <div class="container">
        <div class="row justify-content-md-center">
          <div class="col col-lg-8">
            <div class="error-template text-center"> <i class="fa fa-check fa-5x text-success mb50 animated zoomIn"></i>
              <h3 class="main-title centered"><span>Registered Successfully!</span></h3>
              <div class="error-actions"><a href="signin" class="btn btn-primary btn-lg">Continue </a> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <button class="btn btn-primary btn-circle" id="to-top"><i class="fa fa-angle-up"></i></button>

    <?php include('./templates/footer.php'); ?>
</div>

</body></html>