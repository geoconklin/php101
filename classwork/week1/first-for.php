<!doctype html>
<html lang="en">
  <head>
    <title>For Syntax</title>
  </head>
  <body>
    <?php
    // write a for loop that echos the numbers 10 to and including 100 counting by 10s
    // next write a for loop that counts down from 50 to 5 counting by 5s
    // build an array with three items, then loop over the array and echo each item

    for ($i = 10; $i < 101; $i += 10) { // do something 
    }
    for ($i = 50; $i > 5; $i -= 5) { // do something 
    }
    
    $myArray = ["Item1", "Item2", "Item3"];
    for ($i = 0; $i < 3; $i++) {
    echo $myArray[$i];
  }

echo "ALTERNATIVE";

    $myArray = ["Item1", "Item2", "Item3"];
    for ($i = 0; $i <= count($myArray); $i++) {
    echo $myArray[$i];
  }

 /*   foreach ($myArray as $newMyArray) {
    echo "Some info goes here > " . $newMyArray;  
    }
*/

    ?>
  </body>
</html>
