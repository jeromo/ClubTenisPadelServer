<?php

namespace AppBundle\Entity;

/**
 * CompetitonTeam
 */
class CompetitonTeam
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Competition
     */
    private $idCompetition;

    /**
     * @var \AppBundle\Entity\Team
     */
    private $idTeam;


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
     * Set idCompetition
     *
     * @param \AppBundle\Entity\Competition $idCompetition
     *
     * @return CompetitonTeam
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

    /**
     * Set idTeam
     *
     * @param \AppBundle\Entity\Team $idTeam
     *
     * @return CompetitonTeam
     */
    public function setIdTeam(\AppBundle\Entity\Team $idTeam = null)
    {
        $this->idTeam = $idTeam;

        return $this;
    }

    /**
     * Get idTeam
     *
     * @return \AppBundle\Entity\Team
     */
    public function getIdTeam()
    {
        return $this->idTeam;
    }
}
