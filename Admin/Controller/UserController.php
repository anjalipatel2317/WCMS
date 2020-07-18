<?php
include "../head.inc.php";
$userMgr=new UserManager();


//---------------------- Registration -----------------
if(isset($_POST['insert'])){
    $user=new User($_POST,1,0);
    if($userMgr->signup($user))
    {
        header("location:../login.php");
        $_SESSION['error']='Registration Successfully done.... Please login.';
    } else {
        $_SESSION['error'] = "Problem to registration... Please try after some time.....";
    }
}


//-----------------------Login-----------------------

if(isset($_POST['login'])){
//    login($_POST);

    $u_data=$userMgr->login($_POST['uname']);
    print_r($u_data);
    if(empty($u_data)){
        $_SESSION['error']='Username And Password is wrong....';
        header('location:../login.php');
    }
    else{
        $user=new User($u_data);
        if($_POST['password']==$user->getPassword()){
            $_SESSION['user_info']=serialize($user);
            $_SESSION['login_flag']=true;

            echo $user->getLevel();
                if($user->getLevel()==0){
                    header('location:../index.php');
                    echo "in if";
                }
                else{
                    header('location:../moderator/index.php');
                }
        }
        else{
            $_SESSION['error']='Username And Password is wrong....';
            header('location:../login.php');
        }
    }
}






//-----------Logout--------------------
if(isset($_GET['logout'])){
    unset($_SESSION['login_flag']);
    unset($_SESSION['user_info']);
    header('location:../login.php');
}


//--------------Change Password------------

if(isset($_POST['changePsw'])){

    $user=unserialize($_SESSION['user_info']);
    echo $_POST['oldpass']."      ".$user->getPassword();
    if( $_POST['newpass']!=$_POST['compass']){
        $_SESSION['error']='New Password and Confirm Password are not matched.....';

    }
    elseif ( $_POST['oldpass']!=$user->getPassword()){
        $_SESSION['error']='Old Password are not matched.....';
    }
    else{
        if($userMgr->change_psw($_POST['newpass'],$user->getId())){
            $_SESSION['error']="Password Updated....";
            $user->setPassword($_POST['newpass']);
            $_SESSION['user_info']=serialize($user);

        }
        else{
            $_SESSION['error']="Problem to update password.. Please try again latter...";
        }
    }

    if($user->getLevel()==0){
        header('location:../change_pass.php');
    }
    else{
        header('location:../Moderator/change_pass.php');
    }
}