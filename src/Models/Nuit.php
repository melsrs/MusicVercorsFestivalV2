<?php 

namespace src\Models; 

use src\Services\Hydratation;

class Nuit {
    private $id_nuit; 
    private $nom; 
    private $prix; 

    use Hydratation;

    /**
     * Get the value of id_nuit
     */
    public function getIdNuit()
    {
        return $this->id_nuit;
    }

    /**
     * Set the value of id_nuit
     */
    public function setIdNuit($id_nuit): self
    {
        $this->id_nuit = $id_nuit;

        return $this;
    }

    /**
     * Get the value of nom
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     */
    public function setNom($nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of prix
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set the value of prix
     */
    public function setPrix($prix): self
    {
        $this->prix = $prix;

        return $this;
    }
}