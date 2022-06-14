<?php

    class Movies extends Controller {
        
        public function __construct() {
            $this->movieModel = $this->model('Movie');
        }
        
        public function movie_detail() {
            $this->view('movies/movie_detail');
        }
        
        public function reserve() {
            $this->view('movies/reserve');
        }

    }