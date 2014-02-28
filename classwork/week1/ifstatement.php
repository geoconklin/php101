<!doctype html>
<html lang="en">
  <head>
    <title>if statment!</title>
  </head>
  <body>
    <p>Complete the if statement</p>
    <p>
      <?php
        $age = 18;     // Set this to a number greater than 18

        
        if ($age >= 21 ) 
          {
            echo "Look, you're old enough to vote and drink. Just don't do both at the same time.";
          }
        elseif ($age >= 18) 
          {
            echo "You're old enough to vote!";
          }
        else
        {
            echo "Oh, gosh! You are too young to vote. Maybe you can play EVE Online instead?";
          }
      ?>
    </p>
  </body>
</html>
