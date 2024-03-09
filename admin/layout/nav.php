<!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display // Nhóm thanh công cụ Mobile-->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <?php   //foreach ($banner as $banners) { ?>
                <a class="navbar-brand" href="/admin/"><img class="logo_nav" src="/public/banner/<?= $banner1[0]['photo']; ?>"></a>
                <?php //} ?>
            </div>
            <!-- End nhóm thanh công cụ -->
                
            <!-- Top Menu Items / Header Admin / Header Nav -->
                <?php include_once('./layout/nav/nheader.php') ?>
            <!-- End Header Admin -->
            
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
                <?php include_once('./layout/nav/nsidebar.php') ?>
            <!-- /.navbar-collapse -->
        </nav>
        <!-- End NAV -->