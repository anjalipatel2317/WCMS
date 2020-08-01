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


            public function editMember($arr,$path){
                $query=$this->db->prepare("UPDATE `team` SET `member_name`=:mName,`member_img`=:img,`desc`=:desc2 WHERE `team_id`=:id");
                return $query->execute( array(
                    "id"   =>$arr['member_id'] ,
                    "mName"=>$arr['member_name'],
                    "img"=>$path,
                    "desc2"=>$arr['desc'],
                ) );
            }
}