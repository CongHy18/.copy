<div class="header">
        <div class="header__top">
            <div class="wrap-content">
                <p class="info__header"><?= $slogan['name' . $lang] ?></p>
                <p class="info__header"><i class="fas fa-envelope"></i>Email: <?= $optsetting['email'] ?></p>
                <p class="info__header"><i class="fas fa-phone-square-alt"></i>Hotline: <?= $func->formatPhone($optsetting['hotline']) ?></p>
                <ul class="social social__header list-unstyled p-0 m-0">
                    <?php foreach ($social as $k => $v) { ?>
                        <li class="d-inline-block align-top mr-1">
                            <a href="<?= $v['link'] ?>" target="_blank" class="hvr-float-shadow">
                                <?= $func->getImage(['sizes' => '20x20x3', 'upload' => UPLOAD_PHOTO_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>

    <div class="header__bottom">
        <div class="wrap-content">
            <a class="logo__header peShiner" href=""><?= $func->getImage(['sizes' => '100x90x3', 'upload' => UPLOAD_PHOTO_L, 'image' => $logo['photo'], 'alt' => $setting['name' . $lang]]) ?></a>
            <a class="banner__header" href=""><?= $func->getImage(['sizes' => '390x80x3', 'upload' => UPLOAD_PHOTO_L, 'image' => $banner['photo'], 'alt' => $setting['name' . $lang]]) ?></a>
            <a class="hotline__header">
                <?= $func->getImage(['class' => 'mr-3 animate__tada animate__animated animate__infinite', 'size-error' => '40x40x2', 'upload' => 'assets/images/', 'image' => 'hotline.png', 'alt' => 'Hotline']) ?>
                <div class="w-phone">
                    <p class="mb-0">Hotline: </p>
                    <span><?= $func->formatPhone($optsetting['hotline'], ' ') ?></span>
                </div>
            </a>
            <ul class="social list-unstyled p-0 m-0">
                <?php foreach ($social as $k => $v) { ?>
                    <li class="d-inline-block align-top mr-1">
                        <a href="<?= $v['link'] ?>" target="_blank" class="hvr-float-shadow">
                            <?= $func->getImage(['sizes' => '20x20x3', 'upload' => UPLOAD_PHOTO_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
                        </a>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</div>