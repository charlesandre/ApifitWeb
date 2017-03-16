<?php

namespace AppBundle\Entity;

/**
 * UsersFitbitCaloriesBmr
 */
class UsersFitbitCaloriesBmr
{
    /**
     * @var integer
     */
    private $sid;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $aid;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var integer
     */
    private $value;


    /**
     * Get sid
     *
     * @return integer
     */
    public function getSid()
    {
        return $this->sid;
    }

    /**
     * Set id
     *
     * @param integer $id
     *
     * @return UsersFitbitCaloriesBmr
     */
    public function setId($id)
    {
        $this->id = $id;
    
        return $this;
    }

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
     * Set aid
     *
     * @param integer $aid
     *
     * @return UsersFitbitCaloriesBmr
     */
    public function setAid($aid)
    {
        $this->aid = $aid;
    
        return $this;
    }

    /**
     * Get aid
     *
     * @return integer
     */
    public function getAid()
    {
        return $this->aid;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return UsersFitbitCaloriesBmr
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
     * Set value
     *
     * @param integer $value
     *
     * @return UsersFitbitCaloriesBmr
     */
    public function setValue($value)
    {
        $this->value = $value;
    
        return $this;
    }

    /**
     * Get value
     *
     * @return integer
     */
    public function getValue()
    {
        return $this->value;
    }
}

