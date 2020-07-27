<?php


class ContactManager extends DBManager
{
    public  function addContact(Contact $contact){
        $query=$this->db->prepare("INSERT INTO `contact`( `temp_id`, `address`, `country`, `email`, `facebook`, `twitter`) VALUES (:temp_id,:address,:country,:email,:facebook,:twitter)");
        return $query->execute( array(
            "temp_id"   => $contact->getTempId(),
            "address"=>$contact->getAddress(),
            "country"=>$contact->getCountry(),
            "email"=>$contact->getEmail(),
            "facebook"=>$contact->getFacebook(),
            "twitter"=>$contact->getTwitter(),
        ) );
    }

    public function getContact($id){
        $query    = $this->db->query( "SELECT * FROM `contact` where `temp_id`=$id " );
        return $query->fetchAll( PDO::FETCH_ASSOC );
    }
}