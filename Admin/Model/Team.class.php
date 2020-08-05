<?php


class Team
{
    private $team_id;
    private $temp_id;
    private $member_name;
    private $desc;
    private $member_img;

    /**
     * Team constructor.
     * @param $team_id
     * @param $temp_id
     * @param $member_name
     * @param $desc
     * @param $member_img
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
        $this->team_id = isset($arr['team_id']) ? $arr['team_id'] : null;
        $this->temp_id = $arr['temp_id'];
        $this->member_name = $arr['member_name'];
        $this->desc = $arr['desc'];
        $this->member_img = $arr['member_img'];
    }

    public function __construct3($arr,$temp_id,$path)
    {
        $this->team_id = isset($arr['team_id']) ? $arr['team_id'] : null;
        $this->temp_id = $temp_id;
        $this->member_name = $arr['member_name'];
        $this->desc = $arr['desc'];
        $this->member_img = $path;
    }

    /**
     * @return mixed
     */
    public function getTeamId()
    {
        return $this->team_id;
    }

    /**
     * @param mixed $team_id
     */
    public function setTeamId($team_id)
    {
        $this->team_id = $team_id;
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
    public function getMemberName()
    {
        return $this->member_name;
    }

    /**
     * @param mixed $member_name
     */
    public function setMemberName($member_name)
    {
        $this->member_name = $member_name;
    }

    /**
     * @return mixed
     */
    public function getDesc()
    {
        return $this->desc;
    }

    /**
     * @param mixed $desc
     */
    public function setDesc($desc)
    {
        $this->desc = $desc;
    }

    /**
     * @return mixed
     */
    public function getMemberImg()
    {
        return $this->member_img;
    }

    /**
     * @param mixed $member_img
     */
    public function setMemberImg($member_img)
    {
        $this->member_img = $member_img;
    }




}
