<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Update Contact <small> Overview</small>
        </h1>

        <ol class="breadcrumb">
            <li class="active">
                <a style="text-decoration: none;" href="index.php?page=contact&method=list"> Contact</a>
            </li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">

        <form name="frm_update_contact" id="frm_update_contact" method="POST" action="index.php?page=contact&method=update&id=<?= $contacts['id']; ?>" enctype="multipart/form-data">
            <div class="form-group">
                <label> Address <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="address" id="address" required minlength="3" maxlength="200" value="<?= !empty($contacts['adds']) ? $contacts['adds'] : '' ?>">
            </div>

            <div class="form-group">
                <label> Phone <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="phone" id="phone" required minlength="3" maxlength="255" value="<?= !empty($contacts['phone']) ? $contacts['phone'] : '' ?>">
            </div>

            <div class="form-group">
                <label> Mail <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="mail" id="mail" required minlength="3" maxlength="255" value="<?= !empty($contacts['email']) ? $contacts['email'] : '' ?>">
            </div>

            <div class="form-group">
                <label> Facebook <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="facebook" id="facebook" required minlength="3" maxlength="255"  value="<?= !empty($contacts['facebook']) ? $contacts['facebook'] : '' ?>">
            </div>

            <div class="form-group">
                <label> Instagram <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="instagram" id="instagram" required minlength="3" maxlength="255" value="<?= !empty($contacts['instagram']) ? $contacts['instagram'] : '' ?>">
            </div>

            <div class="form-group">
                <label> Map <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="map" id="map" required minlength="3" maxlength="500" value="<?= !empty($contacts['map']) ? $contacts['map'] : '' ?>">
            </div>

            <button type="submit" class="btn btn-primary" name="submit_update_contact">Save</button>
        </form>
    </div>
</div>