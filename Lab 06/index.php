<?php
/*
Logan Halloran
Lab 06

/***********************************************
Instructions:
/***********************************************

Compose a script that creates a multidimensional array of movies organized by genre.
-This should take the form of an associative array with genres as keys, such as Science Fiction, Action, Adventure, and so forth.
-Each of the arrays' elements should be an array containing movie names, such as Alien, Terminator 3, Star Wars, and so on.
-When your arrays are created, loop through them, echoing the name of each genre and its associated movies.
-Create a minimum of three genres with at least three movies each.

Halloran Pathing:
Image files placed in separate directory.
Header, footer, leftcol, rightcol, and styles.css files placed in separate directory (library).
-- This library can now be easily copy/pasted to future labs to maintain continuity.


/***********************************************
Notes
/***********************************************

http://divtable.com/table-styler/

Well, my table CSS is overlapping somewhere (darkTable isn't applying properly), but oh well. The loop works.




/***********************************************
Todo
/***********************************************


/***********************************************
Done
/***********************************************


*/

?>


<?php include "lib/header.php"; ?>
<?php include "lib/leftcol.php"; ?>
<?php include "lib/rightcol.php"; ?>
<?php include "lib/footer.php"; ?>

<link href="lib/styles.css" rel="stylesheet" type="text/css" />


<?php

  $genres = array(
    'Science Fiction' => array('2001: A Space Oddyssey', 'Star Wars IV', 'Sharknado'),
    'Action' => array('James Bond', 'Die Hard', 'The Matrix'),
    'Drama' => array('Titanic', 'Pulp Fiction', 'Blazing Saddles')
  );

/* Test ***
  //Access all genre names
    $gKeys = array_keys($genres);

  //Echo genres
    $echogenre = {
      foreach ($gKeys as $value) {
       echo $value;
      }
    };
*/




 ?>


<!DOCTYPE HTML>
<html>
	<body>
    <table class="darkTable"> <!-- Hmmmmm...... -->
      <?php
        foreach ($genres as $genre => $movies)
        {
          echo "<th>" . $genre . "</th><td>";
          foreach ($movies as $movie)
          {
              echo $movie . "<br/>";
          }
          echo "</td></br>";
        }
        ?>
    </table>
	</body>





</html>






<?php
/***********************************************
Changelog
/***********************************************
20171113 - Submitted.
20171113 - Wrote foreach loop to print out one table header with the $genre, followed by table data with every $movie echoing with a break before moving on to the next header, closing the table data behind it.
20171112 - Wrote array of movies. Put leftcol and rightcol into their own PHP files to include them with one line of code.
20171112 - Started watching Planet Earth: Blue Planet II.
20171111 - Happy Vet's Day, Old Man! Very happy to have you, your wisdom, your friendship, and your kindness and generosity in my life. You've done some incredible good in this world, MAJ. Keep doing what you're doing.



***********************************************/
 ?>
