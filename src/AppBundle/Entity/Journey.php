<?php

namespace AppBundle\Entity;

/**
 * Journey
 */
class Journey
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $number;

    /**
     * @var \AppBundle\Entity\Competition
     */
    private $idCompetition;


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
     * Set number
     *
     * @param integer $number
     *
     * @return Journey
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get number
     *
     * @return integer
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set idCompetition
     *
     * @param \AppBundle\Entity\Competition $idCompetition
     *
     * @return Journey
     */
    public function setIdCompetition(\AppBundle\Entity\Competition $idCompetition = null)
    {
        $this->idCompetition = $idCompetition;

        return $this;
    }

    /**
     * Get idCompetition
     *
     * @return \AppBundle\Entity\Competition
     */
    public function getIdCompetition()
    {
        return $this->idCompetition;
    }
}
