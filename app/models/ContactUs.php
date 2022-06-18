<?php

class ContactUs {
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    // add new message
    public function addMessage($data) {
        $this->db->query('INSERT INTO contact_us VALUES(NULL, :name, :email, :message)');
        // Bind values
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':message', $data['message']);
        // Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    // show all messages
    public function showMessages() {
        $this->db->query('SELECT * FROM contact_us');
        $results = $this->db->resultSet();
        return $results;
    }
}