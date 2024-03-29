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

    //   public function show($id)
    //   {
    //     $film = $this->FilmRepo->getThisFilmById($id);
    //     $this->render('Dashboard', ['section' => 'films', 'action' => 'details', 'film' => $film]);
    //   }

    //   public function edit($id)
    //   {
    //     $film = $this->FilmRepo->getThisFilmById($id);
    //     $categories = $this->CategoryRepo->getAllCategories();
    //     $classifications = $this->ClassificationRepo->getAllClassifications();
    //     $this->render('Dashboard', ['section' => 'films', 'action' => 'edit', 'film' => $film, 'categories' => $categories, 'classifications' => $classifications]);
    //   }

    //   public function new()
    //   {
    //     $categories = $this->CategoryRepo->getAllCategories();
    //     $classifications = $this->ClassificationRepo->getAllClassifications();
    //     $this->render('Dashboard', ['section' => 'films', 'action' => 'new', 'categories' => $categories, 'classifications' => $classifications]);
    //   }

        public function save($data) {
//             if (
//                 !empty($_POST) &&
//                 isset($_POST['id_reservation']) &&
//                 isset($_POST['nombre_resa']) &&
//                 isset($_POST['prix_total']) &&
//                 isset($_POST['id_user']) 
               
//             ) {
//                 $id_reservation = htmlspecialchars($_POST['id_reservation']);
//                 $nombre_resa = htmlspecialchars($_POST['nombre_resa']);
//                 $prix_total = htmlspecialchars($_POST['prix_total']);
//                 $id_user = htmlspecialchars($_POST['id_user']);
        

        
//         $newResa = new Reservation(
            
//             $id_reservation,
//             $nombre_resa,
//             $prix_total,
//             $id_user
           
//         );
      
//         $ReservationRepository = new ReservationRepository();
      
//         $ReservationId = $ReservationRepository->CreateThisReservation($newResa);
//     }
// }
// }

      
        foreach ($data as $key => $value) {
            // var_dump($key);
            // On enlève les catégories du formatage, car c'est un tableau
            if (!is_array($value)) {
                $data[$key] = htmlspecialchars($value);
            }
        }
        $reservation = new Reservation();
        $reservation->setNombreResa($data['nombrePlaces']);
        $reservation->setIdReservation($data['passSelection']);
        $reservation->setPrixTotal($data['enfants']);
        $reservation->setIdUser($data['email']);




        var_dump($data);
        var_dump($reservation);

        if (isset($data['id_reservation']) && !empty($data['id_reservation'])) {
            $reservation->setIdReservation($data['id_reservation']);
        } else {
            $reservation->setIdReservation([]);
        }
        var_dump('hello');
        if (
            !empty($reservation->getIdReservation()) &&
            !empty($reservation->getNombreResa()) &&
            !empty($reservation->getPrixTotal()) &&
            !empty($reservation->getIdUser())
        ) {
        
            //   if ($id !== null) {
            //     $film->setId($id);
            //     $this->FilmRepo->updateThisFilm($film);

            //     $this->FilmRepo->removeFilmToCategories($film);
            //     $this->FilmRepo->addFilmToCategories($film);

            //   } else {
                // var_dump('hello2');
            $reservation = $this->ReservationRepo->CreateThisReservation($reservation);
        }

            // header('location: /dashboard/' .$reservation->getIdReservation());
            // die;


        }
    }


    //   }
    //   header('location: /dashboard/films/details/' . $film->getId());
    //   die;
    // }else {
    //   $categories = $this->CategoryRepo->getAllCategories();
    //   $classifications = $this->ClassificationRepo->getAllClassifications();
    //   if ($id !== null) {
    //     $this->render('Dashboard', ['section' => 'films', 'action' => 'edit', 'film' => $film, 'categories' => $categories, 'classifications' => $classifications, 'error' => 'Tous les champs sont requis.']);
    //     die;
    //   } else {
    //     $this->render('Dashboard', ['section' => 'films', 'action' => 'new', 'film' => $film, 'categories' => $categories, 'classifications' => $classifications, 'error' => 'Tous les champs sont requis.']);
    //     die;
    //   }
    // }

//   }

//   public function delete($id)
//   {
//     $this->FilmRepo->deleteThisFilm($id);
//     $films = $this->FilmRepo->getAllFilms();
//     $this->render("Dashboard", ['section' => 'films', 'films' => $films]);
//   }
// }