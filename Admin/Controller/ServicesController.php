<?php
include "../head.inc.php";
$serviceMgr=new ServicesManager();
if(isset($_POST['addService'])){

    $service=new Services($_POST,1);
    if($serviceMgr->addServices($service)){
        $_SESSION['error']="Service Added Successfully...";
        header('location:../services.php');
    }
    else{
        $_SESSION['error']="Problem to add!!. Please try after some time. ";
        header('location:../services.php');
    }

}
