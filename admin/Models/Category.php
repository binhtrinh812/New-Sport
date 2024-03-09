<?php
include_once('./config/Connect.php');

class Category extends Connect
{
    public function __construct()
    {
        parent::__construct();
    }

    public function all() {
        $db = new Connect();
        $connect = $db->connect();
        $sql = "SELECT *FROM category";
        $pre = $connect->prepare($sql);
        $pre->execute();
        $db->disconnect();
        return $pre->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find($id) {
        $db = new Connect();
        $connect = $db->connect();
        $sql = "SELECT *FROM category WHERE id = :id";
        $pre = $connect->prepare($sql);
        $pre->bindParam(':id', $id);
        $pre->execute();
        $db->disconnect();
        return $pre->fetch(PDO::FETCH_ASSOC);
    }

    public function update($id, $name, $status, $slug) {
        $db = new Connect();
        $connect = $db->connect();
        $sql = "UPDATE `category` SET `name` = :name , `status` = :status , `slug` = :slug WHERE id = :id ";
        $pre = $connect->prepare($sql);
        $pre->bindParam(':id', $id);
        $pre->bindParam(':status', $status);
        $pre->bindParam(':slug', $slug);
        $pre->bindParam(':name', $name);
        return $pre->execute();
    }
}