<?php
include_once('../config/Connect.php');

class Server extends Connect
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getDescriptionProduct($id) {
        $db = new Connect();
        $connect = $db->connect();
        $sql = "SELECT content FROM news WHERE id = :id";
        $pre = $connect->prepare($sql);
        $pre->bindParam(':id', $id);
        $pre->execute();
        $db->disconnect();
        $news = $pre->fetch(PDO::FETCH_ASSOC);
        return $news['content'];
    }
}