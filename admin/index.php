<?php
    session_start();
    ob_start();
    if (!isset($_SESSION['id_account'])) {
        header('Location: /auth/');
    }
?>

<?php include_once('./layout/head.php'); ?>
<?php
    include_once('./Controller/BannerController.php');
    $banner = new BannerController;
?>
<body>
    <div id="wrapper">

        <?php

            include_once('./layout/nav.php'); ?>
        <div id="page-wrapper">
            <div class="container-fluid">
                <?php
                    $page = 'dashboard';
                    if (isset($_GET['page'])) {
                        $page = $_GET['page'];
                    }

                    switch ($page) {
                        case 'dashboard' :
                            include_once('./views/dashboard.php');
                            break;
                        case 'news' :
                            include_once './Controller/NewsController.php';
                            $new = new NewsController;
                            break;

                        case 'category' :
                            include_once './Controller/CategoryController.php';
                            $categories = new CategoryController;
                            break;

                        case 'contact' :
                            include_once './Controller/ContactController.php';
                            $contacts = new ContactController;
                            break;

                        case 'account' :
                            include_once './Controller/AccountController.php';
                            $account = new AccountController;
                            break;

                        case 'logout' :
                            session_destroy();
                            header('Location: ../auth');
                            break;

                        default: {
                            break;
                        }
                    }
                ?>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
    </div>

    <?php include_once('./layout/script.php'); ?>
</body>

</html>
