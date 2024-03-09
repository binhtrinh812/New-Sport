<?php
    class HomeModel extends BaseModel
    {
        public function __construct()
        {
             parent::__construct();
        }
        public function all() {
            $db = new Connect();
            $connect = $db->connect();
            $sql = "SELECT news.id, news.title, news.short_description, news.description, news.avatar, news.slug, news.author,news.created_at FROM news, category WHERE category.id = news.category_id  ORDER BY news.created_at DESC LIMIT 3 ";
            $pre = $connect->prepare($sql);
            $pre->execute();
            $db->disconnect();
            return $pre->fetchAll(PDO::FETCH_ASSOC);
        }

        public function hot_left() {
            $db = new Connect();
            $connect = $db->connect();
            $sql = "SELECT * from news where status = 3 order by id desc limit 0,1";
            $pre = $connect->prepare($sql);
            $pre->execute();
            $db->disconnect();
            return $pre->fetchAll(PDO::FETCH_ASSOC);
        }
        public function hot_right() {
            $db = new Connect();
            $connect = $db->connect();
            $sql = "SELECT * from news where status = 3 order by id desc limit 1,2";
            $pre = $connect->prepare($sql);
            $pre->execute();
            $db->disconnect();
            return $pre->fetchAll(PDO::FETCH_ASSOC);
        }
        public function category_home(){
            $db = new Connect();
            $connect = $db->connect();
            $sql = "SELECT id, name from category";
            $pre = $connect->prepare($sql);
            $pre->execute();
            $db->disconnect();
            return $pre->fetchAll(PDO::FETCH_ASSOC);
        }
    }