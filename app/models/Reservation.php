<?php

    class Reservation {
        private $db;

        public function __construct() {
            $this->db = new Database;
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
    }