<?php

namespace AppBundle\Entity;

/**
 * UsersDevices
 */
class UsersDevices
{
    /**
     * @var integer
     */
    private $did;

    /**
     * @var integer
     */
    private $uid;

    /**
     * @var string
     */
    private $brand;

    /**
     * @var string
     */
    private $device;


    /**
     * Get did
     *
     * @return integer
     */
    public function getDid()
    {
        return $this->did;
    }

    /**
     * Set uid
     *
     * @param integer $uid
     *
     * @return UsersDevices
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
     * Set brand
     *
     * @param string $brand
     *
     * @return UsersDevices
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * Get brand
     *
     * @return string
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Set device
     *
     * @param string $device
     *
     * @return UsersDevices
     */
    public function setDevice($device)
    {
        $this->device = $device;

        return $this;
    }

    /**
     * Get device
     *
     * @return string
     */
    public function getDevice()
    {
        return $this->device;
    }
}
