<?php 
class CategoryController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }
    public function detail($slug) {
        $homeModel = new HomeModel();
        $newsModel = new NewsModel();
        $bannerModel = new BannerModel();
        $contactModel = new ContactModel();
        $categoryModel = new CategoryModel();
        $detailCategory = $categoryModel->getCategoryBySlug($slug);
        foreach ($detailCategory as $key => $category) {
            $listPost = $newsModel->getNewsByCategoryId($category['id']);
            $detailCategory[$key]['listPost'] = $listPost;
        }
        // print_r($detailCategory[0]['listPost']);
        $banner = $bannerModel->getLogo(4);
        $postNewsFoodter = $newsModel->getNewsByCreatedAt(3);
        $contact =  $contactModel->getContact();
        $category = $categoryModel->getCategory();
        $title = $detailCategory[0]['name'];
        include_once('./user/views/layout/head.php');
        include_once('./user/views/layout/header.php');
        include_once('./user/views/category/detail.php');
        include_once('./user/views/layout/footer.php');
    }
}