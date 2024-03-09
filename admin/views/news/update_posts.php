<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Update Posts <small> Overview</small>
        </h1>

        <ol class="breadcrumb">
            <li class="active">
                <a style="text-decoration: none;" href="index.php?page=news&method=list"> All Posts</a>
            </li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
    <form name="frm_update_news" id="frm_update_news" method="POST" action="index.php?page=news&method=update&id=<?= $news['id']; ?>" enctype="multipart/form-data">
            <div class="form-group">
                <label> Avatar </label>
                <input type="file" required name="avatar" id="avatar">
                <img src="../public/image/news/<?= $news['avatar']; ?>" width="80" alt="" style="margin-top: .8rem;">
            </div>

            <div class="form-group">
                <label> Title <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="title" id="title" required minlength="3" maxlength="200" placeholder="Name title" value="<?= !empty($news['title']) ? $news['title'] : '' ?>">
            </div>

            <div class="form-group">
                <label> Meta Title <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="meta_title" id="meta_title" required minlength="3" maxlength="200" placeholder="Name meta_title" value="<?= !empty($news['meta_title']) ? $news['meta_title'] : '' ?>">
            </div>

            <div class="form-group">
                <label> Meta Keyword <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="meta_keyword" id="meta_keyword" required minlength="3" maxlength="200" placeholder="Name meta_keyword" value="<?= !empty($news['meta_keyword']) ? $news['meta_keyword'] : '' ?>">
            </div>

            <div class="form-group">
                <label> Short Description <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="short_description" id="short_description" required minlength="3" maxlength="200" placeholder="Name short description" value="<?= !empty($news['short_description']) ? $news['short_description'] : '' ?>">
            </div>

            <div class="form-group">
                <label> Description <span class="text-danger">*</span></label>
                <textarea name="description1"><?= !empty($news['description']) ? $news['description'] : '' ?></textarea>
                    <script>
                        CKEDITOR.replace( 'description1' );
                    </script>
            </div>

            <div class="form-group">
                <label> Author <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="author" id="author" required minlength="3" maxlength="255" placeholder="Name author" value="<?= !empty($news['author']) ? $news['author'] : '' ?>">
            </div>

            <div class="form-group">
                    <label>Category <span class="text-danger">*</span></label>
                    <select class="form-control" name="category" id="category">
                    <?php foreach ($categories as $categorie) { ?>
                        <option <?= ($news['category_id'] == $categorie['id']) ? 'selected' : '' ?> value="<?= $categorie['id']; ?>">
                            <?= $categorie['name']; ?>
                        </option>
                    <?php } ?>
                </select>

                    </select>
            </div>

            <div class="form-group">
                <label>Active</label>
                <label class="radio-inline">
                    <input <?= !empty($news['status'] == 0) ? 'checked' : '' ?> type="radio" name="status" id="active_hide" value="4"> Hot posts
                </label>

                <label class="radio-inline">
                    <input <?= !empty($news['status'] == 0) ? 'checked' : '' ?> type="radio" name="status" id="active_hide" value="2"> Featured Posts
                </label>

                <label class="radio-inline">
                    <input <?= ($news['status']) ? 'checked' : '' ?> type="radio" name="active" id="status" value="1" checked> Display
                </label>

                <label class="radio-inline">
                    <input <?= !empty($news['status'] == 0) ? 'checked' : '' ?> type="radio" name="status" id="active_hide" value="0"> Hide
                </label>
            </div>

            <div class="form-group">
                <label> Content <span class="text-danger">*</span></label>
                <textarea name="content"><?= !empty($news['content']) ? $news['content'] : '' ?></textarea>
                    <script>
                        CKEDITOR.replace( 'content' );
                    </script>
            </div>

            <button type="submit" class="btn btn-primary" name="submit_update_news">Save</button>
        </form>
    </div>
</div>