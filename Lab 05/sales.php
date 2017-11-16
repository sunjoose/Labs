<?php include "lib/header.php"; ?>

<!DOCTYPE HTML>
<html>
	<body>
		<main id="salesMain">
			<h3>Winter Specials!</h3>
			<br/>
			<br/>

      <div class="leftcol" style="background-image: url('images/flag.jpg')">
        <p>TESTING sidebar</p>
      </div>

      <div class="center">
        <div id="product-grid">
          <div class="product-item">
      			<form method="post" action="index.php?action=add&code=0004"> <!-- code refers to unique product ID -->
        			<div class="product-image"><img width="120px" src="images/seasonalair.jpg"></div>
        			<div class="product-name">Seasonal Tire Air</div>
        			<div class="product-price"><s>$59.99</s></div><br>
        			<div class="product-price-sale">$29.99</div>
        			<div><input type="text" name="quantity" value="1" size="1" class="inputQuantity" /><input type="submit" value="Add to cart" class="btnAddAction" /></div>
      			</form>
    		   </div>
    			<div class="product-item">
      			<form method="post" action="index.php?action=add&code=0005">
        			<div class="product-image"><img width="120px" src="images/used-oil.jpg"></div>
        			<div class="product-name">Green Recycled Engine Oil</div>
              <div class="product-price"><s>$12.99</s></div><br>
        			<div class="product-price-sale">$9.99</div>
        			<div><input type="text" name="quantity" value="1" size="1" class="inputQuantity" /><input type="submit" value="Add to cart" class="btnAddAction" /></div>
      			</form>
    		   </div>
           <div class="product-item">
       			<form method="post" action="index.php?action=add&code=0006">
         			<div class="product-image"><img width="120px" src="images/enginescrub.jpg"></div>
         			<div class="product-name">Hot Engine Scrub</div>
              <div class="product-price"><s>$29.99</s></div><br>
        			<div class="product-price-sale">$19.99</div>
         			<div><input type="text" name="quantity" value="1" size="1" class="inputQuantity" /><input type="submit" value="Add to cart" class="btnAddAction" /></div>
       			</form>
     		   </div>
         	</div>
        </body>
      </div>

    </main>
	</body>
</html>

<?php include "lib/footer.php"; ?>
