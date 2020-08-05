<?php


class About
{
    private $about_id;
    private $temp_id;
    private $about_img;
    private $about_title;
    private $about_text;

    /**
     * About constructor.
     * @param $about_id
     * @param $temp_id
     * @param $about_img
     * @param $about_title
     * @param $about_text
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
        $this->about_id = isset($arr['about_id']) ? $arr['about_id'] : null;
        $this->temp_id = $arr['temp_id'];
        $this->about_img = $arr['about_img'];
        $this->about_title = $arr['about_title'];
        $this->about_text = $arr['about_text'];
    }

    public function __construct2($arr,$temp)
    {
        $this->about_id = isset($arr['about_id']) ? $arr['about_id'] : null;
        $this->temp_id = $temp;
        $this->about_img = $arr['about_img'];
        $this->about_title = $arr['about_title'];
        $this->about_text = $arr['about_text'];
    }
    public function __construct3($arr,$temp,$path)
    {
        $this->about_id = isset($arr['about_id']) ? $arr['about_id'] : null;
        $this->temp_id = $temp;
        $this->about_img = $path;
        $this->about_title = $arr['about_title'];
        $this->about_text = $arr['about_text'];
    }

    /**
     * @return mixed
     */
    public function getAboutId()
    {
        return $this->about_id;
    }

    /**
     * @param mixed $about_id
     */
    public function setAboutId($about_id)
    {
        $this->about_id = $about_id;
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
    public function getAboutImg()
    {
        return $this->about_img;
    }

    /**
     * @param mixed $about_img
     */
    public function setAboutImg($about_img)
    {
        $this->about_img = $about_img;
    }

    /**
     * @return mixed
     */
    public function getAboutTitle()
    {
        return $this->about_title;
    }

    /**
     * @param mixed $about_title
     */
    public function setAboutTitle($about_title)
    {
        $this->about_title = $about_title;
    }

    /**
     * @return mixed
     */
    public function getAboutText()
    {
        return $this->about_text;
    }

    /**
     * @param mixed $about_text
     */
    public function setAboutText($about_text)
    {
        $this->about_text = $about_text;
    }


}