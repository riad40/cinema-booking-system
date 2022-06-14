<?php
    class User {
        private $db;

        public function __construct() {
            $this->db = new Database;
        }

        // find a user by email
        public function findUserByEmail($email) {
            $this->db->query('SELECT user_email FROM users WHERE user_email = :email');
            $this->db->bind(':email', $email);

            if ($this->db->rowCount() > 0) {
                return true;
            } else {
                return false;
            }
        }

        // login user
        public function login($email, $pwd) {
            $this->db->query('SELECT * FROM users WHERE user_email = :email');
            $this->db->bind(':email', $email);

            $row = $this->db->single();
            if ($this->db->rowCount() > 0) {
                // check password
                if (password_verify($pwd, $row->user_password)) {
                    return $row;
                } else {
                    return false;
                }
            } else {
                return false;
            }
        }

        // register a user
        public function register($data) {
            $this->db->query('INSERT INTO users (user_fname, user_email, user_phone, user_password) VALUES (:fname, :email, :phone, :pwd)');
            $this->db->bind(':fname', $data['fname']);
            $this->db->bind(':email', $data['email']);
            $this->db->bind(':phone', $data['phone']);
            $this->db->bind(':pwd', $data['pwd']);

            // execute query
            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }

    }
