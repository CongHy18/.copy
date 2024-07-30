<?php
include "config.php";
$tempLink .= "&idList=".$idList;
$idSort = (!empty($_GET['sort'])) ? htmlspecialchars($_GET['sort']) : 0;
$idlSort = (!empty($_GET['sortidl'])) ? htmlspecialchars($_GET['sortidl']) : 0;
$idcSort = (!empty($_GET['sortidc'])) ? htmlspecialchars($_GET['sortidc']) : 0;
$idiSort = (!empty($_GET['sortidi'])) ? htmlspecialchars($_GET['sortidi']) : 0;
$type = (!empty($_GET['type'])) ? htmlspecialchars($_GET['type']) : 0;
$tempLink = "";
$where = "";
$params = array();

if ($idlSort) {
    $tempLink .= " &sortidl=" . $idlSort;
    $where .= " and id_list = " . $idlSort;
} 
if ($idcSort) {
    $tempLink .= " &sortidc=" . $idcSort;
    $where .= " and id_cat = " . $idcSort;
} 
if ($idiSort) {
    $tempLink .= " &sortidi=" . $idiSort;
    $where .= " and id_item = " . $idiSort;
} 

if ($type) {
    $where .= " and find_in_set('$type',status)";
} 

switch ($idSort) {
    case '1':
        $where .= " order by name$lang ASC";
        break;
    case '2':
        $where .= " order by name$lang DESC";
        break;
    case '3':
        $where .= " order by CASE WHEN sale_price > 0 THEN sale_price ELSE regular_price END ASC";
        break;
    case '4':
        $where .= " order by CASE WHEN sale_price > 0 THEN sale_price ELSE regular_price END DESC";
        break;
    default:
        $where .= "";
    exit();
}
 
 
$sql = "select * from #_product where type='san-pham' and find_in_set('hienthi',status)  $where";
$sqlCache = $sql;
$items = $cache->get($sqlCache, $params, 'result', 7200);
/* Count all data */
$countItems = count($cache->get($sql, $params, 'result', 7200));
?>

<?php if($countItems) { ?>
	<div class="total_pro mb-3">Tổng: <span><?=$countItems?></span> sản phẩm</div>
	<div class="grid-product w-clear">
		<?php foreach($items as $k => $v) { ?>
			<div class="product pro-5">
                <div class="box-product text-decoration-none transition" title="<?=$v['name'.$lang]?>">
                    <a class="pic-product hover_xam d-block" href="<?=$v[$sluglang]?>">
                        <?=$func->getImage(['sizes' => '500x500x1', 'isWatermark' => true, 'prefix' => 'product', 'upload' => UPLOAD_PRODUCT_L, 'image' => $v['photo'], 'alt' => $v['name'.$lang]])?>
					</a>
                    <div class="info-product">
                        <h3 class="name-product"><a class="text-split"
                                href="<?=$v[$sluglang]?>"><?=$v['name'.$lang]?></a></h3>
                        <p class="price-product">
                            <?php if($v['discount']) { ?>
                            <span class="price-new"><?=$func->formatMoney($v['sale_price'])?></span>
                            <span class="price-old"><?=$func->formatMoney($v['regular_price'])?></span>
                            <span class="price-per"><?='-'.$v['discount'].'%'?></span>
                            <?php } else { ?>
                            <span
                                class="price-new"><?=($v['regular_price']) ? $func->formatMoney($v['regular_price']) : lienhe?></span>
                            <?php } ?>
                        </p>
                    </div>
                </div>
			</div>
		<?php } ?>
	</div>
	<div class="pagination-ajax"><?=$pagingItems?></div>
<?php }else{ ?>
	<div class="alert alert-warning w-100 text-center" role="alert">
		<strong>Sản phẩm đang cập nhật!</strong>
	</div>
<?php }?>