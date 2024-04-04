<?php

namespace src\Repositories;

use PDO;
use PDOException;
use src\Models\Option;
use src\Models\Database;

class OptionRepository
{
    private $DB;

    public function __construct()
    {
        $database = new Database;
        $this->DB = $database->getDB();

        require_once __DIR__ . '/../../config.php';
    }

    public function getAllOptions()
    {
        $sql = "SELECT * FROM " . PREFIXE . "option;";

        $retour = $this->DB->query($sql)->fetchAll(PDO::FETCH_CLASS, Option::class);

        return $retour;
    }

    public function getThisOptionById(int $id_option): Option|bool
    {
        $sql = "SELECT * FROM " . PREFIXE . "option WHERE id_option = :id_option";

        $statement = $this->DB->prepare($sql);
        $statement->bindParam(':id_option', $id_option);
        $statement->execute();
        $statement->setFetchMode(PDO::FETCH_CLASS, Option::class);
        $retour = $statement->fetch();

        return $retour;
    }


    public function CreateThisOption(Option $Option): bool
    {
        $sql = "INSERT INTO " . PREFIXE . "option (id_option, nom, prix) VALUES (:id_option, :nom, :prix)";

        $statement = $this->DB->prepare($sql);

        $retour = $statement->execute([
            ':id_option' => $Option->getIdOption(),
            ':nom' => $Option->getNom(),
            ':prix' => $Option->getPrix()

        ]);

        return $retour;
        // return $this->DB->lastInsertId();
    }

    public function UpdateThisOption(Option $Option): bool
    {
        $sql = "UPDATE " . PREFIXE . "option
            SET
            id_option = :id_option,
            nom = :nom,
            prix = :prix
            WHERE id_option = :id_option";

        $statement = $this->DB->prepare($sql);

        $retour = $statement->execute([
            ':id_option' => $Option->getIdOption(),
            ':nom' => $Option->getNom(),
            ':prix' => $Option->getPrix()

        ]);

        return $retour;
    }

}
