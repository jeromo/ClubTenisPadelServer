<?php

namespace AppBundle\Entity;

/**
 * CtpMatch
 */
class CtpMatch
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $state;

    /**
     * @var string
     */
    private $set1;

    /**
     * @var string
     */
    private $set2;

    /**
     * @var string
     */
    private $set3;

    /**
     * @var \AppBundle\Entity\Competition
     */
    private $idCompetition;

    /**
     * @var \AppBundle\Entity\Journey
     */
    private $idJourney;

    /**
     * @var \AppBundle\Entity\Team
     */
    private $idTeam1;

    /**
     * @var \AppBundle\Entity\Team
     */
    private $idTeam2;

    /**
     * @var \AppBundle\Entity\Team
     */
    private $winner;


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
     * Set state
     *
     * @param string $state
     *
     * @return CtpMatch
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set set1
     *
     * @param string $set1
     *
     * @return CtpMatch
     */
    public function setSet1($set1)
    {
        $this->set1 = $set1;

        return $this;
    }

    /**
     * Get set1
     *
     * @return string
     */
    public function getSet1()
    {
        return $this->set1;
    }

    /**
     * Set set2
     *
     * @param string $set2
     *
     * @return CtpMatch
     */
    public function setSet2($set2)
    {
        $this->set2 = $set2;

        return $this;
    }

    /**
     * Get set2
     *
     * @return string
     */
    public function getSet2()
    {
        return $this->set2;
    }

    /**
     * Set set3
     *
     * @param string $set3
     *
     * @return CtpMatch
     */
    public function setSet3($set3)
    {
        $this->set3 = $set3;

        return $this;
    }

    /**
     * Get set3
     *
     * @return string
     */
    public function getSet3()
    {
        return $this->set3;
    }

    /**
     * Set idCompetition
     *
     * @param \AppBundle\Entity\Competition $idCompetition
     *
     * @return CtpMatch
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
     * Set idJourney
     *
     * @param \AppBundle\Entity\Journey $idJourney
     *
     * @return CtpMatch
     */
    public function setIdJourney(\AppBundle\Entity\Journey $idJourney = null)
    {
        $this->idJourney = $idJourney;

        return $this;
    }

    /**
     * Get idJourney
     *
     * @return \AppBundle\Entity\Journey
     */
    public function getIdJourney()
    {
        return $this->idJourney;
    }

    /**
     * Set idTeam1
     *
     * @param \AppBundle\Entity\Team $idTeam1
     *
     * @return CtpMatch
     */
    public function setIdTeam1(\AppBundle\Entity\Team $idTeam1 = null)
    {
        $this->idTeam1 = $idTeam1;

        return $this;
    }

    /**
     * Get idTeam1
     *
     * @return \AppBundle\Entity\Team
     */
    public function getIdTeam1()
    {
        return $this->idTeam1;
    }

    /**
     * Set idTeam2
     *
     * @param \AppBundle\Entity\Team $idTeam2
     *
     * @return CtpMatch
     */
    public function setIdTeam2(\AppBundle\Entity\Team $idTeam2 = null)
    {
        $this->idTeam2 = $idTeam2;

        return $this;
    }

    /**
     * Get idTeam2
     *
     * @return \AppBundle\Entity\Team
     */
    public function getIdTeam2()
    {
        return $this->idTeam2;
    }

    /**
     * Set winner
     *
     * @param \AppBundle\Entity\Team $winner
     *
     * @return CtpMatch
     */
    public function setWinner(\AppBundle\Entity\Team $winner = null)
    {
        $this->winner = $winner;

        return $this;
    }

    /**
     * Get winner
     *
     * @return \AppBundle\Entity\Team
     */
    public function getWinner()
    {
        return $this->winner;
    }
}

