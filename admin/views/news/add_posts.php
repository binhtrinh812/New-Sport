<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            New Posts <small> Overview</small>
        </h1>

        <ol class="breadcrumb">
            <li class="active">
                <a style="text-decoration: none;" href="index.php?page=news"> All Posts</a>
            </li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
    <form name="frm_add_news" id="frm_add_news" method="POST" action="index.php?page=news&method=store" enctype="multipart/form-data">
            <div class="form-group">
                <label> Avatar </label>
                <input type="file" required name="avatar" id="avatar">
            </div>

            <div class="form-group">
                <label> Title <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="title" id="title" required minlength="3" maxlength="200" placeholder="Name title" value="">
            </div>

            <div class="form-group">
                <label> Meta Title <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="meta_title" id="meta_title" required minlength="3" maxlength="200" placeholder="Name meta_title" value="">
            </div>

            <div class="form-group">
                <label> Meta Keyword <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="meta_keyword" id="meta_keyword" required minlength="3" maxlength="200" placeholder="Name meta_keyword" value="">
            </div>

            <div class="form-group">
                <label> Short Description <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="short_description" id="short_description" required minlength="3" maxlength="200" placeholder="Name short description" value="">
            </div>

            <div class="form-group">
                <label> Description <span class="text-danger">*</span></label>
                <textarea name="description1"></textarea>
                    <script>
                            CKEDITOR.replace('description1');
                    </script>
            </div>

            <div class="form-group">
                <label> Author <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="author" id="author" required minlength="3" maxlength="255" placeholder="Name author" value="">
            </div>

            <div class="form-group">
                    <label>Category <span class="text-danger">*</span></label>
                    <select class="form-control" name="category" id="category">
                        <?php foreach ($categories as $categorie) { ?>
                            <option value="<?= $categorie['id']; ?>">
                                <?= $categorie['name']; ?>
                            </option>
                        <?php } ?>
                    </select>

            </div>

            <div class="form-group">
                <label>Active</label>
                <label class="radio-inline">
                    <input type="radio" name="status" id="active_show" value="3" checked> Hot Posts
                </label>

                <label class="radio-inline">
                    <input type="radio" name="status" id="active_show" value="2" checked> Featured Posts
                </label>

                <label class="radio-inline">
                    <input type="radio" name="status" id="active_show" value="1" checked> Display
                </label>

                <label class="radio-inline">
                    <input type="radio" name="status" id="active_hide" value="0"> Hide
                </label>
            </div>

            <div class="form-group">
                <label> Content <span class="text-danger">*</span></label>
                <textarea name="content"></textarea>
                                    <script>
                                        CKEDITOR.replace( 'content' );
                                    </script>
            </div>

        <button type="submit" class="btn btn-primary" name="submit_add_news">Save</button>
        
    </form>
    </div>
</div>