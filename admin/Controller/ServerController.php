<?php
include_once('../Models/Server.php');

class ServerController extends Server
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index($id) {
        $content = $this->getDescriptionProduct($id);
        echo json_encode($content);
    }
}