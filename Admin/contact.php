

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

        $contactMgr=new ContactManager();
        $contactList = $contactMgr->getContact(1);

        ?>

        <br />

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Welcome Contact Manage</h4>

                        </div>
                        <div class="content">
                            <form method="post" action="Controller/ContactController.php" enctype="multipart/form-data">
                                <!-- <div class="row">
                                     <div class="col-md-8">
                                         <div class="form-group">
                                             <label>Slider Image</label>
                                             <input type="file" class="form-control" name="slider_img">
                                         </div>
                                     </div>
                                 </div>-->


                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="textarea" class="form-control" name="address" >
                                            </div>
                                        </div>
                                    </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label>Country</label>
                                            <input type="text" class="form-control" name="country" >
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" class="form-control" name="email" >
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label>Facebook</label>
                                            <input type="text" class="form-control" name="facebook" >
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label>Twitter</label>
                                            <input type="text" class="form-control" name="twitter" >
                                        </div>
                                    </div>
                                </div>





                                <input type="submit" class="btn btn-info btn-fill pull-left" value="Edit" name="addContact">
                                <div class="clearfix"></div>
                            </form>

                            <span style="color: green;font-size:larger "><?php
                                if(isset($_SESSION['error'])){
                                    echo $_SESSION['error'];
                                }
                                $_SESSION['error']='';?></span>
                        </div>

                    </div>
                </div>


            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">All Contact Details</h4>
                                <p class="category">Here you can See all Contact information  </p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                    <th>Address</th>
                                    <th>Country</th>
                                    <th> Email</th>
                                    <th>Facebook Link</th>
                                    <th>Twitter Link</th>
                                    <th>Action</th>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($contactList as $item):
                                            $item=new Contact($item);
                                        ?>
                                        <tr>
                                            <td><?=$item->getAddress() ?></td>
                                            <td><?=$item->getCountry() ?></td>
                                            <td><?=$item->getEmail() ?></td>
                                            <td><?=$item->getTwitter() ?></td>
                                            <td><?=$item->getFacebook() ?></td>

                                            <td><?php  if($user->getLevel()==0): ?>
                                                <a href="Controller/ContactController.php?block=">
                                                    Delete
                                                </a><?php endif; ?>
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

