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

    $cookieEmail = "";
    $cookiePassword = "";
    $msg = "";
    $formEmail = "";
    $formPass = "";

//========================================================================================================
    //Sign in code > Check if the credentials/details are in the database
    if (isset($_POST["signin_btn"])) {
        $formEmail = $conn->real_escape_string($_POST['email']);
        $formPass = $conn->real_escape_string($_POST['password']);
        $hashPass = md5($formPass);
        

        //Check the credentials match what is in the database
        $sql = "SELECT * FROM users WHERE email='$formEmail' AND passcode='$hashPass'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          //Save the credentials from the form to cookies
          $cookieEmail = $formEmail;
          $cookiePassword = $formPass;
          
          //Output the data from the database of the entered credentials
          while ($row = $result->fetch_assoc()) {
            //Check if the credentials is an individual or agent
              if ($row['account_type'] == "individual") {
                  $_SESSION['userAccount'] = "displayAccount";
                  $_SESSION['signBtn'] = "hideSign";
                  $_SESSION['logBtn'] = "displayLog";
                  $_SESSION['username'] = $row['firstname'];
                  $_SESSION['role'] = "user";
                  $_SESSION['user_id'] = $row['id'];
                  $_SESSION['user_picture'] = "img/profile/".$row['profile_picture'];
                  header('Location: ./');
              }else{
                  $_SESSION['userAccount'] = "displayAccount";
                  $_SESSION['signBtn'] = "hideSign";
                  $_SESSION['logBtn'] = "displayLog";
                  $_SESSION['username'] =  $row['firstname'];
                  $_SESSION['role'] = "agent";
                  $_SESSION['user_id'] = $row['id'];
                  $_SESSION['user_picture'] = "img/profile/".$row['profile_picture'];
                  header('Location: ./');
              }
          }

        }else{
          $msg = "No account found, try again";
        }

        $result->close();
        $conn->close();


      //Remember me validation
      if (isset($_POST['remember'])) {
          $cookie_value1 = $cookieEmail;
          $cookie_value2 = $cookiePassword;

          setcookie("email", $cookie_value1, time() + (86400 * 30), "/"); // 86400 * 30 = 30 day
          setcookie("password", $cookie_value2, time() + (86400 * 30), "/"); // 86400 * 30 = 30 day
        }
  }
//========================================================================================================


    //Cookies validation to fill email and password field automatically
      if(empty($_COOKIE['email']) && empty($_COOKIE['password'])) {
        $cookieEmail = $formEmail;
        $cookiePassword = $formPass;

      } else {
        $cookieEmail = $_COOKIE['email'];
        $cookiePassword = $_COOKIE['password'];
      }
?>



<!DOCTYPE html>
<html lang="en">

<?php
  $page_title = " | Sign in";
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
              <li class="breadcrumb-item active" aria-current="page">Login</li>
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
              <li role="presentation" class="nav-item"><a class="nav-link active" href="signin">Sign In</a></li>
              <li role="presentation" class="nav-item"><a class="nav-link" href="signup">Sign Up</a></li>
            </ul>
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="login">
                <form action="<?php echo $url;?>signin" method="POST">
                  <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" name="email" id="email" class="form-control form-control-lg" placeholder="Email" value="<?php echo $cookieEmail;?>">
                    <small class="msg" id="emailMsg"></small>
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control form-control-lg" placeholder="Password" value="<?php echo $cookiePassword;?>">
                    <small class="msg" id="passMsg" style="color: red;"><?php echo $msg;?></small>
                  </div>
                  <p class="text-lg-right"><a href="forgot-password.html">Forgot Password</a></p>
                  <div class="checkbox">
                    <input type="checkbox" id="remember_me" name="remember">
                    <label for="remember_me">Remember Me</label>
                  </div>
                  <button type="sumbit" for="signin" name="signin_btn" onclick="validation();" class="btn btn-primary">Sign In</button>
                </form>
              </div>
              <br>
              <p>Don't have an account? <a href="signup">Register</a></p>
            </div>
            <div> </div>
          </div>
          
        </div>
      </div>
    </div>
    <button class="btn default-button btn-circle" id="to-top"><i class="fa fa-angle-up"></i></button>
    
    <?php include('./templates/footer.php'); ?>
  </div>

  
  <script src="<?php echo $url;?>/lib/additional.js"></script>
</body>

</html>