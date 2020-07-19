<?php


class Home
{
        private $home_id;
        private $temp_id;
        private $slider;
        private $slider_text;


    /**
     * Home constructor.
     * @param $home_id
     * @param $temp_id
     * @param $slider

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
        $this->home_id = $arr['home_id'] ?? null;
        $this->temp_id = $arr['temp_id'];
        $this->slider = $arr['slider'];
        $this->slider_text = $arr['slider_text'];
    }

    public function __construct3($arr,$temp_id,$path)
    {
        $this->home_id = $arr['home_id'] ?? null;
        $this->temp_id = $temp_id;
        $this->slider = $path;
        $this->slider_text = $arr['slider_text'];
    }

    /**
     * @return mixed
     */
    public function getSliderText()
    {
        return $this->slider_text;
    }

    /**
     * @param mixed $slider_text
     */
    public function setSliderText($slider_text)
    {
        $this->slider_text = $slider_text;
    }

    /**
     * @return mixed
     */
    public function getHomeId()
    {
        return $this->home_id;
    }

    /**
     * @param mixed $home_id
     */
    public function setHomeId($home_id)
    {
        $this->home_id = $home_id;
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
    public function getSlider()
    {
        return $this->slider;
    }

    /**
     * @param mixed $slider
     */
    public function setSlider($slider)
    {
        $this->slider = $slider;
    }







}