<?php

namespace AppBundle\Entity;

/**
 * Users
 */
class Users
{
    /**
     * @var integer
     */
    private $uid;

    /**
     * @var string
     */
    private $uname;

    /**
     * @var string
     */
    private $ulastname;

    /**
     * @var string
     */
    private $upassword;

    /**
     * @var string
     */
    private $uemail;

    /**
     * @var string
     */
    private $uphone;


    /**
     * Get uid
     *
     * @return integer
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Set uname
     *
     * @param string $uname
     *
     * @return Users
     */
    public function setUname($uname)
    {
        $this->uname = $uname;

        return $this;
    }

    /**
     * Get uname
     *
     * @return string
     */
    public function getUname()
    {
        return $this->uname;
    }

    /**
     * Set ulastname
     *
     * @param string $ulastname
     *
     * @return Users
     */
    public function setUlastname($ulastname)
    {
        $this->ulastname = $ulastname;

        return $this;
    }

    /**
     * Get ulastname
     *
     * @return string
     */
    public function getUlastname()
    {
        return $this->ulastname;
    }

    /**
     * Set upassword
     *
     * @param string $upassword
     *
     * @return Users
     */
    public function setUpassword($upassword)
    {
        $this->upassword = $upassword;

        return $this;
    }

    /**
     * Get upassword
     *
     * @return string
     */
    public function getUpassword()
    {
        return $this->upassword;
    }

    /**
     * Set uemail
     *
     * @param string $uemail
     *
     * @return Users
     */
    public function setUemail($uemail)
    {
        $this->uemail = $uemail;

        return $this;
    }

    /**
     * Get uemail
     *
     * @return string
     */
    public function getUemail()
    {
        return $this->uemail;
    }

    /**
     * Set uphone
     *
     * @param string $uphone
     *
     * @return Users
     */
    public function setUphone($uphone)
    {
        $this->uphone = $uphone;

        return $this;
    }

    /**
     * Get uphone
     *
     * @return string
     */
    public function getUphone()
    {
        return $this->uphone;
    }
}

