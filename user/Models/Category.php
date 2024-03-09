<?php
    class CategoryModel extends BaseModel
    {
        public function __construct()
        {
             parent::__construct();
        }
        public function getCategory() {
            $db = new Connect();
            $connect = $db->connect();
            $sql = "SELECT * from category ";
            $pre = $connect->prepare($sql);
            $pre->execute();
            $db->disconnect();
            return $pre->fetchAll(PDO::FETCH_ASSOC);
        }
        public function getCategoryBySlug($slug) {
            $db = new Connect();
            $connect = $db->connect();
            $sql = "SELECT * from category where category.slug = :slug";
            $pre = $connect->prepare($sql);
            $pre->bindParam(':slug', $slug);
            $pre->execute();
            $db->disconnect();
            return $pre->fetchAll(PDO::FETCH_ASSOC);
        }
    }