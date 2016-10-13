<?php

namespace Tools\Bundle\NamegeneratorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Word
 */
class Word
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $term;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $gender;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $species;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $type;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->species = new \Doctrine\Common\Collections\ArrayCollection();
        $this->type = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set term
     *
     * @param string $term
     * @return Word
     */
    public function setTerm($term)
    {
        $this->term = $term;

        return $this;
    }

    /**
     * Get term
     *
     * @return string 
     */
    public function getTerm()
    {
        return $this->term;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Word
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
     * Set gender
     *
     * @param string $gender
     * @return Word
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return string 
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Add species
     *
     * @param \Common\Bundle\EntitiesBundle\Entity\Species $species
     * @return Word
     */
    public function addSpecy(\Common\Bundle\EntitiesBundle\Entity\Species $species)
    {
        $this->species[] = $species;

        return $this;
    }

    /**
     * Remove species
     *
     * @param \Common\Bundle\EntitiesBundle\Entity\Species $species
     */
    public function removeSpecy(\Common\Bundle\EntitiesBundle\Entity\Species $species)
    {
        $this->species->removeElement($species);
    }

    /**
     * Get species
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSpecies()
    {
        return $this->species;
    }

    /**
     * Add type
     *
     * @param \Tools\Bundle\NamegeneratorBundle\Entity\Wordtype $type
     * @return Word
     */
    public function addType(\Tools\Bundle\NamegeneratorBundle\Entity\Wordtype $type)
    {
        $this->type[] = $type;

        return $this;
    }

    /**
     * Remove type
     *
     * @param \Tools\Bundle\NamegeneratorBundle\Entity\Wordtype $type
     */
    public function removeType(\Tools\Bundle\NamegeneratorBundle\Entity\Wordtype $type)
    {
        $this->type->removeElement($type);
    }

    /**
     * Get type
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getType()
    {
        return $this->type;
    }
}
