<!doctype html>
<html lang="en">
  <head>
    <title>Math</title>
  </head>
  <body>
    <?php
    // get the length of your full name (first and last)
    // multiply that by M_PI and round it to the third decimal place
    // print out the result
    // then print out the ceiling value of the result

    $lenOfName = strlen("George H Conklin Jr");
    $Exified = $lenOfName * M_PI;
    $Exified = round($Exified, 3);
    echo $Exified; // length of my name times M_PI
    echo "<br>";
    echo ceil($Exified) // same as above but with ceil value



    // Next use your knowledge of strlen(), substr(), and rand() to print a random character from your name


    ?>
  </body>
</html>
