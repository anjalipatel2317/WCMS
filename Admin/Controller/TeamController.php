<?php
include "../head.inc.php";
$teamMgr=new TeamManager();
if(isset($_POST['addMember'])){


    $FileName = $_FILES['member_img']['name'];
    $FileSize = $_FILES['member_img']['size'] / 1024 / 1024;
    $FileType = explode("/", $_FILES['member_img']['type']);
    $FileLocation = $_FILES['member_img']['tmp_name'];
    $path = "assets/img/" . $FileName;

    if ($_FILES['member_img']['error'] == 0) {
        if ($FileType[0] != "image") {
            array_push($error, "Please upload image only!");
        } elseif ($FileSize > 5) {
            array_push($error, "Your image is very big!");
        } else {
            move_uploaded_file($FileLocation, "../".$path);
//            return $path;
        }
    }



    $team=new Team($_POST,1,$path);
    if( $teamMgr->addMember($team)){
        $_SESSION['error']="Member Added Successfully...";
        header('location:../team.php');
    }
    else{
        $_SESSION['error']="Problem to add!!. Please try after some time. ";
        header('location:../team.php');
    }

}

if(isset($_GET['block'])){
    $teamMgr->deleteMember($_GET['block']);
    header('location:../team.php');
}






if(isset($_POST['editMember']))
{
    if(! empty($_FILES['member_img']['name'])) {
        $FileName = $_FILES['member_img']['name'];
        $FileSize = $_FILES['member_img']['size'] / 1024 / 1024;
        $FileType = explode("/", $_FILES['member_img']['type']);
        $FileLocation = $_FILES['member_img']['tmp_name'];
        $path = "assets/img/" . $FileName;

        if ($_FILES['member_img']['error'] == 0) {
            if ($FileType[0] != "image") {
                array_push($error, "Please upload image only!");
            } elseif ($FileSize > 5) {
                array_push($error, "Your image is very big!");
            } else {
                move_uploaded_file($FileLocation, "../" . $path);

            }
        }
    }
    else {
        $path = $_POST['member_img2'];

    }



    $teamMgr->editMember($_POST,$path);

        header('location:../team.php');



}
