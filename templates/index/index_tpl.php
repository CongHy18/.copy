




<?php /*

<?= $func->decodeHtmlChars($footer['content' . $lang]) ?>

<?php if(!$func->isGoogleSpeed()) { ?>
    
<?php }?>

<div class="title-main">
    <span> Tiêu Đề</span>
    <div class="slogan"><?= $slogan['name'.$lang] ?></div>
    <!-- <div class="line-text"><?= $func->getImage(['upload' => 'assets/images/set/', 'image' => 'line-text.png']) ?></div> -->
</div>

<div class="numb">
    <?php
    if ($k < 9) {
        echo "0" . ($k + 1);
    } else {
        echo  $k + 1;
    }
    ?>
</div>

<div class="numb">
    <?php
    echo sprintf("%02d", $k + 1);
?>
</div>

<div class="wrap__aboutus py50">
    <div class="wrap-content">
        <div class="row align-items-center">
            <div class="col-md-6 mgb-res col__left">
                <div class="title__aboutus">ĐÔI NÉT VỀ</div>
                <div class="name__aboutus"><?= $gioithieu['name' . $lang] ?></div>
                <div class="desc__aboutus text-split mb-3">
                    <?= $gioithieu['desc' . $lang] ?>
                </div>
                <a href="gioi-thieu" class="btn-custom">Xem thêm <i class="fa-sharp fa-solid fa-arrow-right ml-2"></i></a>

            </div>
            <div class="col-md-6 col__right mgb-res">
                <div class="aboutus__image rel scale-img hover_xam">
                    <?= $func->getImage(['class' => 'lazy', 'sizes' => '500x575x1', 'upload' => UPLOAD_NEWS_L, 'image' => $gioithieu['photo'], 'alt' => $gioithieu['name' . $lang]]) ?>
                </div>
            </div>
        </div>
    </div>
</div>



<?php if (count($pronb)) { ?>
    <div class="wrap__product py60">
        <div class="wrap-content">
            <div class="title-main">
                <div class="slogan"><?= $slogan['name' . $lang] ?></div>
                <span>MÓN NGON PHẢI THỬ</span>
                <div class="line-text"><?= $func->getImage(['upload' => 'assets/images/set/', 'image' => 'line-text.png']) ?></div>
            </div>
            <div class="section__outstanding">
                <div class="owl-page owl-carousel owl-theme" data-items="screen:0|items:1|margin:0,screen:425|items:2|margin:10,screen:575|items:2|margin:10,screen:767|items:2|margin:30,screen:991|items:3|margin:20,screen:1199|items:3|margin:20" data-rewind="1" data-autoplay="1" data-loop="1" data-lazyload="0" data-mousedrag="1" data-touchdrag="1" data-smartspeed="300" data-autoplayspeed="1500" data-autoplaytimeout="3500" data-dots="1" data-nav="1" data-navcontainer=".control-outstanding">
                    <?php foreach ($pronb as $v) { ?>
                        <div class="product">
                            <div class="box-product text-decoration-none">
                                <div class="image__product">
                                    <a class="pic-product hover_xam scale-img" href="<?= $v['slug' . $lang] ?>" title="<?= $v['name' . $lang] ?>">
                                        <?= $func->getImage(['isWebp' => false, 'isLazy' => false, 'sizes' => '330x330x1', 'isWatermark' => true, 'prefix' => 'product', 'upload' => UPLOAD_PRODUCT_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
                                    </a>
                                </div>
                                <div class="info-product text-center">
                                    <div class="name-product text-split"><a class="" href="<?= $v['slug' . $lang] ?>" title="<?= $v['name' . $lang] ?>"><?= $v['name' . $lang] ?></a></div>
                                    <p class="price-product">
                                        <span>GIÁ: </span>
                                        <span class="price-new"><?= ($v['regular_price']) ? $func->formatMoney($v['regular_price']) : lienhe ?></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<?php if (count($tieuchi)) { ?>
    <div class="wrap__criteria py60">
        <div class="wrap-content">
            <div class="position-relative">
                <div class="owl-page owl-carousel owl-theme" data-items="screen:0|items:1|margin:0,screen:425|items:1|margin:0,screen:575|items:2|margin:10,screen:767|items:2|margin:30,screen:991|items:3|margin:20,screen:1199|items:4|margin:30" data-rewind="1" data-autoplay="1" data-loop="0" data-lazyload="0" data-mousedrag="1" data-touchdrag="1" data-smartspeed="300" data-autoplayspeed="1500" data-autoplaytimeout="3500" data-dots="0" data-nav="1" data-navcontainer=".control-criteria">
                    <?php foreach ($tieuchi as $v) { ?>
                        <div class="criteria">
                            <div class="box-criteria d-flex justify-content-between align-items-center">
                                <a class="criteria__image" title="<?= $v['name' . $lang] ?>">
                                    <?= $func->getImage(['class' => 'lazy', 'sizes' => '50x50x3', 'upload' => UPLOAD_NEWS_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
                                </a>
                                <div class="criteria__info">
                                    <div class="criteria__name">
                                        <?= $v['name' . $lang] ?>
                                    </div>
                                    <div class="criteria__desc text-split">
                                        <?= $v['desc' . $lang] ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<div class="wrap__product py50 pb-0">
    <?php if (count($splist)) {
        foreach ($splist as $vlist) { ?>
            <div class="wrap__product mb-50">
                <div class="wrap-content">
                    <div class="title-main">
                        <span><?= $vlist['name' . $lang] ?></span>
                        <div class="slogan"><?= $vlist['desc' . $lang] ?></div>
                    </div>
                    <div class="paging-product-category paging-product-category-<?= $vlist['id'] ?>" data-list="<?= $vlist['id'] ?>">
                    </div>
                </div>
            </div>
    <?php }
    } ?>
</div>

<?php if (count($album)) { ?>
    <div class="wrap__album py50 ">
        <div class="wrap-content">
            <div class="title-main">
                <span>Album Ảnh</span>
                <div class="slogan"><?= $slogan['name'.$lang] ?></div>
            </div>
             <div class="main__album">
                <?php foreach ($album as $k => $v) {
                    $hinhanhcon = $cache->get("select name$lang,photo,id_parent from #_gallery where type = ? and id_parent = ? and find_in_set('hienthi',status) order by numb,id desc ", array('hinh-anh', $v['id']), 'result', 7200);
                    $sizes = '';
                    if ($k == 1) {
                        $sizes = '365x530x1';
                    } else {
                        $sizes = '385x275x1';
                    }

                ?>
                    <div class="items__album">
                        <a class="image__album d-block scale-img hover_xam" data-fancybox="img-<?= $v['id'] ?>" href="<?= UPLOAD_PRODUCT_L . $v['photo'] ?>" target="_blank">
                            <?= $func->getImage(['isLazy' => false, 'class' => 'w-100', 'sizes' => $sizes, 'upload' => UPLOAD_PRODUCT_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
                        </a>
                        <?php foreach ($hinhanhcon as $key => $value) { ?>
                            <div class="d-none">
                                <a class="image__album" data-fancybox="img-<?= $v['id'] ?>" href="<?= UPLOAD_PRODUCT_L . $value['photo'] ?>" target="_blank">
                                    <?= $func->getImage(['isLazy' => false, 'class' => 'w-100', 'sizes' => $sizes, 'upload' => UPLOAD_PRODUCT_L, 'image' => $value['photo'], 'alt' => $value['name' . $lang]]) ?>
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                <?php } ?>

            </div>
        </div>
    </div>
<?php } ?>

<div class="wrap__news">
    <div class="wrap-content">
        <div class="title-main">
            <span>Tin tức & Sự kiện</span>
            <div class="slogan"><?= $slogan['name'.$lang] ?></div>
        </div>
        <div class="owl-page owl-carousel owl-theme" data-items="screen:0|items:1|margin:0,screen:425|items:2|margin:10,screen:575|items:2|margin:10,screen:767|items:2|margin:20,screen:991|items:3|margin:20,screen:1199|items:3|margin:30" data-rewind="1" data-autoplay="1" data-loop="0" data-lazyload="0" data-mousedrag="1" data-touchdrag="1" data-smartspeed="300" data-autoplayspeed="1500" data-autoplaytimeout="3500" data-dots="0" data-nav="1" data-navcontainer=".control-news">
            <?php foreach ($newsnb as $v) { ?>
                <div class="main__news">
                    <div class="image">
                        <?= $func->getImage(['class' => 'lazy w-100', 'sizes' => '375x305x1', 'upload' => UPLOAD_NEWS_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
                    </div>
                    <div class="news__info">
                        <div class="news__name">
                            <a href="<?= $v['slugvi'] ?>" class="up bold text-split color__hover"><?= $v['name'.$lang] ?></a>
                        </div>
                        <div class="news__desc text-split regular">
                            <?= $v['descvi'] ?>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>

<div class="wrap__video py50">
    <div class="wrap-content">
        <div class="row main-video">
            <div class="col-md-6 col__left mgb-res">
                <div class="title-main text-left">
                    <span class="text-left">Video Clips</span>
                </div>
                <div class="owl-page owl-carousel owl-theme" data-items="screen:0|items:1|margin:0" data-rewind="1" data-autoplay="0" data-loop="0" data-lazyload="0" data-mousedrag="1" data-touchdrag="1" data-smartspeed="500" data-autoplayspeed="3500" data-dots="0" data-nav="1" data-navcontainer=".control-brand">
                    <?php foreach ($videonb as $v) { ?>
                        <div class="video mb-0">
                            <a data-fancybox="video" data-src="<?= $v['link_video'] ?>" class="video-image d-block mb-0">
                                <?= $func->getImage(['class' => 'lazy w-100', 'size' => '600x375x1', 'url' => 'https://img.youtube.com/vi/' . $func->getYoutube($v['link_video']) . '/0.jpg', 'alt' => $v['name' . $lang]]) ?>
                                <div class="play-icon">
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="70px" width="70px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
                                        <path class="play-icon-stroke-solid" fill="none" stroke="white" d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7
                                        C97.3,23.7,75.7,2.3,49.9,2.5"></path>
                                        <path class="play-icon-stroke-dotted" fill="none" stroke="white" d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7
                                        C97.3,23.7,75.7,2.3,49.9,2.5"></path>
                                        <path class="play-icon-icon" fill="white" d="M38,69c-1,0.5-1.8,0-1.8-1.1V32.1c0-1.1,0.8-1.6,1.8-1.1l34,18c1,0.5,1,1.4,0,1.9L38,69z"></path>
                                    </svg>
                                </div>
                            </a>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="col-md-6 col__right">
                <div class="title-main text-left">
                    <span class="text-left">Facebook</span>
                </div>
                <?= $addons->set('fanpage-facebook', 'fanpage-facebook', 2); ?>
            </div>
        </div>
    </div>
</div>

<?php if (count($partner)) { ?>
    <div class="wrap__partner py30">
        <div class="wrap-content">
            <div class="title-main">
                <span> Đối Tác Khách Hàng</span>
                <div class="slogan"><?= $slogan['name'.$lang] ?></div>
            </div>
            <div class="position-relative">
                <div class="owl-page owl-carousel owl-theme" data-items="screen:0|items:2|margin:10,screen:425|items:3|margin:10,screen:575|items:4|margin:10,screen:767|items:4|margin:10,screen:991|items:5|margin:10,screen:1199|items:5|margin:10" data-rewind="1" data-autoplay="1" data-loop="0" data-lazyload="0" data-mousedrag="1" data-touchdrag="1" data-smartspeed="300" data-autoplayspeed="1500" data-autoplaytimeout="3500" data-dots="0" data-nav="1" data-navcontainer=".control-partner">
                    <?php foreach ($partner as $v) { ?>
                        <div>
                            <a class="partner" href="<?= $v['link'] ?>" target="_blank" title="<?= $v['name' . $lang] ?>">
                                <?= $func->getImage(['class' => 'lazy', 'sizes' => '100x70x3', 'upload' => UPLOAD_PHOTO_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
                            </a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<div class="wrap__form py50">
    <div class="wrap-content">
        <?php include TEMPLATE . LAYOUT . "newsletter.php"; ?>
    </div>
</div>

*/ ?>