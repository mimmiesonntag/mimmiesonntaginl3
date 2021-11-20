<!DOCTYPE html>
<html>
    <body>
        <?php


class Vehicle {

    // attribut
    
    protected $name;
    protected $speed;
    protected $type;
    public $color;
    private $modelyear;
    

    //Construct
    function __construct($name, $speed, $type, $color, $modelyear) {

    $this->name = $name;
    $this->speed = $speed;
    $this->type = $type;
    $this->color = $color;
    $this->modelyear = $modelyear;
    }

    public function intro() {

      echo "The vehicle is {$this->name} and the color is {$this->color} and it goes {$this->speed}.";

   

  }

    function __destruct() {

  }

    //metod
     function get_name() {
    return $this->name;
    }
     function print_name($name) {
    $this->name = $name;
      }
    
    function get_speed() {
    return $this->speed;
    }
     function print_speed() {
        return $this->speed;
        }
        public function changeSpeedTo($speed) {  
        $this->name = $speed;
        }
    
    function get_type() {
    return $this->type;
    }
    function print_type($type) {
    $this->name = $type;
      }
    
    function get_color() {
    return $this->color;
    }
    function set_color($color) {
    $this->name = $color;
      }
    
   function get_modelyear() {
   return $this->modelyear;
   }
   function set_modelyear($modelyear) {
   $this->name = $modelyear;
      }
    }

 class car extends Vehicle {  //ny klass som ärver från klass Vehicle
  
        public function message() {
          echo "new vehicle";
        }
      }
$CAR = new car("BMW", "160km/h", "Car", "black", "2022");
$CAR->message();
echo "<br>";
$CAR->intro();

echo "<br>";
echo "Name: " . $CAR->get_name();
echo "<br>";
echo "speed: " . $CAR->get_speed();
echo "<br>";
echo "type: " . $CAR->get_type();
echo "<br>";
echo "Color: " . $CAR->get_color();
echo "<br>";
echo "Modelyear: " . $CAR->get_modelyear();

echo "<br>";
echo "<br>";

class boat extends Vehicle {  //ny klass som ärver från klass Vehicle
  
    public function message() {
      echo "another vehicle";
    }
  }

$BOAT = new boat("Sailboat", "10 knop", "Boat", "White", "2020");
$BOAT->message();
echo "<br>";
$BOAT->intro();

echo "<br>";
echo "<br>";

echo "Name: " . $BOAT->get_name();
echo "<br>";
echo "Speed: " . $BOAT->get_speed();
echo "<br>";
echo "Type: " . $BOAT->get_type();
echo "<br>";
echo "Color: " . $BOAT->get_color();
echo "<br>";
echo "Modelyear: " . $BOAT->get_modelyear();
echo "<br>";
echo "<br>";

?>