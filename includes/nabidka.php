<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    link
    <link rel="stylesheet" href="../css/style.css ">
    <link rel="stylesheet" href="../css/footer.css " >
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="../css/product.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/nabidka.css">

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
        <button class="option" id="optionBtn"><img src="../images/option.svg" alt="" srcset="" height="40px"></button>
   
        <img src="../images/ForHealth_logo.png" alt="logo" srcset="" width="120px" class="logo">
        <button class="cart"><img height="40px" src="../images/cart.svg" alt="search" srcset=""></button>
        <a href=""><img src="" alt="user" srcset=""></a>
    </div>


    <div id="popup" class="popup hidden">
        <button class="popclose" id="closePopup">Close</button>
        <a href="../index.php"><img src="../images/ForHealth_logo.png" alt="logo" srcset="" width="120px" class="logo2"></a>
        <a href="../includes/nabidka.php" class="opA"><h1>Nabídka</h1></a>
        <a href="../includes/nabidka.php" class="opA"><h1>Příslušenství</h1></a>
        <a href="#nase" class="opA"><h1>Naše produkty</h1></a>
        <a href="#onas" class="opA"><h1>O nás</h1></a>
        <a href="#kon" class="opA"><h1>Kontakt</h1></a>
        <a href="#sdi" class="opA"><h1>Sdílet</h1></a>
    </div>


<div class="bigdiv">
    <div class="search">
        <div class="sort-container">
  <button id="sortBtn">Sort by ▾</button>
  <div id="sortMenu" class="sort-menu hidden">
    <button class="sort-option" data-sort="featured">Featured</button>
    <button class="sort-option" data-sort="asc">Price: Low → High</button>
    <button class="sort-option" data-sort="desc">Price: High → Low</button>
  </div>
</div>



    </div>

    <div class="everything">
        <div class="filter">
    <h3>Filtrovat Produkty</h3>

    <p>Typy</p>

    <label class="control control-checkbox"><input type="checkbox" class="filter-option" value="electronics"> Protein Powder<div class="control_indicator"></div></label><br>
    <label  class="control control-checkbox"><input type="checkbox" class="filter-option" value="clothing"> Energy Tablets<div class="control_indicator"></div></label><br>
    <label  class="control control-checkbox"><input type="checkbox" class="filter-option" value="books"> Pills<div class="control_indicator"></div></label><br>
    <label  class="control control-checkbox"><input type="checkbox" class="filter-option" value="xtra"> EXTRA<div class="control_indicator"></div></label><br>

<p>Vydání</p>

            <label  class="control control-checkbox"><input type="checkbox" class="filter-option" value="kolab"> Kolaborace<div class="control_indicator"></div></label><br>
    <label  class="control control-checkbox"><input type="checkbox" class="filter-option" value="klas">Naše Klasiky<div class="control_indicator"></div></label><br>


        

        </div>
        <div class="product-page">
                    <div class="product" data-category="electronics kolab"  onclick="window.location.href='product1.html'">
                        <div class="img-fit"><img  height="100%" src="../images/monbg.png" alt="" srcset=""></div>
                        <div class="text-fit"><h1 class="monster">Monster Energy</h1><h2>Protein Powder</h2><h3>800,-</h3></div>
                    </div>
                    <div class="product" data-category="clothing kolab"  onclick="window.location.href='product2.html'">
                        <div class="img-fit"><img  height="100%" src="../images/monbotl.png" alt="" srcset=""></div>
                        <div class="text-fit"><h1 class="monster">Monster Energy</h1><h2>Energy tablets</h2><h3>800,-</h3></div>
                    </div>
                    <div class="product" data-category="electronics kolab"  onclick="window.location.href='product3.html'">
                        <div class="img-fit2"><img  height="90%" src="../images/wmonbag.png" alt="" srcset=""></div>
                        <div class="text-fit"><h1 class="monster2">Monster Energy Ultra Zero</h1><h2>Protein Powder</h2><h3>800,-</h3></div>
                    </div>
                    <div class="product" data-category="clothing kolab"  onclick="window.location.href='product4.html'">
                        <div class="img-fit2"><img  height="90%" src="../images/wmonbotl.png" alt="" srcset=""></div>
                        <div class="text-fit"><h1 class="monster2">Monster Energy Ultra Zero</h1><h2>Energy tablets</h2><h3>800,-</h3></div>
                    </div>
                    <div class="product" data-category="electronics kolab"  onclick="window.location.href='product5.html'">
                        <div class="img-fit3"><img  height="90%" src="../images/lmonbag.png" alt="" srcset=""></div>
                        <div class="text-fit"><h1 class="monster2">Monster Energy Mango-Loco</h1><h2>Protein Powder</h2><h3>800,-</h3></div>
                    </div>
                    <div class="product" data-category="clothing kolab"  onclick="window.location.href='product6.html'">
                        <div class="img-fit3"><img  height="90%" src="../images/lmonbox.png" alt="" srcset=""></div>
                        <div class="text-fit"><h1 class="monster2">Monster Energy Mango-Loco</h1><h2>Energy tablets</h2><h3>800,-</h3></div>
                    </div>
                     <div class="product" data-category="electronics klas" onclick="window.location.href='product7.html'">
                        <div class="img-fit"><img  height="110%" src="../images/prdbg.png" alt="" srcset=""></div>
                        <div class="text-fit"><h1 class="title">MEGA BONK</h1><h2 class="sub-title">PROTEIN POWDER</h2><h3>600,-</h3></div>
                    </div>
                                         <div data-category="xtra klas" class="product" onclick="window.location.href='product7.html'">
                        <div class="img-fit4"><img  height="110%" src="../images/r5bg.png" alt="" srcset=""></div>
                        <div class="text-fit"><h1 class="title">SATAN RAPE</h1><h2 class="sub-title2">POWDER</h2><h3>600,-</h3></div>
                    </div>
                                         <div data-category="books klas" class="product" onclick="window.location.href='product7.html'">
                        <div class="img-fit5"><img  height="110%" src="../images/b2bg.png" alt="" srcset=""></div>
                        <div class="text-fit"><h1 class="title">BOB-BUCKET</h1><h2 class="sub-title3">PILLS</h2><h3>600,-</h3></div>
                    </div>
                    <div class="product" data-category="xtra klas"  onclick="window.location.href='product7.html'">
                        <div class="img-fit4"><img  height="100%" src="../images/terbg.png" alt="" srcset=""></div>
                        <div class="text-fit"><h1 class="title">N.K.R.T.D. POWDER</h1><h2 class="sub-title2">PROTEIN/KRATOM/METH</h2><h3>1488,-</h3></div>
                    </div>
                    <div class="product" data-category="electronics kolab"  onclick="window.location.href='product7.html'">
                        <div class="img-fit6"><img  height="100%" src="../images/bullbag.png" alt="" srcset=""></div>
                        <div class="text-fit"><h1 class="title">RED BULL</h1><h2 class="sub-title3">PROTEIN POWDER</h2><h3>800,-</h3></div>
                    </div>
                                       

        </div>

        

    </div>

</div>






<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>






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
document.addEventListener("DOMContentLoaded", () => {
  const filterOptions = Array.from(document.querySelectorAll(".filter-option"));
  const products = Array.from(document.querySelectorAll(".product"));

  function applyFilters() {
    const activeFilters = filterOptions
      .filter(opt => opt.checked)
      .map(opt => opt.value.toLowerCase());

    products.forEach(product => {
      const productCategories = (product.dataset.category || "")
        .toLowerCase()
        .split(/[\s,]+/)
        .filter(Boolean);

      const shouldShow =
        activeFilters.length === 0 ||
        activeFilters.some(f => productCategories.includes(f));

      if (shouldShow) {
        // fade in: show first, then remove .hidden
        product.style.display = "flex";
        // force reflow so transition works
        product.offsetHeight;
        product.classList.remove("hidden");
      } else {
        // fade out, then remove from layout
        product.classList.add("hidden");
        setTimeout(() => {
          if (product.classList.contains("hidden")) {
            product.style.display = "none";
          }
        }, 300); // matches CSS transition
      }
    });
  }

  filterOptions.forEach(opt => opt.addEventListener("change", applyFilters));
  applyFilters();
});
</script>
<script>
document.addEventListener("DOMContentLoaded", () => {
  const sortBtn = document.getElementById("sortBtn");
  const sortMenu = document.getElementById("sortMenu");
  const sortOptions = document.querySelectorAll(".sort-option");
  const productPage = document.querySelector(".product-page");
  const products = Array.from(document.querySelectorAll(".product"));

  // Save original order (featured layout)
  const originalOrder = products.slice();

  // Toggle dropdown visibility
  sortBtn.addEventListener("click", () => {
    sortMenu.classList.toggle("hidden");
  });

  // Close dropdown when clicking outside
  document.addEventListener("click", (e) => {
    if (!sortBtn.contains(e.target) && !sortMenu.contains(e.target)) {
      sortMenu.classList.add("hidden");
    }
  });

  // Handle sorting options
  sortOptions.forEach(option => {
    option.addEventListener("click", () => {
      const direction = option.dataset.sort; // 'featured', 'asc', or 'desc'
      sortMenu.classList.add("hidden");

      let sorted;
      if (direction === "featured") {
        // Restore original order
        sorted = originalOrder;
      } else {
        // Sort by price (<h3> tag)
        sorted = [...products].sort((a, b) => {
          const priceA = parseInt(a.querySelector("h3").textContent.replace(/\D/g, "")) || 0;
          const priceB = parseInt(b.querySelector("h3").textContent.replace(/\D/g, "")) || 0;
          return direction === "asc" ? priceA - priceB : priceB - priceA;
        });
      }

      // Fade out, reorder, fade back in
      productPage.style.opacity = "0";
      setTimeout(() => {
        sorted.forEach(prod => productPage.appendChild(prod));
        productPage.style.opacity = "1";
      }, 200);
    });
  });
});
</script>



<script src="../js/script.js"> </script>
</body>

</html>