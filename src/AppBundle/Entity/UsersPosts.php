<?php

namespace AppBundle\Entity;

/**
 * UsersPosts
 */
class UsersPosts
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $uid1;

    /**
     * @var integer
     */
    private $uid2;

    /**
     * @var string
     */
    private $content;

    /**
     * @var integer
     */
    private $img;

    /**
     * @var string
     */
    private $src;

    /**
     * @var integer
     */
    private $vu;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set uid1
     *
     * @param integer $uid1
     *
     * @return UsersPosts
     */
    public function setUid1($uid1)
    {
        $this->uid1 = $uid1;

        return $this;
    }

    /**
     * Get uid1
     *
     * @return integer
     */
    public function getUid1()
    {
        return $this->uid1;
    }

    /**
     * Set uid2
     *
     * @param integer $uid2
     *
     * @return UsersPosts
     */
    public function setUid2($uid2)
    {
        $this->uid2 = $uid2;

        return $this;
    }

    /**
     * Get uid2
     *
     * @return integer
     */
    public function getUid2()
    {
        return $this->uid2;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return UsersPosts
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set img
     *
     * @param integer $img
     *
     * @return UsersPosts
     */
    public function setImg($img)
    {
        $this->img = $img;

        return $this;
    }

    /**
     * Get img
     *
     * @return integer
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * Set src
     *
     * @param string $src
     *
     * @return UsersPosts
     */
    public function setSrc($src)
    {
        $this->src = $src;

        return $this;
    }

    /**
     * Get src
     *
     * @return string
     */
    public function getSrc()
    {
        return $this->src;
    }

    /**
     * Set vu
     *
     * @param integer $vu
     *
     * @return UsersPosts
     */
    public function setVu($vu)
    {
        $this->vu = $vu;

        return $this;
    }

    /**
     * Get vu
     *
     * @return integer
     */
    public function getVu()
    {
        return $this->vu;
    }
}
