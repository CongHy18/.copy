
<div class="title-main">
    <span><?= (!empty($titleCate)) ? $titleCate : @$titleMain ?></span>
    <div class="animate-border m-auto"></div>
</div>
<div class="content-main">
    <?php /*<div class="mb-3"><?php include TEMPLATE.LAYOUT.'filter.php' ?></div>*/?>
    <div class="grid-product-sort-page">
        <div class="grid-product">
            <?php /*Giao diện thay đổi trong libraries/sample/product*/?>
            <?php if (!empty($product)) { 
                foreach ($product as $k => $v) { 
                    $v['name'] = $v['name'.$lang];
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
    </div>
    <div class="gr-100">
        <div class="pagination-home w-100"><?= (!empty($paging)) ? $paging : '' ?></div>
    </div>
</div>

