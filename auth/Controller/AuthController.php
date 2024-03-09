<?php
include_once('./Models/Auth.php');
include_once('./Models/Banner.php');

class AuthController extends Auth
{
    public function __construct()
    {
        parent::__construct();
        $this->index();
    }

    public function index() {
        $method = 'login';
        if (isset($_GET['method'])) {
            $method = $_GET['method'];
        }

        switch ($method) {
            case 'login':
                $users = parent::all();
                $bannerModel = new Banner();
                $banner = $bannerModel->getLogo(1);
                $banner1 = $bannerModel->getLogo(2);
                $banner2 = $bannerModel->getLogo(3);
                $this->request();
                include_once('./views/login.php');
                break;

            default :
                include_once('./views/404.php');
                break;
        }
    }

    public function request() {
        if (isset($_POST['submit_login'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $request = $this->login($email, $password);
            if ($request) {
                $_SESSION['id_account'] = $request['id'];
                $_SESSION['name_account'] = $request['name'];
                if(isset($_POST['checkbox'])) {
                    setcookie('email', $email, time()+3000, '/', '',0,0);
                    setcookie('password', $password, time()+3000, '/', '',0,0);
                }
                header('Location: ../admin/');
            } else {
                ?>
                    <div class="alert alert-danger alert_login" role="alert"> Wrong account or password!</div>
                <?php
            }
        }
    }
}