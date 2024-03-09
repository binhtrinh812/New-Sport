<?php 
class NewsController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }
    public function detail($slug) {
        $newsModel = new NewsModel();
        $bannerModel = new BannerModel();
        $contactModel = new ContactModel();
        $categoryModel = new CategoryModel();
        $detailNew = $newsModel->getDetailNewsBySlug($slug);
        $postNewsFoodter = $newsModel->getNewsByCreatedAt(3);
        $banner = $bannerModel->getLogo(4);
        $postnew = $newsModel->getNewsByCreatedAt(2);
        $contact =  $contactModel->getContact();
        $category = $categoryModel->getCategory();
        $title = $detailNew[0]['title'];
        $meta_keyword = $detailNew[0]['meta_keyword'];
        $meta_title = $detailNew[0]['meta_title'];
        include_once('./user/views/layout/head.php');
        include_once('./user/views/layout/header.php');
        include_once('./user/views/news/index.php');
        include_once('./user/views/layout/footer.php');
    }
}