<?php
include "../head.inc.php";
$serviceMgr=new ServicesManager();
if(isset($_POST['addService'])){

    $FileName = $_FILES['services_img']['name'];
    $FileSize = $_FILES['services_img']['size'] / 1024 / 1024;
    $FileType = explode("/", $_FILES['services_img']['type']);
    $FileLocation = $_FILES['services_img']['tmp_name'];
    $path = "assets/img/" . $FileName;

    if ($_FILES['services_img']['error'] == 0) {
        if ($FileType[0] != "image") {
            array_push($error, "Please upload image only!");
        } elseif ($FileSize > 5) {
            array_push($error, "Your image is very big!");
        } else {
            move_uploaded_file($FileLocation, "../".$path);

        }
    }

    $service=new Services($_POST,1,$path);
    if($serviceMgr->addServices($service)){
        $_SESSION['error']="Service Added Successfully...";
        header('location:../services.php');
    }
    else{
        $_SESSION['error']="Problem to add!!. Please try after some time. ";
        header('location:../services.php');
    }


}


if(isset($_POST['editService']))
{
    if(! empty($_FILES['services_img']['name'])) {
        $FileName = $_FILES['services_img']['name'];
        $FileSize = $_FILES['services_img']['size'] / 1024 / 1024;
        $FileType = explode("/", $_FILES['services_img']['type']);
        $FileLocation = $_FILES['services_img']['tmp_name'];
        $path = "assets/img/" . $FileName;

        if ($_FILES['services_img']['error'] == 0) {
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
        $path = $_POST['services_img2'];

}



        if ($serviceMgr->editServices($_POST,$path)) {
            $_SESSION['error'] = "Service updated Successfully...";
            header('location:../services.php');
        } else {
            $_SESSION['error'] = "Problem to update!!. Please try after some time. ";
            header('location:../services.php');
        }


}





if(isset($_GET['block'])) {
    //echo "abc";
   $serviceMgr->deleteServices($_GET['block']);

   header('location:../services.php');
}
