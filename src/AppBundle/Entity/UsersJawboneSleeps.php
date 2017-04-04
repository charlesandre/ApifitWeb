<?php

namespace AppBundle\Entity;

/**
 * UsersJawboneSleeps
 */
class UsersJawboneSleeps
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
    private $awakenings;

    /**
     * @var integer
     */
    private $duration;


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
     * @return UsersJawboneSleeps
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
     * @return UsersJawboneSleeps
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
     * @return UsersJawboneSleeps
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
     * Set awakenings
     *
     * @param integer $awakenings
     *
     * @return UsersJawboneSleeps
     */
    public function setAwakenings($awakenings)
    {
        $this->awakenings = $awakenings;

        return $this;
    }

    /**
     * Get awakenings
     *
     * @return integer
     */
    public function getAwakenings()
    {
        return $this->awakenings;
    }

    /**
     * Set duration
     *
     * @param integer $duration
     *
     * @return UsersJawboneSleeps
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get duration
     *
     * @return integer
     */
    public function getDuration()
    {
        return $this->duration;
    }
}

