<?php


class ServicesManager extends DBManager
{
        public  function addServices(Services $service){
            $query=$this->db->prepare("INSERT INTO `servises`( `temp_id`, `services_name`, `services_img`,`services_desc`) VALUES (:temp_id,:services_name,:services_img,:services_desc)");
            return $query->execute( array(
                "temp_id"   => $service->getTempId(),
                "services_name"=>$service->getServicesName(),
                "services_img"=>$service->getServicesImg(),
                "services_desc"=>$service->getServicesDesc(),

            ) );
        }


         public function getServices($id){
             $query    = $this->db->query( "SELECT * FROM `servises` WHERE `temp_id`=$id" );
             return $query->fetchAll( PDO::FETCH_ASSOC );
         }

        public function deleteServices($id){

            $query = $this->db->prepare( "DELETE FROM `servises` WHERE `services_id`=?" );
            $query->execute( array( $id ) );
        }

        public  function editServices($arr,$path){
            $query       = $this->db->prepare("UPDATE `servises` SET  `services_name`=:name,`services_img`=:img,`services_desc`=:desc2 WHERE `services_id`=:id"  );
            return $query->execute( array(
                "id"=> $arr['services_id'],
                "name"=> $arr['services_name'],

                "img"=> $path,

                "desc2"=>$arr['services_desc'],
            ) );

        }
}