<?php


class Portfolio
{
    private $portfolio_id;
    private $temp_id;
    private $temp_title;
    private $temp_text;

    /**
     * Portfolio constructor.
     * @param $portfolio_id
     * @param $temp_id
     * @param $temp_title
     * @param $temp_text
     */
    public function __construct($arr)
    {
        $this->portfolio_id = isset($arr['portfolio_id']) ? $arr['portfolio_id'] : null;
        $this->temp_id = $arr['temp_id'];
        $this->temp_title = $arr['temp_title'];
        $this->temp_text = $arr['temp_text'];
    }

    /**
     * @return mixed
     */
    public function getPortfolioId()
    {
        return $this->portfolio_id;
    }

    /**
     * @param mixed $portfolio_id
     */
    public function setPortfolioId($portfolio_id)
    {
        $this->portfolio_id = $portfolio_id;
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
    public function getTempTitle()
    {
        return $this->temp_title;
    }

    /**
     * @param mixed $temp_title
     */
    public function setTempTitle($temp_title)
    {
        $this->temp_title = $temp_title;
    }

    /**
     * @return mixed
     */
    public function getTempText()
    {
        return $this->temp_text;
    }

    /**
     * @param mixed $temp_text
     */
    public function setTempText($temp_text)
    {
        $this->temp_text = $temp_text;
    }


}