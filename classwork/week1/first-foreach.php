<!doctype html>
<html lang="en">
  <head>
    <title>Foreach</title>
  </head>
  <body>
    <?php
    // create an array of vegatables and fruits
    // then create an unordered list tag
    // within that tag iterate over the array with a foreach loop and echo out the items in the array in a list item tag
    $myVegFruit = ["Carrot", "Apple"];
    echo "<ul>";

    foreach ($myVegFruit as $foodItems) {
      echo "<li>" . $foodItems . "</li>";
    }

    echo "</ul>";

    ?>
  </body>
</html>
