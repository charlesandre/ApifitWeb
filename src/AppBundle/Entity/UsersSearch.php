<?php

namespace AppBundle\Entity;

/**
 * UsersSearch
 */
class UsersSearch
{
    /**
     * @var integer
     */
    private $uidSea;

    /**
     * @var integer
     */
    private $uid;

    /**
     * @var string
     */
    private $search;


    /**
     * Get uidSea
     *
     * @return integer
     */
    public function getUidSea()
    {
        return $this->uidSea;
    }

    /**
     * Set uid
     *
     * @param integer $uid
     *
     * @return UsersSearch
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
     * Set search
     *
     * @param string $search
     *
     * @return UsersSearch
     */
    public function setSearch($search)
    {
        $this->search = $search;
    
        return $this;
    }

    /**
     * Get search
     *
     * @return string
     */
    public function getSearch()
    {
        return $this->search;
    }
}
