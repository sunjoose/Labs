<?php include "lib/header.php"; ?>
<link href="lib/styles.css" rel="stylesheet" type="text/css" />

<?php
session_start();
// require_once("dbcontroller.php");
// $db_handle = new DBController();
if(!empty($_GET["action"])) {
  switch($_GET["action"]) {
  	case "add":
  		if(!empty($_POST["quantity"])) {
  			$productByCode = $db_handle->runQuery("SELECT * FROM tblproduct WHERE code='" . $_GET["code"] . "'");
  			$itemArray = array($productByCode[0]["code"]=>array('name'=>$productByCode[0]["name"], 'code'=>$productByCode[0]["code"], 'quantity'=>$_POST["quantity"], 'price'=>$productByCode[0]["price"]));

  			if(!empty($_SESSION["cart_item"])) {
  				if(in_array($productByCode[0]["code"],array_keys($_SESSION["cart_item"]))) {
  					foreach($_SESSION["cart_item"] as $k => $v) {
  							if($productByCode[0]["code"] == $k) {
  								if(empty($_SESSION["cart_item"][$k]["quantity"])) {
  									$_SESSION["cart_item"][$k]["quantity"] = 0;
  								}
  								$_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
  							}
  					}
  				} else {
  					$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
  				}
  			} else {
  				$_SESSION["cart_item"] = $itemArray;
  			}
  		}
  	break;
  	case "remove":
  		if(!empty($_SESSION["cart_item"])) {
  			foreach($_SESSION["cart_item"] as $k => $v) {
  					if($_GET["code"] == $k)
  						unset($_SESSION["cart_item"][$k]);
  					if(empty($_SESSION["cart_item"]))
  						unset($_SESSION["cart_item"]);
  			}
  		}
  	break;
  	case "empty":
  		unset($_SESSION["cart_item"]);
  	break;
    }
}
?>


<?php
/*
-- Template

<div class="product-item">
  <form method="post" action="index.php?action=add&code=<?php echo $product_array[$key]["code"]; ?>">
  <div class="product-image"><img width="120px" src="<?php echo $product_array[$key]["image"]; ?>"></div>
  <div><strong><?php echo $product_array[$key]["name"]; ?></strong></div>
  <div class="product-price"><?php echo "$".$product_array[$key]["price"]; ?></div>
  <div><input type="text" name="quantity" value="1" size="2" /><input type="submit" value="Add to cart" class="btnAddAction" /></div>
  </form>
</div>
*/ ?>
<!DOCTYPE HTML>
<html>
	<body>
    <div class="leftcol">
      <p>TESTING sidebar</p>
      <p>TESTING sidebar</p>
      <p>TESTING sidebar</p>
    </div>
    <div class="center">
      <div id="product-grid">
        <div class="product-item">
    			<form method="post" action="index.php?action=add&code=0001"> <!-- code refers to unique product ID -->
      			<div class="product-image"><img width="120px" src="images/blinkerfluid3.jpg"></div>
      			<div class="product-name">Blinker Fluid</div>
      			<div class="product-price">$4.49/GAL</div>
      			<div><input type="text" name="quantity" value="1" size="1" class="inputQuantity" /><input type="submit" value="Add to cart" class="btnAddAction" /></div>
    			</form>
  		   </div>
  			<div class="product-item">
    			<form method="post" action="index.php?action=add&code=0002">
      			<div class="product-image"><img width="120px" src="images/elbowgrease.jpg"></div>
      			<div class="product-name">Elbow Grease</div>
      			<div class="product-price">$2.49</div>
      			<div><input type="text" name="quantity" value="1" size="1" class="inputQuantity" /><input type="submit" value="Add to cart" class="btnAddAction" /></div>
    			</form>
  		   </div>
         <div class="product-item">
     			<form method="post" action="index.php?action=add&code=0003">
       			<div class="product-image"><img width="120px" src="images/mufflerbearings.jpg"></div>
       			<div class="product-name">Muffler Bearings</div>
       			<div class="product-price">$89.99</div>
       			<div><input type="text" name="quantity" value="1" size="1" class="inputQuantity" /><input type="submit" value="Add to cart" class="btnAddAction" /></div>
     			</form>
   		   </div>
       	</div>
      </body>
    </div>
	</main>
</html>

<?php include "lib/footer.php"; ?>
