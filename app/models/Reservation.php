<?php

    class Reservation {
        private $db;

        public function __construct() {
            $this->db = new Database;
        }
        // get all reservations
        public function getAllReservations() {
            $this->db->query('SELECT * FROM reservations');
            $rows = $this->db->resultSet();
            return $rows;
        }
        // insert new reservation
        public function addReservation($data) {
            $this->db->query('INSERT INTO reservations VALUES(NULL, :seats_reserved	, :user_id, :movie_id)');
            // Bind values
            $this->db->bind(':seats_reserved', $data['seats_reserved']);
            $this->db->bind(':user_id', $data['user_id']);
            $this->db->bind(':movie_id', $data['movie_id']);
            // Execute
            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }
        // get reserved seats for a specific movie
        public function getReservedSeats($id) {
            $this->db->query('SELECT GROUP_CONCAT(reservations.seats_reserved SEPARATOR \',\') AS reserved_seats FROM reservations WHERE movie_id = :id');
            $this->db->bind(':id', $id);
            $row = $this->db->single();
            return $row;
        }
        // check if a user does not exist anymore in the database and delete all reservations for that user
        public function deleteReservationsByUser($id) {
            $this->db->query('DELETE FROM reservations WHERE user_id = :id');
            $this->db->bind(':id', $id);
            $this->db->execute();
        }
        // check if a movie does not exist anymore in the database and delete all reservations for that movie
        public function deleteReservationsByMovie($id) {
            $this->db->query('DELETE FROM reservations WHERE movie_id = :id');
            $this->db->bind(':id', $id);
            $this->db->execute();
        }
        // get count all reservations
        public function getCountReservations() {
            $this->db->query('SELECT COUNT(*) AS count FROM reservations');
            $row = $this->db->single();
            return $row;
        }
        // get all reservation and user and movie data
        public function getAllReservationsWithData() {
            $this->db->query('SELECT reservations.reservation_id, reservations.seats_reserved, reservations.user_id, reservations.movie_id, users.user_fname, users.user_email, movies.movie_title, movies.movie_playing_date FROM reservations INNER JOIN users ON reservations.user_id = users.user_id INNER JOIN movies ON reservations.movie_id = movies.movie_id');
            $rows = $this->db->resultSet();
            return $rows;
        }
        // get reservation by id
        public function getReservationById($id) {
            $this->db->query('SELECT * FROM reservations WHERE reservation_id = :id');
            $this->db->bind(':id', $id);
            $row = $this->db->single();
            return $row;
        }
        // get all reservations for a specific user
        public function getReservationsByUser($id) {
            $this->db->query('SELECT reservations.seats_reserved FROM reservations WHERE user_id = :id');
            $this->db->bind(':id', $id);
            $rows = $this->db->resultSet();
            return $rows;
        }
        // get a all reservations for a specific user with movie data
        public function getReservationsByUserWithData($id) {
            $this->db->query('SELECT reservations.reservation_id, reservations.seats_reserved, reservations.user_id, reservations.movie_id, users.user_fname, users.user_email, movies.movie_title, movies.movie_playing_date FROM reservations INNER JOIN users ON reservations.user_id = users.user_id INNER JOIN movies ON reservations.movie_id = movies.movie_id WHERE reservations.user_id = :id');
            $this->db->bind(':id', $id);
            $rows = $this->db->resultSet();
            return $rows;
        }
        // get a specific reservation with user and movie data
        public function getReservationWithData($id) {
            $this->db->query('SELECT reservations.reservation_id, reservations.seats_reserved, users.user_fname, users.user_email, users.user_phone, movies.movie_title, movies.movie_duration, movies.movie_playing_date FROM reservations INNER JOIN users ON reservations.user_id = users.user_id INNER JOIN movies ON reservations.movie_id = movies.movie_id WHERE reservations.reservation_id = :id');
            $this->db->bind(':id', $id);
            $row = $this->db->single();
            return $row;
        } 
    }