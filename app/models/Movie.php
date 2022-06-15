<?php
    class Movie {
        private $db;

        public function __construct() {
            $this->db = new Database;
        }
        // add new movie
        public function addMovie($data) {
            $this->db->query('INSERT INTO movies VALUES(NULL, :title, :type, :duration, :release_date, :rating, :language, :playing_date, :ticket_price, :story, :cover, :trailer)');
            // Bind values
            $this->db->bind(':title', $data['title']);
            $this->db->bind(':type', $data['type']);
            $this->db->bind(':duration', $data['duration']);
            $this->db->bind(':release_date', $data['release_date']);
            $this->db->bind(':rating', $data['rating']);
            $this->db->bind(':language', $data['language']);
            $this->db->bind(':playing_date', $data['playing_date']);
            $this->db->bind(':ticket_price', $data['ticket_price']);
            $this->db->bind(':story', $data['story']);
            $this->db->bind(':cover', $data['cover']);
            $this->db->bind(':trailer', $data['trailer']);
            // Execute
            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }
        // show all movies
        public function showMovies() {
            $this->db->query('SELECT * FROM movies');
            $results = $this->db->resultSet();
            return $results;
        }
        
    }
