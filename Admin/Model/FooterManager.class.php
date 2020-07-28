<?php


class FooterManager extends DBManager
{
    public function updateFooter($arr,$id){
        $query       = $this->db->prepare( "UPDATE `footer` SET `copyright`=:copyright , `DesignCoding`=:DesignCoding WHERE `footer_id`=:footer_id " );

        return $query->execute( array(
            "copyright"=> $arr['copyright'],
            "DesignCoding"=> $arr['DesignCoding'],
            "footer_id"=>$id,
        ) );
    }

    public function getFooter($id){
        $query    = $this->db->query( "SELECT * FROM `footer` where `temp_id`=$id" );
        return $query->fetchAll( PDO::FETCH_ASSOC );
    }

}