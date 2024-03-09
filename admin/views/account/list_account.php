<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Account <small> Overview</small>
        </h1>

        <?php include_once './views/notification/notification.php'; ?>

        <ol class="breadcrumb">
            <li class="active">
                <a style="text-decoration: none;" href="index.php?page=account&method=add"> New Account</a>
            </li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="table-responsive">
            <table id="example" class="table table-bordered table-hover" style="width:100%">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Permission</th>
                        <th>Time</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($accounts as $account) { ?>
                        <tr>
                            <td><?= $account['name']; ?></td>
                            <td><?= $account['phone']; ?></td>
                            <td><?= $account['email']; ?></td>
                            <td><?= $account['password']; ?></td>
                            <th><?= $account['permission']; ?></th>
                            <td><?= date(" H:i - d/m/Y",strtotime($account['created_at']))  ?></td>
                            <td><?= $account['status']; ?></td>
                            <td class="text-right">
                                <a href="index.php?page=account&method=edit&id=<?= $account['id']; ?>"><i class="fa fa-fw fa-edit"></i></a>
                                <a href="index.php?page=account&method=delete&id=<?= $account['id']; ?>" onclick="return confirm('Are you sure delete?');"><i class="fa fa-fw fa-trash text-danger"></i></a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>