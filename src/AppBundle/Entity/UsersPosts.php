<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UsersPosts
 *
 * @ORM\Table(name="users_posts")
 * @ORM\Entity
 */
class UsersPosts
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="UID1", type="integer", nullable=false)
     */
    private $uid1;

    /**
     * @var integer
     *
     * @ORM\Column(name="UID2", type="integer", nullable=false)
     */
    private $uid2;

    /**
     * @var string
     *
     * @ORM\Column(name="CONTENT", type="string", length=100, nullable=false)
     */
    private $content;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE", type="date", nullable=false)
     */
    private $date;

    /**
     * @var integer
     *
     * @ORM\Column(name="img", type="integer", nullable=false)
     */
    private $img;

    /**
     * @var string
     *
     * @ORM\Column(name="src", type="string", length=20, nullable=false)
     */
    private $src;

    /**
     * @var integer
     *
     * @ORM\Column(name="VU", type="integer", nullable=false)
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
     * @return UsersSearch
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
     * @return UsersSearch
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
     * @return UsersChat
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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return UsersData
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
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
     * @return UsersSearch
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
