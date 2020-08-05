<?php


class Footer
{

    private $footer_id;
    private $temp_id;
    private $copyright;
    private $DesignCoding;

    /**
     * Footer constructor.
     * @param $footer_id
     * @param $temp_id
     * @param $copyright
     * @param $DesignCoding
     */
    public function __construct($arr)
    {
        $this->footer_id = isset($arr['footer_id']) ? $arr['footer_id'] : null;
        $this->temp_id = $arr['temp_id'];
        $this->copyright = $arr['copyright'];
        $this->DesignCoding = $arr['DesignCoding'];
    }

    /**
     * @return mixed
     */
    public function getFooterId()
    {
        return $this->footer_id;
    }

    /**
     * @param mixed $footer_id
     */
    public function setFooterId($footer_id)
    {
        $this->footer_id = $footer_id;
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
    public function getCopyright()
    {
        return $this->copyright;
    }

    /**
     * @param mixed $copyright
     */
    public function setCopyright($copyright)
    {
        $this->copyright = $copyright;
    }

    /**
     * @return mixed
     */
    public function getDesignCoding()
    {
        return $this->DesignCoding;
    }

    /**
     * @param mixed $DesignCoding
     */
    public function setDesignCoding($DesignCoding)
    {
        $this->DesignCoding = $DesignCoding;
    }


}