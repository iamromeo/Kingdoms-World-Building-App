<?php

namespace Common\Bundle\EntitiesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Setting
 */
class Setting
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $description;

    /**
     * @var \DateTime
     */
    private $created;

    /**
     * @var \Common\Bundle\EntitiesBundle\Entity\User
     */
    private $creator;


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
     * Set title
     *
     * @param string $title
     * @return Setting
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Setting
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
     * Set created
     *
     * @param \DateTime $created
     * @return Setting
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime 
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set creator
     *
     * @param \Common\Bundle\EntitiesBundle\Entity\User $creator
     * @return Setting
     */
    public function setCreator(\Common\Bundle\EntitiesBundle\Entity\User $creator = null)
    {
        $this->creator = $creator;

        return $this;
    }

    /**
     * Get creator
     *
     * @return \Common\Bundle\EntitiesBundle\Entity\User 
     */
    public function getCreator()
    {
        return $this->creator;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $pages;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->pages = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add pages
     *
     * @param \Common\Bundle\EntitiesBundle\Entity\Page $pages
     * @return Setting
     */
    public function addPage(\Common\Bundle\EntitiesBundle\Entity\Page $pages)
    {
        $this->pages[] = $pages;

        return $this;
    }

    /**
     * Remove pages
     *
     * @param \Common\Bundle\EntitiesBundle\Entity\Page $pages
     */
    public function removePage(\Common\Bundle\EntitiesBundle\Entity\Page $pages)
    {
        $this->pages->removeElement($pages);
    }

    /**
     * Get pages
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPages()
    {
        return $this->pages;
    }
}
