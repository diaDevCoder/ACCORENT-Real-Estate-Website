<?php
    session_start();

    if (!empty($_SESSION['role'])){

    } else {
        header('Location: ../');
    }

    if ($_SESSION['role'] != "agent" && !empty($_SESSION['username']) ) {
        $_SESSION['error_message'] = "404 Not Found";
        header("Location: $url error? error=no page found"); 
    }else{
      //stay on page
    }
?>

<!DOCTYPE html>
<html lang="en">

<?php
  $page_title = " | Profile";
  include('../templates/header.php');
?>

<body onload="profile();">
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
                                $profileActive = "active";
                                include("../templates/sidebar.php") ?>
                            </div>

                            <div class="col-md-7 col-lg-8 col-xl-8">
                                <div class="page-header bordered">
                                    <h1>My profile <small>Manage your public profile</small></h1>
                                </div>
                                <form action="index.php">
                                    <h3 class="subheadline">Basic Information</h3>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>First Name</label>
                                                <input type="text" disabled class="form-control form-control-lg" id="fname" placeholder=""
                                                    value="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Last Name</label>
                                                <input type="text" disabled class="form-control form-control-lg" id="lname" placeholder=""
                                                    value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Your Email</label>
                                        <input type="text" disabled class="form-control form-control-lg" id="email" value="">
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Phone</label>
                                                <input type="text" disabled class="form-control form-control-lg" id="phone" placeholder=""
                                                    value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>About Me</label>
                                        <textarea disabled class="form-control form-control-lg text-editor" id="about"
                                            placeholder=""></textarea>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" disabled class="form-control form-control-lg" id="address" placeholder="">
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Country</label>
                                                <input type="text" disabled class="form-control form-control-lg" id="country" placeholder=""
                                                    id="country">
                                            </div>
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class="col-md-6">
                                        <div class="for-group">
                                        <label>Profile picture</label>
                                          <div class="card card-user">
                                              <div class="image"></div>
                                              <div class="content">
                                                  <div class="author">
                                                      <a href="#">
                                                        <div class="d-flex justify-content-center">
                                                          <img class="avatar" src="..\img\face-0.jpg" id="image_output" alt="..." />
                                                        </div>    
                                                          <hr>
                                                          <div class="d-flex justify-content-center">
                                                          <label for="file" style="cursor: pointer; border:1px solid skyblue; padding: 15px;" class="text-secondary">Choose Picture</label>                                                        
                                                            <input type="file" disabled accept="image/jpeg, image/jpg, image/png" name="image" class="form-control" id="file"  onchange="loadFile(event)" style="display: none;">
                                                          </div>
                                                      </a>
                                                  </div>
                                                  <p class="description text-center"></p>
                                              </div>                                            
                                              <div class="text-center"></div>
                                          </div>
                                        </div>
                                    </div>

                                    <hr>
                                    <div class="form-group action">
                                        <button type="button" class="btn edit-button mr-3" id="editBtn" onclick="editProfile();">Edit Profile</button>
                                        <button type="submit" class="btn update-button" id="updateBtn" style="cursor:not-allowed;" onsubmit="updateProfile();" disabled>Update Profile</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="btn default-button btn-circle" id="to-top"><i class="fa fa-angle-up"></i></button>

        <?php include('../templates/footer.php'); ?>
    </div>
    <script>
        var loadFile = function(event) {
            var image = document.getElementById('image_output');
            image.src = URL.createObjectURL(event.target.files[0]);
            };
    </script>

    <script>
    var placeSearch, autocomplete;
    var componentForm = {
        //street_number: 'short_name',
        //route: 'long_name',
        locality: 'long_name',
        administrative_area_level_1: 'long_name',
        country: 'long_name',
        postal_code: 'long_name'
    };

    function initAutocomplete() {
        autocomplete = new google.maps.places.Autocomplete((document.getElementById('autocomplete')), {
            types: ['geocode']
        });
        autocomplete.addListener('place_changed', fillInAddress);
    }

    function fillInAddress() {
        var place = autocomplete.getPlace();
        for (var component in componentForm) {
            document.getElementById(component).value = '';
            document.getElementById(component).disabled = false;
        }

        for (var i = 0; i < place.address_components.length; i++) {
            var addressType = place.address_components[i].types[0];
            if (componentForm[addressType]) {
                var val = place.address_components[i][componentForm[addressType]];
                document.getElementById(addressType).value = val;
            }
        }
    }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?libraries=places&callback=initAutocomplete" async defer>
    </script>
    <script>
    tinymce.init({
        selector: '.text-editor',
        height: 200,
        menubar: false,
        branding: false,
        plugins: [
            'lists link image preview',
        ],
        toolbar: 'undo redo | link | formatselect | bold italic underline  | alignleft aligncenter alignright alignjustify | bullist numlist'
    });
    </script>
</body>

</html>