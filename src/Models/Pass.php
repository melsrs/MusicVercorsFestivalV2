<?php 

namespace src\Models; 

use src\Services\Hydratation;

class Pass {
    private $id_pass;
    private $nom;
    private $prix;
    private $tarif_reduit;

    use Hydratation;

    /**
     * Get the value of id_pass
     */
    public function getIdPass()
    {
        return $this->id_pass;
    }

    /**
     * Set the value of id_pass
     */
    public function setIdPass($id_pass): self
    {
        $this->id_pass = $id_pass;

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

    /**
     * Get the value of tarif_reduit
     */
    public function getTarifReduit()
    {
        return $this->tarif_reduit;
    }

    /**
     * Set the value of tarif_reduit
     */
    public function setTarifReduit($tarif_reduit): self
    {
        $this->tarif_reduit = $tarif_reduit;

        return $this;
    }
}