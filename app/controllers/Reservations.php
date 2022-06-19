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
                    'reserved_seats' => $reserved_seats,
                    'errors' => ''
                ];
            }
            // check for post request 
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                // get form data
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                $reservation = $this->reservationModel->getReservationById($id);
                $user = $this->userModel->getUserById($_SESSION['user_id']);
                $movie = $this->movieModel->getMovieById($id);
                $data = [
                    'movie_id' => $id,
                    'user_id' => $_SESSION['user_id'],
                    'seats_reserved' => $_POST['seats_reserved'],
                    'reservation' => $reservation,
                    'user' => $user,
                    'movie' => $movie,
                    'errors' => ''
                ]; 
                if(!empty($data['seats_reserved']) && preg_match("/^\d+(\,\d+)*$/", $data['seats_reserved'])) {
                    if ($this->reservationModel->addReservation($data)) {
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
                } else {
                    $data['errors'] = 'Please Choose a valid seats';
                }
            }
            $this->view('reservations/reserve', $data);
        }
        // generate ticket method
        public function generate_ticket($id) {
            // Check if logged in
            if (!isset($_SESSION['user_id'])) {
                header('Location: ' . URLROOT . '/users/login');
            }
            $movie_reserved = $this->reservationModel->getReservationWithData($id);
            $data = [
                'title' => 'Generate Ticket',
                'movie_reserved' => $movie_reserved,
                'errors' => ''
            ];
            $this->view('reservations/generate_ticket', $data);
        }
    }