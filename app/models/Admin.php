<?php

    class Admin {
        
        private $db;

        public function __construct() {
            $this->db = new Database;
        }

        public function login($email, $pwd) {
            $this->db->query('SELECT * FROM admins WHERE admin_email = :email');
            $this->db->bind(':email', $email);

            $row = $this->db->single();
            if ($this->db->rowCount() > 0) {
                // check password
                if (password_verify($pwd, $row->admin_password)) {
                    return $row;
                } else {
                    return false;
                }
            } else {
                return false;
            }
        }
        // get admin by id
        public function getAdminById($id) {
            $this->db->query('SELECT * FROM admins WHERE admin_id = :id');
            $this->db->bind(':id', $id);

            $row = $this->db->single();
            return $row;
        }
        // get all users
        public function getUserCount() {
            $this->db->query('SELECT COUNT(*) AS c FROM users');
            $row = $this->db->single();
            return $row;
        }
        
    }