<?php
include_once('./Models/News.php');

class NewsController extends News
{
    public function __construct()
    {
        parent::__construct();
        $this->index();
    }

    public function index() {
        $method = 'list';
        if (isset($_GET['method'])) {
            $method = $_GET['method'];
        }

        switch ($method) {
            case 'list':
                $news = parent::all();
                include_once('./views/news/list_posts.php');
                break;

            case 'add':
                $categories = $this->getAllCategory();
                include_once('./views/news/add_posts.php');
                break;

            case 'store':
                $this->createProduct();
                break;

            case 'delete':
                if (isset($_GET['id'])) {
                    $id = trim((int)$_GET['id']);
                    $del = $this->delete($id);
                    if ($del) {
                        $_SESSION['notification'] = 2;
                        header("Location: index.php?page=news");
                    }
                }
                echo $_GET['id'];
                break;

            case 'edit':
                $this->editProduct();
                break;

            case 'update':
                $this->updateProduct();
                break;

            default :
                include_once('./views/404.php');
                break;
        }
    }

    public function createProduct()
    {
        if (isset($_POST['submit_add_news'])) {
            $categoryId = $_POST['category'];
            $title = $_POST['title'];
            $meta_title = $_POST['meta_title'];
            $meta_keyword = $_POST['meta_keyword'];
            $short_description = $_POST['short_description'];
            $description1 = $_POST['description1'];
            $author = $_POST['author'];
            $content = $_POST['content'];
            $status = $_POST['status'];
            $files = $_FILES['avatar'];
            $nameFile = time().$files['name'];
            $tmpFile = $files['tmp_name'];
            move_uploaded_file($tmpFile, '../public/image/news/'.$nameFile);

            $add = $this->create($categoryId, $title, $meta_title, $meta_keyword, $short_description, $description1 , $author, $content ,$status , $nameFile);
            if ($add) {
                include_once('./Models/Banner.php');     
                $_SESSION['notification'] = 1;
                
                header("Location: index.php?page=news&method=list");
            } else {
                header("Location: index.php?page=news&method=add");
            }

        } else {
            header("Location: index.php?page=news&method=list");
        }
    }

    public function editProduct() {
        if (isset($_GET['id'])) {
            $id = trim((int)$_GET['id']);
            $categories = $this->getAllCategory();
            $news = $this->find($id);
            include_once('./views/news/update_posts.php');
        } else {
            header("Location: index.php?page=news&method=list");
        }
    }

    /**
     * @return bool|void
     */

    public function updateProduct() {
        if (isset($_GET['id'])) {
            $id = trim((int)$_GET['id']);
            $news = $this->find($id);

            if (isset($_POST['submit_update_news'])) {
                $categoryId = $_POST['category'];
                $title = $_POST['title'];
                $meta_title = $_POST['meta_title'];
                $meta_keyword = $_POST['meta_keyword'];
                $short_description = $_POST['short_description'];
                $description1 = $_POST['description1'];
                $author = $_POST['author'];
                $content = $_POST['content'];
                $status = $_POST['status'];
                $files = $_FILES['avatar'];
                $nameFile = $oldFile = $news['avatar'];

                $files = $_FILES['avatar'];
                if (!empty($files['name'])) {
                    $nameFile = time().$files['name'];
                    $tmpFile = $files['tmp_name'];
                    move_uploaded_file($tmpFile, '../public/image/news/'.$nameFile);
                    unlink('../public/image/news/'.$oldFile);
                }

                $update = $this->update($id, $categoryId, $title, $meta_title, $meta_keyword, $short_description, $description1 , $author, $content ,$status , $nameFile);
                if ($update) {
                    $_SESSION['notification'] = 3;
                    header("Location: index.php?page=news");
                }
            }
        } else {
            header("Location: index.php?page=news");
        }
    }
}