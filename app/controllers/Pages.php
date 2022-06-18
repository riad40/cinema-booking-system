<?php
class Pages extends Controller {
    public function __construct() {
        $this->userModel = $this->model('User');
        $this->movieModel = $this->model('Movie');
        $this->contactusModel = $this->model('ContactUs');
    }

    public function index() {
        // Get all movies
        $movies = $this->movieModel->showMovies();
        $data = [
            'movies' => $movies,
            'errors' => '',
            'success' => ''
        ];

        // get data from contact us form
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'movies' => $movies,
                'name' => trim($_POST['fname']),
                'email' => trim($_POST['email']),
                'message' => trim($_POST['message']),
                'errors' => '',
                'success' => ''
            ];

            // validate data
            if (empty($data['name']) || empty($data['email']) || empty($data['message'])) {
                $data['errors'] = 'Please fill in all fields';
            }
            // validate email 
            if(!empty($data['name'])) {
                if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                    $data['errors'] = 'Please enter a valid email';
                }
            }
            // if no errors, add message to database
            if (empty($data['errors'])) {
                if ($this->contactusModel->addMessage($data)) {
                    $data['success'] = 'Message sent';
                } else {
                    $data['errors'] = 'Something went wrong';
                }
            }

        }
        $this->view('index', $data);
    }
}
