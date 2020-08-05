<?php include "../head.inc.php"; ?>
<!doctype html>
<lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="DCS_GNU" content="IE=edge,chrome=1" />

	<title>Sidebar | Admin | WCMS</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap book core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>
<body>
  <div class="sidebar" data-color="blue" data-image="assets/img/sidebar-5.jpg">



      <?php $user=unserialize($_SESSION['user_info']);

      ?>

    <div class="sidebar-wrapper">
          <div class="logo">
              <a href="index.php" class="simple-text">
                  <b>WCMS - <?php if($user->getLevel()==0) { ?> ADMIN <?php }else{?> MODERATOR <?php }?></b>
              </a>
          </div>

          <ul class="nav">
              <li>
                  <a href="index.php">
                      <i class="pe-7s-graph"></i>
                      <p>Dashboard</p>
                  </a>
              </li>
              <?php if($user->getLevel()==0) : ?>
              <li>
                  <a href="user.php">
                      <i class="pe-7s-users"></i>
                      <p>User Management</p>
                  </a>
              </li>
              <?php endif; ?>

              <li>
                  <a href="slider.php">
                      <i class="pe-7s-notebook"></i>
                      <p>Add Slider</p>
                  </a>
              </li>
              <li>
                  <a href="welcometxt.php">
                      <i class="pe-7s-notebook"></i>
                      <p> Manage WelCome Text</p>
                  </a>
              </li>
              <li>
                  <a href="team.php">
                      <i class="pe-7s-notebook"></i>
                      <p>Add Team Member</p>
                  </a>
              </li>
              <li>
                  <a href="about.php">
                      <i class="pe-7s-notebook"></i>
                      <p>Manage About</p>
                  </a>
              </li>

              <li>
                  <a href="portfolio.php">
                      <i class="pe-7s-notebook"></i>
                      <p>Manage Portfolio</p>
                  </a>
              </li>

              <li>
                  <a href="services.php">
                      <i class="pe-7s-notebook"></i>
                      <p>Add Services</p>
                  </a>
              </li>

              <li>
                  <a href="contact.php">
                      <i class="pe-7s-notebook"></i>
                      <p>Manage Contact Us</p>
                  </a>
              </li>

              <li>
                  <a href="manageFooter.php">
                      <i class="pe-7s-notebook"></i>
                      <p>Manage Footer</p>
                  </a>
              </li>

             
					
              
          </ul>
    </div>
  </div>
</body>
</html>
