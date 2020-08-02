<?php


class ContactManager extends DBManager
{
    public function updateContact($arr,$id){
        $query       = $this->db->prepare( "UPDATE `contact` SET `address`=:address , `country`=:country , `email`=:email , `facebook`=:facebook , `twitter`=:twitter WHERE `contact_id`=:contact_id " );

        return $query->execute( array(
            "address"=> $arr['address'],
            "country"=> $arr['country'],
            "email"=> $arr['email'],
            "facebook"=> $arr['facebook'],
            "twitter"=> $arr['twitter'],
            "contact_id"=>$id,
        ) );
    }

    public function getContact($id){
        $query    = $this->db->query( "SELECT * FROM `contact` where `temp_id`=$id " );
        return $query->fetchAll( PDO::FETCH_ASSOC );
    }
}