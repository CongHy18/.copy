<?php
include "config.php";

/* Paginations */
include LIBRARIES . "class/class.PaginationsAjax.php";
$pagingAjax = new PaginationsAjax();
$pagingAjax->perpage = (!empty($_GET['perpage'])) ? htmlspecialchars($_GET['perpage']) : 1;
$eShow = htmlspecialchars($_GET['eShow']);
$idList = (!empty($_GET['idList'])) ? htmlspecialchars($_GET['idList']) : 0;
$idCat = (!empty($_GET['idCat'])) ? htmlspecialchars($_GET['idCat']) : 0;
$p = (!empty($_GET['p'])) ? htmlspecialchars($_GET['p']) : 1;
$start = ($p - 1) * $pagingAjax->perpage;
$pageLink = "api/product.php?perpage=" . $pagingAjax->perpage;
$tempLink = "";
$where = "";
$params = array();

/* Math url */

if ($idCat) {
	$tempLink .= "&idCat=" . $idCat . "&idList=" . $idList;
	$where .= " and id_cat = " . $idCat;
	// array_push($params, $idCat);
} elseif ($idList) {
	$tempLink .= "&idList=" . $idList;
	$where .= " and id_list = " . $idList;
	// array_push($params, $idList);
}
$tempLink .= "&p=";
$pageLink .= $tempLink;

/* Get data */
$sql = "select * from #_news where type='tour' $where and find_in_set('noibat',status) and find_in_set('hienthi',status) order by numb,id desc";
$sqlCache = $sql . " limit $start, $pagingAjax->perpage";
$items = $cache->get($sqlCache, $params, 'result', 7200);

/* Count all data */
$countItems = count($cache->get($sql, $params, 'result', 7200));

/* Get page result */
$pagingItems = $pagingAjax->getAllPageLinks($countItems, $pageLink, $eShow);
?>

<?php if ($countItems) { ?>
	<div class="grid-page grid-product">
		<?php foreach ($items as $k => $v) { ?>
			<div class="main-tour">
				<div class="image">
					<a href="<?=$v['slug'.$lang]?>" class="scale-img hover_xam">
						<?= $func->getImage(['class' => 'lazy', 'sizes' => '275x320x1', 'upload' => UPLOAD_NEWS_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
					</a>
				</div>
				<div class="tour-info">
					<div class="name">
						<a href="<?= $v['slug' . $lang] ?>" class="text-split"><?= $v['name' . $lang] ?></a>
					</div>
					<div class="desc text-split">
						<?= $v['desc' . $lang] ?>
					</div>
				</div>
				<div class="btn-book product-quickview-btn" data-id = "<?=$v['id']?>" data-toggle="modal" data-target=".exampleModal">Book Now</div>
			</div>
		<?php } ?>
	</div>
	<div class="pagination-ajax"><?= $pagingItems ?></div>
<?php } else { ?>
	<div class="alert alert-warning w-100 text-center" role="alert">
		<strong><?= sanphamdangcapnhat ?>!</strong>
	</div>
<?php } ?>