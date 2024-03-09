		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-xs-12">
					<div class="row">
						<div class="col-sm-8">
							<div class="content-chitiet">
                                <div class="chitiet-title">
                                    <p class="title-chitiet"><?= $detailNew[0]['title'] ?></p>
                                    <p style="font-size: 12px;font-weight: 0px;" class="more-blogs">
                                        <span class="time">
                                            <span class="tacgia"><?= $detailNew[0]['author'] ?></span>
                                            <i class="fa fa-clock-o"></i>
                                            <?= date(" H:i - d/m/Y",strtotime($detailNew[0]['created_at']))  ?>
                                        </span>
                                    </p>
                                </div>
                                <div class="chitiet-share">							
                                    <div class="addthis_inline_share_toolbox_o2ct"></div>
                                </div>
                                <div class="short-desc">
                                </div>
                                <div class="chitiet-detail-desc">
                                    <?= $detailNew[0]['content'] ?>
                                </div>
                                <div class="binhluan">
								<div class="fb-comments" data-href="http://huynh.test/" data-width="100%" data-numposts="5"></div>
                                </div>							
							</div>
							<div class="xuhuong">
								<div class="xuhuong-title">
									<h1>Xu hướng mới</h1>
								</div>
								<div class="content-xuhuong">
									<div class="row">
                                    <?php foreach($postnew as $val){ ?>
									<div class="col-sm-6 col-xs-12">
										<div class="top-danhmuc-img">
											<div class="img-top-danhmuc">
											<a href="#comit"><img src="public/image/news/<?= $val['avatar']; ?>"></a>
										    </div>
										    <a class="short-desc-xuhuong" href="<?= $val['slug'] ?>.html"><?= $val['title'] ?></a>
											<p class="more-blogs danhmuc-blogs">
                                                <span class="time">
                                                    <i class="fa fa-clock-o"></i>
                                                    <?= date(" H:i - d/m/Y",strtotime($detailNew[0]['created_at']))  ?>
                                                </span>
									        </p>
										</div>
									</div>
                                    <?php } ?>
                                </div>
								</div>
							</div>
						</div>
                        <?php include_once('./user/views/block/_sidebar_right.php'); ?>
					</div>
				</div>
			</div>
		</div>	