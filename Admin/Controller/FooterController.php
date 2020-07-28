<?php

include "../head.inc.php";
$footerMgr = new FooterManager();


if(isset($_POST['editFooter'])){

    if($footerMgr->updateFooter($_POST,1))
    {



        $_SESSION['msg'] = "Footer has been updated successfully...";
        header('location:../manageFooter.php');
    } else {
        $_SESSION['msg'] = "Fail to edit footer.... Please Try again";
        header('location:../manageFooter.php');
    }

}
