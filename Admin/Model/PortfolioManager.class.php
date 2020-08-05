<?php


class PortfolioManager extends DBManager
{

    public function updatePortfolio($arr){
        $query       = $this->db->prepare( "UPDATE `portfolio` SET `temp_title`=:temp_title , `temp_text`=:temp_text  WHERE `portfolio_id`=:portfolio_id " );

        return $query->execute( array(
            "temp_title"=> $arr['title'],
            "temp_text"=> $arr['text'],
            "portfolio_id"=>$arr['portfolio_id'],
        ) );
    }

    public function getportfolio($id,$p_id){
        $query    = $this->db->query( "SELECT * FROM `portfolio` where `temp_id`=$id AND `portfolio_id`=$p_id" );
        return $query->fetch( PDO::FETCH_ASSOC );
    }

}