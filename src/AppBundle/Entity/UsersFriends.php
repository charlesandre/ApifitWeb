<?php

namespace AppBundle\Entity;

/**
 * UsersFriends
 */
class UsersFriends
{
    /**
     * @var integer
     */
    private $uidRel;

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
    private $statut;


    /**
     * Get uidRel
     *
     * @return integer
     */
    public function getUidRel()
    {
        return $this->uidRel;
    }

    /**
     * Set uid1
     *
     * @param integer $uid1
     *
     * @return UsersFriends
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
     * @return UsersFriends
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
     * Set statut
     *
     * @param string $statut
     *
     * @return UsersFriends
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * Get statut
     *
     * @return string
     */
    public function getStatut()
    {
        return $this->statut;
    }
}

