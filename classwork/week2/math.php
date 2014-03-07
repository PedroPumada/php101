<!doctype html>
<html lang="en">
  <head>
    <title>Math</title>
  </head>
  <body>
    <?php
    // get the length of your full name (first and last)
    $fullName = "Peter Zink";
    $nameLength = strlen($fullName);
    $result = round($nameLength * M_PI, 3);
    echo '<p>' . ceil($result) . '</p>';
    $randChar = rand(0, strlen($fullName));
    echo substr($fullName, $randChar, $randChar);
    // multiply that by M_PI and round it to the third decimal place
    // print out the result
    // then print out the ceiling value of the result

    // Next use your knowledge of strlen(), substr(), and rand() to print a random character from your name
    ?>
  </body>
</html>
