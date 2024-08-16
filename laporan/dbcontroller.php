<?php
class DBController
{
    private $conn;

    function __construct()
    {
        $this->conn = new mysqli("localhost:3307", "root", "", "db_bengkel");
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    function getAll($query)
    {
        $result = $this->conn->query($query);
        if ($result) {
            return $result->fetch_all(MYSQLI_ASSOC);
        } else {
            return [];
        }
    }
}