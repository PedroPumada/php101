<!doctype html>
<html lang="en">
  <head>
    <title>All Together Now 2</title>
  </head>
  <body>
    <p>Create two variables one called $guess and another called $number.</p>
    <?php // Write your else if statement to check if the guess is correct
    $guess = 34;
    $number = 34;
    if ($guess < $number) {
    	echo "Your number is too low!";
    }
    elseif ($guess > $number) {
    	echo "Your number is too high now!";
    } else {
    	echo "You got it right! Your guess is DEAD ON!";
    }
    ?>
  </body>
</html>
