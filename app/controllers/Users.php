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
                    'email_err' => '',
                    'pwd_err' => '',
                ];

                // Validate email
                if (empty($data['email'])) {
                    $data['email_err'] = 'Please enter email';
                } elseif (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                    $data['email_err'] = 'Please enter a valid email';
                }
                // Validate password
                if (empty($data['pwd'])) {
                    $data['pwd_err'] = 'Please enter password';
                } elseif (strlen($data['pwd']) < 6) {
                    $data['pwd_err'] = 'Password must be at least 6 characters';
                }
                // Make sure errors are empty
                if (empty($data['email_err']) && empty($data['pwd_err'])) {
                    // if Validated
                    // Check and set logged in user
                    $loggedInUser = $this->userModel->login($data['email'], $data['pwd']);
                    if ($loggedInUser) {
                        // Create Session
                        $this->createUserSession($loggedInUser);
                    } else {
                        $data['pwd_err'] = 'Password incorrect';
                        $this->view('users/login', $data);
                    }
                }
            } else {
                $data = [
                    'email' => '',
                    'pwd' => '',
                    'email_err' => '',
                    'pwd_err' => ''
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
                'fname_err' => '',
                'email_err' => '',
                'phone_err' => '',
                'pwd_err' => '',
                'Rpwd_err' => ''
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
                    'fname_err' => '',
                    'email_err' => '',
                    'phone_err' => '',
                    'pwd_err' => '',
                    'Rpwd_err' => ''
                ];

                // validate name
                if(empty($data['fname'])) {
                    $data['fname_err'] = 'Please enter your full name';
                }
                // validate email
                if(empty($data['email'])) {
                    $data['email_err'] = 'Please enter your email';
                }
                if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                    $data['email_err'] = 'Please enter a valid email';
                }
                if ($this->userModel->findUserByEmail($data['email']) == true) {
                    $data['email_err'] = 'Email already exists';
                }   
                // validate phone
                if(empty($data['phone'])) {
                    $data['phone_err'] = 'Please enter your phone number';
                }
                // validate password
                if(empty($data['pwd'])) {
                    $data['pwd_err'] = 'Please enter your password';
                } elseif (strlen($data['pwd']) < 6) {
                    $data['pwd_err'] = 'Password must be at least 6 characters';
                }
                // validate confirm password
                if(empty($data['Rpwd'])) {
                    $data['Rpwd_err'] = 'Please confirm your password';
                } elseif ($data['pwd'] != $data['Rpwd']) {
                    $data['Rpwd_err'] = 'Passwords do not match';
                }

                // make sure errors are empty
                if (empty($data['fname_err']) && empty($data['email_err']) && empty($data['phone_err']) && empty($data['pwd_err']) && empty($data['Rpwd_err'])) {
                    // hash password
                    $data['pwd'] = password_hash($data['pwd'], PASSWORD_DEFAULT);
                    // register user from model
                    if ($this->userModel->register($data)) {
                        header('Location: ' . URLROOT . '/users/login');
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
            $data = [
                'title' => 'Edit Profile',
                'user' => $user
            ];
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                // Sanitize POST data
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                $data = [
                    'title' => 'Update Profile',
                    'fname' => trim($_POST['fname']),
                    'email' => trim($_POST['email']),
                    'phone' => trim($_POST['phone']),
                    'pwd' => trim($_POST['pwd']),
                    'image' => $_FILES['profile-image']['name'],
                    'temp_image' => $_FILES['profile-image']['tmp_name'],
                    'folder' => 'C:/Users/Youcode/Desktop/xampp/htdocs/cinema-wave/public/assets/images/' . $_FILES['profile-image']['name'],
                    'id' => $_SESSION['user_id'],
                    'image_err' => '',
                    'fname_err' => '',
                    'email_err' => '',
                    'phone_err' => '',
                    'pwd_err' => ''
                ];

                // image validation
                if (!empty($data['image'])) {
                    $image_ext = explode('.', $data['image']);
                } else {
                    $image_ext = explode('.', $user->user_image);
                }
                $allowed_ext = ['jpg', 'jpeg', 'png'];
                if (!in_array(strtolower(end($image_ext)), $allowed_ext)) {
                    $data['image_err'] = 'Please upload a valid image';
                }
                // upload image
                if (!empty($data['image'])) {
                    if (!move_uploaded_file($data['temp_image'], $data['folder'])) {
                        $data['image_err'] = 'Something went wrong';
                    }
                }

                // validate name
                if(empty($data['fname'])) {
                    $data['fname_err'] = 'Please enter your full name';
                }
                // validate email
                if(empty($data['email'])) {
                    $data['email_err'] = 'Please enter your email';
                } elseif (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                    $data['email_err'] = 'Please enter a valid email';
                } elseif ($this->userModel->findUserByEmail($data['email']) == true) {
                    $data['email_err'] = 'Email already exists';
                }   
                // validate phone
                if(empty($data['phone'])) {
                    $data['phone_err'] = 'Please enter your phone number';
                }
                // validate password
                if(!empty($data['pwd'])) {
                    if (strlen($data['pwd']) < 6) {
                        $data['pwd_err'] = 'Password must be at least 6 characters';
                    }
                }
                // make sure errors are empty
                if (empty($data['fname_err']) && empty($data['email_err']) && empty($data['phone_err']) && empty($data['pwd_err']) && empty($data['image_err'])) {
                    // hash password
                    $data['pwd'] = password_hash($data['pwd'], PASSWORD_DEFAULT);
                    // register user from model
                    if ($this->userModel->updateUser($data)) {
                        header('Location: ' . URLROOT . '/users/profile');
                    } else {
                        die('Something went wrong');
                    }
                }
            } else {
                $data = [
                    'title' => 'Update Profile',
                    'user' => $user,
                    'image_err' => '',
                    'fname_err' => '',
                    'email_err' => '',
                    'phone_err' => '',
                    'pwd_err' => ''
                ];
            }
            $this->view('users/edit_profile', $data);
        }

    }