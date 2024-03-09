S<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Update Category <small> Overview</small>
        </h1>

        <ol class="breadcrumb">
            <li class="active">
                <a style="text-decoration: none;" href="index.php?page=category"> All Category</a>
            </li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">

        <form name="frm_update_category" id="frm_update_category" method="POST" action="index.php?page=category&method=update&id=<?= $categories['id']; ?>" enctype="multipart/form-data">
            <div class="form-group">
                <label> Category <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="name" id="name" required minlength="3" maxlength="200" placeholder="Name " value="<?= !empty($categories['name']) ? $categories['name'] : '' ?>">
            </div>

            <div class="form-group">
                <label> Slug <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="slug" id="slug" required minlength="3" maxlength="200" placeholder="Name slug" value="<?= !empty($categories['slug']) ? $categories['slug'] : '' ?>">
            </div>

            <div class="form-group">
                <label>Active</label>
                <label class="radio-inline">
                    <input <?= ($categories['status']) ? 'checked' : '' ?> type="radio" name="status" id="active_onl" value="1" checked> Online
                </label>

                <label class="radio-inline">
                    <input <?= !empty($categories['status'] == 0) ? 'checked' : '' ?> type="radio" name="status" id="active_off" value="0"> Offline
                </label>
            </div>    

            <button type="submit" class="btn btn-primary" name="submit_update_category">Save</button>
        </form>
    </div>
</div>