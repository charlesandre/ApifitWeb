<?php

namespace AppBundle\Entity;

/**
 * UsersData
 */
class UsersData
{
    /**
     * @var integer
     */
    private $uid;

    /**
     * @var string
     */
    private $level;

    /**
     * @var integer
     */
    private $weight;

    /**
     * @var integer
     */
    private $height;

    /**
     * @var string
     */
    private $gender;

    /**
     * @var integer
     */
    private $age;

    /**
     * @var string
     */
    private $dateOfBirth;

    /**
     * @var string
     */
    private $timezone;

    /**
     * @var integer
     */
    private $strideLenghtRunning;

    /**
     * @var integer
     */
    private $strideLenghtWalking;

    /**
     * @var string
     */
    private $strideLenghtRunningType;

    /**
     * @var string
     */
    private $strideLenghtWalkingType;


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
     * Set level
     *
     * @param string $level
     *
     * @return UsersData
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return string
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set weight
     *
     * @param integer $weight
     *
     * @return UsersData
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

    /**
     * Set height
     *
     * @param integer $height
     *
     * @return UsersData
     */
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Get height
     *
     * @return integer
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Set gender
     *
     * @param string $gender
     *
     * @return UsersData
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set age
     *
     * @param integer $age
     *
     * @return UsersData
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return integer
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set dateOfBirth
     *
     * @param string $dateOfBirth
     *
     * @return UsersData
     */
    public function setDateOfBirth($dateOfBirth)
    {
        $this->dateOfBirth = $dateOfBirth;

        return $this;
    }

    /**
     * Get dateOfBirth
     *
     * @return string
     */
    public function getDateOfBirth()
    {
        return $this->dateOfBirth;
    }

    /**
     * Set timezone
     *
     * @param string $timezone
     *
     * @return UsersData
     */
    public function setTimezone($timezone)
    {
        $this->timezone = $timezone;

        return $this;
    }

    /**
     * Get timezone
     *
     * @return string
     */
    public function getTimezone()
    {
        return $this->timezone;
    }

    /**
     * Set strideLenghtRunning
     *
     * @param integer $strideLenghtRunning
     *
     * @return UsersData
     */
    public function setStrideLenghtRunning($strideLenghtRunning)
    {
        $this->strideLenghtRunning = $strideLenghtRunning;

        return $this;
    }

    /**
     * Get strideLenghtRunning
     *
     * @return integer
     */
    public function getStrideLenghtRunning()
    {
        return $this->strideLenghtRunning;
    }

    /**
     * Set strideLenghtWalking
     *
     * @param integer $strideLenghtWalking
     *
     * @return UsersData
     */
    public function setStrideLenghtWalking($strideLenghtWalking)
    {
        $this->strideLenghtWalking = $strideLenghtWalking;

        return $this;
    }

    /**
     * Get strideLenghtWalking
     *
     * @return integer
     */
    public function getStrideLenghtWalking()
    {
        return $this->strideLenghtWalking;
    }

    /**
     * Set strideLenghtRunningType
     *
     * @param string $strideLenghtRunningType
     *
     * @return UsersData
     */
    public function setStrideLenghtRunningType($strideLenghtRunningType)
    {
        $this->strideLenghtRunningType = $strideLenghtRunningType;

        return $this;
    }

    /**
     * Get strideLenghtRunningType
     *
     * @return string
     */
    public function getStrideLenghtRunningType()
    {
        return $this->strideLenghtRunningType;
    }

    /**
     * Set strideLenghtWalkingType
     *
     * @param string $strideLenghtWalkingType
     *
     * @return UsersData
     */
    public function setStrideLenghtWalkingType($strideLenghtWalkingType)
    {
        $this->strideLenghtWalkingType = $strideLenghtWalkingType;

        return $this;
    }

    /**
     * Get strideLenghtWalkingType
     *
     * @return string
     */
    public function getStrideLenghtWalkingType()
    {
        return $this->strideLenghtWalkingType;
    }
}

