<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * Taille
 */
class Taille
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $taille;
    private $item;

    public function __construct() {
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
     * Set taille
     *
     * @param string $taille
     *
     * @return Taille
     */
    public function setTaille($taille)
    {
        $this->taille = $taille;

        return $this;
    }

    /**
     * Get taille
     *
     * @return string
     */
    public function getTaille()
    {
        return $this->taille;
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

