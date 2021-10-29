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
  $page_title = "| Contact us";
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
      $contact_activeBtn = "btn-active";
      $contact_style = "white";

      include('./templates/navbar.php');
    ?>




    <div id="content" class="property-single">
      <div class="container">
        <div class="row justify-content-md-center">
          <div class="col col-lg-12 col-xl-10">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
              </ol>
            </nav>
            <div class="page-header">
              <h1>Contact Us</h1>
            </div>
            <div class="row has-sidebar">
              <div class="col-md-5 col-lg-4 col-xl-4 col-sidebar">
                <div class="card">
                  <form>
                    <div class="form-group">
                      <label for="contact_name">Your Name</label>
                      <input type="text" class="form-control" id="contact_name" placeholder="Your Name">
                    </div>
                    <div class="form-group">
                      <label for="contact_email">Your Email</label>
                      <input type="email" class="form-control" id="contact_email" placeholder="Your Email">
                    </div>
                    <div class="form-group">
                      <label for="contact_subject">Subject</label>
                      <input type="text" class="form-control" id="contact_subject" placeholder="Subject">
                    </div>
                    <div class="form-group">
                      <label for="contact_message">Message</label>
                      <textarea rows="4" class="form-control" id="contact_message" placeholder="Message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-lg btn-primary">Send Message</button>
                  </form>
                </div>
              </div>
              <div class="col-md-7 col-lg-8 col-xl-8">
                <div class="row">
                  <div class="col-md-6">
                    <h3 class="subheadline mt0">Head Office</h3>
                    <address>
                      <strong>Twitter, Inc.</strong><br>
                      1355 Market Street, Suite 900<br>
                      San Francisco, CA 94103<br>
                      <abbr title="Phone">P:</abbr> (123) 456-7890
                    </address>
                  </div>
                  <div class="col-md-6">
                    <h3 class="subheadline mt0">Office Hours</h3>
                    <ul class="list-unstyled opening-hours">
                      <li>Monday - Friday<span class="float-right">9:00-22:00</span></li>
                      <li>Saturday <span class="float-right">14:00-23:30</span></li>
                      <li>Sunday <span class="float-right">Closed</span></li>
                    </ul>
                  </div>
                </div>
                <h3 class="subheadline mt0">Office Location</h3>
                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1215.7401235613713!2d1.4497354260471211!3d52.45232942952154!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d9f169c5a088db%3A0x75a6abde48cc5adc!2sKents+Ln%2C+Bungay+NR35+1JF%2C+UK!5e0!3m2!1sen!2sin!4v1489862715790"
                  width="600" height="450" style="border:0; width:100%;" allowfullscreen></iframe>
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