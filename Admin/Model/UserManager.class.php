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
}