<?php
    class NewsModel extends BaseModel
    {
        public function __construct()
        {
             parent::__construct();
        }

        public function getNewsByCategoryId($category_id, $limit = 10, $offset = 0) {
            $db = new Connect();
            $connect = $db->connect();
            $sql = "SELECT * from news where category_id=$category_id order by id desc limit $offset, $limit";
            $pre = $connect->prepare($sql);
            $pre->execute();
            $db->disconnect();
            return $pre->fetchAll(PDO::FETCH_ASSOC);
        }
        public function getNewsByCreatedAt( $limit = 10, $offset = 0){
            $db = new Connect();
            $connect = $db->connect();
            $sql = "SELECT * from news  order by created_at desc limit $offset, $limit";
            $pre = $connect->prepare($sql);
            $pre->execute();
            $db->disconnect();
            return $pre->fetchAll(PDO::FETCH_ASSOC);
        }
        public function getDetailNewsBySlug($slug){
            $db = new Connect();
            $connect = $db->connect();
            $sql = "SELECT * from news  where news.slug = :slug";
            $pre = $connect->prepare($sql);
            $pre->bindParam(':slug', $slug);
            $pre->execute();
            $db->disconnect();
            return $pre->fetchAll(PDO::FETCH_ASSOC);
        }
    }