<?php
    include_once '../Controller/ServerController.php';

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $news = new ServerController;
        return $news->index($id);
    }

    return false;