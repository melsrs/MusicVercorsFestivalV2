<?php

namespace src\Models;

use PDO;
use PDOException;

final class Database
{
  private $DB;
  private $config;

  public function __construct()
  {
    $this->config = __DIR__ . '/../../config.php';
    require_once $this->config;

    try {
      $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME;
      $this->DB = new PDO($dsn, DB_USER, DB_PWD, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    } catch (PDOException $error) {
      echo "Erreur de connexion à la Base de Données : " . $error->getMessage();
    }
  }

  /**
   * Retourne la connexion BDD établie et l'objet PDO associé.
   */
  public function getDB(): PDO
  {
    return $this->DB;
  }

  /**
   * Initialisation de la Base de Données : installation des tables et mise à jour du fichier config.php
   * @return string message d'échec ou de réussite.
   */
  public function initialisationBDD(): string
  {

    // Vérifier si la base de données est vide
    if ($this->testIfTableReservationExists()) {
      return "La base de données semble déjà remplie.";
      die();
    } else {
      // Télécharger le(s) fichier(s) sql d'initialisation dans la BDD
      // Et effectuer les différentes migrations
      try {
        $i = 0;
        $migrationExistante = TRUE;
        while ($migrationExistante === TRUE) {
          $migration = __DIR__ . "/../Controllers/Migrations/migration.sql";
          if (file_exists($migration)) {
            $sql = file_get_contents($migration);
            $this->DB->query($sql);
            $i++;
          } else {
            $migrationExistante = FALSE;
          }
        }

        // Mettre à jour le fichier config.php
        if ($this->UpdateConfig()) {
          return "installation de la Base de Données terminée !";
        }
      } catch (PDOException $erreur) {
        return "impossible de remplir la Base de données : " . $erreur->getMessage();
      }
    }
  }

  /**
   * Vérifie si la table Reservation existe déjà dans la BDD
   * @return bool
   */
  private function testIfTableReservationExists(): bool
  {
    $existant = $this->DB->query('SHOW TABLES FROM ' . DB_NAME . ' like \'%ver_reservation%\'')->fetch();

    if ($existant !== false && $existant[0] == PREFIXE . "ver_reservation") {
      return true;
    } else {
      return false;
    }
  }


  private function UpdateConfig(): bool
  {

    $fconfig = fopen($this->config, 'w');

    $contenu = "<?php
      // lors de la mise en open source, remplacer les infos concernant la base de données.
      
      define('DB_HOST', '" . DB_HOST . "');
      define('DB_NAME', '" . DB_NAME . "');
      define('DB_USER', '" . DB_USER . "');
      define('DB_PWD', '" . DB_PWD . "');
      define('PREFIXE', '" . PREFIXE . "');
      
      // Si le nom de domaine ne pointe pas vers le dossier public, indiquer le chemin entre le nom de domaine et le dossier public.
      // exemple: /mon-site/public/
      define('HOME_URL', '" . HOME_URL . "');
      
      // Ne pas toucher :
      
      define('DB_INITIALIZED', TRUE);";


    if (fwrite($fconfig, $contenu)) {
      fclose($fconfig);
      return true;
    } else {
      return false;
    }
  }
}


// require_once ('Reservation.php'); 

// class Database {
//   private $_DBPath;

//   public function __construct(){
//     $this->_DBPath = __DIR__ . '/../csv/reservations.csv';
//   }

//   public function getDatabase() : string {
//     return $this->_DBPath;
//   }

//   public function setDatabase(string $database) {
//     $this->_DBPath = $database;
//   }

//   public function getAllReservations(): array {
//     $connexion = fopen($this->_DBPath, 'r');
//     $reservations = [];

//     while (($reservation = fgetcsv($connexion, 1000, ","))) {
//       if (empty($reservation[0])) continue;
//       $reservations[] = new Reservation($reservation[0], $reservation[1], $reservation[2], $reservation[3], $reservation[4], $reservation[5], $reservation[6], $reservation[7], $reservation[8], $reservation[9], $reservation[10], $reservation[11]);
//     }
//     fclose($connexion);
//     return $reservations;
//   }

//   public function saveReservation(Reservation $reservation): bool {
//     $connexion = fopen($this->_DBPath, 'ab');
//     $retour = fputcsv($connexion, $reservation->getObjectToArray());
//     fclose($connexion);
//     return $retour;
//   }
// }
