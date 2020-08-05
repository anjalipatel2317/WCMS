

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

        $portfolioMgr1 = new PortfolioManager();
        $temp1 = $portfolioMgr1->getportfolio(1,1);

        $portfolioMgr2 = new PortfolioManager();
        $temp2 = $portfolioMgr2->getportfolio(1,2);

        $portfolioMgr3 = new PortfolioManager();
        $temp3 = $portfolioMgr3->getportfolio(1,3);



        ?>

        <br />

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Template 1</h4>

                        </div>
                        <div class="content">
                            <form method="post" action="Controller/PortfolioController.php" enctype="multipart/form-data">


                              <?php
                                    $temp1=new Portfolio($temp1);

                                    ?>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Title</label>
                                                <input type="hidden" class="form-control" name="portfolio_id" value="<?= $temp1->getPortfolioId()?>">
                                                <input type="text" class="form-control" name="title" value="<?= $temp1->getTempTitle()?>" required>
                                            </div>
                                        </div>

                                    </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label>Text</label>
                                            <input type="text" class="form-control" name="text" value="<?= $temp1->getTempText() ?>" required>
                                        </div>
                                    </div>

                                </div>



                                <input type="submit" class="btn btn-info btn-fill pull-left" value="Edit" name="edittemp">
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
                            <h4 class="title">Template 2</h4>

                        </div>
                        <div class="content">
                            <form method="post" action="Controller/PortfolioController.php" enctype="multipart/form-data">



                              <?php  $temp2=new Portfolio($temp2);

                                    ?>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input type="hidden" class="form-control" name="portfolio_id" value="<?= $temp2->getPortfolioId()?>">
                                            <input type="text" class="form-control" name="title" value="<?=  $temp2->getTempTitle()?>" required>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label>Text</label>
                                            <input type="text" class="form-control" name="text" value="<?= $temp2->getTempText() ?>" required>
                                        </div>
                                    </div>

                                </div>



                                <input type="submit" class="btn btn-info btn-fill pull-left" value="Edit" name="edittemp">
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
                            <h4 class="title">Template 3</h4>

                        </div>
                        <div class="content">
                            <form method="post" action="Controller/PortfolioController.php" enctype="multipart/form-data">


                                <?php
                                $temp3=new Portfolio($temp3);

                                    ?>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input type="hidden" class="form-control" name="portfolio_id" value="<?= $temp3->getPortfolioId()?>">
                                            <input type="text" class="form-control" name="title" value="<?= $temp3->getTempTitle()?>" required>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label>Text</label>
                                            <input type="text" class="form-control" name="text" value="<?= $temp3->getTempText()?>" required>
                                        </div>
                                    </div>

                                </div>



                                <input type="submit" class="btn btn-info btn-fill pull-left" value="Edit" name="edittemp">
                                <div class="clearfix"></div>
                            </form>




                        </div>

                    </div>
                </div>



            </div>

            <span style="color: green;font-size:larger "><?php
                if(isset($_SESSION['msg'])){
                    echo $_SESSION['msg'];
                }
                $_SESSION['msg']='';?></span>

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


