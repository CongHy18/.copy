
<?php foreach($app as $k => $v) { ?> 
    <a class="btn-social text-decoration-none <?php if($k < 9) {echo "social-".($k+1);}else{echo  $k+1;}?>" href="<?=$v['link'];?>"  target="_blank">
        <div class="animated infinite zoomIn kenit-alo-circle"></div>
        <div class="animated infinite pulse kenit-alo-circle-fill"></div>
        <i>
            <?= $func->getImage(['class' => 'lazy', 'sizes' => '50x50x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
        </i>
    </a>

<?php } ?>