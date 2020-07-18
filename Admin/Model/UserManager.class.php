<?php


class UserManager extends DBManager
{

    public function signup(User $user){
        $query       = $this->db->prepare( "INSERT INTO `user_master`( `user_fname`, `user_lname`, `username`, `password`, `email`, `level`, `status`) VALUES (:fname,:lname,:username,:password,:email,:lev,:status)  " );
        return $query->execute( array(
            "fname"=> $user->getFname(),
            "lname"=> $user->getLname(),
            "username"=> $user->getUsername(),
            "password"=> $user->getPassword(),
            "email"=> $user->getEmail(),
            "lev"=> $user->getLevel(),
            "status"=> $user->getStatus(),
        ) );
    }
        public function login($username){

                $query  = $this->db->query( "SELECT * FROM user_master WHERE Username = '$username' " );
                return $query->fetch( PDO::FETCH_ASSOC );
        }

    public function change_psw($psw,$id){
        $query=$this->db->prepare("UPDATE `user_master` SET `password`=:password WHERE `user_id`=:id;");
        return $query->execute( array(
            "password"   => $psw,
            "id"=>$id,
        ) );

    }



    public function updateProfile($arr,$id){
        $query       = $this->db->prepare( "UPDATE `user_master` SET `user_fname`=:fname,`user_lname`=:lname,`email`=:email WHERE `user_id`=:id " );
        return $query->execute( array(
            "fname"=> $arr['user_fname'],
            "lname"=> $arr['user_lname'],

            "email"=> $arr['email'],

            "id"=>$id,
        ) );
    }

    public function getUserData(){

            $query    = $this->db->query( "SELECT * FROM `user_master` " );
            return $query->fetchAll( PDO::FETCH_ASSOC );

    }

    public function blockUser($id,$val){
        $query=$this->db->prepare("UPDATE `user_master` SET `status`=:val WHERE `user_id`=:id;");
        return $query->execute( array(
            "id"=>$id,
            "val"=>$val,
        ) );
    }
}