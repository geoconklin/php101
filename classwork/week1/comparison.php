<!doctype html>
<html lang="en">
  <head>
    <title>Comparisons!</title>
  </head>
  <body>
    <p>Write a comparison that is true</p>
    <p>
      <?php

        $numberA = 2*2;
        $numberB = 4;
        if ($numberA == $numberB) 
          {
            echo "1. These are the same mathematical value >> ". $numberA . " IS EQUAL TO ". $numberB;
          }
        else 
          {
            echo "1. These values do not have the same mathematical value >> ". $numberA . " IS NOT EQUAL TO ". $numberB;
          }

          echo "<br><br>";

        $numberA = 2;
        $numberB = 2.0;
        if ($numberA == $numberB) // NOT using === but if === was used it would fail becuase === matches value AND type
          {
            echo "2. These are the same mathematical value >> ". $numberA . " IS EQUAL TO ". $numberB;
          }
        else 
          {
            echo "2. These values do not have the same mathematical value >> ". $numberA . " IS NOT EQUAL TO ". $numberB;
          }

      ?>
    </p>
  </body>
</html>
