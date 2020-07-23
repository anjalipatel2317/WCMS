<?php


class WelcomeTextManager extends DBManager
{


    public function updateWelcomeText($arr,$id){
        $query       = $this->db->prepare( "UPDATE `welcometext` SET `welcomeText`=:welcomeText WHERE `welcomeTextId`=:welcomeTextId " );
        //:kari pachi name che e j name niche hoy e lakhva na // ok and ena agad database vada
        return $query->execute( array(
            "welcomeText"=> $arr['welcome_text'],
            "welcomeTextId"=>$id,
        ) );
    }

    public function getwelcometext($id){
        $query    = $this->db->query( "SELECT * FROM `welcometext` where `temp_id`=$id" );
        return $query->fetchAll( PDO::FETCH_ASSOC );
    }


}