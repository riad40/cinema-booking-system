<?php

    class Reservations extends Controller {
        
        public function __construct() {
            $this->reservationModel = $this->model('Reservation');
            $this->movieModel = $this->model('Movie');
            $this->userModel = $this->model('User');
        }
        
        public function reserve($id) {            
            // check if user is logged in
            if(!isset($_SESSION['user_id'])) {
                // redirect to login
                header('Location: ' . URLROOT . '/users/login');
            } else {
                $movie = $this->movieModel->getMovieById($id);
                $reserved_seats = $this->reservationModel->getReservedSeats($id);
                $data = [
                    'movie' => $movie,
                    'reserved_seats' => $reserved_seats
                ];
                $id = $movie->movie_id;
                $this->view('reservations/reserve', $data);
            }
            // check for post request 
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                // get form data
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                $reservation = $this->reservationModel->getReservationById($id);
                $user = $this->userModel->getUserById($_SESSION['user_id']);
                $movie = $this->movieModel->getMovieById($id);
                $id = $movie->movie_id;
                $data = [
                    'movie_id' => $id,
                    'user_id' => $_SESSION['user_id'],
                    'seats_reserved' => $_POST['seats_reserved'],
                    'reservation' => $reservation,
                    'user' => $user,
                    'movie' => $movie
                ]; 


                // insert data from reservtion model
                if ($this->reservationModel->addReservation($data)) {
                    // try to redirect the user to generate ticket view and catch error if something went wrong
                    try {
                        echo '<script>
                                window.location.href = "http://localhost/cinema-wave/users/profile";
                            </script>';
                    } catch (Exception $e) {
                        die($e->getMessage());
                    } 
                } else {
                    die('Something went wrong');
                }      
            }
        }
        // gernerate ticket method 
        public function generate_ticket($id) {
            $reservation = $this->reservationModel->getReservationById($id);
            $user = $this->userModel->getUserById($reservation->user_id);
            $movie = $this->movieModel->getMovieById($reservation->movie_id);
            $id = $reservation->reservation_id;
            $data = [
                'id' => $id,
                'reservation' => $reservation,
                'user' => $user,
                'movie' => $movie
            ];
            $this->view('reservations/generate_ticket', $data); 
        }

        
    }