<?php

    class Users extends Controller {
        
        public function __construct() {
            $this->userModel = $this->model('User');
            $this->reservationModel = $this->model('Reservation');
        }
        
        public function login() {
            $data = [
                'title' => 'Login',
                'email' => '',
                'pwd' => '',
                'email_err' => '',
                'pwd_err' => ''
            ];

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                // Sanitize POST data
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                // Process form data
                $data = [
                    'email' => trim($_POST['email']),
                    'pwd' => trim($_POST['pwd']),
                    'errors' => ''
                ];

                // validate inputs
                if(empty($data['email']) || empty($data['pwd'])) {
                    $data['errors'] = 'Please Enter Email and Password';
                } elseif(!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                    $data['errors'] = 'Please Enter a Valid Email';
                }
                // Make sure errors are empty
                if (empty($data['errors'])) {
                    // Check and set logged in user
                    $loggedInUser = $this->userModel->login($data['email'], $data['pwd']);
                    if ($loggedInUser) {
                        // Create Session
                        $this->createUserSession($loggedInUser);
                    } else {
                        $data['errors'] = 'Email or Password are incorrect';
                        $this->view('users/login', $data);
                    }
                }
            } else {
                $data = [
                    'email' => '',
                    'pwd' => '',
                    'errors' => ''
                ];
            }

            $this->view('users/login', $data);
        }

        // create user session
        public function createUserSession($user) {
            // Create session
            session_start();
            $_SESSION['user_id'] = $user->user_id;
            $_SESSION['user_fname'] = $user->user_fname;
            $_SESSION['user_email'] = $user->user_email;
            $_SESSION['user_phone'] = $user->user_phone;
            // Redirect to profile
            header('Location: ' . URLROOT . '/users/profile');
        }
        
        public function register() {

            $data = [
                'title' => 'Register',
                'fname' => '',
                'email' => '',
                'phone' => '',
                'pwd' => '',
                'Rpwd' => '',
                'errors' => ''
            ];

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                // Sanitize POST data
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                $data = [
                    'title' => 'Register',
                    'fname' => trim($_POST['fname']),
                    'email' => trim($_POST['email']),
                    'phone' => trim($_POST['phone']),
                    'pwd' => trim($_POST['pwd']),
                    'Rpwd' => trim($_POST['Rpwd']),
                    'errors' => '',
                    'resgitred' => ''
                ];

                // validate inputs
                if (empty($data['fname']) || empty($data['email']) || empty($data['phone']) || empty($data['pwd']) || empty($data['Rpwd'])) {
                    $data['errors'] = 'Please fill all fields';
                } elseif (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                    $data['errors'] = 'Please enter a valid email';
                } elseif ($this->userModel->findUserByEmail($data['email'])) {
                    $data['errors'] = 'Email already Taken';
                }
                // make sure errors are empty
                if (empty($data['errors'])) {
                    // hash password
                    $data['pwd'] = password_hash($data['pwd'], PASSWORD_DEFAULT);
                    // register user from model
                    if ($this->userModel->register($data)) {
                        header('Location: ' . URLROOT . '/users/login?registred=success');
                        // echo('User registered');
                    } else {
                        die('Something went wrong');
                    }
                }
            } 
            $this->view('users/register', $data);
        }
        public function logout() {
            session_start();
            unset($_SESSION['user_id']);
            unset($_SESSION['user_fname']);
            unset($_SESSION['user_email']);
            unset($_SESSION['user_phone']);
            session_destroy();
            header('Location: ' . URLROOT);
        }
        public function profile() {
            // Check if logged in
            if (!isset($_SESSION['user_id'])) {
                header('Location: ' . URLROOT . '/users/login');
            }
            $user = $this->userModel->getUserById($_SESSION['user_id']);
            $movie_reserved = $this->reservationModel->getReservationsByUserWithData($_SESSION['user_id']);
            $data = [
                'title' => 'Profile',
                'user' => $user,
                'movie_reserved' => $movie_reserved
            ];
            $this->view('users/profile', $data);
        }

        // delete a reservation
        public function cancelReservation($id) {
            // Check if logged in
            if (!isset($_SESSION['user_id'])) {
                header('Location: ' . URLROOT . '/users/login');
            }
            $movie_reserved = $this->reservationModel->getReservationById($id);
            // var_dump($movie_reserved);
            $data = [
                'movie_reserved' => $movie_reserved
            ];
            // check for get request
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                try {
                    $this->reservationModel->deleteReservation($id);
                    header('Location: ' . URLROOT . '/users/profile');
                } catch (Exception $e) {
                    die($e->getMessage());
                }
            } else {
                echo'something went wrong';
            }
        }
        public function edit_profile() {
            // Check if logged in
            if (!isset($_SESSION['user_id'])) {
                header('Location: ' . URLROOT . '/users/login');
            }
            $user = $this->userModel->getUserById($_SESSION['user_id']);
            $movie_reserved = $this->reservationModel->getReservationsByUserWithData($_SESSION['user_id']);
            $data = [
                'title' => 'Edit Profile',
                'user' => $user,
                'movie_reserved' => $movie_reserved,
                'errors' => ''
            ];
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $user = $this->userModel->getUserById($_SESSION['user_id']);
                // Sanitize POST data
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                $data = [
                    'user' => $user,
                    'movie_reserved' => $movie_reserved,
                    'title' => 'Update Profile',
                    'fname' => trim($_POST['fname']),
                    'email' => trim($_POST['email']),
                    'phone' => trim($_POST['phone']),
                    'pwd' => trim($_POST['pwd']),
                    'image' => $_FILES['profile-image']['name'],
                    'temp_image' => $_FILES['profile-image']['tmp_name'],
                    'folder' => 'C:/Users/Youcode/Desktop/xampp/htdocs/cinema-wave/public/assets/images/' . $_FILES['profile-image']['name'],
                    'id' => $_SESSION['user_id'],
                    'errors' => ''
                ];
                // upload image
                if (!empty($data['image'])) {
                    if (!move_uploaded_file($data['temp_image'], $data['folder'])) {
                        $data['errors'] = 'Something went wrong';
                    }
                } else {
                    $data['errors'] = 'Please upload an image';
                }
                // validate if all fields are filled
                if(empty($data['fname']) || empty($data['email']) || empty($data['phone']) || empty($data['pwd'])) {                
                    $data['errors'] = 'Please fill in all fields';
                }
                // validate email
                if(!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                    $data['errors'] = 'Please enter a valid email';
                }
                // make sure errors are empty
                if (empty($data['errors'])) {
                    // hash password
                    $data['pwd'] = password_hash($data['pwd'], PASSWORD_DEFAULT);
                    // register user from model
                    if ($this->userModel->updateUser($data)) {
                        header('Location: ' . URLROOT . '/users/profile?updated=success');
                    } else {
                        die('Something went wrong');
                    }
                }
            }
            $this->view('users/edit_profile', $data);
        }
    }