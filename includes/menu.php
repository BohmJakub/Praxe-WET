<?php session_start(); ?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css ">
    <link rel="stylesheet" href="css/footer.css " >
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/product.css">
    <link rel="stylesheet" href="../css/style.css">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Sixtyfour&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400..900&display=swap" rel="stylesheet">


    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
</head>
<body>
    


    <div class="menu">
        <button class="option" id="optionBtn"><img src="images/option.svg" alt="" srcset="" height="40px"></button>
   
        <img src="images/ForHealth_logo.png" alt="logo" srcset="" width="120px" class="logo">
        <button class="cart" onclick="window.location.href='includes/cart.php'"><img height="40px" src="images/cart.svg" alt="search" srcset=""></button>
        <a href=""><img src="" alt="user" srcset=""></a>
    </div>


    <div id="popup" class="popup hidden">
        <button class="popclose" id="closePopup">Close</button>
        <a href="index.php"><img src="images/ForHealth_logo.png" alt="logo" srcset="" width="120px" class="logo2"></a>
        <a href="includes/nabidka.php" class="opA"><h1>Nabídka</h1></a>
        <a href="includes/nabidka.php" class="opA"><h1>Příslušenství</h1></a>
        <a href="#nase" class="opA"><h1>Naše produkty</h1></a>
        <a href="#onas" class="opA"><h1>O nás</h1></a>
        <a href="#kon" class="opA"><h1>Kontakt</h1></a>
        <a href="#sdi" class="opA"><h1>Sdílet</h1></a>
    </div>