<?php

namespace AppBundle\Entity;

/**
 * UsersDefis
 */
class UsersDefis
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $uid;

    /**
     * @var integer
     */
    private $statut;


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
     * Set uid
     *
     * @param integer $uid
     *
     * @return UsersDefis
     */
    public function setUid($uid)
    {
        $this->uid = $uid;

        return $this;
    }

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
     * Set statut
     *
     * @param integer $statut
     *
     * @return UsersDefis
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * Get statut
     *
     * @return integer
     */
    public function getStatut()
    {
        return $this->statut;
    }
    /**
     * @var integer
     */
    private $did;


    /**
     * Set did
     *
     * @param integer $did
     *
     * @return UsersDefis
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
}
