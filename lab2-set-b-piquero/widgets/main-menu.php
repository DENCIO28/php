<?php
    $path = "./src/";
    $nav = file($path."main-menu.txt",FILE_IGNORE_NEW_LINES);
?>

<ul>
    <?php
        foreach($nav as $i){
        list($text,$link) =explode(",",$i);
    ?>
        <li><a href="<?php $link?>"><?=$text?></a></li>
    <?php
        }
    ?>
</ul>