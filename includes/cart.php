<?php


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

<?php include "headerMain.php"?>
<video autoplay muted loop id="background-video">
  <source src="../images/monlive.mp4" type="video/mp4">
  Your browser does not support HTML5 video.
</video>

    <div class="cart-main">
        <div class="cart-left">
            <div class="leftrow1">
                <div class="checkpoint2"><h1>Nákupní košík</h1></div>
                <div class="checkpoint"><h1>Doručení</h1></div>
                <div class="checkpoint"><h1>Platba</h1></div>
            </div>

            <div class="leftrow2">
                
                <div class="polozka"><p>položka</p></div>
                <div class="cena"><p>cena</p></div>
                <div class="mnoz"><p>množství</p></div>
                <div class="mezi"><p>mezisoučet</p></div>
            </div>
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
    <img width="10%" src="<?php echo htmlspecialchars($item['image']); ?>" 
         alt="<?php echo htmlspecialchars($item['name']); ?>" 
         class="cart-image">
         <div class="NamePrice">

        <?php  echo htmlspecialchars($item['name']); ?> — 
        <?php echo number_format($item['price'], 2); ?>,-  
        </div>
    <div class="qtbut">
    <button class="qty-btn" data-action="decrease">-</button>
    <span class="quantity"><?php echo $item['quantity']; ?></span>
    <button class="qty-btn" data-action="increase">+</button> 
    </div>=
    <span class="subtotal"><?php echo number_format($subtotal, 2); ?>,-</span>
</li>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <li>Your cart is empty.</li>
                        <?php endif; ?>
                    </ul>

                    

            </div>
        </div>    

        <div class="cart-right">
            <div class="shrnuti">
                <div class="shr1"><p>Shrnutí objednávky</p></div>
                <div class="shr2">
                    <?php if (!empty($_SESSION['cart'])): ?>
                                <p class="total"><?php echo number_format($total, 2); ?>,-</p>
                            <?php endif; ?>
                </div>            
                <div class="shr3">
                            <a href="../index.php">Prokačovat v nákupu</a>
                </div>            
            </div>
            <div class="sleva">Zadejte slevový kód</div>
            <div class="nabidka">
                <div class="nab">Nakupte za 1500,- a dostanete 1 vzorek</div>
                <div class="nab2">Doprava zdarma</div>
            </div>
            <div class="uhrada">přejít K POkladně</div>


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

<?php include "footerMain.php"?>



<script src="../js/script.js"> </script>
</body>
</html>
