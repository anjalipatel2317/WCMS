<?php

include "../head.inc.php";
$aboutMgr = new AboutManager();

function getFile(){
    $FileName = $_FILES['about_img']['name'];
    $FileSize = $_FILES['about_img']['size'] / 1024 / 1024;
    $FileType = explode("/", $_FILES['about_img']['type']);
    $FileLocation = $_FILES['about_img']['tmp_name'];
    $path = "assets/img/" . $FileName;

    if ($_FILES['about_img']['error'] == 0) {
        if ($FileType[0] != "image") {
            array_push($error, "Please upload image only!");
        } elseif ($FileSize > 5) {
            array_push($error, "Your image is very big!");
        } else {
            move_uploaded_file($FileLocation, "../".$path);
            return $path;
        }
    }
}

if(isset($_POST['addAbout'])){


    if (!empty($_FILES['about_img']['name'])) {
        $about = new About($_POST,1 ,getFile());
    }
    else{


        //  var_dump($_POST);
        $about = new About($_POST,1);
    }

    if($aboutMgr->updateAbout($about))
    {
//        $welcomeTextMgr->setWelcomeText($_POST['welcome_text']);


        $_SESSION['msg'] = "About has been updated successfully...";
        header('location:../about.php');
    } else {
        $_SESSION['msg'] = "Fail to edit about... Please Try again";
        header('location:../about.php');
    }

}
