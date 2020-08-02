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
            if($user->getStatus()==0) {
                $_SESSION['user_info'] = serialize($user);
                $_SESSION['login_flag'] = true;

                echo $user->getLevel();

                    header('location:../index.php');



            }
            else{
                $_SESSION['error']='This Username is blocked... Please Contact Admin@cms.com.';
                header('location:../login.php');
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


        header('location:../change_pass.php');



}

//----------------- Update Profile ----------------
if(isset($_POST['updateProfile'])){
    $user=unserialize($_SESSION['user_info']);


    if($userMgr->updateProfile($_POST,$user->getId()))
    {
        $user->setFname($_POST['user_fname']);
        $user->setlname($_POST['user_lname']);
        $user->setEmail($_POST['email']);
        print_r($user);
        $_SESSION['user_info']=serialize($user);

        $_SESSION['profile']='Profile Successfully Updated...';
    } else {
        $_SESSION['profile'] = "Problem to Update Profile... Please try after some time.....";
    }


        header('location:../change_pass.php');

}

//------------------- Block User -----------------
if(isset($_GET['block'])){
        if($userMgr->blockUser($_GET['block'],$_GET['value'])){
            header('location:../user.php');
        }
        else{
            $_SESSION['error']='Please try after some time...';
            header('location:../user.php');
        }
}
