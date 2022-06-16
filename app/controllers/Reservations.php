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
                $data = [
                    'movie_id' => $id,
                    'user_id' => $_SESSION['user_id'],
                    'seats_reserved' => $_POST['seats_reserved']
                ]; 
                // insert data from reservtion model
                if ($this->reservationModel->addReservation($data)) {
                    echo 'reservation added';
                } else {
                    die('Something went wrong');
                }      
            }
        }
        
    }