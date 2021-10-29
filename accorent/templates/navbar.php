<nav class="navbar navbar-expand-lg bg-white" id="menu">

<div class="container-fluid">
  <a class="navbar-brand mr-1" href="<?php echo $url ;?>"><img src="<?php echo $url ;?>img/logo.png" alt="accorent logo"></a>

  <div class="nav-link m-0 mr-3 p-0 tag">
    <a href="<?php echo $url ;?>" class="tag text-bold tag-line text-dark m-0">ACCORENT</a>
    <a href="<?php echo $url ;?>" class="m-0 tag tag-line text-dark" style="font-size: 15px; text-transform: lowercase;">Makes life easier...</a>
  </div>

  <button class="navbar-toggler navbar-light collapsed" type="button" data-toggle="collapse"
    data-target="#menu-content" aria-controls="menu-content" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>



  <div class="collapse navbar-collapse" id="menu-content">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item <?php echo $home_active; ?>">
        <a class="nav-link <?php echo $home_activeBtn; ?>" style="color: <?php echo  $home_style; ?>;" href="<?php echo $url ;?>" role="button" aria-haspopup="true" aria-expanded="false">
          Home
        </a>

      </li>
      <li class="nav-item <?php echo $properties_active; ?>">
        <a class="nav-link <?php echo $properties_activeBtn; ?>" style="color: <?php echo  $properties_style; ?>;" href="<?php echo $url ;?>properties" role="button" aria-haspopup="true" aria-expanded="false">
          Properties
        </a>
      </li>

      <li class="nav-item <?php echo $agents_active; ?>">
        <a class="nav-link <?php echo $agents_activeBtn; ?>" style="color: <?php echo  $agents_style; ?>;" href="<?php echo $url ;?>agents" role="button" aria-haspopup="true" aria-expanded="false">
          Agents
        </a>
      </li>

      <li class="nav-item <?php echo $about_active; ?>">
        <a class="nav-link <?php echo $about_activeBtn; ?>" style="color: <?php echo  $about_style; ?>;" href="<?php echo $url ;?>about" role="button" aria-haspopup="true" aria-expanded="false">
          About Us
        </a>
      </li>

      <li class="nav-item <?php echo $contact_active; ?>">
        <a class="nav-link <?php echo $contact_activeBtn; ?>" style="color: <?php echo  $contact_style; ?>;" href="<?php echo $url ;?>contact" role="button" aria-haspopup="true" aria-expanded="false">
          Contact Us
        </a>
      </li>
    </ul>

    <ul class="navbar-nav ml-auto">

    <li class="nav-item dropdown user-account <?php echo $_SESSION['userAccount']; ?>">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
          aria-expanded="false">
          <span class="user-image" style="background-image:url('<?php echo $url.$_SESSION['user_picture'];?>'); max-width:50px; height:40px;"></span> Hi, <?php echo $_SESSION['username'];?> </a>
        <div class="dropdown-menu">
          <a href="<?php echo $url ;?><?php echo $_SESSION['role'];?>/profile" class="dropdown-item">My Profile</a>
          <a href="<?php echo $url ;?><?php echo $_SESSION['role'];?>/change-password" class="dropdown-item">Change Password</a>
          <a href="<?php echo $url ;?><?php echo $_SESSION['role'];?>/account" class="dropdown-item">Account</a>

        </div>
      </li>
      <li class="nav-item <?php echo $_SESSION['signBtn']; ?>"><a class="nav-button" href="<?php echo $url ;?>signin"><span><i class="fa fa-user" aria-hidden="true"></i> Sign in or Sign up</span></a></li>
      <li class="nav-item <?php echo $_SESSION['logBtn']; ?>"><a class="nav-button" href="<?php echo $url ;?>source/logout"><span><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</span></a></li>
    </ul>
  


  </div>
</div>
</nav>
<!--END OF NAV BAR ==============================================================-->
