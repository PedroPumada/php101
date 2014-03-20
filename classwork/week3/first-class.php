<!doctype html>
<html lang="en">
  <head>
    <title>First Class</title>
  </head>
  <body>
    <?php
        // Create a class of anything you can think of (make sure its something you are familiar with)
        // Create three properties and threes methods, one to return each property
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
    $agency = new Insurance_Agency;
    echo '<p>' . $agency->display_address() . '</p>';
    echo '<p>' . $agency->display_agency() . '</p>';
    echo '<p>' . $agency->display_principal() . '</p>'; 
    ?>
  </body>
</html>
