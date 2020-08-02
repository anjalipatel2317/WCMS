<?php
include "../head.inc.php";
$contactMgr=new ContactManager();

if(isset($_POST['EditContact'])){

    if($contactMgr->updateContact($_POST,1))
    {
//        $welcomeTextMgr->setWelcomeText($_POST['welcome_text']);


        $_SESSION['msg'] = "Contact info has been updated successfully...";
        header('location:../contact.php');
    } else {
        $_SESSION['msg'] = "Fail to edit contact info.... Please Try again";
        header('location:../contact.php');
    }

}