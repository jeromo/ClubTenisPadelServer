<?php
/**
 * Created by PhpStorm.
 * User: jrojo
 * Date: 13/04/17
 * Time: 17:20
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="competition")
 */
class Competition
{
    /**
     * @ORM\id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    /**
     * @ORM\name
     * @ORM\Column(type="varchar(45)")
     */
    protected $name;
    /**
     * @ORM\description
     * @ORM\Column(type="varchar(45)")
     */
    protected $description;
    /**
     * @ORM\active
     * @ORM\Column(type="boolean")
     */
    protected $active;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
    public function getId()
    {
        return $this->id;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function setDescription($description)
    {
        $this->description = $description;
    }
    public function getActive()
    {
        return $this->active;
    }
    public function setActive($active)
    {
        $this->active= $active;
    }

}