<?php

namespace Common\Bundle\EntitiesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Character
 */
class Character extends Page
{
    /**
     * @var string
     */
    private $name;


    /**
     * Set name
     *
     * @param string $name
     * @return Character
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
}
