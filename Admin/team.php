

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

        $teamMgr=new TeamManager();
        $teamlist=$teamMgr->getMember(1);

        ?>

        <br />

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Team Manage</h4>

                        </div>
                        <div class="content">
                            <form method="post" action="Controller/TeamController.php" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label>Member Name</label>
                                            <input type="text" class="form-control" name="member_name">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label>Member Image</label>
                                            <input type="file" class="form-control" name="member_img">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label>Short Description</label>
                                            <input type="text" class="form-control" name="desc">
                                        </div>
                                    </div>

                                </div>

                                <input type="submit" class="btn btn-info btn-fill pull-left" value="Add Member" name="addMember">
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
                            <h4 class="title">Team Member</h4>
                            <p class="category">Here you can See all team member information  </p>
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
                                <?php foreach ($teamlist as $team):
                                    $team=new Team($team);
                                    ?>
                                    <tr>
                                        <td><?=$team->getMemberName()?></td>
                                        <td><img src="<?=$team->getMemberImg() ?>" height="100px" width="150px" /></td>
                                        <td><?=$team->getDesc() ?></td>
                                        <td>

                                            <a  class="" data-toggle="modal"
                                                data-target="#exampleModal"
                                                data-name="<?=$team->getMemberName()?>"
                                                data-desc="<?=$team->getDesc()?>"
                                                data-img="<?=$team->getMemberImg() ?>"
                                                data-id="<?=$team->getTeamId() ?>"
                                            >
                                                Edit
                                            </a>
                                        </td>
                                        <td><?php  if($user->getLevel()==0): ?>
                                            <a href="Controller/TeamController.php?block=<?=$team->getTeamId()?>">
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
                <h5 class="modal-title" id="exampleModalLabel">Edit Member Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="Controller/TeamController.php" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label>Member Name</label>
                                <input type="text" class="form-control" name="member_name" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">

                                <label>Service Image</label><br><br>
                                <img src="" name="memberImg" id="memberImg" style="width: 150px; height: 100px"><br><br>
                                <input type="hidden" class="form-control" name="member_id"  >
                                <input type="hidden" class="form-control" name="member_img2"  >
                                <input type="file" class="form-control" name="member_img" >
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label>Short Description</label>
                                <input type="text" class="form-control" name="desc"  required>
                            </div>
                        </div>

                    </div>




            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-info btn-fill pull-right" value="Edit Member" name="editMember">

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

            $(this).find("[name='member_id']").val(element.data("id"));
            $(this).find("[name='member_name']").val(element.data("name"));
            $(this).find("[name='member_img2']").val(element.data("img"));
            $('#memberImg').attr('src', element.data("img"));

            $(this).find("[name='desc']").val(element.data("desc"));


        });
    })



</script>

</html>
