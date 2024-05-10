<?php
$name ="Phone V8";
$category = "Electronics";
$image = "item-1.png";
$prev_price = "P6,900.00";
$curr_price = "P4,200.00";
?>

<div class="item-card">
    <div class="card-content">
        <h3 class="item-name"><?=$name?></h3>
        <p class="item-category"><?=$category?></p>
    </div>
    <img src="images/listing/<?=$image?>" alt="">
    <p class="item-price"><span><?=$prev_price?></span><?=$curr_price?></p>
</div>