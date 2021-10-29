<?php 
     $host = $_SERVER['SERVER_NAME'];

     $script = $_SERVER['SCRIPT_NAME'];
     $ss = explode('/', $script);
     $s = $ss[1];
      $http =  $_SERVER['REQUEST_SCHEME'];
     $url = "$http://$host/$s/";

     $_SESSION['url'] = $url;
?>


<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ACCORENT <?php echo $page_title; ?></title>
  <link rel="shortcut icon" href="<?php echo $url ;?>img/accorent.png" type="image/x-icon">

  <!-- Bootstrap -->
  <link href="https://fonts.googleapis.com/css?family=Libre+Franklin:100,200,300,400,500,700" rel="stylesheet">
  <link href="<?php echo $url;?>lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo $url;?>lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo $url ;?>lib/animate.css" rel="stylesheet">
  <link href="<?php echo $url ;?>lib/selectric/selectric.css" rel="stylesheet">
  <link href="<?php echo $url ;?>lib/swiper/css/swiper.min.css" rel="stylesheet">
  <link href="<?php echo $url ;?>lib/aos/aos.css" rel="stylesheet">
  <link href="<?php echo $url ;?>lib/Magnific-Popup/magnific-popup.css" rel="stylesheet">
  <link href="<?php echo $url ;?>css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo $url ;?>css/colors/addtional.css">
  <link rel="stylesheet" href="<?php echo $url ;?>lib/tel lib/build/css/intlTelInput.css">

  <!-- jQuery -->
  <script src="<?php echo $url ;?>lib/jquery-3.2.1.min.js"></script>
  <script src="<?php echo $url ;?>lib/popper.min.js"></script>

  <!-- Additional plugin-->
  <script src="<?php echo $url ;?>lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?php echo $url ;?>lib/selectric/jquery.selectric.js"></script>
  <script src="<?php echo $url ;?>lib/swiper/js/swiper.min.js"></script>
  <script src="<?php echo $url ;?>lib/aos/aos.js"></script>
  <script src="<?php echo $url ;?>lib/Magnific-Popup/jquery.magnific-popup.min.js"></script>
  <script src="<?php echo $url ;?>lib/sticky-sidebar/ResizeSensor.min.js"></script>
  <script src="<?php echo $url ;?>lib/sticky-sidebar/theia-sticky-sidebar.min.js"></script>
  <script src="<?php echo $url ;?>lib/lib.js"></script>
</head>