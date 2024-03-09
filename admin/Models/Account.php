<?php
include_once('./config/Connect.php');

class Account extends Connect
{
    public function __construct()
    {
        parent::__construct();
    }

    public function all() {
        $db = new Connect();
        $connect = $db->connect();
        $sql = "SELECT * FROM users ORDER BY users.created_at DESC ";
        $pre = $connect->prepare($sql);
        $pre->execute();
        $db->disconnect();
        return $pre->fetchAll(PDO::FETCH_ASSOC);
    }


    public function create($name, $phone, $email, $password , $status) {
        $db = new Connect();
        $connect = $db->connect();
        $sql = "INSERT INTO `users`(`name`, `phone`, `email`, `password` , `status`) VALUES (:name, :phone, :email, :password, :status)";
        $pre = $connect->prepare($sql);
        $pre->bindParam(':name', $name);
        $pre->bindParam(':phone', $phone);
        $pre->bindParam(':email', $email);
        $pre->bindParam(':password', $password);
        $pre->bindParam(':status', $status);
        return $pre->execute();
    }

    public function delete($id) {
        $db = new Connect();
        $connect = $db->connect();
        $sql = "DELETE FROM users WHERE id = :id";
        $pre = $connect->prepare($sql);
        $pre->bindParam(':id', $id);
        return $pre->execute();
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

    public function checkadd($email) {
        $db = new Connect();
        $connect = $db->connect();
        $sql = "SELECT * FROM `users` WHERE `email` = ".$_POST['email']." ";
        $pre = $connect->prepare($sql);
        $pre->bindParam(':email', $email);
        $pre->execute();
        $db->disconnect();
        return $pre->fetchAll(PDO::FETCH_ASSOC);
    }

    public function update($id, $name, $phone, $email, $password  , $status) {
        $db = new Connect();
        $connect = $db->connect();
        $sql = "UPDATE `users` SET `name` = :name , `phone` = :phone , `email` = :email , `password` = :password , `status` = :status WHERE id = :id ";
        $pre = $connect->prepare($sql);
        $pre->bindParam(':id', $id);
        $pre->bindParam(':name', $name);
        $pre->bindParam(':phone', $phone);
        $pre->bindParam(':email', $email);
        $pre->bindParam(':password', $password);
        $pre->bindParam(':status', $status);
        return $pre->execute();
    }

    }