<?php
/***********************************************
Instructions:
/***********************************************

Compose a form that presents a customer a menu of choices for ice cream sundaes.
Show vanilla, chocolate and peanut butter as ice cream flavors with radio buttons.
Display cherries, chocolate sprinkles, pineapple and walnuts as toppings using check boxes.

Allow neither the choice of chocolate sprinkles with chocolate ice cream, nor walnuts with peanut butter ice cream. Print a warning to the customer that those choices are not compatible.

Send the ice cream flavor and toppings choices to a PHP script for processing.
Print to the monitor a final sundae build with flavor and toppings.


/***********************************************
Scratchpad
/***********************************************

//Declare variables
	$errors = '';
	$print_r($_POST);

	$flavor = $_POST['flavor'];
	$addon[] = $_POST['addon[]'];

//

/***********************************************
Notes
/***********************************************

Todo:
  "go back" button
  "reset form" button (html page)
  chocolateIcecream !== chocolate logic
  peanutIcecream !== walnuts logic






***********************************************/
?>


<!DOCTYPE html>

<html>
<link rel="stylesheet" type="text/css" href="styles.css">

  <head>
    <meta charset="utf-8">
    <title>YOU ORDERED...</title>
  </head>

  <header><h1><marquee scrollamount="20">Lab 04 - 1998 Edition</marquee></h1></header>

  <body>
    <?php
      // Include variables from index page
      $yourName = $_POST['yourName']; //$thispageVariable = POST of $thatpageVariable
      $icecream = $_POST['icecream'];
      $toppings = $_POST['toppings'] ;
      $scoops = $_POST['scoops'];
    ?>


    <table>
      <tr>
        <th>
          Your Name:
        </th>
        <td>
          <?php
          // Return yourName
            echo $yourName;
          ?>
        </td>
      </tr>

      <tr>
        <th>
          Ice Cream Flavor:
        </th>
        <td>
          <?php
          // Determine ice cream flavor
            if (isset($_POST['submit'])) {
              if($_POST['icecream'] == 'chocolateIcecream') {
                // AND IF walnuts, blah blah........
                echo "Chocolate";
              }
              elseif ($_POST['icecream'] == 'peanutIcecream') {
                echo "Peanut Butter";
              }
              else { //Echo mandated default value
                  echo "Vanilla";
              }
            }
            echo "<br /><br />";
          ?>
        </td>
      </tr>

      <tr>
        <th>
          Toppings:
        </th>
        <td>
          <?php
          // Determine values stored in toppings[] array
            if(isset($_POST['toppings'])) {
              foreach ($toppings as $key => $value) {
                echo $value.'<br /><br />';
              }
            }
          ?>
        </td>
      </tr>

      <tr>
        <th>
          Scoops:
        </th>
        <td>
          <?php
            //Determine number of scoops
            if(isset($_POST['scoops'])) {
              if($_POST['scoops'] == 'oneScoop') {
                echo "One Scoop!";
              }
              elseif ($_POST['scoops'] == 'twoScoop') {
                echo "Two Scoops!";
              }
              elseif ($_POST['scoops'] == 'threeScoop') {
                echo "Three Scoops!";
              }
              elseif ($_POST['scoops'] == 'fourScoop') {
                echo "Four Scoops!";
              }
            }
          ?>
        </td>
      </tr>


  </body>
</html>

<?php
/***********************************************
Changelog
/***********************************************
10/23/2017 - output.php created
10/19/2017 - index.html revised
10/19/2017 - styles.css created
10/17/2017 - index.html created




***********************************************/
 ?>
