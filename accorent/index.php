<?php
    session_start();
    require_once('./db/db_connection.php');
    $_SESSION['success_title'] = "";
    $_SESSION['success_message']  = "";
    $_SESSION['success_action']  = "";

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
  $page_title = " | Makes life easier...";
  include('./templates/header.php');
 ?>

<body>
  <div id="main">
    <?php 
      $home_active = "active";
      $home_activeBtn = "btn-active";
      $home_style = "white";

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

    <div class="home-search">
      <div class="main search-form">
        <div class="container">
          <div class="row justify-content-md-center">
            <div class="col-md-12 col-lg-10">
              <div class="heading">
                <h2>Find your new place to live</h2>
                <h3>We will help you to find the best places to live easily, without stress.</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="content" class="pt0 pb0">
      <div class="feature-box centered gray">
        <div>
          <div class="container">
            <div class="row justify-content-md-center">
              <div class="col col-lg-12 col-xl-10">
                <div class="main-title"><span>Featured Properties</span></div>
                <div class="main-title-description">Thinking of having a comfortable home? You can now dream and discover our cheap
                  and affordable properties</div>
                <div class="clearfix"></div>
                <div class="mt50 mb50">
                  <div class="featured-gallery v2 item-listing grid">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="item item-lg">
                          <div class="item-image" style="background-image:url(<?php echo $url ;?>img/demo/property/13.jpg);"><a
                              href="<?php echo $url ;?>property.php">
                              <div class="item-meta">
                                <div class="item-info">
                                  <h3 class="item-title">3 bed semi-detached house</h3>
                                  <div class="item-location"><i class="fa fa-map-marker"></i> Kirkstone Road,
                                    Middlesbrough TS3</div>
                                </div>
                                <div class="item-price">$420,000 <small>$777 / sq m</small> </div>
                              </div>
                              <div class="item-badges">
                                <div class="item-badge-right">For Sale</div>
                              </div>
                            </a> </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="row">
                          <div class="col-sm-12">
                            <div class="item item-md">
                              <div class="item-image" style="background-image:url(<?php echo $url ;?>img/demo/property/2.jpg);"><a
                                  href="<?php echo $url ;?>property.php">
                                  <div class="item-meta">
                                    <div class="item-info">
                                      <h3 class="item-title">3 bed semi-detached house</h3>
                                      <div class="item-location"><i class="fa fa-map-marker"></i> Kirkstone Road,
                                        Middlesbrough TS3</div>
                                    </div>
                                    <div class="item-price">$420,000 <small>$777 / sq m</small> </div>
                                  </div>
                                  <div class="item-badges">
                                    <div class="item-badge-right">For Sale</div>
                                  </div>
                                </a> </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-6">
                            <div class="item item-sm">
                              <div class="item-image" style="background-image:url(<?php echo $url ;?>img/demo/property/3.jpg);"><a
                                  href="<?php echo $url ;?>property.php">
                                  <div class="item-meta">
                                    <div class="item-info">
                                      <h3 class="item-title">3 bed semi-detached house</h3>
                                      <div class="item-location"><i class="fa fa-map-marker"></i> Kirkstone Road,
                                        Middlesbrough TS3</div>
                                    </div>
                                    <div class="item-price">$420,000 <small>$777 / sq m</small> </div>
                                  </div>
                                  <div class="item-badges">
                                    <div class="item-badge-right">For Sale</div>
                                  </div>
                                </a> </div>
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="item item-sm">
                              <div class="item-image" style="background-image:url(<?php echo $url ;?>img/demo/property/4.jpg);"><a
                                  href="<?php echo $url ;?>property.php">
                                  <div class="item-meta">
                                    <div class="item-info">
                                      <h3 class="item-title">3 bed semi-detached house</h3>
                                      <div class="item-location"><i class="fa fa-map-marker"></i> Kirkstone Road,
                                        Middlesbrough TS3</div>
                                    </div>
                                    <div class="item-price">$420,000 <small>$777 / sq m</small> </div>
                                  </div>
                                  <div class="item-badges">
                                    <div class="item-badge-right">For Sale</div>
                                  </div>
                                </a> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="text-center"><a href="properties.php" class="btn btn-xlg btn-link">Explore More</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="feature-box centered">
        <div>
          <div class="container">
          <div class="row">
                <div class="col col-lg-12 col-xl-12 mb-5">
                  <h4 class="text-center">WHAT MAKES ACCORENT THE PREFERRED CHOICE</h4>
                </div>
            </div>
            <div class="row justify-content-md-center">
              <div class="col col-lg-12 col-xl-10">
                <div class="row">                  
                  <div class="col-md-4">                    
                    <div class="content-box">                      
                      <div class="image"> <img src="<?php echo $url ;?>img/demo/icons/price-tag.png" width="100" alt="price-tag image"> </div>
                      <h4>Best Price Guarantee</h4>
                      <div class="caption">Why compromise? Let's find you a comfortable home where the amenities, appliances and services are all top of the line.</div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="content-box">
                      <div class="image"> <img src="<?php echo $url ;?>img/demo/icons/house.png" width="100" alt="house image"> </div>
                      <h4>Budget Conscious</h4>
                      <div class="caption">We believe everyone should be able to rent a home without breaking the bank. Let us help you find rentals that fit within your budget.
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="content-box">
                      <div class="image"> <img src="<?php echo $url ;?>img/demo/icons/real-estate-agent.png" width="100" alt="real-estate-agent image"> </div>
                      <h4>Agents for Your Service</h4>
                      <div class="caption">Advice from industry experts to help you make smart property decisions.</div>
                    </div>
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
              <div class="col col-lg-12 col-xl-10">
                <div class="item-listing grid">
                  <div class="main-title"><span>Latest Properties</span></div>
                  <div class="main-title-description">Check out some of our recent properties.</div>
                  <div class="row">
                    <div class="col-md-4">
                      <div class="item">
                        <div class="item-image"><a href="<?php echo $url ;?>property.php"><img src="<?php echo $url ;?>img/demo/property/1.jpg"
                              class="img-fluid" alt="">
                            <div class="item-meta">
                              <div class="item-price">$420,000 <small>$777 / sq m</small> </div>
                            </div>
                            <div class="item-badges">
                              <div class="item-badge-right">For Sale</div>
                            </div>
                          </a> <a href="#" class="save-item"><i class="fa fa-star"></i></a> </div>
                        <div class="item-info">
                          <h3 class="item-title">3 bed semi-detached house</h3>
                          <div class="item-location"><i class="fa fa-map-marker"></i> Kirkstone Road, Middlesbrough TS3
                          </div>
                          <div class="item-details-i"> <span class="bedrooms" data-toggle="tooltip" title="3 Bedrooms">3
                              <i class="fa fa-bed"></i></span> <span class="bathrooms" data-toggle="tooltip"
                              title="2 Bathrooms">2 <i class="fa fa-bath"></i></span> </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="item">
                        <div class="item-image"><a href="<?php echo $url ;?>property.php"><img src="<?php echo $url ;?>img/demo/property/2.jpg"
                              class="img-fluid" alt="">
                            <div class="item-meta">
                              <div class="item-price">$420,000 <small>$777 / sq m</small> </div>
                            </div>
                            <div class="item-badges">
                              <div class="item-badge-right">For Sale</div>
                            </div>
                          </a> <a href="#" class="save-item"><i class="fa fa-star"></i></a> </div>
                        <div class="item-info">
                          <h3 class="item-title">3 bed semi-detached house</h3>
                          <div class="item-location"><i class="fa fa-map-marker"></i> Kirkstone Road, Middlesbrough TS3
                          </div>
                          <div class="item-details-i"> <span class="bedrooms" data-toggle="tooltip" title="3 Bedrooms">3
                              <i class="fa fa-bed"></i></span> <span class="bathrooms" data-toggle="tooltip"
                              title="2 Bathrooms">2 <i class="fa fa-bath"></i></span> </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="item">
                        <div class="item-image"><a href="<?php echo $url ;?>property.php"><img src="<?php echo $url ;?>img/demo/property/3.jpg"
                              class="img-fluid" alt="">
                            <div class="item-meta">
                              <div class="item-price">$420,000 <small>$777 / sq m</small> </div>
                            </div>
                            <div class="item-badges">
                              <div class="item-badge-right">For Sale</div>
                            </div>
                          </a> <a href="#" class="save-item"><i class="fa fa-star"></i></a> </div>
                        <div class="item-info">
                          <h3 class="item-title">3 bed semi-detached house</h3>
                          <div class="item-location"><i class="fa fa-map-marker"></i> Kirkstone Road, Middlesbrough TS3
                          </div>
                          <div class="item-details-i"> <span class="bedrooms" data-toggle="tooltip" title="3 Bedrooms">3
                              <i class="fa fa-bed"></i></span> <span class="bathrooms" data-toggle="tooltip"
                              title="2 Bathrooms">2 <i class="fa fa-bath"></i></span> </div>
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
      <div class="feature-box centered">
        <div>
          <div class="container">
            <div class="row justify-content-md-center">
              <div class="col col-lg-12 col-xl-10">
                <div class="main-title"><span>What our clients say</span></div>
                <div class="swiper-container testimonials">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="item content-box centered">
                        <div class="image"> <img class="rounded-circle" src="<?php echo $url ;?>img/demo/profile.jpg" width="180" alt="">
                        </div>
                        <h4>Thank you for your quick and clear responses. They are much appreciated. This was a site
                          that needed to go up fast and it has – customizations and all!</h4>
                        <div class="caption">The Brown Family</div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="item content-box centered">
                        <div class="image"> <img class="rounded-circle" src="<?php echo $url ;?>img/demo/profile2.jpg" width="180" alt="">
                          <h4>Thank you for your quick and clear responses. They are much appreciated. This was a site
                            that needed to go up fast and it has – customizations and all!</h4>
                          <div class="caption">The Brown Family</div>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="item content-box centered">
                        <div class="image"> <img class="rounded-circle" src="<?php echo $url ;?>img/demo/profile3.jpg" width="180" alt="">
                          <h4>Thank you for your quick and clear responses. They are much appreciated. This was a site
                            that needed to go up fast and it has – customizations and all!</h4>
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

      <!--<div class="feature-box gray centered">
        <div>
          <div class="container">
            <div class="row justify-content-md-center">
            <div class="col col-lg-12 col-xl-10">
                <div class="main-title"><span>News &amp; Updates </span></div>
                <div class="main-title-description">Stay up to date with the latest happenings.</div>
                <div class="item-listing grid mb50">
                  <div class="row">
                    <div class="col-md-4">
                      <div class="item">
                        <div class="item-image"> <a href="blog_single.html"><img src="<?php echo $url ;?>img/demo/property/7.jpg"
                              class="img-fluid" alt="">
                            <div class="item-meta">
                              <div class="item-price"><small>26th Oct 17</small> </div>
                            </div>
                            <div class="item-badges">
                              <div class="item-badge-right">Legal</div>
                            </div>
                          </a> </div>
                        <div class="item-info">
                          <h3 class="item-title">Allianz invests 100m in Hines European Value Fund</h3>
                          <div class="item-comments-count"><i class="fa fa-comment-o"></i> 3</div>
                          <div class="item-author">By John Doe</div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="item">
                        <div class="item-image"> <a href="blog_single.html"><img src="<?php echo $url ;?>img/demo/property/8.jpg"
                              class="img-fluid" alt="">
                            <div class="item-meta">
                              <div class="item-price"><small>26th Oct 17</small> </div>
                            </div>
                            <div class="item-badges">
                              <div class="item-badge-right">Development</div>
                            </div>
                          </a> </div>
                        <div class="item-info">
                          <h3 class="item-title">Skanska` signs 43.2m construction deal in Sollentuna</h3>
                          <div class="item-comments-count"><i class="fa fa-comment-o"></i> 3</div>
                          <div class="item-author">By John Doe</div>
                        </div>
                      </div>
                    </div>
                   <div class="col-md-4">
                      <div class="item">
                        <div class="item-image"> <a href="blog_single.html"><img src="img/demo/property/9.jpg"
                              class="img-fluid" alt="">
                            <div class="item-meta">
                              <div class="item-price"><small>26th Oct 17</small> </div>
                            </div>
                            <div class="item-badges">
                              <div class="item-badge-right category">Finance</div>
                            </div>
                          </a> </div>
                        <div class="item-info">
                          <h3 class="item-title">Baltic Horizon Fund plans next public offering of new units</h3>
                          <div class="item-comments-count"><i class="fa fa-comment-o"></i> 3</div>
                          <div class="item-author">By John Doe</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="text-center"><a href="#" class="btn btn-xlg btn-link">View All</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="feature-box centered pb0">
        <div>
          <div class="container">
            <div class="row justify-content-md-center">
              <div class="col col-lg-10 col-xl-10">
                <div class="row">
                  <div class="col-md-6">
                    <div class="text-center mt50 mb50">
                      <div class="main-title"><span>Connect with us from anywhere</span></div>
                      <div class="main-title-description">Download the mobile app and enjoy the smoothest experience
                      </div>
                      <img src="img/store/apple.svg" width="120" alt=""> <img src="img/store/google.svg" width="120"
                        alt="">
                    </div>
                  </div>
                  <div class="col-md-6"> <img src="img/demo/mobile-app-hero.png" class="img-fluid" alt=""> </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>-->

    <button class="btn default-button btn-circle" id="to-top"><i class="fa fa-angle-up"></i></button>
    
    <?php include('./templates/footer.php'); ?>
  </div>
</body>

</html>