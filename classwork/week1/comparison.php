<!doctype html>
<html lang="en">
  <head>
    <title>Comparisons!</title>
  </head>
  <body>
    <p>Write a comparison that is true</p>
    <form>
    <label>Input:</label><input type="text" name="firstInput"></input>
    
    </form>
    <p>
      <?php
      $myName = "Peter";
      if ($name != "Peter") {
        echo "You have the wrong name! It's not badass enough!";
      } else {
        echo "You have the most awesome name in the world.";
      }
      ?>
    </p>
  </body>
</html>
