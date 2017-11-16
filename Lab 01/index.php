<!DOCTYPE html>
<html>
    <head>
        <link type='text/css' rel='stylesheet' href='style.css'/>
		<title>Lab 01</title>
	</head>

<header>
  <div id = "nameblock" style="text-align:left">
    <h5>Logan Halloran</h5>
    <h5>ITSE 2303 - PHP</h5>
  </div>

  <div id = "Instructions" style="text-align:center">
    <h2>Instructions</h2>
    <h3>
        <li>Compose a script that contains five different variables, each with a different data type</li>
        <li>Print each variable's name and its value to the browser</li>
        <li>Use the gettype( ) function to print each variable's data type to the browser</li>
    </h3>
  </div>
</header>





  <body>
  <br />
  <br />
  <hr />


    <!-- Begin -->
		<?php 
			$carMake = "Ford";
			$carModel = "Fusion Hybrid";
			$carYear = 2017;
			$AWD = false;
			$mileage = 9778.31;
			$carFeatures = array("Cupholders","Headlights","Steering");
	
	
			echo "Variable: " . "<i>" . '$carMake' . "</i>" . " has a stored value of: " . $carMake;
			echo "<br />";
			echo "gettype: " . gettype($carMake);
			var_dump($carMake);
	
			echo "<br />";
			echo "<br />";
	
			echo "Variable: " . "<i>" . '$carModel' . "</i>" . " has a stored value of: " . $carModel;
			echo "<br />";
			echo "gettype: " . gettype($carModel);
			var_dump($carModel);
	
			echo "<br />";
			echo "<br />";
	
			echo "Variable: " . "<i>" . '$carYear' . "</i>" .  " has a stored value of: " . $carYear;
			echo "<br />";
			echo "gettype: " . gettype($carYear);
			var_dump($carYear);
	
			echo "<br />";
			echo "<br />";
	
			echo "Variable: " . "<i>" . '$AWD' . "</i>" .  " has a stored value of: " . $AWD;
			echo "<br />";
			echo "gettype: " . gettype($AWD);
			var_dump($AWD);
	
			echo "<br />";
			echo "<br />";
	
			echo "Variable: " . "<i>" . '$mileage' . "</i>" .  " has a stored value of: " . $mileage;
			echo "<br />";
			echo "gettype: " . gettype($mileage);
			var_dump($mileage);
	
			echo "<br />";
			echo "<br />";
	
			echo "Variable: " . "<i>" . '$carFeatures' . "</i>" .  " has a stored value of: " . $carFeatures;
			echo "<br />";
			echo "gettype: " . gettype($carFeatures);
			var_dump($carFeatures);
		?>
    <!-- End -->




	</body>
</html>
