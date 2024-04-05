<?php

namespace src\Controllers;

use src\Models\Reservation;
use src\Repositories\ReservationRepository;

use src\Services\Reponse;

class ReservationController
{
    private $ReservationRepo;

    use Reponse;

    public function __construct()
    {
        $this->ReservationRepo = new ReservationRepository();
    }

    public function index()
    {
        $reservations = $this->ReservationRepo->getAllReservations();
        $this->render("Dashboard", ['reservations' => $reservations]);
    }
   

        public function save($data) {
        
        // var_dump($this->ReservationRepo);
        // var_dump($_POST['nombrePlaces']);
        
//             if (
//                 !empty($_POST) &&
//                 isset($_POST['nombrePlaces']) &&
//                 isset($_POST['prix_total']) &&
//                 isset($_POST['id_user']) 
               
//             ) {
//                 $nombrePlaces = htmlspecialchars($_POST['nombrePlaces']);
//                 $prix_total = htmlspecialchars($_POST['prix_total']);
//                 $id_user = htmlspecialchars($_POST['id_user']);
        
                
        
//         $newResa = new Reservation(
            
//             null,
//             $nombrePlaces,
//             $prix_total,
//             $id_user

            
        
//         );
//         var_dump($nombrePlaces);
//         // $ReservationRepo = new ReservationRepository();
        
      
//         $resaId = $this->ReservationRepo->CreateThisReservation($newResa);
        
//         var_dump('hello');
//     }
// }
      
        foreach ($data as $key => $value) {
            // var_dump($key);
            // On enlève les catégories du formatage, car c'est un tableau
            if (!is_array($value)) {
                $data[$key] = htmlspecialchars($value);
            }
        }
        $newResa = new Reservation(
            null, 
            $nombre_resa,
            $prix_total,
            $id_user
        );


        $newResa->setNombreResa($data['nombrePlaces']);
        $newResa->setIdReservation($data['null']);
        $newResa->setPrixTotal($data['null']);
        $newResa->setIdUser($data['null']);

var_dump($newResa);
        $ReservationRepo = new ReservationRepository();

        $reservationId = $ReservationRepo->CreateThisReservation($newResa);
        echo($reservationId);
}
        }

//         // if (isset($data['id_reservation']) && !empty($data['id_reservation'])) {
//         //     $reservation->setIdReservation($data['id_reservation']);
      
//             // $reservation->setIdReservation([]);
//         // }
//         var_dump('hello');
//         // if (
//         //     !empty($reservation->getIdReservation()) &&
//         //     !empty($reservation->getNombreResa()) &&
//         //     !empty($reservation->getPrixTotal()) &&
//         //     !empty($reservation->getIdUser())
//         // ) {

//             //   } else {
//                 // var_dump('hello2');
//             // $reservation = $this->ReservationRepo->CreateThisReservation($reservation);
//         }
//     }
// // }

