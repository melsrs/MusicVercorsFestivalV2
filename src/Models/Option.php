<?php 

namespace src\Models; 

use src\Services\Hydratation;

class Option {
    private $id_option;
    private $nom;
    private $prix;

    use Hydratation;

    /**
     * Get the value of id_option
     */
    public function getIdOption()
    {
        return $this->id_option;
    }

    /**
     * Set the value of id_option
     */
    public function setIdOption($id_option): self
    {
        $this->id_option = $id_option;

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