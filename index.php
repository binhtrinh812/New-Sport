<?php 
 include_once('user/config/Connect.php');
 include_once('user/Models/Base.php');
 include_once('user/Models/Home.php');
 include_once('user/Models/News.php');
 include_once('user/Models/Category.php');
 include_once('user/Models/Banner.php');
 include_once('user/Models/Video.php');
 include_once('user/Models/Contact.php');
 include_once('user/Models/Search.php');
 include_once('user/Controllers/BaseController.php');
 include_once('user/Controllers/HomeController.php');
 include_once('user/Controllers/NewsController.php');
 include_once('user/Controllers/CategoryController.php');
 include_once('user/Controllers/SearchController.php');
 $uri = $_SERVER['REQUEST_URI'];
 if ($uri == '/') {
    //  $page = 'home';
     $clsHome = new HomeController();
     $clsHome->index();
 } elseif (preg_match('/.*\?search=.*/', $uri)) { 
    //  $page = 'search'
     $data = explode('&', $uri);
     $param = null;
     foreach($data as $d){
         if(preg_match('/.*\?search=.*/', $d)){
             $param = $d;
         }
     }   
     $param = explode('=',$param);
     $param = $param[1];
     $param = urldecode($param);
     $clsSearch = new SearchController();
     $clsSearch->index($param);
 }
  elseif (preg_match('/\/.*\.html/', $uri)) {
    //  $page = 'news';
     $slug = str_replace(['/', '.html'], '', $uri);
     $clsNews = new NewsController();
     $clsNews->detail($slug);
 } elseif ( preg_match('/.*-.*/', $uri)) {
     // category 
    //  $page = 'category';
     $slug = str_replace(['/'], '', $uri);
     $clsCategory = new CategoryController();
     $clsCategory->detail($slug);
  }

?>