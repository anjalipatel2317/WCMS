<?php

include "../head.inc.php";
$welcomeTextMgr = new WelcomeTextManager();


if(isset($_POST['editwelcometext'])){

    if($welcomeTextMgr->updateWelcomeText($_POST,1))
    {
//        $welcomeTextMgr->setWelcomeText($_POST['welcome_text']);


        $_SESSION['msg'] = "Welcome Text has been updated successfully...";
        header('location:../welcometxt.php');
    } else {
        $_SESSION['msg'] = "Fail to edit welcome text.... Please Try again";
        header('location:../welcometxt.php');
    }

}