<?php
include_once('./config/AuthConnect.php');
class Auth extends Connect
{
    public function __construct()
    {
        parent::__construct();
    }

    public function all() {
        $db = new Connect();
        $connect = $db->connect();
        $sql = "SELECT *FROM users";
        $pre = $connect->prepare($sql);
        $pre->execute();
        $db->disconnect();
        return $pre->fetchAll(PDO::FETCH_ASSOC);
    }

    public function login($email, $password) {
        $db = new Connect();
        $connect = $db->connect();
        $sql = "SELECT *FROM users WHERE email = :email and password = :password and status = '1'";
        $pre = $connect->prepare($sql);
        $pre->bindParam(':email', $email);
        $pre->bindParam(':password', $password);
        $pre->execute();
        $db->disconnect();
        return $pre->fetch(PDO::FETCH_ASSOC);
    }

    public function find($id) {
        $db = new Connect();
        $connect = $db->connect();
        $sql = "SELECT *FROM users WHERE id = :id";
        $pre = $connect->prepare($sql);
        $pre->bindParam(':id', $id);
        $pre->execute();
        $db->disconnect();
        return $pre->fetch(PDO::FETCH_ASSOC);
    }
}
