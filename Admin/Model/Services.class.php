<?php


class Services
{
    private $services_id;
    private $temp_id;
    private $services_name;
    private $services_img;
    private $services_desc;

    /**
     * Services constructor.
     * @param $services_id
     * @param $temp_id
     * @param $services_name
     * @param $services_desc
     */

    function __construct()
    {
        $a = func_get_args();
        $i = func_num_args();
        if (method_exists($this,$f='__construct'.$i)) {
            call_user_func_array(array($this,$f),$a);
        }
    }
    public function __construct1($arr)
    {
        $this->services_id = $arr['services_id'] ?? null;
        $this->temp_id = $arr['temp_id'];
        $this->services_name = $arr['services_name'];
        $this->services_img = $arr['services_img'];
        $this->services_desc = $arr['services_desc'];
    }

    public function __construct3($arr,$id,$path)
    {
        $this->services_id = $arr['services_id'] ?? null;
        $this->temp_id = $id;
        $this->services_name = $arr['services_name'];
        $this->services_img = $path;
        $this->services_desc = $arr['services_desc'];
    }

    /**
     * @return mixed
     */
    public function getServicesId()
    {
        return $this->services_id;
    }

    /**
     * @param mixed $services_id
     */
    public function setServicesId($services_id)
    {
        $this->services_id = $services_id;
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
    public function getServicesName()
    {
        return $this->services_name;
    }

    /**
     * @param mixed $services_name
     */
    public function setServicesName($services_name)
    {
        $this->services_name = $services_name;
    }

    /**
     * @return mixed
     */
    public function getServicesImg()
    {
        return $this->services_img;
    }

    /**
     * @param mixed $services_img
     */
    public function setServicesImg($services_img)
    {
        $this->services_img = $services_img;
    }

    /**
     * @return mixed
     */
    public function getServicesDesc()
    {
        return $this->services_desc;
    }

    /**
     * @param mixed $services_desc
     */
    public function setServicesDesc($services_desc)
    {
        $this->services_desc = $services_desc;
    }



}