<?php
include "../head.inc.php";
$contactMgr=new ContactManager();

if(isset($_POST['addContact'])){

    $contact=new Contact($_POST,1);
    if($contactMgr->addContact($contact)){
        $_SESSION['error']="contact Added Successfully...";
        header('location:../contact.php');
    }
    else{
        $_SESSION['error']="Problem to add!!. Please try after some time. ";
        header('location:../contact.php');
    }

}