<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * Item
 */
class Item
{
    private $id;
    private $nom;
    private $prix;
    private $poids;
    private $description;
    private $categorie;
    private $couleur;
    private $taille;
	private $disponible;


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
     * @return Item
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
     * Set prix
     *
     * @param string $prix
     *
     * @return Item
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return string
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set poids
     *
     * @param string $poids
     *
     * @return Item
     */
    public function setPoids($poids)
    {
        $this->poids = $poids;

        return $this;
    }

    /**
     * Get poids
     *
     * @return string
     */
    public function getPoids()
    {
        return $this->poids;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Item
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

    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }
    public function getCategorie()
    {
        return $this->categorie;
    }

    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;

        return $this;
    }
    public function getCouleur()
    {
        return $this->couleur;
    }

    public function setTaille($taille)
    {
        $this->taille = $taille;

        return $this;
    }
    public function getTaille()
    {
        return $this->taille;
    }

    public function setDisponible($disponible)
    {
        $this->disponible = $disponible;

        return $this;
    }
    public function getDisponible()
    {
        return $this->disponible;
    }
}

