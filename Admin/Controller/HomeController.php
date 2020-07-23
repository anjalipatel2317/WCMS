<?php
include "../head.inc.php";
$homeMgr=new HomeManager();

if(isset($_POST['addSlider'])){


    $FileName = $_FILES['slider_img']['name'];
    $FileSize = $_FILES['slider_img']['size'] / 1024 / 1024;
    $FileType = explode("/", $_FILES['slider_img']['type']);
    $FileLocation = $_FILES['slider_img']['tmp_name'];
    $path = "assets/img/" . $FileName;

    if ($_FILES['slider_img']['error'] == 0) {
        if ($FileType[0] != "image") {
            array_push($error, "Please upload image only!");
        } elseif ($FileSize > 5) {
            array_push($error, "Your image is very big!");
        } else {
            move_uploaded_file($FileLocation, "../".$path);
//            return $path;
        }
    }


    $home=new Home($_POST,1,$path);
    print_r($home);
   if( $homeMgr->insertSlider($home)){
      header('location:../slider.php');
   }
   else{
       echo "fail";
   }

}

if(isset($_GET['block'])){
    $homeMgr->deleteSliderImage($_GET['block']);
        header('location:../slider.php');


}