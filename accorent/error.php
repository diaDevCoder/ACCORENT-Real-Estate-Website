<?php
    session_start();
    include('./db/db_connection.php');

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
  $page_title = " | Error";
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
        <div class="error-template text-center"> <i class="fa fa-exclamation-triangle fa-5x text-danger animated zoomIn mb50"></i>
          <h3 class="main-title"><span>Oops! 404 Not Found</span></h3>
          <div class="main-title-description"> Sorry, an error has occured, Requested page not found! </div>
          <div class="error-actions"> <a href="<?php echo $url;?>" class="btn btn-primary btn-lg ml-2 mr-2 mb-3">Take Me Home </a> <a href="<?php echo $url;?>contact" class="btn btn-light btn-lg ml-2 mr-2 mb-3">Contact Support </a> </div>
        </div>
      </div>
    </div>
  </div>
</div>
<button class="btn btn-primary btn-circle" id="to-top"><i class="fa fa-angle-up"></i></button>

<?php include('./templates/footer.php'); ?>
</div>

</body></html>