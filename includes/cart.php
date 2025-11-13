<?php
session_start();

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Handle removal
if (isset($_POST['remove'])) {
    $removeName = $_POST['remove'];
    foreach ($_SESSION['cart'] as $key => $item) {
        if ($item['name'] === $removeName) {
            unset($_SESSION['cart'][$key]);
            break;
        }
    }
    // Reindex array
    $_SESSION['cart'] = array_values($_SESSION['cart']);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Your Cart</title>
    <link rel="stylesheet" href="../css/cart.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/footer.css">
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
<video autoplay muted loop id="background-video">
  <source src="../images/lines.mp4" type="video/mp4">
  Your browser does not support HTML5 video.
</video>


    <div class="menu">
        <button class="option" id="optionBtn"><img src="../images/option.svg" alt="" srcset="" height="40px"></button>
   
        <img src="../images/ForHealth_logo.png" alt="logo" srcset="" width="120px" class="logo">
        <button class="cart" onclick="window.location.href='cart.php'"><img height="40px" src="../images/cart.svg" alt="search" srcset=""></button>
        <a href=""><img src="" alt="user" srcset=""></a>
    </div>


    <div id="popup" class="popup hidden">
        <button class="popclose" id="closePopup">Close</button>
        <a href="../index.php"><img src="../images/ForHealth_logo.png" alt="logo" srcset="" width="120px" class="logo2"></a>
        <a href="includes/nabidka.php" class="opA"><h1>Nabídka</h1></a>
        <a href="includes/nabidka.php" class="opA"><h1>Příslušenství</h1></a>
        <a href="#nase" class="opA"><h1>Naše produkty</h1></a>
        <a href="#onas" class="opA"><h1>O nás</h1></a>
        <a href="#kon" class="opA"><h1>Kontakt</h1></a>
        <a href="#sdi" class="opA"><h1>Sdílet</h1></a>
    </div>

    <div class="cart-main">
        <div class="cart-left">
            <div class="leftrow1">
                <div class="checkpoint2"><h1>Nákupní košík</h1></div>
                <div class="checkpoint"><h1>Doručení</h1></div>
                <div class="checkpoint"><h1>Platba</h1></div>
            </div>

            <div class="leftrow2"></div>
            <div class="leftrow3">
        

                    <ul class="cartTable">
                        <?php if (!empty($_SESSION['cart'])): ?>
                            <?php 
                                $total = 0; 
                                foreach ($_SESSION['cart'] as $item): 
                                    $subtotal = $item['price'] * $item['quantity'];
                                    $total += $subtotal;
                            ?>
                              <li class="cart-item" data-name="<?php echo htmlspecialchars($item['name']); ?>">
    <img width="20%" src="<?php echo htmlspecialchars($item['image']); ?>" 
         alt="<?php echo htmlspecialchars($item['name']); ?>" 
         class="cart-image">
    <?php echo htmlspecialchars($item['name']); ?> — 
    $<?php echo number_format($item['price'], 2); ?> × 
    <button class="qty-btn" data-action="decrease">-</button>
    <span class="quantity"><?php echo $item['quantity']; ?></span>
    <button class="qty-btn" data-action="increase">+</button> =
    $<span class="subtotal"><?php echo number_format($subtotal, 2); ?></span>
</li>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <li>Your cart is empty.</li>
                        <?php endif; ?>
                    </ul>

                    

            </div>
        </div>    

        <div class="cart-right">
            <?php if (!empty($_SESSION['cart'])): ?>
                        <p class="total">Total: <?php echo number_format($total, 2); ?>,-</p>
                    <?php endif; ?>

                    <a href="../index.php">Continue Shopping</a>
        </div>
    </div>




 <div class="footer">
        <div class="footLogos"></div>
        <div class="footrest">
            <div class="footcolumn1">
                <a href="includes/infoProdukt.php"><h2 id="nase">Naše produkty</h2></a>
                <a href="includes/onas.php"><h2 id="onas">O nás</h2></a>
                <a href="includes/kontakt.php"><h2 id="kon">Kontakt</h2></a>
            </div>
            <div class="footcolumn2">
                <h2 id="sdil">share</h2>
            </div>       
        </div>
    </div>



<script>
document.querySelectorAll('.qty-btn').forEach(button => {
    button.addEventListener('click', function() {
        const itemElement = this.closest('.cart-item');
        const name = itemElement.dataset.name;
        const action = this.dataset.action;

        fetch('update_cart_quantity.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
            body: `name=${encodeURIComponent(name)}&action=${action}`
        })
        .then(res => res.json())
        .then(data => {
            if (data.success) {
                // Find updated item in JSON response
                const updatedItem = data.cart_items.find(i => i.name === name);

                if (updatedItem) {
                    itemElement.querySelector('.quantity').textContent = updatedItem.quantity;
                    itemElement.querySelector('.subtotal').textContent = updatedItem.subtotal;
                } else {
                    // Item was removed
                    itemElement.remove();
                }

                // Update total
                const totalElement = document.getElementById('cart-total');
                if (totalElement) totalElement.textContent = `Total: $${data.total}`;

                // If cart is empty
                if (data.cart_items.length === 0) {
                    document.getElementById('cart-list').innerHTML = '<li>Your cart is empty.</li>';
                    if (totalElement) totalElement.remove();
                }
            } else {
                alert('Error updating quantity.');
            }
        })
        .catch(err => console.error(err));
    });
});
</script>

<script src="../js/script.js"> </script>
</body>
</html>
