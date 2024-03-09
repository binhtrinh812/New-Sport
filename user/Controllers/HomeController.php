<?php 
class HomeController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->index();
    }
    public function index() {
        $homeModel = new HomeModel();
        $newsModel = new NewsModel();
        $videoModel = new VideoModel();
        $bannerModel = new BannerModel();
        $contactModel = new ContactModel();
        $list = $homeModel->all();
        $items_hot_left = $homeModel->hot_left();
        $items_hot_right = $homeModel->hot_right();
        $categories =  $homeModel->category_home();
        foreach ($categories as $key => $category) {
            $listPost = $newsModel->getNewsByCategoryId($category['id'], 4);
            $categories[$key]['listPost'] = $listPost;
        }
        $video = $videoModel->getVideo();
        $postnew = $newsModel->getNewsByCreatedAt(6);
        $postNewsFoodter = $newsModel->getNewsByCreatedAt(3);
        $banner = $bannerModel->getLogo(1);
        $banner1 = $bannerModel->getLogo(2);
        $banner2 = $bannerModel->getLogo(3);
        $contact =  $contactModel->getContact();
        $title = "Tin Tức";
        include_once('./user/views/layout/head.php');
        include_once('./user/views/layout/header.php');
        include_once('./user/views/home.php');
        include_once('./user/views/layout/footer.php');
    }
}