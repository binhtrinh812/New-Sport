<?php 
class BannerController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->index();
    }
    public function index() {
        $bannerModel = new BannerModel();
        $banner = $bannerModel->getLogo(1);
        $banner1 = $bannerModel->getLogo(2);
        $banner2 = $bannerModel->getLogo(3);
    }
}