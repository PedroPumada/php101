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
    for ($i=10; $i<=100; $i+=10) {
      echo "<p>".$i . "</p>\n";
      /* alternative:
      if (i % 10 == 0) {
        echo "<p>$i</p>";
      } */
    }
    for ($j=50; $j>=5; $j-=5) {
      echo "<p>".$j."</p>\n";
    }
    $best_boats = array("Cabot", "Bristol", "Morgan");
    foreach ($best_boats as $boat) {
      echo "<p>" . $boat . "</p>\n";
    }
    ?>
  </body>
</html>
