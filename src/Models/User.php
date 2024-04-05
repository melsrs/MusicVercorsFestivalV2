<?php

namespace src\Models; 

use src\Services\Hydratation;

class User {
    private $id_user;
    private $nom;
    private $prenom;
    private $email; 
    private $telephone;
    private $adresse; 
    private $mdp; 
    private $RGPD;

    use Hydratation; 

    /**
     * Get the value of id_user
     */
    public function getIdUser()
    {
        return $this->id_user;
    }

    /**
     * Set the value of id_user
     */
    public function setIdUser($id_user)
    {
        $this->id_user = $id_user;
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
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * Get the value of prenom
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     */
    public function setPrenom($prenom): void
    {
        $this->prenom = $prenom;
    }

    /**
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     */
    public function setEmail($email): void
    {
        $this->email = $email;

    }

    /**
     * Get the value of telephone
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set the value of telephone
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

    }

    /**
     * Get the value of adresse
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set the value of adresse
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

    }

    /**
     * Get the value of mdp
     */
    public function getMdp()
    {
        return $this->mdp;
    }

    /**
     * Set the value of mdp
     */
    public function setMdp($mdp)
    {
        $this->mdp = $mdp;

    }

    /**
     * Get the value of RGPD
     */
    public function getRGPD()
    {
        return $this->RGPD;
    }

    /**
     * Set the value of RGPD
     */
    public function setRGPD($RGPD)
    {
        $this->RGPD = $RGPD;
    }
}