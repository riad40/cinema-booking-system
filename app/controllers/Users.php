<?php

    class Users extends Controller {
        
        public function __construct() {
            // parent::__construct();
        }
        
        public function index() {
            $this->view('users/login');
        }
        
        public function register() {
            $this->view('users/register');
        }

        public function profile() {
            $this->view('users/profile');
        }
        
    }