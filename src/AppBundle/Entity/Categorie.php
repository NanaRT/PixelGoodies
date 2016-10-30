<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * Categorie
 */
class Categorie
{
    private $id;
    private $nom;
    private $children;
    private $parent;
    private $item;
	
    public function __construct() {
        $this->children = new \Doctrine\Common\Collections\ArrayCollection();
        $this->item = new ArrayCollection();
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Categorie
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    public function setChildren($children)
    {
        $this->children = $children;

        return $this;
    }
    public function getChildren()
    {
        return $this->children;
    }

    public function setParent($parent)
    {
        $this->parent = $parent;

        return $this;
    }
    public function getParent()
    {
        return $this->parent;
    }

    public function setItem($item)
    {
        $this->item = $item;

        return $this;
    }
    public function getItem()
    {
        return $this->item;
    }
	
	
	public function __toString() {
	    return $this->nom;
	}
}

