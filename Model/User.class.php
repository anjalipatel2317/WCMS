<?php


class User
{
    private $user_id;
    private $user_fname;
    private $user_lname;
    private $username;
    private $password;
    private $email;
    private $level;
    private $status;

    /**
     * User constructor.
     * @param $user_id
     * @param $user_fname
     * @param $user_lname
     * @param $username
     * @param $password
     * @param $email
     * @param $level
     * @param $status
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
        // var_dump($arr);
        $this->id = $arr['user_id'];
        $this->user_fname = $arr['user_fname'];
        $this->user_lname = $arr['user_lname'];
        $this->username = $arr['username'];
        $this->password = $arr['password'];
        $this->email = $arr['email'];
        $this->level =$arr['level'];
        $this->status = $arr['status'];
    }

    public function __construct3($arr,$lev,$status)
    {
//        print_r($arr);
        $this->user_id = $arr['id'] ?? null;
        $this->user_fname = $arr['fname'];
        $this->user_lname = $arr['lname'];
        $this->username = $arr['username'];
        $this->password = $arr['pass'];
        $this->email = $arr['email'];
        $this->level =$lev;
        $this->status = $status;

    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * @param mixed $user_id
     */
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
    }

    /**
     * @return mixed
     */
    public function getUserFname()
    {
        return $this->user_fname;
    }

    /**
     * @param mixed $user_fname
     */
    public function setUserFname($user_fname)
    {
        $this->user_fname = $user_fname;
    }

    /**
     * @return mixed
     */
    public function getUserLname()
    {
        return $this->user_lname;
    }

    /**
     * @param mixed $user_lname
     */
    public function setUserLname($user_lname)
    {
        $this->user_lname = $user_lname;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
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
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * @param mixed $level
     */
    public function setLevel($level)
    {
        $this->level = $level;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }


}