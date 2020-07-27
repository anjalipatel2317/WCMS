

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

        $aboutMgr = new AboutManager();
        $about = $aboutMgr->getAbout(1);

        ?>

        <br />

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">About Manage</h4>

                        </div>
                        <div class="content">
                            <?php foreach ($about as $about):
                            $about=new About($about);

                            ?>
                            <form method="post" action="Controller/AboutController.php" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label>About Image</label><br>
                                            <img src="<?= $about->getAboutImg() ?>" style="height: 100px;width: 140px"><br><br>
                                            <input type="file" class="form-control" name="about_img">
                                            <input type="hidden" class="form-control" name="about_img" value="<?= $about->getAboutImg() ?>">
                                            <input type="hidden" class="form-control" name="about_id" value="<?= $about->getAboutId() ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label>About Title</label>
                                            <input type="text" class="form-control" name="about_title" value="<?= $about->getAboutTitle()?>" required>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label>About Text</label>
                                            <textarea class="form-control" rows="5" name="about_text" required><?= $about->getAboutText()?></textarea>
                                        </div>
                                    </div>

                                </div>

                                <input type="submit" class="btn btn-info btn-fill pull-left" value="Add About" name="addAbout">
                                <div class="clearfix"></div>
                            </form>
                            <?php endforeach;?>
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

