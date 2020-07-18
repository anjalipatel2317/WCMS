
<!DOCTYPE html>
<html lang="en">
<head>

	<?php include '../header_main.php';?>

	<title>Moderator | WCMS</title>

</head>
<body>

	<div class="wrapper">

		<?php include 'Sidebar.php';?>

		<div class="main-panel">

			<?php include 'header.php';
            $user=unserialize($_SESSION['user_info']);
//            print_r($user);
			?>

            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="header">
                                    <h4 class="title">Update Profile </h4>
                                </div>
                                <div class="content">
                                    <form method="post" action="../Controller/UserController.php">
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label>First Name</label>
                                                    <input type="text" class="form-control" placeholder="First Name" name="user_fname" value="<?=$user->getFname(); ?>" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label>Last Name</label>
                                                    <input type="text" class="form-control" placeholder="Last Name" name="user_lname"  value="<?=$user->getLname(); ?>" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input type="email" class="form-control" placeholder="Email" name="email"  value="<?=$user->getEmail(); ?>"  >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input type="text" class="form-control" placeholder="Email" name="username"  value="<?=$user->getUsername(); ?>" disabled >
                                                </div>
                                            </div>
                                        </div>
                                        <input type="submit" class="btn btn-info btn-fill pull-right" name="updateProfile" value="Update Profile"></br></br>
                                    </form>
                                    <span style="color: red;font-size:larger "><?php
                                        if(isset($_SESSION['profile'])){
                                            echo $_SESSION['profile'];
                                        }
                                        $_SESSION['profile']='';?></span>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>







            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Change Password</h4>
                            </div>
                            <div class="content">
                                <form method="post" action="../Controller/UserController.php">
                                    <div class="row">                                       
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Old Password</label>
                                                <input type="password" class="form-control" placeholder="Old Password" name="oldpass" >
                                            </div>
                                        </div>
									</div>
									<div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>New Password</label>
                                                <input type="password" class="form-control" placeholder="New Password" name="newpass" >
                                            </div>
                                        </div>
									</div>
									<div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Confirm Password</label>
                                                <input type="password" class="form-control" placeholder="Confirm Password" name="compass" >
                                            </div>
                                        </div>
                                    </div>			
                                    <input type="submit" class="btn btn-info btn-fill pull-right" name="changePsw" value="Change Password"></br></br>
                                </form>
                                <span style="color: red;font-size:larger "><?php
                                    if(isset($_SESSION['error'])){
                                        echo $_SESSION['error'];
                                    }
                                    $_SESSION['error']='';?></span>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'footer.php';?>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="../assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="../assets/js/bootstrap-checkbox-radio-switch.js"></script>

	<!--  Charts Plugin -->
	<script src="../assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="../assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="../assets/js/light-bootstrap-dashboard.js"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="../assets/js/demo.js"></script>

</html>