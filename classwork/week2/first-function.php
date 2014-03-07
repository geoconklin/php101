<!doctype html>
<html lang="en">
  <head>
    <title>First Function</title>
  </head>
  <body>
    <?php
    // Write a function that RETURNS your name  <-- throwing you a curve ball here
    // Then echo the result of that function

    function writeMyName ()
    {
    	return "George";
    }
    echo writeMyName(); // George

    // ###############################

    function writeMyName1 ()
    {
    	return "George";
    }
    $myNameHere = writeMyName1();
    $partOfNyName = substr($myNameHere, 0, 4);

    echo strtoupper($partOfNyName); // GEOR
    echo strtolower($partOfNyName); // geor




    ?>
  </body>
</html>
