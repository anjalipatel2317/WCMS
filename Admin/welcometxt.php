

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

        $welcometextMgr = new WelcomeTextManager();
        $welcometext = $welcometextMgr->getwelcometext(1);

        ?>

        <br />

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Welcome Text Manage</h4>

                        </div>
                        <div class="content">
                            <form method="post" action="Controller/WelcomeTextController.php" enctype="multipart/form-data">
                               <!-- <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label>Slider Image</label>
                                            <input type="file" class="form-control" name="slider_img">
                                        </div>
                                    </div>
                                </div>-->

                                <?php foreach ($welcometext as $text):
                                $text=new WelcomeText($text);

                                ?>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label>WelCome Text</label>
                                            <input type="text" class="form-control" name="welcome_text" value="<?= $text->getWelcomeText();?>">
                                        </div>
                                    </div>

                                </div>

                                <?php endforeach; ?>

                                <input type="submit" class="btn btn-info btn-fill pull-left" value="Edit" name="editwelcometext">
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

