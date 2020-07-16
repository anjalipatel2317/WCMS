
<!doctype html>
<html lang="en">
<head>

	<?php include 'header_main.php';?>

	<title>WCMS </title>

</head>
<body>

<div class="wrapper">

	<?php include 'Sidebar.php';?>

	<div class="main-panel">

		<?php include 'header.php';?>

				<br />

            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Template</h4>
                                <p class="category">Here you can see all the Template and Add, Delete it</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
										<th></th>
										<th></th>
										<th></th>
										<th></th>
                                    </thead>
                                    <tbody>
										<tr>
										<td></td>
										</tr>
                                       
											
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>


                </div>
            </div>

						<div class="container-fluid">
								<div class="row">
										<div class="col-md-12">
												<div class="card">
														<div class="header">
																<h4 class="title">Add New Template</h4>
														</div>
														<div class="content">
																<form method="post" action="#">
																		<div class="row">
																				<div class="col-md-12">
																						<div class="form-group">
																								<label>Template Name</label>
																								<input type="text" class="form-control" name="template">
																						</div>
																				</div>
																		</div>

																		<input type="submit" class="btn btn-info btn-fill pull-right" name="submit">
																		<div class="clearfix"></div>
																</form>
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
