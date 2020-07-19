

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
        <?php

        $homeMgr=new HomeManager();
        $sliderlist=$homeMgr->getSlider(1);

        ?>

				<br />

            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Slider Manage</h4>

                            </div>
                            <div class="content">
                                <form method="post" action="Controller/HomeController.php" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Slider Image</label>
                                                <input type="file" class="form-control" name="slider_img">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Slider Text</label>
                                                <input type="text" class="form-control" name="slider_text">
                                            </div>
                                        </div>

                                    </div>

                                    <input type="submit" class="btn btn-info btn-fill pull-left" value="Add Slider" name="addSlider">
                                    <div class="clearfix"></div>
                                </form>
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
                            <h4 class="title">Slider Image</h4>
                            <p class="category">Here you can See all Slider image and their text </p>
                        </div>
                        <div class="content table-responsive table-full-width">
                            <table class="table table-hover table-striped">
                                <thead>
                                <th>Image</th>
                                <th>Slider Text</th>
                                <th>Action</th>
                                </thead>
                                <tbody>
                            <?php foreach ($sliderlist as $slider):
                                    $slider=new Home($slider);
                            ?>
                                    <tr>
                                        <td><img src="<?=$slider->getSlider() ?>" height="100px" width="150px" /></td>
                                        <td><?=$slider->getSliderText() ?></td>
                                        <td><a href="Controller/HomeController.php?block=<?=$slider->getHomeId()?>">
                                                Delete
                                            </a></td>

                                    </tr>
                                <?php endforeach; ?>


                                </tbody>
                            </table>

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
