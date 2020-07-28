

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

        $footerMgr = new FooterManager();
        $footer = $footerMgr->getFooter(1);

        ?>

        <br />

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Footer Manage</h4>

                        </div>
                        <div class="content">
                            <form method="post" action="Controller/FooterController.php" enctype="multipart/form-data">


                                <?php foreach ($footer as $footer):
                                $footer=new Footer($footer);

                                    ?>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Copyright</label>
                                                <input type="text" class="form-control" name="copyright" value="<?= $footer->getCopyright() ?>">
                                            </div>

                                            <div class="form-group">
                                                <label>Design and Coding by</label>
                                                <input type="text" class="form-control" name="DesignCoding" value="<?= $footer->getDesignCoding()?>">
                                            </div>
                                        </div>

                                    </div>

                                <?php endforeach; ?>

                                <input type="submit" class="btn btn-info btn-fill pull-left" value="Edit" name="editFooter">
                                <div class="clearfix"></div>
                            </form>

                            <span style="color: green;font-size:larger "><?php
                                if(isset($_SESSION['msg'])){
                                    echo $_SESSION['msg'];
                                }
                                $_SESSION['msg']='';?></span>
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

