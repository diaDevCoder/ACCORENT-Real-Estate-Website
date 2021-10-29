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
  $page_title = " | Notifications";
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
                                $bookmarkActive = "active";
                                include("../templates/sidebar.php") ?>
                            </div>
                            <div class="col-md-7 col-lg-8 col-xl-8">
                                <div class="page-header bordered">
                                    <h1>Notifications</h1>
                                </div>
                                <form action="index.php">
                                    <h3 class="subheadline">Digest emails for messages</h3>
                                    <div class="form-group">
                                        <div class="checkbox">
                                            <input type="checkbox" id="private_message" checked>
                                            <label for="private_message">When you receive a private message from a
                                                contact</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="checkbox">
                                            <input type="checkbox" id="item_message" checked>
                                            <label for="item_message">When you receive a message for your posted
                                                item</label>
                                        </div>
                                    </div>
                                    <h3 class="subheadline">Other Notifications</h3>
                                    <div class="form-group">
                                        <div class="checkbox">
                                            <input type="checkbox" id="marketing_emails" checked>
                                            <label for="marketing_emails">Marketing emails</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="checkbox">
                                            <input type="checkbox" id="monthly_newsletter" checked>
                                            <label for="monthly_newsletter">Monthly Newsletter</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="checkbox">
                                            <input type="checkbox" id="weekly_digest" checked>
                                            <label for="weekly_digest">Weekly Commnuity Digest</label>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-lg btn-primary">Save Settings</button>
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