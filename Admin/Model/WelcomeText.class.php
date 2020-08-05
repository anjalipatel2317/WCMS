<?php


class WelcomeText
{

    private $welcomeTextId;
    private $temp_id;
    private $welcomeText;

    /**
     * WelcomeText constructor.
     * @param $welcomeTextId
     * @param $temp_id
     * @param $welcomeText
     */
    public function __construct($arr)
    {
        $this->welcomeTextId = isset($arr['welcomeTextId']) ? $arr['welcomeTextId'] : null;
        $this->temp_id = $arr['temp_id'];
        $this->welcomeText = $arr['welcomeText'];
    }

    /**
     * @return mixed
     */
    public function getWelcomeTextId()
    {
        return $this->welcomeTextId;
    }

    /**
     * @param mixed $welcomeTextId
     */
    public function setWelcomeTextId($welcomeTextId)
    {
        $this->welcomeTextId = $welcomeTextId;
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
    public function getWelcomeText()
    {
        return $this->welcomeText;
    }

    /**
     * @param mixed $welcomeText
     */
    public function setWelcomeText($welcomeText)
    {
        $this->welcomeText = $welcomeText;
    }




}