<?php
include_once('./Models/Category.php');

class CategoryController extends Category
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
                $categories = parent::all();
                include_once('./views/category/list_category.php');
                break;

            case 'edit':
                $this->editCategory();
                break;

            case 'update':
                $this->updateCategory();
                break;

            default :
                include_once('./views/404.php');
                break;
        }
    }

    public function editCategory() {
        if (isset($_GET['id'])) {
            $id = trim((int)$_GET['id']);
            $categories = $this->find($id);
            include_once('./views/category/update_category.php');
        } else {
            header("Location: index.php?page=category&method=list");
        }
    }

    /**
     * @return bool|void
     */

    public function updateCategory() {
        if (isset($_GET['id'])) {
            $id = trim((int)$_GET['id']);
            $categories = $this->find($id);

            if (isset($_POST['submit_update_category'])) {
                $name = $_POST['name'];
                $status = $_POST['status'];
                $slug = $_POST['slug'];

                $update = $this->update($id, $name, $status, $slug);
                if ($update) {
                    $_SESSION['notification'] = 3;
                    header("Location: index.php?page=category");
                }
            }
        }   else {
            header("Location: index.php?page=category");
        }
    }
}