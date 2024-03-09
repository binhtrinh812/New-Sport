<?php 
include_once('./Models/Banner.php');

class BannerController extends Banner
{
    public function __construct()
    {
        parent::__construct();
        $this->index();
    }
    
    public function index() {
        $bannerModel = new Banner();
        $banner = $bannerModel->getLogo(1);
        $banner1 = $bannerModel->getLogo(2);
        $banner2 = $bannerModel->getLogo(3);

        include_once('./layout/nav.php');
        include_once('./layout/head.php');
    }
}