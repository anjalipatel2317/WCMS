<?php


class UserManager extends DBManager
{



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