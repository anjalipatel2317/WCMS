<?php


class TeamManager extends DBManager
{
        public  function addMember(Team $team){
            $query=$this->db->prepare("INSERT INTO `team`(`temp_id`, `member_name`, `member_img`, `desc`) VALUES (:temp_id,:member_name,:member_img,:desc)");
            return $query->execute( array(
                "temp_id"   => $team->getTempId(),
                "member_name"=>$team->getMemberName(),
                "member_img"=>$team->getMemberImg(),
                "desc"=>$team->getDesc(),
            ) );
        }


        public function getMember($id){

                $query    = $this->db->query( "SELECT * FROM `team` where `temp_id`=$id " );
                return $query->fetchAll( PDO::FETCH_ASSOC );
            }

            public function deleteMember($id){
                $query = $this->db->prepare( "DELETE FROM `team` WHERE `team_id`=?" );
                $query->execute( array( $id ) );
            }

}