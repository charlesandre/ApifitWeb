<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UsersData
 *
 * @ORM\Table(name="users_data")
 * @ORM\Entity
 */
class UsersData
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE", type="date", nullable=false)
     */
    private $date;


    /**
     * @var integer
     *
     * @ORM\Column(name="WEIGHT", type="integer", nullable=false)
     */
    private $weight;

    /**
     * @var integer
     *
     * @ORM\Column(name="HEIGHT", type="integer", nullable=false)
     */
    private $height;

    /**
     * @var string
     *
     * @ORM\Column(name="GENDER", type="string", length=8, nullable=false)
     */
    private $gender;

    /**
     * @var integer
     *
     * @ORM\Column(name="AGE", type="integer", nullable=false)
     */
    private $age;

    /**
     * @var string
     *
     * @ORM\Column(name="DATE_OF_BIRTH", type="string", length=8, nullable=false)
     */
    private $dateOfBirth;


    /**
     * @var string
     *
     * @ORM\Column(name="AVERAGEDAILYSTEPS", type="integer", nullable=false)
     */
     private $averageDailySteps;



    /**
     * @var integer
     *
     * @ORM\Column(name="STRIDE_LENGTH_RUNNING", type="integer", nullable=false)
     */
    private $strideLengthRunning;

    /**
     * @var integer
     *
     * @ORM\Column(name="STRIDE_LENGTH_WALKING", type="integer", nullable=false)
     */
    private $strideLengthWalking;

    /**
     * @var string
     *
     * @ORM\Column(name="STRIDE_LENGTH_RUNNING_TYPE", type="string", length=30, nullable=false)
     */
    private $strideLengthRunningType;

    /**
     * @var string
     *
     * @ORM\Column(name="STRIDE_LENGTH_WALKING_TYPE", type="string", length=30, nullable=false)
     */
    private $strideLengthWalkingType;




    /**
     * Set id
     *
     * @param integer $id
     *
     * @return UsersData
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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return UsersData
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



    public function getAverageDailySteps()
    {
        return $this->averageDailySteps;
    }

    public function setAverageDailySteps()
    {
        $this->averageDailySteps;
    }


    /**
     * Set strideLengthRunning
     *
     * @param integer $strideLengthRunning
     *
     * @return UsersData
     */
    public function setStrideLengthRunning($strideLengthRunning)
    {
        $this->strideLengthRunning = $strideLengthRunning;

        return $this;
    }

    /**
     * Get strideLengthRunning
     *
     * @return integer
     */
    public function getStrideLengthRunning()
    {
        return $this->strideLengthRunning;
    }

    /**
     * Set strideLengthWalking
     *
     * @param integer $strideLengthWalking
     *
     * @return UsersData
     */
    public function setStrideLengthWalking($strideLengthWalking)
    {
        $this->strideLengthWalking = $strideLengthWalking;

        return $this;
    }

    /**
     * Get strideLengthWalking
     *
     * @return integer
     */
    public function getStrideLengthWalking()
    {
        return $this->strideLengthWalking;
    }

    /**
     * Set strideLengthRunningType
     *
     * @param string $strideLengthRunningType
     *
     * @return UsersData
     */
    public function setStrideLengthRunningType($strideLengthRunningType)
    {
        $this->strideLengthRunningType = $strideLengthRunningType;

        return $this;
    }

    /**
     * Get strideLengthRunningType
     *
     * @return string
     */
    public function getStrideLengthRunningType()
    {
        return $this->strideLengthRunningType;
    }

    /**
     * Set strideLengthWalkingType
     *
     * @param string $strideLengthWalkingType
     *
     * @return UsersData
     */
    public function setStrideLengthWalkingType($strideLengthWalkingType)
    {
        $this->strideLengthWalkingType = $strideLengthWalkingType;

        return $this;
    }

    /**
     * Get strideLengthWalkingType
     *
     * @return string
     */
    public function getStrideLengthWalkingType()
    {
        return $this->strideLengthWalkingType;
    }
}
