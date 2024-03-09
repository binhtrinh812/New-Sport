<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Posts <small> Overview</small>
        </h1>

        <?php include_once './views/notification/notification.php'; ?>

        <ol class="breadcrumb">
            <li class="active">
                <a style="text-decoration: none;" href="index.php?page=news&method=add"> New Posts</a>
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
                        <th>Avatar</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Category</th>
                        <th>Time</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($news as $new) { ?>
                        <tr>
                            <td style="text-align: center"; width="100";>
                                <img src="../public/image/news/<?= $new['avatar']; ?>" 
                                style=" object-fit : cover;
                                        width: 100px;
                                        height: 60px";
                                        alt="">
                            </td>
                            <td width="500"><?= $new['title']; ?></td>
                            <td><?= $new['author']; ?></td>
                            <td><?= $new['name']; ?></td>
                            <td><?= date(" H:i - d/m/Y",strtotime($new['created_at']))  ?></td>
                            <td class="text-right">
                            <i style="cursor: pointer;" class="fa fa-fw fa-eye text-danger more_detail" data-id="<?= $new['id']; ?>" data-toggle="modal" data-target="#detail_product"></i>
                            <a href="index.php?page=news&method=edit&id=<?= $new['id']; ?>"><i class="fa fa-fw fa-edit"></i></a>
                            <a href="index.php?page=news&method=delete&id=<?= $new['id']; ?>" onclick="return confirm('Are you sure delete?');"><i class="fa fa-fw fa-trash text-danger"></i></a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>

            <div class="modal fade" id="detail_product" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">News</h4>
                        </div>
                        <div class="modal-body">
                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>