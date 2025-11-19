
<?php include "headerMain.php"?>

<video autoplay muted loop id="background-video">
  <source src="../images/lines.mp4" type="video/mp4">
  Your browser does not support HTML5 video.
</video>
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
                    <div class="product" data-category="electronics kolab"  onclick="window.location.href='product1.php'">
                        <div class="img-fit"><img  height="100%" src="../images/monbg.png" alt="" srcset=""></div>
                        <div class="text-fit"><h1 class="monster">Monster Energy</h1><h2>Protein Powder</h2><h3>800,-</h3></div>
                    </div>
                    <div class="product" data-category="clothing kolab"  onclick="window.location.href='product2.php'">
                        <div class="img-fit"><img  height="100%" src="../images/monbotl.png" alt="" srcset=""></div>
                        <div class="text-fit"><h1 class="monster">Monster Energy</h1><h2>Energy tablets</h2><h3>800,-</h3></div>
                    </div>
                    <div class="product" data-category="electronics kolab"  onclick="window.location.href='product3.php'">
                        <div class="img-fit2"><img  height="90%" src="../images/wmonbag.png" alt="" srcset=""></div>
                        <div class="text-fit"><h1 class="monster2">Monster Energy Ultra Zero</h1><h2>Protein Powder</h2><h3>800,-</h3></div>
                    </div>
                    <div class="product" data-category="clothing kolab"  onclick="window.location.href='product4.php'">
                        <div class="img-fit2"><img  height="90%" src="../images/wmonbotl.png" alt="" srcset=""></div>
                        <div class="text-fit"><h1 class="monster2">Monster Energy Ultra Zero</h1><h2>Energy tablets</h2><h3>800,-</h3></div>
                    </div>
                    <div class="product" data-category="electronics kolab"  onclick="window.location.href='product5.php'">
                        <div class="img-fit3"><img  height="90%" src="../images/lmonbag.png" alt="" srcset=""></div>
                        <div class="text-fit"><h1 class="monster3">Monster Energy Mango-Loco</h1><h2>Protein Powder</h2><h3>800,-</h3></div>
                    </div>
                    <div class="product" data-category="clothing kolab"  onclick="window.location.href='product6.php'">
                        <div class="img-fit3"><img  height="90%" src="../images/lmonbox.png" alt="" srcset=""></div>
                        <div class="text-fit"><h1 class="monster3">Monster Energy Mango-Loco</h1><h2>Energy tablets</h2><h3>800,-</h3></div>
                    </div>
                     <div class="product" data-category="electronics klas" onclick="window.location.href='product7.php'">
                        <div class="img-fit"><img  height="110%" src="../images/prdbg.png" alt="" srcset=""></div>
                        <div class="text-fit"><h1 class="title">MEGA BONK</h1><h2 class="sub-title">PROTEIN POWDER</h2><h3>600,-</h3></div>
                    </div>
                                         <div data-category="xtra klas" class="product" onclick="window.location.href='product8.php'">
                        <div class="img-fit4"><img  height="110%" src="../images/r5bg.png" alt="" srcset=""></div>
                        <div class="text-fit"><h1 class="title">SATAN RAPE</h1><h2 class="sub-title2">POWDER</h2><h3>600,-</h3></div>
                    </div>
                                         <div data-category="books klas" class="product" onclick="window.location.href='product9.php'">
                        <div class="img-fit5"><img  height="110%" src="../images/b2bg.png" alt="" srcset=""></div>
                        <div class="text-fit"><h1 class="title">BOB-BUCKET</h1><h2 class="sub-title3">PILLS</h2><h3>600,-</h3></div>
                    </div>
                    <div class="product" data-category="xtra klas"  onclick="window.location.href='product10.php'">
                        <div class="img-fit4"><img  height="100%" src="../images/terbg.png" alt="" srcset=""></div>
                        <div class="text-fit"><h1 class="title">N.K.R.T.D. POWDER</h1><h2 class="sub-title2">PROTEIN/KRATOM/METH</h2><h3>1488,-</h3></div>
                    </div>
                    <div class="product" data-category="electronics kolab"  onclick="window.location.href='product11.php'">
                        <div class="img-fit6"><img  height="100%" src="../images/bullbag.png" alt="" srcset=""></div>
                        <div class="text-fit"><h1 class="title">RED BULL</h1><h2 class="sub-title3">PROTEIN POWDER</h2><h3>800,-</h3></div>
                    </div>
                                       

        </div>

        

    </div>

</div>













<?php include "footerMain.php"?>


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