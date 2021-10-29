<?php
  require_once('../db/db_connection.php');
  session_start();
  $id = $_SESSION['user_id'];

    if (empty($_SESSION['username'])) {
        header('Location: ../');
      }

      if ($_SESSION['role'] != "user" && !empty($_SESSION['username']) ) {
        $_SESSION['error_message'] = "404 Not Found";
        header("Location: error?msg=nopagefound"); 
    }else{
      //stay on page
    }

//======================================================================================#
    $error1 = $error2 = $error3 = "";    
    $borderError1 = $borderError2 = $borderError3 = "";
    $currentPass = $newPass = $confirm_newPass = "";
    $currentP = $confirmP = "";
    $passwordFromDB = "";


  if (isset($_POST['updateBtn'])) {
      $currentPass = $conn->real_escape_string($_POST['currentPassword']);
      $newPass = $conn->real_escape_string($_POST['newPassword']);
      $confirm_newPass = $conn->real_escape_string($_POST['confirm_newPassword']);

      fetchPassword();

//Current password validation //
      if (empty($currentPass)) {
        $error1 = "Kindly enter your current password";
        $borderError1 = "border border-danger";
      }else{
        $error1 = "";
        $borderError1 = "";        
      }

//new password validation //
      if (empty($newPass)) {
        $error2 = "Kindly enter your new password";
        $borderError2 = "border border-danger";
      }elseif(strlen($newPass) < 8){
        $error2 = "Password must not be less that 8 characters";
        $borderError2 = "border border-danger";
      }elseif(!checkFirstLetter($newPass)){
        $error2 = "First character must be in Uppercase";
        $borderError2 = "border border-danger";
      }elseif(!checkNumber($newPass)){
        $error2 = "Password must contain at least one digit";
        $borderError2 = "border border-danger";
      }else{
        $error2 = "";
        $borderError2 = "";
      }


      $currentP = md5($currentPass);  //Change the current password to hash
      $newP = md5($newPass);  //Change the confirm password to hash

      if($newP == $passwordFromDB){
        $error2 = "Password already exist";
        $borderError2 = "border border-danger";
      }else{
        $error2 = "";
        $borderError2 = "";
      }

//Confirm new password validation //
      if (empty($confirm_newPass)) {
        $error3 = "Kindly enter your confirm password";
        $borderError3 = "border border-danger";
      }elseif ($newPass != $confirm_newPass) {
        $error3 = "Password does not match";
        $borderError3 = "border border-danger";
      }else{
        $error3 = "";
        $borderError3 = "";
      }



//Check if all the fieids are not empty//
      if (!empty($currentPass) && !empty($newPass) && !empty($confirm_newPass)) {
        checkPassword();
    }
}
//================================================================================
    function fetchPassword() {
      global $id, $conn, $passwordFromDB;
      $sql = "SELECT * FROM users WHERE id=$id";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()){
           $passwordFromDB =  $row['passcode'];
          }        
        }
    }

    function checkPassword(){
      global $conn, $confirm_newPass, $currentPass, $error1, $borderError1;

      $currentP = md5($currentPass);  //Change the current password to hash
      $confirmP = md5($confirm_newPass);  //Change the confirm password to hash

      $sql = "SELECT * FROM users WHERE passcode='$currentP'";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
        updatePassword();
      }else{
        $error1 = "Your current password is incorrect";
        $borderError1 = "border border-danger";
      }
    }



    function updatePassword() {
      global $id, $conn, $confirm_newPass, $currentPass, $error1, $borderError1;

      $statement = $conn->prepare("UPDATE users SET passcode=? WHERE id=?");
      $updatedPass = md5($confirm_newPass);
      
      $statement->bind_param('si', $updatedPass, $id);
      if ($statement->execute()) {
        $_SESSION['success_message'] = "Update successfully!";
        $_SESSION['success_action']  = "change-password";
        header('Location: success?msg=updatesuccess');
      }else{
        $_SESSION['error_message'] = "Unable to update your password";
        header('Location: error?msg=updatefailed');
      }
    }




//===========================================================================================


//Other validations //
function checkFirstLetter($value) {
      $firstChar = substr($value, 0, 1);
      $isUpper = false;

    if (ctype_upper($firstChar)) {
      $isUpper = true;
      return $isUpper;
    }
}


//Check if the password contains numbers //
function checkNumber($value) {
  $isThereNumber = false;

  for ($i = 0; $i < strlen($value); $i++) {
    if (ctype_digit($value[$i]) ) {
      $isThereNumber = true;  
      return $isThereNumber;             
      break;
      
      }
    }
}


?>

<!DOCTYPE html>
<html lang="en">
  <?php
  $page_title = " | Change password";
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
                      <a href="<?php echo $url ;?>user/change-password" class="list-group-item active"><i class="fa fa-fw fa-lock"></i>
                        Change Password</a>
                      <a href="<?php echo $url ;?>user/account" class="list-group-item"><i class="fa fa-fw fa-cog"></i> Account</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-7 col-lg-8 col-xl-8">
                <div class="page-header bordered">
                  <h1>Change Password</h1>
                </div>
                <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
                    <div class="form-group">
                      <label>Your current password</label>
                      <input type="password" class="form-control form-control-lg <?php echo $borderError1;?>" name="currentPassword" value="<?php echo $currentPass;?>" placeholder="Your current password"
                        autofocus>
                        <small class="text-danger"><?php echo $error1;?></small>
                    </div>
                    <div class="form-group">
                      <label>Your new password</label>
                      <input type="password" class="form-control form-control-lg <?php echo $borderError2;?>" name="newPassword" value="<?php echo $newPass;?>"  placeholder="Your new password">
                      <small class="text-danger"><?php echo $error2;?></small>
                    </div>
                    <div class="form-group">
                      <label>Repeat new password</label>
                      <input type="password" class="form-control form-control-lg <?php echo $borderError3;?>" name="confirm_newPassword" value="<?php echo $confirm_newPass;?>"  placeholder="Repeat new password">
                      <small class="text-danger"><?php echo $error3;?></small>
                    </div>
                    <hr>
                    <div class="form-group action">
                      <button type="submit" name="updateBtn" class="btn btn-primary">Update Password</button>
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