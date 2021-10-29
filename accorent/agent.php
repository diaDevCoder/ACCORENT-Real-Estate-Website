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
  $page_title = "| Property";
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


<div class="container">
    <div class="row justify-content-md-center">
          <div class="col col-lg-12 col-xl-10">
<nav aria-label="breadcrumb">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Agents</a></li>
            <li class="breadcrumb-item active" aria-current="page">John Doe</li>
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
          <div class="col-md-5 col-lg-4 col-xl-4 col-sidebar">
            <div id="sidebar" class="sidebar-left">
              <div class="sidebar_inner">
              <div class="agent-details mb-5"> 
              <div class="text-center">
              <img class="img-fluid img-rounded agent-thumb" src="img/demo/profile.jpg" alt="">
              </div>
                <h3 class="subheadline">John Doe</h3>
                <ul class="list-unstyled">
                  <li><a href="tel:01502392905"><i class="fa fa-phone fa-fw" aria-hidden="true"></i> Call: 01502 392905</a></li>
                  <li><a href="#"><i class="fa fa-globe fa-fw" aria-hidden="true"></i> johnagent.com</a></li>
                </ul>
                <a href="#" class="btn btn-lg btn-primary btn-block" data-toggle="modal" data-target="#leadform">Contact John</a> </div>
                </div>
            </div>
          </div>
          <div class="col-md-7 col-lg-8 col-xl-8">
            <div class="page-header mt-0">
            <h1>About John Doe <small><i class="fa fa-map-marker"></i> Kirkstone Road, Middlesbrough TS3</small></h1>
            </div>
            <p>This is about the Agent section, agent himself can add this from his edit profile section. They can write about their experience in RealEstate market.</p>
            <hr/>
            <div class="lead">Recent properties by John Doe</div>
            <div class="sorting">               
            </div>
            <div class="clearfix"></div>
            <div class="item-listing list">
              <div class="item">
                <div class="row">
                  <div class="col-lg-5">
                    <div class="item-image"> <a href="<?php echo $url ;?>property"><img src="img/demo/property/1.jpg" class="img-fluid" alt="">
                      <div class="item-badges">                        
                      <div class="item-badge-right">For Sale</div>
                      </div>
                      <div class="item-meta">
                      <div class="item-price">$420,000
                      <small>$777 / sq m</small>
                      </div>
                      </div>
                      </a>
                      <a href="#" class="save-item"><i class="fa fa-star"></i></a> </div>
                  </div>
                  <div class="col-lg-7">
                  <div class="item-info">
                    <h3 class="item-title"><a href="<?php echo $url ;?>property">3 bed semi-detached house for sale</a></h3>
                    <div class="item-location"><i class="fa fa-map-marker"></i> Kirkstone Road, Middlesbrough TS3</div>
                    <div class="item-details-i"> <span class="bedrooms" data-toggle="tooltip" title="3 Bedrooms">3 <i class="fa fa-bed"></i></span> <span class="bathrooms" data-toggle="tooltip" title="2 Bathrooms">2 <i class="fa fa-bath"></i></span> </div>
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
                                         <p class="added-by">by John Doe</p>

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
</div>
<!-- Contact Agent Modal -->
<div class="modal fade  item-badge-rightm" id="leadform" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <div class="media">
          <div class="media-left"><img src="img/demo/profile.jpg" class="img-rounded" width="64" alt=""> </div>
          <div class="media-body">
            <h4 class="media-heading" id="leadformLabel">Send Message to John Doe</h4>
            <ul class="list-unstyled">
              <li><a href="tel:01502392905"><i class="fa fa-phone fa-fw" aria-hidden="true"></i> Call: 01502 392905</a></li>
              <li><a href="#"><i class="fa fa-globe fa-fw" aria-hidden="true"></i> johnagent.com</a></li>
            </ul>
          </div>
        </div>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="lead_name">Your Name</label>
            <input type="text" class="form-control" id="lead_name" placeholder="Your Name">
          </div>
          <div class="form-group">
            <label for="lead_email">Your Email</label>
            <input type="email" class="form-control" id="lead_email" placeholder="Your Email">
          </div>
          <div class="form-group">
            <label for="lead_phone">Your Telephone</label>
            <input type="tel" class="form-control" id="lead_phone" placeholder="Your Telephone">
          </div>
          <div class="form-group">
            <label for="lead_requirement">Type of enquiry</label>
            <select class="form-control ui-select" id="lead_requirement">
              <option value="" selected="selected">Please select:</option>
              <option value="looking_to_rent">I am looking to rent a property</option>
              <option value="arrange_valuation">I want a valuation of my property</option>
              <option value="looking_to_let">I have a property to let</option>
            </select>
          </div>
          <div class="form-group">
            <label for="lead_message">Message</label>
            <textarea id="lead_message" rows="4" class="form-control" placeholder="Please include any useful details, i.e. current status, availability for viewings, etc."></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-link" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary">Send Message</button>
      </div>
    </div>
  </div>
</div>
<button class="btn btn-primary btn-circle" id="to-top"><i class="fa fa-angle-up"></i></button>


<?php include('./templates/footer.php'); ?>
</div>

</body></html>