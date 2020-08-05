
<!doctype html>
<html lang="en">
<head>

	<?php include 'header_main.php';

    $user=unserialize($_SESSION['user_info']);

    if($user->getLevel()!=0){
        header('location:index.php');
    }
	?>

	<title>Admin | WCMS</title>

</head>
<body>

<div class="wrapper">

	<?php include 'Sidebar.php';?>

	<div class="main-panel">

		<?php include 'header.php';
		$userMgr=new UserManager();
        $userlist=$userMgr->getUserData();

		?>

		
				

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">User</h4>
                                <p class="category">Here you can See all User and their details </p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Email</th>
                                        <th>Username</th>
                                        <th>Level</th>
                                        <th>Action</th>
                                    </thead>
                                    <tbody>
									        <?php foreach ($userlist as $user) :
                                            $singleUser=new User($user);?>
                                        <tr>
											<td><?=$singleUser->getFname() ?></td>
                                            <td><?=$singleUser->getLname() ?></td>
                                            <td><?=$singleUser->getEmail() ?></td>
                                            <td><?=$singleUser->getUsername() ?></td>
                                            <td><?=($singleUser->getLevel()==0)?'Admin':'Moderator' ?></td>
                                            <td><?php if($singleUser->getStatus()==0){?>
                                                <a href="Controller/UserController.php?block=<?=$singleUser->getId()?>&value=1"> Block</a>
                                                <?php }
                                                else{ ?>
                                                <a href="Controller/UserController.php?block=<?=$singleUser->getId()?>&value=0">
                                                UnBlock
                                                </a>
                                               <?php  }?>
                                            </td>
										</tr>
										
										
										<?php endforeach; ?>
                                    </tbody>
                                </table>

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
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/js/bootstrap-checkbox-radio-switch.js"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>


</html>
