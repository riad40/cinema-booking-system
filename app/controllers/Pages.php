<?php
class Pages extends Controller {
    public function __construct() {
        $this->userModel = $this->model('User');
        $this->movieModel = $this->model('Movie');
    }

    public function index() {
        // Get all movies
        $movies = $this->movieModel->showMovies();
        $data = [
            'movies' => $movies
        ];

        $this->view('index', $data);
    }
}
