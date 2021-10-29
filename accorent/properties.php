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
  $page_title = "| Properties";
  include('./templates/header.php');
 ?>

<body>
  <div id="main">
    
  <?php 
      $home_active = "active";
      $home_activeBtn = "";
      $home_style = "black";

      $properties_active = "active";
      $properties_activeBtn = "btn-active";
      $properties_style = "white";

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
                <input type="text" class="form-control form-control-lg" placeholder="City, property type, property name" name="query" size="15">                
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
    <div class="col col-lg-12 col-xl-10">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item"><a href="properties.html">Property</a></li>
        </ol>
      </nav>
      <div class="page-header">
        <h1>Properties</h1>
      </div>
    </div>
  </div>
</div>
<div id="content">
  <div class="container-fluid">
    <div class="row justify-content-md-center">
      <div class="col col-lg-12 col-xl-11">
        <div class="row has-sidebar">
          <div class="col-md-8 col-lg-12">
            <div class="item-listing grid">

              <div class="row">
                <div class="col-lg-3">
                  <div class="item">
                    <div class="item-image"><a href="<?php echo $url ;?>property.php"><img src="img/demo/property/3.jpg" class="img-fluid" alt="">
                      <div class="item-meta">
                        <div class="item-price">&#8358;000,000 <small>&#8358;000 / sq m</small> </div>
                      </div>
                      <div class="item-badges">
                        <div class="item-badge-right">For Sale</div>
                      </div>
                      </div>
                    <div class="item-info">
                      <h3 class="item-title">3 bed semi-detached house</h3>
                      <div class="item-location"><i class="fa fa-map-marker"></i> Kirkstone Road, Middlesbrough TS3</div>
                      <div class="item-details-i"> <span class="bedrooms" data-toggle="tooltip" title="3 Bedrooms">3 <i class="fa fa-bed"></i></span> <span class="bathrooms" data-toggle="tooltip" title="2 Bathrooms">2 <i class="fa fa-bath"></i></span> </div>
                    </div>
                  </div>
                </div>
                
                <div class="col-lg-3">
                  <div class="item">
                    <div class="item-image"><a href="<?php echo $url ;?>property.php"><img src="img/demo/property/4.jpg" class="img-fluid" alt="">
                      <div class="item-meta">
                        <div class="item-price">&#8358;000,000 <small>&#8358;000 / sq m</small> </div>
                      </div>
                      <div class="item-badges">
                        <div class="item-badge-right">For Rent</div>
                      </div>
                      </div>
                    <div class="item-info">
                      <h3 class="item-title">3 bed semi-detached house</h3>
                      <div class="item-location"><i class="fa fa-map-marker"></i> Kirkstone Road, Middlesbrough TS3</div>
                      <div class="item-details-i"> <span class="bedrooms" data-toggle="tooltip" title="3 Bedrooms">3 <i class="fa fa-bed"></i></span> <span class="bathrooms" data-toggle="tooltip" title="2 Bathrooms">2 <i class="fa fa-bath"></i></span> </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-3">
                  <div class="item">
                    <div class="item-image"><a href="<?php echo $url ;?>property.php"><img src="img/demo/property/2.jpg" class="img-fluid" alt="">
                      <div class="item-meta">
                        <div class="item-price">&#8358;000,000 <small>&#8358;000 / sq m</small> </div>
                      </div>
                      <div class="item-badges">
                        <div class="item-badge-right">For Sale</div>
                      </div>
                      </div>
                    <div class="item-info">
                      <h3 class="item-title">3 bed semi-detached house</h3>
                      <div class="item-location"><i class="fa fa-map-marker"></i> Kirkstone Road, Middlesbrough TS3</div>
                      <div class="item-details-i"> <span class="bedrooms" data-toggle="tooltip" title="3 Bedrooms">3 <i class="fa fa-bed"></i></span> <span class="bathrooms" data-toggle="tooltip" title="2 Bathrooms">2 <i class="fa fa-bath"></i></span> </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-3">
                  <div class="item">
                    <div class="item-image"><a href="<?php echo $url ;?>property.php"><img src="img/demo/property/2.jpg" class="img-fluid" alt="">
                      <div class="item-meta">
                        <div class="item-price">&#8358;000,000 <small>&#8358;000 / sq m</small> </div>
                      </div>
                      <div class="item-badges">
                        <div class="item-badge-right">For Rent</div>
                      </div>
                      </div>
                    <div class="item-info">
                      <h3 class="item-title">3 bed semi-detached house</h3>
                      <div class="item-location"><i class="fa fa-map-marker"></i> Kirkstone Road, Middlesbrough TS3</div>
                      <div class="item-details-i"> <span class="bedrooms" data-toggle="tooltip" title="3 Bedrooms">3 <i class="fa fa-bed"></i></span> <span class="bathrooms" data-toggle="tooltip" title="2 Bathrooms">2 <i class="fa fa-bath"></i></span> </div>
                    </div>
                  </div>
                </div>
              </div>



            </div>

            <nav aria-label="Page navigation" style="display: none;">
              <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
              </ul>
            </nav>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<button class="btn btn-primary btn-circle" id="to-top"><i class="fa fa-angle-up"></i></button>

<?php include('./templates/footer.php'); ?>
</div>
<script>
$(document).ready(function() {
	$('#toggle-filters').sidr({
		side: 'left',
		displace : false,
		renaming : false,
		name: 'sidebar',
		source: function() {
		  AOS.refresh();
		},
		
	});
});
</script>
</body>
</html>