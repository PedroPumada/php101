<!doctype html>
<html lang="en">
  <head>
    <title>Foreach</title>
  </head>
  <body>
  <ul>
    <?php
    // create an array of vegatables and fruits
    // then create an unordered list tag
    // within that tag iterate over the array with a foreach loop and echo out the items in the array in a list item tag
    $vegetables_fruits = array("Banana", "Lettuce", "Carrot", "Orange", "Tomato", "Beet", "Apple", "Potato");
    foreach ($vegetables_fruits as $item) {
      echo '<li>' . $item . '</li>';
    }
    ?>
  </ul>
  </body>
</html>
