<?php
    $path = "./widgets/";
    $nav = $path."main-menu.php";
    $header = $path."header.php";
    $hero = $path."hero.php";
    $content = $path."content.php";
    $card = $path."product_card.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Lab 2</title>
</head>

<body>
    <div class="wrapper">
        <div class="header">
            <img src="images/logo.png" alt="" class="logo">
            <input class="input-search" type="text" name="" id="" value="Find your product">
            <a class="cart" href="#"><img src="images/cart-icon.svg" alt=""></a>
        </div>

        <div class="nav">
            <?php include("$nav");?>
        </div>

        <div class="hero">
            <?php include("$hero");?>
        </div>

        <div class="content">
            <?php include("$content");?>
        </div>
        <div class="footer"> [YOUR LASTNAME HERE] - 2nd Lab Exam - SET B</div>
    </div>
</body>

</html>