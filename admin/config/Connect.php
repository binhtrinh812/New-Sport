<?php

class Connect
{
    const DNS = 'mysql:host=localhost;dbname=PHP0522E_Nhom2';
    const USER = 'root';    
    const PASSWORD = '';
    public $pdo = null;

    public function __construct()
    {
        
    }

    public function connect()
    {
        try {
            $connect = new PDO(self::DNS, self::USER, self::PASSWORD);
            $connect->exec("set names utf8mb4");
            return $connect;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function disconnect()
    {

    }
}