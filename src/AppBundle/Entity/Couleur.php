<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * Couleur
 */
class Couleur
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $hexa;
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
     * Set nom
     *
     * @param string $nom
     *
     * @return Couleur
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

    /**
     * Set hexa
     *
     * @param string $hexa
     *
     * @return Couleur
     */
    public function setHexa($hexa)
    {
        $this->hexa = $hexa;

        return $this;
    }

    /**
     * Get hexa
     *
     * @return string
     */
    public function getHexa()
    {
        return $this->hexa;
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

