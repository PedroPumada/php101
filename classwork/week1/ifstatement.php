<!doctype html>
<html lang="en">
  <head>
    <title>if statment!</title>
  </head>
  <body>
    <p>Complete the if statement</p>
    <p>
      <?php
        $age =  12;    // Set this to a number greater than 18

        if ($age > 18) {
          echo "You're old enough to vote!";
        } else {
          echo "You are not old enough to vote. I hope you've at least hit puberty.";
        }
      ?>
    </p>
  </body>
</html>
