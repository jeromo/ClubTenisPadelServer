<?php

namespace AppBundle\Entity;

/**
 * Player
 */
class Player
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $description;

    /**
     * @var boolean
     */
    private $active;

    /**
     * @var \AppBundle\Entity\FosUser
     */
    private $idFosUser;


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
     * Set description
     *
     * @param string $description
     *
     * @return Player
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set active
     *
     * @param boolean $active
     *
     * @return Player
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return boolean
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set idFosUser
     *
     * @param \AppBundle\Entity\FosUser $idFosUser
     *
     * @return Player
     */
    public function setIdFosUser(\AppBundle\Entity\FosUser $idFosUser = null)
    {
        $this->idFosUser = $idFosUser;

        return $this;
    }

    /**
     * Get idFosUser
     *
     * @return \AppBundle\Entity\FosUser
     */
    public function getIdFosUser()
    {
        return $this->idFosUser;
    }
}

