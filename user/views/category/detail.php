<div class="container">
			<div class="row">
				<div class="col-sm-12 col-xs-12">
                    <div class="brecrum"><h1>Chuyên Mục <?= $detailCategory[0]['name']; ?></h1></div>
					<div class="row">
						<div class="col-sm-8">
                            <div class="content-danhmuc">
                                <div class="row">
                                <?php foreach($detailCategory[0]['listPost'] as $val) { ?>  
                                    <div class="col-sm-6 col-xs-12">
                                        <div class="detail-content-danhmuc">
                                            <div class="content-img">
                                                <a href=""><img src="public/image/news/<?= $val['avatar']; ?>"></a>
                                            </div>
                                            <p class="more-blogs">
                                                <span class="tacgia"><?= $val['author'] ?></span>
                                                <span class="time">
                                                    <i class="fa fa-clock-o"></i>
                                                    <?= date(" H:i - d/m/Y",strtotime($val['created_at']))  ?>
                                                </span>
                                            </p>
                                            <h2 class="title-blogs-item">
                                                <a href="<?= $val['slug'] ?>.html "><?= $val['title'] ?></a>
                                            </h2>
                                            <div class="content-desc">
                                                <?= $val['description'] ?>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                                <!-- <div class="phantrang">
                                    <div class="phan-trang">
                                        <ul class="pagination">
                                            <li class="page-item"><a class="page-link" href="#"><<</a></li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#">>></a></li>
                                        </ul>
                                    </div>
                                </div> -->
                            </div>
                            <div class="binhluan">
								<div class="fb-comments" data-href="http://huynh.test/" data-width="100%" data-numposts="5"></div>
                                </div>		
						</div>
                        <?php include_once('./user/views/block/_sidebar_right.php'); ?>
					</div>
				</div>
			</div>
		</div>	