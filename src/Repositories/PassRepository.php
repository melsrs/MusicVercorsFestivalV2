<?php

namespace src\Repositories;

use PDO;
use PDOException;
use src\Models\Pass;
use src\Models\Database;

class PassRepository
{
    private $DB;

    public function __construct()
    {
        $database = new Database;
        $this->DB = $database->getDB();

        require_once __DIR__ . '/../../config.php';
    }

    public function getAllPass()
    {
        $sql = "SELECT * FROM " . PREFIXE . "pass;";

        $retour = $this->DB->query($sql)->fetchAll(PDO::FETCH_CLASS, Pass::class);

        return $retour;
    }

    public function getThisPassById(int $id_pass): Pass|bool
    {
        $sql = "SELECT * FROM " . PREFIXE . "pass WHERE id_pass = :id_pass";

        $statement = $this->DB->prepare($sql);
        $statement->bindParam(':id_pass', $id_pass);
        $statement->execute();
        $statement->setFetchMode(PDO::FETCH_CLASS, Pass::class);
        $retour = $statement->fetch();

        return $retour;
    }


    public function CreateThisPass(Pass $Pass): bool
    {
        $sql = "INSERT INTO " . PREFIXE . "pass (id_pass, nom, prix, tarif_reduit) VALUES (:id_pass, :nom, :prix, :tarif_reduit)";

        $statement = $this->DB->prepare($sql);

        $retour = $statement->execute([
            ':id_pass' => $Pass->getIdPass(),
            ':nom' => $Pass->getNom(),
            ':prix' => $Pass->getPrix(),
            ':tarif_reduit' => $Pass->getTarifReduit()

        ]);

        return $retour;
        // return $this->DB->lastInsertId();
    }

    public function UpdateThisPass(Pass $Pass): bool
    {
        $sql = "UPDATE " . PREFIXE . "pass
            SET
            id_pass = :id_pass,
            nom = :nom,
            prix = :prix,
            tarif_reduit = :tarif_reduit,
            WHERE id_pass = :id_pass";

        $statement = $this->DB->prepare($sql);

        $retour = $statement->execute([
            ':id_pass' => $Pass->getIdPass(),
            ':nom' => $Pass->getNom(),
            ':prix' => $Pass->getPrix(),
            ':tarif_reduit' => $Pass->getTarifReduit()

        ]);

        return $retour;
    }
}
