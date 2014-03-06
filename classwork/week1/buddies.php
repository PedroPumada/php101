<!doctype html>
<html lang="en">
  <head>
    <title>Buddies!</title>
  </head>
  <body>
  <p>Create an array called $buddies and put the names of three of your best pals in it.</p>
  <?php
  $buddies = array("Eric Lumsden", "Rick Krenmayer", "Michael Good");
  $buddies[1] = "Jarrett O'Donnell";
  foreach ($buddies as $friend) {
  	echo $friend . "<br />";
  }
  ?>
  </body>
</html>
