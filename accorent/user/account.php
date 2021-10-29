<?php
  require_once('../db/db_connection.php');
  session_start();

  $password = "";

//Check if the username in the session is empty
    if (empty($_SESSION['username'])) {
        header('Location: ../');
    }


    if ($_SESSION['role'] != "user" && !empty($_SESSION['username']) ) {
      $_SESSION['error_message'] = "404 Not Found";
      header("Location: $urlerror? error=no page found"); 
    }else{
      //stay on page
    }

//===============================================================================



    

//================ Check if the delete button is clicked and call the deleteAccount function =====================
  if (isset($_POST['deleteBtn'])) {
    $password = $conn->real_escape_string($_POST['passwordValue']);

      if (empty($password)) {
        echo "<script> alert('Password cannot be empty');</script>";
      }else{
        checkAccount();
      }
  }


//=========== Check if the password is correct =========================
function checkAccount() {
  //Check the credentials match what is in the database
    global $password,$conn;
    $hashPass = md5($password);
    echo "CheckAccount: $password";
    $sql = "SELECT * FROM users WHERE passcode='$hashPass'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        deleteAccount();
    }else{
      echo "<script> alert('Incorrect password');</script>";
    }
}


//=========== Delete Account ========================
function deleteAccount() {
  //Delete the user account from the database
  global $password,$conn;
        $id = $_SESSION['user_id'];

        $sql2 = "DELETE FROM users WHERE id=$id";

        if ($conn->query($sql2) == true) {
            $_SESSION['userAccount'] = "hideAccount";
            $_SESSION['signBtn'] = "displaySign";
            $_SESSION['logBtn'] = "hideLogout";
            
            unset($_SESSION['role']);
            unset($_SESSION['username']);
            unset($_SESSION['user_id']);
            unset($_SESSION['user_picture']);
    
            echo "<script>location.replace('../');</script>";

        }else{
          echo "<script> alert('Error deleting account');</script>";
        }
}


?>

<!DOCTYPE html>
<html lang="en">

<?php
  $page_title = " | Account";
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
                <div id="sidebar" class="sidebar-left">
                  <div class="sidebar_inner">
                    <div class="list-group no-border list-unstyled">
                          <span class="list-group-item heading">Manage Account</span>
                          <a href="<?php echo $url ;?>user/profile" class="list-group-item"><i class="fa fa-fw fa-pencil"></i> My Profile</a> 
                            <a href="<?php echo $url ;?>user/change-password" class="list-group-item"><i class="fa fa-fw fa-lock"></i> Change Password</a>
                            <a href="<?php echo $url ;?>user/account" class="list-group-item active"><i class="fa fa-fw fa-cog"></i> Account</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-7 col-lg-8 col-xl-8">
                <div class="page-header bordered">
                  <h1>Account Settings</h1>
                </div>
                  <h3 class="subheadline">Delete Account</h3>
                  <p>If you are no longer interested in using your account click the button below to delete your
                    account.</p>
                  <hr>
                  <div class="form-group action">
                    <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-danger">Delete Account</button>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <button class="btn btn-primary btn-circle" id="to-top"><i class="fa fa-angle-up"></i></button>
    


    <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header ">
          <h4 class="modal-title">Delete Account</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body pb-1">
          <p>Deleting your account will remove all of your information from our database. This cannot be undone.</p>
          <small>To confirm this, enter your password below</small>
        </div>
      
        <!-- Modal footer -->
          <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
            <div class="container">
              <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="password" name="passwordValue" class="form-control form-control-sm" />      
                    </div>            
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="submit" name="deleteBtn" class="btn btn-sm btn-danger" value="Delete Account" />              
                    </div>
                  </div>
              </div>
            </div>
          </form>
        
      </div>
    </div>
  </div>

    <?php include('../templates/footer.php'); ?>
  </div>
</body>

</html>