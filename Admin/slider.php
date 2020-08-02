

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
                                <th colspan="2">Action</th>
                                </thead>
                                <tbody>
                            <?php foreach ($sliderlist as $slider):
                                    $slider=new Home($slider);
                            ?>
                                    <tr>
                                        <td><img src="<?=$slider->getSlider() ?>" height="100px" width="150px" /></td>
                                        <td><?=$slider->getSliderText() ?></td>


                                        <td>
                                            <a  class="" data-toggle="modal"
                                                data-target="#exampleModal"
                                                data-text="<?=$slider->getSliderText()?>"
                                                data-img="<?=$slider->getSlider() ?>"
                                                data-id="<?=$slider->getHomeId() ?>"
                                            >
                                                Edit
                                            </a>
                                        </td>
                                        <td>
                                            <?php  if($user->getLevel()==0): ?>

                                            <a href="Controller/HomeController.php?block=<?=$slider->getHomeId()?>">
                                                Delete
                                            </a> <?php endif; ?>
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
                <h5 class="modal-title" id="exampleModalLabel">Edit Slider</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="Controller/HomeController.php" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label>Slider text</label>
                                <input type="text" class="form-control" name="slider_text" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">

                                <label>Service Image</label><br><br>
                                <img src="" name="sliderImg" id="sliderImg" style="width: 150px; height: 100px"><br><br>
                                <input type="hidden" class="form-control" name="slider_id"  >
                                <input type="hidden" class="form-control" name="slider_img2"  >
                                <input type="file" class="form-control" name="slider_img" >
                            </div>
                        </div>
                    </div>






            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-info btn-fill pull-right" value="Edit Slider" name="editSlider">

            </div>
            </form>
        </div>
    </div>
</div>



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

            $(this).find("[name='slider_id']").val(element.data("id"));
            $(this).find("[name='slider_text']").val(element.data("text"));
            $(this).find("[name='slider_img2']").val(element.data("img"));
            $('#sliderImg').attr('src', element.data("img"));


        });
    });

</script>


</html>
