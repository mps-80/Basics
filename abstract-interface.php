<?php
trait Logger {
    public function add_log($msg) {
        echo "[LOG]: $msg \n<br/>";
    }
}

interface Loggable {
    public function log_info();
}

abstract class Vehicle {
    protected $type;

    public function vehicle_type() {
        echo "Vehicle type is $this->type\n<br/>";
    }

    abstract function get_fuel_type();
}

class Car extends Vehicle implements Loggable{
    use Logger;

    public function __construct() {
        $this->type = "car";
    }

    public function get_fuel_type() {
        echo "Fuel type is diseal\n<br/>";
    }

    public function log_info() {
        $this->add_log("Created a new type $this->type");
    }
}

class Bike extends Vehicle implements Loggable{
    use Logger;

    public function __construct() {
        $this->type = "bike";
    }

    public function get_fuel_type() {
        echo "Fuel type is petrol\n<br/>";
    }

    public function log_info() {
        $this->add_log("Created a new type $this->type");
    }
}

$car = new Car();
$car->vehicle_type();
$car->get_fuel_type();
$car->log_info();
echo "<br/>";

$bike = new Bike();
$bike->vehicle_type();
$bike->get_fuel_type();
$bike->log_info();


