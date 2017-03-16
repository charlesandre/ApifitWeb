<?php

namespace AppBundle\Entity;

/**
 * UsersFitbitWeight
 */
class UsersFitbitWeight
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
    private $bmi;

    /**
     * @var string
     */
    private $time;

    /**
     * @var integer
     */
    private $weight;


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
     * @return UsersFitbitWeight
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
     * @return UsersFitbitWeight
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
     * @return UsersFitbitWeight
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
     * Set bmi
     *
     * @param integer $bmi
     *
     * @return UsersFitbitWeight
     */
    public function setBmi($bmi)
    {
        $this->bmi = $bmi;
    
        return $this;
    }

    /**
     * Get bmi
     *
     * @return integer
     */
    public function getBmi()
    {
        return $this->bmi;
    }

    /**
     * Set time
     *
     * @param string $time
     *
     * @return UsersFitbitWeight
     */
    public function setTime($time)
    {
        $this->time = $time;
    
        return $this;
    }

    /**
     * Get time
     *
     * @return string
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Set weight
     *
     * @param integer $weight
     *
     * @return UsersFitbitWeight
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
    
        return $this;
    }

    /**
     * Get weight
     *
     * @return integer
     */
    public function getWeight()
    {
        return $this->weight;
    }
}
