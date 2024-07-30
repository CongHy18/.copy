<div class="grid-pro-detail w-clear">
    <div class="row">
        <div class="left-pro-detail col-md-6 col-lg-5 mb-4">
            <a id="Zoom-1" class="MagicZoom" data-options="zoomMode: off; hint: off; rightClick: true; selectorTrigger: hover; expandCaption: false; history: false;" href="thumbs/500x500x1/<?= UPLOAD_PRODUCT_L . $rowDetail['photo'] ?>" title="<?= $rowDetail['name' . $lang] ?>">
                <?= $func->getImage(['isLazy' => false, 'sizes' => '500x500x1', 'isWatermark' => false, 'prefix' => 'product', 'upload' => UPLOAD_PRODUCT_L, 'image' => $rowDetail['photo'], 'alt' => $rowDetail['name' . $lang]]) ?>
            </a>
            <?php if ($rowDetailPhoto) {
                if (count($rowDetailPhoto) > 0) { ?>
                    <div class="gallery-thumb-pro">
                        <div class="owl-page owl-carousel owl-theme owl-pro-detail" data-items="screen:0|items:5|margin:10" data-nav="1" data-navcontainer=".control-pro-detail">
                            <div>
                                <a class="thumb-pro-detail" data-zoom-id="Zoom-1" href="thumbs/500x500x1/<?= UPLOAD_PRODUCT_L . $rowDetail['photo'] ?>" title="<?= $rowDetail['name' . $lang] ?>">
                                    <?= $func->getImage(['isLazy' => false, 'sizes' => '500x500x1', 'isWatermark' => false, 'prefix' => 'product', 'upload' => UPLOAD_PRODUCT_L, 'image' => $rowDetail['photo'], 'alt' => $rowDetail['name' . $lang]]) ?>
                                </a>
                            </div>
                            <?php foreach ($rowDetailPhoto as $v) { ?>
                                <div>
                                    <a class="thumb-pro-detail" data-zoom-id="Zoom-1" href="thumbs/500x500x1/<?= UPLOAD_PRODUCT_L . $v['photo'] ?>" title="<?= $rowDetail['name' . $lang] ?>">
                                        <?= $func->getImage(['isLazy' => false, 'sizes' => '500x500x1', 'isWatermark' => false, 'prefix' => 'product', 'upload' => UPLOAD_PRODUCT_L, 'image' => $v['photo'], 'alt' => $rowDetail['name' . $lang]]) ?>
                                    </a>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="control-pro-detail control-owl transition"></div>
                    </div>
            <?php }
            } ?>
        </div>

        <div class="right-pro-detail col-md-6 col-lg-7 mb-4">
            <p class="title-pro-detail mb-2"><?= $rowDetail['name' . $lang] ?></p>
            <?php if (empty($quickview)) { ?>
            <div class="social-plugin social-plugin-pro-detail w-clear">
                <?php
                $params = array();
                $params['oaid'] = $optsetting['oaidzalo'];
                echo $func->markdown('social/share', $params);
                ?>
            </div>
            <?php } ?>
            <div class="desc-pro-detail"><?= nl2br($func->decodeHtmlChars($rowDetail['desc' . $lang])) ?></div>
            <ul class="attr-pro-detail">
                <?php if (!empty($rowDetail['code'])) { ?>
                    <li class="w-clear">
                        <label class="attr-label-pro-detail"><?= masp ?>:</label>
                        <div class="attr-content-pro-detail"><?= $rowDetail['code'] ?></div>
                    </li>
                <?php } ?>
                <?php if (!empty($productBrand['id'])) { ?>
                    <li class="w-clear">
                        <label class="attr-label-pro-detail"><?= thuonghieu ?>:</label>
                        <div class="attr-content-pro-detail"><a class="text-decoration-none" href="<?= $productBrand[$sluglang] ?>" title="<?= $productBrand['name' . $lang] ?>"><?= $productBrand['name' . $lang] ?></a></div>
                    </li>
                <?php } ?>
                <li class="w-clear">
                    <label class="attr-label-pro-detail"><?= gia ?>:</label>
                    <div class="attr-content-pro-detail">
                        <?php if ($rowDetail['sale_price']) { ?>
                            <span class="price-new-pro-detail"><?= $func->formatMoney($rowDetail['sale_price']) ?></span>
                            <span class="price-old-pro-detail"><?= $func->formatMoney($rowDetail['regular_price']) ?></span>
                        <?php } else { ?>
                            <span class="price-new-pro-detail"><?= ($rowDetail['regular_price']) ? $func->formatMoney($rowDetail['regular_price']) : lienhe ?></span>
                        <?php } ?>
                    </div>
                </li>
                <?php if (!empty($rowColor)) { ?>
                    <li class="color-block-pro-detail w-clear">
                        <label class="attr-label-pro-detail d-block"><?= mausac ?>:</label>
                        <div class="attr-content-pro-detail d-block">
                            <?php foreach ($rowColor as $k => $v) { ?>
                                <?php if ($v['type_show'] == 1) { ?>
                                    <label for="color-pro-detail-<?= $v['id'] ?>" class="color-pro-detail text-decoration-none" data-idproduct="<?= $rowDetail['id'] ?>" style="background-image: url(<?= UPLOAD_COLOR_L . $v['photo'] ?>)">
                                        <input type="radio" value="<?= $v['id'] ?>" id="color-pro-detail-<?= $v['id'] ?>" name="color-pro-detail">
                                    </label>
                                <?php } else { ?>
                                    <label for="color-pro-detail-<?= $v['id'] ?>" class="color-pro-detail text-decoration-none" data-idproduct="<?= $rowDetail['id'] ?>" style="background-color: #<?= $v['color'] ?>">
                                        <input type="radio" value="<?= $v['id'] ?>" id="color-pro-detail-<?= $v['id'] ?>" name="color-pro-detail">
                                    </label>
                                <?php } ?>
                            <?php } ?>
                        </div>
                    </li>
                <?php } ?>
                  
                <?php if (isset($config['LQD']['cart']) && $config['LQD']['cart'] == true) {?>
                <li class="w-clear">
                    <div class="d-flex justify-content-start align-items-center flex-wrap">
                        <label class="attr-label-pro-detail d-inline-block mr-2"><?= soluong ?>:</label>
                        <div class="attr-content-pro-detail d-block">
                            <div class="quantity-pro-detail">
                                <span class="quantity-minus-pro-detail">-</span>
                                <input type="number" class="qty-pro" min="1" value="1" readonly />
                                <span class="quantity-plus-pro-detail">+</span>
                            </div>
                        </div>
                    </div>
                </li>
                 <?php } ?>
                <li class="w-clear">
                    <label class="attr-label-pro-detail"><?= luotxem ?>:</label>
                    <div class="attr-content-pro-detail"><?= $rowDetail['view'] ?></div>
                </li>
            </ul>
            <?php if (isset($config['LQD']['cart']) && $config['LQD']['cart'] == true) {?>
            <div class="cart-pro-detail">
                <a class="btn btn-cart-main addcart mr-2" data-id="<?= $rowDetail['id'] ?>" data-action="addnow">
                    <i class="fa-light fa-bag-shopping mr-1"></i>
                    <span><?=themvaogiohang?></span>
                </a>
                <a class="btn btn-dark addcart" data-id="<?= $rowDetail['id'] ?>" data-action="buynow">
                    <i class="fa-light fa-bag-shopping mr-1"></i>
                    <span><?=muangay?></span>
                </a>
            </div>
             <?php } ?>
        </div>
    </div>
    <?php if (empty($quickview)) { ?>
    <div class="tags-pro-detail w-clear">
        <?php if (!empty($rowTags)) {
            foreach ($rowTags as $v) { ?>
                <a class="btn btn-sm btn-danger rounded" href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>"><i class="fas fa-tags"></i><?= $v['name' . $lang] ?></a>
        <?php }
        } ?>
    </div>

    <div class="tabs-pro-detail">
        <ul class="nav nav-tabs" id="tabsProDetail" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="info-pro-detail-tab" data-toggle="tab" href="#info-pro-detail" role="tab"><?= thongtinsanpham ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="commentfb-pro-detail-tab" data-toggle="tab" href="#commentfb-pro-detail" role="tab"><?= binhluan ?></a>
            </li>
        </ul>
        <div class="tab-content pt-4 pb-4" id="tabsProDetailContent">
            <div class="tab-pane fade show active w-pro-detail" id="info-pro-detail" role="tabpanel">
                <?php /*Toc*/ if ((isset($config['LQD']['toc']) && $config['LQD']['toc'] == true)&&($config['LQD']['tocvip'] == false)) { ?>
                    <div class="meta-toc">
                        <div class="box-readmore">
                            <ul class="toc-list"></ul>
                        </div>
                    </div>
                <?php } ?>
                
                <div id="ftwp-postcontent">
                    <?php /*Toc vip*/ if (isset($config['LQD']['tocvip']) && $config['LQD']['tocvip'] == true) { ?>
                        <div id="ftwp-container-outer" class="ftwp-in-post ftwp-float-none" style="height: auto;">
                            <div id="ftwp-container" class="ftwp-wrap ftwp-middle-right ftwp-minimize">
                                <button type="button" id="ftwp-trigger" class="ftwp-shape-round ftwp-border-medium"><span class="ftwp-trigger-icon ftwp-icon-menu"></span></button>
                                <nav id="ftwp-contents" class="ftwp-shape-round ftwp-border-thin" data-colexp="collapse" style="height: auto;"> </nav>
                            </div>
                        </div>
                        <?php } ?>
                        <div id="toc-content" class="img-auto <?=(isset($config['LQD']['showcontent']) && $config['LQD']['showcontent'] == true)?'content_product':''?>  "><?=htmlspecialchars_decode($rowDetail['content'.$lang])?></div>
                    </div>
                    
                    <?php /*Xem thêm nội dung*/ if (isset($config['LQD']['showcontent']) && $config['LQD']['showcontent'] == true) {?>
                        <div class="show-more btn_read text-center add-none">
                            <a class="btn btn-primary btn-sm btn-click">
                                <span class="d-block"><?=xemthem?> <i class="fa-regular fa-circle-chevron-down"></i></span>
                            </a>
                        </div>
                    <?php }?>
    
            </div>

            <div class="tab-pane fade" id="commentfb-pro-detail" role="tabpanel">
                <div class="fb-comments" data-href="<?= $func->getCurrentPageURL() ?>" data-numposts="3" data-colorscheme="light" data-width="100%"></div>
            </div>
        </div>
    </div>
    <?php } ?>
</div>
<?php if (empty($quickview)) { ?>
<div class="title-main"><span><?= sanphamcungloai ?></span></div>
<div class="content-main">
    <div class="grid-product">
        <?php /*Giao diện thay đổi trong libraries/sample/product*/?>
        <?php if (!empty($product)) {
            foreach ($product as $k => $v) { 
                $v['name'] = $v['name' . $lang];
                $v['href'] = $v[$sluglang];
                $v['showCart'] = false;
                $v['showQuickView'] = (!empty($config['LQD']['quickview']));?>
                <?= $func->getProductItem($v) ?>
            <?php }
            } else { ?>
            <div class="gr-100">
                <div class="alert alert-warning w-100" role="alert">
                    <strong><?= khongtimthayketqua ?></strong>
                </div>
            </div>
        <?php } ?>
    </div>
    <div class="gr-100">
        <div class="pagination-home w-100"><?= (!empty($paging)) ? $paging : '' ?></div>
    </div>
</div>
<?php } ?>