<?php
include_once('./config/Connect.php');

class Contact extends Connect
{
    public function __construct()
    {
        parent::__construct();
    }

    public function all() {
        $db = new Connect();
        $connect = $db->connect();
        $sql = "SELECT *FROM contact";
        $pre = $connect->prepare($sql);
        $pre->execute();
        $db->disconnect();
        return $pre->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find($id) {
        $db = new Connect();
        $connect = $db->connect();
        $sql = "SELECT *FROM contact WHERE id = :id";
        $pre = $connect->prepare($sql);
        $pre->bindParam(':id', $id);
        $pre->execute();
        $db->disconnect();
        return $pre->fetch(PDO::FETCH_ASSOC);
    }

    public function update($id, $adds, $phone, $email, $facebook , $instagram, $map) {
        $db = new Connect();
        $connect = $db->connect();
        $sql = "UPDATE `contact` SET `adds` = :adds , `phone` = :phone , `email` = :email , `facebook` = :facebook , `instagram` = :instagram , `map` = :map WHERE id = :id ";
        $pre = $connect->prepare($sql);
        $pre->bindParam(':id', $id);
        $pre->bindParam(':adds', $adds);
        $pre->bindParam(':phone', $phone);
        $pre->bindParam(':email', $email);
        $pre->bindParam(':facebook', $facebook);
        $pre->bindParam(':instagram', $instagram);
        $pre->bindParam(':map', $map);
        return $pre->execute();
    }
}