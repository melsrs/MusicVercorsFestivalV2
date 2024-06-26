<?php
namespace src\Repositories;

use PDO;
use PDOException;
use src\Models\Reservation;
use src\Models\Database;

class ReservationRepository {
  private $DB;

  public function __construct()
  {
    $database = new Database;
    $this->DB = $database->getDB();

    require_once __DIR__ . '/../../config.php';
  }

  public function getAllReservations(){
    $sql = "SELECT * FROM ".PREFIXE."reservation;";

    $retour = $this->DB->query($sql)->fetchAll(PDO::FETCH_CLASS, Reservation::class);

    return $retour;
  }

  public function getThisReservationById(int $id_reservation): Reservation {
    $sql = "SELECT * FROM ".PREFIXE."reservation WHERE id_reservation = :id_reservation";

    $statement = $this->DB->prepare($sql);
    $statement->bindParam(':id_reservation', $id_reservation);
    $statement->execute();
    $statement->setFetchMode(PDO::FETCH_CLASS, Reservation::class);
    $retour = $statement->fetch();

    return $retour;
  }


  public function CreateThisReservation($newResa)
  {
    $sql = "INSERT INTO ". PREFIXE . "reservation (nombre_resa, prix_total, id_user) VALUES (:nombre_resa, :prix_total, :id_user)";

    $statement = $this->DB->prepare($sql);

    $statement->execute([
      ':nombre_resa' => $newResa->getNombreResa(),
      ':prix_total' => $newResa->getPrixTotal(),
      ':id_user' => $newResa->getIdUser()

    ]);

    return $this->DB->lastInsertId();
    $newResa->setIdReservation($id);

    return $newResa;
  }

  public function UpdateThisReservation(Reservation $Reservation): bool{
    $sql = "UPDATE ". PREFIXE . "reservation
            SET
              id_reservation = :id_reservation,
              nombre_resa = :nombre_resa,
              id_user = :id_user
            WHERE id_reservation = :id_reservation";

    $statement = $this->DB->prepare($sql);

    $retour = $statement->execute([
        ':id_reservation' => $Reservation->getIdReservation(),
        ':nombre_resa' => $Reservation->getNombreResa(),
        ':prix_total' => $Reservation->getPrixTotal(),
        ':id_user' => $Reservation->getIdUser()
  
      ]);

    return $retour;
  }

    public function deleteThisReservation(int $id_reservation): bool {
      try{
      $sql = "DELETE FROM " . PREFIXE . "date_nuit_int WHERE id_reservation = :id_reservation;
              DELETE FROM " . PREFIXE . "date_pass_int WHERE id_reservation = :id_reservation;
              DELETE FROM " . PREFIXE . "reservation WHERE id_reservation = :id_reservation;";
  
      $statement = $this->DB->prepare($sql);
  
      return $statement->execute([':id_reservation' => $id_reservation]);
  
      } catch(PDOException $error) {
        echo "Erreur de suppression : " . $error->getMessage();
        return FALSE;
      }
    }
}