<?php
class ConnectDB
{
    public $conn;

    public function connect()
    {
        $this->conn = new mysqli('localhost', 'root', 'none', 'php11_shop');
        mysqli_set_charset($this->conn,"utf8");
        
        return $this->conn;
    }
    public function __construct()
    {
        $this->connect();
    }
}
