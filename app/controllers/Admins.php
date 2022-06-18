<?php

    class Admins extends Controller {
        
        public function __construct() {
            $this->adminModel = $this->model('Admin');
            $this->movieModel = $this->model('Movie');
            $this->userModel = $this->model('User');
            $this->reservationModel = $this->model('Reservation');
        }
        
        public function index() {

            $data = [
                'title' => 'login',
                'email' => '',
                'password' => '',
                'email_err' => '',
                'pwd_err' => ''
            ];

            // check for POST
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                // process form data
                // sanitize POST data
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                
                // init data
                $data = [
                    'email' => trim($_POST['email']),
                    'password' => trim($_POST['pwd']),
                    'email_err' => '',
                    'password_err' => '',
                ];
                // validate email
                if (empty($data['email'])) {
                    $data['email_err'] = 'Please enter email';
                }
                // validate password
                if (empty($data['password'])) {
                    $data['password_err'] = 'Please enter password';
                }
                // make sure errors are empty
                if (empty($data['email_err']) && empty($data['password_err'])) {
                    // check and login
                    $admin = $this->adminModel->login($data['email'], $data['password']);
                    if ($admin) {
                        // create session
                        session_start();
                        $_SESSION['admin_id'] = $admin->admin_id;
                        $_SESSION['admin_name'] = $admin->admin_name;
                        $_SESSION['admin_email'] = $admin->admin_email;
                        $_SESSION['admin_phone'] = $admin->admin_phone;
                        // redirect to dashboard
                        header('Location: ' . URLROOT . '/admins/dashboard');
                    } else {
                        $data['password_err'] = 'Password incorrect';
                        $this->view('admins/index', $data);
                    }
                } else {
                    // load view with errors
                    $this->view('admins/index', $data);
                }
            }

            $this->view('admins/index', $data);
        }

        public function dashboard() {
            // check if admin is logged in
            if (!isset($_SESSION['admin_id'])) {
                header('Location: ' . URLROOT . '/admins');
            }
            $admin = $this->adminModel->getAdminById($_SESSION['admin_id']);
            $data = [
                'page' => 'dashboard',                
                'admin' => $admin,
            ];
            $data['user_count'] = $this->adminModel->getUserCount();
            $data['movie_count'] = $this->movieModel->getMovieCount();
            $data['reservation_count'] = $this->reservationModel->getCountReservations();
            $this->view('admins/dashboard', $data);
        }

        public function movies() {
            
            if (!isset($_SESSION['admin_id'])) {
                header('Location: ' . URLROOT . '/admins');
            }
            $movies = $this->movieModel->showMovies();
            $admin = $this->adminModel->getAdminById($_SESSION['admin_id']);
            $data = [
                'page' => 'movies',                
                'movies' => $movies,
                'admin' => $admin,

            ];
            $this->view('admins/movies', $data);
        }
        public function customers() {
            
            if (!isset($_SESSION['admin_id'])) {
                header('Location: ' . URLROOT . '/admins');
            }
            $customers = $this->userModel->getAllUsers();
            $admin = $this->adminModel->getAdminById($_SESSION['admin_id']);
            $data = [
                'page' => 'customers',                
                'customers' => $customers,
                'admin' => $admin,
            ];
            $this->view('admins/customers', $data);
        }
        public function reservations() {
            
            if (!isset($_SESSION['admin_id'])) {
                header('Location: ' . URLROOT . '/admins');
            }
            $reservation = $this->reservationModel->getAllReservationsWithData();           
            $admin = $this->adminModel->getAdminById($_SESSION['admin_id']);
            $data = [
                'page' => 'reservations',                
                'reservations' => $reservation,
                'admin' => $admin,
            ];
            $this->view('admins/reservations', $data);
        }
        // add movie
        public function add_movie() {
            if (!isset($_SESSION['admin_id'])) {
                header('Location: ' . URLROOT . '/admins');
            }
            $admin = $this->adminModel->getAdminById($_SESSION['admin_id']);
            $data = [
                'page' => 'add movie',
                'admin' => $admin,
                'title' => '',
                'type' => '',
                'duration' => '',
                'release_date' => '',
                'rating' => '',
                'language' => '',
                'playing_date' => '',
                'ticket_price' => '',
                'story' => '',
                'cover' => '',
                'trailer' => '',
                'errors' => '',
                'success' => ''
            ];
            // check for POST
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                // process form data
                // sanitize POST data
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                
                // init data
                $data = [
                    'page' => 'add movie',
                    'admin' => $admin,
                    'title' => trim($_POST['movie_title']),
                    'type' => trim($_POST['movie_type']),
                    'duration' => trim($_POST['movie_duration']),
                    'release_date' => trim($_POST['movie_released']),
                    'rating' => trim($_POST['movie_rating']),
                    'language' => trim($_POST['movie_lang']),
                    'playing_date' => trim($_POST['movie_released']),
                    'ticket_price' => trim($_POST['movie_ticket_price']),
                    'story' => trim($_POST['movie_story']),
                    'cover' => $_FILES['movie_cover']['name'],
                    'temp_image' => $_FILES['movie_cover']['tmp_name'],
                    'folder' => 'C:/Users/Youcode/Desktop/xampp/htdocs/cinema-wave/public/assets/images/' . $_FILES['movie_cover']['name'],
                    'trailer' => $_FILES['movie_triler']['name'],
                    'temp_vid' => $_FILES['movie_cover']['tmp_name'],
                    'folderv' => 'C:/Users/Youcode/Desktop/xampp/htdocs/cinema-wave/public/assets/trailers/' . $_FILES['movie_cover']['name'],
                    'errors' => '',
                    'success' => ''
                ];
                // validate data inputs
                if (empty($data['title']) || empty($data['type']) || empty($data['duration']) || empty($data['release_date']) || empty($data['rating']) || empty($data['language']) || empty($data['playing_date']) || empty($data['ticket_price']) || empty($data['story']) || empty($data['cover']) || empty($data['trailer'])) {
                    $data['errors'] = 'Please fill in all fields';
                }
                // move image to folder
                if (!empty($data['cover'])) {
                    move_uploaded_file($data['temp_image'], $data['folder']);
                }
                // move trailer to folderv
                if (!empty($data['trailer'])) {
                    move_uploaded_file($data['temp_vid'], $data['folderv']);
                }
                // make sure no errors
                if (empty($data['errors'])) {
                    // validate
                    if ($this->movieModel->addMovie($data)) {
                        // echo 'Movie added';
                        header('Location: ' . URLROOT . '/admins/movies?add=success');
                    } else {
                        die('Something went wrong');
                    }
                }
            }
            $this->view('admins/add_movie', $data);
        }
        // update movie
        public function update_movie($id) {
            if (!isset($_SESSION['admin_id'])) {
                header('Location: ' . URLROOT . '/admins');
            }
            // get movie from model
            $movie = $this->movieModel->getMovieById($id);
            $admin = $this->adminModel->getAdminById($_SESSION['admin_id']);
            // check if movie exists
            $data = [
                'page' => 'update movie',
                'id' => $movie->movie_id,
                'title' => $movie->movie_title,
                'type' => $movie->movie_type,
                'duration' => $movie->movie_duration,
                'release_date' => $movie->movie_released_at,
                'rating' => $movie->movie_rating,
                'language' => $movie->movie_language,
                'playing_date' => $movie->movie_playing_date,
                'ticket_price' => $movie->movie_ticket_price,
                'story' => $movie->movie_story,
                'cover' => $movie->movie_cover,
                'trailer' => $movie->movie_triler,
                'admin' => $admin,
                'errors' => '',
                'success' => ''
            ];
            // check for POST
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                
                // init data
                $data = [
                    'id' => $id,
                    'page' => 'update movie',
                    'title' => trim($_POST['movie_title']),
                    'type' => trim($_POST['movie_type']),
                    'duration' => trim($_POST['movie_duration']),
                    'release_date' => trim($_POST['movie_released']),
                    'rating' => trim($_POST['movie_rating']),
                    'language' => trim($_POST['movie_lang']),
                    'playing_date' => trim($_POST['movie_playing_date']),
                    'ticket_price' => trim($_POST['movie_ticket_price']),
                    'story' => trim($_POST['movie_story']),
                    'cover' => $_FILES['movie_cover']['name'],
                    'temp_image' => $_FILES['movie_cover']['tmp_name'],
                    'folder' => 'C:/Users/Youcode/Desktop/xampp/htdocs/cinema-wave/public/assets/images/' . $_FILES['movie_cover']['name'],
                    'trailer' => $_FILES['movie_triler']['name'],
                    'temp_vid' => $_FILES['movie_cover']['tmp_name'],
                    'folderv' => 'C:/Users/Youcode/Desktop/xampp/htdocs/cinema-wave/public/assets/trailers/' . $_FILES['movie_cover']['name'],
                    'admin' => $admin,
                    'errors' => '',
                    'success' => ''
                ];
                // validate data inputs
                if (empty($data['title']) || empty($data['type']) || empty($data['duration']) || empty($data['release_date']) || empty($data['rating']) || empty($data['language']) || empty($data['playing_date']) || empty($data['ticket_price']) || empty($data['story']) || empty($data['cover']) || empty($data['trailer'])) {
                    $data['errors'] = 'Please fill in all fields';
                }
                // move image to folder
                if (!empty($data['cover'])) {
                    move_uploaded_file($data['temp_image'], $data['folder']);
                }
                // move trailer to folderv
                if (!empty($data['trailer'])) {
                    move_uploaded_file($data['temp_vid'], $data['folderv']);
                }
                // make sure no errors
                if (empty($data['errors'])) {
                    if ($this->movieModel->updateMovie($data)) {
                        echo '<script>
                                window.location.href = "http://localhost/cinema-wave/admins/movies?edit=success";
                             </script>';

                    } else {
                        die('Something went wrong');
                    }
                }
            }
            $this->view('admins/update_movie', $data);
        }
        // delete movie
        public function delete_movie($id){
            $movie = $this->movieModel->getMovieById($id);
            $data = [
                'movie' => $movie,
                'id' => $movie->movie_id
            ];
            $id = $data['id'];
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                if ($this->movieModel->deleteMovie($id)) {
                    echo '<script>
                            window.location.href = "http://localhost/cinema-wave/admins/movies";
                         </script>';
                } else {
                    die('Something went wrong');
                }
            }
        }
        // delete user
        public function delete_user($id){
            $user = $this->userModel->getUserById($id);
            $data = [
                'user' => $user,
                'id' => $user->user_id
            ];
            $id = $data['id'];
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                if ($this->userModel->deleteUser($id)) {
                    // echo 'User deleted';
                    // try to delete a user's reservations and catch error if any
                    try {
                        $this->reservationModel->deleteReservationsByUser($id);
                        // js redirect to customers
                        echo '<script>
                                window.location.href = "http://localhost/cinema-wave/admins/customers";
                             </script>';
                    } catch (\Exception $e) {
                        die($e->getMessage());
                    }   
                } else {
                    die('Something went wrong');
                }
            }
        }
        // admin logout
        public function logout() {
            // unset session variables
            session_start();
            unset($_SESSION['admin_id']);
            unset($_SESSION['admin_name']);
            unset($_SESSION['admin_email']);
            unset($_SESSION['admin_phone']);
            session_destroy();
            header('Location: ' . URLROOT . '/admins');
        }
        
    }