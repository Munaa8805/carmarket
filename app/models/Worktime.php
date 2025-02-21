<?php

class Worktime {
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getWorkTime()
    {
        $this->db->query('SELECT * FROM worktime');

        $results = $this->db->resultSet();

        return $results;
    }


    
    public function getAddress(){
        $this->db->query('SELECT * FROM contact');

        $results = $this->db->resultSet();

        return $results;
    }

    
}