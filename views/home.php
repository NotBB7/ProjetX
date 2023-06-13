<?php include "components/head.php" ?>
<?php include "components/navbar.php" ?>
<div class="team-boxed">
    <div class="container">
        <div class="row people">

            <?php include '../models/data.php'; ?>
            <?php $cardCount = 0; ?>
            <?php foreach ($data as $info) { ?>
                <?php if ($cardCount < 12) { ?>
                <div class="col-md-6 col-lg-4 item">
                    <div class="box"><img src="<?php echo $info['image']; ?>" alt="Image">
                        <h3 class="name"><?= $info['name'] ?></h3>
                        <p class="title"><?= $info['region'] ?></p>
                        <p class="description">
                            <p>Email : <?= $info['email'] ?></p>
                            <p>Postal : <?= $info['postalZip'] ?></p>
                            <p>Phone : <?= $info['phone'] ?></p>
                        </p>
                        <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                    </div>
                </div>
                <?php $cardCount++; ?>
                <?php } ?>
            <?php } ?>





<?php include "components/footer.php" ?>