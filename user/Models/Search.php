<?php
    class SearchModel extends BaseModel
    {
        public function __construct()
        {
             parent::__construct();
        }

        public function Search($key) {
            $db = new Connect();
            $connect = $db->connect();
            $sql = "SELECT news.title, news.slug,news.avatar, news.author, news.created_at from news where title REGEXP ? ";
            $pre = $connect->prepare($sql);
            $pre->execute([$key]);
            $db->disconnect();
            return $pre->fetchAll(PDO::FETCH_ASSOC);
        }
    }