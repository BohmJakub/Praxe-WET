
<?php include "headerMain.php"?>
 
<video autoplay muted loop id="background-video">
  <source  src="../images/whitedot.mp4" type="video/mp4">
  Your browser does not support HTML5 video.
</video>

<div class="pr-all">
    <div class="pr-main">
        <div class="pr-main-top">
            <div class="pr-top-1">
                <h2 class="h2h">For health</h2>
                <h1 class="mainName">Monster Energy</h1>
                <h1 class="lime2">Ultra Zero Protein Powder</h1>
                <p class="toptext">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate fugit qui deserunt, voluptates voluptas eligendi, ipsa id illum doloribus fugiat quas similique distinctio, reiciendis aut corrupti voluptatem repellendus architecto. Doloremque.Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda, reiciendis at cupiditate, quae fugit necessitatibus illo perferendis tempore minima sed nihil expedita odit in praesentium, ut libero quam ullam sint.</p>
                <div class="perksnew">
                        <div class="perknew2"><img height="30px" src="../images/tmu.svg" alt="" srcset="">svalstvo</div>
                        <div class="perknew2"><img height="30px" src="../images/tsc.svg" alt="" srcset="">soustředění</div>
                        <div class="perknew2"><img height="30px" src="../images/ten.svg" alt="" srcset="">energie</div>
                        <div class="perknew2"><img height="30px" src="../images/tle.svg" alt="" srcset="">přírodní</div>
                        <div class="perknew2"><img height="30px" src="../images/monLOGO.svg" alt="" srcset=""><p>Monster</p></div>
                </div>        
            </div>
            <div class="pr-top-2">
                <img  height="80%" src="../images/wmonbag.png" alt="" srcset="">
            </div>
            <div class="pr-top-3">
                <div class="rate2"><h1>12+</h1><h2>Přírodních látek</h2></div>
                <div class="rate2"><h1>140</h1><h2>Denních dávek</h2></div>
                <div class="rate2"><h1>4,8</h1><h2>Hodnocení</h2></div>
            </div>
        </div>
        <div class="pr-main-bottom2">
             <button class="add-to-cart buy2" data-name="Monster Energy Ultra Powder" data-price="800" data-image="../images/wmonbag.png">Koupit</button>
<p class="cart-message" style="color: green; display: none;"></p>
        </div>

    </div>

</div>






<script>
document.querySelectorAll('.add-to-cart').forEach(button => {
    button.addEventListener('click', function() {
        const name = this.dataset.name;
        const price = this.dataset.price;
        const image = this.dataset.image; // new image data
        const messageElement = this.nextElementSibling; // the <p class="cart-message">

        fetch('add_to_cart.php', {   // adjust path depending on your folder structure
            method: 'POST',
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
            body: `name=${encodeURIComponent(name)}&price=${encodeURIComponent(price)}&image=${encodeURIComponent(image)}`
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                messageElement.textContent = data.message;
                messageElement.classList.remove('error');
                messageElement.style.display = 'block';

                // fade out after 2 seconds
                setTimeout(() => {
                    messageElement.style.transition = 'opacity 0.5s';
                    messageElement.style.opacity = '0';
                    setTimeout(() => {
                        messageElement.style.display = 'none';
                        messageElement.style.opacity = '1';
                    }, 500);
                }, 2000);
            } else {
                messageElement.textContent = data.message || 'Error adding to cart.';
                messageElement.classList.add('error');
                messageElement.style.display = 'block';
            }
        })
        .catch(error => console.error('Error:', error));
    });
});
</script>



<?php include "footerMain.php"?>