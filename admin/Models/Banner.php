<?php
include_once('./config/Connect.php');

class Banner extends Connect
{
    public function __construct()
    {
        parent::__construct();
    }

    public function all() {
        $db = new Connect();
        $connect = $db->connect();
        $sql = "SELECT *FROM banner";
        $pre = $connect->prepare($sql);
        $pre->execute();
        $db->disconnect();
        return $pre->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getLogo($id) {
        $db = new Connect();
        $connect = $db->connect();
        $sql = "SELECT * FROM banner where id = :id";;
        $pre = $connect->prepare($sql);
        $pre->bindParam(':id', $id);
        $pre->execute();
        $db->disconnect();
        return $pre->fetchAll(PDO::FETCH_ASSOC);
    }
}