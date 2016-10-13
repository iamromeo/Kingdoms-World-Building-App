<?php

namespace Common\Bundle\EntitiesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Species
 */
class Species extends Page
{
    /**
     * @var integer
     */
    private $species_id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $description;


    /**
     * Get species_id
     *
     * @return integer 
     */
    public function getSpeciesId()
    {
        return $this->species_id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Species
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Species
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
}
