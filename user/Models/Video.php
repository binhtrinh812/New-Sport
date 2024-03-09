<?php
    class VideoModel extends BaseModel
    {
        public function __construct()
        {
             parent::__construct();
        }

        public function getVideo() {
            $db = new Connect();
            $connect = $db->connect();
            $sql = "SELECT * from video";
            $pre = $connect->prepare($sql);
            $pre->execute();
            $db->disconnect();
            return $pre->fetchAll(PDO::FETCH_ASSOC);
        }
    }