<!doctype html>
<html lang="en">
  <head>
    <title>Functions Final</title>
  </head>
  <body>
    <ul>
    <?php
    $fruits = array(
      "apple",
      "banana",
      "orange",
      "kiwi",
      "pear",
      "strawberry",
      "starfruit",
      "mango",
      "watermelon"
    );
    // sort the array
    // iterate over the array of fruits
    // check if each fruit is greater than 5 characters long
    // if it is capitalize the first letter of the fruit
    // print the fruit inside an list item tag inside an unordered list tag
    // if the current index of the array is odd, give the list item a class of odd
    // if the current index of the array is even, give the list item a class of even
    sort($fruits);
    foreach ($fruits as $key => $fruit) {
      if (strlen($fruit) > 5) {
        $fruit = strtoupper(substr($fruit,0,1)) . substr($fruit,1, (strlen($fruit) -1));        
        }
      if ($key % 2 == 0) { // If the current array element is even
        echo '<li class="even">' . $fruit . '</li>' . "\n";
      } else { 
        echo '<li class="odd">' . $fruit . '</li>' . "\n";
      }
    }
    // next get a random item from the array and print it out
    $rand_item = rand(0, (count($fruits) - 1));
    echo 'Random fruit: ' . $fruits[$rand_item] . '.';
    ?>
    </ul>
  </body>
</html>
