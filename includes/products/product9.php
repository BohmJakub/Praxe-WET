<?php session_start(); ?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/style.css ">
    <link rel="stylesheet" href="../../css/footer.css " >
    <link rel="stylesheet" href="../../css/menu.css">
    <link rel="stylesheet" href="../../css/product.css">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/productsite.css">

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
        <button class="option" id="optionBtn"><img src="../../images/option.svg" alt="" srcset="" height="40px"></button>
   
        <img src="../../images/ForHealth_logo.png" alt="logo" srcset="" width="120px" class="logo">
        <button class="cart" onclick="window.location.href='../cart.php'"><img height="40px" src="../../images/cart.svg" alt="search" srcset=""></button>
        <a href=""><img src="" alt="user" srcset=""></a>
    </div>


    <div id="popup" class="popup hidden">
        <button class="popclose" id="closePopup">Close</button>
        <a href="../../index.php"><img src="../../images/ForHealth_logo.png" alt="logo" srcset="" width="120px" class="logo2"></a>
        <a href="../nabidka.php" class="opA"><h1>Nabídka</h1></a>
        <a href="../nabidka.php" class="opA"><h1>Příslušenství</h1></a>
        <a href="#nase" class="opA"><h1>Naše produkty</h1></a>
        <a href="#onas" class="opA"><h1>O nás</h1></a>
        <a href="#kon" class="opA"><h1>Kontakt</h1></a>
        <a href="#sdi" class="opA"><h1>Sdílet</h1></a>
    </div>
 
<video autoplay muted loop id="background-video">
  <source src="../../images/blue.mp4" type="video/mp4">
  Your browser does not support HTML5 video.
</video>

<div class="pr-all">
    <div class="pr-main">
        <div class="pr-main-top">
            <div class="pr-top-1">
                <h2>For health</h2>
                <h1 class="mainName2">BOB-BUCKET</h1>
                <h1 class="lime6">PILLS</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate fugit qui deserunt, voluptates voluptas eligendi, ipsa id illum doloribus fugiat quas similique distinctio, reiciendis aut corrupti voluptatem repellendus architecto. Doloremque.Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda, reiciendis at cupiditate, quae fugit necessitatibus illo perferendis tempore minima sed nihil expedita odit in praesentium, ut libero quam ullam sint.</p>
                <div class="perksnew">
                        <div class="perknew5"><img height="30px" src="../../images/bbrain.svg" alt="" srcset="">relax</div>
                        <div class="perknew5"><img height="30px" src="../../images/peace.svg" alt="" srcset="">klid</div>
                        <div class="perknew5"><img height="30px" src="../../images/sleep.svg" alt="" srcset="">spánek</div>
                        <div class="perknew5"><img height="30px" src="../../images/bleaf.svg" alt="" srcset="">přírodní</div>
                        <div class="perknew5"><img height="30px" src="../../images/bcze.svg" alt="" srcset="">České</div>
                </div>        
            </div>
            <div class="pr-top-2">
                <img  height="100%" src="../../images/b2bg.png" alt="" srcset="">
            </div>
            <div class="pr-top-3">
                <div class="rate"><h1>11+</h1><h2>Přírodních látek</h2></div>
                <div class="rate"><h1>140</h1><h2>Denních dávek</h2></div>
                <div class="rate"><h1>4,7</h1><h2>Hodnocení</h2></div>
            </div>
        </div>
        <div class="pr-main-bottom">
           <button class="add-to-cart buy5" data-name="BOB-BUCKET pills" data-price="600">Koupit</button>
<p class="cart-message" style="color: green; display: none;"></p>
        </div>

    </div>

</div>





       <div class="footer">
        <div class="footLogos"></div>
        <div class="footrest">
            <div class="footcolumn1">
                <a href="../includes/infoProdukt.php"><h2 id="nase">Naše produkty</h2></a>
                <a href="../includes/onas.php"><h2 id="onas">O nás</h2></a>
                <a href="../includes/kontakt.php"><h2 id="kon">Kontakt</h2></a>
            </div>
            <div class="footcolumn2">
                <h2 id="sdil">share</h2>
            </div>       
        </div>
    </div>

<script>
document.querySelectorAll('.add-to-cart').forEach(button => {
    button.addEventListener('click', function() {
        const name = this.dataset.name;
        const price = this.dataset.price;
        const messageElement = this.nextElementSibling; // finds the <p class="cart-message">

        fetch('../add_to_cart.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
            body: `name=${encodeURIComponent(name)}&price=${encodeURIComponent(price)}`
        })
        .then(response => response.json())
.then(data => {
    if (data.success) {
        messageElement.textContent = data.message;
        messageElement.style.display = 'block';

        // Fade out after 2 seconds
        setTimeout(() => {
            messageElement.style.transition = 'opacity 0.5s';
            messageElement.style.opacity = '0';
            setTimeout(() => {
                messageElement.style.display = 'none';
                messageElement.style.opacity = '1';
            }, 500);
        }, 2000);
    } else {
        messageElement.textContent = 'Error adding to cart.';
        messageElement.style.display = 'block';
        messageElement.style.color = 'red';
    }
})
    });
});
</script>




<script src="../../js/script.js"> </script>
</body>

</html>