<?php
    require_once __DIR__ . '/../config/koneksi.php';
    class UserModel {
        private $conn;

        public function __construct(){
            global $conn;
            $this->conn = $conn;

        }

        public function login(){
            
        }
    }

?>