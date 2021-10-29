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
  $page_title = " | Add property";
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
                                $addProperty_Active = "active";
                                include("../templates/sidebar.php") ?>
                            </div>
                            <div class="col-md-7 col-lg-8 col-xl-8">
                                <div class="page-header bordered">
                                    <h1>Submit your property <small>We've buyers and tenants for
                                            you!</small></h1>
                                </div>
                                <form action="index.php">
                                    <h3 class="subheadline">Basic Details</h3>
                                    <div class="form-group">
                                        <label for="title">Property Title</label>
                                        <input type="text" class="form-control form-control-lg" id="title"
                                            placeholder="Property Title" autofocus>
                                    </div>
                                    <div class="form-group">
                                        <label>For Sale/Rent?</label>
                                        <div>
                                            <div class="radio radio-inline">
                                                <input type="radio" name="type" id="rent" value="rent">
                                                <label for="rent">Rent</label>
                                            </div>
                                            <div class="radio radio-inline">
                                                <input type="radio" name="type" id="sale" value="sale">
                                                <label for="sale">Sale</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Price (IN NGN)</label>
                                        <input type="text" class="form-control form-control-lg"
                                            placeholder="Price (IN NGN  &#8358;)">
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="bedrooms">Bedrooms</label>
                                                <select name="bedrooms" id="bedrooms"
                                                    class="form-control form-control-lg ui-select">
                                                    <option value="0">0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7+">7+</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="bathrooms">Bathrooms</label>
                                                <select name="bathrooms" id="bathrooms"
                                                    class="form-control form-control-lg ui-select">
                                                    <option value="0">0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5+">5+</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Area Sq/ft</label>
                                                <input type="text" class="form-control form-control-lg" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>MLS No.</label>
                                                <input type="text" class="form-control form-control-lg" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <h3 class="subheadline">Location</h3>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" class="form-control form-control-lg" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h3 class="subheadline">Additional Features</h3>
                                        <div class="feature-list three_cols">
                                            <div class="checkbox">
                                                <input type="checkbox" id="Garden">
                                                <label for="Garden">Garden</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" id="Gym">
                                                <label for="Gym">Gym</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" id="Internet">
                                                <label for="Internet">Internet</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" id="Pool">
                                                <label for="Pool">Swimming Pool</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" id="Window">
                                                <label for="Window">Window Covering</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" id="Parking">
                                                <label for="Parking">Parking</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" id="School">
                                                <label for="School">School</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" id="Bank">
                                                <label for="Bank">Bank</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" id="Metro">
                                                <label for="Metro">Metro</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" id="Airport">
                                                <label for="Airport">Airport</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Property Description</label>
                                        <textarea class="form-control form-control-lg text-editor"
                                            placeholder=""></textarea>
                                    </div>
                                    <div class="form-group">
                                        <h3 class="subheadline">Upload Photos</h3>
                                        <div class="ui-dropzone">
                                            <div class="icon"></div>
                                            <div>Drag and drop images or click to upload</div>
                                            <input type="file" class="form-control form-control-lg" id="gallery" multiple>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="checkbox">
                                            <input type="checkbox" id="featured">
                                            <label for="featured">Yes ‚ feature this listing. </label>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-lg btn-primary">Submit Property</button>
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
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBvuspZieDAMlpAVAe2qwlvkk8oQU34dtg&libraries=places&callback=initAutocomplete"
        async defer></script>
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