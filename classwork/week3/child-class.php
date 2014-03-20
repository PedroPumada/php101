<!doctype html>
<html lang="en">
  <head>
    <title>Child Class</title>
  </head>
  <body>
    <?php
      // You can use the class you created in first-class.php
      // Create another class that will extend the first class you created
      // Make sure it this extension has some logical value ex. don't have a remote control class extend a horse class
      // Based on your class inheritance, create properties/methods that will override those of the parent class to reflect the child classes difference
      // You may add new properties and methods if you like and it is encouraged
      // Create a new object instance of your child class and call your methods and properties so they print to output
      // Next modify one of the methods that override your parent class
      // To call the parent methed within the child method
      // Pass an argument to that method and have that return and print to the output
    class Insurance_Agency {
      // properties of an agency
      public $address = "123 Willow Dr";
      public $name = "Correll Insurance";
      public $principal = "Peter Zink";
      // methods to display properties
      public function display_address() {
        return $this->address;
      }
      public function display_agency() {
        return $this->name;
      }
      public function display_principal() {
        return $this->principal;
      }
    }
    class Personal_Lines_Agency extends Insurance_Agency {
      public $focus = "Auto Insurance";
      // Personal Lines methods
      public function display_focus() {
        return $this->focus;
      }
    }

    $personal_lines = new Personal_Lines_Agency;
    echo '<p>' . $personal_lines->display_agency() . '</p>';
    echo '<p>' . $personal_lines->display_focus() . '</p>';
    ?>
  </body>
</html>
