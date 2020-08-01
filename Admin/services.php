

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
                                            <input type="text" class="form-control" name="services_name" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label>Service Image</label>
                                            <input type="file" class="form-control" name="services_img" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label>Short Description</label>
                                            <input type="text" class="form-control" name="services_desc" required>
                                        </div>
                                    </div>

                                </div>

                                <input type="submit" class="btn btn-info btn-fill pull-left" value="Add Services" name="addService">
                                <div class="clearfix"></div>
                                <span style="color: green;font-size:larger "><?php
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
                                <th colspan="2">Action</th>
                                </thead>
                                <tbody>
                                <?php foreach ($serviceslist as $services):
                                    $services=new Services($services);
                                    ?>
                                    <tr>
                                        <td><?=$services->getServicesName()?></td>
                                        <td><img src="<?=$services->getServicesImg()?>" height="100px" width="150px" /></td>
                                        <td><?=$services->getServicesDesc() ?></td>
                                        <td>

                                            <a  class="" data-toggle="modal"
                                               data-target="#exampleModal"
                                                data-name="<?=$services->getServicesName()?>"
                                               data-desc="<?=$services->getServicesDesc()?>"
                                               data-img="<?=$services->getServicesImg() ?>"
                                               data-id="<?=$services->getServicesId() ?>"
                                            >
                                                Edit
                                            </a>
                                        </td>
                                            <td>
                                            <?php  if($user->getLevel()==0): ?>
                                            <a href="Controller/ServicesController.php?block=<?=$services->getServicesId()?>">
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


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Service</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="Controller/ServicesController.php" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label>Service Name</label>
                                <input type="text" class="form-control" name="services_name" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">

                                <label>Service Image</label><br><br>
                                <img src="" name="servicesImg" id="servicesImg" style="width: 150px; height: 100px"><br><br>
                                <input type="hidden" class="form-control" name="services_id"  >
                                <input type="hidden" class="form-control" name="services_img2"  >
                                <input type="file" class="form-control" name="services_img" >
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label>Short Description</label>
                                <input type="text" class="form-control" name="services_desc"  required>
                            </div>
                        </div>

                    </div>




            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-info btn-fill pull-right" value="Edit Service" name="editService">

            </div>
            </form>
        </div>
    </div>
</div>




<!--end Edit Model-->
</body>

<!--   Core JS Files   -->
<script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>



<script>


        $(function () {

            $('#exampleModal').on('shown.bs.modal' ,function (e) {
                let element = $(e.relatedTarget);
                // console.log("hello");

                // console.log("ID: " + element.data("name"));

                $(this).find("[name='services_id']").val(element.data("id"));
                $(this).find("[name='services_name']").val(element.data("name"));
                $(this).find("[name='services_img2']").val(element.data("img"));
                $('#servicesImg').attr('src', element.data("img"));

                $(this).find("[name='services_desc']").val(element.data("desc"));


            });
        })



</script>
</html>
