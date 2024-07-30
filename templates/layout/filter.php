<div class="d-flex align-items-center">
    <div class="sort-title mr-2 bold cap">
        Sắp xếp sản phẩm
    </div>
    <div class="sort-option">
        <select id="id-sort medium">
            <option value="" selected>Sắp xếp theo</option>
            <option value="1">Tên từ A đến Z</option>
            <option value="2">Tên từ Z đến A</option>
            <option value="3">Giá từ thấp đến cao</option>
            <option value="4">Giá từ cao đến thấp</option>
            <option class="d-none" value="<?=$idl?>"></option>
        </select> 
    </div>
</div> 

<div class="dddddd">
    <?php if($productList['id']) {?>
    <div class="prodl d-none" data-list="<?=($productList['id'])?>"></div>
    <?php } if($productCat['id']){?>
    <div class="prodl1 d-none" data-cat="<?=$productCat['id']?>"></div>
    <?php } if($productItem['id']){?>
    <div class="prodl2 d-none" data-item="<?=$productItem['id']?>"></div>
    <?php } if($com == 'sale-manh'){?>
    <div class="type d-none" data-type="salemanh"></div>
    <?php }?>
</div>
    