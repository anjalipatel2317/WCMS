<?php


class ServicesManager extends DBManager
{
        public  function addServices(Services $service){
            $query=$this->db->prepare("INSERT INTO `servises`( `temp_id`, `services_name`, `services_desc`) VALUES (:temp_id,:services_name,:services_desc)");
            return $query->execute( array(
                "temp_id"   => $service->getTempId(),
                "services_name"=>$service->getServicesName(),
                "services_desc"=>$service->getServicesDesc(),

            ) );
        }


         public function getServices($id){
             $query    = $this->db->query( "SELECT * FROM `servises` WHERE `temp_id`=$id" );
             return $query->fetchAll( PDO::FETCH_ASSOC );
         }
}