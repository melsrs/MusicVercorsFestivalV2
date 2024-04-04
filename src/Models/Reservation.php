<?php

namespace src\Models; 

// use src\Services\Hydratation;

class Reservation {
    private $id_reservation; 
    private $nombre_resa;
    private $prix_total; 
    private $id_user;

    // use Hydratation;

    public function __construct($id_reservation, $nombre_resa, $prix_total, $id_user)
    {
        $this->id_reservation = $id_reservation;
        $this->nombre_resa = $nombre_resa;
        $this->prix_total = $prix_total;
        $this->id_user = $id_user;
    }

    /**
     * Get the value of id_reservation
     */
    public function getIdReservation()
    {
        return $this->id_reservation;
    }

    public function setIdReservation($id_reservation) {
        $this->id_reservation = $id_reservation;
    }

 

    public function getNombreResa()
    {
        return $this->nombre_resa;
    }

    /**
     * Set the value of nombre_resa
     */
    public function setNombreResa($nombre_resa)
    {
        $this->nombre_resa = $nombre_resa;
    }

    /**
     * Get the value of prix_total
     */
    public function getPrixTotal()
    {
        return $this->prix_total;
    }

    /**
     * Set the value of prix_total
     */
    public function setPrixTotal($prix_total)
    {
        $this->prix_total = $prix_total;
    }

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

    public function toAssociativeArray()
    {
        return [
            "id_reservation" => $this->id_reservation,
            "nombre_resa" => $this->nombre_resa,
            "prix_total" => $this->prix_total,
            "id_user" => $this->id_user,
        ];
    }
}



// class Reservation {
//     // private $_ID;
//     private $_nom;
//     private $_prenom;
//     private $_mail;
//     private $_telephone;
//     private $_adresse;
//     private $_nbPersonnes;
//     private $_prixTotal;
//     private $_date;
//     private $_nbCasquesEnfants;
//     private $_nbLugesEte;
//     private $_tente;
//     private $_van;
   

//     public function __construct(
//         string $nom,
//         string $prenom,
//         string $mail,
//         string $telephone,
//         string $adresse,
//         string $nbPersonnes,
//         int $prixTotal,
//         string $date,
//         string $nbCasquesEnfants,
//         string $nbLugesEte,
//         string $tente,
//         string $van
       
//     ) {
//         $this->_nom = $nom;
//         $this->_prenom = $prenom;
//         $this->_mail = $mail;
//         $this->_telephone = $telephone;
//         $this->_adresse = $adresse;
//         $this->_nbPersonnes = $nbPersonnes;
//         $this->_prixTotal = $prixTotal;
//         $this->_date = $date;
//         $this->_nbCasquesEnfants = $nbCasquesEnfants;
//         $this->_nbLugesEte = $nbLugesEte;
//         $this->_tente = $tente;
//         $this->_van = $van;
      
//     }
// //#region Getters and Setters
//     public function getNom(): string {
//         return $this->_nom;
//     }

//     public function setNom(string $nom) {
//         $this->_nom = $nom;
//     }

//     public function getPrenom(): string {
//         return $this->_prenom;
//     }

//     public function setPrenom(string $prenom) {
//         $this->_prenom = $prenom;
//     }

//     public function getMail(): string {
//         return $this->_mail;
//     }

//     public function setMail(string $mail) {
//         $this->_mail = $mail;
//     }

//     public function getTelephone(): string {
//         return $this->_telephone;
//     }

//     public function setTelephone(string $telephone) {
//         $this->_telephone = $telephone;
//     }

//     public function getAdresse(): string {
//         return $this->_adresse;
//     }

//     public function setAdresse(string $adresse) {
//         $this->_adresse = $adresse;
//     }

//     public function getNbPersonnes(): int {
//         return $this->_nbPersonnes;
//     }

//     public function setNbPersonnes(int $nbPersonnes) {
//         $this->_nbPersonnes = $nbPersonnes;
//     }

//     public function getDate(): string {
//         return $this->_date;
//     }

//     public function setDate(string $date) {
//         $this->_date = $date;
//     }

//     public function getNbCasquesEnfants(): int {
//         return $this->_nbCasquesEnfants;
//     }

//     public function setNbCasquesEnfants(int $nbCasquesEnfants) {
//         $this->_nbCasquesEnfants = $nbCasquesEnfants;
//     }

//     public function getNbLugesEte(): int {
//         return $this->_nbLugesEte;
//     }

//     public function setNbLugesEte(int $nbLugesEte) {
//         $this->_nbLugesEte = $nbLugesEte;
//     }

//     public function getPrixTotal(): int {
//         return $this->_prixTotal;
//     }

//     public function setPrixTotal(int $prixTotal) {
//         $this->_prixTotal = $prixTotal;
//     }

//     public function getTente(): string {
//         return $this->_tente;
//     }

//     public function setTente(string $tente) {
//         $this->_tente = $tente; 
//     }

//     public function getVan(): string {
//         return $this->_van;
//     }

//     public function setVan(string $van) {
//         $this->_van = $van;
//     }
// #endregion

//     public function getObjectToArray(): array {
//         return [
//             "nom" => $this->getNom(),
//             "prenom" => $this->getPrenom(),
//             "mail" => $this->getMail(),
//             "telephone" => $this->getTelephone(),
//             "adresse" => $this->getAdresse(),
//             "nbPersonnes" => $this->getNbPersonnes(),
//             "prixTotal" => $this->getPrixTotal(),
//             "date" => $this->getDate(),
//             "nbCasquesEnfants" => $this->getNbCasquesEnfants(),
//             "nbLugesEte" => $this->getNbLugesEte(),
//             "tente" => $this->getTente(),
//             "van" => $this->getVan()
//         ];
//     }
// }

