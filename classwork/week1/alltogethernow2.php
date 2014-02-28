<!doctype html>
<html lang="en">
  <head>
    <title>All Together Now 2</title>
  </head>
  <body>
    <p>Create two variables one called $guess and another called $number.</p>
    <?php // Write your else if statement to check if the guess is correct
    $guess=13;
    $number=10;
    if ($guess < $number) {echo "You guessed too low.";}
    elseif ($guess > $number) {echo "You guess too high.";}
    else {echo "You got it, go play some EVE!";}


    ?>
  </body>
</html>
