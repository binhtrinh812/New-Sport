<?php  session_start();
    //$banner = new BannerController;
    ?>
<!doctype html>
<html lang="en">

	<?php include_once('./layout/head.php'); 
    include_once('./Controller/BannerController.php');
    
    ?>

<body class="img js-fullheight" style="background-image: url(/public/banner/backgound.jpg);">

	<?php
            $page = 'login';
            if (isset($_GET['page'])) {
                $page = $_GET['page'];
            }

            switch ($page) {
                case 'login' :
                    include_once './Controller/AuthController.php';
                    $user = new AuthController;
                    $banner = new BannerController;
                    break;

                default: {
                break;
            }
        }
    ?>

	<?php include_once('./layout/script.php') ?>

</body>
</html>