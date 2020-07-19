<?php


class HomeManager extends DBManager
{
    public  function insertSlider(Home $home){
        $query=$this->db->prepare("INSERT INTO `home`( `temp_id`, `slider`,`slider_text` ) VALUES (:temp_id,:slider_img,:slider_text)");
        return $query->execute( array(
            "temp_id"   => $home->getTempId(),
            "slider_img"=>$home->getSlider(),
            "slider_text"=>$home->getSliderText(),
        ) );
    }


    public function getSlider($id){
        $query    = $this->db->query( "SELECT * FROM `home` where `temp_id`=$id " );
        return $query->fetchAll( PDO::FETCH_ASSOC );
    }

    public function deleteSliderImage($id){
        $query = $this->db->prepare( "DELETE FROM `home` WHERE `home_id`=?" );
        $query->execute( array( $id ) );
    }
}