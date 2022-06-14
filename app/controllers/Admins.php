<?php

    class Admins extends Controller {
        
        public function __construct() {
            // parent::__construct();
        }
        
        public function index() {
            $this->view('admins/index');
        }
        
        public function dashboard() {
            $this->view('admins/dashboard');
        }

        public function movies() {
            $this->view('admins/movies');
        }

        public function customers() {
            $this->view('admins/customers');
        }
        
    }