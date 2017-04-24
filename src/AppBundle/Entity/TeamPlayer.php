<?php

namespace AppBundle\Entity;

/**
 * TeamPlayer
 */
class TeamPlayer
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Team
     */
    private $idTeam;

    /**
     * @var \AppBundle\Entity\Player
     */
    private $idPlayer;


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
     * Set idTeam
     *
     * @param \AppBundle\Entity\Team $idTeam
     *
     * @return TeamPlayer
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

    /**
     * Set idPlayer
     *
     * @param \AppBundle\Entity\Player $idPlayer
     *
     * @return TeamPlayer
     */
    public function setIdPlayer(\AppBundle\Entity\Player $idPlayer = null)
    {
        $this->idPlayer = $idPlayer;

        return $this;
    }

    /**
     * Get idPlayer
     *
     * @return \AppBundle\Entity\Player
     */
    public function getIdPlayer()
    {
        return $this->idPlayer;
    }
}
