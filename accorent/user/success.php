<?php

  session_start();

  if (empty($_SESSION['role']) && empty($_SESSION['username']) ) {
        header("Location: $url error? error=no page found"); 
    }else{
        //Stay on page
    }


?>

<!DOCTYPE html>
<html lang="en">

<?php
  $page_title = "";
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
          <div class="col col-lg-8">
            <div class="error-template text-center"> <i class="fa fa-check fa-5x text-success mb50 animated zoomIn"></i>
              <h3 class="main-title centered"><span><?php echo $_SESSION['success_message']; ?></span></h3>
              <div class="error-actions"><a href="<?php echo $_SESSION['success_action']; ?>" class="btn btn-primary btn-lg">Continue </a> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <button class="btn btn-primary btn-circle" id="to-top"><i class="fa fa-angle-up"></i></button>

    <?php include('../templates/footer.php'); ?>
</div>

</body></html>