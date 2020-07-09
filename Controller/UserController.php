<?php
include "../head.inc.php";
$userMgr=new UserManager();
//$action     = $_REQUEST['submit'];

if(isset($_POST['signup'])){
    print_r($_POST);
        $user=new User($_POST,1,0);

        if($userMgr->signup($user)){
            header('location:../homePage/readme.txt');
        }
        else{

        }

}

if(isset($_POST['signin'])){
    $u=$userMgr->login($_POST['your_username']);

        if(empty($u)){
            $_SESSION['error'] = "Wrong password/Username...Please Try Again.";
            header('location:../homePage/login.php');
        }else{

            $user = new User($u);
//                        var_dump($user);
            if ($_POST['your_pass'] == '') {
                $_SESSION['error'] = "Password is required";
                header('location:../homePage/login.php');
            } else {
                if ($_POST['your_pass'] == $user->getPassword()) {
                    $_SESSION['userinfo'] = serialize($user);
                   // $_SESSION['login_flag'] = true;
                    $_SESSION['error']="";

                    header('location:../homePage/userDashbord.php');
                }else {
                    $_SESSION['error'] = "Wrong password/Username...Please Try Again.";
                    header('location:../homePage/login.php');

                }

            }

        }

}

