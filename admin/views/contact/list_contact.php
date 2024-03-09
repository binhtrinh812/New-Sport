<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Contact <small> Overview</small>
        </h1>

        <?php include_once './views/notification/notification.php'; ?>
        <?php   foreach ($contacts as $contact) { ?>
        <ol class="breadcrumb">
            <li class="active">
                <a style="text-decoration: none;" href="index.php?page=contact&method=edit&id=<?= $contact['id']; ?>"> Update Contact</a>
            </li>
        </ol>
        <?php } ?>
    </div>
</div>

<div class="row">
<section class="contact spad">
    <?php   foreach ($contacts as $contact) { ?>
                <div class="col-lg-6 col-md-6">
                    <div class="contact__text">
                        <ul>
                            <li>
                                <h4>Address</h4>
                                <p><a href="#"><?= $contact['adds']; ?></a></p>
                            </li>
                            <li>
                                <h4>Phone</h4>
                                <p><a href="#"><?= $contact['phone']; ?></a></p>
                            </li>
                            <li>
                                <h4>Mail</h4>
                                <p><a href="#"><?= $contact['email']; ?></a></p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="contact__text">
                        <ul>
                            <li>
                                <h4>Facebook</h4>
                                <p><a href="#"><?= $contact['facebook']; ?></a></p>
                            </li>
                            <li>
                                <h4>Instagram</h4>
                                <p><a href="#"><?= $contact['instagram']; ?></a></p>
                            </li>
                        </ul>
                    </div>
                </div>
    <?php } ?>
            </section>
            <div class="row">
                <div class="col-lg-12">
            <div class="map">
                <iframe src="<?= $contact['map']; ?>" height="500" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
        </div>
            </div>