<?php

namespace AppBundle\Entity;

/**
 * User
 */
class User
{
    /**
     * @var integer
     */
    private $UID;

    /**
     * @var string
     */
    private $UNAME;

    /**
     * @var string
     */
    private $ULASTNAME;

    /**
     * @var string
     */
    private $UPASSWORD;

    /**
     * @var string
     */
    private $UEMAIL;

    /**
     * @var string
     */
    private $UPHONE;


    /**
     * Get uID
     *
     * @return integer
     */
    public function getUID()
    {
        return $this->UID;
    }

    /**
     * Set uNAME
     *
     * @param string $uNAME
     *
     * @return User
     */
    public function setUNAME($uNAME)
    {
        $this->UNAME = $uNAME;

        return $this;
    }

    /**
     * Get uNAME
     *
     * @return string
     */
    public function getUNAME()
    {
        return $this->UNAME;
    }

    /**
     * Set uLASTNAME
     *
     * @param string $uLASTNAME
     *
     * @return User
     */
    public function setULASTNAME($uLASTNAME)
    {
        $this->ULASTNAME = $uLASTNAME;

        return $this;
    }

    /**
     * Get uLASTNAME
     *
     * @return string
     */
    public function getULASTNAME()
    {
        return $this->ULASTNAME;
    }

    /**
     * Set uPASSWORD
     *
     * @param string $uPASSWORD
     *
     * @return User
     */
    public function setUPASSWORD($uPASSWORD)
    {
        $this->UPASSWORD = $uPASSWORD;

        return $this;
    }

    /**
     * Get uPASSWORD
     *
     * @return string
     */
    public function getUPASSWORD()
    {
        return $this->UPASSWORD;
    }

    /**
     * Set uEMAIL
     *
     * @param string $uEMAIL
     *
     * @return User
     */
    public function setUEMAIL($uEMAIL)
    {
        $this->UEMAIL = $uEMAIL;

        return $this;
    }

    /**
     * Get uEMAIL
     *
     * @return string
     */
    public function getUEMAIL()
    {
        return $this->UEMAIL;
    }

    /**
     * Set uPHONE
     *
     * @param string $uPHONE
     *
     * @return User
     */
    public function setUPHONE($uPHONE)
    {
        $this->UPHONE = $uPHONE;

        return $this;
    }

    /**
     * Get uPHONE
     *
     * @return string
     */
    public function getUPHONE()
    {
        return $this->UPHONE;
    }
}

