<?php

namespace AppBundle\Entity;

/**
 * UsersObjectifs
 */
class UsersObjectifs
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $objectif;


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
     * Set objectif
     *
     * @param string $objectif
     *
     * @return UsersObjectifs
     */
    public function setObjectif($objectif)
    {
        $this->objectif = $objectif;
    
        return $this;
    }

    /**
     * Get objectif
     *
     * @return string
     */
    public function getObjectif()
    {
        return $this->objectif;
    }
}

