<div class="col-sm-4">
    <div class="right-danhmuc">
        <div class="ads2">
            <img src="public/image/news/a35a2346a1630f1ef770d6939a6af6b6.jpg">
        </div>
    </div>
    <div class="category">
        <div class="category-title">
            <a href=""><i class="fa fa-list-alt"></i> DANH MỤC TIN TỨC</a>
            <div class="category-list">
                <ul>
                    <?php foreach($category as $val ){ ?>
                    <li>
                        <a href="<?= $val['slug']?>"><i class="fa fa-angle-double-right"></i><?= $val['name']?></a>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
    <div class="hot-news">
        <div class="title-widget">
            <h2>
                <span>
                    Bài viết phổ biến
                </span>
            </h2>
            <span class="sub-title"></span>
        </div>
        <div class="mini-hotnew">
            <?php foreach($postNewsFoodter as $val){ ?>
            <div class="mini-hot-new-img">										
                <a href="<?= $val['slug'] ?>.html"><img src="public/image/news/<?= $val['avatar']; ?>"><p><?= $val['title'] ?></p></a>
            </div>
            <?php } ?>
        </div>
    </div>
</div>