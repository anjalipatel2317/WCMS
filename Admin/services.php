

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

        $servicesMgr=new ServicesManager();
        $serviceslist=$servicesMgr->getServices(1);

        ?>

        <br />

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Services Manage</h4>

                        </div>
                        <div class="content">
                            <form method="post" action="Controller/ServicesController.php" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label>Service Name</label>
                                            <input type="text" class="form-control" name="services_name">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label>Short Description</label>
                                            <input type="text" class="form-control" name="services_desc">
                                        </div>
                                    </div>

                                </div>

                                <input type="submit" class="btn btn-info btn-fill pull-left" value="Add Services" name="addService">
                                <div class="clearfix"></div>
                                <span style="color: red;font-size:larger "><?php
                                    if(isset($_SESSION['error'])){
                                        echo $_SESSION['error'];
                                    }
                                    $_SESSION['error']='';?></span>
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
                            <h4 class="title">All Services</h4>
                            <p class="category">Here you can See all Services information  </p>
                        </div>
                        <div class="content table-responsive table-full-width">
                            <table class="table table-hover table-striped">
                                <thead>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Short Description</th>
                                <th>Action</th>
                                </thead>
                                <tbody>
                                <?php foreach ($serviceslist as $services):
                                    $services=new Services($services);
                                    ?>
                                    <tr>
                                        <td><?=$services->getServicesName()?></td>
<!--                                        $services->getMemberImg()-->
                                        <!--                                        <td><img src="--><?//=?><!--" height="100px" width="150px" /></td>-->
                                        <td><?=$services->getServicesDesc() ?></td>
                                        <td><a href="Controller/TeamController.php?block=<?=$services->getTempId()?>">
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
