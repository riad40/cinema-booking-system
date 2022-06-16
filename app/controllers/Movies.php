<?php

    class Movies extends Controller {
        
        public function __construct() {
            $this->movieModel = $this->model('Movie');
        }
        
        public function movie_detail($id) {
            // show a single movie
            $movie = $this->movieModel->getMovieById($id);
            $movies = $this->movieModel->showMovies();
            $data = [
                'movies' => $movies,
                'movie' => $movie,
                'id' => $movie->movie_id
            ];
            $id = $movie->movie_id;
            $this->view('movies/movie_detail', $data);
        }

    }