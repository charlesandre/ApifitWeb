<?php

namespace AppBundle\Entity;

/**
 * TableTraining
 */
class TableTraining
{
    /**
     * @var integer
     */
    private $tid;

    /**
     * @var string
     */
    private $sport;

    /**
     * @var string
     */
    private $level;

    /**
     * @var integer
     */
    private $time;

    /**
     * @var string
     */
    private $content;


    /**
     * Get tid
     *
     * @return integer
     */
    public function getTid()
    {
        return $this->tid;
    }

    /**
     * Set sport
     *
     * @param string $sport
     *
     * @return TableTraining
     */
    public function setSport($sport)
    {
        $this->sport = $sport;
    
        return $this;
    }

    /**
     * Get sport
     *
     * @return string
     */
    public function getSport()
    {
        return $this->sport;
    }

    /**
     * Set level
     *
     * @param string $level
     *
     * @return TableTraining
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
     * Set time
     *
     * @param integer $time
     *
     * @return TableTraining
     */
    public function setTime($time)
    {
        $this->time = $time;
    
        return $this;
    }

    /**
     * Get time
     *
     * @return integer
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return TableTraining
     */
    public function setContent($content)
    {
        $this->content = $content;
    
        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }
}
