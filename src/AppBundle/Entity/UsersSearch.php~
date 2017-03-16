<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UsersSearch
 *
 * @ORM\Table(name="users_searchs")
 * @ORM\Entity
 */
class UsersSearch
{
    /**
     * @var integer
     *
     * @ORM\Column(name="UID_SEARCH", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $uidSea;

    /**
     * @var integer
     *
     * @ORM\Column(name="UID", type="integer", nullable=false)
     */
    private $uid;


    /**
     * @var string
     *
     * @ORM\Column(name="SEARCH", type="string", length=50, nullable=false)
     */
    private $search;



    /**
     * Get uidSea
     *
     * @return integer
     */
    public function getUidSearch()
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

    /**
     * Get uidSea
     *
     * @return integer
     */
    public function getUidSea()
    {
        return $this->uidSea;
    }
}
