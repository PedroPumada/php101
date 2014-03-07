<!doctype html>
<html lang="en">
  <head>
    <title>Your Function</title>
  </head>
  <body>
    <?php
    // Write a function that takes an argument $name that is defaulted to null
    // within the block check if the argument value is null and return No Name Set
    // else return $name as a formatted string "This is your first function $name!"
    $name = "Peter";
    function nullCheck($n) {
      if ($n == NULL) {
        echo "<p>No Name Set</p>";
      } else {
        $r = 'This is your first function ' . $n . '!';
        return $r;
      }
    }

    // write a function that takes an argument and returns the square of that argument
    function squareNum($num) {
      if (is_numeric($num)) {
        $num = $num * $num;
        return $num;
      } else {
        echo "<p>You didn't send a number!</p>";
      }
    }

    echo nullCheck($name);
    echo squareNum(5);
    ?>
  </body>
</html>
