

<div class="main">
<!-- xu hướng -->
<div class="xuhuong">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-xs-12">
				<div class="block-news box-product news-trending">
					<ul class="nav_title">
						<li>
							<a><i class="fa fa-bolt"></i> XU HƯỚNG</a>
						</li>
					</ul>
				</div>
				<!-- Set up your HTML -->
				<div class="item-slide owl-carousel owl-theme">
					<?php foreach( $list as $key => $item) { ?>
					<div class="item"><a  href="<?php echo $item['slug'] ?>.html"><?php echo $item['title'] ?></a></div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>	
</div>
<!-- /xu hướng -->

<!-- content xu hướng -->
<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12 col-xs-12">
<div class="contentxuhuong">
		<div class="row">
			<div class="col-sm-6 col-xs-12">
				<div class="xuhuong-left">
					<div class="img-left">
						<a class="img-news" href="<?= $items_hot_left[0]['slug'] ?> "><img src="public/image/news/<?= $items_hot_left[0]['avatar']; ?>"></a>
					</div>
					<div class="info">
						<h2 class="title-blogs-item">
							<a href="<?= $items_hot_left[0]['slug'] ?>.html "><?= $items_hot_left[0]['title'] ?></a>
						</h2>
						<p class="more-blogs">
							<span class="time">
								<span class="tacgia"><?= $items_hot_left[0]['author'] ?></span>
								<i class="fa fa-clock-o"></i>
								<?= date(" H:i - d/m/Y",strtotime($items_hot_left[0]['created_at']))  ?>
							</span>
						</p>
					</div>
				</div>	
			</div>
			<div class="col-sm-6 col-xs-12">
				<?php foreach($items_hot_right as $value) {?>
				<div class="xuhuong-right">
					<div class="col-sm-12 col-xs-12">
						<div class="xuhuong-right-img">
							<div class="img-right">
								<a class="img-news-right" href="<?= $value['slug'] ?>.html "><img src="	public/image/news/<?= $value['avatar']; ?>"></a>
							</div>
							<div class="info">
								<h2 class="title-blogs-item">
									<a href="<?= $value['slug'] ?>.html "><?= $value['title'] ?></a>
								</h2>
								<p class="more-blogs">
									<span class="tacgia"><?= $value['author'] ?></span>
									<span class="time">
										<i class="fa fa-clock-o"></i>
										<?= date(" H:i - d/m/Y",strtotime($value['created_at']))  ?>
									</span>
								</p>
							</div>
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
<!-- end content xu hướng -->

<div class="container">
	<div class="row">
		<div class="col-sm-12 col-xs-12">
			<div class="danhmuc">
				<div class="row">
					<?php foreach($categories as $value) {?>
					<div class="col-sm-4 col-xs-12 danhmuc-toankhoi">
						<div class="title-danhmuc">
							<h3><i class="fa fa-bolt"></i><?= $value['name'] ?></h3>
						</div>
						<div class="danhmuc-content">
							<?php foreach($value['listPost'] as $item) { ?>
							<div class="bottom-danhmuc">
									<div class="bottom-danhmuc-content">
										<div class="img-blog-small">
											<a href="<?= $item['slug'] ?>.html "><img src="public/image/news/<?= $item['avatar']; ?>"></a>
										</div>
										<div class="blog-info">
											<h2 class="bottom-title">
												<a href="<?= $item['slug'] ?>.html "><?= $item['title'] ?></a>
											</h2>
											<p class="more-blogs danhmuc-blogs">
												<span class="time">
													<i class="fa fa-clock-o"></i>
													<?= date(" H:i - d/m/Y",strtotime($item['created_at']))  ?>
												</span>
											</p>
										</div>
									</div>
								</div>
								<?php } ?>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>
<div style="padding-bottom:50px ;"  class="bg-black">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-xs-12">
				<div class="row">
					<?php foreach($video as $videos) {?>
						<div class="col-sm-4 col-xs-12">
							<div class="bottom-video">
								<div class="item-block video-bottom-block">
									<div class="video-gallery">
										<a href="<?= $videos['link'] ?>" data-lity>
											<div class="image-wrapper">
												<div class="img">
													<img id="image-video" src="public/video/<?= $videos['photo']; ?>">
													<div class="image-title"><?= $videos['title'] ?></div>
													<div class="image-hover">
														<i class="fa fa-play"></i>
													</div>
												</div>
											</div>
										</a>
									</div>
								</div>
							</div>
						</div>
						<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div style="padding-top: 50px;" class="hot-news">
		<div style="text-align: center;" class="hot-new-title">
			<h2><span>
				Tin tức mới nhất
			</span></h2>
			<span class="sub-title">Liều lượng cảm hứng hàng ngày của bạn</span>
		</div>
		<div class="row">
			<div class="col-sm-12 col-xs-12">
				<div style="margin-top:30px;" class="hot-news-content">
					<div class="row">
						<?php foreach($postnew as $value) { ?>
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

</div>
<!-- end main -->
</body>

</html>