<?php


class User
{
    private $id;
    private $fname;
    private $lname;
    private $username;
    private $password;
    private $email;
    private $level;
    private $status;

    /**
     * User constructor.
     * @param $id
     * @param $fname
     * @param $lname
     * @param $username
     * @param $password
     * @param $email
     * @param $level
     * @param $status
     *
     *
     */

<<<<<<< HEAD

=======
>>>>>>> d23f1dbaed88645a3707cb033e46917166e2e873
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
        $this->id = $arr['user_id'];
        $this->fname = $arr['user_fname'];
        $this->lname = $arr['user_lname'];
        $this->username = $arr['username'];
        $this->password = $arr['password'];
        $this->email = $arr['email'];
        $this->level = $arr['level'];
        $this->status = $arr['status'];
    }
    public function __construct3($arr,$level,$status)
    {
        $this->id = $arr['user_id'] ?? null;
        $this->fname = $arr['user_fname'];
        $this->lname = $arr['user_lname'];
        $this->username = $arr['username'];
        $this->password = $arr['password'];
        $this->email = $arr['email'];
        $this->level = $level;
        $this->status = $status;
    }

    public function __construct3($arr,$lev,$status)
    {
        $this->id = $arr['user_id'] ?? null;
        $this->fname = $arr['user_fname'];
        $this->lname = $arr['user_lname'];
        $this->username = $arr['username'];
        $this->password = $arr['password'];
        $this->email = $arr['email'];
        $this->level = $lev;
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getFname()
    {
        return $this->fname;
    }

    /**
     * @param mixed $fname
     */
    public function setFname($fname)
    {
        $this->fname = $fname;
    }

    /**
     * @return mixed
     */
    public function getLname()
    {
        return $this->lname;
    }

    /**
     * @param mixed $lname
     */
    public function setLname($lname)
    {
        $this->lname = $lname;
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