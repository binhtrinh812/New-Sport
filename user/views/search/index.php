<div class="container">
	<div style="padding-top: 50px;" class="hot-news">
		<div style="text-align: center;" class="hot-new-title">
			<h2><span>
				<?php if(empty($search)){?>
					Không có kết quả nào trùng khớp
				<?php } else {?>
					Kết quả tìm kiếm
					<?php } ?>
			</span></h2>
		</div>
		<div class="row">
			<div class="col-sm-12 col-xs-12">
				<div style="margin-top:30px;" class="hot-news-content">
					<div class="row">
						<?php foreach($search as $value) { ?>
							<div class="col-sm-4 col-xs-12">
								<div class="top-danhmuc">
									<div class="top-danhmuc-img">
										<div class="img-top-danhmuc">
										<a href="<?= $value['slug'] ?>.html "><img src="public/image/news/<?= $value['avatar'];?>"></a>
									</div>
									<a href="<?= $value['slug'] ?>.html "><?= $value['title'] ?></a>
										<p class="more-blogs danhmuc-blogs">
											<span class="tacgia"><?= $value['author'] ?></span>
											<span class="time">
												<i class="fa fa-clock-o"></i>
												<?= date(" H:i - d/m/Y",strtotime($value['created_at']))  ?>
											</span>
										</p>
									</div>
								</div>
							</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>	