<?php
class Database
{
    private $host = "localhost";
    private $db_name = "login_regist_db";
    private $username = "root";
    private $password = "root";
    private $conn;

    public function getConnection()
    {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=$this->host;dbname=$this->db_name", $this->username, $this->password);
        } catch (PDOException $e) {
            echo "connection error: " . $e->getMessage();
        }
        return $this->conn;
    }
}