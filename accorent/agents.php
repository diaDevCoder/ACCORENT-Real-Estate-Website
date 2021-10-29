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
  $page_title = "| Agents";
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
      $agents_activeBtn = "btn-active";
      $agents_style = "white";

      $about_active = "active";
      $about_activeBtn = "";
      $about_style = "black";

      $contact_active = "active";
      $contact_activeBtn = "";
      $contact_style = "black";

      include('./templates/navbar.php');
    ?>

<div class="container">
      <div class="search-form">
        <div class="card">
          <div class="row">
            <div class="col-md-8 mb-3">
            <form action="https://search.freefind.com/find.html" method="get" accept-charset="utf-8" target="_self">
              <div class="row">
              <div class="col-md-9">
                <input type="hidden" name="si" value="65480942">
                <input type="hidden" name="pid" value="r">
                <input type="hidden" name="_charset_" value="">
                <input type="hidden" name="bcd" value="&#247;">
                <input type="text" class="form-control form-control-lg" placeholder="Search for agents" name="query" size="15">                
              </div>
              <div class="col-md-3">
                <input type="submit" class="btn btn-lg btn-primary btn-block" value="search">
              </div>
              </div>
            </form>
            </div>
          </div>
        </div>
      </div> 
</div>

    <div class="container">
      <div class="row justify-content-md-center">
        <div class="col col-md-10">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Agents</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
    <div id="content">
      <div class="container">
        <div class="row justify-content-md-center">
          <div class="col col-lg-12 col-xl-10">
            <div class="row has-sidebar">
             
              <div class="col-md-7 col-lg-8 col-xl-8">
                <div class="page-header bordered mt0">
                  <h1>Agents <small>Save the hassle. Choose any of our agents below</small></h1>
                </div>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="item-listing list">                                                      
                  <div class="item">
                    <div class="row">
                      <div class="col-md-3">
                        <div class="item-image"> <img src="img/profile-placeholder.jpg" class="img-fluid" alt=""> </div>
                      </div>
                      <div class="col-md-9"> <a href="<?php echo $url ;?>agent.php" class="btn default-button float-right">View
                          Profile</a>
                        <h3 class="item-title"><a href="<?php echo $url ;?>agent.php">John Doe - John Estate</a></h3>
                        <div class="item-location"><i class="fa fa-map-marker"></i> Kirkstone Road, Middlesbrough TS3
                        </div>
                        <div class="item-description">We have a profoundly knowledgeable and dedicated team who are well
                          connected with this market and are
                          extremely capable at matching tenants to properties.</div>
                        <div class="item-actions"> <a href="tel:02080226348"><i class="fa fa-phone"></i> 020 8022
                            6348</a> <a href="<?php echo $url ;?>agent.php"><i class="fa fa-envelope-o"></i> Contact Agent</a> </div>
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
    <button class="btn default-button btn-circle" id="to-top"><i class="fa fa-angle-up"></i></button>
    
    <?php include('./templates/footer.php'); ?>
  </div>
</body>

</html>