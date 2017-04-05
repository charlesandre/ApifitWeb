<?php

namespace AppBundle\Entity;

/**
 * UsersSports
 */
class UsersSports
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var boolean
     */
    private $athletisme = 0;

    /**
     * @var boolean
     */
    private $baseball = 0;

    /**
     * @var boolean
     */
    private $basket = 0;

    /**
     * @var boolean
     */
    private $cyclisme = 0;

    /**
     * @var boolean
     */
    private $escrime = 0;

    /**
     * @var boolean
     */
    private $foot = 0;

    /**
     * @var boolean
     */
    private $football = 0;

    /**
     * @var boolean
     */
    private $golf = 0;

    /**
     * @var boolean
     */
    private $musculation = 0;

    /**
     * @var boolean
     */
    private $hockey = 0;

    /**
     * @var boolean
     */
    private $karate = 0;

    /**
     * @var boolean
     */
    private $rugby = 0;

    /**
     * @var boolean
     */
    private $tennis = 0;

    /**
     * @var boolean
     */
    private $volley = 0;


    /**
     * Set id
     *
     * @param integer $id
     *
     * @return UsersSports
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
     * Set athletisme
     *
     * @param boolean $athletisme
     *
     * @return UsersSports
     */
    public function setAthletisme($athletisme)
    {
        $this->athletisme = $athletisme;

        return $this;
    }

    /**
     * Get athletisme
     *
     * @return boolean
     */
    public function getAthletisme()
    {
        return $this->athletisme;
    }

    /**
     * Set baseball
     *
     * @param boolean $baseball
     *
     * @return UsersSports
     */
    public function setBaseball($baseball)
    {
        $this->baseball = $baseball;

        return $this;
    }

    /**
     * Get baseball
     *
     * @return boolean
     */
    public function getBaseball()
    {
        return $this->baseball;
    }

    /**
     * Set basket
     *
     * @param boolean $basket
     *
     * @return UsersSports
     */
    public function setBasket($basket)
    {
        $this->basket = $basket;

        return $this;
    }

    /**
     * Get basket
     *
     * @return boolean
     */
    public function getBasket()
    {
        return $this->basket;
    }

    /**
     * Set cyclisme
     *
     * @param boolean $cyclisme
     *
     * @return UsersSports
     */
    public function setCyclisme($cyclisme)
    {
        $this->cyclisme = $cyclisme;

        return $this;
    }

    /**
     * Get cyclisme
     *
     * @return boolean
     */
    public function getCyclisme()
    {
        return $this->cyclisme;
    }

    /**
     * Set escrime
     *
     * @param boolean $escrime
     *
     * @return UsersSports
     */
    public function setEscrime($escrime)
    {
        $this->escrime = $escrime;

        return $this;
    }

    /**
     * Get escrime
     *
     * @return boolean
     */
    public function getEscrime()
    {
        return $this->escrime;
    }

    /**
     * Set foot
     *
     * @param boolean $foot
     *
     * @return UsersSports
     */
    public function setFoot($foot)
    {
        $this->foot = $foot;

        return $this;
    }

    /**
     * Get foot
     *
     * @return boolean
     */
    public function getFoot()
    {
        return $this->foot;
    }

    /**
     * Set football
     *
     * @param boolean $football
     *
     * @return UsersSports
     */
    public function setFootball($football)
    {
        $this->football = $football;

        return $this;
    }

    /**
     * Get football
     *
     * @return boolean
     */
    public function getFootball()
    {
        return $this->football;
    }

    /**
     * Set golf
     *
     * @param boolean $golf
     *
     * @return UsersSports
     */
    public function setGolf($golf)
    {
        $this->golf = $golf;

        return $this;
    }

    /**
     * Get golf
     *
     * @return boolean
     */
    public function getGolf()
    {
        return $this->golf;
    }

    /**
     * Set musculation
     *
     * @param boolean $musculation
     *
     * @return UsersSports
     */
    public function setMusculation($musculation)
    {
        $this->musculation = $musculation;

        return $this;
    }

    /**
     * Get musculation
     *
     * @return boolean
     */
    public function getMusculation()
    {
        return $this->musculation;
    }

    /**
     * Set hockey
     *
     * @param boolean $hockey
     *
     * @return UsersSports
     */
    public function setHockey($hockey)
    {
        $this->hockey = $hockey;

        return $this;
    }

    /**
     * Get hockey
     *
     * @return boolean
     */
    public function getHockey()
    {
        return $this->hockey;
    }

    /**
     * Set karate
     *
     * @param boolean $karate
     *
     * @return UsersSports
     */
    public function setKarate($karate)
    {
        $this->karate = $karate;

        return $this;
    }

    /**
     * Get karate
     *
     * @return boolean
     */
    public function getKarate()
    {
        return $this->karate;
    }

    /**
     * Set rugby
     *
     * @param boolean $rugby
     *
     * @return UsersSports
     */
    public function setRugby($rugby)
    {
        $this->rugby = $rugby;

        return $this;
    }

    /**
     * Get rugby
     *
     * @return boolean
     */
    public function getRugby()
    {
        return $this->rugby;
    }

    /**
     * Set tennis
     *
     * @param boolean $tennis
     *
     * @return UsersSports
     */
    public function setTennis($tennis)
    {
        $this->tennis = $tennis;

        return $this;
    }

    /**
     * Get tennis
     *
     * @return boolean
     */
    public function getTennis()
    {
        return $this->tennis;
    }

    /**
     * Set volley
     *
     * @param boolean $volley
     *
     * @return UsersSports
     */
    public function setVolley($volley)
    {
        $this->volley = $volley;

        return $this;
    }

    /**
     * Get volley
     *
     * @return boolean
     */
    public function getVolley()
    {
        return $this->volley;
    }


}
