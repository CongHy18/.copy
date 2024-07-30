<div class="product">
    <div class="box-product text-decoration-none">
        <div class="position-relative overflow-hidden mb-3">
            <a class="pic-product hover_xam scale-img" href="<?= $params['product']['href'] ?>" title="<?= $params['product']['name'] ?>">
                <?= $this->getImage(['isWebp' =>false, 'sizes' => '275x275x1', 'isWatermark' => true, 'prefix' => 'product', 'upload' => UPLOAD_PRODUCT_L, 'image' => $params['product']['photo'], 'alt' => $params['product']['name']]) ?>
            </a>
            <?php /*Quick View*/ if (!empty($params['product']['showQuickView'])) { ?>
                <div class="box-quickview transition">
                    <a class="product-quick-view text-decoration-none text-hover-main transition mb-2" data-slug="<?= $params['product']['href'] ?>" title="Xem nhanh">
                        <i class="fa-light fa-eye"></i>
                    </a>
                    <a class="product-quick-view text-decoration-none text-hover-main transition" href="<?= $params['product']['href'] ?>" title="<?= $params['product']['name'] ?>">
                        <i class="fa-light fa-magnifying-glass"></i>
                    </a>
                </div>
            <?php } ?>
        </div>
        <div class="info-product text-center">
            <div class="name-product text-split"><a class="up bold" href="<?= $params['product']['href'] ?>" title="<?= $params['product']['name'] ?>"><?= $params['product']['name'] ?></a></div>
            <p class="price-product">
                <span class="regular">Giá: </span>
                <?php if ($params['product']['discount']) { ?>
                <span class="price-new bold"><?= $this->formatMoney($params['product']['sale_price']) ?></span>
                <span class="price-old"><?= $this->formatMoney($params['product']['regular_price']) ?></span>
                <span class="price-per"><?= '-' . $params['product']['discount'] . '%' ?></span>
                <?php } else { ?>
                <span
                    class="price-new bold"><?= ($params['product']['regular_price']) ? $this->formatMoney($params['product']['regular_price']) : lienhe ?></span>
                <?php } ?>
            </p>
        </div>
    </div>
    <?php /*Cart */ if (!empty($params['product']['showCart'])) { ?>
        <p class="cart-product w-clear text-center">
            <span class="btn btn-sm btn-success cart-add addcart mr-2" data-id="<?= $params['product']['id'] ?>" data-action="addnow"><?=themvaogiohang?></span>
            <span class="btn btn-sm btn-danger cart-buy addcart" data-id="<?= $params['product']['id'] ?>" data-action="buynow"><?=muangay?></span>
        </p>
    <?php } ?>

    <?php /* HOVER CUSTOM 
        <i class="i_left"></i>
        <i class="i_right"></i>
        <i class="i_top"></i>
        <i class="i_bottom"></i>
    */ ?>
    
</div>
