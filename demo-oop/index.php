<?php
    $path = "./widgets/";
    $content = $path."content.php";
    $main_menu = $path."main_menu.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <class class="wrapper">
        <div class="nav">
            <?php include ("$main_menu")?>
        </div>
        <div class="content">
            <?php include ("$content")?>
        </div>
    </class>
</body>
</html>