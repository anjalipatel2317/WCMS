<?php

include "../head.inc.php";
include "User.class.php";
class UserManager extends DBManager
{

    function signup(User $user){
        print_r($user);
        echo "dddd";
        $query       = $this->db->prepare( "INSERT INTO `user_master`(`user_fname`, `user_lname`, `username`, `password`, `email`, `level`, `status`)
                    VALUES (:fname,:lname,:username,:password,:email,:lev,:status)" );
        return $query->execute( array(
            "fname" => $user->getUserFname(),
            "lname"  => $user->getUserLname(),
            "username"       => $user->getUsername(),
            "password"    => $user->getPassword(),
            "email"  => $user->getEmail(),
            "lev"   => $user->getLevel(),
            "status"  =>$user->getStatus(),
        ) );
    }

    public function login($username){
        $query  = $this->db->query( "SELECT * FROM user_master WHERE username = '$username' " );
        $singleuser = $query->fetch( PDO::FETCH_ASSOC );
        return $singleuser;
    }
}