<?php
    require_once('./db/db_connection.php');

    session_start();
    if (empty($_SESSION['username'])) {
        $_SESSION['userAccount'] = "hideAccount";
        $_SESSION['signBtn'] = "displaySign";
        $_SESSION['logBtn'] = "hideLogout";
    
        unset($_SESSION['role']);
    }else{
        header('Location: ./');
    }
      

    //Sign up code > save the details from the form to the database
    if (isset($_POST['registerBtn'])) {
        $fname = $conn->real_escape_string($_POST['firstname']);
        $lname =$conn->real_escape_string($_POST['lastname']);
        $email = $conn->real_escape_string($_POST['email']);
        $country = $conn->real_escape_string($_POST['country']);
        $phoneno = $conn->real_escape_string($_POST['phone']);
        $password = $conn->real_escape_string(md5($_POST['password']));
        $account_type = $conn->real_escape_string($_POST['account_type']);
        $user_picture = "default-profile.jpg";

            $statement = $conn->prepare("INSERT INTO users(firstname, lastname, phoneno, email, profile_picture, passcode, account_type, country) VALUES (?,?,?,?,?,?,?,?)");
            $statement->bind_param("ssssssss",$fname, $lname, $phoneno, $email, $user_picture,  $password, $account_type, $country);
            if($statement->execute()){
            header("Location: ./success");
            }
            $statement->close();
            $conn->close();
    }
?>


<!DOCTYPE html>
<html lang="en">

<?php
  $page_title = " | Sign up";
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
                <div class="col col-md-12 col-lg-10 col-xl-8">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Account</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Sign up</li>
                        </ol>
                    </nav>
                    <div class="page-header">
                        <h1>Please sign in or Sign up</h1>
                    </div>
                </div>
            </div>
        </div>
        <div id="content">
            <div class="container">
                <div class="row justify-content-md-center align-items-center">
                    <div class="col col-md-6  col-lg-5 col-xl-4">
                        <ul class="nav nav-tabs tab-lg" role="tablist">
                            <li role="presentation" class="nav-item"><a class="nav-link" href="signin">Sign In</a>
                            </li>
                            <li role="presentation" class="nav-item"><a class="nav-link active" href="signup">Sign
                                    Up</a></li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="login">

                                <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
                                    <h3 class="subheadline">Basic Information</h3>
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input type="text" id="fname" name="firstname" class="form-control form-control-lg" placeholder="" value="">
                                        <small class="msg" id="fnameMsg"></small>
                                    </div>
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input type="text" id="lname" name="lastname" class="form-control form-control-lg" placeholder="" value="">
                                        <small class="msg" id="lnameMsg"></small>
                                    </div>
                                    <div class="form-group">
                                        <label>Your Email</label>
                                        <input type="email" id="email" name="email" class="form-control form-control-lg" value="">
                                        <small class="msg" id="emailMsg"></small>
                                    </div>                                      
                                    <div class="form-group">
                                        <label for="country">Country</label>
                                        <select name="country" class="form-control form-control-lg" id="countryList">
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
                                        <small class="msg" id="countryMsg"></small>
                                        <!--<input type="text" class="form-control form-control-lg" placeholder="" id="country">-->
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">Phone</label>
                                        <input type="text" class="form-control form-control-lg" name="phone" id="phoneno" placeholder="" value="">
                                         <small class="msg" id="phonenoMsg"></small>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" id="password" name="password" class="form-control form-control-lg" placeholder="">
                                        <small class="msg" id="passMsg"></small>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Confirm Password</label>
                                        <input type="password" id="confirmPassword" class="form-control form-control-lg" placeholder="">
                                        <small class="msg" id="conpassMsg"></small>
                                    </div>
                                    <div class="form-group">
                                        <label>Account type</label>
                                        <select name="account_type" class="form-control form-control-lg" id="accountType">
                                            <option value="select">Select account type</option>
                                            <option value="individual">Individual [searching for property]</option>
                                            <option value="agent">Agent</option>
                                        </select>
                                        <small class="msg" id="account_typeMsg"></small>
                                    </div>
                                    <div class="checkbox">
                                        <input type="checkbox" id="terms">
                                        <label for="terms">By registering I accept our <a href="#">Terms of Use and
                                                Privacy.</a></label>
                                        <small class="msg" id="termsMsg"></small>
                                    </div><br>
                                    <button type="submit" name="registerBtn" onclick="validationSignup()"
                                        class="btn btn-primary">Register</button>
                                </form>
                                <br>
                                <p>Already Registered User? <a href="signin">Login</a></p>
                            </div>
                        </div>
                        <div> </div>
                    </div>


                </div>
            </div>
        </div>
        <button class="btn btn-primary btn-circle" id="to-top"><i class="fa fa-angle-up"></i></button>

        <?php include('./templates/footer.php'); ?>
    </div>

    <script src="<?php echo $url ;?>lib/additional.js"></script>
    <script>
        $(document).ready(function () {
        $("[name='country']").on("change", function () {
            $("[name='phone']").val($(this).find("option:selected").data("code"));
        });
        });
    </script>
</body>

</html>