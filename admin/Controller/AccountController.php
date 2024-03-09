<?php
include_once('./Models/Account.php');

class AccountController extends Account
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
                $accounts = parent::all();
                include_once('./views/account/list_account.php');
                break;

            case 'add':
                include_once('./views/account/add_account.php');
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
                        header("Location: index.php?page=account");
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
        if (isset($_POST['submit_add_account'])) {
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $status = $_POST['status'];

            $add = $this->create($name, $phone, $email, $password, $status);
            if ($add) {

                $_SESSION['notification'] = 1;
                
                header("Location: index.php?page=account&method=list");
            } else {
                header("Location: index.php?page=account&method=add");
            }
        } else {
            header("Location: index.php?page=account&method=list");
        }
    }

    public function editProduct() {
        if (isset($_GET['id'])) {
            $id = trim((int)$_GET['id']);
            $account = $this->find($id);
            include_once('./views/account/update_account.php');
        } else {
            header("Location: index.php?page=account&method=list");
        }
    }

    public function updateProduct() {
        if (isset($_GET['id'])) {
            $id = trim((int)$_GET['id']);
            $news = $this->find($id);

            if (isset($_POST['submit_update_account'])) {
                $name = $_POST['name'];
                $phone = $_POST['phone'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                $status = $_POST['status'];

                $update = $this->update($id, $name, $phone, $email, $password, $status);
                if ($update) {
                    $_SESSION['notification'] = 3;
                    header("Location: index.php?page=account");
                }
            }
        } else {
            header("Location: index.php?page=account");
        }
    }
}