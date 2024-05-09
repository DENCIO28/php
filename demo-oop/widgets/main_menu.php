<?php
    $srcpath ="./src/";
    $menu = file($srcpath."main-menu.txt");

    #print_r ($menu); //To print statement as array
?>

<ul>
    <?php
        foreach($menu as $i){
            list($text,$link) =explode(",",$i);
    ?>
    <li>
            <a href="<?= $link ?>"><?=$text?></a>
    </li>
    <?php
        }
    ?>
</ul>