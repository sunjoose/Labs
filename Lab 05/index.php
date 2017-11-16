<?php
/*
Logan Halloran
Lab 05

/***********************************************
Instructions:
/***********************************************

Create six scripts (header, index, map, products, sales, footer) that create a website for a tire store.
Header and footer are include files called from other scripts.
-- Header script contains:
	Store name and logo
	Links to other three pages (products, map, sales)
  Those three pages call the header and footer scripts.
-- Footer script contains contact info:
  Email link
	Daily hours of operation

Halloran Pathing:
Image files placed in separate directory.
Header, footer, and styles.css files placed in separate directory (library).
-- This library can now be easily copy/pasted to future labs to maintain continuity.


/***********************************************
Notes
/***********************************************

Found this: http://divtable.com/table-styler/
Pretty damn good! Used it for table stylings - which would have taken half an hour of research and another hour of deciding on aesthetics, all done here in seconds.

Template for Cart: http://phppot.com/demo/simple-php-shopping-cart/

Q:
- What do you mean by a sales page? Products on sale, or a cart page?
A:
- Items that are currently on sale.


/***********************************************
Todo
/***********************************************



/***********************************************
Done
/***********************************************

- Add logo to header

*/

?>


<?php include "lib/header.php"; ?>
<link href="lib/styles.css" rel="stylesheet" type="text/css" />


<!DOCTYPE HTML>
<html>
	<body>
    <div name="leftcol" class="leftcol">
    </div>

    <div name="rightcol" class="rightcol">
    </div>

    <div class="mainBody">
      <main id="indexMain"> <!-- Clever naming by Grant! -->
        <h2>Welcome to <i>BTG</i> Auto Shop!</h2> <!-- "Better Than Grant's" -->
        <br/>
        <br/>
        <div class="center">
          <img width="50%" src="images\shopfloor.jpg" alt="Shop Floor">
          <h4>Come see the shop floor!</h4>
        </div>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <h3>Have you seen those guys across the street?*</h3>
        <br/>
        <br/>
        <p>*Their jokes are exhausting.</p>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
      </main>
    </div>
	</body>





</html>

<?php include "lib/footer.php"; ?>





<?php
/***********************************************
Changelog
/***********************************************
20171108 - Added left sidebar experiment; added CSS
20171108 - CSS - Updated to accommade sales, products pages
20171108 - Sales page - updated to follow products page
20171108 - Products page - changed from html table listing to newer product page grid style. Used http://phppot.com/demo/simple-php-shopping-cart/ to get started.
20171108 - Updated footer to float to bottom and float on top of the main page
20171108 - Updated header to include logo
20171106 - Updated header, footer - still need to add logo. Might have Grant make one for me with her mad Photoshop skillz.
20171106 - My Dad's birthday. Added PHP user input form to products page - does NOT presently submit to a cart
20171105 - Updated entire products page - replaced table, gave it headers, added styling to CSS
20171104 - Updated index.php
20171103 - Updated CSS
20171102 - Copied Grant's files to get started



***********************************************/
 ?>
