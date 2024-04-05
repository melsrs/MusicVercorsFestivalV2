<?php
namespace src\Repositories;

use PDO;
use PDOException;
use src\Models\User;
use src\Models\Database;

class UserRepository {
  private $DB;

  public function __construct()
  {
    $database = new Database;
    $this->DB = $database->getDB();

    require_once __DIR__ . '/../../config.php';
  }

  public function getAllUsers(){
    $sql = "SELECT * FROM ".PREFIXE."user;";

    $retour = $this->DB->query($sql)->fetchAll(PDO::FETCH_CLASS, User::class);

    return $retour;
  }

  public function getThisUserById(int $id_user): User|bool {
    $sql = "SELECT * FROM ".PREFIXE."user WHERE id_user = :id_user";

    $statement = $this->DB->prepare($sql);
    $statement->bindParam(':id_user', $id_user);
    $statement->execute();
    $statement->setFetchMode(PDO::FETCH_CLASS, User::class);
    $retour = $statement->fetch();

    return $retour;
  }


  public function CreateThisUser(User $User): bool{
    $sql = "INSERT INTO ". PREFIXE . "user (id_user, nom, prenom, email, telephone, adresse, mdp, RGPD) VALUES (:id_user, :nom, :prenom, :email, :telephone, :adresse, :mdp, :RGPD)";

    $statement = $this->DB->prepare($sql);

    $retour = $statement->execute([
      ':id_user' => $User->getIdUser(),
      ':nom' => $User->getNom(),
      ':prenom' => $User->getPrenom(),
      ':email' => $User->getEmail(), 
      ':telephone' => $User->getTelephone(), 
      ':adresse' => $User->getAdresse(), 
      ':mdp' => $User->getMdp(), 
      ':RGPD' => $User->getRGPD()
    ]);

    return $retour;
    // return $this->DB->lastInsertId();
  }

  public function UpdateThisUser(User $User): bool{
    $sql = "UPDATE ". PREFIXE . "user
            SET
            id_user = :id_user,
            nom = :nom,
            prenom = :prenom,
            email = :email,
            telephone = :telephone,
            adresse = :adresse,
            mdp = :mdp,
            RGPD = :RGPD,
            WHERE id_user = :id_user";

    $statement = $this->DB->prepare($sql);

    $retour = $statement->execute([
        ':id_user' => $User->getIdUser(),
        ':nom' => $User->getNom(),
        ':prenom' => $User->getPrenom(),
        ':email' => $User->getEmail(), 
        ':telephone' => $User->getTelephone(), 
        ':adresse' => $User->getAdresse(), 
        ':mdp' => $User->getMdp(), 
        ':RGPD' => $User->getRGPD()
  
      ]);

    return $retour;
  }

}