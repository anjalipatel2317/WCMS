<?php


class AboutManager extends DBManager
{
    public function updateAbout(About $about){
        $query       = $this->db->prepare( "UPDATE `about` SET `about_img`=:about_img , `about_title`=:about_title , `about_text`=:about_text WHERE `about_id`=:about_id " );
        return $query->execute( array(
            "about_img"=> $about->getAboutImg(),
            "about_title"=> $about->getAboutTitle(),
            "about_text"=> $about->getAboutText(),
            "about_id"=>$about->getAboutId(),
        ) );
    }

    public function getAbout($id){
        $query    = $this->db->query( "SELECT * FROM `about` where `temp_id`=$id" );
        return $query->fetchAll( PDO::FETCH_ASSOC );
    }

}