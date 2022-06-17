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
        // get movie by id
        public function getMovieById($id) {
            $this->db->query('SELECT * FROM movies WHERE movie_id = :id');
            $this->db->bind(':id', $id);
            $row = $this->db->single();
            return $row;
        }
        // update movie
        public function updateMovie($data) {
            $this->db->query('UPDATE movies SET movie_title = :title, movie_type = :type, movie_duration = :duration, movie_released_at = :release_date, movie_rating = :rating, movie_language = :language, movie_playing_date = :playing_date, movie_ticket_price = :ticket_price, movie_story = :story, movie_cover = :cover, movie_triler = :trailer WHERE movie_id = :id');
            // Bind values
            $this->db->bind(':id', $data['id']);
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
        // delete movie
        public function deleteMovie($id) {
            // set foreign key constraint to 0
            $this->db->query('SET FOREIGN_KEY_CHECKS = 0');
            $this->db->execute();
            // delete movie
            $this->db->query('DELETE FROM movies WHERE movie_id = :id');
            // Bind values
            $this->db->bind(':id', $id);
            // Execute
            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }
            // set foreign key constraint to 1
            $this->db->query('SET FOREIGN_KEY_CHECKS = 1');
            $this->db->execute();
        }
        // count all movies
        public function getMovieCount() {
            $this->db->query('SELECT COUNT(*) AS c FROM movies');
            $row = $this->db->single();
            return $row;
        }
        
    }
