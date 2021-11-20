<!DOCTYPE html>
<html>
<body>

<?php
/*
 * VG1: Återskapa föregående Vehicle klass som ett interface (den här gången skriver du "interface Vehicle" och implementera dina Car och Boat klasser utifrån denna.
 * Skapa åtminstone 1 bil och 1 båt (objekt) och gör en forEach loop som loopar igenom dem och skriver ut hastigheten på varje.
 */

/*
 * VG2: Dags att skapa en utility-klass. Skapa en klass SpeedoMeter.
 * Denna har en statisk metod som kan omvandla km/h till knop. 
 * 1 knop är 1.852km/h
 * 
 * Visa hur metoden kan användas utan att initiera ett objekt ifrån klassen.
 */


// Interface definition

interface Vehicle {
  public function makespeed();
}

// Class definitions
class Car implements Vehicle {
  public function makespeed() {
    echo " 160km/h ";
  }
}

class Boat implements Vehicle {
  public function makespeed() {
    echo " 10 knop ";
  }
}


// Create a list of Vehicle
$CAR = new car("BMW", "160km/h", "Car", "black", "2022");
$BOAT = new boat("Sailboat", "10 knop", "Boat", "White", "2020");

$Vehicle  = array("Car"=>"160km/h", "Boat"=>"10 knop");

foreach($Vehicle as $x => $val) {
  echo "$x = $val<br>";


}

class speedometer {
    public static $value=1.852;
    public function staticValue() {
      return self::$value;
    }
  }
  
  $knop = new speedometer();

  echo $knop->staticValue();
  
  echo " knop är lika med 1 km/h ";
  
  ?>

</body>
</html>