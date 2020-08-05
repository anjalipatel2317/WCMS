<?php


class Contact
{
        private $contact_id;
        private $temp_id;
        private $address;
        private $country;
        private $email;
        private $facebook;
        private $twitter;

    /**
     * Contact constructor.
     * @param $contact_id
     * @param $temp_id
     * @param $address
     * @param $country
     * @param $email
     * @param $facebook
     * @param $twitter
     */


    public function __construct($arr)
    {
        $this->contact_id = isset($arr['contact_id']) ? $arr['contact_id'] : null;
        $this->temp_id = $arr['temp_id'];
        $this->address = $arr['address'];
        $this->country = $arr['country'];
        $this->email = $arr['email'];
        $this->facebook = isset($arr['facebook']) ? $arr['facebook'] : null;
        $this->twitter = isset($arr['twitter']) ? $arr['twitter'] : null;
        /*$this->facebook = $arr['facebook'] ?? null;
        $this->twitter = $arr['twitter'] ?? null;*/
    }



    /**
     * @return mixed
     */
    public function getContactId()
    {
        return $this->contact_id;
    }

    /**
     * @param mixed $contact_id
     */
    public function setContactId($contact_id)
    {
        $this->contact_id = $contact_id;
    }

    /**
     * @return mixed
     */
    public function getTempId()
    {
        return $this->temp_id;
    }

    /**
     * @param mixed $temp_id
     */
    public function setTempId($temp_id)
    {
        $this->temp_id = $temp_id;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param mixed $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getFacebook()
    {
        return $this->facebook;
    }

    /**
     * @param mixed $facebook
     */
    public function setFacebook($facebook)
    {
        $this->facebook = $facebook;
    }

    /**
     * @return mixed
     */
    public function getTwitter()
    {
        return $this->twitter;
    }

    /**
     * @param mixed $twitter
     */
    public function setTwitter($twitter)
    {
        $this->twitter = $twitter;
    }





}