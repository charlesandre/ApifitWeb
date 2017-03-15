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
    private $football = 0;

    /**
     * @var boolean
     */
    private $running = 0;

    /**
     * @var boolean
     */
    private $rugby = 0;

    /**
     * @var boolean
     */
    private $natation = 0;

    /**
     * @var boolean
     */
    private $tennis = 0;



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
     * Set running
     *
     * @param boolean $running
     *
     * @return UsersSports
     */
    public function setRunning($running)
    {
        $this->running = $running;

        return $this;
    }

    /**
     * Get running
     *
     * @return boolean
     */
    public function getRunning()
    {
        return $this->running;
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
     * Set natation
     *
     * @param boolean $natation
     *
     * @return UsersSports
     */
    public function setNatation($natation)
    {
        $this->natation = $natation;

        return $this;
    }

    /**
     * Get natation
     *
     * @return boolean
     */
    public function getNatation()
    {
        return $this->natation;
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
}
