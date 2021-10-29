<?php
    error_reporting(0);
    require_once('../db/db_connection.php');

    session_start();
    $url = $_SESSION['url'];

    if (empty($_SESSION['username'])) {
        header('Location: ../');
      }

     if ($_SESSION['role'] != "user" && !empty($_SESSION['username']) ) {
        $_SESSION['error_message'] = "404 Not Found";
        header("Location: $url error? error=no page found"); 
    }else{
      //stay on page
    }


    //Query to output all details from database
    $user_id = $_SESSION['user_id'];
    $sql = "SELECT * FROM users WHERE id=$user_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
        $user_profile = array("user_id"=>$row['id'],"firstname"=>$row['firstname'], "lastname"=>$row['lastname'], "email"=>$row['email'],"country"=>$row['country'],"phone"=>$row['phoneno'],"address"=>$row['address'],"about"=>$row['about'],"picture"=>$row['profile_picture']);
        }        
    }




    //Query to update details in the database
    if (isset($_POST['updateBtn'])) {
        $fname = $conn->real_escape_string($_POST['firstname']);
        $lname =$conn->real_escape_string($_POST['lastname']);
        $email = $conn->real_escape_string($_POST['email']);
        $country = $conn->real_escape_string($_POST['country']);
        $phoneno = $conn->real_escape_string($_POST['phone']);
        $address = $conn->real_escape_string($_POST['address']);
        $about = $conn->real_escape_string($_POST['about']);

        $statement = $conn->prepare("UPDATE users SET firstname=?,lastname=?,email=?,country=?,phoneno=?,address=?,about=? WHERE id=?");
        $id = $_SESSION['user_id'];
        $statement->bind_param('sssssssi', $fname, $lname, $email, $country, $phoneno, $address, $about, $id);
        $_SESSION['username'] = $fname;
        $statement->execute();

        echo "<script>location.replace('./profile');</script>";
        $_SESSION['success_message'] = "Update successfully!";
        $_SESSION['success_action'] = "profile";
        header('Location: ./success');
    }


    //Upload picture to the folder and database
        $msg = "";

        if (isset($_POST['upload_Btn'])) {
            $filename = $_FILES["profile_picture"]["name"];
            $tempname = $_FILES["profile_picture"]["tmp_name"];    
            $folder = "../img/profile/".$filename;

            //echo $_FILES["profile_picture"]["type"]."<br>";
            //echo $_FILES["profile_picture"]["size"]."<br>";

            //Save the picture filename to the database
            $sql = $conn->prepare("UPDATE users SET profile_picture=? WHERE id=?");
            $id = $_SESSION['user_id'];
            $_SESSION['user_picture'] = "img/profile/".$filename;
            $sql->bind_param("si",$filename, $id);
            $sql->execute();
                  
            // move the uploaded image into the folder: image
            if (move_uploaded_file($tempname, $folder))  {
                echo "<script>location.replace('./profile');</script>";
                $_SESSION['success_message'] = "Picture upload successfully!";
                header('Location: ./success');
            }else{

            }
        }                
    

        // $file_upload_flag="true"; // Flag to check conditions
        // $file_up_size=$_FILES['profile_picture']['size'];

        // echo "File Name:".$_FILES['profile_picture']['name'];
        // echo "<br>File Size:".$_FILES['profile_picture']['size'];
        // echo "<br>File Type:".$_FILES['profile_picture']['type'];
        // echo "<br>File tmp_name:".$_FILES['profile_picture']['tmp_name'];
        // echo "<br>File error:".$_FILES['profile_picture']['error'];
        // echo "<br>---End of uploaded file details---<br><br>";

        // if ($_FILES['profile_picture']['size']>250000){
        //     $msg=$msg."Your uploaded file size is more than 250KB ";
        //     $msg.=" so please reduce the file size and then upload.<BR>";
        //     $file_upload_flag="false";
        // }

        // // allow only jpeg or gif files, remove this if not required //
        // if (!($_FILES['profile_picture']['type'] =="image/jpeg" OR !$_FILES['profile_picture']['type'] =="image/png")) {
        //     $msg=$msg."Your uploaded file must be of JPG or PNG. ";
        //     $msg.="Other file types are not allowed<BR>";
        //     $file_upload_flag="false";
        // }

        //     $file_name=$_FILES['profile_picture']['name'];
        //     // the path with the file name where the file will be stored
        //     $add="upload/$file_name"; 

        // if($file_upload_flag=="true"){ // checking the Flag value 
        //     if(move_uploaded_file ($_FILES['profile_picture']['tmp_name'], $add)) {
        //         // do your coding here to give a thanks message or any other thing.
        //         $msg="File successfully uploaded";
        //     }else{
        //         echo "Failed to upload file Contact Site admin to fix the problem";
        //     }
        // }else{
        //     $msg .= " Failed to upload file ";
        // }
        //     echo " $msg <br><br> <a href=upload.php>Return to File upload </a>";
    //}


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
                                <div id="sidebar" class="sidebar-left">
                                    <div class="sidebar_inner">
                                        <div class="list-group no-border list-unstyled">
                                            <span class="list-group-item heading">Manage Account</span>
                                            <a href="<?php echo $url ;?>user/profile" class="list-group-item active"><i
                                                    class="fa fa-fw fa-pencil"></i> My
                                                Profile</a>
                                            <a href="<?php echo $url ;?>user/change-password" class="list-group-item"><i
                                                    class="fa fa-fw fa-lock"></i> Change
                                                Password</a>
                                            <a href="<?php echo $url ;?>user/account" class="list-group-item"><i
                                                    class="fa fa-fw fa-cog"></i> Account</a>


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7 col-lg-8 col-xl-8">
                                <div class="page-header bordered">
                                    <h1>My profile <small>Manage your public profile</small></h1>
                                </div>
                                <form action="<?php echo $url.$_SESSION['role']."/profile";?>" method="POST" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-12">
                                        <div class="for-group">
                                        <label class="lead">Profile picture</label>
                                          <div class="card card-user">
                                              <div class="content">
                                                  <div class="author">
                                                      <a href="#" style="cursor: default;">
                                                        <div class="d-flex justify-content-center" style="cursor: default;">
                                                          <img class="avatar" src="<?php echo $url."img/profile/".$user_profile['picture'];?>" width="370" height="350" id="image_output" alt="..." />
                                                        </div>                                                        
                                                          <hr>
                                                          <div class="d-flex justify-content-center" style="cursor: default;">                                                          
                                                              <div class="row">
                                                                  <div class="col-md-6">
                                                                    <label for="file" style="cursor: pointer; border:1px solid skyblue; padding: 15px;" id="file_label" class="text-secondary">Choose picture</label>
                                                                    <input type="file" name="profile_picture" accept="image/jpeg, image/png" class="form-control" id="file" onchange="loadFile(event)" style="display: none;">
                                                                  </div> 
                                                                  <div class="col-md-6">
                                                                    <input type="submit" name="upload_Btn" style="cursor: pointer; border:1px solid skyblue; padding: 15px;" id="uploadBtn" class="form-control" value="Upload picture">
                                                                  </div>
                                                              </div>                                            
                                                        </div>
                                                      </a>
                                                  </div>
                                              </div>                                            
                                              <div class="text-center"></div>
                                          </div>
                                        </div>
                                    </div>
                                    </div>
                                </form>
                                <form action="<?php echo $url.$_SESSION['role']."/profile";?>" method="POST">                                    
                                    <hr/>
                                    <h3 class="subheadline">Basic Information</h3>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>First Name</label>
                                                <input type="text" name="firstname" class="form-control form-control-lg" id="fname" placeholder="" value="<?php echo $user_profile['firstname'];?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Last Name</label>
                                                <input type="text" name="lastname" class="form-control form-control-lg" id="lname"  placeholder="" value="<?php echo $user_profile['lastname'];?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Your Email</label>
                                        <input type="text" name="email" class="form-control form-control-lg" id="email" value="<?php echo $user_profile['email'];?>">
                                    </div>
                                    <div class="row">                                        
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="country">Country</label>
                                                <select name="country" class="form-control form-control-lg" id="country">
                                                        <option value="select">Select country</option>
                                                        <option data-code="+93" value="Afghanistan">Afghanistan</option>
                                                        <option data-code="+358"  value="Aland Islands">Aland Islands</option>
                                                        <option data-code="+355" value="Albania">Albania</option>
                                                        <option data-code="+213" value="Algeria">Algeria</option>
                                                        <option data-code="+1684" value="American Samoa">American Samoa</option>
                                                        <option data-code="+376" value="Andorra">Andorra</option>
                                                        <option data-code="+244" value="Angola">Angola</option>
                                                        <option data-code="+1264" value="Anguilla">Anguilla</option>
                                                        <option data-code="+672" value="Antarctica">Antarctica</option>
                                                        <option data-code="+1268" value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                        <option data-code="+54" value="Argentina">Argentina</option>
                                                        <option data-code="+374" value="Armenia">Armenia</option>
                                                        <option data-code="+297" value="Aruba">Aruba</option>
                                                        <option data-code="+61" value="Australia">Australia</option>
                                                        <option data-code="+43" value="Austria">Austria</option>
                                                        <option data-code="+994" value="Azerbaijan">Azerbaijan</option>
                                                        <option data-code="+1242" value="Bahamas">Bahamas</option>
                                                        <option data-code="+973" value="Bahrain">Bahrain</option>
                                                        <option data-code="+880" value="Bangladesh">Bangladesh</option>
                                                        <option data-code="+1246" value="Barbados">Barbados</option>
                                                        <option data-code="+375" value="Belarus">Belarus</option>
                                                        <option data-code="+32" value="Belgium">Belgium</option>
                                                        <option data-code="+501" value="Belize">Belize</option>
                                                        <option data-code="+229" value="Benin">Benin</option>
                                                        <option data-code="+1441" value="Bermuda">Bermuda</option>
                                                        <option data-code="+975" value="Bhutan">Bhutan</option>
                                                        <option data-code="+591" value="Bolivia">Bolivia</option>
                                                        <option data-code="+599" value="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius and Saba</option>
                                                        <option data-code="+387" value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                                        <option data-code="+267" value="Botswana">Botswana</option>
                                                        <option data-code="+47" value="Bouvet Island">Bouvet Island</option>
                                                        <option data-code="+55" value="Brazil">Brazil</option>
                                                        <option data-code="+246" value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                                        <option data-code="+673" value="Brunei Darussalam">Brunei Darussalam</option>
                                                        <option data-code="+359" value="Bulgaria">Bulgaria</option>
                                                        <option data-code="+226" value="Burkina Faso">Burkina Faso</option>
                                                        <option data-code="+257" value="Burundi">Burundi</option>
                                                        <option data-code="+855" value="Cambodia">Cambodia</option>
                                                        <option data-code="+237" value="Cameroon">Cameroon</option>
                                                        <option data-code="+1" value="Canada">Canada</option>
                                                        <option data-code="+238" value="Cape Verde">Cape Verde</option>
                                                        <option data-code="+1345" value="Cayman Islands">Cayman Islands</option>
                                                        <option data-code="+236" value="Central African Republic">Central African Republic</option>
                                                        <option data-code="+235" value="Chad">Chad</option>
                                                        <option data-code="+56" value="Chile">Chile</option>
                                                        <option data-code="+86" value="China">China</option>
                                                        <option data-code="+61" value="Christmas Island">Christmas Island</option>
                                                        <option data-code="+672" value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                                        <option data-code="+57" value="Colombia">Colombia</option>
                                                        <option data-code="+269" value="Comoros">Comoros</option>
                                                        <option data-code="+242" value="Congo">Congo</option>
                                                        <option data-code="+242" value="Congo, Democratic Republic of the Congo">Congo, Democratic Republic of the Congo</option>
                                                        <option data-code="+682" value="Cook Islands">Cook Islands</option>
                                                        <option data-code="+506" value="Costa Rica">Costa Rica</option>
                                                        <option data-code="+225" value="Cote D'Ivoire">Cote D'Ivoire</option>
                                                        <option data-code="+385" value="Croatia">Croatia</option>
                                                        <option data-code="+53" value="Cuba">Cuba</option>
                                                        <option data-code="+599" value="Curacao">Curacao</option>
                                                        <option data-code="+357" value="Cyprus">Cyprus</option>
                                                        <option data-code="+420" value="Czech Republic">Czech Republic</option>
                                                        <option data-code="+45" value="Denmark">Denmark</option>
                                                        <option data-code="+253" value="Djibouti">Djibouti</option>
                                                        <option data-code="+1767" value="Dominica">Dominica</option>
                                                        <option data-code="+1809" value="Dominican Republic">Dominican Republic</option>
                                                        <option data-code="+593" value="Ecuador">Ecuador</option>
                                                        <option data-code="+20" value="Egypt">Egypt</option>
                                                        <option data-code="+503" value="El Salvador">El Salvador</option>
                                                        <option data-code="+240" value="Equatorial Guinea">Equatorial Guinea</option>
                                                        <option data-code="+291" value="Eritrea">Eritrea</option>
                                                        <option data-code="+372" value="Estonia">Estonia</option>
                                                        <option data-code="+251" value="Ethiopia">Ethiopia</option>
                                                        <option data-code="+500" value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                                        <option data-code="+298" value="Faroe Islands">Faroe Islands</option>
                                                        <option data-code="+679" value="Fiji">Fiji</option>
                                                        <option data-code="+358" value="Finland">Finland</option>
                                                        <option data-code="+33" value="France">France</option>
                                                        <option data-code="+594" value="French Guiana">French Guiana</option>
                                                        <option data-code="+689" value="French Polynesia">French Polynesia</option>
                                                        <option data-code="+262" value="French Southern Territories">French Southern Territories</option>
                                                        <option data-code="+241" value="Gabon">Gabon</option>
                                                        <option data-code="+220" value="Gambia">Gambia</option>
                                                        <option data-code="+995" value="Georgia">Georgia</option>
                                                        <option data-code="+49" value="Germany">Germany</option>
                                                        <option data-code="+233" value="Ghana">Ghana</option>
                                                        <option data-code="+350" value="Gibraltar">Gibraltar</option>
                                                        <option data-code="+30" value="Greece">Greece</option>
                                                        <option data-code="+299" value="Greenland">Greenland</option>
                                                        <option data-code="+1473" value="Grenada">Grenada</option>
                                                        <option data-code="+590" value="Guadeloupe">Guadeloupe</option>
                                                        <option data-code="+1671" value="Guam">Guam</option>
                                                        <option data-code="+502" value="Guatemala">Guatemala</option>
                                                        <option data-code="+44" value="Guernsey">Guernsey</option>
                                                        <option data-code="+224" value="Guinea">Guinea</option>
                                                        <option data-code="+245" value="+245">Guinea-Bissau</option>
                                                        <option data-code="+592" value="Guyana">Guyana</option>
                                                        <option data-code="+509" value="Haiti">Haiti</option>
                                                        <option data-code="+0" value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                                                        <option data-code="+379" value="Vatican">Vatican</option>
                                                        <option data-code="+504" value="Honduras">Honduras</option>
                                                        <option data-code="+852" value="Hong Kong">Hong Kong</option>
                                                        <option data-code="+36" value="Hungary">Hungary</option>
                                                        <option data-code="+354" value="Iceland">Iceland</option>
                                                        <option data-code="+91" value="India">India</option>
                                                        <option data-code="+62" value="Indonesia">Indonesia</option>
                                                        <option data-code="+98" value="Iran">Iran, Islamic Republic of Iran</option>
                                                        <option data-code="+964" value="Iraq">Iraq</option>
                                                        <option data-code="+353" value="Ireland">Ireland</option>
                                                        <option data-code="+44" value="Isle of Man">Isle of Man</option>
                                                        <option data-code="+972" value="Israel">Israel</option>
                                                        <option data-code="+39" value="Italy">Italy</option>
                                                        <option data-code="+1876" value="Jamaica">Jamaica</option>
                                                        <option data-code="+81" value="Japan">Japan</option>
                                                        <option data-code="+44" value="Jersey">Jersey</option>
                                                        <option data-code="+962" value="Jordan">Jordan</option>
                                                        <option data-code="+7" value="Kazakhstan">Kazakhstan</option>
                                                        <option data-code="+254" value="Kenya">Kenya</option>
                                                        <option data-code="+686" value="Kiribati">Kiribati</option>
                                                        <option data-code="+850" value="North Korea">North Korea</option>
                                                        <option data-code="+82" value="South Korea">South Korea</option>
                                                        <option data-code="+381" value="Kosovo">Kosovo</option>
                                                        <option data-code="+965" value="Kuwait">Kuwait</option>
                                                        <option data-code="+996" value="Kyrgyzstan">Kyrgyzstan</option>
                                                        <option data-code="+856" value="Laos">Laos</option>
                                                        <option data-code="+371" value="Latvia">Latvia</option>
                                                        <option data-code="+961" value="Lebanon">Lebanon</option>
                                                        <option data-code="+266" value="Lesotho">Lesotho</option>
                                                        <option data-code="+231" value="Liberia">Liberia</option>
                                                        <option data-code="+218" value="Libya">Libya</option>
                                                        <option data-code="+423" value="Liechtenstein">Liechtenstein</option>
                                                        <option data-code="+370" value="Lithuania">Lithuania</option>
                                                        <option data-code="+352" value="Luxembourg">Luxembourg</option>
                                                        <option data-code="+853" value="Macao">Macao</option>
                                                        <option data-code="+389" value="Macedonia">Macedonia</option>
                                                        <option data-code="+261" value="Madagascar">Madagascar</option>
                                                        <option data-code="+265" value="Malawi">Malawi</option>
                                                        <option data-code="+60" value="Malaysia">Malaysia</option>
                                                        <option data-code="+960" value="Maldives">Maldives</option>
                                                        <option data-code="+223" value="Mali">Mali</option>
                                                        <option data-code="+356" value="Malta">Malta</option>
                                                        <option data-code="+692" value="Marshall Islands">Marshall Islands</option>
                                                        <option data-code="+596" value="Martinique">Martinique</option>
                                                        <option data-code="+222" value="Mauritania">Mauritania</option>
                                                        <option data-code="+230" value="Mauritius">Mauritius</option>
                                                        <option data-code="+269" value="Mayotte">Mayotte</option>
                                                        <option data-code="+52" value="Mexico">Mexico</option>
                                                        <option data-code="+691" value="Micronesia">Micronesia</option>
                                                        <option data-code="+373" value="Moldova">Moldova</option>
                                                        <option data-code="+377" value="Monaco">Monaco</option>
                                                        <option data-code="+976" value="Mongolia">Mongolia</option>
                                                        <option data-code="+382" value="Montenegro">Montenegro</option>
                                                        <option data-code="+1664" value="Montserrat">Montserrat</option>
                                                        <option data-code="+212" value="Morocco">Morocco</option>
                                                        <option data-code="+258" value="Mozambique">Mozambique</option>
                                                        <option data-code="+95" value="Myanmar">Myanmar</option>
                                                        <option data-code="+264" value="Namibia">Namibia</option>
                                                        <option data-code="+674" value="Nauru">Nauru</option>
                                                        <option data-code="+977" value="Nepal">Nepal</option>
                                                        <option data-code="+31" value="Netherlands">Netherlands</option>
                                                        <option data-code="+599" value="Netherlands Antilles">Netherlands Antilles</option>
                                                        <option data-code="+687" value="New Caledonia">New Caledonia</option>
                                                        <option data-code="+64" value="New Zealand">New Zealand</option>
                                                        <option data-code="+505" value="Nicaragua">Nicaragua</option>
                                                        <option data-code="+227" value="Niger">Niger</option>
                                                        <option data-code="+234" value="Nigeria">Nigeria</option>
                                                        <option data-code="+683" value="Niue">Niue</option>
                                                        <option data-code="+672" value="Norfolk Island">Norfolk Island</option>
                                                        <option data-code="+1670" value="Northern Mariana Islands">Northern Mariana Islands</option>
                                                        <option data-code="+47" value="Norway">Norway</option>
                                                        <option data-code="+968" value="Oman">Oman</option>
                                                        <option data-code="+92" value="Pakistan">Pakistan</option>
                                                        <option data-code="+680" value="Palau">Palau</option>
                                                        <option data-code="+970" value="+970">Palestinian Territory</option>
                                                        <option data-code="+507" value="Panama">Panama</option>
                                                        <option data-code="+675" value="Papua New Guinea">Papua New Guinea</option>
                                                        <option data-code="+595" value="Paraguay">Paraguay</option>
                                                        <option data-code="+51" value="Peru">Peru</option>
                                                        <option data-code="+63" value="Philippines">Philippines</option>
                                                        <option data-code="+64" value="Pitcairn">Pitcairn</option>
                                                        <option data-code="+48" value="Poland">Poland</option>
                                                        <option data-code="+351" value="Portugal">Portugal</option>
                                                        <option data-code="+1787" value="Puerto Rico">Puerto Rico</option>
                                                        <option data-code="+974" value="Qatar">Qatar</option>
                                                        <option data-code="+262" value="Reunion">Reunion</option>
                                                        <option data-code="+40" value="Romania">Romania</option>
                                                        <option data-code="+7" value="Russia">Russia</option>
                                                        <option data-code="+250" value="Rwanda">Rwanda</option>
                                                        <option data-code="+590" value="Saint Barthelemy">Saint Barthelemy</option>
                                                        <option data-code="+290" value="Saint Helena">Saint Helena</option>
                                                        <option data-code="+1869" value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                                        <option data-code="+1758" value="Saint Lucia">Saint Lucia</option>
                                                        <option data-code="+590" value="Saint Martin">Saint Martin</option>
                                                        <option data-code="+508" value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                                        <option data-code="+1" value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                                                        <option data-code="+684" value="Samoa">Samoa</option>
                                                        <option data-code="+378" value="San Marino">San Marino</option>
                                                        <option data-code="+239" value="Sao Tome and Principe">Sao Tome and Principe</option>
                                                        <option data-code="+966" value="Saudi Arabia">Saudi Arabia</option>
                                                        <option data-code="+221" value="Senegal">Senegal</option>
                                                        <option data-code="+381" value="Serbia">Serbia</option>
                                                        <option data-code="+381" value="Montenegro">Montenegro</option>
                                                        <option data-code="+248" value="Seychelles">Seychelles</option>
                                                        <option data-code="+232" value="Sierra Leone">Sierra Leone</option>
                                                        <option data-code="+65" value="Singapore">Singapore</option>
                                                        <option data-code="+1" value="Sint Maarten">Sint Maarten</option>
                                                        <option data-code="+421" value="Slovakia">Slovakia</option>
                                                        <option data-code="+386" value="Slovenia">Slovenia</option>
                                                        <option data-code="+677" value="Solomon Islands">Solomon Islands</option>
                                                        <option data-code="+252" value="Somalia">Somalia</option>
                                                        <option data-code="+27" value="South Africa">South Africa</option>
                                                        <option data-code="+500" value="South Georgia">South Georgia</option>
                                                        <option data-code="+500" value="South Sandwich Islands">South Sandwich Islands</option>
                                                        <option data-code="+211" value="South Sudan">South Sudan</option>
                                                        <option data-code="+34" value="Spain">Spain</option>
                                                        <option data-code="+94" value="Sri Lanka">Sri Lanka</option>
                                                        <option data-code="+249" value="Sudan">Sudan</option>
                                                        <option data-code="+597" value="Suriname">Suriname</option>
                                                        <option data-code="+47" value="Svalbard">Svalbard</option>
                                                        <option data-code="+47" value="Jan Mayen">Jan Mayen</option>
                                                        <option data-code="+268" value="Swaziland">Swaziland</option>
                                                        <option data-code="+46" value="Sweden">Sweden</option>
                                                        <option data-code="+41" value="Switzerland">Switzerland</option>
                                                        <option data-code="+963" value="Syrian">Syrian/option>
                                                        <option data-code="+886" value="Taiwan">Taiwan</option>
                                                        <option data-code="+992" value="Tajikistan">Tajikistan</option>
                                                        <option data-code="+255" value="Tanzania">Tanzania</option>
                                                        <option data-code="+66" value="Thailand">Thailand</option>
                                                        <option data-code="+670" value="Timor-Leste">Timor-Leste</option>
                                                        <option data-code="+228" value="Togo">Togo</option>
                                                        <option data-code="+690" value="Tokelau">Tokelau</option>
                                                        <option data-code="+676" value="Tonga">Tonga</option>
                                                        <option data-code="+1868" value="Trinidad">Trinidad</option>
                                                        <option data-code="+1868" value="Tobago">Tobago</option>
                                                        <option data-code="+216" value="Tunisia">Tunisia</option>
                                                        <option data-code="+90" value="Turkey">Turkey</option>
                                                        <option data-code="+993" value="Turkmenistan">Turkmenistan</option>
                                                        <option data-code="+1649" value="Turks">Turks</option>
                                                        <option data-code="+1649" value="Caicos Islands">Caicos Islands</option>
                                                        <option data-code="+688" value="Tuvalu">Tuvalu</option>
                                                        <option data-code="+256" value="Uganda">Uganda</option>
                                                        <option data-code="+380" value="Ukraine">Ukraine</option>
                                                        <option data-code="+971" value="United Arab Emirates">United Arab Emirates</option>
                                                        <option data-code="+44" value="United Kingdom">United Kingdom</option>
                                                        <option data-code="+1" value="United States">United States</option>
                                                        <option data-code="+1" value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                                        <option data-code="+598" value="Uruguay">Uruguay</option>
                                                        <option data-code="+998" value="Uzbekistan">Uzbekistan</option>
                                                        <option data-code="+678" value="Vanuatu">Vanuatu</option>
                                                        <option data-code="+58" value="Venezuela">Venezuela</option>
                                                        <option data-code="+84" value="Viet Nam">Viet Nam</option>
                                                        <option data-code="+1284" value="Virgin Islands, British">Virgin Islands, British</option>
                                                        <option data-code="+1340" value="Virgin Islands, U.S">Virgin Islands, U.S</option>
                                                        <option data-code="+681" value="Wallis">Wallis</option>
                                                        <option data-code="+681" value="Futuna">Futuna</option>
                                                        <option data-code="+212" value="Western Sahara">Western Sahara</option>
                                                        <option data-code="+967" value="Yemen">Yemen</option>
                                                        <option data-code="+260" value="Zambia">Zambia</option>
                                                        <option data-code="+263" value="Zimbabwe">Zimbabwe</option>
                                                    </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="phone">Phone</label>
                                                <input type="text" class="form-control form-control-lg" name="phone" id="phone" placeholder=""
                                                    value="<?php echo $user_profile['phone'];?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" name="address" class="form-control form-control-lg" id="address" placeholder="" value="<?php echo $user_profile['address'];?>">
                                            </div>

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                        <label>About Me</label>
                                        <textarea class="form-control form-control-lg text-editor" name="about" id="about" placeholder=""><?php echo $user_profile['about'];?></textarea>
                                    </div>
                                            
                                        </div>                                        
                                    </div>
                                    <br><br>
                                    <div class="form-group action">
                                        <button type="button" class="btn edit-button mr-3" id="editBtn" onclick="editProfile();">Edit Profile</button>
                                        <button type="submit" class="btn update-button" name="updateBtn" id="updateBtn" style="cursor:not-allowed;" onsubmit="updateProfile();" disabled>Update Profile</button>
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
    <script src="<?php echo $url ;?>lib/profile.js"></script>

    <script>
        document.getElementById("country").value="<?php echo $user_profile['country']; ?>";

         var file = document.getElementById("file").src;
            if (file == null || file == "") {
                document.getElementById("uploadBtn").setAttribute('disabled', 'disabled');
                document.getElementById("uploadBtn").style.cursor = "not-allowed";
            }
    </script>

    <script>
        var loadFile = function(event) {
            var image = document.getElementById('image_output');
            image.src = URL.createObjectURL(event.target.files[0]);  

            document.getElementById("uploadBtn").removeAttribute('disabled', 'disabled');
            document.getElementById("uploadBtn").style.cursor = "pointer";      
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