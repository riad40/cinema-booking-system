<?php

    class Admins extends Controller {
        
        public function __construct() {
            $this->adminModel = $this->model('Admin');
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
                'title' => 'dashboard',
                'admin' => $admin,
            ];
            $data['user_count'] = $this->adminModel->getUserCount();
            $this->view('admins/dashboard', $data);
        }

        public function movies() {
            
            if (!isset($_SESSION['admin_id'])) {
                header('Location: ' . URLROOT . '/admins');
            }
            $this->view('admins/movies');
        }

        public function customers() {
            
            if (!isset($_SESSION['admin_id'])) {
                header('Location: ' . URLROOT . '/admins');
            }
            $this->view('admins/customers');
        }
        // add movie
        public function add_movie() {
            if (!isset($_SESSION['admin_id'])) {
                header('Location: ' . URLROOT . '/admins');
            }
            $this->view('admins/add_movie');
        }
        // update movie
        public function update_movie() {
            if (!isset($_SESSION['admin_id'])) {
                header('Location: ' . URLROOT . '/admins');
            }
            $this->view('admins/update_movie');
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