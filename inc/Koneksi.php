<?php

namespace Inc;

class Koneksi {

    public object $db;

    public function __construct() {
        $this->db = new \PDO("mysql:host=localhost;dbname=dbpbwl_project7", "root", "");
    }
}

?>