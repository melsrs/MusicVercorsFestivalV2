<?php
namespace src\Repositories;

use PDO;
use PDOException;
use src\Models\Nuit;
use src\Models\Database;

class NuitRepository {
  private $DB;

  public function __construct()
  {
    $database = new Database;
    $this->DB = $database->getDB();

    require_once __DIR__ . '/../../config.php';
  }

  public function getAllNuits(){
    $sql = "SELECT * FROM ".PREFIXE."nuit;";

    $retour = $this->DB->query($sql)->fetchAll(PDO::FETCH_CLASS, Nuit::class);

    return $retour;
  }

  public function getThisNuitById(int $id_nuit): Nuit|bool {
    $sql = "SELECT * FROM ".PREFIXE."nuit WHERE id_nuit = :id_nuit";

    $statement = $this->DB->prepare($sql);
    $statement->bindParam(':id_nuit', $id_nuit);
    $statement->execute();
    $statement->setFetchMode(PDO::FETCH_CLASS, Nuit::class);
    $retour = $statement->fetch();

    return $retour;
  }


  public function CreateThisNuit(Nuit $Nuit): bool{
    $sql = "INSERT INTO ". PREFIXE . "nuit (id_nuit, nom, prix) VALUES (:id_nuit, :nom, :prix)";

    $statement = $this->DB->prepare($sql);

    $retour = $statement->execute([
      ':id_nuit' => $Nuit->getIdNuit(),
      ':nom' => $Nuit->getNom(),
      ':prix' => $Nuit->getPrix()

    ]);

    return $retour;
    // return $this->DB->lastInsertId();
  }

  public function UpdateThisNuit(Nuit $Nuit): bool{
    $sql = "UPDATE ". PREFIXE . "nuit
            SET
            id_nuit = :id_nuit,
            nom = :nom,
            prix = :prix,
            WHERE id_nuit = :id_nuit";

    $statement = $this->DB->prepare($sql);

    $retour = $statement->execute([
      ':id_nuit' => $Nuit->getIdNuit(),
      ':nom' => $Nuit->getNom(),
      ':prix' => $Nuit->getPrix()
  
      ]);

    return $retour;
  }

}