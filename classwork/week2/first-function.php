<!doctype html>
<html lang="en">
  <head>
    <title>First Function</title>
  </head>
  <body>
    <?php
    // Write a function that RETURNS your name  <-- throwing you a curve ball here
    // Then echo the result of that function
    $myName = "Peter";
    function nameReturn($name) {
    	return $name;
    }
    $subName = substr(nameReturn($myName), 0, 2);
    echo strtoupper($subName);
    echo strtolower($subName);
    ?>
  </body>
</html>
