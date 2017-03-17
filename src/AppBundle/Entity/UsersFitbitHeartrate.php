<?php

namespace AppBundle\Entity;

/**
 * UsersFitbitHeartrate
 */
class UsersFitbitHeartrate
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
    private $caloriesOut;

    /**
     * @var integer
     */
    private $max;

    /**
     * @var integer
     */
    private $min;

    /**
     * @var integer
     */
    private $minutes;

    /**
     * @var integer
     */
    private $restingHeartRate;

    /**
     * @var string
     */
    private $name;


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
     * @return UsersFitbitHeartrate
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
     * @return UsersFitbitHeartrate
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
     * @return UsersFitbitHeartrate
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
     * Set caloriesOut
     *
     * @param integer $caloriesOut
     *
     * @return UsersFitbitHeartrate
     */
    public function setCaloriesOut($caloriesOut)
    {
        $this->caloriesOut = $caloriesOut;

        return $this;
    }

    /**
     * Get caloriesOut
     *
     * @return integer
     */
    public function getCaloriesOut()
    {
        return $this->caloriesOut;
    }

    /**
     * Set max
     *
     * @param integer $max
     *
     * @return UsersFitbitHeartrate
     */
    public function setMax($max)
    {
        $this->max = $max;

        return $this;
    }

    /**
     * Get max
     *
     * @return integer
     */
    public function getMax()
    {
        return $this->max;
    }

    /**
     * Set min
     *
     * @param integer $min
     *
     * @return UsersFitbitHeartrate
     */
    public function setMin($min)
    {
        $this->min = $min;

        return $this;
    }

    /**
     * Get min
     *
     * @return integer
     */
    public function getMin()
    {
        return $this->min;
    }

    /**
     * Set minutes
     *
     * @param integer $minutes
     *
     * @return UsersFitbitHeartrate
     */
    public function setMinutes($minutes)
    {
        $this->minutes = $minutes;

        return $this;
    }

    /**
     * Get minutes
     *
     * @return integer
     */
    public function getMinutes()
    {
        return $this->minutes;
    }

    /**
     * Set restingHeartRate
     *
     * @param integer $restingHeartRate
     *
     * @return UsersFitbitHeartrate
     */
    public function setRestingHeartRate($restingHeartRate)
    {
        $this->restingHeartRate = $restingHeartRate;

        return $this;
    }

    /**
     * Get restingHeartRate
     *
     * @return integer
     */
    public function getRestingHeartRate()
    {
        return $this->restingHeartRate;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return UsersFitbitHeartrate
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}
