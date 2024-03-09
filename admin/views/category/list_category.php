<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Category <small> Overview</small>
        </h1>
        <?php include_once './views/notification/notification.php'; ?>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="table-responsive">
            <table id="example" class="table table-bordered table-hover" style="width:100%">
                <thead>
                    <tr>
                        <th>Category</th>
                        <th>Slug</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($categories as $category) { ?>
                        <tr>
                            <td><?= $category['name']; ?></td>
                            <td><?= $category['slug']; ?></td>
                            <td><?= $category['status']; ?></td>
                            <td class="text-right">
                                <a href="index.php?page=category&method=edit&id=<?= $category['id']; ?>"><i class="fa fa-fw fa-edit"></i></a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>