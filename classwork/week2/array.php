<!doctype html>
<html lang="en">
  <head>
    <title>Array</title>
  </head>
  <body>
    <?php
    // assign your name to a variable
    // explode your name to an array
    // reverse the array and the join it
    $my_name = "Peter Zink";
    echo '<p>' . $my_name . '</p>';
    $name_array = str_split($my_name);
    $name_array = array_reverse($name_array);
    $my_name = implode($name_array);
    echo '<p>' . $my_name . '</p>';
    // create a for loop of that iterates 100 times
    // push the number from the for loop into an array if it is divisible by 2
    // once the loop is complete remove the first and last elements of the array
    // print out the number of elements in the array
    for ($i = 1; $i <= 100; $i++) {
      if ($i % 2 == 0) {
        $numbers[] = $i;
        echo '<p>' . $numbers[(count($numbers) - 1)] . '</p>';       
      } 
    }
    ?>
  </body>
</html>
