<?php
    class ContactModel extends BaseModel
    {
        public function __construct()
        {
             parent::__construct();
        }

        public function getContact() {
            $db = new Connect();
            $connect = $db->connect();
            $sql = "SELECT * from contact ";
            $pre = $connect->prepare($sql);
            $pre->execute();
            $db->disconnect();
            return $pre->fetchAll(PDO::FETCH_ASSOC);
        }
    }