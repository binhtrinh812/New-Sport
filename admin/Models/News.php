<?php
include_once('./config/Connect.php');

class News extends Connect
{
    public function __construct()
    {
        parent::__construct();
    }

    public function all() {
        $db = new Connect();
        $connect = $db->connect();
        $sql = "SELECT news.id, news.category_id, news.title, news.meta_title, news.meta_keyword, news.short_description, news.description, news.avatar, news.slug, news.author, news.created_at, news.avatar, category.name FROM news, category WHERE category.id = news.category_id ORDER BY news.created_at DESC";
        $pre = $connect->prepare($sql);
        $pre->execute();
        $db->disconnect();
        return $pre->fetchAll(PDO::FETCH_ASSOC);
    }


    public function create($categoryId, $title, $meta_title, $meta_keyword, $short_description, $description1 , $author, $content ,$status , $avatar) {
        $db = new Connect();
        $connect = $db->connect();
        $sql = "INSERT INTO `news`(`category_id`, `title`, `meta_title`, `meta_keyword`, `short_description`, `description` , `author`, `status`,`content`, `avatar`) VALUES (:category_id, :title, :meta_title, :meta_keyword, :short_description, :description , :author, :status, :content, :avatar )";
        $pre = $connect->prepare($sql);
        $pre->bindParam(':category_id', $categoryId);
        $pre->bindParam(':title', $title);
        $pre->bindParam(':meta_title', $meta_title);
        $pre->bindParam(':meta_keyword', $meta_keyword);
        $pre->bindParam(':short_description', $short_description);
        $pre->bindParam(':description', $description1);
        $pre->bindParam(':author', $author);
        $pre->bindParam(':content', $content);
        $pre->bindParam(':status', $status);
        $pre->bindParam(':avatar', $avatar);
        return $pre->execute();
    }

    public function getAllCategory() {
        $db = new Connect();
        $connect = $db->connect();
        $sql = "SELECT id, name FROM category";
        $pre = $connect->prepare($sql);
        $pre->execute();
        $db->disconnect();
        return $pre->fetchAll(PDO::FETCH_ASSOC);
    }

    public function delete($id) {
        $db = new Connect();
        $connect = $db->connect();
        $sql = "DELETE FROM news WHERE id = :id";
        $pre = $connect->prepare($sql);
        $pre->bindParam(':id', $id);
        return $pre->execute();
    }

    public function find($id) {
        $db = new Connect();
        $connect = $db->connect();
        $sql = "SELECT *FROM news WHERE id = :id";
        $pre = $connect->prepare($sql);
        $pre->bindParam(':id', $id);
        $pre->execute();
        $db->disconnect();
        return $pre->fetch(PDO::FETCH_ASSOC);
    }

    public function update($id, $categoryId, $title, $meta_title, $meta_keyword , $short_description, $description1 , $author, $content ,$status, $avatar) {
        $db = new Connect();
        $connect = $db->connect();
        $sql = "UPDATE `news` SET `category_id` = :category_id , `title` = :title , `meta_keyword` = :meta_keyword, `meta_title` = :meta_title, `short_description` = :short_description , `description` = :description , `author` = :author , `status` = :status , `content` = :content, `avatar` = :avatar WHERE id = :id ";
        $pre = $connect->prepare($sql);
        $pre->bindParam(':id', $id);
        $pre->bindParam(':category_id', $categoryId);
        $pre->bindParam(':title', $title);
        $pre->bindParam(':meta_title', $meta_title);
        $pre->bindParam(':meta_keyword', $meta_keyword);
        $pre->bindParam(':short_description', $short_description);
        $pre->bindParam(':description', $description1);
        $pre->bindParam(':author', $author);
        $pre->bindParam(':content', $content);
        $pre->bindParam(':status', $status);
        $pre->bindParam(':avatar', $avatar);
        return $pre->execute();
        
    }
}