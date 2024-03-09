<?php 
class SearchController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index($key) {
        $newsModel = new NewsModel();
        $bannerModel = new BannerModel();
        $contactModel = new ContactModel();
        $searchModel = new SearchModel();
        $search = $searchModel -> Search($key);
        $banner = $bannerModel->getLogo(4);
        $contact =  $contactModel->getContact();
        $postNewsFoodter = $newsModel->getNewsByCreatedAt(3);
        $title = "Tìm kiếm";
        // var_dump($search);
        include_once('./user/views/layout/head.php');
        include_once('./user/views/layout/header.php');
        include_once('./user/views/search/index.php');
        include_once('./user/views/layout/footer.php');
    }
}