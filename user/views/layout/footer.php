
<div style="background: rgba(17,17,17,1);" class="bg-gray">
    <div class="container">
        <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <div style="margin-top: 20px;padding-bottom: 20px;" class="footer">
                        <div class="row">
                            <div class="col-sm-4 col-xs-12">
                                    <div class="bottom-content">
                                        <div class="bottom-logo">
                                            <img src="public/banner/<?= $banner1[0]['photo']; ?>">
                                        </div>
                                        <p>Mauris elementum accumsan leo vel tempor. Sit amet cursus nisl aliquam. Lorem ipsum dosectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur Nulla fringilla</p>
                                        <div class="bottom-social-icon">
                                            <a href="<?= $contact[0]['facebook']  ?>"><i class="fa fa-facebook active"></i></a>
                                            <a href="<?= $contact[0]['instagram']  ?>"><i class="fa fa-instagram"></i></a>
                                            <a href=""><i class="fa fa-google-plus"></i></a>
                                            <a href=""><i class="fa fa-pinterest"></i></a>
                                        </div>
                                    </div>
                            </div>
                            <div class="col-sm-4 col-xs-12">
                                    <div class="bottom-title">
                                        <h2>BÀI ĐĂNG GẦN ĐÂY</h2>
                                    </div>
                                    <?php foreach($postNewsFoodter as $value){ ?>
                                    <div class="content-bottom">
                                        <a href=""><img src="public/image/news/<?= $value['avatar']; ?>">
                                            <p><?= $value['title']?></p></a>
                                    </div>
                                    <?php } ?>
                            </div>
                            <div class="col-sm-4 col-xs-12">
                                <div class="bottom-title">
                                    <h2>Liên hệ với chung tôi</h2>
                                </div>
                                <div class="content-bottom contact">
                                    <b>Địa chỉ:</b><p><?= $contact[0]['adds'] ?></p>
                                </div>
                                <div class="content-bottom contact">
                                    <b>Số điện thoại:</b><p><?= $contact[0]['phone'] ?></p>
                                </div>
                                <div class="content-bottom contact">
                                    <b>Email:</b><p><?= $contact[0]['email'] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer-bottom">
                        <div class="row">
                            <div class="col-sm-5">
                                    <div class="copyrightbox">
                                        <p>Copyright by Huỳnh Vũ</p>
                                    </div>
                            </div>
                                <div class="col-sm-7">
                                    <div class="copyrightbox pull-right atm-img">
                                        <img src="assets/images/custom-footer-payment.png">
                                    </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>