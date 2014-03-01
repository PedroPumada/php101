<!doctype html>
<html lang="en">
  <head>
    <title>Switch It!</title>
  </head>
  <body>
  <p>Create a switch statement with 3 different cases and a default case, feel free to use alternative syntax as well!</p>
  <?php
  $name = "Peter";
  switch ($name) {
  	case "Peter":
  		echo "You have the best name!";
  		break;
  	case "Eric":
  		echo "Your name is not bad, but not as good as Peter.";
  		break;
  	case "Bieber":
  		echo "I'm sorry. You have an unfortunate name.";
  		break;
  	default:
  		echo "Your name is unremarkable.";
  		break;
  }
  ?>
  </body>
</html>
