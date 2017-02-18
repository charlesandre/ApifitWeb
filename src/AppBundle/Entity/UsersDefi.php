<?php

namespace AppBundle\Entity;

/**
 * UsersDefi
 */
class UsersDefi
{
    /**
     * @var integer
     */
    private $udid;

    /**
     * @var integer
     */
    private $uid1;

    /**
     * @var integer
     */
    private $uid2;

    /**
     * @var integer
     */
    private $did;

    /**
     * @var string
     */
    private $statut;


    /**
     * Get udid
     *
     * @return integer
     */
    public function getUdid()
    {
        return $this->udid;
    }

    /**
     * Set uid1
     *
     * @param integer $uid1
     *
     * @return UsersDefi
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
     * @return UsersDefi
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
     * Set did
     *
     * @param integer $did
     *
     * @return UsersDefi
     */
    public function setDid($did)
    {
        $this->did = $did;

        return $this;
    }

    /**
     * Get did
     *
     * @return integer
     */
    public function getDid()
    {
        return $this->did;
    }

    /**
     * Set statut
     *
     * @param string $statut
     *
     * @return UsersDefi
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

