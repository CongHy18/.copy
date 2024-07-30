<?php
include "config.php";

// Lấy tham số từ yêu cầu AJAX
$idList = (!empty($_POST['id'])) ? htmlspecialchars($_POST['id']) : 0;
$show = (!empty($_POST['show'])) ? htmlspecialchars($_POST['show']) : 0;
$page = (!empty($_POST['page'])) ? htmlspecialchars($_POST['page']) + 2 : 1;
$start = ($page - 1) * $show;

$where = "";
$params = array();

/* Math url */
if($idList)
{
    $where .= " and id_list = ".$idList;
    // array_push($params, $idList);
}

/* Get data */
$sql = "select name$lang, slugvi, slugen, id, photo, regular_price, sale_price, discount, type from #_product where type='san-pham' $where and find_in_set('noibat',status) and find_in_set('hienthi',status) order by numb,id desc";
$sqlCache = $sql." limit $start, $show";
$items = $cache->get($sqlCache, $params, 'result', 7200);


$response = array(
    "check" => (empty($items)) ? "null" : "not_null",
    "count" => count($items),
    "items" => ""
);

if (!empty($items)) {
    foreach ($items as $k => $v) { 
        $v['name'] = $v['name'.$lang];
        $v['href'] = $v[$sluglang];
        $v['showCart'] = false;
        $v['showQuickView'] = (!empty($config['LQD']['quickview']));
        $itemHtml = $func->getProductItem($v);
        $response["items"] .= $itemHtml;
    } 
}

// Trả về dữ liệu dưới dạng JSON
echo json_encode($response);
?>

