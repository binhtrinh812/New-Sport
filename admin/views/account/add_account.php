<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            New Account <small> Overview</small>
        </h1>

        <ol class="breadcrumb">
            <li class="active">
                <a style="text-decoration: none;" href="index.php?page=account"> List Account</a>
            </li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
    <form name="frm_add_account" id="frm_add_account" method="POST" action="index.php?page=account&method=store" enctype="multipart/form-data">
            <div class="form-group">
                <label> Name <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="name" id="name" required minlength="3" maxlength="200" placeholder="Name " value="">
            </div>

            <div class="form-group">
                <label> Phone <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="phone" id="phone" required minlength="3" maxlength="200" placeholder="Name phone" value="">
            </div>

            <div class="form-group">
                <label> Email <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="email" id="email" required minlength="3" maxlength="200" placeholder="Name email" value="">
            </div>

            <div class="form-group">
                <label> Password <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="password" id="password" required minlength="3" maxlength="200" placeholder="Name password" value="">
            </div>

            <div class="form-group">
                <label>Active</label>
                <label class="radio-inline">
                    <input type="radio" name="status" id="active_onl" value="1" checked> Online
                </label>

                <label class="radio-inline">
                    <input type="radio" name="status" id="active_off" value="0"> Offline
                </label>
            </div>

        <button type="submit" class="btn btn-primary" name="submit_add_account">Save</button>
        
    </form>
    </div>
</div>