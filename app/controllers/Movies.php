<?php

    class Movies extends Controller {
        
        public function __construct() {
            // parent::__construct();
        }
        
        public function index() {
            $this->view('movies/movie_detail');
        }
        
        public function reserve() {
            $this->view('movies/reserve');
        }

    }