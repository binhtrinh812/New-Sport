<?php
    class BannerModel extends BaseModel
    {
        public function __construct()
        {
             parent::__construct();
        }

        public function getLogo($id) {
            $db = new Connect();
            $connect = $db->connect();
            $sql = "SELECT * from banner where id = :id";
            $pre = $connect->prepare($sql);
            $pre->bindParam(':id', $id);
            $pre->execute();
            $db->disconnect();
            return $pre->fetchAll(PDO::FETCH_ASSOC);
        }
    }